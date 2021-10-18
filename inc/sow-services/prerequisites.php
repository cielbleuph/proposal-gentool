<?php

    foreach($typeOfService as $serviceName) {

        if ( $serviceName === 'API Penetration Test' ) {
            $projectPrereqPage->addTitle("API Penetration Test", 2);

            $projectPrereqPage->addListItem('Application which is consuming the API', 0);
            $projectPrereqPage->addListItem('Accounts created for each user role', 0);
            $projectPrereqPage->addListItem('API documentation', 0);
            $projectPrereqPage->addListItem('Exported API list such as SWAGGER file, YAML or WSDL', 0);
        }

        if ( $serviceName === 'Cloud Assessment/Review (AWS)' ) {
            $projectPrereqPage->addTitle("Cloud Assessment/Review (AWS)", 2);

            $projectPrereqPage->addListItem('Security reviewer role (AWS)', 0);
        }

        if ( $serviceName === 'Cloud Assessment/Review (Azure)' ) {
            $projectPrereqPage->addTitle("Cloud Assessment/Review (Azure)", 2);

            $projectPrereqPage->addListItem('Global reader role review (AZURE/Office)', 0);
        }

        if ( $serviceName === 'Cyber Forensics and Investigations' ) {
            $projectPrereqPage->addTitle("Cyber Forensics and Investigations", 2);

            $projectPrereqPage->addListItem('Detailed incident description', 0);
            $projectPrereqPage->addListItem('Access to the data/network that was compromised (depends on the incident)', 0);
        }

        if ( $serviceName === 'Dark Web Cyber Threat Intelligence' ) {
            $projectPrereqPage->addTitle("Dark Web Cyber Threat Intelligence", 2);

            $projectPrereqPage->addText("What we will need from you every month:");
            $projectPrereqPage->addListItem('Brands associated with CLIENT (name of brands)', 0);
            $projectPrereqPage->addListItem('External IP addresses of CLIENT (servers)', 0);
            $projectPrereqPage->addListItem('E-mail address of CLIENT employees', 0);
            $projectPrereqPage->addListItem('Domains owned by CLIENT ', 0);
            $projectPrereqPage->addListItem('Other tags/labels that the client is interested in (e.g. internal secret project naming - to check if it has been disclosed/exfiltrated)', 0);
        }

        if ( $serviceName === 'Documentation/Architecture Review' ) {
            $projectPrereqPage->addTitle("Documentation/Architecture Review", 2);

            $projectPrereqPage->addListItem("Documentation that is subject of the review", 0);
        }

        if ( $serviceName === 'Infrastructure Penetration Test') {
            $projectPrereqPage->addTitle("Infrastructure Penetration Test", 2);
            
            $projectPrereqPage->addListItem("Internal", 0);
            $projectPrereqPage->addListItem("VPN access", 1);
            $projectPrereqPage->addListItem("IP addresses or CIDR range that are in scope", 1);
            $projectPrereqPage->addListItem("AD credentials (optional)", 1);
            $projectPrereqPage->addListItem("Whitelisting our IP address in firewall", 1);

            $projectPrereqPage->addTextBreak();

            $projectPrereqPage->addListItem("External", 0);
            $projectPrereqPage->addListItem("External IP addresses", 1);
            $projectPrereqPage->addListItem("Domains/Subdomains that are in scope", 1);
        }

        if ( $serviceName === 'External Penetration Test') {
            $projectPrereqPage->addTitle("External Penetration Test", 2);
            
            $projectPrereqPage->addListItem("External IP addresses", 0);
            $projectPrereqPage->addListItem("Domains/Subdomains that are in scope", 0);
        }

        if ( $serviceName === 'Cyber Awareness Training') {
            $projectPrereqPage->addTitle("Cyber Awareness Training", 2);
            
            $projectPrereqPage->addListItem("Number of participants", 0);
            $projectPrereqPage->addListItem("Technical level", 0);
            $projectPrereqPage->addListItem("Industry of the company", 0);
        }

        if ( $serviceName === 'Mobile Application Penetration Test') {
            $projectPrereqPage->addTitle("Mobile Application Penetration Test", 2);

            $projectPrereqPage->addListItem(".IPA file for IOS and .apk file for Android", 0);
            $projectPrereqPage->addListItem("Two types of credentials for each role within the application (if applicable)", 0);
        }

        if ( $serviceName === 'O365 Penetration Test') {
            $projectPrereqPage->addTitle("O365 Penetration Test", 2);

            $projectPrereqPage->addListItem("Main domain of the company", 0);
            $projectPrereqPage->addListItem("Number of employees", 0);
        }

        if ( $serviceName === 'Red Team Assessment') {
            $projectPrereqPage->addTitle("Red Team Assessment", 2);

            $projectPrereqPage->addListItem("Goals/Objectives of the assessment", 0);
            $projectPrereqPage->addListItem("Limitations (if any)", 0);
        }

        if ( $serviceName === 'Vulnerability Assessment') {
            $projectPrereqPage->addTitle("Vulnerability Assessment", 2);

            $projectPrereqPage->addListItem("IP addresses or URLs of the applications", 0);
            $projectPrereqPage->addListItem("VPN access (if there’s an internal network in the scope)", 0);
        }

        if ( $serviceName === 'Web Application Penetration Test') {
            $projectPrereqPage->addTitle("Web Application Penetration Testing", 2);

            $projectPrereqPage->addListItem("Two types of credentials for each role within the application (if applicable)", 0);
            $projectPrereqPage->addListItem("URL of the application", 0);
        }

        $projectPrereqPage->addTextBreak();
    }

