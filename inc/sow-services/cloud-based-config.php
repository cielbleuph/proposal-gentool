<?php 

    $projectDescriptionPage->addTitle( 'PROJECT DESCRIPTION', 1); // TOC Bookmark 
    $projectDescriptionPage->addLine($lineStyle);

    $projectDescriptionPage->addTitle( 'FUNDAMENTALS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Red Team Partners offers a Cloud Based Configuration Review. Many organisations today make use of cloud-based tools for the provision of email and productivity tools. Red Team Partners provided a service to ensure that the correct security controls have been configured. Cloud security and configuration assessments provide a comprehensive overview of both the security and availability of the cloud- based tenant.' );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'If a successful venue of attack is identified, Red Team Partners will work with you to conduct safe exploitation (where possible) and verification of the issue whilst ensuring there are no disruptions to the daily running of your organisation. All exploitation is conducted under the agreed rules of the engagement.' );

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
    $projectDescriptionPage->addText( 'Red Team Partners offers a Cloud Based Configuration that combines best practice guidelines and cyber testing.' );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'Red Team Partners Cloud Based Configuration Review compromises of the following checks:' );
    $projectDescriptionPage->addTextBreak();



    $projectDescriptionPage->addListItem( 'Ensure access controls are in place for individual users.  ', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Ensure that logging features have been enabled.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Ensure password strength factors are implemented with sane settings.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Ensure that multi factor authentication is offered.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Best practise review of specific implementations such as OFS, Intune, AWS, etc. etc.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'FALLBACKS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Red Team Partners will provide a detailed report at the end of this engagement. Our reports are quality controlled by certified testers. Using the traffic light system (Red=High, Yellow=Medium, Green=Low) your report will highlight any vulnerabilities/risks from this assessment. From the report provided, you will be able to understand any weaknesses that can be exploited and if your system meets expectations for functionality and security. Red Team Partners will also include remediation/comments and suggestions on how to resolve any vulnerabilities/risks found.' );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'Should exploitation successfully permit, Red Team Partners will aim to escalate to the highest of privileges and, with your agreement, continue to leverage this access to penetrate as deep as possible in your network to help portray a realistic attack scenario.' );
    
    $projectDescriptionPage->addPageBreak();




