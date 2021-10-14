<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    // $projectDescriptionPage->addTitle( htmlspecialchars("ISO 27001 Consultancy"), 2); // TOC Bookmark 
    // $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Overview', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText(htmlspecialchars("Red Team Partners would ensure that your business and the data you hold is protected and secure from the threat of cyber-attack and insider risk, and that your company’s security posture will minimise the possibility of a data breach or information leakage & ensure the continuity of your business in the event of a cyber incident or other disruptive event."), null, $defaultParagraphStyle);

    $projectDescriptionPage->addImage(
        ASSETS_IMG_DIR . 'methodologies/iso27001-consultancy.png',
        array(
            'width'         => 450,
            // 'height'        => 52,
            'marginTop'     => 2,
            'marginLeft'    => -1,
            'wrappingStyle' => 'behind',
            'alignment' => 'center',
        )
    );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Goals', $paragraphHeadingStyle, $paragraphHeadingPStyle);

    $projectDescriptionPage->addListItem(htmlspecialchars("Provide “independent” reassurance of cyber & information security provision;"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Protect customer information & your reputation;"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Decrease the risk and personal liability of a data breach to directors & partners;"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Decrease the risk of litigation following a data breach;"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Compliance/Certification with the following standards / benchmarks within approximately12 months:"), 0);


    $projectDescriptionPage->addListItem(htmlspecialchars("HMG Cyber Essentials Plus;"), 1);
    $projectDescriptionPage->addListItem(htmlspecialchars("HMG “10 Steps to Cyber Security” Frame work IASME Governance Standards;"), 1);
    $projectDescriptionPage->addListItem(htmlspecialchars("ISO 27001."), 1);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Success Metrics", $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText("You will have a clear and independent picture of the current state of cyber and information security provision.", null, $defaultParagraphStyle);
    $projectDescriptionPage->addText("You will know what is required to better secure the information you hold, increase your cyber resilience, and as a result protect your business reputation.", null, $defaultParagraphStyle);
    $projectDescriptionPage->addText("Certification with the key standards (above) are the major milestones against which progress will be measured. Red Team Partners Consulting’s “Cyber Security Steps Programme” is a progressive programme to help you achieve implementation and compliance with those standards as your organisational information security maturity develops.", null, $defaultParagraphStyle);
    $projectDescriptionPage->addText("Our proprietary security analysis is mapped against:", null, $defaultParagraphStyle);

    

    $projectDescriptionPage->addListItem(htmlspecialchars("ISO 27001 for Information Security"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("GDPR, NIS and the Cyber Security Directive"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("ISO 22301 for Business Continuity"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Insider Threat Management as modelled on the best-practice principles of New Scotland Yard, US Secret Service and reflected in advice from UK Centre for the Protection of National Infrastructure (CPNI)"), 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Cyber/Information Security Health Check"), $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText(htmlspecialchars("Our Health Check process involves key person/stakeholder interviews over a period of 1 week to 10 days. Outside of this, Red Team Partners will work from our end on the certification, the analysis and production of findings, which will then be presented to you within 30 days from project commencement. During this process, we will correspond as required to gather information, clarify elements, or to gather supplemental information, and this may include the use of additional scheduled conference calls with key stakeholders."), null, $defaultParagraphStyle);  

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Cyber & Information Security Governance"), $paragraphHeadingStyle, $paragraphHeadingPStyle);

    $projectDescriptionPage->addText(htmlspecialchars("Strengths and weaknesses in your current security and compliance posture will be identified at the Health Check stage. We will then develop with you a project road map to achieve the milestones identified."), null, $defaultParagraphStyle);

    $projectDescriptionPage->addText(htmlspecialchars("Following our Cyber Security Steps Programme, Red Team Partners will then work with you to help build your Cyber Essentials Certification and implement an Information Security Management System (ISMS) to achieve compliance and certification with the UK Government’s “10 Steps to Cyber Security” risk management regime and IASME Governance Standards with support your journey towards achieving ISO 27001 certification."), null, $defaultParagraphStyle);

    $projectDescriptionPage->addText(htmlspecialchars("Guarantee: Red Team Partners Consulting will generate the results agreed by both companies as described in the Goals section of this document."), null, $defaultParagraphStyle);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Test Area", $paragraphHeadingStyle, $paragraphHeadingPStyle);

    $projectDescriptionPage->addText(htmlspecialchars("1.    ISO 27001 Assessment"), null, $defaultParagraphStyle);
    $projectDescriptionPage->addText(htmlspecialchars("       Review current operational & IT processes"), null, $defaultParagraphStyle);
    $projectDescriptionPage->addText(htmlspecialchars("       Review of existing documentation and interviews with team"), null, $defaultParagraphStyle);
    $projectDescriptionPage->addText(htmlspecialchars("       Review against ISO27001 criteria"), null, $defaultParagraphStyle);
    $projectDescriptionPage->addText(htmlspecialchars("2.    ISO27001 Certification Roadmap"), null, $defaultParagraphStyle);
    $projectDescriptionPage->addText(htmlspecialchars("       High level plan and outline of path to Certification"), null, $defaultParagraphStyle);
    $projectDescriptionPage->addText(htmlspecialchars("       Agree approach for Critical areas"), null, $defaultParagraphStyle);
    $projectDescriptionPage->addText(htmlspecialchars("       Initial review and discussion with Team"), null, $defaultParagraphStyle);
    $projectDescriptionPage->addText(htmlspecialchars("3.    ISO27001 Remediation"), null, $defaultParagraphStyle);
    $projectDescriptionPage->addText(htmlspecialchars("       Initial Remediation Steps -e.g. creation of policies"), null, $defaultParagraphStyle);
    $projectDescriptionPage->addText(htmlspecialchars("       Detailed Plan of ISO Controls to address and timeline"), null, $defaultParagraphStyle);

    $projectDescriptionPage->addTextBreak();







