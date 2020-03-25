<?php
class Transisi
{
    function CountLower($word)
    {
        $result = strlen(preg_replace('/[^a-z]+/', '', $word));
        return "$word mengandung $result huruf kecil";
    }
}

$test = new Transisi();
echo $test->CountLower("TranSISI");
