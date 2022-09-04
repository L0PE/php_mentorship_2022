<?php

namespace App\System\UseCases;

use App\Entity\Text;
use App\Repository\TextRepository;
use App\System\Processor\TextProcessor;
use DateTime;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class GetTextStatisticUseCase
{
    public function __construct(
        private TextRepository $repository,
        private ManagerRegistry $doctrine,
        private SessionInterface $session,
        private string $text
    ) {
    }

    public function handle(Request $request): Text
    {
        $textEntity = $this->repository->findOneByHash(hash("sha512", $this->text));

        if (!is_null($textEntity)) {
            return $textEntity;
        }

        $textEntity = new Text($this->text);
        $textProcessor = new TextProcessor($textEntity);

        $textProcessor->numberOfPalindromes();
        $textProcessor->averageWordsInSentence();
        $textProcessor->averageWordLength();
        $textProcessor->isTextPalindrome();
        $textProcessor->getReversedText();
        $textProcessor->getTextInReversedOrder();
        $textProcessor->topLongestPalindromes();
        $textProcessor->topShortestSentences();
        $textProcessor->topLongestSentences();
        $textProcessor->topShortestWords();
        $textProcessor->topLongestWords();
        $textProcessor->topUsedWord();
        $textProcessor->frequencyOfCharacters();
        $textProcessor->distributionOfCharactersAsPercentage();

        $textEntity->setTakenTime((microtime(true) - $request->server['REQUEST_TIME_FLOAT']) * 100);
        $textEntity->setCreatedAt(new DateTime());

        $entityManager = $this->doctrine->getManager();

        $entityManager->persist($textEntity);
        $entityManager->flush();

        $ids = $this->session->get('ids', []);
        $ids[] = $textEntity->getId();

        $this->session->set('ids', $ids);

        return $textEntity;
    }
}
