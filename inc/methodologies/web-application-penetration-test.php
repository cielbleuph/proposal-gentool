<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    $methodologiesPage->addTitle('Web Application Penetration Test', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('Red Team Partners provides Web Application Penetration Testing that can be performed either remotely or on-site. The assessment’s goal is to uncover any vulnerabilities and weaknesses which could be leveraged by a malicious attacker to gain access to sensitive data held by the application. Throughout the assessment, Red Team Partners will utilise best practice testing combined with proven methodologies to ensure an in-depth assessment of the application. This is a mixture of non-invasive testing and experienced testing techniques.', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('An application assessment can be divided into three stages:', $boldText, array_merge($defaultParagraphStyle));

    $methodologiesPage->addListItem("Discovery", 0);
    $methodologiesPage->addListItem("Assessment", 0);
    $methodologiesPage->addListItem("Exploitation", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('Red Team Partners utilise a wide range of tools to scan and map out the web application(s). A mixture of the latest automated and manual tools is incorporated into testing by our consultants.', null, $defaultParagraphStyle);

    $methodologiesPage->addText("Once the discovery phase has ended, Red Team Partners interpret the results and use them to identify possible attack vectors and perform manual attack simulations.", null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Once the discovery phase has ended, Red Team Partners interpret the results and use them to identify possible attack vectors and perform manual attack simulations.', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Manual assessments focus on the OWASP top 10:', null, $defaultParagraphStyle);

    $methodologiesPage->addListItem("Injection", 0);
    $methodologiesPage->addListItem("Broken Authentication and Session Management", 0);
    $methodologiesPage->addListItem("Cross-Site Scripting (XSS)", 0);
    $methodologiesPage->addListItem("Insecure Direct Object References", 0);
    $methodologiesPage->addListItem("Security Misconfiguration", 0);
    $methodologiesPage->addListItem("Sensitive Data Exposed", 0);
    $methodologiesPage->addListItem("Missing Function Level Access Control", 0);
    $methodologiesPage->addListItem("Cross-Site Request Forgery (CSRF)", 0);
    $methodologiesPage->addListItem("Utilising Known Vulnerable Components", 0);
    $methodologiesPage->addListItem("Unvalidated Redirects and Forwards", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Web Application Security", $boldText);
    $methodologiesPage->addText("The following attacks will be conducted to detect the level of security in web applications.", null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText("Test Name", $boldText);
    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Information Gathering", $boldText);
    $methodologiesPage->addListItem("Conduct Search Engine Discovery and Reconnaissance for Information Leakage", 0);
    $methodologiesPage->addListItem("Fingerprint Web Server ", 0);
    $methodologiesPage->addListItem("Review Webserver Metafiles for Information Leakage ", 0);
    $methodologiesPage->addListItem("Enumerate Applications on Webserver ", 0);
    $methodologiesPage->addListItem("Review Webpage Comments and Metadata for Information Leakage", 0);
    $methodologiesPage->addListItem("Identify application entry points ", 0);
    $methodologiesPage->addListItem("Map execution paths through application ", 0);
    $methodologiesPage->addListItem("Fingerprint Web Application Framework ", 0);
    $methodologiesPage->addListItem("Fingerprint Web Application ", 0);
    $methodologiesPage->addListItem("Map Application Architecture ", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Configuration and Deploy Management Testing", $boldText);
    $methodologiesPage->addListItem("Test Network/Infrastructure Configuration ", 0);
    $methodologiesPage->addListItem("Test Application Platform Configuration ", 0);
    $methodologiesPage->addListItem("Test File Extensions Handling for Sensitive Information ", 0);
    $methodologiesPage->addListItem("Backup and Unreferenced Files for Sensitive Information ", 0);
    $methodologiesPage->addListItem("Enumerate Infrastructure and Application Admin Interfaces ", 0);
    $methodologiesPage->addListItem("Test HTTP Methods ", 0);
    $methodologiesPage->addListItem("Test HTTP Strict Transport Security ", 0);
    $methodologiesPage->addListItem("Test RIA cross domain policy ", 0);
   
    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Identity Management Testing", $boldText);
    $methodologiesPage->addListItem("Test Role Definitions", 0);
    $methodologiesPage->addListItem("Test user registration Process", 0);
    $methodologiesPage->addListItem("Test Account Provisioning Process", 0);
    $methodologiesPage->addListItem("Testing for Account enumeration and Guessable User Account", 0);
    $methodologiesPage->addListItem("Testing for Weak or unefornced username policy", 0);
    $methodologiesPage->addListItem("Test permissions of Guest/Training Accounts", 0);
    $methodologiesPage->addListItem("Test Account Suspension/Resumption of Process", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Authentication Testing", $boldText);
    $methodologiesPage->addListItem("Testing for Credentials Transported over an Encrypted Channel", 0);
    $methodologiesPage->addListItem("Testing for default credentials", 0);
    $methodologiesPage->addListItem("Testing for Weak lock out mechanism", 0);
    $methodologiesPage->addListItem("Testing for bypassing authentication schema", 0);
    $methodologiesPage->addListItem("Test remember password functionality", 0);
    $methodologiesPage->addListItem("Testing for browser cache weakness", 0);
    $methodologiesPage->addListItem("Testing for weak password policy", 0);
    $methodologiesPage->addListItem("Testing for weak security question/answer", 0);
    $methodologiesPage->addListItem("Testing for weak password change or reset functionalities", 0);
    $methodologiesPage->addListItem("Testing for weaker authentication in alternative channel", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Authorization Testing", $boldText);
    $methodologiesPage->addListItem("Testing directory traversal/file include", 0);
    $methodologiesPage->addListItem("testing for bypassing authorization schema", 0);
    $methodologiesPage->addListItem("Testing for privilege escalation", 0);
    $methodologiesPage->addListItem("Testing for Insecure Direct Object References", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Session Management Testing", $boldText);
    $methodologiesPage->addListItem("Testing for Bypassing Session Management Schema", 0);
    $methodologiesPage->addListItem("Testing for cookies attributes", 0);
    $methodologiesPage->addListItem("Testing for session fixation", 0);
    $methodologiesPage->addListItem("Testing for exposed session variables", 0);
    $methodologiesPage->addListItem("Testing for Cross-Site Request Forgery", 0);
    $methodologiesPage->addListItem("Testing for logout functionality", 0);
    $methodologiesPage->addListItem("Test session timeout", 0);
    $methodologiesPage->addListItem("Testing for session puzzling", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Data Validation Testing", $boldText);
    $methodologiesPage->addListItem("Testing for Reflected Cross-Site Scripting", 0);
    $methodologiesPage->addListItem("Testing for Stored Cross Site Scripting", 0);
    $methodologiesPage->addListItem("Testing for HTTP Verb Tampering", 0);
    $methodologiesPage->addListItem("Testing for SQL Injection", 0);
    $methodologiesPage->addListItem("Oracle Testing", 0);
    $methodologiesPage->addListItem("MySQL Testing", 0);
    $methodologiesPage->addListItem("SQL Server Testing", 0);
    $methodologiesPage->addListItem("Testing PostgreSQL", 0);
    $methodologiesPage->addListItem("MS Access Testing", 0);
    $methodologiesPage->addListItem("Testing for NoSQL Injection", 0);
    $methodologiesPage->addListItem("Testing for LDAP Injection", 0);
    $methodologiesPage->addListItem("Testing for ORM Injection", 0);
    $methodologiesPage->addListItem("Testing for XML Injection", 0);
    $methodologiesPage->addListItem("Testing for SSI Injection", 0);
    $methodologiesPage->addListItem("Testing for XPath Injection", 0);
    $methodologiesPage->addListItem("IMAP/SMTP Injection", 0);
    $methodologiesPage->addListItem("Testing for Code Injection", 0);
    $methodologiesPage->addListItem("Testing for Local File Inclusion", 0);
    $methodologiesPage->addListItem("Testing for Remote File Inclusion", 0);
    $methodologiesPage->addListItem("Testing for Command Injection", 0);
    $methodologiesPage->addListItem("Testing for Buffer overflow", 0);
    $methodologiesPage->addListItem("Testing for heap overflow", 0);
    $methodologiesPage->addListItem("Testing for Stack overflow", 0);
    $methodologiesPage->addListItem("Testing for Format string", 0);
    $methodologiesPage->addListItem("Testing for incubated vulnerabilities", 0);
    $methodologiesPage->addListItem("Testing for HTTP Splitting/Smuggling", 0);
    

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Error Handling", $boldText);
    $methodologiesPage->addListItem("Analysis of Error Codes", 0);
    $methodologiesPage->addListItem("Analysis of Stack Traces", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Cryptography", $boldText);
    $methodologiesPage->addListItem("Testing for Weak SSL/TSL Ciphers, Insufficient Transport Layer Protection", 0);
    $methodologiesPage->addListItem("Testing for Padding Oracle", 0);
    $methodologiesPage->addListItem("Testing for Sensitive information sent via unecrypted channels", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Business Logic Testing", $boldText);
    $methodologiesPage->addListItem("test Business Logic Data Validation", 0);
    $methodologiesPage->addListItem("Test Ability to Forge Requests", 0);
    $methodologiesPage->addListItem("Test Integrity Checks", 0);
    $methodologiesPage->addListItem("Test for Process Timing", 0);
    $methodologiesPage->addListItem("Test Number of Times a Function Can be Used Limits", 0);
    $methodologiesPage->addListItem("Testing for the Circumvention of Work Flows", 0);
    $methodologiesPage->addListItem("Test Defenses Againsts Application Mis-use", 0);
    $methodologiesPage->addListItem("Test Upload of Unexpected File Types", 0);
    $methodologiesPage->addListItem("Test Upload of Malicious Files", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Client-Side Testing", $boldText);
    $methodologiesPage->addListItem("Testing for DOM based Cross Site Scripting", 0);
    $methodologiesPage->addListItem("Testing for Javascript Execution", 0);
    $methodologiesPage->addListItem("Testing for HTML Injection", 0);
    $methodologiesPage->addListItem("Testing for Client Side URL Redirect", 0);
    $methodologiesPage->addListItem("Testing for CSS Injection", 0);
    $methodologiesPage->addListItem("Testing for Client Side Resource Manipulation", 0);
    $methodologiesPage->addListItem("Test Cross Origin Resource Sharing", 0);
    $methodologiesPage->addListItem("Testing for Cross Site Flashing", 0);
    $methodologiesPage->addListItem("Testing for Clickjacking", 0);
    $methodologiesPage->addListItem("testing WebSockets", 0);
    $methodologiesPage->addListItem("Test Web Messaging", 0);
    $methodologiesPage->addListItem("Test Local Storage", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Tools", $boldText);
    $methodologiesPage->addText("Red Team Partners uses the most capable tools in the security industry that have proved their efficiency in many pentests. Below is a list of tools that Red Team Partners security team is using:", null, $defaultParagraphStyle);

    $twoColSection = $phpWord->addSection($styleTwoColumn);
    $twoColSection->addListItem("Nmap", 0);
    $twoColSection->addListItem("Nessus", 0);
    $twoColSection->addListItem("Nexpose", 0);
    $twoColSection->addListItem("DNS Recon", 0);
    $twoColSection->addListItem("Burp, BeEF", 0);
    $twoColSection->addListItem("Dig", 0);
    $twoColSection->addListItem("Hydra / John the ripper", 0);
    $twoColSection->addListItem("Third-party exploits", 0);
    $twoColSection->addListItem("Bettercap", 0);
    $twoColSection->addListItem("KALI Linux", 0);
    $twoColSection->addListItem("ZED ATTACK PRO (ZAP)", 0);
    $twoColSection->addListItem("Maltego, w3af, wpscan", 0);
    $twoColSection->addListItem("exploitDB", 0);
    $twoColSection->addListItem("Dirbuster", 0);
    $twoColSection->addListItem("The harvester", 0);
    $twoColSection->addListItem("Archive.org/information gathering/dnsrecon", 0);
    $twoColSection->addListItem("Metasploit", 0);
    $twoColSection->addListItem("Nikto", 0);
    $twoColSection->addListItem("SQLMAP, BBQ SQL, SQLNinja", 0);
    $twoColSection->addListItem("THC Hydra", 0);
    $twoColSection->addListItem("John the ripper", 0);
    $twoColSection->addListItem("XSSer", 0);
    $twoColSection->addListItem("Sparta, Doona", 0);
    $twoColSection->addListItem("OpenVAS, Armitage, Aircrack, mimikatz", 0);
    

    $methodologiesPage = $phpWord->addSection($styleSingleColumn);

    $methodologiesPage->addPageBreak();