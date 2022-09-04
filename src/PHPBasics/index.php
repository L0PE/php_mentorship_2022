<?php

use PHPBasic\Processor\TextProcessor;

require_once '..\vendor\autoload.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Text information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="py-5 text-center">
        <h2>Text information</h2>
        <p class="lead">Get all data about your text. Work with all languages</p>
    </div>
    <div class="row">
        <form method="post" action="">
            <div class="mb-3">
                <label for="text" class="form-label">Text</label>
                <textarea class="form-control" name="text" rows="5" placeholder="Input your text here" id="text"
                          aria-describedby="emailHelp"></textarea>
            </div>
            <button id="submit" name="submit" type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    <?php if (isset($_POST['submit'], $_POST['text']) && !empty(trim($_POST['text']))) :
        $start = microtime(true);
        $textProcessor = new TextProcessor(strip_tags(stripslashes(trim($_POST['text']))));
        ?>
        <div class="row mt-5">
            <h2 class="text-center">Statistic</h2>
            <div class="alert alert-secondary">
                <?= $textProcessor->text ?>
            </div>
            <dl class="row">
                <dt class="col-sm-5">Number of characters:</dt>
                <dd class="col-sm-7"><?= $textProcessor->numberOfCharacter() ?></dd>

                <dt class="col-sm-5">Number of words:</dt>
                <dd class="col-sm-7"><?= $textProcessor->numberOfWords() ?></dd>

                <dt class="col-sm-5">Number of sentences:</dt>
                <dd class="col-sm-7"><?= $textProcessor->numberOfSentences() ?></dd>

                <dt class="col-sm-5 text-truncate">Frequency of characters:</dt>
                <dd class="col-sm-7">
                    <?php
                    foreach ($textProcessor->frequencyOfCharacters() as $character => $frequency) {
                        echo sprintf('<p>%s: %s</p>', $character, $frequency);
                    }
                    ?>
                </dd>

                <dt class="col-sm-5 text-truncate">Distribution of characters as a percentages of total:</dt>
                <dd class="col-sm-7">
                    <?php
                    foreach ($textProcessor->distributionOfCharactersAsPercentage() as $character => $percent) {
                        echo sprintf('<p>%s: %s</p>', $character, $percent);
                    }
                    ?>
                </dd>

                <dt class="col-sm-5">Average Word Length:</dt>
                <dd class="col-sm-7"><?= $textProcessor->averageWordLength() ?></dd>

                <dt class="col-sm-5">The average number of words in a sentence:</dt>
                <dd class="col-sm-7"><?= $textProcessor->averageWordsInSentence() ?></dd>

                <dt class="col-sm-5">Top 10 most used words:</dt>
                <dd class="col-sm-7">
                    <?php
                    foreach ($textProcessor->topUsedWord() as $word) {
                        echo sprintf('<p>%s</p>', $word);
                    }
                    ?>
                </dd>

                <dt class="col-sm-5">Top 10 longest words:</dt>
                <dd class="col-sm-7">
                    <?php
                    foreach ($textProcessor->topLongestWords() as $word) {
                        echo sprintf('<p>%s</p>', $word);
                    }
                    ?>
                </dd>

                <dt class="col-sm-5">Top 10 shortest words:</dt>
                <dd class="col-sm-7">
                    <?php
                    foreach ($textProcessor->topShortestWords() as $word) {
                        echo sprintf('<p>%s</p>', $word);
                    }
                    ?>
                </dd>

                <dt class="col-sm-5">Top 10 longest sentences:</dt>
                <dd class="col-sm-7">
                    <?php
                    foreach ($textProcessor->topLongestSentences() as $sentence) {
                        echo sprintf('<p>%s</p>', $sentence);
                    }
                    ?>
                </dd>

                <dt class="col-sm-5">Top 10 shortest sentences:</dt>
                <dd class="col-sm-7">
                    <?php
                    foreach ($textProcessor->topShortestWords() as $sentence) {
                        echo sprintf('<p>%s</p>', $sentence);
                    }
                    ?>
                </dd>

                <dt class="col-sm-5">Top 10 number of palindrome words:</dt>
                <dd class="col-sm-7"><?= $textProcessor->numberOfPalindromes() ?></dd>

                <dt class="col-sm-5">Top 10 longest palindromes:</dt>
                <dd class="col-sm-7">
                    <?php
                    foreach ($textProcessor->topLongestPalindromes() as $palindrome) {
                        echo sprintf('<p>%s</p>', $palindrome);
                    }
                    ?>
                </dd>

                <dt class="col-sm-5">Is the whole text a palindrome:</dt>
                <dd class="col-sm-7"><?= $textProcessor->isTextPalindrome() ? "yes" : "no" ?></dd>

                <dt class="col-sm-5">The reversed text::</dt>
                <dd class="col-sm-7"><?= $textProcessor->getReversedText() ?></dd>

                <dt class="col-sm-5">The reversed text but the character order in words kept intact</dt>
                <dd class="col-sm-7"><?= $textProcessor->getTextInReversedOrder() ?></dd>

                <dt class="col-sm-5">The time it took to process the text:</dt>
                <dd class="col-sm-7"><?= (microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"]) * 100 ?></dd>

                <dt class="col-sm-5">Date and time when report was generated:</dt>
                <dd class="col-sm-7"><?= date('Y-m-d H:i:s') ?></dd>
            </dl>
        </div>
    <?php endif; ?>
</div>
</body>
</html>
