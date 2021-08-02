<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    $methodologiesPage->addTitle('Phishing Simulation', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('Phishing is one of the most common paths to compromise utilised by attackers in real-world attacks. A phishing assessment aims to highlight weak security controls and susceptible employees to target for further in-depth phishing awareness training.', null, $defaultParagraphStyle);
    $methodologiesPage->addText('Before the engagement, Red Team Partners work with you to agree on an appropriate scope, including phishing templates and scenarios. In some cases, you may have a specific list of employees who you’d like to be targeted (spear phishing); whilst in other cases, the attempt will be a ‘smash and grab’ attack, covering entire departments or whole organisations.', null, $defaultParagraphStyle);
    $methodologiesPage->addText('Once agreed, Red Team Partners will attempt to register a visually similar domain to your own to maximize the success of the engagement.', null, $defaultParagraphStyle);
    
    $methodologiesPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('The following areas are assessed throughout the Phishing Assessment:', null, $defaultParagraphStyle);


    $methodologyPhishingSimulationTable = $methodologiesPage->addTable(
        array(
            'width' => 5000,
            'unit' => 'pct',
            'borderColor' => 'FFFFFF',
            'cellSpacing' => 5,
            'borderSize'=>1,
            'cellMargin' => 20
        )
    );
    
    $methodologyPhishingSimulationTable->addRow();
    $methodologyPhishingSimulationTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center') );
    $methodologyPhishingSimulationTable->addCell(null, $lightRedCellStyle)->addText('Susceptibility of employees', null, array('indent'=>0.5));

    $methodologyPhishingSimulationTable->addRow();
    $methodologyPhishingSimulationTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyPhishingSimulationTable->addCell(null, $lightRedCellStyle)->addText('Number of credentials/malicious documents opened', null, array('indent'=>0.5));

    $methodologyPhishingSimulationTable->addRow();
    $methodologyPhishingSimulationTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyPhishingSimulationTable->addCell(null, $lightRedCellStyle)->addText('Number of links clicked/documents downloaded', null, array('indent'=>0.5));

    $methodologyPhishingSimulationTable->addRow();
    $methodologyPhishingSimulationTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyPhishingSimulationTable->addCell(null, $lightRedCellStyle)->addText('Number of e-mails open', null, array('indent'=>0.5));

    $methodologyPhishingSimulationTable->addRow();
    $methodologyPhishingSimulationTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyPhishingSimulationTable->addCell(null, $lightRedCellStyle)->addText('Number of replies to the malicious e-mail', null, array('indent'=>0.5));

    $methodologyPhishingSimulationTable->addRow();
    $methodologyPhishingSimulationTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyPhishingSimulationTable->addCell(null, $lightRedCellStyle)->addText('Reporting processes in place.', null, array('indent'=>0.5));

    $methodologiesPage->addPageBreak();