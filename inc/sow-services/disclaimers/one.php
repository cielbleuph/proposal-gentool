<?php 

    // $projectDisclaimerPage->addText("One!");

    $projectDisclaimerTextRunOne = $projectDisclaimerPage->addTextRun();
    $projectDisclaimerTextRunOne->addText("Any security testing which is conducted ");
    $projectDisclaimerTextRunOne->addText("on the production environment ", $boldText);
    $projectDisclaimerTextRunOne->addText("needs to consider this disclaimer.");
    
    $projectDisclaimerPage->addText( htmlspecialchars("Red Team Partners security team will utilize a large proportion of manual testing and part of the pen test will be conducted with the help of automated tools. The tools that are in addition to the manual verification scenarios will be included in the final report.") );

    $projectDisclaimerPage->addText( htmlspecialchars("Having a large manual coverage, will allow the security team to carefully handle the tests, only proceeding with safe-checks.") );

    $projectDisclaimerPage->addTextBreak();

    $projectDisclaimerPage->addText( htmlspecialchars("During the assessment, the team will only conduct tests that will be under the Pen tester’s control.") );

    $projectDisclaimerPage->addText( htmlspecialchars("The penetration testing approach will be as follow: ") );
    $projectDisclaimerPage->addListItem( htmlspecialchars("Manual investigation of application code"), 0 );
    $projectDisclaimerPage->addListItem( htmlspecialchars("Passive interception of application requests"), 0 );
    $projectDisclaimerPage->addListItem( htmlspecialchars("Testing parameters, only with safe checks based on business logic and OWASP Top 10. "), 0 );
    $projectDisclaimerPage->addListItem( htmlspecialchars("Test of business logic flows such as register/forgot password, login, etc. (as a normal user)"), 0 );

    $projectDisclaimerPage->addTextBreak();

    $projectDisclaimerPage->addText( htmlspecialchars("During the security testing, if there will be certain functionalities that are uncertain in terms of the testing, the pen tester will notify the owner of the application and ask for approval, without conducting the specific tests."));

    $projectDisclaimerPage->addTextBreak();

    $projectDisclaimerPage->addText( htmlspecialchars("Backup your data:"), array_merge( $boldText, $italicText ));
    $projectDisclaimerPage->addText( htmlspecialchars("It is always a good practice for the client’s IT team to make a backup of all configurations, data, and codes before the test begins. Having a back-up will ensure that data can be restored to pre-test configurations in the event that the test may cause a system to crash or data to be lost. The Security Team recommends that the client’s internal IT or support team be readily available to resolve technical issues with the testing company during the testing phase.") );


    $projectDisclaimerPage->addTextBreak();
    $projectDisclaimerPage->addText( htmlspecialchars("Disclaimer:"), array_merge( $boldText, $italicText ));

    $projectDisclaimerPage->addText( htmlspecialchars("Even though the security team will do all the security testing only with safe checks, it might be possible that a certain command that can be considered usually as a “safe-check” the back-end can interpret it in a way that can affect the whole application/infrastructure, through Denial of Service, data deletion or integrity loss or bad existing user experience.") );

    $projectDisclaimerPage->addText( htmlspecialchars("Another risk that should be taken into consideration is that having the testing done on production and only with certain specific tests (not going in-depth) at the pen tester’s disposal, the security team might not identify all of the vulnerabilities within the application.") );





