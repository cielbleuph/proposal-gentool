<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    // $projectDescriptionPage->addTitle('Secure Code Review', 2); // TOC Bookmark 
    // $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('Red Team Partners will conduct a Secure Code Review. This code review is a systematic examination (sometimes referred to as peer review) of computer source code. It is intended to find mistakes overlooked in software development, improving the overall quality of software. Reviews are done in various forms such as pair programming, informal walkthroughs, and formal inspections.', null, $defaultParagraphStyle);
    $projectDescriptionPage->addTextBreak();

    // $projectDescriptionPage->addImage(
    //     ASSETS_IMG_DIR . 'methodologies/secure-code-review-01.png',
    //     array(
    //         'width'         => 450,
    //         // 'height'        => 52,
    //         'marginTop'     => 2,
    //         'marginLeft'    => -1,
    //         'wrappingStyle' => 'behind',
    //         'alignment' => 'center',
    //     )
    // );
    
    $projectDescriptionPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('Code review is probably the single most effective technique for identifying security flaws. When used together with automated tools and manual penetration testing, code review can significantly increase the cost-effectiveness of an application security verification effort.', null, $defaultParagraphStyle);
    
    $projectDescriptionPage->addText('This guide describes the mechanics of reviewing code for certain vulnerabilities and provides limited guidance on how the effort should be structured and executed.', null, $defaultParagraphStyle);
    
    $projectDescriptionPage->addText('Manual security code review provides insight into the “real risk” associated with insecure code.', null, $defaultParagraphStyle);
    
    $projectDescriptionPage->addText('A human reviewer can understand the context for certain coding practices, and make a serious risk estimate that accounts for both the likelihood of attack and the business impact of a breach.', null, $defaultParagraphStyle);
    
    
    $projectDescriptionPage->addText('Secure Code Review Checklist', array('underline'=>'single', "bold"=>true), $defaultParagraphStyle);
    $projectDescriptionPage->addText('Design', array('bold'=>true), $defaultParagraphStyle);
    $projectDescriptionPage->addListItem('architecture and design documentation is complete', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('user and role based privileges are documented', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('site is well partitioned into public and restricted pages', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('security is layered each layer assumes other layers may have been compromised', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('security design covers all 8 principles of web security: authentication, authorization,', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('confidentiality, message integrity, data integrity, availability, non-repudiation', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('sensitive data has been identified', 0, null, null, $defaultParagraphListStyle);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Information Gathering', array('bold'=>true), $defaultParagraphStyle);
    $projectDescriptionPage->addListItem('Get a copy of the code', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('Manually explore the file structure of the code', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('Look for any missing pieces of code', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('Check for frameworks / libraries / dependencies', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('Check for application routes and their inputs', 0, null, null, $defaultParagraphListStyle);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Configuration', array('bold'=>true), $defaultParagraphStyle);
    $projectDescriptionPage->addListItem('Sensitive data is not hard-coded in configuration files', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('Develop and test code are properly segregated from production', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('Dependencies are up to date', 0, null, null, $defaultParagraphListStyle);
    
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Secure Transmission', array('bold'=>true), $defaultParagraphStyle);
    $projectDescriptionPage->addListItem('Sensitive data is only transmitted over an SSL connection', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('Site is partitioned into private and public URLs', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('Sensitive data has been secured in memory, storage and transit', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('Sensitive data doesn’t leak to non-private channels', 0, null, null, $defaultParagraphListStyle);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Authentication and User Management', array('bold'=>true), $defaultParagraphStyle);
    $projectDescriptionPage->addListItem('user credentials are encrypted in the data store', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('security policies are configurable (not hardcoded)', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('standard security frameworks are used (instead of custom code)', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('SSL is used to protect user credentials and authentication tokens', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('authentication cookies are not persisted', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('authentication cookies are encrypted', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('cookie names and paths are used', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('application handles user management events such as authentication failure, password reset password change, account lockout and cancel account', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('application handles suspicious events such as multiple failed logon attempts, session replay and attempted access to restricted resources ', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('strong passwords policies are enforced', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('authentication credentials are not passed by HTTP GET', 0, null, null, $defaultParagraphListStyle);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Authorization', array('bold'=>true), $defaultParagraphStyle);
    $projectDescriptionPage->addListItem('authentication and authorization should be the first logic executed for each request', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('authorization checks are granular (page and directory level)', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('deny access to pages and data by default', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('re-authenticate for requests that have side-effects', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('ACLs are configured for all files', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('authorization based on clearly defined roles', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('authorization works properly and cannot be circumvented by parameter manipulation', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('authorization cannot be bypassed by cookie manipulation ', 0, null, null, $defaultParagraphListStyle);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Data Validation', array('bold'=>true), $defaultParagraphStyle);
    $projectDescriptionPage->addListItem('All user input is validated for proper type, length, format and range', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('Validation on user input is done server side)', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('Uploaded files are validated for content type, size, file type and filename', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('Special characters are sanitized before being used in external systems, like databases', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('Does invalid input trigger handled exceptions', 0, null, null, $defaultParagraphListStyle);
    
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Application Output', array('bold'=>true), $defaultParagraphStyle);
    $projectDescriptionPage->addListItem('All page output is properly encoded', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('All header output is URL encoded', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('Cache headers are properly set on sensitive data', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('Security headers are properly set on the application', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('Sensitive Application information is not revealed to the user', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('Error messages don\'t reveal sensitive information', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('Error messages aren\'t user controllable', 0, null, null, $defaultParagraphListStyle);
    
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Session Management', array('bold'=>true), $defaultParagraphStyle);
    $projectDescriptionPage->addListItem('no session parameters passed in URLs', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('session cookies expire in a reasonably short time', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('session cookies are encrypted', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('session data is being validated', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('private data in cookies is kept to a minimum', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('application avoids excessive cookie use', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('session id is complex', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('session storage is secure', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('application properly handles invalid session ids', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('session limits such as inactivity timeout are enforced', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('logout invalids the session', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('session resources are released when session invalidated ', 0, null, null, $defaultParagraphListStyle);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Input Validation', array('bold'=>true), $defaultParagraphStyle);
    $projectDescriptionPage->addListItem('all external input is validated without exception', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('where possible input is restricted to known good chars', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('data is validated server side (security should not rely on client-side validations)', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('application validates numerical input and rejects unexpected input', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('application efficiently evaluates input length', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('strong separation between data and commands', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('strong separation between data and client side scripts', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('data should be checked for special characters before being passed to SQL, LDAP, OS and third party commands', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('http headers are validated for each request (e.g. referrer)', 0, null, null, $defaultParagraphListStyle);


    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Cryptography', array('bold'=>true), $defaultParagraphStyle);
    $projectDescriptionPage->addListItem('sensitive data has been secured in memory, storage and transit', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('restricted areas require SSL', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('sensitive information not passed to/from non-SSL pages', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('proper SSL set up', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('SSL provider supports only strong algorithms', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('web based admin tools require SSL', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('decryption services protected by authentication/authorisation', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('require SSL for login page', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('securely store cryptographic keys', 0, null, null, $defaultParagraphListStyle);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Exception Handling', array('bold'=>true), $defaultParagraphStyle);
    $projectDescriptionPage->addListItem('when exceptions occur the application fails securely', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('error messages do not reveal sensitive information', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('system errors are never shown to users', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('resources are released and transactions rolled back when there is an error', 0, null, null, $defaultParagraphListStyle);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Auditing and Logging', array('bold'=>true), $defaultParagraphStyle);
    $projectDescriptionPage->addListItem('all user / system actions are logged', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('sensitive information is not logged (e.g. passwords)', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('logging for user management events (e.g. password reset)', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('unusual activity such as multiple login attempts are logged', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('logs have enough detail to reconstruct events for audit purposes', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('logging is highly configurable (logging levels) ', 0, null, null, $defaultParagraphListStyle);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('General', array('bold'=>true), $defaultParagraphStyle);
    $projectDescriptionPage->addListItem('proper configuration of frameworks such as Spring, Struts, DOT NET etc.', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('libraries are up-to-date', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('system calls have their return status checked', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('efficient memory usage', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('no exposures to buffer overruns', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('code, services, commands and processes are executed using minimal privileges (least privileges)', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('code has no back doors', 0, null, null, $defaultParagraphListStyle);
    $projectDescriptionPage->addListItem('debugging code and test harnesses have been removed ', 0, null, null, $defaultParagraphListStyle);

    $projectDescriptionPage->addPageBreak();