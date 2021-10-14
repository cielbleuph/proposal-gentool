<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    // $projectDescriptionPage->addTitle('Web Application Penetration Test', 2); // TOC Bookmark 
    // $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('Red Team Partners provides Web Application Penetration Testing that can be performed either remotely or on-site. The assessment’s goal is to uncover any vulnerabilities and weaknesses which could be leveraged by a malicious attacker to gain access to sensitive data held by the application. Throughout the assessment, Red Team Partners will utilise best practice testing combined with proven methodologies to ensure an in-depth assessment of the application. This is a mixture of non-invasive testing and experienced testing techniques.', null, $defaultParagraphStyle);
    $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addText('An application assessment can be divided into three stages:', $boldText, array_merge($defaultParagraphStyle));

    $projectDescriptionPage->addListItem("Discovery", 0);
    $projectDescriptionPage->addListItem("Assessment", 0);
    $projectDescriptionPage->addListItem("Exploitation", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('Red Team Partners utilise a wide range of tools to scan and map out the web application(s). A mixture of the latest automated and manual tools is incorporated into testing by our consultants.', null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("Once the discovery phase has ended, Red Team Partners interpret the results and use them to identify possible attack vectors and perform manual attack simulations.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Once the discovery phase has ended, Red Team Partners interpret the results and use them to identify possible attack vectors and perform manual attack simulations.', null, $defaultParagraphStyle);
    $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addText('Manual assessments focus on the OWASP top 10:', null, $defaultParagraphStyle);

    $projectDescriptionPage->addListItem("Injection", 0);
    $projectDescriptionPage->addListItem("Broken Authentication and Session Management", 0);
    $projectDescriptionPage->addListItem("Cross-Site Scripting (XSS)", 0);
    $projectDescriptionPage->addListItem("Insecure Direct Object References", 0);
    $projectDescriptionPage->addListItem("Security Misconfiguration", 0);
    $projectDescriptionPage->addListItem("Sensitive Data Exposed", 0);
    $projectDescriptionPage->addListItem("Missing Function Level Access Control", 0);
    $projectDescriptionPage->addListItem("Cross-Site Request Forgery (CSRF)", 0);
    $projectDescriptionPage->addListItem("Utilising Known Vulnerable Components", 0);
    $projectDescriptionPage->addListItem("Unvalidated Redirects and Forwards", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Web Application Security", $boldText);
    $projectDescriptionPage->addText("The following attacks will be conducted to detect the level of security in web applications.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addText("Test Name", $boldText);
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Information Gathering", $boldText);
    $projectDescriptionPage->addListItem("Conduct Search Engine Discovery and Reconnaissance for Information Leakage", 0);
    $projectDescriptionPage->addListItem("Fingerprint Web Server ", 0);
    $projectDescriptionPage->addListItem("Review Webserver Metafiles for Information Leakage ", 0);
    $projectDescriptionPage->addListItem("Enumerate Applications on Webserver ", 0);
    $projectDescriptionPage->addListItem("Review Webpage Comments and Metadata for Information Leakage", 0);
    $projectDescriptionPage->addListItem("Identify application entry points ", 0);
    $projectDescriptionPage->addListItem("Map execution paths through application ", 0);
    $projectDescriptionPage->addListItem("Fingerprint Web Application Framework ", 0);
    $projectDescriptionPage->addListItem("Fingerprint Web Application ", 0);
    $projectDescriptionPage->addListItem("Map Application Architecture ", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Configuration and Deploy Management Testing", $boldText);
    $projectDescriptionPage->addListItem("Test Network/Infrastructure Configuration ", 0);
    $projectDescriptionPage->addListItem("Test Application Platform Configuration ", 0);
    $projectDescriptionPage->addListItem("Test File Extensions Handling for Sensitive Information ", 0);
    $projectDescriptionPage->addListItem("Backup and Unreferenced Files for Sensitive Information ", 0);
    $projectDescriptionPage->addListItem("Enumerate Infrastructure and Application Admin Interfaces ", 0);
    $projectDescriptionPage->addListItem("Test HTTP Methods ", 0);
    $projectDescriptionPage->addListItem("Test HTTP Strict Transport Security ", 0);
    $projectDescriptionPage->addListItem("Test RIA cross domain policy ", 0);
   
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Identity Management Testing", $boldText);
    $projectDescriptionPage->addListItem("Test Role Definitions", 0);
    $projectDescriptionPage->addListItem("Test user registration Process", 0);
    $projectDescriptionPage->addListItem("Test Account Provisioning Process", 0);
    $projectDescriptionPage->addListItem("Testing for Account enumeration and Guessable User Account", 0);
    $projectDescriptionPage->addListItem("Testing for Weak or unefornced username policy", 0);
    $projectDescriptionPage->addListItem("Test permissions of Guest/Training Accounts", 0);
    $projectDescriptionPage->addListItem("Test Account Suspension/Resumption of Process", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Authentication Testing", $boldText);
    $projectDescriptionPage->addListItem("Testing for Credentials Transported over an Encrypted Channel", 0);
    $projectDescriptionPage->addListItem("Testing for default credentials", 0);
    $projectDescriptionPage->addListItem("Testing for Weak lock out mechanism", 0);
    $projectDescriptionPage->addListItem("Testing for bypassing authentication schema", 0);
    $projectDescriptionPage->addListItem("Test remember password functionality", 0);
    $projectDescriptionPage->addListItem("Testing for browser cache weakness", 0);
    $projectDescriptionPage->addListItem("Testing for weak password policy", 0);
    $projectDescriptionPage->addListItem("Testing for weak security question/answer", 0);
    $projectDescriptionPage->addListItem("Testing for weak password change or reset functionalities", 0);
    $projectDescriptionPage->addListItem("Testing for weaker authentication in alternative channel", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Authorization Testing", $boldText);
    $projectDescriptionPage->addListItem("Testing directory traversal/file include", 0);
    $projectDescriptionPage->addListItem("testing for bypassing authorization schema", 0);
    $projectDescriptionPage->addListItem("Testing for privilege escalation", 0);
    $projectDescriptionPage->addListItem("Testing for Insecure Direct Object References", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Session Management Testing", $boldText);
    $projectDescriptionPage->addListItem("Testing for Bypassing Session Management Schema", 0);
    $projectDescriptionPage->addListItem("Testing for cookies attributes", 0);
    $projectDescriptionPage->addListItem("Testing for session fixation", 0);
    $projectDescriptionPage->addListItem("Testing for exposed session variables", 0);
    $projectDescriptionPage->addListItem("Testing for Cross-Site Request Forgery", 0);
    $projectDescriptionPage->addListItem("Testing for logout functionality", 0);
    $projectDescriptionPage->addListItem("Test session timeout", 0);
    $projectDescriptionPage->addListItem("Testing for session puzzling", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Data Validation Testing", $boldText);
    $projectDescriptionPage->addListItem("Testing for Reflected Cross-Site Scripting", 0);
    $projectDescriptionPage->addListItem("Testing for Stored Cross Site Scripting", 0);
    $projectDescriptionPage->addListItem("Testing for HTTP Verb Tampering", 0);
    $projectDescriptionPage->addListItem("Testing for SQL Injection", 0);
    $projectDescriptionPage->addListItem("Oracle Testing", 0);
    $projectDescriptionPage->addListItem("MySQL Testing", 0);
    $projectDescriptionPage->addListItem("SQL Server Testing", 0);
    $projectDescriptionPage->addListItem("Testing PostgreSQL", 0);
    $projectDescriptionPage->addListItem("MS Access Testing", 0);
    $projectDescriptionPage->addListItem("Testing for NoSQL Injection", 0);
    $projectDescriptionPage->addListItem("Testing for LDAP Injection", 0);
    $projectDescriptionPage->addListItem("Testing for ORM Injection", 0);
    $projectDescriptionPage->addListItem("Testing for XML Injection", 0);
    $projectDescriptionPage->addListItem("Testing for SSI Injection", 0);
    $projectDescriptionPage->addListItem("Testing for XPath Injection", 0);
    $projectDescriptionPage->addListItem("IMAP/SMTP Injection", 0);
    $projectDescriptionPage->addListItem("Testing for Code Injection", 0);
    $projectDescriptionPage->addListItem("Testing for Local File Inclusion", 0);
    $projectDescriptionPage->addListItem("Testing for Remote File Inclusion", 0);
    $projectDescriptionPage->addListItem("Testing for Command Injection", 0);
    $projectDescriptionPage->addListItem("Testing for Buffer overflow", 0);
    $projectDescriptionPage->addListItem("Testing for heap overflow", 0);
    $projectDescriptionPage->addListItem("Testing for Stack overflow", 0);
    $projectDescriptionPage->addListItem("Testing for Format string", 0);
    $projectDescriptionPage->addListItem("Testing for incubated vulnerabilities", 0);
    $projectDescriptionPage->addListItem("Testing for HTTP Splitting/Smuggling", 0);
    

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Error Handling", $boldText);
    $projectDescriptionPage->addListItem("Analysis of Error Codes", 0);
    $projectDescriptionPage->addListItem("Analysis of Stack Traces", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Cryptography", $boldText);
    $projectDescriptionPage->addListItem("Testing for Weak SSL/TSL Ciphers, Insufficient Transport Layer Protection", 0);
    $projectDescriptionPage->addListItem("Testing for Padding Oracle", 0);
    $projectDescriptionPage->addListItem("Testing for Sensitive information sent via unecrypted channels", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Business Logic Testing", $boldText);
    $projectDescriptionPage->addListItem("test Business Logic Data Validation", 0);
    $projectDescriptionPage->addListItem("Test Ability to Forge Requests", 0);
    $projectDescriptionPage->addListItem("Test Integrity Checks", 0);
    $projectDescriptionPage->addListItem("Test for Process Timing", 0);
    $projectDescriptionPage->addListItem("Test Number of Times a Function Can be Used Limits", 0);
    $projectDescriptionPage->addListItem("Testing for the Circumvention of Work Flows", 0);
    $projectDescriptionPage->addListItem("Test Defenses Againsts Application Mis-use", 0);
    $projectDescriptionPage->addListItem("Test Upload of Unexpected File Types", 0);
    $projectDescriptionPage->addListItem("Test Upload of Malicious Files", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Client-Side Testing", $boldText);
    $projectDescriptionPage->addListItem("Testing for DOM based Cross Site Scripting", 0);
    $projectDescriptionPage->addListItem("Testing for Javascript Execution", 0);
    $projectDescriptionPage->addListItem("Testing for HTML Injection", 0);
    $projectDescriptionPage->addListItem("Testing for Client Side URL Redirect", 0);
    $projectDescriptionPage->addListItem("Testing for CSS Injection", 0);
    $projectDescriptionPage->addListItem("Testing for Client Side Resource Manipulation", 0);
    $projectDescriptionPage->addListItem("Test Cross Origin Resource Sharing", 0);
    $projectDescriptionPage->addListItem("Testing for Cross Site Flashing", 0);
    $projectDescriptionPage->addListItem("Testing for Clickjacking", 0);
    $projectDescriptionPage->addListItem("testing WebSockets", 0);
    $projectDescriptionPage->addListItem("Test Web Messaging", 0);
    $projectDescriptionPage->addListItem("Test Local Storage", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Tools", $boldText);
    $projectDescriptionPage->addText("Red Team Partners uses the most capable tools in the security industry that have proved their efficiency in many pentests. Below is a list of tools that Red Team Partners security team is using:", null, $defaultParagraphStyle);

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
    
    $projectDescriptionPage = $phpWord->addSection($styleSingleColumn);

    $projectDescriptionPage->addPageBreak();
