<?php

namespace App\System\Processor;

use App\Entity\Text;

class TextProcessor
{
    public function __construct(public Text $text)
    {
    }

    public function averageWordLength(): void
    {
        $words = $this->getArrayWithLength($this->text->getAllWords());

        $this->text->setAverageWordLength(round(array_sum($words) / count($words), 2));
    }

    public function averageWordsInSentence(): void
    {
        $sentences = $this->text->getSentences();

        array_walk($sentences, function (&$sentence) {
            $sentence = count($this->text->getWordsFromSentence($sentence));
        });

        $this->text->setAverageNumberOfWordsInSentence(
            round(array_sum($sentences) / count($sentences), 2)
        );
    }

    public function distributionOfCharactersAsPercentage(): void
    {
        $length = $this->text->getNumberOfCharacters();
        $characters = $this->text->getfrequencyOfCharacters();

        array_walk($characters, function (&$charCount) use ($length) {
            $charCount = round($charCount * 100 / $length, 2);
        });

        $this->text->setDistributionOfCharacters($characters);
    }

    public function frequencyOfCharacters(): void
    {
        $frequencyOfCharacters = array_count_values(mb_str_split($this->text->getText()));
        ksort($frequencyOfCharacters);

        $this->text->setFrequencyOfCharacters($frequencyOfCharacters);
    }

    public function getReversedText(): void
    {
        $this->text->setReversedText($this->getReversedString($this->text->getText()));
    }

    public function getTextInReversedOrder(): void
    {
        $this->text->setReversedWords(
            implode(' ', array_reverse(mb_split(' ', $this->text->getText())))
        );
    }

    public function isTextPalindrome(): void
    {
        $text = mb_strtolower(preg_replace('/[\s.,!;?]/', '', $this->text->getText()));

        $this->text->setIsPalindrome($text === $this->getReversedString($text));
    }

    public function numberOfPalindromes(): void
    {
        $this->text->setNumberOfPalindromes(count($this->getPalindromes()));
    }

    public function topLongestPalindromes(): void
    {
        $palindromes = $this->getArrayWithLength($this->getPalindromes());

        arsort($palindromes);

        $this->text->setLongestPalindromes(array_keys(array_slice($palindromes, 0, 10)));
    }

    public function topLongestSentences(): void
    {
        $sentences = $this->getArrayWithLength($this->text->getSentences());

        arsort($sentences);

        $this->text->setLongestSentences(array_keys(array_slice($sentences, 0, 10)));
    }

    public function topLongestWords(): void
    {
        $words = $this->getArrayWithLength($this->text->getAllWords());

        arsort($words);

        $this->text->setLongestWords(array_keys(array_slice($words, 0, 10)));
    }

    public function topShortestSentences(): void
    {
        $sentences = $this->getArrayWithLength($this->text->getSentences());

        asort($sentences);

        $this->text->setShortestSentences(array_keys(array_slice($sentences, 0, 10)));
    }

    public function topShortestWords(): void
    {
        $words = $this->getArrayWithLength($this->text->getAllWords());

        asort($words);

        $this->text->setShortestWords(array_keys(array_slice($words, 0, 10)));
    }

    public function topUsedWord(): void
    {
        $words = $this->text->getAllWords();
        array_walk($words, function (&$word) {
            $word = mb_strtolower($word);
        });

        $worldUsages = array_count_values($words);
        arsort($worldUsages);

        $this->text->setMostUsedWords(array_keys(array_slice($worldUsages, 0, 10)));
    }

    /**
     * @param string[] $array
     * @return array<string, int>
     */
    private function getArrayWithLength(array $array): array
    {
        $flippedUniqueArray = array_flip(array_unique($array));

        array_walk($flippedUniqueArray, function (&$value, $key) {
            $value = mb_strlen($key);
        });

        return $flippedUniqueArray;
    }

    /**
     * @return string[]
     */
    private function getPalindromes(): array
    {
        $words = $this->text->getAllWords();

        array_walk($words, function (&$word) {
            $word = mb_strtolower($word);
        });

        return array_filter($words, function ($word) {
            return mb_strtolower($word) === mb_strtolower($this->getReversedString($word));
        });
    }

    private function getReversedString(string $text): string
    {
        $chars = mb_str_split($text);

        return implode(array_reverse($chars));
    }
}
