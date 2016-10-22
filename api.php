<?php
    $comid = $_GET['comid'];
    $page = $_GET['page'];
    $url = 'http://ms.csdn.net/api/geek/comms_with_id?SessionId=JVO7H83SNCbLUbEkxRcZ6uwS%2BZEWD%2FluKetEqpIp5QGNiNZB%2BE3rBaxZ4VOPrHazXemI3TWOeXvm7smAvsR2WA%3D%3D&comid='.$comid.'&page='.$page;
    $data = file_get_contents($url);
    echo $_GET['callback'].'('.$data.')'
?>