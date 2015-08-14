<?php

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_singleCharacter()
        {
            $test_RepeatCounter = new RepeatCounter;
            $input_A = "i";
            $input_B = "i";

            $result = $test_RepeatCounter->wordCount($input);

            $this->AssertEquals(1, $result);
        }
    }


?>
