<?php

namespace App\Controller;

use App\Repository\TextRepository;
use App\System\UseCases\Factory\StatisticUseCaseFactory;
use App\System\UseCases\ImportCsvStatisticUseCase;
use App\System\UseCases\ImportXlsxStatisticUseCase;
use App\System\UseCases\ImportXmlStatisticUseCase;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Annotation\Route;

class TextController extends AbstractController
{
    public function __construct(private RequestStack $requestStack)
    {
    }

    #[Route('/', 'home')]
    public function processText(
        Request $request,
        StatisticUseCaseFactory $statisticUseCaseFactory,
        TextRepository $repository
    ): Response {
        $session = $this->requestStack->getSession();

        $useCase = $statisticUseCaseFactory->getUseCase($request, $session);

        if (is_null($useCase)) {
            return $this->render('home.html.twig', [
                'render_text_info' => false,
                'last_actions' => $repository->findLastTen($session->get('ids', []))
            ]);
        }

        $textEntity = $useCase->handle($request);

        return is_null($textEntity) ? new Response(status: 404) : $this->render('home.html.twig', [
            'render_text_info' => true,
            'text' => $textEntity,
            'last_actions' => $repository->findLastTen($session->get('ids', []))
        ]);
    }

    #[Route('/text/{hash}', 'text_by_hash')]
    public function textByHash(Request $request, TextRepository $repository): Response
    {
        $session = $this->requestStack->getSession();

        $textEntity = $repository->findOneByHash($request->get('hash'));

        return is_null($textEntity) ? new Response(status: 404) : $this->render('home.html.twig', [
            'render_text_info' => true,
            'text' => $textEntity,
            'last_actions' => $repository->findLastTen($session->get('ids', []))
        ]);
    }

    #[Route('/export/xlsx/{hash}', 'export_xlsx')]
    public function exportAsXlsx(Request $request, TextRepository $repository)
    {
        $response = new StreamedResponse();
        $response->setCallback(function () use ($request, $repository) {
            $useCase = new ImportXlsxStatisticUseCase($repository);

            $useCase->handle($request->get('hash'));
        });

        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', 'attachment; filename=sample.xlsx');

        return $response->send();
    }

    #[Route('/export/xml/{hash}', 'export_xml')]
    public function exportAsXml(Request $request, TextRepository $repository)
    {
        $useCase = new ImportXmlStatisticUseCase($repository);

        $response = new Response($useCase->handle($request->get('hash')));

        $response->headers->set('Content-type', 'text/xml');
        $response->headers->set('Content-Disposition', 'attachment; filename=sample.xml');

        return $response;
    }

    #[Route('/export/csv/{hash}', 'export_csv')]
    public function exportAsCsv(Request $request, TextRepository $repository)
    {
        $response = new StreamedResponse();
        $response->setCallback(function () use ($request, $repository) {
            $useCase = new ImportCsvStatisticUseCase($repository);

            $useCase->handle($request->get('hash'));
        });

        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', 'attachment; filename=sample.csv');

        return $response->send();
    }

    #[Route('/statistic', 'global_statistic')]
    public function globalStatistic(Request $request, TextRepository $repository)
    {
        $startDate = \DateTime::createFromFormat('Y-m-d', $request->get('start_date'));
        $endDate = \DateTime::createFromFormat('Y-m-d', $request->get('end_date'));

        $statistic = $repository->getGlobalStatistic($startDate, $endDate);

        return $this->render('statistic.html.twig', [
            'statistic' => $statistic,
        ]);
    }
}
