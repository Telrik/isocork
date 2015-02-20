<?php
set_time_limit(60 * 10);
$data = file_get_contents('http://listen.di.fm/public2/');
$data = json_decode($data, true);
foreach ($data as $row) {
    file_put_contents($row['name'] . '.pls', file_get_contents($row['playlist']));
   // echo $row['id'];
}
//playlist
//name