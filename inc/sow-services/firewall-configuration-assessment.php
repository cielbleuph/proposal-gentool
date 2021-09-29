<?php 

    $projectDescriptionPage->addTitle( 'FUNDAMENTALS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'A poorly configured firewall can allow for trivial network compromise by malicious actors. Red Team Partners firewall assessment will test the integrity of your current firewall rules and implementations to ensure nothing has been overlooked.' );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'Since a firewall is only as secure as the rules that have been set, it is imperative that rulesets are reviewed and audited by a separate party to the original implementer.' );

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
    $projectDescriptionPage->addText( 'Red Team Partners firewall configuration assessment compromises of the following checks:' );
    $projectDescriptionPage->addListItem('Ensure bidirectional filtering is in place (ingress and egress)', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Ensure no inappropriate rules have been implanted, such as to allow a specific employee to insecurely work from home', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Ensure that routing has been correctly implemented to prevent attacks such as VLAN hopping', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Ensure VPN configuration has been correctly implemented', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Ensure adequate logging has been enabled for the device', 0, $aParagraphStyles);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'The firewall configuration review is based on security best practice guidelines.' );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'FALLBACKS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Red Team Partners will provide a detailed report at the end of this engagement. Our reports are quality controlled by certified testers. Using the traffic light system (Red=High, Yellow=Medium, Green=Low) your report will highlight any vulnerabilities/risks from this assessment. From the report provided, you will be able to understand any weaknesses that can be exploited and if your system meets expectations for functionality and security. Red Team Partners will also include remediation/comments and suggestions on how to resolve any vulnerabilities/risks found.' );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'Should exploitation successfully permit, Red Team Partners will aim to escalate to the highest of privileges and, with your agreement, continue to leverage this access to penetrate as deep as possible in your network to help portray a realistic attack scenario.' );
    
    $projectDescriptionPage->addPageBreak();



