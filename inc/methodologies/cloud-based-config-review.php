<?php


    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    $methodologiesPage->addTitle('Cloud Based Configuration', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle );
    $methodologiesPage->addText('Red Team Partners offers a Cloud Based Configuration Review. Many organisations today make use of cloud-based tools for the provision of email and productivity tools. Red Team Partners provided a service to ensure that the correct security controls have been configured. Cloud security and configuration assessments provide a comprehensive overview of both the security and availability of the cloud- based tenant.', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('If a successful venue of attack is identified, Red Team Partners will work with you to conduct safe exploitation (where possible) and verification of the issue whilst ensuring there are no disruptions to the daily running of your organisation. All exploitation is conducted under the agreed rules of the engagement.', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('Red Team Partners offers a Cloud Based Configuration that combines best practice guidelines and cyber testing.', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Red Team Partners Cloud Based Configuration Review compromises of the following checks:', null, $defaultParagraphStyle);


    $methodologyCloudBasedConfigTable = $methodologiesPage->addTable(
        array(
            'width' => 5000,
            'unit' => 'pct',
            'borderColor' => 'FFFFFF',
            'cellSpacing' => 5,
            'borderSize'=>1,
            'cellMargin' => 20
        )
    );
    
    $methodologyCloudBasedConfigTable->addRow();
    $methodologyCloudBasedConfigTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center') );
    $methodologyCloudBasedConfigTable->addCell(null, $lightRedCellStyle)->addText('Ensure access controls are in place for individual users.', null, array('indent'=>0.5));

    $methodologyCloudBasedConfigTable->addRow();
    $methodologyCloudBasedConfigTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyCloudBasedConfigTable->addCell(null, $lightRedCellStyle)->addText('Ensure that logging features have been enabled.', null, array('indent'=>0.5));

    $methodologyCloudBasedConfigTable->addRow();
    $methodologyCloudBasedConfigTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyCloudBasedConfigTable->addCell(null, $lightRedCellStyle)->addText('Ensure password strength factors are implemented with sane settings.', null, array('indent'=>0.5));

    $methodologyCloudBasedConfigTable->addRow();
    $methodologyCloudBasedConfigTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyCloudBasedConfigTable->addCell(null, $lightRedCellStyle)->addText('Ensure that multi factor authentication is offered.', null, array('indent'=>0.5));

    $methodologyCloudBasedConfigTable->addRow();
    $methodologyCloudBasedConfigTable->addCell(400, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $methodologyCloudBasedConfigTable->addCell(null, $lightRedCellStyle)->addText('Best practise review of specific implementations such as OFS, Intune, AWS, etc. etc.', null, array('indent'=>0.5));


    $methodologiesPage->addTextBreak();