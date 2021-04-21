<?php

    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
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
            'borderSize'=>1,
            'cellMargin' => 20
        )
    );
    
    $methodologyBuildReviewTable->addRow();
    $methodologyBuildReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center') );
    $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Patch levels, both Operating System and Third-Party Management Services', null, array('indent'=>0.5));

    $methodologyBuildReviewTable->addRow();
    $methodologyBuildReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Trust relationships', null, array('indent'=>0.5));

    $methodologyBuildReviewTable->addRow();
    $methodologyBuildReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Network shares and permissions', null, array('indent'=>0.5));

    $methodologyBuildReviewTable->addRow();
    $methodologyBuildReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Local shares and permissions', null, array('indent'=>0.5));

    $methodologyBuildReviewTable->addRow();
    $methodologyBuildReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Password hashtag mechanisms', null, array('indent'=>0.5));

    $methodologyBuildReviewTable->addRow();
    $methodologyBuildReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Group Policy sensitive information', null, array('indent'=>0.5));

    $methodologyBuildReviewTable->addRow();
    $methodologyBuildReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Antivirus and endpoint protection', null, array('indent'=>0.5));

    $methodologyBuildReviewTable->addRow();
    $methodologyBuildReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Cached credentials', null, array('indent'=>0.5));

    $methodologyBuildReviewTable->addRow();
    $methodologyBuildReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Security policy checks service', null, array('indent'=>0.5));

    $methodologyBuildReviewTable->addRow();
    $methodologyBuildReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Service Binaries', null, array('indent'=>0.5));


    $methodologiesPage->addPageBreak();