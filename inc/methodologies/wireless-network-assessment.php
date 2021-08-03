<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    $methodologiesPage->addTitle('Wireless Network Assessment', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('Many organisations in the current day and age offer an employee wireless network, often connected to the corporate network. As such, it is imperative that the wireless network has been correctly configured and has had both strong authentication and encryption implemented.', null, $defaultParagraphStyle);
    
    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText("The first area to be tested is the availability of the wireless network which is achieved with scanning tools. Consultants set their wireless cards into promiscuous mode to reveal any 802.11x wireless networks which may have their SSID’s hidden from public view. Many organisations believe hiding the SSID is the only security requirement for wireless networks andthis can sometimes lead to an easy route into the corporate network from an attacking standpoint.", null, $defaultParagraphStyle);

    $methodologiesPage->addText("Once this has been tested, the following areas are assessed:", null, $defaultParagraphStyle);
    
    $methodologiesPage->addListItem("Weak keys/key cracking", 0);
    $methodologiesPage->addListItem("Packet injection", 0);
    $methodologiesPage->addListItem("Employee added rouge access points.", 0);
    $methodologiesPage->addListItem("Fake AP/employee wireless attacks", 0);
    $methodologiesPage->addListItem("Authentication", 0);

    $methodologiesPage->addPageBreak();

    