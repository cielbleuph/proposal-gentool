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
    $methodologiesPage->addText('The role of the Red Team is to provide an attacker-like approach to the organisation, this approach consists of network detection and system vulnerabilities. The overall aim of the red team is to gain system/network/data access. Organisations wanting to increase their security strategy throughout the year can view the Red Team as a specialist extension of their own IT team.', null, $defaultParagraphStyle);
    
    $methodologiesPage->addText("During red team exercises, our security experts will launch a realistic attempt to exploit your environment to gain access to systems that would enable us to impact the critical functions necessary for your operations.  This simulated attack is carried out in a controlled manner to ensure that your operations are not adversely affected, while still providing valuable information regarding gaps in your preventive or detective controls that could allow an adversary to harm your organization.  The attacks utilize real-world adversary tactics, techniques, and procedures (TTPs) that represent a genuine threat to the critical functions of your organization.", null, $defaultParagraphStyle);

    $methodologiesPage->addText("The attack scenarios will recognize that a dedicated adversary would leverage a broad targeting profile to gain a foothold within the organization.  From this broad attack surface, additional focused attacks on critical functions will be launched in accordance with predefined rules of engagement.  The goal of each attack scenario will be to achieve a level of compromise that could then be leveraged by an attacker to impact the associated critical function.", null, $defaultParagraphStyle);

    $methodologiesPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('Virtual Assessment:', null, $defaultParagraphStyle);

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
    $redteamAssessmentListItemRunFive->addText(' – If Phishing / Physical does not provide network access, organisation will install a network device to allow external access to the Red Team Partners consultants to continue testing.', null, $defaultParagraphStyle);

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

    $methodologiesPage->addText('Methodology', $paragraphHeadingStyle, $paragraphHeadingPStyle);

    $methodologiesPage->addList("Red Team Partners will use open-source intelligence tools to collect and identify a target profile of your organisation.", 0);

    $methodologiesPage->addList("We will conduct social engineering attacks against your employees to elicit further targeting information including company credentials.", 0);

    $methodologiesPage->addList("Based on available threat intelligence gathered, Red Team Partners will devise a series of attack scenarios against the critical functions and key data to simulate real-world threats to your organisation", 0);

    $methodologiesPage->addList("Red Team Partners will conduct an offensive campaign against the identified critical functions of your organisation to gain a foothold within the organisation.", 0);

    $methodologiesPage->addList("We will be continuing to focus attacks on critical functions to achieve a level of compromise that could then be leveraged by an attacker to impact the associated critical function.", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("These exercises proved a valuable insight into improving the visibility and capability of your network defenders.  At the end of each adversary emulation, our team will work with yours to ensure that all attack techniques leveraged against your organization are clearly explained, evidence that may have been left behind is identified, and suggestions for improving controls to prevent or detect similar attacks in the future are provided.", null, $defaultParagraphStyle);

    $methodologiesPage->addText("Critical functions include the people, process, and technology underpinning the ongoing successful operation of your organization, and threats to any of these functions could negatively impact your operations.  Based on available threat intelligence, our team will devise a series of attack scenarios against your critical functions.  Since a real-world adversary could employ illegal or unethical methods not available to our team, and since the time and effort allocated to this phase of the test will be fixed, this portion of the assessment is conducted in a gray box manner to ensure the completeness of the results.", null, $defaultParagraphStyle);

    $methodologiesPage->addText("The attacks will be conducted without detailed coordination with your network defenders to ensure that an accurate picture of your organization’s ability to prevent or detect targeted attacks is achieved.  To minimize disruption to your operations, senior management members of your organization will be notified of the details of the attacks, including the timing of the attacks, in accordance with a predefined risk management plan.", null, $defaultParagraphStyle);

    $methodologiesPage->addPageBreak();