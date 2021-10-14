<?php

    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    // $projectDescriptionPage->addTitle('Build Review Assessment', 2); // TOC Bookmark 
    // $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('Red Team Partners offers a Build Review Assessment. It aims to highlight any vulnerabilities and misconfigurations within the company’s infrastructure. Any vulnerabilities through misconfigured servers or workstations can provide a weakness within the company’s infrastructure. These misconfigured vulnerabilities can allow an external threat or attacker to easily access the company’s domain administrator and fully compromise a corporate network.', null, $defaultParagraphStyle);
    
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('Red Team Partners offers a Build Review Assessment that combines best practice guidelines and cyber testing.', null, $defaultParagraphStyle);
    $projectDescriptionPage->addText("This assessment will contain the following areas that are assessed throughout the build review assessment:", null, $defaultParagraphStyle);
    

    // $methodologyBuildReviewTable = $projectDescriptionPage->addTable(
    //     array(
    //         'width' => 5000,
    //         'unit' => 'pct',
    //         'borderColor' => 'FFFFFF',
    //         'cellSpacing' => 5,
    //         'borderSize'=>1,
    //         'cellMargin' => 20
    //     )
    // );
    
    // $methodologyBuildReviewTable->addRow();
    // $methodologyBuildReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center') );
    // $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Patch levels, both Operating System and Third-Party Management Services', null, array('indent'=>0.5));

    // $methodologyBuildReviewTable->addRow();
    // $methodologyBuildReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Trust relationships', null, array('indent'=>0.5));

    // $methodologyBuildReviewTable->addRow();
    // $methodologyBuildReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Network shares and permissions', null, array('indent'=>0.5));

    // $methodologyBuildReviewTable->addRow();
    // $methodologyBuildReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Local shares and permissions', null, array('indent'=>0.5));

    // $methodologyBuildReviewTable->addRow();
    // $methodologyBuildReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Password hashtag mechanisms', null, array('indent'=>0.5));

    // $methodologyBuildReviewTable->addRow();
    // $methodologyBuildReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Group Policy sensitive information', null, array('indent'=>0.5));

    // $methodologyBuildReviewTable->addRow();
    // $methodologyBuildReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Antivirus and endpoint protection', null, array('indent'=>0.5));

    // $methodologyBuildReviewTable->addRow();
    // $methodologyBuildReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Cached credentials', null, array('indent'=>0.5));

    // $methodologyBuildReviewTable->addRow();
    // $methodologyBuildReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Security policy checks service', null, array('indent'=>0.5));

    // $methodologyBuildReviewTable->addRow();
    // $methodologyBuildReviewTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $methodologyBuildReviewTable->addCell(null, $lightRedCellStyle)->addText('Service Binaries', null, array('indent'=>0.5));


    $projectDescriptionPage->addListItem(htmlspecialchars("Patch levels, both Operating System and Third-Party Management Services"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Trust relationships"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Network shares and permissions"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Local shares and permissions"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Password hashing mechanisms"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Group Policy sensitive information"), 0);  
    $projectDescriptionPage->addListItem(htmlspecialchars("Antivirus and endpoint protection"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Cached credentials"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Security policy checks Service"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Service Binaries"), 0);



    $projectDescriptionPage->addTextBreak();