<?php

    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );


    // $projectDescriptionPage->addTitle('Fraud Investigation', 2); // TOC Bookmark 
    // $projectDescriptionPage->addTextBreak();
    
    $projectDescriptionPage->addText('Purpose', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('Describes the methodology for Fraud Investigation', null, $defaultParagraphStyle);
    

    $projectDescriptionPage->addText(htmlspecialchars($companyName . ' next steps'), null, $defaultParagraphStyle);
    $projectDescriptionPage->addListItem(htmlspecialchars("Research personal email in public breaches"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Research personal email in dark web sales"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("OSINT for any related information to this case"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Research for CC in dark web sales"),0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Research for any link from personal to the corporate area"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Crack the hashes from public exploits"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Build the report with the evidence and possible scenarios"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Build the chain of Events, if possible"), 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Fraud Investigation Detailed"), $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText(htmlspecialchars("Every fraud incident is different, and the response and investigation methods will vary depending on the facts that are unique to each case."), null, $defaultParagraphStyle);

    $projectDescriptionPage->addText(htmlspecialchars("Our Team can provide the leadership and core capabilities in cybersecurity domains:"), null, $defaultParagraphStyle);
    $projectDescriptionPage->addListItem(htmlspecialchars("Cyber Security Incident Response and Threat Hunting"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Digital Forensics and Investigations"), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Security Assurance and Testing"), 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("We offer pre-incident and post-incident technical capabilities and skills. In the event of an attack or data breach, we assist by:", null, $defaultParagraphStyle);
    $projectDescriptionPage->addListItem("Identifying the vector of the attack to prevent future breaches. It is not uncommon for multiple types of attacks to occur in quick succession across different vectors.", 0);
    $projectDescriptionPage->addListItem("Analysing and identifying malicious software, isolating it, and ensuring that it hasn’t distributed itself wider. The latest generations of malware aim to disperse and go dormant quickly to capitalize on the defender’s distraction with the known live threat, only to be reawakened at a later time.", 0);
    $projectDescriptionPage->addListItem("Securing data for later analysis. Securing data correctly can help identify evidence for use in criminal/civil proceedings at a later date. Secured quickly, and to the highest evidential standards, it also has the advantage of allowing the business to resume operations as soon as backups and business continuity plans have been brought online.", 0);
    $projectDescriptionPage->addListItem("Identifying possible data loss. Tracking data that has been accessed or re-routed through your network by analysing logs and memory dumps, and using open-source intelligence techniques to look for evidence of stolen data for sale or in the public domain", 0);
    $projectDescriptionPage->addListItem("Advising you and your business regarding advanced technical challenges or areas that you may not be familiar with.", 0);
    $projectDescriptionPage->addListItem("In certain circumstances, we can identify the individual or entity responsible for the breach attempt, especially if there is an insider element to the attack.", 0);
    $projectDescriptionPage->addListItem("Providing appropriate breach reports, based on our analysis for use with internal teams or payment card providers and/or regulators.", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("In the following sections, the services are described in more detail:", null, $defaultParagraphStyle);

    $projectDescriptionPage->adTextBreak();
    
    $projectDescriptionPage->addText("Cyber Security Services", $boldText);
    $projectDescriptionPage->addText("We offer a range of cybersecurity services designed to deliver peace of mind and assurance against modern cyber threats.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("Cyber Security Incident Response and Threat Hunting", $boldText);
    $projectDescriptionPage->addText("We have a team of highly experienced incident response consultants. Our consultants are specialists in all aspects of the incident response process, including threat hunting and malware investigations.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("In addition, our consultants deliver nationally accredited incident response training courses and regularly deliver talks and lectures to the security industry on the incident response process.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("Most organizations that we support with cyber incident response services have a well-established response capability and appropriate plans that they enact as soon as they become aware of a breach. We provide quick-reacting, onsite technical expert services to augment in-house incident response capabilities when your organization does not possess those skills.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("Our experts can help manage and remediate incidents across several expert domains:", null, $defaultParagraphStyle);

    $projectDescriptionPage->addListItem("Malware (Including Trojan’s, Viruses, Worms, APT’s, Ransomware, and other blended types)", 0);
    $projectDescriptionPage->addListItem("Unwanted disruption or denial of services (DoS/DDoS)", 0);
    $projectDescriptionPage->addListItem("Unauthorized changes to system (hardware or software) configurations", 0);
    $projectDescriptionPage->addListItem("External and internal network attacks – hacking techniques including hostile reconnaissance, port scanning", 0);
    $projectDescriptionPage->addListItem("Unacceptable use of the internet or email in line with IT policies", 0);
    $projectDescriptionPage->addListItem("Loss or disclosure of sensitive data – intellectual property and personal data", 0);
    $projectDescriptionPage->addListItem("Website attacks – database breaches, malware", 0);
    $projectDescriptionPage->addListItem("Phishing attacks and spoofed websites", 0);
    $projectDescriptionPage->addListItem("Email attacks – malware in incoming or outgoing emails", 0);
    $projectDescriptionPage->addListItem("Unplanned loss of processing capacity – investigating hardware or software failure", 0);


    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Digital Forensics and Investigations", $boldText, $defaultParagraphStyle);
    $projectDescriptionPage->addText("We have highly experienced digital forensics specialists based in our Cambridge office. Our senior investigators all have individual specialisms and a minimum of 10 years of experience. Our most experienced practitioner has over 19 years of experience and has been nationally recognized for his work in this area. Those specialisms include:", null, $defaultParagraphStyle);
    
    $projectDescriptionPage->addListItem("Microsoft and Linux operating systems as well as Apple OS variants", 0);
    $projectDescriptionPage->addListItem("Memory analysis", 0);
    $projectDescriptionPage->addListItem("File system analysis", 0);
    $projectDescriptionPage->addListItem("Mobile phone/smart device analysis", 0);
    $projectDescriptionPage->addListItem("Data recovery", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("We have developed a key set of principles by which we provide our service. These are:", null, $defaultParagraphStyle);
    $projectDescriptionPage->addListItem("Adherence to the ACPO Guidelines", 0);
    $projectDescriptionPage->addListItem("Adherence to ISO standards, namely ISO27037, 27041, 27042, 27043", 0);
    $projectDescriptionPage->addListItem("Maintenance of evidence continuity and integrity throughout all engagements", 0);
    $projectDescriptionPage->addListItem("All actions are documented contemporaneously.", 0);
    $projectDescriptionPage->addListItem("Use of trained and experienced senior consultants for all cases.", 0);
    $projectDescriptionPage->addListItem("Evidential rigour to criminal standards in all cases", 0);
    $projectDescriptionPage->addListItem("Peer review of all work", 0);
    
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Digital Forensics and Investigations", $boldText, $defaultParagraphStyle);
    $projectDescriptionPage->addText("We acquire digital evidence both onsite and, in our laboratory, according to the established forensic process. Our consultants are experienced in forensic data collection from all types of devices using a range of forensically sound techniques. These techniques include:", null, $defaultParagraphStyle);
    $projectDescriptionPage->addListItem("Live – servers, desktops, and laptops with memory capture", 0);
    $projectDescriptionPage->addListItem("Network – switches and routers", 0);
    $projectDescriptionPage->addListItem("Static – computers and their hard drives", 0);
    $projectDescriptionPage->addListItem("Mobile – mobile phones and smart devices", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Many of our consultants have experience in executing or being present at the execution of both criminal and civil warrants. Our consultants are experienced in the correct handling of evidence and the importance of the ‘Chain of Custody’.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("Evidential reports and expert witness services", $boldText, $defaultParagraphStyle);
    $projectDescriptionPage->addText("Our consultants are registered, expert witnesses. We prepare full evidential packages for you and, if required, for disclosure to your client’s Board, Regulators, or the Authorities. Some of our work results in a requirement to attend judiciary proceedings to present this expert evidence – all of our senior consultants are experienced at presenting at legal proceedings as expert witnesses.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("Incident response and forensic capability development", $boldText, $defaultParagraphStyle);
    $projectDescriptionPage->addText("We can help you design and develop your client’s own in-house cyber incident response or forensic investigation capabilities. This includes organizational design, operational coordination, and information technology design. We can offer capability or design advice after attending incidents for a client.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("We also offer tailored training courses based on our core specialisms which can be delivered on-site to strengthen the skills of any team.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("Security Assurance and Testing", $boldText,$defaultParagraphStyle);
    $projectDescriptionPage->addText("We have a large and experienced penetration testing and PCI DSS team across both our London and Cambridge offices. These services are available to be called upon by the incident response team when required.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("Security assurance services", $boldText, $defaultParagraphStyle);
    $projectDescriptionPage->addText("The Information Security Assurance team can provide services across the full scope of information security assurance. The team members have particular specialisms in Payment Card Industry Data Security Standard (PCI DSS) and ISO 27001.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("PCI DSS:", $boldText, $defaultParagraphStyle);
    $projectDescriptionPage->addListItem("Gap analysis", 0);
    $projectDescriptionPage->addListItem("SAQ validation", 0);
    $projectDescriptionPage->addListItem("Remediation support", 0);
    $projectDescriptionPage->addListItem("Barclaycard Risk Reduction Programme", 0);
    $projectDescriptionPage->addListItem("PCI DSS policies", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("ISO 27000:", $boldText, $defaultParagraphStyle);
    $projectDescriptionPage->addListItem("ISO 27001 policies (assurance)", 0);
    $projectDescriptionPage->addListItem("Audit against ISO 27002 controls (function)", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Security testing services", $boldText, $defaultParagraphStyle);
    $projectDescriptionPage->addText("In some incidents, there will be a need for specialized technical testing and review. In such instances, the Incident Response team are also able to call upon a highly experienced Penetration Testing team who provide services including:", null, $defaultParagraphStyle);
    $projectDescriptionPage->addListItem("Infrastructure Testing", 0);
    $projectDescriptionPage->addListItem("Web Application Testing", 0);
    $projectDescriptionPage->addListItem("Mobile Application Testing", 0);
    $projectDescriptionPage->addListItem("Mobile Device Testing", 0);
    $projectDescriptionPage->addListItem("Software Testing", 0);
    $projectDescriptionPage->addListItem("Build Reviews", 0);
    $projectDescriptionPage->addListItem("Network Testing", 0);
    $projectDescriptionPage->addListItem("Vulnerability scanning", 0);
    $projectDescriptionPage->addListItem("Application security assessment", 0);
    $projectDescriptionPage->addListItem("Infrastructure security assessment", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("Crisis Communications"), $boldText, $defaultParagraphStyle);
    $projectDescriptionPage->addText(htmlspecialchars("The Incident Response team has access to professionals with crisis communications expertise in the event of a breach or attack. Consultancy can be in the form of:"), null, $defaultParagraphStyle);
    $projectDescriptionPage->addListItem(htmlspecialchars("Ad-hoc assistance when required during an incident, including support to assist in managing external (including media) statements on the incident."), 0);
    $projectDescriptionPage->addListItem(htmlspecialchars("Communication and governance planning – developing a plan for a potential cybersecurity incident, to develop a whole-of-organization response that combines IT, communications, operations, and legal/regulatory teams to best effect."), 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText(htmlspecialchars("ISO 27001 Consultancy Proposal"), $boldText, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText(htmlspecialchars("   1. ISO 27001 Assessment (5 days)"), $boldText);
    $projectDescriptionPage->addListItem(htmlspecialchars("Review current operational and IT processes"), 1);
    $projectDescriptionPage->addListItem(htmlspecialchars("Review of existing documentation and interviews with team"), 1);
    $projectDescriptionPage->addListItem(htmlspecialchars("Review against ISO27001 criteria"), 1);

    $projectDescriptionPage->addText(htmlspecialchars("   2. ISO 27001 Assessment (5 days)"), $boldText);
    $projectDescriptionPage->addListItem(htmlspecialchars("High-level plan and outline of the path to Certification"), 1);
    $projectDescriptionPage->addListItem(htmlspecialchars("Agree on approach for Critical areas."), 1);
    $projectDescriptionPage->addListItem(htmlspecialchars("Initial review and discussion with Team"), 1);
    

    // $projectDescriptionPage->addListItem(htmlspecialchars("3. ISO27001 Remediation (3 days)"), $boldText);
    $projectDescriptionPage->addText(htmlspecialchars("   3. ISO 27001 Remediation (3 days)"), $boldText);
    $projectDescriptionPage->addListItem(htmlspecialchars("Initial Remediation Steps -e.g., creation of policies"), 1);
    $projectDescriptionPage->addListItem(htmlspecialchars("Detailed Plan of ISO Controls to address and timeline."), 1);
    

        
    $projectDescriptionPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('Red Team Partners firewall configuration assessment compromises of the following checks:', null, $defaultParagraphStyle);
    $projectDescriptionPage->addTextBreak();


    
    $projectDescriptionPage->addPageBreak();