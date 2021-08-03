<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    $methodologiesPage->addTitle('VPN Assessment', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('Virtual Private Networks (VPNs) provide both remote access to corporate networks and provide site-to-site connectivity between offices within an organisation.', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Red Team Partners VPN assessment will give a comprehensive overview of the security and integrity of your VPN and will aim to highlight and expose any weak configurations which could be leveraged by a malicious actor.', null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addListItem("Vendor-specific vulnerabilities such as authentication bypasses, cross-site scripting vulnerabilities, and Man-in-the-Middle (MITM) attacks", 0);
    $methodologiesPage->addListItem("Username enumeration", 0);
    $methodologiesPage->addListItem("Encryption cypher probing", 0);
    $methodologiesPage->addListItem("Certification enumeration", 0);
    $methodologiesPage->addListItem("Challenge and response handshake enumeration and probing", 0);
    $methodologiesPage->addListItem("Bruteforcing attacks which permitted.", 0);

    $methodologiesPage->addPageBreak();

    