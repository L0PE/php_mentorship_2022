<?php

namespace App\System\UseCases;

use App\Repository\TextRepository;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

class ImportCsvStatisticUseCase
{
    public function __construct(private TextRepository $repository)
    {
    }

    public function handle(string $hash): void
    {
        $textEntity = $this->repository->findOneByHash($hash);

        if (is_null($textEntity)) {
            return;
        }

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->fromArray(
            [
                $textEntity->getText(),
                $textEntity->getNumberOfCharacters(),
                $textEntity->getNumberOfWords(),
                $textEntity->getNumberOfSentences(),
                json_encode($textEntity->getFrequencyOfCharacters()),
                json_encode($textEntity->getDistributionOfCharacters()),
                $textEntity->getAverageWordLength(),
                $textEntity->getAverageNumberOfWordsInSentence(),
                json_encode($textEntity->getMostUsedWords()),
                json_encode($textEntity->getLongestWords()),
                json_encode($textEntity->getShortestWords()),
                json_encode($textEntity->getLongestSentences()),
                json_encode($textEntity->getShortestSentences()),
                $textEntity->getNumberOfPalindromes(),
                json_encode($textEntity->getLongestPalindromes()),
                $textEntity->isPalindrome(),
                $textEntity->getReversedText(),
                $textEntity->getReversedWords(),
                $textEntity->getTakenTime(),
                $textEntity->getCreatedAt(),
            ]
        );

        $writer = new Csv($spreadsheet);
        $writer->save('php://output');
    }
}
