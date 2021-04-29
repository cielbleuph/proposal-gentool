<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    $methodologiesPage->addTitle('Red Team Assessment', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('The role of the Red Team is to provide an attacker-like approach to the organisation, this approach consists of network detection, system vulnerabilities and a physical assessment. The overall aim of the red team is to gain system/network/data access. Organisations wanting to increase their security strategy throughout the year can view the Red Team as a specialist extension of their own IT team.', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();
    
    $methodologiesPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('Virtual Assessment:', array('underline'=>'single'), $defaultParagraphStyle);

    $redteamAssessmentListItemRunOne = $methodologiesPage->addListItemRun(0, 'multilevel' );
    $redteamAssessmentListItemRunOne->addText('Reconnaissance/OSINT', array('bold' => true), null, $defaultParagraphStyle);
    $redteamAssessmentListItemRunOne->addText(' – Crawling of online sources to locate employee names, e-mail format and compile a list of employees for further targeting. – organisation will be providing a list of e-mail addresses here.', null, $defaultParagraphStyle);

    $redteamAssessmentListItemRunTwo = $methodologiesPage->addListItemRun(0, 'multilevel');
    $redteamAssessmentListItemRunTwo->addText('Enumeration', array('bold' => true), null, $defaultParagraphStyle);
    $redteamAssessmentListItemRunTwo->addText(' – Identification of externally facing assets and basic web application tests such as default password checks.', null, $defaultParagraphStyle);

    $redteamAssessmentListItemRunThree = $methodologiesPage->addListItemRun(0, 'multilevel');
    $redteamAssessmentListItemRunThree->addText('Phishing', array('bold' => true), null, $defaultParagraphStyle);
    $redteamAssessmentListItemRunThree->addText(' – Targeted Phishing campaigns if access has not already been gained.', null, $defaultParagraphStyle);

    $redteamAssessmentListItemRunFour = $methodologiesPage->addListItemRun(0, 'multilevel');
    $redteamAssessmentListItemRunFour->addText('Password Spraying', array('bold' => true), null, $defaultParagraphStyle);
    $redteamAssessmentListItemRunFour->addText(' – A brute-force style attack against all identified e-mail addresses to attempt to access e-mail and other sensitive applications.', null, $defaultParagraphStyle);

    $redteamAssessmentListItemRunFive = $methodologiesPage->addListItemRun(0, 'multilevel');
    $redteamAssessmentListItemRunFive->addText('Redundancy', array('bold' => true), null, $defaultParagraphStyle);
    $redteamAssessmentListItemRunFive->addText(' – If Phishing / Physical does not provide network access, organisation will install a network device to allow external access to the RedTeamPartners consultants to continue testing.', null, $defaultParagraphStyle);

    $redteamAssessmentListItemRunSix = $methodologiesPage->addListItemRun(0, 'multilevel');
    $redteamAssessmentListItemRunSix->addText('Network Mapping', array('bold' => true), null, $defaultParagraphStyle);
    $redteamAssessmentListItemRunSix->addText(' – Mapping of organisations internal network to identify key assets and for use in further attacks.', null, $defaultParagraphStyle);

    $redteamAssessmentListItemRunSeven = $methodologiesPage->addListItemRun(0, 'multilevel');
    $redteamAssessmentListItemRunSeven->addText('Persistence', array('bold' => true), null, $defaultParagraphStyle);
    $redteamAssessmentListItemRunSeven->addText(' – Achieve persistence on the organisations network to access it externally.', null, $defaultParagraphStyle);

    $redteamAssessmentListItemRunEight = $methodologiesPage->addListItemRun(0, 'multilevel');
    $redteamAssessmentListItemRunEight->addText('Lateral Movement', array('bold' => true), null, $defaultParagraphStyle);
    $redteamAssessmentListItemRunEight->addText(' – Silently move around the organisations network, further identifying key assets and employees.', null, $defaultParagraphStyle);

    $redteamAssessmentListItemRunNine = $methodologiesPage->addListItemRun(0, 'multilevel');
    $redteamAssessmentListItemRunNine->addText('Escalation of Privileges', array('bold' => true), null, $defaultParagraphStyle);
    $redteamAssessmentListItemRunNine->addText(' – Achieve Domain Administrator permissions within the domain.', null, $defaultParagraphStyle);

    $redteamAssessmentListItemRunTen = $methodologiesPage->addListItemRun(0, 'multilevel');
    $redteamAssessmentListItemRunTen->addText('Completion of Goals', array('bold' => true), null, $defaultParagraphStyle);
    $redteamAssessmentListItemRunTen->addText(' – Achieve pre-set goals, such as; access to customer PII information, access to source code.', null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Fallbacks', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('If Phishing Attacks are not successful as a point of entry, we would ask the organisation to install a device (Raspberry Pi) at any network port. RedTeamPartners will continue working from the pretext that a successful breach has been made. This will allow RedTeamPartners to continue the service without wasting time on phishing campaigns.', null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();