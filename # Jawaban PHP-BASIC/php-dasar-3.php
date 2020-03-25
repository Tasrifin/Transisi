<?php
class Transisi
{
    function SetUnigram($data)
    {
        $datax = explode(' ', $data);
        $unigram = implode(", ", $datax);
        $bigram = array();
        $trigram = array();
        $lenght = count($datax);
        $a = 0;
        $b = 1;
        $a1 = 0;
        $b2 = 1;
        $c3 = 2;

        echo "Unigram = $unigram</br>";
        echo "Bigram = ";
        for ($i = 0; $i < $lenght - 2; $i++) {
            $bigram[$i] = $datax[$a] . " " . $datax[$b]  . ",";
            $a++;
            $b++;
            echo "$bigram[$i]";
        }
        echo "</br>Trigram = ";
        for ($i = 0; $i < $lenght - 2; $i++) {
            $trigram[$i] = $datax[$a1] . " " . $datax[$b2] . " " . $datax[$c3] . ",";
            $a1++;
            $b2++;
            $c3++;
            echo "$trigram[$i]";
        }
    }
}
$test = new Transisi();
$test->SetUnigram("Jakarta adalah ibukota negara Republik Indonesia");
