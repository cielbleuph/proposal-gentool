<?php 

    // $projectDisclaimerPage->addText("Two!");

    $projectDisclaimerTextRunOne = $projectDisclaimerPage->addTextRun();
    $projectDisclaimerTextRunOne->addText("Any security testing which is conducted ");
    $projectDisclaimerTextRunOne->addText("on the production environment ", $boldText);
    $projectDisclaimerTextRunOne->addText("needs to consider this disclaimer.");
    
    $projectDisclaimerPage->addText( htmlspecialchars("Red Team Partners security team will utilize a large proportion of manual testing and part of the pen test will be conducted with the help of automated tools. The tools that are in addition to the manual verification scenarios will be included in the final report.") );

    $projectDisclaimerPage->addTextBreak();
    $projectDisclaimerPage->addText( htmlspecialchars("Disclaimer:"), array_merge( $boldText, $italicText ));
    $projectDisclaimerPage->addText( htmlspecialchars("Even though the security team will do all the security testing only with safe checks, it might be possible that a certain command that can be considered usually as a “safe-check” the back-end can interpret it in a way that can affect the whole application/infrastructure, through Denial of Service, data deletion or integrity loss or bad existing user experience.") );

    $projectDisclaimerPage->addTextBreak();
    $projectDisclaimerPage->addText( htmlspecialchars("Backup your data:"), array_merge( $boldText, $italicText ));
    $projectDisclaimerPage->addText(htmlspecialchars("It is always a good practice for the client’s IT team to make a backup of all configurations, data, and codes before the test begins. Having a back-up will ensure that data can be restored to pre-test configurations in the event that the test may cause a system to crash or data to be lost. The Security Team recommends that the client’s internal IT or support team be readily available to resolve technical issues with the testing company during the testing phase."));
