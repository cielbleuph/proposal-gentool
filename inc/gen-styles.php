<?php
    // template colors
    $paletteRed = 'D31439';
    $darkRed = 'C42543';
    $lightRed = 'F5CBD3';
    $redOne = 'C62749';
    $blackDefault = '000000';

    $proximaNovaAltLT = 'Proxima Nova Alt Lt';
    $proximaNova = "Proxima Nova";
    $proximaNovaBl = "Proxima Nova Bl";
    $proximaNovaRg = "Proxima Nova Rg";
    $aileronHeavy = 'Aileron Heavy';
    $aileronLight = 'Aileron Light';

    // ###### STYLES ######
    $titleStyles = array(
        '' => ''
    );

    $boldText = array(
        'bold' => true
    );

    $italicText = array(
        'italic' => true
    );

    $redTextColor = array(
        'color' => 'DE5C5C'
    );
    
    $fontSixteen = array(
        'size' => 16
    );

    $aFontStyles = array(
        'name' => 'Proxima Nova Rg',
        'size' => 16,
        'bold' => true
    );

    $aParagraphStyles = array(
        'spaceAfter' => 0
    );

    try {
        $phpWord->addParagraphStyle(
            'multipleTab',
            array(
                'tabs' => array(
                    new \PhpOffice\PhpWord\Style\Tab('left', 1550),
                    new \PhpOffice\PhpWord\Style\Tab('center', 3200),
                    new \PhpOffice\PhpWord\Style\Tab('right', 5300),
                )
            )
        );
    } catch (\Throwable $th) {
        //throw $th;
    }
    