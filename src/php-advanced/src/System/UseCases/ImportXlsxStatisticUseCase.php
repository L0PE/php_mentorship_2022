<?php

namespace App\System\UseCases;

use App\Repository\TextRepository;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ImportXlsxStatisticUseCase
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
                [
                    'Text',
                    'Number of characters',
                    'Number of words',
                    'Number of sentence',
                    'Frequency of characters',
                    'Distribution of characters as a percentages of total',
                    'Average Word Length',
                    'The average number of words in a sentence',
                    'Top 10 most used words',
                    'Top 10 longest words',
                    'Top 10 shortest words',
                    'Top 10 longest sentences',
                    'Top 10 shortest sentences',
                    'Number of palindrome words',
                    'Top 10 longest palindromes',
                    'Is the whole text a palindrome',
                    'The reversed text',
                    'The reversed text but the character order in words kept intact',
                    'The time it took to process the text',
                    'Date and time when report was generated',
                ],
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
            ]
        );

        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }
}
