<?php 

    $projectDescriptionPage->addTitle( 'FUNDAMENTALS', 2); // TOC Bookmark 

    $projectDescriptionPage->addText( htmlspecialchars( "Red Team Partners will provide <b>CLIENT</b> with a bespoke managed Cyber Threat Intelligence (CTI) service; this service includes a Mixture of human source intelligence and open source technology. Using this approach provides CLIENT with a solution that uses the latest technology tools and manual expertise to conduct a fully rounded intelligence service. A monthly report will be provided to CLIENT that includes any new and updated intelligence found through the approach’s mentioned below, these risks are highlighted by severity within the report." ) );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'This documentation review will give a comprehensive overview of the security considerations being included in the implementation of the design and build of a solution.' );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'BRIEF', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Throughout the assessment, consultants utilise proven methodologies to ensure the application gets a thorough test. This is a mixture of non-invasive testing and more hands testing techniques when required.' );
    $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addText( 'This test can be divided into three stages:' );
    $projectDescriptionPage->addListItem( 'Discovery', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Assessment', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Exploitation', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'METHOD', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'RTP Documentation Review will:' );
    $projectDescriptionPage->addListItem('Ensure safe and secure access control is being considered', 0, null, null, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Ensure security best practises are being applied to the solution', 0, null, null, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Ensure suitable logging is being implemented', 0, null, null, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Ensure that sound fundamental security principles are applied', 0, null, null, $aParagraphStyles);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addImage(ASSETS_IMG_DIR . 'sow/cyber-threat-intelligence-01.jpg', 
        array(
            'width'         => 450,
            'marginTop'     => 2,
            'marginLeft'    => -100,
            'wrappingStyle' => 'inline',
            'alignment' => 'center',
            'wrapDistanceLeft' => 100
        )
    );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'Red Team Partners uses all available resources, software or data files available on the internet to find out if CLIENT has been exposed online, we provide an overview of CLIENT’s exposed assets, as available to an outside hacker.' );
    
    $projectDescriptionPage->addTextBreak();
    
    $projectDescriptionPage->addText( 'Red Team Partner takes the following approach:' );

    $projectDescriptionPage->addImage(ASSETS_IMG_DIR . 'sow/cyber-threat-intelligence-02.png', 
        array(
            'width'         => 450,
            'marginTop'     => 2,
            'marginLeft'    => -100,
            'wrappingStyle' => 'inline',
            'alignment' => 'center',
            'wrapDistanceLeft' => 100
        )
    );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Be available to discuss Threat intelligence updates with CLIENT security staff ');
    $projectDescriptionPage->addText('Contact CLIENT if there is an immediate issue or incident');
    $projectDescriptionPage->addText('Provide surveillance of corporate and personal information for CLIENT Senior staff');

    $projectDescriptionPage->addImage(ASSETS_IMG_DIR . 'sow/cyber-threat-intelligence-03.jpg', 
        array(
            'width'         => 450,
            'marginTop'     => 2,
            'marginLeft'    => -100,
            'wrappingStyle' => 'inline',
            'alignment' => 'center',
            'wrapDistanceLeft' => 100
        )
    );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Approach:', array('color'=>'DE5C5C', 'bold'=> true ));

    $approachTable = $projectDescriptionPage->addTable(array(
        'width' => 5000,
        'unit' => 'pct',
        'borderSize'=>1,
        'cellMargin' => 150,
        'borderColor' => '000000'
    ));

    $approachTable->addRow();
    $approachTable->addCell( null, array('bgColor'=>'CE4E4E', 'valign'=> 'center' ) )->addText('Indicators of compromise (IoCs)', array('color'=>'FFFFFF', 'bold'=>true), array('align'=>'left'));
    $approachTable->addCell( null, array('bgColor'=>'F5B7A6', 'valign'=> 'center' ) )->addText('Hashes of malware samples, IP addresses and domain');

    $approachTable->addRow();
    $approachTable->addCell( null, array('bgColor'=>'CE4E4E', 'valign'=> 'center' ) )->addText('Client-Derived Data', array('color'=>'FFFFFF', 'bold'=>true), array('align'=>'left'));
    $approachTable->addCell( null, array('bgColor'=>'F5B7A6', 'valign'=> 'center' ) )->addText('Data provided from Security Information and Event Management (SIEM)');

    $approachTable->addRow();
    $approachTable->addCell( null, array('bgColor'=>'CE4E4E', 'valign'=> 'center' ) )->addText('Deep Web', array('color'=>'FFFFFF', 'bold'=>true), array('align'=>'left'));
    $approachTable->addCell( null, array('bgColor'=>'F5B7A6', 'valign'=> 'center' ) )->addText('Member-only hacking forums');

    $approachTable->addRow();
    $approachTable->addCell( null, array('bgColor'=>'CE4E4E', 'valign'=> 'center' ) )->addText('Deep Web', array('color'=>'FFFFFF', 'bold'=>true), array('align'=>'left'));
    $approachTable->addCell( null, array('bgColor'=>'F5B7A6', 'valign'=> 'center' ) )->addText('Data leaks on marketplaces through Tor or I2P');

    $approachTable->addRow();
    $approachTable->addCell( null, array('bgColor'=>'CE4E4E', 'valign'=> 'center' ) )->addText('Social Media', array('color'=>'FFFFFF', 'bold'=>true), array('align'=>'left'));
    $approachTable->addCell( null, array('bgColor'=>'F5B7A6', 'valign'=> 'center' ) )->addText('Coverage of inadvertent data leaks by employees or potential threats from malicious insiders');

    $approachTable->addRow();
    $approachTable->addCell( null, array('bgColor'=>'CE4E4E', 'valign'=> 'center' ) )->addText('Malware Analysis', array('color'=>'FFFFFF', 'bold'=>true), array('align'=>'left'));
    $approachTable->addCell( null, array('bgColor'=>'F5B7A6', 'valign'=> 'center' ) )->addText('Analysis of previous compromised data');

    $approachTable->addRow();
    $approachTable->addCell( null, array('bgColor'=>'CE4E4E', 'valign'=> 'center' ) )->addText('Geopolitical Developments', array('color'=>'FFFFFF', 'bold'=>true), array('align'=>'left'));
    $approachTable->addCell( null, array('bgColor'=>'F5B7A6', 'valign'=> 'center' ) )->addText('Nation-state threats');

    $approachTable->addRow();
    $approachTable->addCell( null, array('bgColor'=>'CE4E4E', 'valign'=> 'center' ) )->addText('Code Repositories', array('color'=>'FFFFFF', 'bold'=>true), array('align'=>'left'));
    $approachTable->addCell( null, array('bgColor'=>'F5B7A6', 'valign'=> 'center' ) )->addText('Existing exploited databases');

    $approachTable->addRow();
    $approachTable->addCell( null, array('bgColor'=>'CE4E4E', 'valign'=> 'center' ) )->addText('Paste Sites', array('color'=>'FFFFFF', 'bold'=>true), array('align'=>'left'));
    $approachTable->addCell( null, array('bgColor'=>'F5B7A6', 'valign'=> 'center' ) )->addText('Data containing leaked credentials, indications of Impending activist operations, code snippets, and evidence of breaches.');

    $approachTable->addRow();
    $approachTable->addCell( null, array('bgColor'=>'CE4E4E', 'valign'=> 'center' ) )->addText('Information Sharing Platforms', array('color'=>'FFFFFF', 'bold'=>true), array('align'=>'left'));
    $approachTable->addCell( null, array('bgColor'=>'F5B7A6', 'valign'=> 'center' ) )->addText('The UK National Cyber Security Centre’s (NCSC) Cyber Security Information Sharing Partnership (CiSP), The Financial Services Information Sharing and Analysis Center (FS-ISAC), AlienVault’s Open Threat Exchange (OTX), US-CERT’s (United States Computer Emergency Response Team)');

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addImage(ASSETS_IMG_DIR . 'sow/cyber-threat-intelligence-04.jpg', 
        array(
            'width'         => 450,
            'marginTop'     => 24,
            'marginLeft'    => -100,
            'wrappingStyle' => 'inline',
            'alignment' => 'center',
            'wrapDistanceLeft' => 100
        )
    );

    $projectDescriptionPage->addTextBreak(2);
    

    $projectDescriptionPage->addTitle( 'RESULTS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Red Team Partners will provide a detailed report at the end of this engagement; your report will highlight any vulnerabilities/risks. From the report provided you will be able to understand any vulnerabilities that can be exploited and if this meets expectations for functionality and security. Red Team Partners will also include remediation/comments and suggestions on how to resolve any vulnerabilities/risks found ' );
    $projectDescriptionPage->addTextBreak();


