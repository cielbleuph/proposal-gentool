<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    $methodologiesPage->addTitle('Mobile Application Penetration Testing', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('The aim of the Penetration Test is to:', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Understand the vulnerabilities and available exploitation of RX Live application;', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Find unauthorized access and sensitive company information test RX Live security controls;', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Understand how a threat group may target RX Live;', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('A full mobile application assessment will be conducted across the RX Live.', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('iOS and Android, focusing on the areas surrounding:', null, $defaultParagraphStyle);

    $mobilePenTestFirstListItemRun = $methodologiesPage->addListItemRun();
    $mobilePenTestFirstListItemRun->addText('Fuzzing', array('bold' => true), null, $defaultParagraphStyle);
    $mobilePenTestFirstListItemRun->addText(' – Fuzzing assessment on all API calls made by both the iOS and Android RX Live application.', null, $defaultParagraphStyle);

    $mobilePenTestSecondListItemRun = $methodologiesPage->addListItemRun();
    $mobilePenTestSecondListItemRun->addText('Application Assessment', array('bold' => true), null, $defaultParagraphStyle);
    $mobilePenTestSecondListItemRun->addText(' – Attempt to perform standard application techniques such as code injection, information disclosure, sanitization checks.', null, $defaultParagraphStyle);
    
    $mobilePenTestThirdListItemRun = $methodologiesPage->addListItemRun();
    $mobilePenTestThirdListItemRun->addText('Authentication', array('bold' => true), null, $defaultParagraphStyle);
    $mobilePenTestThirdListItemRun->addText(' – Checks for authentication bypasses where applicable.', null, $defaultParagraphStyle);

    $mobilePenTestFourthListItemRun = $methodologiesPage->addListItemRun();
    $mobilePenTestFourthListItemRun->addText('Broken Access Control', array('bold' => true), null, $defaultParagraphStyle);
    $mobilePenTestFourthListItemRun->addText(' – Assess if access controls are broken and whether it is possible to gain unauthorised access to accounts. Traffic Manipulation – Attempt to strip SSL/TLS to monitor and manipulate traffic.', null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();