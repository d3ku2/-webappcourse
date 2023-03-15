<?php
$min = rand(0, 59);
if ($min >= 0 && $min <= 15) {
    echo('В первую четверть');
    echo(" ". $min);
}
elseif ($min >= 16 && $min <= 31) {
    echo('Во вторую четверть');
    echo(" ". $min);
}
elseif ($min >= 32 && $min <= 46) {
    echo('В третью четверть');
    echo(" ". $min);
}
elseif ($min >= 47 && $min <= 60) {
    echo('В четвертую четверть');
    echo(" ". $min);
}