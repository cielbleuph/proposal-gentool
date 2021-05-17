<?php

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
    