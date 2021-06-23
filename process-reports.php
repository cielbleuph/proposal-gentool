<?php

    use PhpOffice\PhpWord\PhpWord;
    use PhpOffice\PhpWord\Shared\Converter;

    include('inc/helper/helper.php');

    require_once __DIR__ . '/vendor/autoload.php';

    $dateHelper = new Helper();
    $dateFormat = 'd F Y';

    // var_dump($_POST);