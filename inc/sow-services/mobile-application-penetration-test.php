<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    // $projectDescriptionPage->addTitle( htmlspecialchars("Mobile Application Penetration Testing"), 2); // TOC Bookmark 
    // $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText( htmlspecialchars("The aim of the Mobile Application Penetration Test is to:") );
    $projectDescriptionPage->addListItem("Understand the vulnerabilities and available exploitation of applications.", 0);
    $projectDescriptionPage->addListItem("Find unauthorized access and sensitive company information to test the security controls.", 0);
    $projectDescriptionPage->addListItem("Understand how a threat group may target the application", 0);
    $projectDescriptionPage->addListItem("A full mobile application assessment will be conducted across the application", 0);
    
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("iOS and Android, focusing on the area surrounding:", $boldText);
    $projectDescriptionPage->addListItem("Fuzzing – Fuzzing assessment on all API calls made by both the iOS and Android RX Live application.", 0);
    $projectDescriptionPage->addListItem("Application Assessment – Attempt to perform standard application techniques such as code injection, information disclosure, and sanitization checks.", 0);
    $projectDescriptionPage->addListItem("Authentication – Checks for applicable authentication bypasses.", 0);
    $projectDescriptionPage->addListItem("Broken Access Control – Provides assessment if the access controls are broken and whether it is possible to gain unauthorised access to the accounts. ", 0);
    $projectDescriptionPage->addListItem("Traffic Manipulation – Attempt to strip SSL/TLS to monitor and manipulate traffic.", 0);


    // $projectDescriptionPage->addImage(ASSETS_IMG_DIR . 'sow/mobile-app-pentest-01.png', 
    //     array(
    //         'width'         => 450,
    //         'marginTop'     => 2,
    //         'marginLeft'    => -100,
    //         'wrappingStyle' => 'inline',
    //         'alignment' => 'center',
    //         'wrapDistanceLeft' => 100
    //     )
    // );


    // $projectDescriptionPage->addImage(ASSETS_IMG_DIR . 'sow/mobile-app-pentest-02.png', 
    //     array(
    //         'width'         => 450,
    //         'marginTop'     => 2,
    //         'marginLeft'    => -100,
    //         'wrappingStyle' => 'inline',
    //         'alignment' => 'center',
    //         'wrapDistanceLeft' => 100
    //     )
    // );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Tools", $boldText);
    $projectDescriptionPage->addText("Red Team Partners uses the most capable tools in the security industry that have proved their efficiency in many pentests. Below is a list of tools that Red Team Partners security team is using:", null, $defaultParagraphStyle);

    $infraTwoColSection = $phpWord->addSection($styleTwoColumn);
    $infraTwoColSection->addListItem("Nmap", 0);
    $infraTwoColSection->addListItem("Nessus", 0);
    $infraTwoColSection->addListItem("Nexpose", 0);
    $infraTwoColSection->addListItem("DNS Recon", 0);
    $infraTwoColSection->addListItem("Burp, BeEF", 0);
    $infraTwoColSection->addListItem("Dig", 0);
    $infraTwoColSection->addListItem("Hydra / John the ripper", 0);
    $infraTwoColSection->addListItem("Third-party exploits", 0);
    $infraTwoColSection->addListItem("Bettercap", 0);
    $infraTwoColSection->addListItem("KALI Linux", 0);
    $infraTwoColSection->addListItem("ZED ATTACK PRO (ZAP)", 0);
    $infraTwoColSection->addListItem("Maltego, w3af, wpscan", 0);
    $infraTwoColSection->addListItem("exploitDB", 0);
    $infraTwoColSection->addListItem("Dirbuster", 0);
    $infraTwoColSection->addListItem("The harvester", 0);
    $infraTwoColSection->addListItem("Archive.org/information gathering/dnsrecon", 0);
    $infraTwoColSection->addListItem("Metasploit", 0);
    $infraTwoColSection->addListItem("Nikto", 0);
    $infraTwoColSection->addListItem("SQLMAP, BBQ SQL, SQLNinja", 0);
    $infraTwoColSection->addListItem("THC Hydra", 0);
    $infraTwoColSection->addListItem("John the ripper", 0);
    $infraTwoColSection->addListItem("XSSer", 0);
    $infraTwoColSection->addListItem("Sparta, Doona", 0);
    // $infraTwoColSection->addListItem("OpenVAS, Armitage, Aircrack, mimikatz", 0);
    

    $projectDescriptionPage = $phpWord->addSection($styleSingleColumn);

    $projectDescriptionPage->addPageBreak();