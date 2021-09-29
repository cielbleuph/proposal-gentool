<?php 

    // $projectDescriptionPage->addTitle( 'PROJECT DESCRIPTION', 1); // TOC Bookmark 
    // $projectDescriptionPage->addLine($lineStyle);

    $projectDescriptionPage->addTitle( 'FUNDAMENTALS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Red Team Partners offers a Build Review Assessment, the aim of the assessment is to highlight any vulnerabilities and misconfigurations within the company’s infrastructure. Any vulnerabilities through misconfigured servers or workstations can provide a weakness within the company’s infrastructure. These misconfigured vulnerabilities can allow an external threat or attacker to easily access the company’s domain administrator and fully compromise a corporate network.' );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'BRIEF', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Throughout the assessment, consultants utilise proven methodologies to ensure the application gets a thorough test. This is a mixture of non-invasive testing and more hands testing techniques when required.' );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'This test can be divided into three stages:' );
    $projectDescriptionPage->addListItem( 'Discovery', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Assessment', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Exploitation', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'METHOD', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Red Team Partners offers a Build Review Assessment that combines best practice guidelines and cyber testing. This assessment will contain the following areas that are assessed throughout the build review assessment:' );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addListItem( 'Patch levels, both Operating System and Third-Party Management services', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Trust relationships', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Network shares and permissions', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Local shares and permissions  ', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Password hashing mechanisms', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Group Policy sensitive information', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Antivirus and endpoint protection', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Cached credentials', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Security policy checks Service', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Service Binaries', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'FALLBACKS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Red Team Partners will provide a detailed report at the end of this engagement. Our reports are quality controlled by certified testers. Using the traffic light system (Red=High, Yellow=Medium, Green=Low) your report will highlight any vulnerabilities/risks from this assessment. From the report provided, you will be able to understand any weaknesses that can be exploited and if your system meets expectations for functionality and security. Red Team Partners will also include remediation/comments and suggestions on how to resolve any vulnerabilities/risks found.' );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'Should exploitation successfully permit, Red Team Partners will aim to escalate to the highest of privileges and, with your agreement, continue to leverage this access to penetrate as deep as possible in your network to help portray a realistic attack scenario.' );
    
    $projectDescriptionPage->addPageBreak();


