<?php

    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );


    // $projectDescriptionPage->addTitle('OWASP for Developers', 2); // TOC Bookmark 
    // $projectDescriptionPage->addTextBreak();
    
    $projectDescriptionPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('Red Team Partners offers training about OWASP for Developers, that aims to teach and train developers or security professionals to be keenly equipped with the proper knowledge and skills to be able to protect web applications from cyber-attacks and perform security assessments and tests.', null, $defaultParagraphStyle);
    $projectDescriptionPage->addText('Red Team Partners will focus on the OWASP Top 10. This will prioritise the most important security risks that affect web applications.', null, $defaultParagraphStyle);
    
    $projectDescriptionPage->addText("With code examples and labs in C#/VB.NET/ASP.NET", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("Option 1 (4 hours)", $boldText);
    $projectDescriptionPage->addListItem("Includes instructor’s presentation on the following topics:", 0 );
    $projectDescriptionPage->addListItem("Common web application security issues and the techniques that can help mitigate or prevent them", 1 );
    $projectDescriptionPage->addListItem("Web application components and their vulnerabilities", 1 );
    $projectDescriptionPage->addListItem("OWASP Top 10 (2013-2017) web application security attack classifications:", 1 );
    $projectDescriptionPage->addListItem("Injection", 2 );
    $projectDescriptionPage->addListItem("Broken authentication and session management", 2 );
    $projectDescriptionPage->addListItem("Cross-site scripting", 2 );
    $projectDescriptionPage->addListItem("Insecure direct object references", 2 );
    $projectDescriptionPage->addListItem("Security misconfiguration", 2 );
    $projectDescriptionPage->addListItem("Sensitive data exposure", 2 );
    $projectDescriptionPage->addListItem("Missing function level access control", 2 );
    $projectDescriptionPage->addListItem("Cross-site request forgery", 2 );
    $projectDescriptionPage->addListItem("Using components with known vulnerabilities", 2 );
    $projectDescriptionPage->addListItem("Unvalidated redirects and forwards", 2 );
    $projectDescriptionPage->addListItem("XXE Vulnerability (XML External Entities)", 2 );
    $projectDescriptionPage->addListItem("Insecure deserialization", 2 );

    $projectDescriptionPage->addListItem("Examples of the vulnerabilities demonstrated by the instructor", 1 );
    $projectDescriptionPage->addListItem("OWASP Proactive Controls for Developers", 1 );
    $projectDescriptionPage->addListItem("Take-away Knowledge Base content items for a deeper understanding of the security controls", 1 );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Option  2 (7 hours/one full day training)", $boldText);
    $projectDescriptionPage->addListItem("Includes Option 1 package training content and extends it with these additional curriculum items and hands-on labs:", 0 );
    $projectDescriptionPage->addListItem("SSRF vulnerability with examples", 1 );
    $projectDescriptionPage->addListItem("API vulnerabilities and examples", 1 );
    $projectDescriptionPage->addListItem("Threat modelling to implement web application security throughout the software development life cycle (SDLC)", 1 );
    $projectDescriptionPage->addListItem("Application Security Verification Standard (ASVS)", 1 );
    $projectDescriptionPage->addListItem("OWASP Secure Coding Practices and Cheat Sheets", 1 );
    $projectDescriptionPage->addListItem("OWASP Secure Development Guide", 1 );
    $projectDescriptionPage->addListItem("OWASP Testing Guide", 1 );
    $projectDescriptionPage->addListItem("Hands-on Labs on exploiting XSS, SQLi, XXE vulnerabilities", 1 );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Option 3 (14 hours/two days training)", $boldText);
    $projectDescriptionPage->addtext("Same content as Option 2 plus:", 0);
    $projectDescriptionPage->addListItem("Mobile App Security - specific security considerations for Android and iOS Apps", 1 );
    $projectDescriptionPage->addListItem("Lab - Scan and review vulnerabilities in a sample Android application", 1 );
    $projectDescriptionPage->addListItem("Cloud Security - OWASP Cloud Top 10, OWASP Docker Top 10, Container Security Verification Standard, Docker Hardening (CIS Docker Benchmark)", 1 );
    $projectDescriptionPage->addListItem("Scanning for vulnerable libraries and components using OWASP Dependency-Check Tool", 1 );
    $projectDescriptionPage->addListItem("Practical session on penetration testing web applications using OWASP ZAP tool", 1 );
    $projectDescriptionPage->addListItem("Practical session on using Static Code Analysis tools to scan the source code for vulnerabilities", 1 );
    $projectDescriptionPage->addListItem("Effective Vulnerabilities Management using Open Source Tools - includes Vulnerability Management Dashboard using OWASP Defect Dojo", 1 );

    $projectDescriptionPage->addPageBreak();
