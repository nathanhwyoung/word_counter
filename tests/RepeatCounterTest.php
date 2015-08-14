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
    }


?>
