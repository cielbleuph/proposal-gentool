<?php


    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    // $paragraphHeadingPStyle['align']='both';
    // var_dump($paragraphHeadingPStyle);

    // die();

    $methodologiesPage->addTitle('O365 Penetration Testing', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle );
    $methodologiesPage->addText( htmlspecialchars('Office 365 services are accessible from the internet (by default, use Conditional Access to restrict access) which makes them attractive to attackers. Attackers leverage several attack methods against Azure AD & Office 365.') , null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();

    $methodologiesPage->addImage('assets/images/methodologies/O365-pentest-01.png', 
        array(
            'width'         => 450,
            'marginTop'     => 2,
            'marginLeft'    => -100,
            'wrappingStyle' => 'inline',
            'alignment' => 'center',
            'wrapDistanceLeft' => 100
        )
    );

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText( 'Account Enumeration', array( 'bold' => true ) );
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText( htmlspecialchars('Azure Active Directory users can enumerate all user accounts & admin group membership with access to Office 365 services (the internet by default). User enumeration often possible without an account using O365creeper which attempts to authenticate to O365 using a list of email addresses. Based on the response code, the tool determines if the email address is a valid user account (or not).') );
    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText( 'Password Spraying', array( 'bold' => true ) );
    $methodologiesPage->addText( 'Password spraying is interesting because it’s automated password guessing. This automated password guessing against all users typically avoids account lockout since the logon attempts with a specific password are performed against every user and not one specific one which is what account lockout was designed to defeat. The attacker starts with a list of passwords they’re going to try which starts with the most likely passwords (“Fall2017”, “Winter2018”, etc.).' );
    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText( htmlspecialchars('Account token Theft & Reuse'), array( 'bold' => true ) );
    $methodologiesPage->addText( 'Since cloud authentication typically results in a token stored in the authenticated app or web browser, this is the proof of authentication and could be reused. The web browser typically stores this auth token as a cookie. If this data is stolen, an attacker could leverage this to spoof access and configure persistence for continued access.' );
    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Other security tasks that will be performed');
    $methodologiesPage->addListItem('Security configuration review and penetration testing of Microsoft Teams, AD Federation services, MS Intune (MDM and MAM), Microsoft CASB etc.');
    $methodologiesPage->addListItem('Comprehensive security assessment to cover all aspects of the Office365 environment, including unauthorized access, information disclosure, data theft and leakage.', 0);
    $methodologiesPage->addListItem('Configurations reviews will include all industry best practices, which ensures Confidentiality, Integrity and Availability.', 0 );
    $methodologiesPage->addListItem('Comprehensive architecture review of the MS Teams platform, ensuring it has been setup as per industry and Microsoft security best practices.', 0 );
    $methodologiesPage->addListItem('Vulnerability assessment of all the assets including underlying OS and components. Ensure all components are at latest patch level and no outstanding critical missing patches.', 0 );
    $methodologiesPage->addListItem('Review the access control and authentication mechanism deployed, identify any issues/gaps in the authentication mechanism.', 0 );
    $methodologiesPage->addListItem('Identify all integration points with various systems which are used for access management, administration etc.', 0);
    $methodologiesPage->addListItem('Comprehensive granular auditing, if monitoring and logging is configured', 0);

    $methodologiesPage->addTextBreak();