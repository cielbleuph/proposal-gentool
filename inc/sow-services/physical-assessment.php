<?php 

    // $projectDescriptionPage->addTitle( 'PROJECT DESCRIPTION', 1); // TOC Bookmark 
    // $projectDescriptionPage->addLine($lineStyle);

    $projectDescriptionPage->addTitle( 'FUNDAMENTALS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Red Team Partners offers a Physical/Social Engineering Assessment, this assessment includes attempting to infiltrate a company’s headquarters or a working establishment.' );

    $projectDescriptionPage->addText( 'Hacking an organisation is much easier if someone can gain access into your facility. Red Team Partners will work with you to outline your goals from this assessment, these goals can be established by the company’s appetite for risk and physical concerns of the business. Organisations who require this service will have access to the whole building, floor of a building or multiple locations. Red Team Partners include in this service the understanding of risks from social engineering.' );

    $projectDescriptionPage->addText( 'If a successful venue of attack is identified, Red Team Partners will work with you to conduct safe exploitation (where possible) and verification of the issue whilst ensuring there are no disruptions to the daily running of your organisation.' );

    $projectDescriptionPage->addText('All exploitation is conducted under the agreed rules of the engagement.');

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'BRIEF', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Throughout the assessment, consultants utilise proven methodologies to ensure the application gets a thorough test. This is a mixture of non-invasive testing and more hands testing techniques when required.' );

    $projectDescriptionPage->addText( 'This test can be divided into three stages:' );
    $projectDescriptionPage->addListItem( 'Discovery', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Assessment', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Exploitation', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'METHOD', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Included in the Physical Assessment:' );
    $projectDescriptionPage->addListItem('Surveillance - attempt to gather information about specific people in the company using surveillance techniques', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Social Security Controls Tests – Red Team Partners will attempt to gain access to the building by bypassing security controls such as guards and receptionists', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Network Assessment- Red Team Partners will break in and connect to the network. Companies can then understand the vulnerabilities and see what RTP can access through the break-in', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('USB Dropping – Red Team Partners will load USB devices with ‘malware’ (would be a safe piece of code that shows us how the device was used)', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Wireless Testing – This is an attempt to gain access to the corporate network from any wireless access points belonging to the company', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Network Device Drop –Red Team Partners will drop/ connect a preconfigured device that connects back to', 0, $aParagraphStyles);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'FALLBACKS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Red Team Partners will provide a detailed report at the end of this engagement, our reports are quality controlled by certified testers. Using the traffic light system (Red=High, Yellow=Medium, Green=Low) your report will highlight any security flaws, gaps and deficiencies in your security systems and procedures from your Physical Assessment. From the report provided you will be able to understand any vulnerabilities that can be exploited and if your Physical system meets expectations for functionality and security. Red Team Partners will also include remediation/ comments and suggestions on how to resolve any vulnerabilities/ risks found. Also allowing you to improve the safety and security of your facility.' );
    $projectDescriptionPage->addTextBreak();



