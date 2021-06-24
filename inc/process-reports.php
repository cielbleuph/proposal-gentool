<?php

    use PhpOffice\PhpWord\PhpWord;
    use PhpOffice\PhpWord\Shared\Converter;

    include "prepend.php";
    include HELPER_DIR . 'helper.php';

    require_once VENDOR_DIR . 'autoload.php';

    $dateHelper = new Helper();
    $dateFormat = 'd F Y';

    if ( isset($_POST) && count($_POST) != 0 && $_SERVER["REQUEST_METHOD"] === "POST" ) {
        var_dump($_POST);
    }
    else {
        exit('Restricted Access');
    }

    