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
    $projectDescriptionPage->addText( 'Phishing is one of the most common paths to compromise utilised by attackers in real-world attacks. A phishing assessment aims to highlight weak security controls and susceptible employees to target for further in-depth phishing awareness training. ' );

    $projectDescriptionPage->addText( 'Prior to the engagement starting, Red Team Partners work with you to agree an appropriate scope; including phishing templates and scenarios. In some cases, you may have a specific list of employees who you’d like to be targeted (spear phishing); whilst in other cases the attempt will be a ‘smash and grab’ attack, covering entire departments or whole organisations. ' );

    $projectDescriptionPage->addText( 'Once agreed, Red Team Partners will attempt to register a visually similar domain to your own to maximize the success of the engagement.' );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'BRIEF', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Throughout the assessment, consultants utilise proven methodologies to ensure the application gets a thorough test. This is a mixture of non-invasive testing and more hands testing techniques when required.' );

    $projectDescriptionPage->addText( 'This test can be divided into three stages:' );
    $projectDescriptionPage->addListItem( 'Discovery', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Assessment', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Exploitation', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'METHOD', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'The following areas are assessed throughout the Phishing Assessment:' );
    $projectDescriptionPage->addListItem('Susceptibility of employees', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Number of credentials/malicious documents opened', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Number of e-mails open', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Number of replies to the malicious e-mail', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Reporting processes in place', 0, $aParagraphStyles);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'FALLBACKS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Upon a successful phishing test, an employee can be redirected to the legitimate login page to evaluate if the attempt is reported or employees can be redirected to phishing awareness training.' );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'At the end of this engagement, our reports are quality controlled by certified testers. Using the traffic light system (Red=High, Yellow=Medium, Green=Low) your report will highlight any security flaws, gaps and deficiencies in your security systems and procedures from your Phishing Assessment. From the report provided you will be able to understand any vulnerabilities that can be exploited and if your Phishing Assessment meets expectations for functionality and security. Red Team Partners will also include remediation/ comments and suggestions on how to resolve any vulnerabilities/risks found. Also allowing you to improve the safety and security of your facility.' );
    
    $projectDescriptionPage->addPageBreak();

    //############################### END PROJECT DESCRIPTION PAGE ###############################


