<?php
class tabel
{
    function TableSchema($color)
    {
        $data = explode(" ", $color);
        echo '<table>';
        echo '<tr>';

        foreach ($data as $key => $value) {
            echo '<td bgcolor="';
            if ($value == 'B') {
                echo 'black';
            } else {
                'white';
            }
            echo '"><font color="';
            if ($value == 'B') {
                echo 'white';
            } else {
                'black';
            }
            echo '">' . $key . '</td>';
        }
        echo '</tr>';

        echo '</table>';
    }
}

$new_table = new tabel;
$warna = "B W W B B W W B B W B B W";
$new_table->TableSchema($warna);
