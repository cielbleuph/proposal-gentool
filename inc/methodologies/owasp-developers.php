<?php

    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );


    $methodologiesPage->addTitle('OWASP for Developers', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('Red Team Partners offers training about OWASP for Developers, that aims to teach and train developers or security professionals to be keenly equipped with the proper knowledge and skills to be able to protect web applications from cyber-attacks and perform security assessments and tests.', null, $defaultParagraphStyle);
    $methodologiesPage->addText('Red Team Partners will focus on the OWASP Top 10. This will prioritise the most important security risks that affect web applications.', null, $defaultParagraphStyle);
    
    $methodologiesPage->addText("With code examples and labs in C#/VB.NET/ASP.NET", null, $defaultParagraphStyle);

    $methodologiesPage->addText("Option 1 (4 hours)", $boldText);
    $methodologiesPage->addListItem("Includes instructor’s presentation on the following topics:", 0 );
    $methodologiesPage->addListItem("Common web application security issues and the techniques that can help mitigate or prevent them", 1 );
    $methodologiesPage->addListItem("Web application components and their vulnerabilities", 1 );
    $methodologiesPage->addListItem("OWASP Top 10 (2013-2017) web application security attack classifications:", 1 );
    $methodologiesPage->addListItem("Injection", 2 );
    $methodologiesPage->addListItem("Broken authentication and session management", 2 );
    $methodologiesPage->addListItem("Cross-site scripting", 2 );
    $methodologiesPage->addListItem("Insecure direct object references", 2 );
    $methodologiesPage->addListItem("Security misconfiguration", 2 );
    $methodologiesPage->addListItem("Sensitive data exposure", 2 );
    $methodologiesPage->addListItem("Missing function level access control", 2 );
    $methodologiesPage->addListItem("Cross-site request forgery", 2 );
    $methodologiesPage->addListItem("Using components with known vulnerabilities", 2 );
    $methodologiesPage->addListItem("Unvalidated redirects and forwards", 2 );
    $methodologiesPage->addListItem("XXE Vulnerability (XML External Entities)", 2 );
    $methodologiesPage->addListItem("Insecure deserialization", 2 );

    $methodologiesPage->addListItem("Examples of the vulnerabilities demonstrated by the instructor", 1 );
    $methodologiesPage->addListItem("OWASP Proactive Controls for Developers", 1 );
    $methodologiesPage->addListItem("Take-away Knowledge Base content items for a deeper understanding of the security controls", 1 );

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Option  2 (7 hours/one full day training)", $boldText);
    $methodologiesPage->addListItem("Includes Option 1 package training content and extends it with these additional curriculum items and hands-on labs:", 0 );
    $methodologiesPage->addListItem("SSRF vulnerability with examples", 1 );
    $methodologiesPage->addListItem("API vulnerabilities and examples", 1 );
    $methodologiesPage->addListItem("Threat modelling to implement web application security throughout the software development life cycle (SDLC)", 1 );
    $methodologiesPage->addListItem("Application Security Verification Standard (ASVS)", 1 );
    $methodologiesPage->addListItem("OWASP Secure Coding Practices and Cheat Sheets", 1 );
    $methodologiesPage->addListItem("OWASP Secure Development Guide", 1 );
    $methodologiesPage->addListItem("OWASP Testing Guide", 1 );
    $methodologiesPage->addListItem("Hands-on Labs on exploiting XSS, SQLi, XXE vulnerabilities", 1 );

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Option 3 (14 hours/two days training)", $boldText);
    $methodologiesPage->addtext("Same content as Option 2 plus:", 0);
    $methodologiesPage->addListItem("Mobile App Security - specific security considerations for Android and iOS Apps", 1 );
    $methodologiesPage->addListItem("Lab - Scan and review vulnerabilities in a sample Android application", 1 );
    $methodologiesPage->addListItem("Cloud Security - OWASP Cloud Top 10, OWASP Docker Top 10, Container Security Verification Standard, Docker Hardening (CIS Docker Benchmark)", 1 );
    $methodologiesPage->addListItem("Scanning for vulnerable libraries and components using OWASP Dependency-Check Tool", 1 );
    $methodologiesPage->addListItem("Practical session on penetration testing web applications using OWASP ZAP tool", 1 );
    $methodologiesPage->addListItem("Practical session on using Static Code Analysis tools to scan the source code for vulnerabilities", 1 );
    $methodologiesPage->addListItem("Effective Vulnerabilities Management using Open Source Tools - includes Vulnerability Management Dashboard using OWASP Defect Dojo", 1 );

    $methodologiesPage->addPageBreak();
