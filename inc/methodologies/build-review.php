<?php

    $DarkRedCellStyle = array(
        'bgColor' => $darkRed
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    $methodologiesPage->addTitle('Build Review', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle);
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Red Team Partners offers a Build Review Assessment that combines best practice guidelines and cyber testing.');
    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Test Areas', $paragraphHeadingStyle);
    $methodologiesPage->addText('This assessment will contain the following areas that are assessed throughout the build review assessment:');
    $methodologiesPage->addTextBreak();

    $methodologyBuildReviewTable = $methodologiesPage->addTable(
        array(
            'width' => 5000,
            'unit' => 'pct',
            'borderColor' => 'FFFFFF',
            'cellSpacing' => 5,
            // 'bgColor'=>'494849',
            'borderSize'=>1,
            'cellMargin' => 100
        )
    );
    
    $methodologyBuildReviewTable->addRow();
    $methodologyBuildReviewTable->addCell(300, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'));
    $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Patch levels, both Operating System and Third-Party Management Services');

    $methodologyBuildReviewTable->addRow();
    $methodologyBuildReviewTable->addCell(300, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'));
    $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Trust relationships');

    $methodologyBuildReviewTable->addRow();
    $methodologyBuildReviewTable->addCell(300, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'));
    $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Network shares and permissions');

    $methodologyBuildReviewTable->addRow();
    $methodologyBuildReviewTable->addCell(300, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'));
    $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Local shares and permissions');

    $methodologyBuildReviewTable->addRow();
    $methodologyBuildReviewTable->addCell(300, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'));
    $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Password hashtag mechanisms');

    $methodologyBuildReviewTable->addRow();
    $methodologyBuildReviewTable->addCell(300, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'));
    $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Group Policy sensitive information');

    $methodologyBuildReviewTable->addRow();
    $methodologyBuildReviewTable->addCell(300, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'));
    $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Antivirus and endpoint protection');

    $methodologyBuildReviewTable->addRow();
    $methodologyBuildReviewTable->addCell(300, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'));
    $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Cached credentials');

    $methodologyBuildReviewTable->addRow();
    $methodologyBuildReviewTable->addCell(300, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'));
    $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Security policy checks service');

    $methodologyBuildReviewTable->addRow();
    $methodologyBuildReviewTable->addCell(300, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'));
    $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Service Binaries');


    $methodologiesPage->addPageBreak();