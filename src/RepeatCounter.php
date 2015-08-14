<?php

    class RepeatCounter
    {
        function wordCount($search_word, $search_text)
        {
            // convert to lower-case
            $lower_search_word = strtolower($search_word);
            $lower_search_text = strtolower($search_text);

            // convert search text to array
            $array_search_text = explode(" ", $lower_search_text);

            //iterate through array & count instances of search word
            $counter = 0;
            foreach($array_search_text as $word) {
                if ($word == $lower_search_word) {
                    $counter += 1;
                }
            } return $counter;


        }
    }

 ?>
