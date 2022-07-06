<?php

namespace PHPBasic\Tests;

use PHPBasic\Processor\TextProcessor;
use \PHPUnit\Framework\TestCase;

class TextProcessorTest extends TestCase
{
    private const TEXT = 'кит на морі романтик';

    private TextProcessor $textProcessor;

    protected function setUp(): void
    {
        $this->textProcessor = new TextProcessor(self::TEXT);
    }

    public function test_number_of_character_returns_expected_value()
    {
        $this->assertSame(20, $this->textProcessor->numberOfCharacter());
    }

    public function test_number_of_words_returns_expected_value()
    {
        $this->assertSame(4, $this->textProcessor->numberOfWords());
    }

    public function test_number_of_sentences_returns_expected_value()
    {
        $this->assertSame(1, $this->textProcessor->numberOfSentences());
    }

    public function test_frequency_of_characters_returns_array()
    {
        $this->assertIsArray($this->textProcessor->frequencyOfCharacters());
    }

    public function test_distribution_of_character_as_percentage_returns_array()
    {
        $this->assertIsArray($this->textProcessor->frequencyOfCharacters());
    }

    public function test_average_word_length_returns_expected_value()
    {
        $this->assertSame(4.25, $this->textProcessor->averageWordLength());
    }

    public function test_average_word_in_sentence_returns_expected_value()
    {
        $this->assertSame(4.0, $this->textProcessor->averageWordsInSentence());
    }

    public function test_top_used_words_returns_expected_value()
    {
        $this->assertSame(mb_split(' ', self::TEXT), $this->textProcessor->topUsedWord());
    }

    public function test_top_longest_words_returns_expected_value()
    {
        $this->assertSame(
            [
                'романтик', 'морі', 'кит', 'на',
            ],
            $this->textProcessor->topLongestWords());
    }

    public function test_top_shortest_words_returns_expected_value()
    {
        $this->assertSame(
            [
                'на', 'кит', 'морі', 'романтик',
            ],
            $this->textProcessor->topShortestWords());
    }

    public function test_top_longest_sentences_returns_expected_value()
    {
        $this->assertSame([self::TEXT], $this->textProcessor->topLongestSentences());
    }

    public function test_top_shortest_sentences_returns_expected_value()
    {
        $this->assertSame([self::TEXT], $this->textProcessor->topShortestSentences());
    }

    public function test_number_of_palindromes_returns_expected_value()
    {
        $this->assertSame(0, $this->textProcessor->numberOfPalindromes());
    }

    public function test_top_longest_palindrome_returns_expected_value()
    {
        $this->assertSame([], $this->textProcessor->topLongestPalindromes());
    }

    public function test_is_text_palindrome_returns_expected_value()
    {
        $this->assertTrue($this->textProcessor->isTextPalindrome());
    }

    public function test_get_reversed_text_returns_expected_value()
    {
        $this->assertSame('китнамор іром ан тик', $this->textProcessor->getReversedText());
    }

    public function test_get_text_reversed_order_returns_expected_value()
    {
        $this->assertSame('романтик морі на кит', $this->textProcessor->getTextInReversedOrder());
    }

}
