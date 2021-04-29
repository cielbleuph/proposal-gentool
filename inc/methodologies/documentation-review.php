<?php

    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );


    $methodologiesPage->addTitle('Documentation Review', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('RTP will conduct a document review to ensure that Xoserve’s implementation is being completed to specification and with a secure build out in mind.', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('This documentation review will give a comprehensive overview of the security considerations being included in the implementation of the design and build of a solution.', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('RTP Documentation Review will:');
    $methodologiesPage->addTextBreak();


    $methodologyDocumentationReviewTable = $methodologiesPage->addTable(
        array(
            'width' => 5000,
            'unit' => 'pct',
            'borderColor' => 'FFFFFF',
            'cellSpacing' => 5,
            'borderSize'=>1,
            'cellMargin' => 20
        )
    );
    
    $methodologyDocumentationReviewTable->addRow();
    $methodologyDocumentationReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center') );
    $methodologyDocumentationReviewTable->addCell(null, $lightRedCellStyle)->addText('Ensure safe and secure access control is being considered.', null, array('indent'=>0.5));

    $methodologyDocumentationReviewTable->addRow();
    $methodologyDocumentationReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyDocumentationReviewTable->addCell(null, $lightRedCellStyle)->addText('Ensure security best practises are being applied to the solution.', null, array('indent'=>0.5));

    $methodologyDocumentationReviewTable->addRow();
    $methodologyDocumentationReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyDocumentationReviewTable->addCell(null, $lightRedCellStyle)->addText('Ensure suitable logging is being implemented.', null, array('indent'=>0.5));

    $methodologyDocumentationReviewTable->addRow();
    $methodologyDocumentationReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyDocumentationReviewTable->addCell(null, $lightRedCellStyle)->addText('Ensure that sound fundamental security principles are applied.', null, array('indent'=>0.5));


    $methodologiesPage->addTextBreak();