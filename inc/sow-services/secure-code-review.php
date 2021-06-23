<?php 


    $projectDescriptionPage->addTitle( htmlspecialchars("PROJECT DESCRIPTION") , 1); // TOC Bookmark 
    $projectDescriptionPage->addLine($lineStyle);

    $projectDescriptionPage->addTitle( htmlspecialchars("FUNDAMENTALS"), 2); // TOC Bookmark 
    $projectDescriptionPage->addText( htmlspecialchars("Red Team Partners will conduct a Secure Code Review. This code review is a systematic examination (sometimes referred to as peer review) of computer source code. It is intended to find mistakes overlooked in software development, improving the overall quality of software. Reviews are done in various forms such as pair programming, informal walkthroughs, and formal inspections.") );

    $projectDescriptionPage->addImage(ASSETS_IMG_DIR . 'sow/secure-code-review-01.png', 
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
    $projectDescriptionPage->addListItem(htmlspecialchars("architecture and design documentation is complete."), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("user and role based privileges are documented."), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("site is well partitioned into public and restricted pages."), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("security is layered each layer assumes other layers may have been compromised."), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("security design covers all 8 principles of web security: authentication, authorization, confidentiality, message integrity, data integrity, availability, non-repudiation"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("sensitive data has been identified."), 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Information Gathering"), $boldText);
    $projectDescriptionPage->addListItem(htmlspecialchars("Get a copy of the code"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Manually explore the file structure of the code"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Look for any missing pieces of code"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Check for frameworks/libraries/dependencies"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Check for application routes and their inputs"), 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Configuration"), $boldText);
    $projectDescriptionPage->addListItem(htmlspecialchars("Sensitive data is not hard-coded in configuration files"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Develop and test code are properly segregated from production"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Dependencies are up to date"), 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Secure Transmission"), $boldText);
    $projectDescriptionPage->addListItem(htmlspecialchars("Sensitive data is only transmitted over an SSL connection"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Site is partitioned into private and public URLs"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Sensitive data has been secured in memory, storage and transit"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Sensitive data doesn’t leak to non-private channels"), 0);
    
    
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Authentication and User Management"), $boldText);
    $projectDescriptionPage->addListItem(htmlspecialchars("user credentials are encrypted in the data store"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("security policies are configurable (not hardcoded)"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("standard security frameworks are used (instead of custom code)"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("SSL is used to protect user credentials and authentication tokens"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("authentication cookies are not persisted"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("authentication cookies are encrypted"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("cookie names and paths are used"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("application handles user management events such as authentication failure, password reset password change, account lockout and cancel account"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("application handles suspicious events such as multiple failed logon attempts, session replay and attempted access to restricted resources "), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("strong passwords policies are enforced"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("authentication credentials are not passed by HTTP GET"), 0);


    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Authorization"), $boldText);
    $projectDescriptionPage->addListItem(htmlspecialchars("authentication and authorization should be the first logic executed for each request"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("authorization checks are granular (page and directory level)"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("deny access to pages and data by default"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("re-authenticate for requests that have side-effects"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("ACLs are configured for all files"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("authorization based on clearly defined roles"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("authorization works properly and cannot be circumvented by parameter manipulation"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("authorization cannot be bypassed by cookie manipulation "), 0);


    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Data Validation"), $boldText);
    $projectDescriptionPage->addListItem(htmlspecialchars("All user input is validated for proper type, length, format and range"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Validation on user input is done server side)"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Uploaded files are validated for content type, size, file type and filename"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Special characters are sanitized before being used in external systems, like databases"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Does invalid input trigger handled exceptions"), 0);



    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Application Output"), $boldText);
    $projectDescriptionPage->addListItem(htmlspecialchars("All page output is properly encoded"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("All header output is URL encoded"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Cache headers are properly set on sensitive data"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Security headers are properly set on the application"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Sensitive Application information is not revealed to the user"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Error messages don't reveal sensitive information"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Error messages aren't user controllable"), 0);


    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Session Management"), $boldText);
    $projectDescriptionPage->addListItem(htmlspecialchars("no session parameters passed in URLs"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("session cookies expire in a reasonably short time"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("session cookies are encrypted"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("session data is being validated"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("private data in cookies is kept to a minimum"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("application avoids excessive cookie use"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("session id is complex"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("session storage is secure"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("application properly handles invalid session ids"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("session limits such as inactivity timeout are enforced"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("logout invalids the session"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("session resources are released when session invalidated "), 0);


    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Input Validation"), $boldText);
    $projectDescriptionPage->addListItem(htmlspecialchars("all external input is validated without exception"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("where possible input is restricted to known good chars"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("data is validated server side (security should not rely on client-side validations)"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("application validates numerical input and rejects unexpected input"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("application efficiently evaluates input length"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("strong separation between data and commands"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("strong separation between data and client side scripts"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("data should be checked for special characters before being passed to SQL, LDAP, OS and third party commands"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("http headers are validated for each request (e.g. referrer)"), 0);


    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Cryptography"), $boldText);
    $projectDescriptionPage->addListItem(htmlspecialchars("sensitive data has been secured in memory, storage and transit"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("restricted areas require SSL"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("sensitive information not passed to/from non-SSL pages"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("proper SSL set up"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("SSL provider supports only strong algorithms"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("web based admin tools require SSL"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("decryption services protected by authentication/authorisation"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("require SSL for login page"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("securely store cryptographic keys"), 0);


    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Exception Handling"), $boldText);
    $projectDescriptionPage->addListItem(htmlspecialchars("when exceptions occur the application fails securely"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("error messages do not reveal sensitive information"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("system errors are never shown to users"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("resources are released and transactions rolled back when there is an error"), 0);


    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Auditing and Logging"), $boldText);
    $projectDescriptionPage->addListItem(htmlspecialchars("all user / system actions are logged"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("sensitive information is not logged (e.g. passwords)"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("logging for user management events (e.g. password reset)"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("unusual activity such as multiple login attempts are logged"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("logs have enough detail to reconstruct events for audit purposes"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("logging is highly configurable (logging levels) "), 0);


    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("General"), $boldText);
    $projectDescriptionPage->addListItem(htmlspecialchars("proper configuration of frameworks such as Spring, Struts, DOT NET etc."), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("libraries are up-to-date"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("system calls have their return status checked"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("efficient memory usage"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("no exposures to buffer overruns"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("code, services, commands and processes are executed using minimal privileges (least privileges)"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("code has no back doors"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("debugging code and test harnesses have been removed"), 0);



    $projectDescriptionPage->addPageBreak();