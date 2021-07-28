<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    $methodologiesPage->addTitle( htmlspecialchars("Mobile Application Penetration Testing"), 2); // TOC Bookmark 
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText( htmlspecialchars("The aim of the Mobile Application Penetration Test is to:") );
    $methodologiesPage->addListItem("Understand the vulnerabilities and available exploitation of applications.", 0);
    $methodologiesPage->addListItem("Find unauthorized access and sensitive company information to test the security controls.", 0);
    $methodologiesPage->addListItem("Understand how a threat group may target the application", 0);
    $methodologiesPage->addListItem("A full mobile application assessment will be conducted across the application", 0);
    
    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("iOS and Android, focusing on the area surrounding:", $boldText);
    $methodologiesPage->addListItem("Fuzzing – Fuzzing assessment on all API calls made by both the iOS and Android RX Live application.", 0);
    $methodologiesPage->addListItem("Application Assessment – Attempt to perform standard application techniques such as code injection, information disclosure, and sanitization checks.", 0);
    $methodologiesPage->addListItem("Authentication – Checks for applicable authentication bypasses.", 0);
    $methodologiesPage->addListItem("Broken Access Control – Provides assessment if the access controls are broken and whether it is possible to gain unauthorised access to the accounts. ", 0);
    $methodologiesPage->addListItem("Traffic Manipulation – Attempt to strip SSL/TLS to monitor and manipulate traffic.", 0);


    // $methodologiesPage->addImage(ASSETS_IMG_DIR . 'sow/mobile-app-pentest-01.png', 
    //     array(
    //         'width'         => 450,
    //         'marginTop'     => 2,
    //         'marginLeft'    => -100,
    //         'wrappingStyle' => 'inline',
    //         'alignment' => 'center',
    //         'wrapDistanceLeft' => 100
    //     )
    // );


    // $methodologiesPage->addImage(ASSETS_IMG_DIR . 'sow/mobile-app-pentest-02.png', 
    //     array(
    //         'width'         => 450,
    //         'marginTop'     => 2,
    //         'marginLeft'    => -100,
    //         'wrappingStyle' => 'inline',
    //         'alignment' => 'center',
    //         'wrapDistanceLeft' => 100
    //     )
    // );

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Tools", $boldText);
    $methodologiesPage->addText("Red Team Partners uses the most capable tools in the security industry that have proved their efficiency in many pentests. Below is a list of tools that Red Team Partners security team is using:", null, $defaultParagraphStyle);

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
    

    $methodologiesPage = $phpWord->addSection($styleSingleColumn);

    $methodologiesPage->addPageBreak();