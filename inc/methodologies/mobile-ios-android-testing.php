<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    $methodologiesPage->addTitle( htmlspecialchars("Fundamentals"), 2); // TOC Bookmark 
    $methodologiesPage->addText( htmlspecialchars("Red Team Partners provides Mobile Application Penetration Testing, that focuses directly on the mobile app. The Mobile Application Penetration Testing is dynamic; therefore, the assessment is conducted while the application is running and as well static, meaning that the source code can be made available (e.g. through reverse engineering) for testing to assist with vulnerability and security issue identification.") );

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addTitle( htmlspecialchars("Test Areas"), 2); // TOC Bookmark 
    $methodologiesPage->addText( htmlspecialchars("The focus shifts from traditional application security, where the primary threat is from multiple sources over the internet. The Mobile Application Penetration Testing methodology focuses as well on the client-side security, file system, hardware, and network security. It has been long considered that the end user is in control of the device."));

    $methodologiesPage->addText(htmlspecialchars("The Mobile Application Penetration Testing methodology is based from the OWASP mobile security project and covers all aspects of the OWASP Mobile Top 10 for 2017 and incorporates experience and testing techniques used in other areas of security testing. Besides this, as a walkthrough check-list that the security team is using the Mobile Security Testing Guide (MSTG) which is a comprehensive manual for mobile app security development, testing and reverse engineering (https://owasp.org/wwwproject-mobile-security-testing-guide/)."));

    $methodologiesPage->addText(htmlspecialchars("An overview of the mobile security testing methodology is documented below, as in the OWASP TOP 10:"));

    $methodologiesPage->addImage('assets/images/sow/mobile-app-pentest-01.png', 
        array(
            'width'         => 450,
            'marginTop'     => 2,
            'marginLeft'    => -100,
            'wrappingStyle' => 'inline',
            'alignment' => 'center',
            'wrapDistanceLeft' => 100
        )
    );

    $methodologiesPage->addText(htmlspecialchars("The Mobile Application Security Testing is divided as follow:"));

    $mobileTextRunOne = $methodologiesPage->addTextRun();
    $mobileTextRunOne->addText(htmlspecialchars("Preparation and scoping"), array("bold"=>true) );
    $mobileTextRunOne->addText(htmlspecialchars(" – require the pen tester to obtain information that is crucial in knowing events that lead to the successful exploitation of mobile applications."));

    $mobileTextRunTwo = $methodologiesPage->addTextRun();
    $mobileTextRunTwo->addText(htmlspecialchars("Exploitation (static and dynamic)"), array("bold"=>true) );
    $mobileTextRunTwo->addText(htmlspecialchars("– penetration tester trying to exploit discovered vulnerabilities to take profit of the mobile application in a manner not meant by the programmer initially didn’t expect."));

    $mobileTextRunThree = $methodologiesPage->addTextRun();
    $mobileTextRunThree->addText(htmlspecialchars("Reporting"), array("bold"=>true) );
    $mobileTextRunThree->addText(htmlspecialchars("– it’s involves reporting and presenting the discovered results in a manner that makes sense to management. That is also the stage that separates a penetration test from an attack. All findings are documented in a severity ordered report with clear and concise recommendation instructions."));

    $methodologiesPage->addText(htmlspecialchars("The diagram that follows outlines the penetration testing methodology to be followed, as part of identifying vulnerabilities and exploits:"));

    $methodologiesPage->addImage('assets/images/sow/mobile-app-pentest-02.png', 
        array(
            'width'         => 450,
            'marginTop'     => 2,
            'marginLeft'    => -100,
            'wrappingStyle' => 'inline',
            'alignment' => 'center',
            'wrapDistanceLeft' => 100
        )
    );

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText(htmlspecialchars("As part of Mobile Application Penetration Testing, Red Team Partners are performing the following:"));

    $methodologiesPage->addText(htmlspecialchars("Information Gathering"), $boldText);

    $methodologiesPage->addText(htmlspecialchars("This phase involves taking time to learn the target applications purpose and assess its functionality. This information is then used to correctly scope and assess the level of effort and time required to assess the mobile application."));

    $methodologiesPage->addListItem( htmlspecialchars("Application Type – Application type (mobile web, native, cross-platform"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Application mapping – manually assessing the application assessing functionality, understanding how the application should function"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Identifying network interfaces the application uses"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Determining what network protocols are in use"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Determining if the application performs payments processing / commerce transactions and how these are stored"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Determine what hardware is in use – GPS, Bluetooth, TouchID / Camera /Microphone etc."), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Identify any 3rd party library / software / frameworks are in use"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Determine if the application interacts with any other applications"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Assessing server side information to determine what hosting platforms (AWS, Azure, Rackspace, Heroku etc) and technologies (Development language, Single Sign On, 2FA, API’s) are in use"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Static Application Security Testing – SCR (Secure Code Review) – SCA (Static Code Analysis) "), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Static Analysis or SAST (Static Application Security Testing) – assess the source code, binaries and other app data included with the application, during testing the application in a non-running state. If the source code is not available (preferred) for static analysis then compiled binaries will be reverse engineered, decrypted and decompiled (where possible)."), 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText(htmlspecialchars("Inspection of the source code is required even on engagements that do not have a source code audit scoped. Analysis of the source code saves time mapping the application and understanding it’s functionality, revealing information such as the backend databases, server side information, authentication system, API’s and the application programming languages and frameworks used."));

    $methodologiesPage->addListItem( htmlspecialchars("Authentication"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Authorisation"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Session Management"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Data Storage"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Information Disclosure"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Application Security Issues - XSS, CSRF, SQL Injection, Command Injection, XML Injection, Check Cross Domain Plicy, Cookies, etc."), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Networking - weak/insecure protocol usage"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Transport Layer Protection -SSL -Encryption-in-transit"), 0);
    
    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText(htmlspecialchars("Dynamic Application Security Testing"), $boldText);

    $methodologiesPage->addText(htmlspecialchars("Dynamic Analysis or DAST (Dynamic Application Security Testing) takes place while the mobile application is running, simulating a real world attack. Information from the Static Analysis section of the assessment (depending on client scoping requirements) can be used to assist and confirm findings during dynamic testing."));

    $methodologiesPage->addListItem( htmlspecialchars("Application Types – Native, Web Services App (SOAP/REST), Mobile Browser based App, Mobile Hybrid App (Native + Web App)"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Application Mapping – Establishing a baseline for the application, before and after install – file system usage"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Debugging – Examining the application with a debugger attached"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Local Testing – Checking for exposed IPC interfaces – fuzzing, sniffing authentication bypass testing"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Cryptography Testing – Checking for weaknesses with cryptography, brute force key attacks, hard-coded keys / secrets other disclosed information"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Web Application Security Issues – XSS, CSRF, SQL Injection, Command"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Injection, XML Injection, Check Cross Domain Policy, Cookies etc."), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Authentication – Testing for broken authentication"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Authorisation – Weak local filesystem runtime permissions – external configuration manipulation"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("File System Analysis – Weak local filesystem runtime permissions – external configuration manipulation"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Memory Analysis"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Remote Application / Server Testing Test discovered backend / hosting / API’s – Authentication – Authorisation – Session Management – Transport Layer Testing – Server Side Attacks"), 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText(htmlspecialchars("Tolls used as part of the Mobile Assessment Methodology:"));
    $methodologiesPage->addListItem( htmlspecialchars("MobSF – DAST and SAST iOS and Mobile"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("BurpSuitePro – Traffic manipulation iOS and Android"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("JDB – for debugging"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("ADB – for interaction with Android"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Drozer – Android Penetration testing framework"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Xposed – on client-side Android"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Frida – for iOS and Android run-time manipulation"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Cydia Substrate modules – for iOS"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("iFunBox – android debugging/reverse engineering"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("class-dump – examining Objective-C Run-time iOS"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("cycript – iOS run-time manipulation"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Introspy-iOS – run-time assist manipulation"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Keychaindumper – iOS dumping stored encrypted keys"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Owasp Zap – alternative to Burp Suite"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("X-con – bypassing jailbreak detection"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("tsProtector – bypassing jailbreak detection"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Clutch – executable dumper"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Sqlite3 – navigate/read/write into .db files"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Burp Suite Mobile Assistant – facilitate testing of iOS"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Wireshark – packet analyzer"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Fridump – Frida framework to dump accessible memory addresses"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Qark – analyze several security related Android vulnerabilities (source code or packaged)"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Jadx – Dex to java decompiler Android"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("APKTool – Reverse Engineer Android"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Needle – security assessment on iOS"), 0);
    $methodologiesPage->addListItem( htmlspecialchars("Objection - run-time mobile exploration toolkit iOS and Android"), 0);

    $methodologiesPage->addPageBreak();
