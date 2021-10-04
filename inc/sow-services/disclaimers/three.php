<?php 

    // $projectDisclaimerPage->addText("Three!");

    $txtRun = $projectDisclaimerPage->addTextRun();
    $txtRun->addText("Any security assessment which is conducted ");
    $txtRun->addText("on the production environment ", $boldText);
    $txtRun->addText("needs to consider this disclaimer.");

    $projectDisclaimerPage->addText("Red Team Partners security team will conduct the assessment mostly with the help of automated tools. The tools that are in addition to the manual verification scenarios will be included in the final report.");

    $projectDisclaimerPage->addTextBreak();

    $projectDisclaimerPage->addText( htmlspecialchars("Disclaimer:"), array_merge( $boldText, $italicText ));
    $projectDisclaimerPage->addText(htmlspecialchars("Even though the security team will do all the security assessment only with safe checks, it might be possible that a certain command that can be considered usually as a “safe-check” the back-end can interpret it in a way that can affect the whole application/infrastructure, through Denial of Service, data deletion or integrity loss or bad existing user experience."));

    $projectDisclaimerPage->addText(htmlspecialchars("During the security assessment, if there will be certain functionalities that are uncertain in terms of the testing, the security team will notify the owner of the application and ask for approval, without conducting the specific assessment."));

    $projectDisclaimerPage->addTextBreak();
    $projectDisclaimerPage->addText( htmlspecialchars("Disclaimer:"), array_merge( $boldText, $italicText ));
    $projectDisclaimerPage->addText(htmlspecialchars("It is always a good practice for the client’s IT team to make a backup of all configurations, data, and codes before the assessment begins. Having a back-up will ensure that data can be restored to pre-assessment configurations in the event that the assessment may cause a system to crash or data to be lost. The Security Team recommends that the client’s internal IT or support team be readily available to resolve technical issues with the testing company during the assessment phase."));

    