<?php 

    include('inc/helper/helper.php');

    $date_var = '06/23/2021';

    $newDate = new Helper();
    echo $newDate::convertDateToStringFormat($date_var, 'd F Y');