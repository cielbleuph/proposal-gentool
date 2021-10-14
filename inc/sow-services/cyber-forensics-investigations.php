<?php
    use PhpOffice\PhpWord\Shared\Html as HTMLParser;

    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    // $projectDescriptionPage->addTitle('Cyber Forensics and Investigation', 2); // TOC Bookmark 
    // $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('Red Team Partners offers Cyber Forensics that aims to identify network vulnerabilities and then develop ways to mitigate them.', null, $defaultParagraphStyle);
    $projectDescriptionPage->addText('Red Team Partners will collect process, preserve, analyse computer-related evidence, and go deep inside the networks, computers, smartphones and other devices in search of evidence of criminal activity. Counterintelligence will be run against hackers, criminals, and other nefarious intentions.', null, $defaultParagraphStyle);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    // $projectDescriptionPage->addText( 'Red Team Partners offers a Cloud Assessment/Review (AZURE) that combines best practice guidelines and cyber testing. This assessment will contain the following areas that are assessed throughout the Cloud Assessment/Review (AZURE):', null, $defaultParagraphStyle );

    $projectDescriptionPage->addText(htmlspecialchars("Collect and centralise evidence such as logs, events, and alerts"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Questionable-based analysis:"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Who"), 1);
    $projectDescriptionPage->addListItem(htmlspecialchars("When"), 1);
    $projectDescriptionPage->addListItem(htmlspecialchars("Where"), 1);
    $projectDescriptionPage->addListItem(htmlspecialchars("How"), 1);
    $projectDescriptionPage->addListItem(htmlspecialchars("Identify the root cause"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Determine the incident lifecycle and kill chain"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Compare all the compromise indicators against threat intelligence databases and sources"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Identify any sign of active or on-going exploitation actions"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Find and eradicate any backdoors deployed by the attackers"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Create and present two post-incident reports:"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Executive Document: includes high-level summary of the incident, purchasing suggestions, and impact involved"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Technical Document:"), 1);
    $projectDescriptionPage->addListItem(htmlspecialchars("includes deep technical writeup of the incident"), 2);
    $projectDescriptionPage->addListItem(htmlspecialchars("exploitation path, attack vectors"), 2);
    $projectDescriptionPage->addListItem(htmlspecialchars("security/technology/practices improvement suggestions"), 2);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Remediation and Incident Response Services"), $paragraphHeadingStyle, $paragraphHeadingPStyle);

    $txtRun1 = $projectDescriptionPage->addTextRun();
    $txtRun1->addText("Organisation-wide:", $boldText);
    $txtRun1->addText(" Applies to any type of incident. This is a complete security audit of all the assets belonging to the business that is being conducted.", null, $defaultParagraphStyle);

    $txtRun2 = $projectDescriptionPage->addTextRun();
    $txtRun2->addText("Malware:", $boldText);
    $txtRun2->addText(" Applies to hosts and servers of the organisation. A vulnerability assessment is conducted which includes support in case of trojans, malware, adware, ransomware, and APT attacks.", null, $defaultParagraphStyle);

    $txtRun3 = $projectDescriptionPage->addTextRun();
    $txtRun3->addText("Cloud:", $boldText);
    $txtRun3->addText(" Applies to cloud-based incidents. A security assessment of the cloud infrastructure and configuration is conducted.");
    
    // $htmlStr = "<ol>
    // <li>Includes support in case of cloud storage exfiltration, cloud services compromise, cloud accounts takeover.</li>Web applications not included.<li></li><li>Supported products: Azure, Google Cloud, AWS</li></ol>";
    
    // HTMLParser::addHtml($txtRun3, $htmlStr);

    $projectDescriptionPage->addListItem("Includes support in case of cloud storage exfiltration, cloud services compromise, cloud accounts takeover.", 0, null, $numberStyleList);
    $projectDescriptionPage->addListItem("Web applications not included.", 0, null, $numberStyleList);
    $projectDescriptionPage->addListItem("Supported products: Azure, Google Cloud, AWS", 0, null, $numberStyleList);

    $txtRun4 = $projectDescriptionPage->addTextRun();
    $txtRun4->addText("Web:", $boldText);
    $txtRun4->addText(" Applies to web-based incidents. A full penetration test is conducted. This includes support in case of defacement attacks, application-layer DoS/DDoS, accounts takeover, or any ongoing OWASP TOP 10 attack, not including incidents related to companies’ infrastructure.");

    $txtRun5 = $projectDescriptionPage->addTextRun();
    $txtRun5->addText("Office365:", $boldText);
    $txtRun5->addText(" Applies to email-based attacks. An audit of the Office365 is conducted. Includes support in case of phishing attacks, impersonation, email accounts takeover, and email relays.");

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("REPORT", $paragraphHeadingStyle, $paragraphHeadingPStyle);

    $projectDescriptionPage->addText("(A sample report is available upon request)", $boldText, $defaultParagraphStyle);

    $projectDescriptionPage->addText("Obtaining an accurate report after the breach will help organisations prevent future attacks, minimise the cost of hiring individuals, purchasing applications and maximise good customer relationship.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("Contemporarily, cybercriminals launch non-stop attacks on all types and scale of organisations. That is why various cyber incidents exist and sometimes managing them can be stressful and chaotic. Meanwhile, addressing and managing the damage brought by cyber breaches and threats need a systematic solution to identify, contain, and eradicate the attacks.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("We provide two post-incident reports:", $boldText, $defaultParagraphStyle);

    $projectDescriptionPage->addText("Executive Document containing:", $boldText);

    $projectDescriptionPage->addText("    1.    High-level summary of the incident");
    $projectDescriptionPage->addText("    2.    Purchasing suggestions ");
    $projectDescriptionPage->addText("    3.    Impact on the organisation");

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Technical Document with", $boldText);
    $projectDescriptionPage->addListItem("A deep technical write-up of the incident", 0, $numberStyleList);
    $projectDescriptionPage->addListItem("Exploitation path", 0, $numberStyleList);
    $projectDescriptionPage->addListItem("Attack vectors", 0, $numberStyleList);
    $projectDescriptionPage->addListItem(htmlspecialchars("Security & Technology Practices"), 0, $numberStyleList);
    $projectDescriptionPage->addListItem("Improvement suggestions", 0, $numberStyleList);

    $projectDescriptionPage->addPageBreak();


    

    