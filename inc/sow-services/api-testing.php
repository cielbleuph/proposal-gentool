<?php 
    
    //############################### PROJECT DESCRIPTION PAGE ###############################    

    $projectDescriptionPage = $phpWord->addSection();
    $projectDescriptionPage->addTitle( 'PROJECT DESCRIPTION', 1); // TOC Bookmark 
    $projectDescriptionPage->addLine($lineStyle);

    $projectDescriptionPage->addTitle( 'FUNDAMENTALS', 2, array('color'=>'DE5C5C')); // TOC Bookmark 
    $projectDescriptionPage->addText(' Red Team Partners will conduct a full security assessment on your API’s, this assessment can be provided as an onsite or remote service. The purpose of this assessment is to highlight any vulnerabilities which can exploit the API, this includes SQL Injections, Cross-site Scripting, Denial of Service, Predictable Resource Location, Unintentional Information Disclosure and Brute Force Attack. Performing these mock attacks will exploit the availability, integrity and confidentially of the service(s) and any data contained within.' );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'BRIEF', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Throughout the assessment, consultants utilise proven methodologies to ensure the application gets a thorough test. This is a mixture of non-invasive testing and more hands testing techniques when required.' );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'A web application assessment can be divided into three stages: ' );
    $projectDescriptionPage->addListItem( 'Discovery', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Assessment', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Exploitation', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'METHOD', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Red Team Partners will conduct a full in-depth API assessment service to ensure the configuration and recommended best practises have been followed to minimise risks for the organisation. This assessment will highlight any risks and vulnerabilities that are seen as below best practise. Red Team Partners uses a variety of checks, below are the most common performed (This may vary dependent on technologies).' );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'Authentication:', array_merge( $boldText, $italicText ) );
    $projectDescriptionPage->addListItem( 'Attempt to bypass authentication', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Ascertain the account lockout policy', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Assess the use of generic error messages', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'Input Manipulation:', array_merge( $boldText, $italicText ) );
    $projectDescriptionPage->addListItem( 'Inject malicious commands into SOAP messages', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Attempt to exploit server-side includes', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Check data validation', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Utilize long character strings to uncover buffer overflow vulnerabilities', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Identify limitations of any possible payloads', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'Session Management:', array_merge( $boldText, $italicText ) );
    $projectDescriptionPage->addListItem( 'Confirm user-session is cancelled upon logout', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Ensure session ID’s are not predictable', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Attempt request relaying attacks', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Check if a session timeout is enforced', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'Service Vulnerabilities:', array_merge( $boldText, $italicText ) );
    $projectDescriptionPage->addListItem( 'Identify any transport security weaknesses including weak cipher configuration', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Highlight any XML based attack vectors', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Examine SOAP messages for information disclosure vulnerabilities', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addTextBreak();


    $projectDescriptionPage->addTitle( 'FALLBACKS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Red Team Partners will provide a detailed report at the end of the engagement, our reports are quality controlled by certified testers. Using the traffic light system (Red=High, Yellow=Medium, Green=Low) your report will highlight any vulnerabilities/risks from this assessment. From the report provided, you will be able to understand any weaknesses that can be exploited and if your system meets expectations for functionality and security. Red Team Partners will also include remediation/comments and suggestions on how to resolve any vulnerabilities/risks found.' );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'Should exploitation successfully permit, Red Team Partners will aim to escalate to the highest of privileges and, with your agreement, continue to leverage this access to penetrate as deep as possible in your network to help portray a realistic attack scenario.' );
    
    $projectDescriptionPage->addPageBreak();

    //############################### END PROJECT DESCRIPTION PAGE ###############################