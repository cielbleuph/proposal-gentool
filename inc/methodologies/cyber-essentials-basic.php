<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    $methodologiesPage->addTitle('Cyber Essentials Basic', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText( htmlspecialchars("Cyber Essentials helps prevent the vast majority of cyber-attacks. Even a simple virus or piece of malware could result in loss of company and client data, disrupt your cash flow, and take up staff time. An attack could also dissatisfy your customers, stop you from trading and damaging your hard-earned reputation. It could also be reported in the local media. Loss of data could breach the Data Protection Act and lead to fines or prosecution."), null, $defaultParagraphStyle);

    $methodologiesPage->addText(htmlspecialchars("Having a Cyber Essentials badge will:"), null, $defaultParagraphStyle);
    $methodologiesPage->addListItem( htmlspecialchars("Protect your organisation against common cyber threats"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Show your customers this issue matters to you"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Enable you to bid for Government contracts"), 0);

    $methodologiesPage->addTextBreak();
    
    $methodologiesPage->addText( htmlspecialchars("Test Areas"), $paragraphHeadingStyle, $paragraphHeadingPStyle);

    $methodologiesPage->addText( htmlspecialchars("Step 1: We Identify"), array("bold"=>true, "size"=>14) );

    $methodologiesPage->addText( htmlspecialchars("Scanning for vulnerabilities enables the capability to identify all issues which are not in line with the HMG Cyber Essentials scheme. We use technology to automate the search for weaknesses in your system, so you don’t need any prior technical knowledge."), null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText( htmlspecialchars("Step 2: We Fix"), array("bold"=>true, "size"=>14) );

    $methodologiesPage->addText( htmlspecialchars("Provided with a list of all devices and their respective issues, the admin can either manually attend to each machine or, can fix issues with one click in the dashboard. For admins with limited cyber security know-how the platform is written in plain English, using smart questions. It offers step-by-step guides and live online support. Our technology ensures good security practices stay in place after certification."), null, $defaultParagraphStyle);


    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText( htmlspecialchars("Step 3: We Certify"), array("bold"=>true, "size"=>14) );

    $methodologiesPage->addText( htmlspecialchars("Being secure is only one side of the coin. It is equally important to demonstrate to clients, suppliers and partners, that data protection is a serious matter, and they are in safe hands. It can result in instilling trust and limit liability in case of a breach. You also receive an official Cyber Essentials badge to use online and a physical certificate."), null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Results', $paragraphHeadingStyle, $paragraphHeadingPStyle);

    $methodologiesPage->addText( htmlspecialchars("Cyber Essentials helps prevent the vast majority of cyber-data threats. It is not a one-off exercise but an on-going process. Security standards threats change continuously; for that reason, the software is ideally kept passively running in the background, which allows us to provide you with real-time threat information and security updates. All our offers include one year of on-going support, £25K of free cyber security insurance, and an online support chat. Additional protection and proactive personal support are available upon request."), null, $defaultParagraphStyle);

    $methodologiesPage->addPageBreak();