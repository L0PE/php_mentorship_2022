<?php

namespace App\Tests\Unity\Entity;

use App\Entity\Text;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    private Text $textEntity;

    public function setUp(): void
    {
        parent::setUp();

        $this->textEntity = new Text('Some text. Sentence number 2.');
    }

    public function test_get_sentence_return_expected_value(): void
    {
        $sentences = $this->textEntity->getSentences();

        $this->assertIsArray($sentences);
        $this->assertCount(2, $sentences);
        $this->assertSame(['Some text', 'Sentence number 2'], $sentences);
    }

    public function test_get_all_words_return_expected_value(): void
    {
        $words = $this->textEntity->getAllWords();

        $this->assertIsArray($words);
        $this->assertCount(5, $words);
        $this->assertSame(['Some', 'text', 'Sentence', 'number', '2'], $words);
    }

    public function test_get_words_from_sentence_return_expected_value(): void
    {
        $words = $this->textEntity->getWordsFromSentence('Some text');

        $this->assertIsArray($words);
        $this->assertCount(2, $words);
        $this->assertSame(['Some', 'text'], $words);
    }
}