<?php

    use PhpOffice\PhpWord\PhpWord;
    use PhpOffice\PhpWord\Shared\Converter;

    include "prepend.php";
    include HELPER_DIR . 'helper.php';

    require_once VENDOR_DIR . 'autoload.php';

    $dateHelper = new Helper();
    $dateFormat = 'd F Y';


    var_dump($_POST);

    