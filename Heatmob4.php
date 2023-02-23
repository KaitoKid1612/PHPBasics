<?php
$s='viet';
# Array containing possible lines
$d=array(
    0 => '   ',
    1 => ' _ ',
    2 => '| |',
    3 => '|_ ',
    4 => '|_|',
    5 => ' _|',
    6 => '  |',
    7 => '|  '
);

# Array mapping characters to 3 lines
$m=array(
    0 => '124', # i.e. The character '0' is represented by $d[1], $d[2] and $d[4]
    1 => '066',
    2 => '153',
    3 => '155',
    4 => '046',
    5 => '135',
    6 => '134',
    7 => '166',
    8 => '144',
    9 => '145',
    a => '142',
    b => '034',
    c => '173',
    d => '054',
    e => '133',
    f => '137',
);

# traverse $s and append to array $r
foreach (str_split(strtolower($s)) as $c) {
    $r[0].=$d[$m[$c][0]];
    $r[1].=$d[$m[$c][1]];
    $r[2].=$d[$m[$c][2]];
}

# echo $r
echo implode("\n",$r);
?>