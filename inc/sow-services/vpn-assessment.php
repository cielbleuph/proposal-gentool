<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    // $projectDescriptionPage->addTitle('VPN Assessment', 2); // TOC Bookmark 
    // $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('Virtual Private Networks (VPNs) provide both remote access to corporate networks and provide site-to-site connectivity between offices within an organisation.', null, $defaultParagraphStyle);
    $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addText('Red Team Partners VPN assessment will give a comprehensive overview of the security and integrity of your VPN and will aim to highlight and expose any weak configurations which could be leveraged by a malicious actor.', null, $defaultParagraphStyle);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addListItem("Vendor-specific vulnerabilities such as authentication bypasses, cross-site scripting vulnerabilities, and Man-in-the-Middle (MITM) attacks", 0);
    $projectDescriptionPage->addListItem("Username enumeration", 0);
    $projectDescriptionPage->addListItem("Encryption cypher probing", 0);
    $projectDescriptionPage->addListItem("Certification enumeration", 0);
    $projectDescriptionPage->addListItem("Challenge and response handshake enumeration and probing", 0);
    $projectDescriptionPage->addListItem("Bruteforcing attacks which permitted.", 0);

    $projectDescriptionPage->addPageBreak();

    