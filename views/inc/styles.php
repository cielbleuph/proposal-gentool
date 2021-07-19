<?php

    use PhpOffice\PhpWord\Shared\Converter;

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

    $lineStyle = array('weight' => 1, 'width' => 445, 'height' => 0, 'color' => '38c172');

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
    
    $styleSingleColumn = array( 'breakType' => 'continuous', 'colsNum' => 1 );
    $styleTwoColumn    = array(
    'breakType' => 'continuous',
    'colsNum'   => 2,
    'colsSpace' => Converter::cmToTwip( 0.5 )
    );