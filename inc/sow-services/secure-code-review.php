<?php 


    $projectDescriptionPage->addTitle( htmlspecialchars("PROJECT DESCRIPTION") , 1); // TOC Bookmark 
    $projectDescriptionPage->addLine($lineStyle);

    $projectDescriptionPage->addTitle( htmlspecialchars("FUNDAMENTALS"), 2); // TOC Bookmark 
    $projectDescriptionPage->addText( htmlspecialchars("Red Team Partners will conduct a Secure Code Review. This code review is a systematic examination (sometimes referred to as peer review) of computer source code. It is intended to find mistakes overlooked in software development, improving the overall quality of software. Reviews are done in various forms such as pair programming, informal walkthroughs, and formal inspections.") );

    $projectDescriptionPage->addImage('assets/images/sow/mobile-app-pentest-01.png', 
        array(
            'width'         => 450,
            'marginTop'     => 2,
            'marginLeft'    => -100,
            'wrappingStyle' => 'inline',
            'alignment' => 'center',
            'wrapDistanceLeft' => 100
        )
    );


    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( htmlspecialchars("TEST AREAS"), 2); // TOC Bookmark 
    $projectDescriptionPage->addText( htmlspecialchars("Code review is probably the single-most effective technique for identifying security flaws. When used together with automated tools and manual penetration testing, code review can significantly increase the cost effectiveness of an application security verification effort."));

    $projectDescriptionPage->addText(htmlspecialchars("This guide describes the mechanics of reviewing code for certain vulnerabilities, and provides limited guidance on how the effort should be structured and executed."));

    $projectDescriptionPage->addText(htmlspecialchars("Manual security code review provides insight into the “real risk” associated with insecure code."));

    $projectDescriptionPage->addText(htmlspecialchars("A human reviewer can understand the context for certain coding practices, and make a serious risk estimate that accounts for both the likelihood of attack and the business impact of a breach."));

    $projectDescriptionPage->addText(htmlspecialchars("Secure Code Review Checklist"), array("underline"=>true, "bold"=>true, "size"=>18));

    $projectDescriptionPage->addText(htmlspecialchars("Design"), $boldText);
    $projectDescriptionPage->addLineItem(htmlspecialchars("architecture and design documentation is complete."), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("user and role based privileges are documented."), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("site is well partitioned into public and restricted pages."), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("security is layered each layer assumes other layers may have been compromised."), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("security design covers all 8 principles of web security: authentication, authorization, confidentiality, message integrity, data integrity, availability, non-repudiation"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("sensitive data has been identified."), 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Information Gathering"), $boldText);
    $projectDescriptionPage->addLineItem(htmlspecialchars("Get a copy of the code"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("Manually explore the file structure of the code"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("Look for any missing pieces of code"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("Check for frameworks/libraries/dependencies"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("Check for application routes and their inputs"), 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Configuration"), $boldText);
    $projectDescriptionPage->addLineItem(htmlspecialchars("Sensitive data is not hard-coded in configuration files"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("Develop and test code are properly segregated from production"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("Dependencies are up to date"), 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Secure Transmission"), $boldText);
    $projectDescriptionPage->addLineItem(htmlspecialchars("Sensitive data is only transmitted over an SSL connection"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("Site is partitioned into private and public URLs"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("Sensitive data has been secured in memory, storage and transit"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("Sensitive data doesn’t leak to non-private channels"), 0);
    
    
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Authentication and User Management"), $boldText);
    $projectDescriptionPage->addLineItem(htmlspecialchars("user credentials are encrypted in the data store"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("security policies are configurable (not hardcoded)"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("standard security frameworks are used (instead of custom code)"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("SSL is used to protect user credentials and authentication tokens"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("authentication cookies are not persisted"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("authentication cookies are encrypted"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("cookie names and paths are used"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("application handles user management events such as authentication failure, password reset password change, account lockout and cancel account"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("application handles suspicious events such as multiple failed logon attempts, session replay and attempted access to restricted resources "), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("strong passwords policies are enforced"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("authentication credentials are not passed by HTTP GET"), 0);


    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Authorization"), $boldText);
    $projectDescriptionPage->addLineItem(htmlspecialchars("authentication and authorization should be the first logic executed for each request"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("authorization checks are granular (page and directory level)"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("deny access to pages and data by default"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("re-authenticate for requests that have side-effects"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("ACLs are configured for all files"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("authorization based on clearly defined roles"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("authorization works properly and cannot be circumvented by parameter manipulation"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("authorization cannot be bypassed by cookie manipulation "), 0);


    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Data Validation"), $boldText);
    $projectDescriptionPage->addLineItem(htmlspecialchars("All user input is validated for proper type, length, format and range"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("Validation on user input is done server side)"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("Uploaded files are validated for content type, size, file type and filename"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("Special characters are sanitized before being used in external systems, like databases"), 0);
    $projectDescriptionPage->addLineItem(htmlspecialchars("Does invalid input trigger handled exceptions"), 0);


    $projectDescriptionPage->addPageBreak();