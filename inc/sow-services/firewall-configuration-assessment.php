<?php

    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );


    // $projectDescriptionPage->addTitle('Firewall Configuration Assessment', 2); // TOC Bookmark 
    // $projectDescriptionPage->addTextBreak();
    
    $projectDescriptionPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('A poorly configured firewall can allow for trivial network compromise by malicious actors. Red Team Partners firewall assessment will test the integrity of your current firewall rules and implementations to ensure nothing has been overlooked.', null, $defaultParagraphStyle);
    $projectDescriptionPage->addText('Since a firewall is only as secure as the rules that have been set, it is imperative that rulesets are reviewed and audited by a separate party to the original implementer.', null, $defaultParagraphStyle);
    
    $projectDescriptionPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('Red Team Partners firewall configuration assessment compromises of the following checks:', null, $defaultParagraphStyle);
    $projectDescriptionPage->addTextBreak();


    $projectDescriptionPage->addListItem("Ensure bidirectional filtering is in place (ingress and egress)", 0);
    $projectDescriptionPage->addListItem("Ensure no inappropriate rules have been implanted, such as to allow a specific employee to insecurely work from home", 0);
    $projectDescriptionPage->addListItem("Ensure that routing has been correctly implemented to prevent attacks such as VLAN hopping", 0);
    $projectDescriptionPage->addListItem("Ensure VPN configuration has been correctly implemented", 0);
    $projectDescriptionPage->addListItem("Ensure adequate logging has been enabled for the device", 0);

    // $methodologyFirewallAssessmentTable = $projectDescriptionPage->addTable(
    //     array(
    //         'width' => 5000,
    //         'unit' => 'pct',
    //         'borderColor' => 'FFFFFF',
    //         'cellSpacing' => 5,
    //         'borderSize'=>1,
    //         'cellMargin' => 20
    //     )
    // );
    
    // $methodologyFirewallAssessmentTable->addRow();
    // $methodologyFirewallAssessmentTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center') );
    // $methodologyFirewallAssessmentTable->addCell(null, $lightRedCellStyle)->addText('Ensure bidirectional filtering is in place (ingress and egress)', null, array('indent'=>0.5));

    // $methodologyFirewallAssessmentTable->addRow();
    // $methodologyFirewallAssessmentTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $methodologyFirewallAssessmentTable->addCell(null, $lightRedCellStyle)->addText('Ensure no inappropriate rules have been implanted, such as to allow a specific employee to insecurely work from home', null, array('indent'=>0.5));

    // $methodologyFirewallAssessmentTable->addRow();
    // $methodologyFirewallAssessmentTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $methodologyFirewallAssessmentTable->addCell(null, $lightRedCellStyle)->addText('Ensure that routing has been correctly implemented to prevent attacks such as VLAN hopping', null, array('indent'=>0.5));

    // $methodologyFirewallAssessmentTable->addRow();
    // $methodologyFirewallAssessmentTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $methodologyFirewallAssessmentTable->addCell(null, $lightRedCellStyle)->addText('Ensure VPN configuration has been correctly implemented', null, array('indent'=>0.5));

    // $methodologyFirewallAssessmentTable->addRow();
    // $methodologyFirewallAssessmentTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $methodologyFirewallAssessmentTable->addCell(null, $lightRedCellStyle)->addText('Ensure adequate logging has been enabled for the device', null, array('indent'=>0.5));

    // $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('The firewall configuration review is based on security best practice guidelines.', null, $defaultParagraphStyle);
    
    $projectDescriptionPage->addPageBreak();