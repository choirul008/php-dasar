<?php

$nilai = "A";

switch ($nilai) {
    case "A":
        echo "Anda Lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak Lulus" . PHP_EOL;
        break;
    default:
    echo "Mungkin Anda salah jurusan" . PHP_EOL;
}


switch ($nilai):
    case "A":
        echo "Anda Lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak Lulus" . PHP_EOL;
        break;
    default:
    echo "Mungkin Anda salah jurusan" . PHP_EOL;
endswitch;