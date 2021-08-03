<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    $methodologiesPage->addTitle('Incident Response and Investigation', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('Incident response is a process that allows organisations to identify, prioritise, contain and eradicate cyber-attacks. The goal of incident response is to ensure that organisations are aware of significant security incidents and act quickly to stop the attacker, minimize damage caused, and prevent follow on attacks or similar incidents in the future.', null, $defaultParagraphStyle);
    
    $methodologiesPage->addText("The key elements of Incident Response are listed below:", null, $defaultParagraphStyle);
    $methodologiesPage->addListItem("Preparation", 0);
    $methodologiesPage->addListItem("Identification", 0);
    $methodologiesPage->addListItem("Containment", 0);
    $methodologiesPage->addListItem("Eradication", 0);
    $methodologiesPage->addListItem("Recovery", 0);
    $methodologiesPage->addListItem("Lessons learned.", 0);

    $methodologiesPage->addTextBreak();


    $methodologiesPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText("The Red Team Partners Incident Response methodology lays out a structured 6-step plan for incident response. Below is a summary of the process, and in the following sections we’ll go into more depth about each step:", null, $defaultParagraphStyle);

    $incidentOne = $methodologiesPage->addListItemRun();
    $incidentOne->addText("Preparation", $boldText);
    $incidentOne->addText(" — review and codify an organizational security policy, perform a risk assessment, identify sensitive assets, define which are critical security incidents the team should focus on, and build a Computer Security Incident Response Team (CSIRT).", null, $defaultParagraphStyle);

    $incidentTwo = $methodologiesPage->addListItemRun();
    $incidentTwo->addText("Identification", $boldText);
    $incidentTwo->addText(" — monitor IT systems and detect deviations from normal operations and see if they represent actual security incidents. When an incident is discovered, collect additional evidence, establish its type and severity, and document everything.", null, $defaultParagraphStyle);

    $incidentThree = $methodologiesPage->addListItemRun();
    $incidentThree->addText("Containment", $boldText);
    $incidentThree->addText(" — perform short-term containment, for example by isolating the network segment that is under attack. Then focus on long-term containment, which involves temporary fixes to allow systems to be used in production while rebuilding clean systems.", null, $defaultParagraphStyle);

    $incidentFour = $methodologiesPage->addListItemRun();
    $incidentFour->addText("Eradication", $boldText);
    $incidentFour->addText(" — remove malware from all affected systems, identify the root cause of the attack, and take action to prevent similar attacks in the future.", null, $defaultParagraphStyle);

    $incidentFive = $methodologiesPage->addListItemRun();
    $incidentFive->addText("Recovery", $boldText);
    $incidentFive->addText(" — bring affected production systems back online carefully, to prevent additional attacks. Test, verify, and monitor affected systems to ensure they are back to normal activity.", null, $defaultParagraphStyle);

    $incidentSix = $methodologiesPage->addListItemRun();
    $incidentSix->addText("Lessons learned", $boldText);
    $incidentSix->addText(" — no later than two weeks from the end of the incident, perform a retrospective of the incident. Prepare complete documentation of the incident, investigate the incident further, understand what was done to contain it and whether anything in the incident response process could be improved.", null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addtext("Red Team Partners use this general format for the incident report:", null, $defaultParagraphStyle);

    $methodologiesPage->addListItem("When was the problem first detected and by whom?", 0);
    $methodologiesPage->addListItem("The scope of the incident", 0);
    $methodologiesPage->addListItem("How it was contained and eradicated", 0);
    $methodologiesPage->addListItem("Worked performed during recovery.", 0);
    $methodologiesPage->addListItem("Areas where the CIRT teams were effective.", 0);
    $methodologiesPage->addListItem("Areas that need improvement", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Results", $boldText, $defaultParagraphStyle); 

    $methodologiesPage->addText("Red Team Partners will provide a detailed report at the end of the engagement, our reports are quality controlled by certified testers. Using the traffic light system (Red=High, Yellow=Medium, Green=Low) your report will highlight any vulnerabilities/risks from this assessment. From the report provided, you will be able to understand any weaknesses that can be exploited and if your system meets expectations for functionality and security. Red Team Partners will also include remediation/comments and suggestions on how to resolve any vulnerabilities/risks found.", null, $defaultParagraphStyle);

    $methodologiesPage->addText("Should exploitation successfully permit, Red Team Partners will aim to escalate to the highest of privileges and, with your agreement, continue to leverage this access to penetrate as deep as possible in your network to help portray a realistic attack scenario.", null, $defaultParagraphStyle);

    $methodologiesPage->addPageBreak();

    