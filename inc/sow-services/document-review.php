<?php 
    //############################### PROJECT SCOPE PAGE ###############################    

    $projectScopePage = $phpWord->addSection();
    $projectScopePage->addTitle( 'PROJECT SCOPE', 1); // TOC Bookmark
    $projectScopePage->addLine($lineStyle);   

    $projectScopePage->addTitle( '*** SCOPE of Project Selected ***', 2); // TOC Bookmark 

    $projectScopePage->addPageBreak();

    //############################### END PROJECT SCOPE PAGE ###############################    



    //############################### PROJECT DESCRIPTION PAGE ###############################    

    $projectDescriptionPage = $phpWord->addSection();
    $projectDescriptionPage->addTitle( 'PROJECT DESCRIPTION', 1); // TOC Bookmark 
    $projectDescriptionPage->addLine($lineStyle);

    $projectDescriptionPage->addTitle( 'FUNDAMENTALS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Red Team Partners will conduct a document review to ensure that Xoserve’s implementation is being completed to specification and with a secure build out in mind.' );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'This documentation review will give a comprehensive overview of the security considerations being included in the implementation of the design and build of a solution.' );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'BRIEF', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Throughout the assessment, consultants utilise proven methodologies to ensure the application gets a thorough test. This is a mixture of non-invasive testing and more hands testing techniques when required.' );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'This test can be divided into three stages:' );
    $projectDescriptionPage->addListItem( 'Discovery', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Assessment', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Exploitation', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'METHOD', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'RTP Documentation Review will:' );
    $projectDescriptionPage->addListItem('Ensure safe and secure access control is being considered', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Ensure security best practises are being applied to the solution', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Ensure suitable logging is being implemented', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Ensure that sound fundamental security principles are applied', 0, $aParagraphStyles);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'FALLBACKS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Red Team Partners will provide a detailed report at the end of this engagement. Our reports are quality controlled by certified testers. Using the traffic light system (Red=High, Yellow=Medium, Green=Low) your report will highlight any vulnerabilities/risks from this assessment. From the report provided, you will be able to understand any weaknesses that can be exploited and if your system meets expectations for functionality and security. Red Team Partners will also include remediation/comments and suggestions on how to resolve any vulnerabilities/risks found.' );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'Should exploitation successfully permit, Red Team Partners will aim to escalate to the highest of privileges and, with your agreement, continue to leverage this access to penetrate as deep as possible in your network to help portray a realistic attack scenario.' );
    
    $projectDescriptionPage->addPageBreak();

    //############################### END PROJECT DESCRIPTION PAGE ###############################


