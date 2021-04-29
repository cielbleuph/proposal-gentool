<?php

    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );


    $methodologiesPage->addTitle('Firewall Configuration Assessment', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('A poorly configured firewall can allow for trivial network compromise by malicious actors. Red Team Partners firewall assessment will test the integrity of your current firewall rules and implementations to ensure nothing has been overlooked.', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Since a firewall is only as secure as the rules that have been set, it is imperative that rulesets are reviewed and audited by a separate party to the original implementer.', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('Red Team Partners firewall configuration assessment compromises of the following checks:', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();


    $methodologyFirewallAssessmentTable = $methodologiesPage->addTable(
        array(
            'width' => 5000,
            'unit' => 'pct',
            'borderColor' => 'FFFFFF',
            'cellSpacing' => 5,
            'borderSize'=>1,
            'cellMargin' => 20
        )
    );
    
    $methodologyFirewallAssessmentTable->addRow();
    $methodologyFirewallAssessmentTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center') );
    $methodologyFirewallAssessmentTable->addCell(null, $lightRedCellStyle)->addText('Ensure bidirectional filtering is in place (ingress and egress)', null, array('indent'=>0.5));

    $methodologyFirewallAssessmentTable->addRow();
    $methodologyFirewallAssessmentTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyFirewallAssessmentTable->addCell(null, $lightRedCellStyle)->addText('Ensure no inappropriate rules have been implanted, such as to allow a specific employee to insecurely work from home', null, array('indent'=>0.5));

    $methodologyFirewallAssessmentTable->addRow();
    $methodologyFirewallAssessmentTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyFirewallAssessmentTable->addCell(null, $lightRedCellStyle)->addText('Ensure that routing has been correctly implemented to prevent attacks such as VLAN hopping', null, array('indent'=>0.5));

    $methodologyFirewallAssessmentTable->addRow();
    $methodologyFirewallAssessmentTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyFirewallAssessmentTable->addCell(null, $lightRedCellStyle)->addText('Ensure VPN configuration has been correctly implemented', null, array('indent'=>0.5));

    $methodologyFirewallAssessmentTable->addRow();
    $methodologyFirewallAssessmentTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyFirewallAssessmentTable->addCell(null, $lightRedCellStyle)->addText('Ensure adequate logging has been enabled for the device', null, array('indent'=>0.5));

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('The firewall configuration review is based on security best practice guidelines.', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();