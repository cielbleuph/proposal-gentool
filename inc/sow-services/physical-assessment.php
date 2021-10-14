<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    // $projectDescriptionPage->addTitle('Physical Assessment', 2); // TOC Bookmark 
    // $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('Red Team Partners offers a Physical/Social Engineering Assessment. It includes attempting to infiltrate the company’s headquarters or a working establishment.', null, $defaultParagraphStyle);
    $projectDescriptionPage->addText('Hacking an organisation is much easier if someone can gain access to your facility. Red Team Partners will work with you to outline your goals from this assessment, these goals can be established by the company’s appetite for risk and physical concerns of the business. Organisations who require this service will have access to the whole building, floor of a building, or multiple locations. Red Team Partners include in this service the understanding of risks from social engineering.', null, $defaultParagraphStyle);
    $projectDescriptionPage->addText('If a successful venue of attack is identified, Red Team Partners will work with you to conduct safe exploitation (where possible) and verification of the issue whilst ensuring there are no disruptions to the daily running of your organisation.', null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("All exploitation is conducted under the agreed rules of the engagement.", null, $defaultParagraphStyle);
    
    $projectDescriptionPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('Included in the Physical Assessment:', null, $defaultParagraphStyle);
    
    $physicalOne = $projectDescriptionPage->addListItemRun();
    $physicalOne->addText("Surveillance", array("italic"=>true));
    $physicalOne->addText(" - This is an attempt to gather information about specific people in the company using surveillance techniques.");

    $physicalTwo = $projectDescriptionPage->addListItemRun();
    $physicalTwo->addText("Social Security Controls Tests", array("italic"=>true));
    $physicalTwo->addText(" - Red Team Partners will attempt to gain access to the building by bypassing security controls such as guards and receptionists.");

    $physicalThree = $projectDescriptionPage->addListItemRun();
    $physicalThree->addText("Network Assessment", array("italic"=>true));
    $physicalThree->addText(" - Red Team Partners will break in and connect to the network. Companies can then understand the vulnerabilities and see what RTP can access through the break-in.");

    $physicalFour = $projectDescriptionPage->addListItemRun();
    $physicalFour->addText("USB Dropping", array("italic"=>true));
    $physicalFour->addText(" - Red Team Partners will load USB devices with ‘malware’ (would be a safe piece of code that shows us how the device was used)");

    $physicalFive = $projectDescriptionPage->addListItemRun();
    $physicalFive->addText("Wireless Testing", array("italic"=>true));
    $physicalFive->addText(" - This is an attempt to gain access to the corporate network from any wireless access points belonging to the company.");

    $physicalSix = $projectDescriptionPage->addListItemRun();
    $physicalSix->addText("Network Device Drop", array("italic"=>true));
    $physicalSix->addText(" - Red Team Partners will drop/ connect a preconfigured device that connects back to");

    $projectDescriptionPage->addPageBreak();

    