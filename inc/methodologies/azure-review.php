<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    $methodologiesPage->addTitle('Azure Review', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('Red Team Partners offers Cloud Based Configuration Review, specifically, Azure Review. Many organisations today make use of cloud-based tools for the provision of email and productivity tools. Red Team Partners provided a service to ensure that the correct security controls have been configured.', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('The aim of this assessment is to highlight any vulnerabilities and misconfigurations within the company’s infrastructure. Any vulnerabilities through misconfigured servers or workstations can provide a weakness within the company’s infrastructure. These misconfigured vulnerabilities can allow an external threat or attacker to easily access the company’s domain administrator and fully compromise a corporate network.', null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Test Areas', array('bold'=>true));
    $methodologiesPage->addText( 'Red Team Partners offers an Azure Review that combines best practice guidelines and cyber testing. This assessment will contain the following areas that are assessed throughout the Azure Review:' );

    $methodologiesPage->addTextBreak();
    

    $azureReviewTable = $methodologiesPage->addTable(
        array(
            'width' => 5000,
            'unit' => 'pct',
            'borderColor' => 'FFFFFF',
            'cellSpacing' => 5,
            'borderSize'=>1,
            'cellMargin' => 20
        )
    );
    
    $azureReviewTable->addRow();
    $azureReviewTable->addCell(450, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center') );
    $azureReviewTable->addCell(null, $lightRedCellStyle)->addText('RDS Config', null, array('indent'=>0.5));

    $azureReviewTable->addRow();
    $azureReviewTable->addCell(450, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $azureReviewTable->addCell(null, $lightRedCellStyle)->addText('VPN Gateway', null, array('indent'=>0.5));

    $azureReviewTable->addRow();
    $azureReviewTable->addCell(450, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $azureReviewTable->addCell(null, $lightRedCellStyle)->addText('Logical isolation - Resource groups, vnets, subnets, VNET peering and NSG implementation/config', null, array('indent'=>0.5));

    $azureReviewTable->addRow();
    $azureReviewTable->addCell(450, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $azureReviewTable->addCell(null, $lightRedCellStyle)->addText('VM and SQL Azure database access restrictions', null, array('indent'=>0.5));

    $azureReviewTable->addRow();
    $azureReviewTable->addCell(450, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $azureReviewTable->addCell(null, $lightRedCellStyle)->addText('Security Groups', null, array('indent'=>0.5));

    $azureReviewTable->addRow();
    $azureReviewTable->addCell(450, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $azureReviewTable->addCell(null, $lightRedCellStyle)->addText('Azure AD', null, array('indent'=>0.5));

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText( 'This Review also compromises the following checks:' );

    $methodologiesPage->addTextBreak();

    $azureReviewTableTwo = $methodologiesPage->addTable(
        array(
            'width' => 5000,
            'unit' => 'pct',
        )
    );
    
    $azureReviewTableTwo->addRow();
    $azureReviewTableTwo->addCell(450, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center') );
    $azureReviewTableTwo->addCell(null, $lightRedCellStyle)->addText('Ensure access controls are in place for individual users. Ensure that logging features have been enabled.', null, array('indent'=>0.5));

    $azureReviewTableTwo->addRow();
    $azureReviewTableTwo->addCell(450, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $azureReviewTableTwo->addCell(null, $lightRedCellStyle)->addText('Ensure password strength factors are implemented with sane settings.', null, array('indent'=>0.5));

    $azureReviewTableTwo->addRow();
    $azureReviewTableTwo->addCell(450, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $azureReviewTableTwo->addCell(null, $lightRedCellStyle)->addText('Ensure that multi factor authentication is offered.', null, array('indent'=>0.5));

    $azureReviewTableTwo->addRow();
    $azureReviewTableTwo->addCell(450, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $azureReviewTableTwo->addCell(null, $lightRedCellStyle)->addText('Best practise review of specific implementations such as OFS, Intune, AWS, etc.', null, array('indent'=>0.5));

    $methodologiesPage->addTextBreak();