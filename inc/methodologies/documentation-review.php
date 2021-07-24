<?php

    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );


    $methodologiesPage->addTitle('Documentation/Architecture Review', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('RTP will conduct a document review to ensure that the implementation is being completed to specification with a secure build-out in mind.', null, $defaultParagraphStyle);
    
    $methodologiesPage->addText('This documentation review will give a comprehensive overview of the security considerations that are included in the implementation of the design and build of a solution.', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('RTP Documentation Review will:', null, $defaultParagraphStyle);
    // $methodologiesPage->addTextBreak();
    $methodologiesPage->addListItem("Ensure safe and secure access control is being considered.", 0);
    $methodologiesPage->addListItem("Ensure security best practises are being applied to the solution.", 0);
    $methodologiesPage->addListItem("Ensure suitable logging is being implemented.", 0);
    $methodologiesPage->addListItem("Ensure that sound fundamental security principles are applied.", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Secure architecture reviews take a high-level look at your cloud infrastructure or application design to identify potential security gaps and areas that contain security misconfigurations that can be identified without intrusive testing.", null, $defaultParagraphStyle);

    $methodologiesPage->addText("Secure architecture design is a flexible process that has more than one right answer. The design process helps you make smart decisions now that will save time, money, and effort in the future. It’s much easier to design a system that uses security best practices and follow that design to implement a secure system than to bolt on security after the system is already designed. In addition, choosing the right technologies now can ensure that a security feature request, later on, doesn’t require a full overhaul of the entire platform.", null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Areas that we focus on during the secure architecture review process include:", $boldText, $defaultParagraphStyle);
    $methodologiesPage->addListItem("Secure Development Lifecycle", 0);
    $methodologiesPage->addListItem("Authentication", 0 );
    $methodologiesPage->addListItem("Access Control", 0);
    $methodologiesPage->addListItem("Data Management", 0);
    $methodologiesPage->addListItem("Encryption", 0);
    $methodologiesPage->addListItem("Error Logging", 0);
    $methodologiesPage->addListItem("Component Communication", 0);
    $methodologiesPage->addListItem("Business Logic", 0);
    $methodologiesPage->addListItem("File Management", 0);
    $methodologiesPage->addListItem("Configuration and Hardening", 0);
    $methodologiesPage->addListItem("Architecture diagram review and connected services", 0);
    $methodologiesPage->addListItem("Verification of secure coding checklist, security plans and policy", 0);
    $methodologiesPage->addListItem("We work hand in hand with relevant members of your team to ensure that high-level security goals are identified achieved.", 0);
    $methodologiesPage->addListItem("Secure architecture reviews are performed on a variety of systems.");


    // $methodologyDocumentationReviewTable = $methodologiesPage->addTable(
    //     array(
    //         'width' => 5000,
    //         'unit' => 'pct',
    //         'borderColor' => 'FFFFFF',
    //         'cellSpacing' => 5,
    //         'borderSize'=>1,
    //         'cellMargin' => 20
    //     )
    // );
    
    // $methodologyDocumentationReviewTable->addRow();
    // $methodologyDocumentationReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center') );
    // $methodologyDocumentationReviewTable->addCell(null, $lightRedCellStyle)->addText('Ensure safe and secure access control is being considered.', null, array('indent'=>0.5));

    // $methodologyDocumentationReviewTable->addRow();
    // $methodologyDocumentationReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $methodologyDocumentationReviewTable->addCell(null, $lightRedCellStyle)->addText('Ensure security best practises are being applied to the solution.', null, array('indent'=>0.5));

    // $methodologyDocumentationReviewTable->addRow();
    // $methodologyDocumentationReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $methodologyDocumentationReviewTable->addCell(null, $lightRedCellStyle)->addText('Ensure suitable logging is being implemented.', null, array('indent'=>0.5));

    // $methodologyDocumentationReviewTable->addRow();
    // $methodologyDocumentationReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $methodologyDocumentationReviewTable->addCell(null, $lightRedCellStyle)->addText('Ensure that sound fundamental security principles are applied.', null, array('indent'=>0.5));


    $methodologiesPage->addPageBreak();