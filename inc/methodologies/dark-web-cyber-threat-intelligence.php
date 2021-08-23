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

    $methodologiesPage->addTitle('Dark Web Cyber Threat Intelligence', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle );
    $methodologiesPage->addText('Red Team Partners will provide '. $companyName . ' with a bespoke managed Cyber Threat Intelligence (CTI) service, this service includes a Mixture of human source intelligence and open source technology. Using this approach provides '. $companyName . ' with a solution that uses the latest technology tools and manual expertise to conduct a fully rounded intelligence service. A monthly report will be provided to '. $companyName . ' that includes any new and updated intelligence found through the approach’s mentioned below, these risks are highlighted by severity within the report.', null, $defaultParagraphStyle);

    // $methodologiesPage->addTextBreak();

    // $methodologiesPage->addImage(ASSETS_IMG_DIR . 'methodologies/cyber-threat-intelligence-01.jpg', 
    //     array(
    //         'width'         => 450,
    //         'marginTop'     => 24,
    //         'marginLeft'    => -100,
    //         'wrappingStyle' => 'inline',
    //         'alignment' => 'center',
    //         'wrapDistanceLeft' => 100
    //     )
    // );

    // $methodologiesPage->addTextBreak();

    

    $methodologiesPage->addText('Red Team Partners uses all available resources, software or data files available on the internet to find out if '. $companyName . ' has been exposed online, we provide an overview of '. $companyName . '\'s exposed assets, as available to an outside hacker.', null, $defaultParagraphStyle );

    $methodologiesPage->addText("Red Team Partners uses all available resources, software, or data files available on the internet to find out if ".$companyName." has been exposed online, we provide an overview of ".$companyName."’s exposed assets, as available to an outside hacker.", null, $defaultParagraphStyle);

    // $methodologiesPage->addTextBreak();

    $methodologiesPage->addText( 'Red Team Partner takes the following approach:', $defaultParagraphStyle );

    $methodologiesPage->addListItem("Predict", 0);
    $methodologiesPage->addListItem("Prevent", 0);
    $methodologiesPage->addListItem("Detect", 0);
    $methodologiesPage->addListItem("Respond", 0);

    // $methodologiesPage->addImage(ASSETS_IMG_DIR . 'methodologies/cyber-threat-intelligence-02.png', 
    //     array(
    //         'width'         => 450,
    //         'marginTop'     => 24,
    //         'marginLeft'    => -100,
    //         'wrappingStyle' => 'inline',
    //         'alignment' => 'center',
    //         'wrapDistanceLeft' => 100
    //     )
    // );

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Be available to discuss Threat intelligence updates with '.$companyName.'\'s security staff', null, $defaultParagraphStyle);
    $methodologiesPage->addText('Contact '.$companyName.' if there is an immediate issue or incident', null, $defaultParagraphStyle);
    $methodologiesPage->addText( 'Provide surveillance of corporate and personal information for '.$companyName.'\'s Senior staff', null, $defaultParagraphStyle );

    // $methodologiesPage->addTextBreak();

    // $methodologiesPage->addImage(ASSETS_IMG_DIR . 'methodologies/cyber-threat-intelligence-03.jpg', 
    //     array(
    //         'width'         => 450,
    //         'marginTop'     => 24,
    //         'marginLeft'    => -100,
    //         'wrappingStyle' => 'inline',
    //         'alignment' => 'center',
    //         'wrapDistanceLeft' => 100
    //     )
    // );

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Approach:', $paragraphHeadingStyle, $paragraphHeadingPStyle );

    $methodologiesPage->addListItem("Indicators of compromise (IoCs) – Hashes of malware samples, IP addresses and domain", 0);
    $methodologiesPage->addListItem("Client-Derived Data – Data provided from Security Information and Event Management (SIEM)", 0);
    $methodologiesPage->addListItem("Deep Web – Member-only hacking forums", 0);
    $methodologiesPage->addListItem("Deep Web – Data leaks on marketplaces through Tor or I2P", 0);
    $methodologiesPage->addListItem("Social Media – Coverage of inadvertent data leaks by employees or potential threats from malicious insiders", 0);
    $methodologiesPage->addListItem("Malware Analysis – Analysis of previous compromised data", 0);
    $methodologiesPage->addListItem("Geopolitical Developments – Nation-state threats", 0);
    $methodologiesPage->addListItem("Code Repositories – Existing exploited databases", 0);
    $methodologiesPage->addListItem("Paste Sites – Data containing leaked credentials, indications of Impending activist operations, code snippets, and evidence of breaches.", 0);
    $methodologiesPage->addListItem("Information Sharing Platforms – The UK National Cyber Security Centre’s (NCSC) Cyber Security Information Sharing Partnership (CiSP), The Financial Services Information Sharing and Analysis Center (FS-ISAC), AlienVault’s Open Threat Exchange (OTX), US-CERT’s (United States Computer Emergency Response Team)", 0);


    // $approachTable = $methodologiesPage->addTable(array(
    //     'width' => 5000,
    //     'unit' => 'pct',
    //     'borderSize'=>1,
    //     'cellMargin' => 150,
    //     'borderColor' => '000000'
    // ));

    // $approachTable->addRow();
    // $approachTable->addCell( null, array('bgColor'=>'CE4E4E', 'valign'=> 'center' ) )->addText('Indicators of compromise (IoCs)', array('color'=>'FFFFFF', 'bold'=>true), array('align'=>'left'));
    // $approachTable->addCell( null, array('bgColor'=>'F5B7A6', 'valign'=> 'center' ) )->addText('Hashes of malware samples, IP addresses and domain');

    // $approachTable->addRow();
    // $approachTable->addCell( null, array('bgColor'=>'CE4E4E', 'valign'=> 'center' ) )->addText('Client-Derived Data', array('color'=>'FFFFFF', 'bold'=>true), array('align'=>'left'));
    // $approachTable->addCell( null, array('bgColor'=>'F5B7A6', 'valign'=> 'center' ) )->addText('Data provided from Security Information and Event Management (SIEM)');

    // $approachTable->addRow();
    // $approachTable->addCell( null, array('bgColor'=>'CE4E4E', 'valign'=> 'center' ) )->addText('Deep Web', array('color'=>'FFFFFF', 'bold'=>true), array('align'=>'left'));
    // $approachTable->addCell( null, array('bgColor'=>'F5B7A6', 'valign'=> 'center' ) )->addText('Member-only hacking forums');

    // $approachTable->addRow();
    // $approachTable->addCell( null, array('bgColor'=>'CE4E4E', 'valign'=> 'center' ) )->addText('Deep Web', array('color'=>'FFFFFF', 'bold'=>true), array('align'=>'left'));
    // $approachTable->addCell( null, array('bgColor'=>'F5B7A6', 'valign'=> 'center' ) )->addText('Data leaks on marketplaces through Tor or I2P');

    // $approachTable->addRow();
    // $approachTable->addCell( null, array('bgColor'=>'CE4E4E', 'valign'=> 'center' ) )->addText('Social Media', array('color'=>'FFFFFF', 'bold'=>true), array('align'=>'left'));
    // $approachTable->addCell( null, array('bgColor'=>'F5B7A6', 'valign'=> 'center' ) )->addText('Coverage of inadvertent data leaks by employees or potential threats from malicious insiders');

    // $approachTable->addRow();
    // $approachTable->addCell( null, array('bgColor'=>'CE4E4E', 'valign'=> 'center' ) )->addText('Malware Analysis', array('color'=>'FFFFFF', 'bold'=>true), array('align'=>'left'));
    // $approachTable->addCell( null, array('bgColor'=>'F5B7A6', 'valign'=> 'center' ) )->addText('Analysis of previous compromised data');

    // $approachTable->addRow();
    // $approachTable->addCell( null, array('bgColor'=>'CE4E4E', 'valign'=> 'center' ) )->addText('Geopolitical Developments', array('color'=>'FFFFFF', 'bold'=>true), array('align'=>'left'));
    // $approachTable->addCell( null, array('bgColor'=>'F5B7A6', 'valign'=> 'center' ) )->addText('Nation-state threats');

    // $approachTable->addRow();
    // $approachTable->addCell( null, array('bgColor'=>'CE4E4E', 'valign'=> 'center' ) )->addText('Code Repositories', array('color'=>'FFFFFF', 'bold'=>true), array('align'=>'left'));
    // $approachTable->addCell( null, array('bgColor'=>'F5B7A6', 'valign'=> 'center' ) )->addText('Existing exploited databases');

    // $approachTable->addRow();
    // $approachTable->addCell( null, array('bgColor'=>'CE4E4E', 'valign'=> 'center' ) )->addText('Paste Sites', array('color'=>'FFFFFF', 'bold'=>true), array('align'=>'left'));
    // $approachTable->addCell( null, array('bgColor'=>'F5B7A6', 'valign'=> 'center' ) )->addText('Data containing leaked credentials, indications of Impending activist operations, code snippets, and evidence of breaches.');

    // $approachTable->addRow();
    // $approachTable->addCell( null, array('bgColor'=>'CE4E4E', 'valign'=> 'center' ) )->addText('Information Sharing Platforms', array('color'=>'FFFFFF', 'bold'=>true), array('align'=>'left'));
    // $approachTable->addCell( null, array('bgColor'=>'F5B7A6', 'valign'=> 'center' ) )->addText('The UK National Cyber Security Centre’s (NCSC) Cyber Security Information Sharing Partnership (CiSP), The Financial Services Information Sharing and Analysis Center (FS-ISAC), AlienVault’s Open Threat Exchange (OTX), US-CERT’s (United States Computer Emergency Response Team)');

    // $methodologiesPage->addTextBreak();

    // $methodologiesPage->addImage(ASSETS_IMG_DIR . 'methodologies/cyber-threat-intelligence-04.jpg', 
    //     array(
    //         'width'         => 450,
    //         'marginTop'     => 24,
    //         'marginLeft'    => -100,
    //         'wrappingStyle' => 'inline',
    //         'alignment' => 'center',
    //         'wrapDistanceLeft' => 100
    //     )
    // );



    $methodologiesPage->addTextBreak();