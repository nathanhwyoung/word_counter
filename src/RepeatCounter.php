<?php

    class RepeatCounter
    {
        function countRepeats($search_word, $search_text)
        {

            //verifies that $search_word is one word
            $word_count = str_word_count($search_word);
            if ($word_count > 1) {
                return "error";
            } else {

                // convert to lower-case
                $lower_search_word = strtolower($search_word);
                $lower_search_text = strtolower($search_text);

                //remove periods and commas
                $strip_search_word = preg_replace('/[.,]/', '', $lower_search_word);
                $strip_search_text = preg_replace('/[.,]/', '', $lower_search_text);


                // convert search text to array
                $array_search_text = explode(" ", $strip_search_text);

                //iterate through array & count instances of search word
                $counter = 0;
                foreach($array_search_text as $word) {
                    if ($word == $strip_search_word) {
                        $counter += 1;
                    }
                } return $counter;

            }

        }
    }

 ?>
