<?php
class Transisi
{
    function FindCharacter($data)
    {
        $arr = array(
            "f", "g", "h", "i",
            "j", "k", "p", "q",
            "r", "s", "t", "u",
        );

        foreach (str_split($data) as $dat) {
            if (in_array($dat, $arr)) {
                echo "$dat . = TRUE</br>";
            } else {
                echo "$dat . = FALSE</br>";
            }
        }
    }
}
$test = new Transisi();
$test->FindCharacter("fghi");
