<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    $methodologiesPage->addTitle('Cyber Essentials Plus', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText( htmlspecialchars("Cyber Essentials Plus must be conducted 3 months after Cyber Essentials Basic has been completed."));

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText( htmlspecialchars("Fundamentals"), $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText( htmlspecialchars("Cyber Essentials Plus requires an independent assessment of your security controls. This can be provided remotely, the assessment involves a vulnerability scan, which will identify unpatched, or unsupported software, open ports, incorrect firewall configuration. Obtaining Cyber Essentials Plus will verify your company has the correct security controls in place, this certification can only be achieved through the correct preparation and assessments. Cyber Essentials Plus has become a highly regarded certification due its results in improving security controls. "), null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();
    
    $methodologiesPage->addText( htmlspecialchars("How we can help:"), $paragraphHeadingStyle, $paragraphHeadingPStyle);

    $methodologiesPage->addText( htmlspecialchars("Red Team Partners helps companies become Cyber Essentials Plus certified. We provide a pre-audit checklist that contains the correct measures to be taken in order to obtain the Cyber Essentials Plus certification. Once you have completed your pre-audit checklist Red Team Partners certified internal experts will provide any feedback to confirm if any other changes are needed before the audit date. "), null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText( htmlspecialchars("How your business benefits:"), $paragraphHeadingStyle, $paragraphHeadingPStyle);

    $methodologiesPage->addText( htmlspecialchars("It is equally important to demonstrate to clients, suppliers and partners that their data is secure. You can add your Cyber Essentials Badge to show businesses that your company is aligned with the UK government cyber standards. As a certified business the steps conduct to achieve this badge can help businesses with their cyber security strategy."), null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText( htmlspecialchars("Result"), $paragraphHeadingStyle, $paragraphHeadingPStyle);

    $methodologiesPage->addText( htmlspecialchars("Once your business has achieved the Cyber Essentials Certification you have the FREE option to have a call with one of our senior consultants to discuss remediations and recommendations. We understand Cyber can be challenging and we are here to help."), null, $defaultParagraphStyle);

    $methodologiesPage->addText( htmlspecialchars("All our offers include one year of on-going support and £25K of free cyber security insurance."), null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText( htmlspecialchars("*This service does not include any remediation work highlighted from the Pre-audit; this remediation must be carried out inhouse."), null, $defaultParagraphStyle);

    
    $methodologiesPage->addPageBreak();