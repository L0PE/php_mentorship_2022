<?php

namespace PHPBasic\Processor;

class TextProcessor
{
    public function __construct(public string $text)
    {
    }

    public function averageWordLength(): float
    {
        $words = $this->getArrayWithLength($this->getWords($this->text));

        return round(array_sum($words) / count($words), 2);
    }

    public function averageWordsInSentence(): float
    {
        $sentences = $this->getSentences();

        array_walk($sentences, function (&$sentence) {
            $sentence = count($this->getWords($sentence));
        });

        return round(array_sum($sentences) / count($sentences), 2);
    }

    /**
     * @return array<string, float>
     */
    public function distributionOfCharactersAsPercentage(): array
    {
        $length = $this->numberOfCharacter();
        $characters = $this->frequencyOfCharacters();

        array_walk($characters, function (&$charCount) use ($length) {
            $charCount = round($charCount * 100 / $length, 2);
        });

        return $characters;
    }

    public function numberOfCharacter(): int
    {
        return mb_strlen($this->text);
    }


    /**
     * @return array<string, int>
     */
    public function frequencyOfCharacters(): array
    {
        $frequencyOfCharacters = array_count_values(mb_str_split($this->text));
        ksort($frequencyOfCharacters);

        return $frequencyOfCharacters;
    }

    public function getReversedText(): string
    {
        return $this->getReversedString($this->text);
    }

    public function getTextInReversedOrder(): string
    {
        return implode(' ', array_reverse(mb_split(' ', $this->text)));
    }

    public function isTextPalindrome(): bool
    {
        $text = mb_strtolower(preg_replace('/[\s.,!;?]/', '', $this->text));

        return $text === $this->getReversedString($text);
    }

    public function numberOfPalindromes(): int
    {
        return count($this->getPalindromes());
    }

    public function numberOfSentences(): int
    {
        return count($this->getSentences());
    }

    public function numberOfWords(): int
    {
        return count($this->getWords($this->text));
    }

    /**
     * @return array<int, string>
     */
    public function topLongestPalindromes(): array
    {
        $palindromes = $this->getArrayWithLength($this->getPalindromes());

        arsort($palindromes);

        return array_keys(array_slice($palindromes, 0, 10));
    }

    /**
     * @return array<int, string>
     */
    public function topLongestSentences(): array
    {
        $sentences = $this->getArrayWithLength($this->getSentences());

        arsort($sentences);

        return array_keys(array_slice($sentences, 0, 10));
    }

    /**
     * @return array<int, string>
     */
    public function topLongestWords(): array
    {
        $words = $this->getArrayWithLength($this->getWords($this->text));

        arsort($words);

        return array_keys(array_slice($words, 0, 10));
    }

    /**
     * @return array<int, string>
     */
    public function topShortestSentences(): array
    {
        $sentences = $this->getArrayWithLength($this->getSentences());

        asort($sentences);

        return array_keys(array_slice($sentences, 0, 10));
    }

    /**
     * @return array<int, string>
     */
    public function topShortestWords(): array
    {
        $words = $this->getArrayWithLength($this->getWords($this->text));

        asort($words);

        return array_keys(array_slice($words, 0, 10));
    }

    /**
     * @return array<int, string>
     */
    public function topUsedWord(): array
    {
        $words = $this->getWords($this->text);
        array_walk($words, function (&$word) {
            $word = mb_strtolower($word);
        });

        $worldUsages = array_count_values($words);
        arsort($worldUsages);

        return array_keys(array_slice($worldUsages, 0, 10));
    }

    /**
     * @param array<int, string> $array
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
     * @return array<int, string>
     */
    private function getPalindromes(): array
    {
        $words = $this->getWords($this->text);

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

    /**
     * @return array<int, string>
     */
    private function getSentences(): array
    {
        return preg_split('/[.!?]+\s*/u', $this->text, flags: PREG_SPLIT_NO_EMPTY);
    }

    /**
     * @return array<int, string>
     */
    private function getWords(string $text): array
    {
        return preg_split('/([,;.!?]*\s)|([,;.!?]+$)+/u', $text, flags: PREG_SPLIT_NO_EMPTY);
    }
}
