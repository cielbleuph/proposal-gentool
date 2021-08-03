<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    $methodologiesPage->addTitle('Virtualisation Configuration Review', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('Many organisations today make use of virtualisation tools for the provision of virtualised servers rather than bare metal. Large amounts of potentially sensitive data can be found within these instances. As such, the correct security controls must have been configured.', null, $defaultParagraphStyle);
    $methodologiesPage->addText("A virtualisation security and configuration assessment will give a comprehensive overview of both the security and availability of the entire virtualised estate.", null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();
    
    $methodologiesPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('A virtualisation security and configuration assessment consist of the following checks:', null, $defaultParagraphStyle);

    $methodologiesPage->addListItem("Ensure access controls are in place.", 0);
    $methodologiesPage->addListItem("Ensure that logging features have been enabled.", 0);
    $methodologiesPage->addListItem("Review the virtualised network design.", 0);
    $methodologiesPage->addListItem("Review the configuration of the underlying virtualization infrastructure.", 0);
    $methodologiesPage->addListItem("Ensure separation of tenants within the virtualised environment.", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("The Virtualisation security and configuration review is based on security best practice guidelines.", null, $defaultParagraphStyle);

    $methodologiesPage->addPageBreak();



    