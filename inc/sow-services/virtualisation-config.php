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
    $projectDescriptionPage->addText( 'Many organisations today make use of virtualisation tools for the provision of virtualised servers rather than bare metal. Large amounts of potentially sensitive data can be found within these instances. As such, it is imperative that the correct security controls have been configured.' );

    $projectDescriptionPage->addText( 'A virtualisation security and configuration assessment will give a comprehensive overview of both the security and availability of the entire virtualised estate.' );


    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'BRIEF', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Throughout the assessment, consultants utilise proven methodologies to ensure the application gets a thorough test. This is a mixture of non-invasive testing and more hands testing techniques when required.' );

    $projectDescriptionPage->addText( 'This test can be divided into three stages:' );
    $projectDescriptionPage->addListItem( 'Discovery', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Assessment', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addListItem( 'Exploitation', 0, array('italic'=>true), null, $aParagraphStyles );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'METHOD', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'A virtualisation security and configuration assessment consists of the following checks:' );
    $projectDescriptionPage->addListItem('Ensure access controls are in place', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Ensure that logging features have been enabled', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Review the virtualised network design', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Review the configuration of the underlying virtualisation infrastructure', 0, $aParagraphStyles);
    $projectDescriptionPage->addListItem('Ensure separation of tenants within the virtualised environment', 0,  $aParagraphStyles);

    $projectDescriptionPage->addText('The Virtualisation security and configuration review is based on security best practice guidelines.');

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'FALLBACKS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Red Team Partners will provide a detailed report at the end of Virtualisation Configuration Review, our reports are quality controlled by certified testers. Using the traffic light system (Red=High, Yellow=Medium, Green=Low) your report will highlight any vulnerabilities/risks from your Virtualisation Configuration Review. From the report provided, you will be able to understand any weaknesses that can be exploited and if your Virtualisation Configuration Review meets expectations for functionality and security. Red Team Partners will also include remediations/comments and suggestions on how to resolve any vulnerabilities/risks found.' );
    $projectDescriptionPage->addText( 'Should exploitation successfully permit, Red Team Partners will aim to escalate to the highest of privileges and, with your agreement, continue to leverage this access to penetrate as deep as possible in your network to help portray a realistic attack scenario.' );
    $projectDescriptionPage->addTextBreak();


    //############################### END PROJECT DESCRIPTION PAGE ###############################


