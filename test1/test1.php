<?php

function readWords($file) {
    $data = file_get_contents($file);
    preg_match_all('#[^ \n]+#', $data, $m);
    return $m[0];
}

 $val = readWords($argv[1]);
 $inp = readWords($argv[2]);

 $res = array_map("readWords", $val, $inp);
 print_r($res);

