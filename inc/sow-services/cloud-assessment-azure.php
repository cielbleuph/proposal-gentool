<?php 

    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    $projectDescriptionPage->addTitle( htmlspecialchars("PROJECT DESCRIPTION FOR CLOUD ASSESSMENT (AZURE)") , 1); // TOC Bookmark 
    $projectDescriptionPage->addLine($lineStyle);

    $projectDescriptionPage->addTitle( htmlspecialchars("FUNDAMENTALS"), 2); // TOC Bookmark 
    $projectDescriptionPage->addText( htmlspecialchars("Red Team Partners offers Cloud Based Configuration Review, specifically, Azure Review. Many organisations today make use of cloud-based tools for the provision of email and productivity tools. Red Team Partners provided a service to ensure that the correct security controls have been configured.") );

    $projectDescriptionPage->addText(htmlspecialchars("The aim of this assessment is to highlight any vulnerabilities and misconfigurations within the company’s infrastructure. Any vulnerabilities through misconfigured servers or workstations can provide a weakness within the company’s infrastructure. These misconfigured vulnerabilities can allow an external threat or attacker to easily access the company’s domain administrator and fully compromise a corporate network."));


    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( htmlspecialchars("TEST AREAS"), 2); // TOC Bookmark 
    $projectDescriptionPage->addText(htmlspecialchars("Red Team Partners offers an Azure Review that combines best practice guidelines and cyber testing. This assessment will contain the following areas that are assessed throughout the Azure Review:"));


    $azureCloudReviewTableOne = $projectDescriptionPage->addTable(
        array(
            'width' => 5000,
            'unit' => 'pct',
            'borderColor' => 'FFFFFF',
            'cellSpacing' => 5,
            'borderSize'=>1,
            'cellMargin' => 20
        )
    );
    
    $azureCloudReviewTableOne->addRow();
    $azureCloudReviewTableOne->addCell(450, $DarkRedCellStyle)->addText( htmlspecialchars('-'), array('color'=>'FFFFFF'), array('alignment'=>'center') );
    $azureCloudReviewTableOne->addCell(null, $lightRedCellStyle)->addText( htmlspecialchars('RDS Config'), null, array('indent'=>0.5) );

    $azureCloudReviewTableOne->addRow();
    $azureCloudReviewTableOne->addCell(450, $DarkRedCellStyle)->addText( htmlspecialchars('-'), array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $azureCloudReviewTableOne->addCell(null, $lightRedCellStyle)->addText( htmlspecialchars('VPN Gateway'), null, array('indent'=>0.5));

    $azureCloudReviewTableOne->addRow();
    $azureCloudReviewTableOne->addCell(450, $DarkRedCellStyle)->addText( htmlspecialchars('-'), array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $azureCloudReviewTableOne->addCell(null, $lightRedCellStyle)->addText( htmlspecialchars('Logical isolation - Resource groups, vnets, subnets, VNET peering and NSG implementation/config'), null, array('indent'=>0.5));

    $azureCloudReviewTableOne->addRow();
    $azureCloudReviewTableOne->addCell(450, $DarkRedCellStyle)->addText( htmlspecialchars('-'), array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $azureCloudReviewTableOne->addCell(null, $lightRedCellStyle)->addText( htmlspecialchars('VM and SQL Azure database access restrictions'), null, array('indent'=>0.5));

    $azureCloudReviewTableOne->addRow();
    $azureCloudReviewTableOne->addCell(450, $DarkRedCellStyle)->addText( htmlspecialchars('-'), array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $azureCloudReviewTableOne->addCell(null, $lightRedCellStyle)->addText( htmlspecialchars('Security Groups'), null, array('indent'=>0.5));

    $azureCloudReviewTableOne->addRow();
    $azureCloudReviewTableOne->addCell(450, $DarkRedCellStyle)->addText( htmlspecialchars('-'), array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $azureCloudReviewTableOne->addCell(null, $lightRedCellStyle)->addText( htmlspecialchars('Azure AD'), null, array('indent'=>0.5));

    $projectDescriptionPage->addTextBreak();


    $projectDescriptionPage->addText(htmlspecialchars("This review also compromises the following checks:"));


    $azureCloudReviewTableTwo = $projectDescriptionPage->addTable(
        array(
            'width' => 5000,
            'unit' => 'pct',
            'borderColor' => 'FFFFFF',
            'cellSpacing' => 5,
            'borderSize'=>1,
            'cellMargin' => 20
        )
    );
    
    $azureCloudReviewTableTwo->addRow();
    $azureCloudReviewTableTwo->addCell(450, $DarkRedCellStyle)->addText(htmlspecialchars('-'), array('color'=>'FFFFFF'), array('alignment'=>'center') );
    $azureCloudReviewTableTwo->addCell(null, $lightRedCellStyle)->addText(htmlspecialchars('Ensure access controls are in place for individual users. Ensure that logging features have been enabled.'), null, array('indent'=>0.5));

    $azureCloudReviewTableTwo->addRow();
    $azureCloudReviewTableTwo->addCell(450, $DarkRedCellStyle)->addText(htmlspecialchars('-'), array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $azureCloudReviewTableTwo->addCell(null, $lightRedCellStyle)->addText(htmlspecialchars('Ensure password strength factors are implemented with sane settings.'), null, array('indent'=>0.5));

    $azureCloudReviewTableTwo->addRow();
    $azureCloudReviewTableTwo->addCell(450, $DarkRedCellStyle)->addText(htmlspecialchars('-'), array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $azureCloudReviewTableTwo->addCell(null, $lightRedCellStyle)->addText(htmlspecialchars('Ensure that multi factor authentication is offered.'), null, array('indent'=>0.5));

    $azureCloudReviewTableTwo->addRow();
    $azureCloudReviewTableTwo->addCell(450, $DarkRedCellStyle)->addText(htmlspecialchars('-'), array('color'=>'FFFFFF'), array('alignment'=>'center'));
    $azureCloudReviewTableTwo->addCell(null, $lightRedCellStyle)->addText(htmlspecialchars('Best practise review of specific implementations such as OFS, Intune, AWS, etc.'), null, array('indent'=>0.5));

    $projectDescriptionPage->addPageBreak();