<?php

namespace App\Tests\Unity\System\Processor;

use App\Entity\Text;
use App\System\Processor\TextProcessor;
use PHPUnit\Framework\TestCase;

class TextProcessorTest extends TestCase
{
    private Text $textEntityMock;

    private TextProcessor $textProcessor;

    public function setUp(): void
    {
        parent::setUp();

        $this->textEntityMock = $this->createMock(Text::class);
        $this->textProcessor = new TextProcessor($this->textEntityMock);
    }

    public function test_average_word_length(): void
    {
        $this->textEntityMock
            ->expects($this->once())
            ->method('getAllWords')
            ->willReturn(['some', 'text']);

        $this->textEntityMock
            ->expects($this->once())
            ->method('setAverageWordLength')
            ->with(4);

        $this->textProcessor->averageWordLength();
    }

    public function test_average_words_in_sentence(): void
    {
        $this->textEntityMock
            ->expects($this->once())
            ->method('getSentences')
            ->willReturn(['Some text']);

        $this->textEntityMock
            ->expects($this->once())
            ->method('getWordsFromSentence')
            ->with('Some text')
            ->willReturn(['Some', 'text']);

        $this->textEntityMock
            ->expects($this->once())
            ->method('setAverageNumberOfWordsInSentence')
            ->with(2);

        $this->textProcessor->averageWordsInSentence();
    }

    public function test_distribution_of_characters_as_percentage(): void
    {
        $this->textEntityMock
            ->expects($this->once())
            ->method('getNumberOfCharacters')
            ->willReturn(9);

        $this->textEntityMock
            ->expects($this->once())
            ->method('getFrequencyOfCharacters')
            ->willReturn(['a' => 4, 'f' => 5]);

        $this->textEntityMock
            ->expects($this->once())
            ->method('setDistributionOfCharacters')
            ->with(['a' => 44.44, 'f' => 55.56]);

        $this->textProcessor->distributionOfCharactersAsPercentage();
    }

    public function test_frequency_of_characters(): void
    {
        $this->textEntityMock
            ->expects($this->once())
            ->method('getText')
            ->willReturn('Some text');

        $this->textEntityMock
            ->expects($this->once())
            ->method('setFrequencyOfCharacters')
            ->with(['S' => 1, 'o' => 1, 'm' => 1, 'e' => 2, 't' => 2, 'x' => 1, ' ' => 1]);

        $this->textProcessor->frequencyOfCharacters();
    }

    public function test_get_reversed_text(): void
    {
        $this->textEntityMock
            ->expects($this->once())
            ->method('getText')
            ->willReturn('Some text');

        $this->textEntityMock
            ->expects($this->once())
            ->method('setReversedText')
            ->with('txet emoS');

        $this->textProcessor->getReversedText();
    }

    public function test_get_text_in_reversed_order(): void
    {
        $this->textEntityMock
            ->expects($this->once())
            ->method('getText')
            ->willReturn('Some text');

        $this->textEntityMock
            ->expects($this->once())
            ->method('setReversedWords')
            ->with('text Some');

        $this->textProcessor->getTextInReversedOrder();
    }

    public function test_is_text_palindrome(): void
    {
        $this->textEntityMock
            ->expects($this->once())
            ->method('getText')
            ->willReturn('Eva, can I see bees in a cave?');

        $this->textEntityMock
            ->expects($this->once())
            ->method('setIsPalindrome')
            ->with(true);

        $this->textProcessor->isTextPalindrome();
    }

    public function test_number_of_palindromes(): void
    {
        $this->textEntityMock
            ->expects($this->once())
            ->method('getAllWords')
            ->willReturn(['some', 'level', 'text', 'radar']);

        $this->textEntityMock
            ->expects($this->once())
            ->method('setNumberOfPalindromes')
            ->with(2);

        $this->textProcessor->numberOfPalindromes();
    }

    public function test_top_longest_palindromes(): void
    {
        $this->textEntityMock
            ->expects($this->once())
            ->method('getAllWords')
            ->willReturn(['some', 'level', 'text', 'mom']);

        $this->textEntityMock
            ->expects($this->once())
            ->method('setLongestPalindromes')
            ->with(['level', 'mom']);

        $this->textProcessor->topLongestPalindromes();
    }

    public function test_top_longest_sentences(): void
    {
        $this->textEntityMock
            ->expects($this->once())
            ->method('getSentences')
            ->willReturn(['Text', 'Longer Text']);

        $this->textEntityMock
            ->expects($this->once())
            ->method('setLongestSentences')
            ->with(['Longer Text', 'Text']);

        $this->textProcessor->topLongestSentences();
    }

    public function test_top_longest_words(): void
    {
        $this->textEntityMock
            ->expects($this->once())
            ->method('getAllWords')
            ->willReturn(['Lorem', 'ipsum', 'dolor', 'sit', 'amet']);

        $this->textEntityMock
            ->expects($this->once())
            ->method('setLongestWords')
            ->with(['Lorem', 'ipsum', 'dolor', 'amet', 'sit']);

        $this->textProcessor->topLongestWords();
    }

    public function test_top_shortest_sentences(): void
    {
        $this->textEntityMock
            ->expects($this->once())
            ->method('getSentences')
            ->willReturn(['Text', 'Longer Text']);

        $this->textEntityMock
            ->expects($this->once())
            ->method('setShortestSentences')
            ->with(['Text', 'Longer Text']);

        $this->textProcessor->topShortestSentences();
    }

    public function test_top_shortest_words(): void
    {
        $this->textEntityMock
            ->expects($this->once())
            ->method('getAllWords')
            ->willReturn(['Lorem', 'ipsum', 'dolor', 'sit', 'amet']);

        $this->textEntityMock
            ->expects($this->once())
            ->method('setShortestWords')
            ->with(['sit', 'amet', 'Lorem', 'ipsum', 'dolor']);

        $this->textProcessor->topShortestWords();
    }

    public function test_top_used_words(): void
    {
        $this->textEntityMock
            ->expects($this->once())
            ->method('getAllWords')
            ->willReturn(['Lorem', 'sit', 'amet', 'ipsum', 'dolor', 'sit', 'amet', 'sit']);

        $this->textEntityMock
            ->expects($this->once())
            ->method('setMostUsedWords')
            ->with(['sit', 'amet', 'lorem', 'ipsum', 'dolor']);

        $this->textProcessor->topUsedWord();
    }
}