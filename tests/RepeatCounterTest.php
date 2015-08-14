<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_singleCharacter()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input_A = "i";
            $input_B = "i";

            $result = $test_RepeatCounter->countRepeats($input_A, $input_B);

            $this->AssertEquals(1, $result);
        }

        function test_singleWord()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input_A = "farm";
            $input_B = "farm";

            $result = $test_RepeatCounter->countRepeats($input_A, $input_B);

            $this->AssertEquals(1, $result);
        }

        function test_JFK_Paragraph()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input_A = "we";
            $input_B = "We are confronted primarily with a moral issue… whether all Americans are
            to be afforded equal rights and equal opportunities, whether we are going to
            treat our fellow Americans as we want to be treated.";

            $result = $test_RepeatCounter->countRepeats($input_A, $input_B);

            $this->AssertEquals(3, $result);
        }

        function test_stripCharacters_PamGrier_Paragraph()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input_A = "character";
            $input_B = "That's what he was saying, the civil rights movement - judge me for my character, not how black my skin is, not how yellow my skin is, how short I am, how tall or fat or thin; It's by my character.";

            $result = $test_RepeatCounter->countRepeats($input_A, $input_B);

            $this->AssertEquals(2, $result);
        }

        function test_multipleWords()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input_A = "hello, goodbye";
            $input_B = "hello, goodbye, hello, goodbye";

            $result = $test_RepeatCounter->countRepeats($input_A, $input_B);

            $this->AssertEquals("error", $result);

        }

    }


?>
