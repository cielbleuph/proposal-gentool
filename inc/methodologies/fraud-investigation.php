<?php

    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );


    $methodologiesPage->addTitle('Fraud Investigation', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    
    $methodologiesPage->addText('Purpose', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('Describes the methodology for Fraud Investigation', null, $defaultParagraphStyle);
    

    $methodologiesPage->addText(htmlspecialchars('"Next Energy Capital" next steps'), null, $defaultParagraphStyle);
    $methodologiesPage->addListItem("Research personal email in public breaches", 0);
    $methodologiesPage->addListItem("Research personal email in dark web sales", 0);
    $methodologiesPage->addListItem("OSINT for any related information to this case", 0);
    $methodologiesPage->addListItem("Research for CC in dark web sales",0);
    $methodologiesPage->addListItem("Research for any link from personal to the corporate area", 0);
    $methodologiesPage->addListItem("Crack the hashes from public exploits", 0);
    $methodologiesPage->addListItem("Build the report with the evidence and possible scenarios", 0);
    $methodologiesPage->addListItem("Build the chain of Events, if possible", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Fraud Investigation Detailed", $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText("Every fraud incident is different, and the response and investigation methods will vary depending on the facts that are unique to each case.", null, $defaultParagraphStyle);

    $methodologiesPage->addText("Our Team can provide the leadership and core capabilities in cybersecurity domains:", null, $defaultParagraphStyle);
    $methodologiesPage->addListItem("Cyber Security Incident Response and Threat Hunting", 0);
    $methodologiesPage->addListItem("Digital Forensics and Investigations", 0);
    $methodologiesPage->addListItem("Security Assurance and Testing", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("We offer pre-incident and post-incident technical capabilities and skills. In the event of an attack or data breach, we assist by:", null, $defaultParagraphStyle);
    $methodologiesPage->addListItem("Identifying the vector of the attack to prevent future breaches. It is not uncommon for multiple types of attacks to occur in quick succession across different vectors.", 0);
    $methodologiesPage->addListItem("Analysing and identifying malicious software, isolating it, and ensuring that it hasn’t distributed itself wider. The latest generations of malware aim to disperse and go dormant quickly to capitalize on the defender’s distraction with the known live threat, only to be reawakened at a later time.", 0);
    $methodologiesPage->addListItem("Securing data for later analysis. Securing data correctly can help identify evidence for use in criminal/civil proceedings at a later date. Secured quickly, and to the highest evidential standards, it also has the advantage of allowing the business to resume operations as soon as backups and business continuity plans have been brought online.", 0);
    $methodologiesPage->addListItem("Identifying possible data loss. Tracking data that has been accessed or re-routed through your network by analysing logs and memory dumps, and using open-source intelligence techniques to look for evidence of stolen data for sale or in the public domain", 0);
    $methodologiesPage->addListItem("Advising you and your business regarding advanced technical challenges or areas that you may not be familiar with.", 0);
    $methodologiesPage->addListItem("In certain circumstances, we can identify the individual or entity responsible for the breach attempt, especially if there is an insider element to the attack.", 0);
    $methodologiesPage->addListItem("Providing appropriate breach reports, based on our analysis for use with internal teams or payment card providers and/or regulators.", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("In the following sections, the services are described in more detail:", null, $defaultParagraphStyle);

    $methodologiesPage->adTextBreak();
    
    $methodologiesPage->addText("Cyber Security Services", $boldText);
    $methodologiesPage->addText("We offer a range of cybersecurity services designed to deliver peace of mind and assurance against modern cyber threats.", null, $defaultParagraphStyle);

    $methodologiesPage->addText("Cyber Security Incident Response and Threat Hunting", $boldText);
    $methodologiesPage->addText("We have a team of highly experienced incident response consultants. Our consultants are specialists in all aspects of the incident response process, including threat hunting and malware investigations.", null, $defaultParagraphStyle);

    $methodologiesPage->addText("In addition, our consultants deliver nationally accredited incident response training courses and regularly deliver talks and lectures to the security industry on the incident response process.", null, $defaultParagraphStyle);

    $methodologiesPage->addText("Most organizations that we support with cyber incident response services have a well-established response capability and appropriate plans that they enact as soon as they become aware of a breach. We provide quick-reacting, onsite technical expert services to augment in-house incident response capabilities when your organization does not possess those skills.", null, $defaultParagraphStyle);

    $methodologiesPage->addText("Our experts can help manage and remediate incidents across several expert domains:", null, $defaultParagraphStyle);

    $methodologiesPage->addListItem("Malware (Including Trojan’s, Viruses, Worms, APT’s, Ransomware, and other blended types)", 0);
    $methodologiesPage->addListItem("Unwanted disruption or denial of services (DoS/DDoS)", 0);
    $methodologiesPage->addListItem("Unauthorized changes to system (hardware or software) configurations", 0);
    $methodologiesPage->addListItem("External and internal network attacks – hacking techniques including hostile reconnaissance, port scanning", 0);
    $methodologiesPage->addListItem("Unacceptable use of the internet or email in line with IT policies", 0);
    $methodologiesPage->addListItem("Loss or disclosure of sensitive data – intellectual property and personal data", 0);
    $methodologiesPage->addListItem("Website attacks – database breaches, malware", 0);
    $methodologiesPage->addListItem("Phishing attacks and spoofed websites", 0);
    $methodologiesPage->addListItem("Email attacks – malware in incoming or outgoing emails", 0);
    $methodologiesPage->addListItem("Unplanned loss of processing capacity – investigating hardware or software failure", 0);


    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Digital Forensics and Investigations", $boldText, $defaultParagraphStyle);
    $methodologiesPage->addText("We have highly experienced digital forensics specialists based in our Cambridge office. Our senior investigators all have individual specialisms and a minimum of 10 years of experience. Our most experienced practitioner has over 19 years of experience and has been nationally recognized for his work in this area. Those specialisms include:", null, $defaultParagraphStyle);
    
    $methodologiesPage->addListItem("Microsoft and Linux operating systems as well as Apple OS variants", 0);
    $methodologiesPage->addListItem("Memory analysis", 0);
    $methodologiesPage->addListItem("File system analysis", 0);
    $methodologiesPage->addListItem("Mobile phone/smart device analysis", 0);
    $methodologiesPage->addListItem("Data recovery", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("We have developed a key set of principles by which we provide our service. These are:", null, $defaultParagraphStyle);
    $methodologiesPage->addListItem("Adherence to the ACPO Guidelines", 0);
    $methodologiesPage->addListItem("Adherence to ISO standards, namely ISO27037, 27041, 27042, 27043", 0);
    $methodologiesPage->addListItem("Maintenance of evidence continuity and integrity throughout all engagements", 0);
    $methodologiesPage->addListItem("All actions are documented contemporaneously.", 0);
    $methodologiesPage->addListItem("Use of trained and experienced senior consultants for all cases.", 0);
    $methodologiesPage->addListItem("Evidential rigour to criminal standards in all cases", 0);
    $methodologiesPage->addListItem("Peer review of all work", 0);
    
    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Digital Forensics and Investigations", $boldText, $defaultParagraphStyle);
    $methodologiesPage->addText("We acquire digital evidence both onsite and, in our laboratory, according to the established forensic process. Our consultants are experienced in forensic data collection from all types of devices using a range of forensically sound techniques. These techniques include:", null, $defaultParagraphStyle);
    $methodologiesPage->addListItem("Live – servers, desktops, and laptops with memory capture", 0);
    $methodologiesPage->addListItem("Network – switches and routers", 0);
    $methodologiesPage->addListItem("Static – computers and their hard drives", 0);
    $methodologiesPage->addListItem("Mobile – mobile phones and smart devices", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Many of our consultants have experience in executing or being present at the execution of both criminal and civil warrants. Our consultants are experienced in the correct handling of evidence and the importance of the ‘Chain of Custody’.", null, $defaultParagraphStyle);

    $methodologiesPage->addText("Evidential reports and expert witness services", $boldText, $defaultParagraphStyle);
    $methodologiesPage->addText("Our consultants are registered, expert witnesses. We prepare full evidential packages for you and, if required, for disclosure to your client’s Board, Regulators, or the Authorities. Some of our work results in a requirement to attend judiciary proceedings to present this expert evidence – all of our senior consultants are experienced at presenting at legal proceedings as expert witnesses.", null, $defaultParagraphStyle);

    $methodologiesPage->addText("Incident response and forensic capability development", $boldText, $defaultParagraphStyle);
    $methodologiesPage->addText("We can help you design and develop your client’s own in-house cyber incident response or forensic investigation capabilities. This includes organizational design, operational coordination, and information technology design. We can offer capability or design advice after attending incidents for a client.", null, $defaultParagraphStyle);

    $methodologiesPage->addText("We also offer tailored training courses based on our core specialisms which can be delivered on-site to strengthen the skills of any team.", null, $defaultParagraphStyle);

    $methodologiesPage->addText("Security Assurance and Testing", $boldText,$defaultParagraphStyle);
    $methodologiesPage->addText("We have a large and experienced penetration testing and PCI DSS team across both our London and Cambridge offices. These services are available to be called upon by the incident response team when required.", null, $defaultParagraphStyle);

    $methodologiesPage->addText("Security assurance services", $boldText, $defaultParagraphStyle);
    $methodologiesPage->addText("The Information Security Assurance team can provide services across the full scope of information security assurance. The team members have particular specialisms in Payment Card Industry Data Security Standard (PCI DSS) and ISO 27001.", null, $defaultParagraphStyle);

    $methodologiesPage->addText("PCI DSS:", $boldText, $defaultParagraphStyle);
    $methodologiesPage->addListItem("Gap analysis", 0);
    $methodologiesPage->addListItem("SAQ validation", 0);
    $methodologiesPage->addListItem("Remediation support", 0);
    $methodologiesPage->addListItem("Barclaycard Risk Reduction Programme", 0);
    $methodologiesPage->addListItem("PCI DSS policies", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("ISO 27000:", $boldText, $defaultParagraphStyle);
    $methodologiesPage->addListItem("ISO 27001 policies (assurance)", 0);
    $methodologiesPage->addListItem("Audit against ISO 27002 controls (function)", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Security testing services", $boldText, $defaultParagraphStyle);
    $methodologiesPage->addText("In some incidents, there will be a need for specialized technical testing and review. In such instances, the Incident Response team are also able to call upon a highly experienced Penetration Testing team who provide services including:", $boldText, $defaultParagraphStyle);
    $methodologiesPage->addListItem("Infrastructure Testing", 0);
    $methodologiesPage->addListItem("Web Application Testing", 0);
    $methodologiesPage->addListItem("Mobile Application Testing", 0);
    $methodologiesPage->addListItem("Mobile Device Testing", 0);
    $methodologiesPage->addListItem("Software Testing", 0);
    $methodologiesPage->addListItem("Build Reviews", 0);
    $methodologiesPage->addListItem("Network Testing", 0);
    $methodologiesPage->addListItem("Vulnerability scanning", 0);
    $methodologiesPage->addListItem("Application security assessment", 0);
    $methodologiesPage->addListItem("Infrastructure security assessment", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Crisis Communications", $boldText, $defaultParagraphStyle);
    $methodologiesPage->addText("The Incident Response team has access to professionals with crisis communications expertise in the event of a breach or attack. Consultancy can be in the form of:", null, $defaultParagraphStyle);
    $methodologiesPage->addListItem("Ad-hoc assistance when required during an incident, including support to assist in managing external (including media) statements on the incident.", 0);
    $methodologiesPage->addListItem("Communication and governance planning – developing a plan for a potential cybersecurity incident, to develop a whole-of-organization response that combines IT, communications, operations, and legal/regulatory teams to best effect.", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('ISO 27001 Consultancy Proposal', $boldText, $paragraphHeadingPStyle);
    $methodologiesPage->addListItem("ISO 27001 Assessment (5 days)", 0, $boldText, $numberStyleList);
    $methodologiesPage->addListItem("Review current operational and IT processes", 1);
    $methodologiesPage->addListItem("Review of existing documentation and interviews with team", 1);
    $methodologiesPage->addListItem("Review against ISO27001 criteria", 1);

    $methodologiesPage->addListItem("ISO 27001 Assessment (5 days)", 0, $boldText, $numberStyleList);
    $methodologiesPage->addListItem("High-level plan and outline of the path to Certification", 1);
    $methodologiesPage->addListItem("Agree on approach for Critical areas.", 1);
    $methodologiesPage->addListItem("Initial review and discussion with Team", 1);

    $methodologiesPage->addListItem("ISO27001 Remediation (3 days)", 0, $boldText, $numberStyleList);
    $methodologiesPage->addListItem("Initial Remediation Steps -e.g., creation of policies", 1);
    $methodologiesPage->addListItem("Detailed Plan of ISO Controls to address and timeline.", 1);
    

        
    // $methodologiesPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    // $methodologiesPage->addText('Red Team Partners firewall configuration assessment compromises of the following checks:', null, $defaultParagraphStyle);
    // $methodologiesPage->addTextBreak();


    
    $methodologiesPage->addPageBreak();