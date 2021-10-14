<?php


    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    // $paragraphHeadingPStyle['align']='both';
    // var_dump($paragraphHeadingPStyle);

    // die();

    // $projectDescriptionPage->addTitle('Application Penetration Testing', 2); // TOC Bookmark 
    // $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle );
    $projectDescriptionPage->addText('Red Team Partners offers a Cloud Based Configuration Review. Many organisations today make use of cloud-based tools for the provision of email and productivity tools. Red Team Partners provided a service to ensure that the correct security controls have been configured. Cloud security and configuration assessments provide a comprehensive overview of both the security and availability of the cloud- based tenant.', null, $defaultParagraphStyle);
    $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addText('If a successful venue of attack is identified, Red Team Partners will work with you to conduct safe exploitation (where possible) and verification of the issue whilst ensuring there are no disruptions to the daily running of your organisation. All exploitation is conducted under the agreed rules of the engagement.', null, $defaultParagraphStyle);
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('Red Team Partners offers a Cloud Based Configuration that combines best practice guidelines and cyber testing.', null, $defaultParagraphStyle);
    $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addText('Red Team Partners Cloud Based Configuration Review compromises of the following checks:', null, $defaultParagraphStyle);


    $methodologyCloudBasedConfigTable = $projectDescriptionPage->addTable(
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


    $projectDescriptionPage->addTextBreak();