<?php 

    $projectDescriptionPage->addTitle( 'PROJECT DESCRIPTION', 1); // TOC Bookmark 
    $projectDescriptionPage->addLine($lineStyle);

    $projectDescriptionPage->addTitle( 'FUNDAMENTALS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Virtual Private Networks (VPNs) provide both remote access to corporate networks and provide site-to-site connectivity between offices within an organisation.' );

    $projectDescriptionPage->addText( 'Red Team Partners VPN assessment will give a comprehensive overview of the security and integrity of your VPN and will aim to highlight and expose any weak configurations which could be leveraged by a malicious actor.' );


    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'BRIEF', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Throughout the assessment, consultants utilise proven methodologies to ensure the application gets a thorough test. This is a mixture of non-invasive testing and more hands testing techniques when required.' );

    $projectDescriptionPage->addText( 'This test can be divided into three stages:' );
    $projectDescriptionPage->addListItem( 'Discovery', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Assessment', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Exploitation', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'METHOD', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'VPN penetration tests are conducted, at least to begin with, blind with no information provided by the client. The first stage of all VPN assessments is fingerprinting to determine the appropriate test cases to be produced: ' );
    $projectDescriptionPage->addListItem('Vendor-specific vulnerabilities such as authentication bypasses, cross-site scripting vulnerabilities and Man-in-the-Middle (MITM) attacks', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Username enumeration', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Encryption cipher probing', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Certification enumeration', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Challenge and response handshake enumeration and probing', 0,  $aParagraphStyles);
    $projectDescriptionPage->addListItem('Brute forcing attacks where permitted', 0,  $aParagraphStyles);

    $projectDescriptionPage->addText('The Virtualisation security and configuration review is based on security best practice guidelines.');

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'FALLBACKS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Red Team Partners will provide a detailed report at the end of VPN Assessment. Our reports are quality controlled by certified testers. Using the traffic light system (Red=High, Yellow=Medium, Green=Low) your report will highlight any vulnerabilities/risks from your VPN Assessment. From the report provided, you will be able to understand any weaknesses that can be exploited and if your VPN Assessment meets expectations for functionality and security. Red Team Partners will also include remediation/comments and suggestions on how to resolve any vulnerabilities/risks found.' );
    $projectDescriptionPage->addText( 'Should exploitation successfully permit, Red Team Partners will aim to escalate to the highest of privileges and, with your agreement, continue to leverage this access to penetrate as deep as possible in your network to help portray a realistic attack scenario.' );
    $projectDescriptionPage->addTextBreak();



