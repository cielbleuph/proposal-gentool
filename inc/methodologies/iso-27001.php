<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    $methodologiesPage->addTitle( htmlspecialchars("ISO 27001 Consultancy"), 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Overview', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText(htmlspecialchars("Red Team Partners would ensure that your business and the data you hold is protected and secure from the threat of cyber-attack and insider risk, and that your company’s security posture will minimise the possibility of a data breach or information leakage & ensure the continuity of your business in the event of a cyber incident or other disruptive event."), null, $defaultParagraphStyle);

    $methodologiesPage->addImage(
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

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Goals', $paragraphHeadingStyle, $paragraphHeadingPStyle);

    $methodologiesPage->addListItem(htmlspecialchars("Provide “independent” reassurance of cyber & information security provision;"), 0);
    $methodologiesPage->addListItem(htmlspecialchars("Protect customer information & your reputation;"), 0);
    $methodologiesPage->addListItem(htmlspecialchars("Decrease the risk and personal liability of a data breach to directors & partners;"), 0);
    $methodologiesPage->addListItem(htmlspecialchars("Decrease the risk of litigation following a data breach;"), 0);
    $methodologiesPage->addListItem(htmlspecialchars("Compliance/Certification with the following standards / benchmarks within approximately12 months:"), 0);


    $methodologiesPage->addListItem(htmlspecialchars("HMG Cyber Essentials Plus;"), 1);
    $methodologiesPage->addListItem(htmlspecialchars("HMG “10 Steps to Cyber Security” Frame work IASME Governance Standards;"), 1);
    $methodologiesPage->addListItem(htmlspecialchars("ISO 27001."), 1);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Success Metrics", $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText("You will have a clear and independent picture of the current state of cyber and information security provision.", null, $defaultParagraphStyle);
    $methodologiesPage->addText("You will know what is required to better secure the information you hold, increase your cyber resilience, and as a result protect your business reputation.", null, $defaultParagraphStyle);
    $methodologiesPage->addText("Certification with the key standards (above) are the major milestones against which progress will be measured. Red Team Partners Consulting’s “Cyber Security Steps Programme” is a progressive programme to help you achieve implementation and compliance with those standards as your organisational information security maturity develops.", null, $defaultParagraphStyle);
    $methodologiesPage->addText("Our proprietary security analysis is mapped against:", null, $defaultParagraphStyle);

    

    $methodologiesPage->addListItem(htmlspecialchars("ISO 27001 for Information Security"), 0);
    $methodologiesPage->addListItem(htmlspecialchars("GDPR, NIS and the Cyber Security Directive"), 0);
    $methodologiesPage->addListItem(htmlspecialchars("ISO 22301 for Business Continuity"), 0);
    $methodologiesPage->addListItem(htmlspecialchars("Insider Threat Management as modelled on the best-practice principles of New Scotland Yard, US Secret Service and reflected in advice from UK Centre for the Protection of National Infrastructure (CPNI)"), 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText(htmlspecialchars("Cyber/Information Security Health Check"), $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText(htmlspecialchars("Our Health Check process involves key person/stakeholder interviews over a period of 1 week to 10 days. Outside of this, Red Team Partners will work from our end on the certification, the analysis and production of findings, which will then be presented to you within 30 days from project commencement. During this process, we will correspond as required to gather information, clarify elements, or to gather supplemental information, and this may include the use of additional scheduled conference calls with key stakeholders."), null, $defaultParagraphStyle);  

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText(htmlspecialchars("Cyber & Information Security Governance"), $paragraphHeadingStyle, $paragraphHeadingPStyle);

    $methodologiesPage->addText(htmlspecialchars("Strengths and weaknesses in your current security and compliance posture will be identified at the Health Check stage. We will then develop with you a project road map to achieve the milestones identified."), null, $defaultParagraphStyle);

    $methodologiesPage->addText(htmlspecialchars("Following our Cyber Security Steps Programme, Red Team Partners will then work with you to help build your Cyber Essentials Certification and implement an Information Security Management System (ISMS) to achieve compliance and certification with the UK Government’s “10 Steps to Cyber Security” risk management regime and IASME Governance Standards with support your journey towards achieving ISO 27001 certification."), null, $defaultParagraphStyle);

    $methodologiesPage->addText(htmlspecialchars("Guarantee: Red Team Partners Consulting will generate the results agreed by both companies as described in the Goals section of this document."), null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Test Area", $paragraphHeadingStyle, $paragraphHeadingPStyle);

    $methodologiesPage->addText(htmlspecialchars("1.    ISO 27001 Assessment"), null, $defaultParagraphStyle);
    $methodologiesPage->addText(htmlspecialchars("       Review current operational & IT processes"), null, $defaultParagraphStyle);
    $methodologiesPage->addText(htmlspecialchars("       Review of existing documentation and interviews with team"), null, $defaultParagraphStyle);
    $methodologiesPage->addText(htmlspecialchars("       Review against ISO27001 criteria"), null, $defaultParagraphStyle);
    $methodologiesPage->addText(htmlspecialchars("2.    ISO27001 Certification Roadmap"), null, $defaultParagraphStyle);
    $methodologiesPage->addText(htmlspecialchars("       High level plan and outline of path to Certification"), null, $defaultParagraphStyle);
    $methodologiesPage->addText(htmlspecialchars("       Agree approach for Critical areas"), null, $defaultParagraphStyle);
    $methodologiesPage->addText(htmlspecialchars("       Initial review and discussion with Team"), null, $defaultParagraphStyle);
    $methodologiesPage->addText(htmlspecialchars("3.    ISO27001 Remediation"), null, $defaultParagraphStyle);
    $methodologiesPage->addText(htmlspecialchars("       Initial Remediation Steps -e.g. creation of policies"), null, $defaultParagraphStyle);
    $methodologiesPage->addText(htmlspecialchars("       Detailed Plan of ISO Controls to address and timeline"), null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();







