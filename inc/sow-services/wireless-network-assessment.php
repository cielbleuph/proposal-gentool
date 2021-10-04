<?php 


    // $projectDescriptionPage->addTitle( 'PROJECT DESCRIPTION', 1); // TOC Bookmark 
    // $projectDescriptionPage->addLine($lineStyle);

    $projectDescriptionPage->addTitle( 'FUNDAMENTALS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Many organisations in the current day and age offer an employee wireless network, often connected to the corporate network. As such, it is imperative that the wireless network has been correctly configured and has had both strong authentication and encryption implemented.' );


    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'BRIEF', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Throughout the assessment, consultants utilise proven methodologies to ensure the application gets a thorough test. This is a mixture of non-invasive testing and more hands testing techniques when required.' );

    $projectDescriptionPage->addText( 'This test can be divided into three stages:' );
    $projectDescriptionPage->addListItem( 'Discovery', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Assessment', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Exploitation', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'METHOD', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'The first area to be tested is the availability of the wireless network which is achieved with scanning tools. Consultants set their wireless cards into promiscuous mode to reveal any 802.11x wireless networks which may have their SSID’s hidden from public view. Many organisations believe hiding the SSID is the only security requirement for wireless networks and this can sometimes lead to an easy route into the corporate network from an attacking standpoint.' );
    $projectDescriptionPage->addText('Once this has been tested, the following areas are assessed:');

    $projectDescriptionPage->addListItem('Weak keys / key cracking', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Packet injection', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Employee added rouge access points ', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Fake AP / employee wireless attacks ', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Authentication', 0,  $aParagraphStyles);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'FALLBACKS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'A wireless assessment will give a comprehensive overview of both the security and availability of the wireless network.' );

    $projectDescriptionPage->addText('Should exploitation successfully permit, Red Team Partners will aim to escalate to the highest of privileges and, with your agreement, continue to leverage this access to penetrate as deep as possible in your network to help portray a realistic attack scenario.');
    
    $projectDescriptionPage->addTextBreak();



