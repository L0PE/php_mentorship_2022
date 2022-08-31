<?php

namespace App\Entity;

use App\Repository\TextRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Ignore;

#[ORM\Entity(repositoryClass: TextRepository::class)]
class Text
{
    #[Ignore]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[Ignore]
    #[ORM\Column(name: 'hash', type: 'string', unique: true)]
    private string $hash;

    #[Ignore]
    #[ORM\Column(name: 'text', type: 'text')]
    private string $text;

    #[ORM\Column(name: 'is_palindrome', type: 'boolean',)]
    private bool $is_palindrome;

    #[ORM\Column(name: 'reversed_text', type: 'text')]
    private string $reversed_text;

    #[ORM\Column(name: 'reversed_words', type: 'text')]
    private string $reversed_words;

    #[ORM\Column(name: 'number_of_characters', type: 'integer',)]
    private int $number_of_characters;

    #[ORM\Column(name: 'number_of_words', type: 'integer',)]
    private int $number_of_words;

    #[ORM\Column(name: 'number_of_sentences', type: 'integer',)]
    private int $number_of_sentences;

    #[ORM\Column(name: 'number_of_palindromes', type: 'integer',)]
    private int $number_of_palindromes;

    #[ORM\Column(name: 'average_word_length', type: 'float',)]
    private float $average_word_length;

    #[ORM\Column(name: 'average_number_of_words_in_sentence', type: 'integer',)]
    private int $average_number_of_words_in_sentence;

    #[ORM\Column(name: 'frequency_of_characters', type: 'json',)]
    private array $frequency_of_characters;

    #[ORM\Column(name: 'distribution_of_characters', type: 'json',)]
    private array $distribution_of_characters;

    #[ORM\Column(name: 'most_used_words', type: 'json',)]
    private array $most_used_words;

    #[ORM\Column(name: 'longest_words', type: 'json',)]
    private array $longest_words;

    #[ORM\Column(name: 'shortest_words', type: 'json',)]
    private array $shortest_words;

    #[ORM\Column(name: 'longest_sentences', type: 'json',)]
    private array $longest_sentences;

    #[ORM\Column(name: 'shortest_sentences', type: 'json',)]
    private array $shortest_sentences;

    #[ORM\Column(name: 'longest_palindromes', type: 'json',)]
    private array $longest_palindromes;

    #[ORM\Column(name: 'taken_time', type: 'string')]
    private string $taken_time;

    #[ORM\Column(name: 'created_at', type: 'datetime')]
    private \DateTime $created_at;

    public function __construct(string $text)
    {
        $this->text = $text;

        $this->hash = md5($text);
        $this->number_of_characters = mb_strlen($this->text);
        $this->number_of_words = count($this->getAllWords());
        $this->number_of_sentences = count($this->getSentences());
    }

    #[Ignore]
    public function getSentences(): array
    {
        return preg_split('/[.!?]+\s*/u', $this->text, flags: PREG_SPLIT_NO_EMPTY);
    }

    #[Ignore]
    public function getWordsFromSentence(string $sentence): array
    {
        return $this->getWords($sentence);
    }

    #[Ignore]
    public function getAllWords(): array
    {
        return $this->getWords($this->text);
    }

    #[Ignore]
    private function getWords(string $text): array
    {
        return preg_split('/([,;.!?]*\s)|([,;.!?]+$)+/u', $text, flags: PREG_SPLIT_NO_EMPTY);
    }

    #[Ignore]
    public function getId(): string
    {
        return $this->id;
    }

    #[Ignore]
    public function getHash(): string
    {
        return $this->hash;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function isPalindrome(): bool
    {
        return $this->is_palindrome;
    }

    public function setIsPalindrome(bool $is_palindrome): void
    {
        $this->is_palindrome = $is_palindrome;
    }

    public function getReversedText(): string
    {
        return $this->reversed_text;
    }

    public function setReversedText(string $reversed_text): void
    {
        $this->reversed_text = $reversed_text;
    }

    public function getReversedWords(): string
    {
        return $this->reversed_words;
    }

    public function setReversedWords(string $reversed_words): void
    {
        $this->reversed_words = $reversed_words;
    }

    public function getNumberOfCharacters(): int
    {
        return $this->number_of_characters;
    }

    public function getNumberOfWords(): int
    {
        return $this->number_of_words;
    }

    public function getNumberOfSentences(): int
    {
        return $this->number_of_sentences;
    }

    public function getNumberOfPalindromes(): int
    {
        return $this->number_of_palindromes;
    }

    public function setNumberOfPalindromes(int $number_of_palindromes): void
    {
        $this->number_of_palindromes = $number_of_palindromes;
    }

    public function getAverageWordLength(): int
    {
        return $this->average_word_length;
    }

    public function setAverageWordLength(float $average_word_length): void
    {
        $this->average_word_length = $average_word_length;
    }

    public function getAverageNumberOfWordsInSentence(): int
    {
        return $this->average_number_of_words_in_sentence;
    }

    public function setAverageNumberOfWordsInSentence(int $average_number_of_words_in_sentence): void
    {
        $this->average_number_of_words_in_sentence = $average_number_of_words_in_sentence;
    }

    public function getFrequencyOfCharacters(): array
    {
        return $this->frequency_of_characters;
    }

    public function setFrequencyOfCharacters(array $frequency_of_characters): void
    {
        $this->frequency_of_characters = $frequency_of_characters;
    }

    public function getDistributionOfCharacters(): array
    {
        return $this->distribution_of_characters;
    }

    public function setDistributionOfCharacters(array $distribution_of_characters): void
    {
        $this->distribution_of_characters = $distribution_of_characters;
    }

    public function getMostUsedWords(): array
    {
        return $this->most_used_words;
    }

    public function setMostUsedWords(array $most_used_words): void
    {
        $this->most_used_words = $most_used_words;
    }

    public function getLongestWords(): array
    {
        return $this->longest_words;
    }

    public function setLongestWords(array $longest_words): void
    {
        $this->longest_words = $longest_words;
    }

    public function getShortestWords(): array
    {
        return $this->shortest_words;
    }

    public function setShortestWords(array $shortest_words): void
    {
        $this->shortest_words = $shortest_words;
    }

    public function getLongestSentences(): array
    {
        return $this->longest_sentences;
    }

    public function setLongestSentences(array $longest_sentences): void
    {
        $this->longest_sentences = $longest_sentences;
    }

    public function getShortestSentences(): array
    {
        return $this->shortest_sentences;
    }

    public function setShortestSentences(array $shortest_sentences): void
    {
        $this->shortest_sentences = $shortest_sentences;
    }

    public function getLongestPalindromes(): array
    {
        return $this->longest_palindromes;
    }

    public function setLongestPalindromes(array $longest_palindromes): void
    {
        $this->longest_palindromes = $longest_palindromes;
    }

    public function getTakenTime(): string
    {
        return $this->taken_time;
    }

    public function setTakenTime(string $taken_time): void
    {
        $this->taken_time = $taken_time;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at->format('Y-m-d H:i:s');
    }

    public function setCreatedAt(\DateTime $created_at): void
    {
        $this->created_at = $created_at;
    }
}
