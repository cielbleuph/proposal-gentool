<?php 

    //############################### PROJECT DESCRIPTION PAGE ###############################    

    $projectDescriptionPage = $phpWord->addSection();
    $projectDescriptionPage->addTitle( 'PROJECT DESCRIPTION', 1); // TOC Bookmark 
    $projectDescriptionPage->addLine($lineStyle);

    $projectDescriptionPage->addTitle( 'FUNDAMENTALS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Red Team Partners offers Infrastructure Penetration Testing, the test asses for vulnerabilities and weaknesses within the organisations network configuration.' );

    $projectDescriptionPage->addText( 'Red Team Partners provides a service that simulates a typically leveraged attack by malicious actors in order to gain full compromise of the internal domain. This assessment provides an insight into an organisation’s security posture.' );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'BRIEF', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Throughout the assessment, consultants utilise proven methodologies to ensure the application gets a thorough test. This is a mixture of non-invasive testing and more hands testing techniques when required.' );

    $projectDescriptionPage->addText( 'This test can be divided into three stages:' );
    $projectDescriptionPage->addListItem( 'Discovery', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Assessment', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Exploitation', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'METHOD', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Red Team Partners utilises a wide range of tools to scan and discover assets. Usually, a target IP range is provided prior to the commencing of testing, albeit some engagements require Red Team Partners to identify ranges in use. Our consultants use the latest scanning tools and techniques to perform a comprehensive audit of all IP ranges. Some of these include:' );
    $projectDescriptionPage->addListItem('TCP and UDP port scanning', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem( htmlspecialchars('Operating system & service fingerprinting'), 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Network mapping', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('User enumeration (where possible)', 0, $aParagraphStyles);
    

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'Once the discovery phase has ended, Red Team Partners consultants interpret the results and use them to identify possible attack vectors and perform manual attack simulations.  Manual assessments focus on:' );
    $projectDescriptionPage->addListItem('Misconfigured hosts and services', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Patch level assessments', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Outdated systems and software', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Insecure protocols', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Weak passwords and default usernames', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('LLMNR and NBNS spoofing', 0, $aParagraphStyles);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'FALLBACKS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Red Team Partners will provide a detailed report at the end of this engagement. Our reports are quality controlled by certified testers. Using the traffic light system (Red=High, Yellow=Medium, Green=Low) your report will highlight any vulnerabilities/risks from this assessment. From the report provided, you will be able to understand any weaknesses that can be exploited and if your system meets expectations for functionality and security. Red Team Partners will also include remediation/comments and suggestions on how to resolve any vulnerabilities/risks found.' );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'Should exploitation successfully permit, Red Team Partners will aim to escalate to the highest of privileges and, with your agreement, continue to leverage this access to penetrate as deep as possible in your network to help portray a realistic attack scenario.' );
    
    $projectDescriptionPage->addPageBreak();

    //############################### END PROJECT DESCRIPTION PAGE ###############################


