<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    // $projectDescriptionPage->addTitle('IoT Penetration Testing', 2); // TOC Bookmark 
    // $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('Red Team Partners offers Hardware Penetration Testing. It is also known as IoT Pen Testing or the Internet of Things. It is the physical network connecting to electronics, software, sensors, and network connectivity that is used for gathering and exchanging data. Examples of these are electronic devices, mobile phones, computers, medical tools, vehicles, buildings, and other objects.', null, $defaultParagraphStyle);
    
    $projectDescriptionPage->addText("In-depth Penetration Testing of the IoT devices. Security tests will be comprised of the following, but not limited to:", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("Firmware Reverse Engineering", $boldText);
    $projectDescriptionPage->addListItem("Reverse engineering firmware binaries", 0);
    $projectDescriptionPage->addListItem("Binary exploitation", 0);
    $projectDescriptionPage->addListItem("Encryption analysis", 0);
    $projectDescriptionPage->addListItem("Bypass obfuscation techniques in use", 0);
    $projectDescriptionPage->addListItem("Debugging binaries to gain sensitive info.", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Hardware-based exploitation", $boldText);
    $projectDescriptionPage->addListItem("Exfiltration of Sensitive data from memory: applications store username, tokens, passwords, encryption keys, unscripted sensitive data", 0);
    $projectDescriptionPage->addListItem("UART, JTAG, SWD ports exploitation, CAN, WLAN, USB, and D-Bus interfaces", 0);
    $projectDescriptionPage->addListItem("Flash memory chips to detect a possibility to dump the firmware.", 0);
    $projectDescriptionPage->addListItem("Logic bugs sniffing and bus tampering.", 0);
    $projectDescriptionPage->addListItem("External peripheral devices: headphones, antennas", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Server-side Testing (if the case)", $boldText);
    $projectDescriptionPage->addListItem("Identify potential for denial of service (DOS) attacks.", 0);
    $projectDescriptionPage->addListItem("Vulnerabilities specific: Command injection, Remote code execution, Sensitive file exposure, misconfiguration exploitation", 0);
    $projectDescriptionPage->addListItem("Service testing", 0);
    $projectDescriptionPage->addListItem("Radio communication reversing for proprietary protocols (Bluetooth, WLAN)", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Software Pentesting", $boldText);
    $projectDescriptionPage->addListItem("Input Validation", 0);
    $projectDescriptionPage->addListItem("Buffer Overflow, File Upload, Business logic validations, Error handling/ Info Leakage, Session management, Log tampering", 0);
    $projectDescriptionPage->addListItem("Data storage vulnerabilities", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Test Area', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText("Red Team Partners’ IoT Penetration Testing will test the following factors that are present in the network of physical objects:", null, $defaultParagraphStyle);

    $projectDescriptionPage->addListItem("Hardware", 0);
    $projectDescriptionPage->addListItem("Firmware", 0);
    $projectDescriptionPage->addListItem("Corporate Network", 0);
    $projectDescriptionPage->addListItem("Wireless Communications", 0);
    $projectDescriptionPage->addListItem("Mobile and Web Applications", 0);
    $projectDescriptionPage->addListItem("Cloud APIs (Application Programming Interface)", 0);

    // $projectDescriptionPage->addTextBreak();

    // $projectDescriptionPage->addText('Results', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    // $projectDescriptionPage->addText("Red Team Partners will provide a detailed report at the end of the engagement, our reports are quality controlled by certified testers. Using the traffic light system (Red=High, Yellow=Medium, Green=Low) your report will highlight any vulnerabilities/risks from this assessment. From the report provided, you will be able to understand any weaknesses that can be exploited and if your system meets expectations for functionality and security. Red Team Partners will also include remediation/comments and suggestions on how to resolve any vulnerabilities/risks found.", null, $defaultParagraphStyle);

    // $projectDescriptionPage->addText("Should exploitation successfully permit, Red Team Partners will aim to escalate to the highest of privileges and, with your agreement, continue to leverage this access to penetrate as deep as possible in your network to help portray a realistic attack scenario.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addPageBreak();

    