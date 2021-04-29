<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    $methodologiesPage->addTitle('Infrastructure Penetration Test', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('Red Team Partners offers Infrastructure Penetration Testing, the test asses for vulnerabilities and weaknesses within the organisations network configuration. Red Team Partners provides a service that simulates a typically leveraged attack by malicious actors in order to gain full compromise of the internal domain. This assessment provides an insight into an organisation’s security posture. An Infrastructure Penetration.', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Test can be divided into three stages:', null, $defaultParagraphStyle);

    $methodologiesPage->addImage(
        'assets/images/methodologies/discovery-assessment-exploitation-process.png',
        array(
            'width'         => 450,
            // 'height'        => 52,
            'marginTop'     => 2,
            'marginLeft'    => -1,
            'wrappingStyle' => 'behind',
            'alignment' => 'center',
        )
    );

    $methodologiesPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('Red Team Partners utilises a wide range of tools to scan and discover assets. Usually, a target IP range is provided prior to the commencing of testing, albeit some engagements require Red Team Partners to identify ranges in use. Our consultants use the latest scanning tools and techniques to perform a comprehensive audit of all IP ranges. Some of these include:', null, $defaultParagraphStyle);

    $methodologiesPage->addImage(
        'assets/images/methodologies/infrastructure-pentest-01.png',
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
    $methodologiesPage->addText('Once the discovery phase has ended, Red Team Partners consultants interpret the results and use them to identify possible attack vectors and perform manual attack simulations. Manual assessments focus on:', null, $defaultParagraphStyle);
    
    $methodologiesPage->addImage(
        'assets/images/methodologies/infrastructure-pentest-02.png',
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