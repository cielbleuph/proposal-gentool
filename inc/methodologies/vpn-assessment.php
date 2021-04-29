<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    $methodologiesPage->addTitle('Secure Code Review', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('Virtual Private Networks (VPNs) provide both remote access to corporate networks and provide site-to-site connectivity between offices within an organisation.', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Red Team Partners VPN assessment will give a comprehensive overview of the security and integrity of your VPN and will aim to highlight and expose any weak configurations which could be leveraged by a malicious actor.', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();

    
    
    $methodologiesPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('VPN penetration tests are conducted, at least to begin with, blind with no information provided by the client. The first stage of all VPN assessments is fingerprinting to determine the appropriate test cases to be produced: ', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Vendor-specific vulnerabilities such as authentication bypasses, cross-site scripting vulnerabilities and Man-in-the-Middle (MITM) attacks
    Username enumeration
    Encryption cipher probing
    Certification enumeration
    Challenge and response handshake enumeration and probing
    Bruteforcing attacks where permitted
    ', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();
    