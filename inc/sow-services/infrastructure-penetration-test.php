<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    // $projectDescriptionPage->addTitle('Infrastructure Penetration Testing', 2); // TOC Bookmark 
    // $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('Red Team Partners offers Infrastructure Penetration Testing. It provides an assessment for vulnerabilities and weaknesses within the organisation’s network configuration. Red Team Partners provides a service that simulates a typically leveraged attack by malicious actors to gain full compromise of the internal domain. This assessment also provides an insight into an organisation’s security posture.', null, $defaultParagraphStyle);
    
    $projectDescriptionPage->addText('An Infrastructure Penetration Testing can be divided into three stages:', null, $defaultParagraphStyle);

    // $projectDescriptionPage->addImage(
    //     ASSETS_IMG_DIR . 'methodologies/discovery-assessment-exploitation-process.png',
    //     array(
    //         'width'         => 450,
    //         // 'height'        => 52,
    //         'marginTop'     => 2,
    //         'marginLeft'    => -1,
    //         'wrappingStyle' => 'behind',
    //         'alignment' => 'center',
    //     )
    // );

    $projectDescriptionPage->addListItem("Discovery", 0);
    $projectDescriptionPage->addListItem("Assessment", 0);
    $projectDescriptionPage->addListItem("Exploitation", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);

    $projectDescriptionPage->addText('Red Team Partners utilises a wide range of tools to scan and discover assets. Usually, a target IP range is provided prior to the commencing of testing, albeit some engagements require Red Team Partners to identify ranges in use. Our consultants use the latest scanning tools and techniques to perform a comprehensive audit of all IP ranges.', null, $defaultParagraphStyle);

    // $projectDescriptionPage->addImage(
    //     ASSETS_IMG_DIR . 'methodologies/infrastructure-pentest-01.png',
    //     array(
    //         'width'         => 450,
    //         // 'height'        => 52,
    //         'marginTop'     => 2,
    //         'marginLeft'    => -1,
    //         'wrappingStyle' => 'behind',
    //         'alignment' => 'center',
    //     )
    // );

    $projectDescriptionPage->addText("Some of these include:", $boldText, $defaultParagraphStyle);
    $projectDescriptionPage->addListItem("TCP and UDP Port Scanning", 0);
    $projectDescriptionPage->addListItem("Network Mapping", 0);
    $projectDescriptionPage->addListItem("Operation System and Service", 0);
    $projectDescriptionPage->addListItem("User Enumeration (where possible)", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Once the discovery phase has ended, Red Team Partners consultants interpret the results and use them to identify possible attack vectors and perform manual attack simulations.  Manual assessments focus on:', null, $defaultParagraphStyle);
    
    // $projectDescriptionPage->addImage(
    //     ASSETS_IMG_DIR . 'methodologies/infrastructure-pentest-02.png',
    //     array(
    //         'width'         => 450,
    //         // 'height'        => 52,
    //         'marginTop'     => 2,
    //         'marginLeft'    => -1,
    //         'wrappingStyle' => 'behind',
    //         'alignment' => 'center',
    //     )
    // );

    $projectDescriptionPage->addListItem("Misconfigured hosts and services", 0);
    $projectDescriptionPage->addListItem("Patch level assessment", 0);
    $projectDescriptionPage->addListItem("Outdated systems and software", 0);
    $projectDescriptionPage->addListItem("Insecure protocols", 0);
    $projectDescriptionPage->addListItem("Weak passwords and default usernames", 0);
    $projectDescriptionPage->addListItem("LLMNR and NBNS spoofing", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Internal Network Security", $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText("Internal security assessments are simulating the cases when the attacker has already infected one of the employees PC or a server and attacks from inside vectors such as employees. Internal pentests tries to determine what is the highest danger in case of an already breached network and how far the attacker can go.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("In this type of assessment, the CTD security team will have access to the company network without any knowledge about network configuration or architecture.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("In case of an internal network pentest the security team will perform the following attacks:", null, $defaultParagraphStyle);

    $projectDescriptionPage->addPageBreak();

    $projectDescriptionPage->addText("Test Name:", $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $test1 = $projectDescriptionPage->addListItemRun();
    $test1->addText("Network Surveying:", $boldText);
    $test1->addText(" This step involves gathering information pertaining to the server under scope through websites, mail servers, DNS records, and databases. This allows the team to discover and enumerate the target systems to be tested.");
    
    $test2 = $projectDescriptionPage->addListItemRun();
    $test2->addText("Network Enumeration:", $boldText);
    $test2->addText(" This step involves scanning the network to gather information related to the host, supporting infrastructure, network path and the ACL’s");

    $test3 = $projectDescriptionPage->addListItemRun();
    $test3->addText("Port Scanning:", $boldText);
    $test3->addText(" Port scanning is the process of probing system ports on the transport and network-level of the target systems. Port scanning is used to enumerate live or accessible Internet services. Here, the scan is run in various modes such as connect, SYN, FIN, Xmas, Null, UDP, and FTP Bounce to identify the operating system, version and lists of services running on a target host.");

    $test4 = $projectDescriptionPage->addListItemRun();
    $test4->addText("System Fingerprinting:", $boldText);
    $test4->addText(" System fingerprinting is the process of probing target systems to confirm host operating systems and version levels. This process also gathers other explicit and implicit information about target systems.");

    $test5 = $projectDescriptionPage->addListItemRun();
    $test5->addText("Vulnerability Scanning:", $boldText);
    $test5->addText(htmlspecialchars(" will use various commercial/non-commercial proprietary tools to discover and enumerate vulnerabilities at different levels such as OS, Services & Applications.") );

    $test6 = $projectDescriptionPage->addListItemRun();
    $test6->addText("Verifying Authentication Methods:", $boldText);
    $test6->addText(" Authentication methods in use with the systems/devices/application will be examined for their robustness to various subversion techniques.");

    $projectDescriptionPage->addListItem("Sniffing, Spoofing, ARP Poisoning trying to intercept traffic through MiTM attacks.", 0);

    $test7 = $projectDescriptionPage->addListItemRun();
    $test7->addText("ACL Verification:", $boldText);
    $test7->addText(" Access controls lists of network infrastructure will be tested by sending customized packets.");

    $projectDescriptionPage->addListItem("Applications attacks on identified hosts in order to obtain access to a system.", 0);
    $projectDescriptionPage->addListItem("Local privilege escalation as root, administrator or SYSTEM in identified hosts.", 0);
    $projectDescriptionPage->addListItem("Network authentication credentials gathering: Password cracking, plain text passwords, brute-force encryption", 0);
    $projectDescriptionPage->addListItem("Scanning Directory services, FTP services", 0);

    $test8 = $projectDescriptionPage->addListItemRun();
    $test8->addText("Switch security Assessment:", $boldText);
    $test8->addText(" identify protocols, telnet and HTTP connections, exploits based on firmware and model, DHCP starvation, VLAN Hopping, VTP Attacks, switch authentication");

    $projectDescriptionPage->addListItem("Denial of service to network or components: switch, router, web servers, applications", 0);

    $text9 = $projectDescriptionPage->addListItemRun();
    $text9->addText("Router Security Assessment:", $boldText);
    $text9->addText(" product specific vulnerability, miss-configuration on router, password cracking, http access to management console, SNMP insecurities, common routing issues, DoS");

    $text10 = $projectDescriptionPage->addListItemRun();
    $text10->addText("Firewall security assessment:", $boldText);
    $text10->addText(" firewall rule-set mapping (firewalk), port redirection, firewall backdoors, product specific vulnerabilities");

    $projectDescriptionPage->addListItem("Security checks on IDS/IPS, VPNs, Email servers", 0);

    $projectDescriptionPage->addListItem("Privilege escalation as local admin or Domain admin, pass the hash, mimikatz", 0);

    $text11 = $projectDescriptionPage->addListItemRun();
    $text11->addText("WLAN security assessment:", $boldText);
    $text11->addText(" takeover the router, encryption bypass, brute-force credentials, DoS with forged packets, Fake AP, De-authenticate the clients, Hijacking sessions, MiTM, Spoofing");

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Once the discovery phase has ended, Red Team Partners’ consultants interpret the results and use them to identify possible attack vectors and perform manual attack simulations. The manual assessments focus on:", $defaultParagraphStyle);

    $projectDescriptionPage->addListItem("Misconfigured hosts and services", 0);
    $projectDescriptionPage->addListItem("Patch level assessments", 0);
    $projectDescriptionPage->addListItem("Outdated systems and software", 0);  
    $projectDescriptionPage->addListItem("Insecure protocols", 0);
    $projectDescriptionPage->addListItem("Weak passwords and default usernames", 0);
    $projectDescriptionPage->addListItem("LLMNR and NBNS spoofing", 0);


    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Tools", $boldText);
    $projectDescriptionPage->addText("Red Team Partners uses the most capable tools in the security industry that have proved their efficiency in many pentests. Below is a list of tools that Red Team Partners security team is using:", null, $defaultParagraphStyle);

    $infraTwoColSection = $phpWord->addSection($styleTwoColumn);
    $infraTwoColSection->addListItem("Nmap", 0);
    $infraTwoColSection->addListItem("Nessus", 0);
    $infraTwoColSection->addListItem("Nexpose", 0);
    $infraTwoColSection->addListItem("DNS Recon", 0);
    $infraTwoColSection->addListItem("Burp, BeEF", 0);
    $infraTwoColSection->addListItem("Dig", 0);
    $infraTwoColSection->addListItem("Hydra / John the ripper", 0);
    $infraTwoColSection->addListItem("Third-party exploits", 0);
    $infraTwoColSection->addListItem("Bettercap", 0);
    $infraTwoColSection->addListItem("KALI Linux", 0);
    $infraTwoColSection->addListItem("ZED ATTACK PRO (ZAP)", 0);
    $infraTwoColSection->addListItem("Maltego, w3af, wpscan", 0);
    $infraTwoColSection->addListItem("exploitDB", 0);
    $infraTwoColSection->addListItem("Dirbuster", 0);
    $infraTwoColSection->addListItem("The harvester", 0);
    $infraTwoColSection->addListItem("Archive.org/information gathering/dnsrecon", 0);
    $infraTwoColSection->addListItem("Metasploit", 0);
    $infraTwoColSection->addListItem("Nikto", 0);
    $infraTwoColSection->addListItem("SQLMAP, BBQ SQL, SQLNinja", 0);
    $infraTwoColSection->addListItem("THC Hydra", 0);
    $infraTwoColSection->addListItem("John the ripper", 0);
    $infraTwoColSection->addListItem("XSSer", 0);
    $infraTwoColSection->addListItem("Sparta, Doona", 0);
    // $infraTwoColSection->addListItem("OpenVAS, Armitage, Aircrack, mimikatz", 0);
    

    $projectDescriptionPage = $phpWord->addSection($styleSingleColumn);

    $projectDescriptionPage->addPageBreak();

    