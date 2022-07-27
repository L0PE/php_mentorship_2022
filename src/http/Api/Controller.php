<?php

namespace Http\Api;

use Symfony\Component\HttpFoundation\HeaderUtils;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Controller
{
    public static function hello(Request $request): JsonResponse
    {
        return new JsonResponse([
            'message' => sprintf('Hello %s', $request->query->get('name', 'stranger!'))
        ]);
    }

    public static function statusCodes(): JsonResponse
    {
        $code = array_rand(Response::$statusTexts);

        return new JsonResponse(
            [
                'data' => [
                    'code' => $code,
                    'message' => Response::$statusTexts[$code]
                ]
            ]
        );
    }

    public static function export(string $data): Response
    {
        $response = new Response($data);

        $disposition = HeaderUtils::makeDisposition(
            HeaderUtils::DISPOSITION_ATTACHMENT,
            'file.pdf'
        );

        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }

    public static function notFound(): JsonResponse
    {
        return (new JsonResponse())
            ->setStatusCode(404);
    }

    public static function redirect(): RedirectResponse
    {
        return new RedirectResponse('https://symfony.com/doc/current/components/http_foundation.html');
    }
}