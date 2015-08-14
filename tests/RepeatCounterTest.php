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

        function test_MLK_Paragraph()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input_A = "means";
            $input_B = "Being a Negro in America means trying to smile when you want to cry. It means trying to hold on to physical life amid psychological death. It means the pain of watching your children grow up with clouds of inferiority in their mental skies. It means having their legs off, and then being condemned for being a cripple.";

            $result = $test_RepeatCounter->countRepeats($input_A, $input_B);

            $this->AssertEquals(4, $result);
        }

        function test_PamGrier_Paragraph()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input_A = "character";
            $input_B = "That's what he was saying, the civil rights movement - judge me for my character, not how black my skin is, not how yellow my skin is, how short I am, how tall or fat or thin; It's by my character.";

            $result = $test_RepeatCounter->countRepeats($input_A, $input_B);

            $this->AssertEquals(2, $result);
        }

    }


?>
