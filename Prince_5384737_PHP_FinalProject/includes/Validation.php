<?php
    session_start();

    $connection = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($connection, 'Classified_Ads_db');

?>