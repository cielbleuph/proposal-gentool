<?php
    use PhpOffice\PhpWord\Shared\Html as HTMLParser;

    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    $methodologiesPage->addTitle('Cyber Forensics and Investigation', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('Red Team Partners offers Cyber Forensics that aims to identify network vulnerabilities and then develop ways to mitigate them.', null, $defaultParagraphStyle);
    $methodologiesPage->addText('Red Team Partners will collect process, preserve, analyse computer-related evidence, and go deep inside the networks, computers, smartphones and other devices in search of evidence of criminal activity. Counterintelligence will be run against hackers, criminals, and other nefarious intentions.', null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    // $methodologiesPage->addText( 'Red Team Partners offers a Cloud Assessment/Review (AZURE) that combines best practice guidelines and cyber testing. This assessment will contain the following areas that are assessed throughout the Cloud Assessment/Review (AZURE):', null, $defaultParagraphStyle );

    $methodologiesPage->addText(htmlspecialchars("Collect and centralise evidence such as logs, events, and alerts"), 0);
    $methodologiesPage->addListItem(htmlspecialchars("Questionable-based analysis:"), 0);
    $methodologiesPage->addListItem(htmlspecialchars("Who"), 1);
    $methodologiesPage->addListItem(htmlspecialchars("When"), 1);
    $methodologiesPage->addListItem(htmlspecialchars("Where"), 1);
    $methodologiesPage->addListItem(htmlspecialchars("How"), 1);
    $methodologiesPage->addListItem(htmlspecialchars("Identify the root cause"), 0);
    $methodologiesPage->addListItem(htmlspecialchars("Determine the incident lifecycle and kill chain"), 0);
    $methodologiesPage->addListItem(htmlspecialchars("Compare all the compromise indicators against threat intelligence databases and sources"), 0);
    $methodologiesPage->addListItem(htmlspecialchars("Identify any sign of active or on-going exploitation actions"), 0);
    $methodologiesPage->addListItem(htmlspecialchars("Find and eradicate any backdoors deployed by the attackers"), 0);
    $methodologiesPage->addListItem(htmlspecialchars("Create and present two post-incident reports:"), 0);
    $methodologiesPage->addListItem(htmlspecialchars("Executive Document: includes high-level summary of the incident, purchasing suggestions, and impact involved"), 0);
    $methodologiesPage->addListItem(htmlspecialchars("Technical Document:"), 1);
    $methodologiesPage->addListItem(htmlspecialchars("includes deep technical writeup of the incident"), 2);
    $methodologiesPage->addListItem(htmlspecialchars("exploitation path, attack vectors"), 2);
    $methodologiesPage->addListItem(htmlspecialchars("security/technology/practices improvement suggestions"), 2);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText(htmlspecialchars("Remediation and incident Response Services"), $paragraphHeadingStyle, $paragraphHeadingPStyle);

    $txtRun1 = $methodologiesPage->addTextRun();
    $txtRun1->addText("Organisation-wide:", $boldText);
    $txtRun1->addText(" Applies to any type of incident. This is a complete security audit of all the assets belonging to the business that is being conducted.", null, $defaultParagraphStyle);

    $txtRun2 = $methodologiesPage->addTextRun();
    $txtRun2->addText("Malware:", $boldText);
    $txtRun2->addText(" Applies to hosts and servers of the organisation. A vulnerability assessment is conducted which includes support in case of trojans, malware, adware, ransomware, and APT attacks.", null, $defaultParagraphStyle);

    $txtRun3 = $methodologiesPage->addTextRun();
    $txtRun3->addText("Cloud:", $boldText);
    $txtRun3->addText(" Applies to cloud-based incidents. A security assessment of the cloud infrastructure and configuration is conducted.");
    
    // $htmlStr = "<ol>
    // <li>Includes support in case of cloud storage exfiltration, cloud services compromise, cloud accounts takeover.</li>Web applications not included.<li></li><li>Supported products: Azure, Google Cloud, AWS</li></ol>";
    
    // HTMLParser::addHtml($txtRun3, $htmlStr);

    $methodologiesPage->addListItem("Includes support in case of cloud storage exfiltration, cloud services compromise, cloud accounts takeover.", 0, null, $numberStyleList);
    $methodologiesPage->addListItem("Web applications not included.", 0, null, $numberStyleList);
    $methodologiesPage->addListItem("Supported products: Azure, Google Cloud, AWS", 0, null, $numberStyleList);

    $txtRun4 = $methodologiesPage->addTextRun();
    $txtRun4->addText("Web:", $boldText);
    $txtRun4->addText(" Applies to web-based incidents. A full penetration test is conducted. This includes support in case of defacement attacks, application-layer DoS/DDoS, accounts takeover, or any ongoing OWASP TOP 10 attack, not including incidents related to companies’ infrastructure.");

    $txtRun5 = $methodologiesPage->addTextRun();
    $txtRun5->addText("Office365:", $boldText);
    $txtRun5->addText(" Applies to email-based attacks. An audit of the Office365 is conducted. Includes support in case of phishing attacks, impersonation, email accounts takeover, and email relays.");

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("REPORT", $paragraphHeadingStyle, $paragraphHeadingPStyle);

    $methodologiesPage->addText("(A sample report is available upon request)", $boldText, $defaultParagraphStyle);

    $methodologiesPage->addText("Obtaining an accurate report after the breach will help organisations prevent future attacks, minimise the cost of hiring individuals, purchasing applications and maximise good customer relationship.", null, $defaultParagraphStyle);

    $methodologiesPage->addText("Contemporarily, cybercriminals launch non-stop attacks on all types and scale of organisations. That is why various cyber incidents exist and sometimes managing them can be stressful and chaotic. Meanwhile, addressing and managing the damage brought by cyber breaches and threats need a systematic solution to identify, contain, and eradicate the attacks.", null, $defaultParagraphStyle);

    $methodologiesPage->addText("We provide two post-incident reports:", $boldText, $defaultParagraphStyle);

    $methodologiesPage->addText("Executive Document containing:", $boldText);

    $methodologiesPage->addListItem("High-level summary of the incident", 0, null, $numberStyleList);
    $methodologiesPage->addListItem("Purchasing suggestions ", 0, null, $numberStyleList);
    $methodologiesPage->addListItem("Impact on the organisation", 0, null, $numberStyleList);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Technical Document with", $boldText);
    $methodologiesPage->addListItem("A deep technical write-up of the incident", 0, $numberStyleList);
    $methodologiesPage->addListItem("Exploitation path", 0, $numberStyleList);
    $methodologiesPage->addListItem("Attack vectors", 0, $numberStyleList);
    $methodologiesPage->addListItem(htmlspecialchars("Security & Technology Practices"), 0, $numberStyleList);
    $methodologiesPage->addListItem("Improvement suggestions", 0, $numberStyleList);

    $methodologiesPage->addPageBreak();


    

    