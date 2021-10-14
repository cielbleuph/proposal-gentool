<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    // $projectDescriptionPage->addTitle('Wireless Network Assessment', 2); // TOC Bookmark 
    // $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('Many organisations in the current day and age offer an employee wireless network, often connected to the corporate network. As such, it is imperative that the wireless network has been correctly configured and has had both strong authentication and encryption implemented.', null, $defaultParagraphStyle);
    
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText("The first area to be tested is the availability of the wireless network which is achieved with scanning tools. Consultants set their wireless cards into promiscuous mode to reveal any 802.11x wireless networks which may have their SSID’s hidden from public view. Many organisations believe hiding the SSID is the only security requirement for wireless networks and this can sometimes lead to an easy route into the corporate network from an attacking standpoint.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("Once this has been tested, the following areas are assessed:", null, $defaultParagraphStyle);
    
    $projectDescriptionPage->addListItem("Weak keys/key cracking", 0);
    $projectDescriptionPage->addListItem("Packet injection", 0);
    $projectDescriptionPage->addListItem("Employee added rouge access points.", 0);
    $projectDescriptionPage->addListItem("Fake AP/employee wireless attacks", 0);
    $projectDescriptionPage->addListItem("Authentication", 0);

    $projectDescriptionPage->addPageBreak();

    