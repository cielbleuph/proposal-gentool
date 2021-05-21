<?php 
    //############################### PROJECT SCOPE PAGE ###############################    

    $projectScopePage = $phpWord->addSection();
    $projectScopePage->addTitle( 'PROJECT SCOPE', 1); // TOC Bookmark
    $projectScopePage->addLine($lineStyle);   

    $projectScopePage->addTitle( '*** SCOPE of Project Selected ***', 2); // TOC Bookmark 

    $projectScopePage->addPageBreak();

    //############################### END PROJECT SCOPE PAGE ###############################    



    //############################### PROJECT DESCRIPTION PAGE ###############################    

    $projectDescriptionPage = $phpWord->addSection();
    $projectDescriptionPage->addTitle( 'PROJECT DESCRIPTION', 1); // TOC Bookmark 
    $projectDescriptionPage->addLine($lineStyle);

    $projectDescriptionPage->addTitle( 'FUNDAMENTALS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'The role of the Red Team is to provide an attacker-like approach to the organisation, this approach consists of network detection, system vulnerabilities and a physical assessment. The overall aim of the red team is to gain system/network/data access. Organisations wanting to increase their security strategy throughout the year can view the Red Team as a specialist extension of their own IT team.' );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'BRIEF', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Throughout the assessment, consultants utilise proven methodologies to ensure the application gets a thorough test. This is a mixture of non-invasive testing and more hands testing techniques when required.' );

    $projectDescriptionPage->addText( 'This test can be divided into three stages:' );
    $projectDescriptionPage->addListItem( 'Discovery', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Assessment', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Exploitation', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'METHOD', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Virtual Assessment:' );
    $projectDescriptionPage->addListItem('Reconnaissance/OSINT – Crawling of online sources to locate employee names, e-mail format and compile a list of employees for further targeting. – organisation will be providing a list of e-mail addresses here.', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Enumeration – Identification of externally facing assets and basic web application tests such as default password checks.', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Phishing – Targeted Phishing campaigns if access has not already been gained.', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Password Spraying - A brute-force style attack against all identified e-mail addresses to attempt to access e-mail and other sensitive applications', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Redundancy – If Phishing / Physical does not provide network access, organisation will install a network device to allow external access to the Red Team Partners consultants to continue testing.', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Network Mapping – Mapping of organisations internal network to identify key assets and for use in further attacks.', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Persistence – Achieve persistence on the organisations network to access it externally.', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Lateral Movement – Silently move around the organisations network, further identifying key assets and employees.', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Escalation of Privileges – Achieve Domain Administrator permissions within the domain.', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Completion of goals – Achieve pre-set goals, such as; access to customer PII information, access to source code.

    ', 0, $aParagraphStyles);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'FALLBACKS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'If Phishing Attacks are not successful as a point of entry, we would ask the organisation to install a device (Raspberry Pi) at any network port. Red Team Partners will continue working from the pretext that a successful breach has been made. This will allow Red Team Partners to continue the service without wasting time on phishing campaigns.' );
    $projectDescriptionPage->addText( 'Should exploitation successfully permit, Red Team Partners will aim to escalate to the highest of privileges and, with your agreement, continue to leverage this access to penetrate as deep as possible in your network to help portray a realistic attack scenario.' );
    $projectDescriptionPage->addTextBreak();


    //############################### END PROJECT DESCRIPTION PAGE ###############################


