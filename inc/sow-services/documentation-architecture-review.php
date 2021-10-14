<?php

    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );


    // $projectDescriptionPage->addTitle('Documentation/Architecture Review', 2); // TOC Bookmark 
    // $projectDescriptionPage->addTextBreak();
    
    $projectDescriptionPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('RTP will conduct a document review to ensure that the implementation is being completed to specification with a secure build-out in mind.', null, $defaultParagraphStyle);
    
    $projectDescriptionPage->addText('This documentation review will give a comprehensive overview of the security considerations that are included in the implementation of the design and build of a solution.', null, $defaultParagraphStyle);
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('RTP Documentation Review will:', null, $defaultParagraphStyle);
    // $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addListItem("Ensure safe and secure access control is being considered.", 0);
    $projectDescriptionPage->addListItem("Ensure security best practises are being applied to the solution.", 0);
    $projectDescriptionPage->addListItem("Ensure suitable logging is being implemented.", 0);
    $projectDescriptionPage->addListItem("Ensure that sound fundamental security principles are applied.", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Secure architecture reviews take a high-level look at your cloud infrastructure or application design to identify potential security gaps and areas that contain security misconfigurations that can be identified without intrusive testing.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("Secure architecture design is a flexible process that has more than one right answer. The design process helps you make smart decisions now that will save time, money, and effort in the future. It’s much easier to design a system that uses security best practices and follow that design to implement a secure system than to bolt on security after the system is already designed. In addition, choosing the right technologies now can ensure that a security feature request, later on, doesn’t require a full overhaul of the entire platform.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Areas that we focus on during the secure architecture review process include:", $boldText, $defaultParagraphStyle);
    $projectDescriptionPage->addListItem("Secure Development Lifecycle", 0);
    $projectDescriptionPage->addListItem("Authentication", 0 );
    $projectDescriptionPage->addListItem("Access Control", 0);
    $projectDescriptionPage->addListItem("Data Management", 0);
    $projectDescriptionPage->addListItem("Encryption", 0);
    $projectDescriptionPage->addListItem("Error Logging", 0);
    $projectDescriptionPage->addListItem("Component Communication", 0);
    $projectDescriptionPage->addListItem("Business Logic", 0);
    $projectDescriptionPage->addListItem("File Management", 0);
    $projectDescriptionPage->addListItem("Configuration and Hardening", 0);
    $projectDescriptionPage->addListItem("Architecture diagram review and connected services", 0);
    $projectDescriptionPage->addListItem("Verification of secure coding checklist, security plans and policy", 0);
    $projectDescriptionPage->addListItem("We work hand in hand with relevant members of your team to ensure that high-level security goals are identified achieved.", 0);
    $projectDescriptionPage->addListItem("Secure architecture reviews are performed on a variety of systems.");


    // $methodologyDocumentationReviewTable = $projectDescriptionPage->addTable(
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


    $projectDescriptionPage->addPageBreak();