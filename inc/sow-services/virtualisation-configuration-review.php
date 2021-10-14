<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    // $projectDescriptionPage->addTitle('Virtualisation Configuration Review', 2); // TOC Bookmark 
    // $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('Many organisations today make use of virtualisation tools for the provision of virtualised servers rather than bare metal. Large amounts of potentially sensitive data can be found within these instances. As such, the correct security controls must have been configured.', null, $defaultParagraphStyle);
    $projectDescriptionPage->addText("A virtualisation security and configuration assessment will give a comprehensive overview of both the security and availability of the entire virtualised estate.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addTextBreak();
    
    $projectDescriptionPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('A virtualisation security and configuration assessment consist of the following checks:', null, $defaultParagraphStyle);

    $projectDescriptionPage->addListItem("Ensure access controls are in place.", 0);
    $projectDescriptionPage->addListItem("Ensure that logging features have been enabled.", 0);
    $projectDescriptionPage->addListItem("Review the virtualised network design.", 0);
    $projectDescriptionPage->addListItem("Review the configuration of the underlying virtualization infrastructure.", 0);
    $projectDescriptionPage->addListItem("Ensure separation of tenants within the virtualised environment.", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("The Virtualisation security and configuration review is based on security best practice guidelines.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addPageBreak();



    