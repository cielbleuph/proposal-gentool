<?php


    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    // $paragraphHeadingPStyle['align']='both';
    // var_dump($paragraphHeadingPStyle);

    // die();

    // $projectDescriptionPage->addTitle('Dark Web Cyber Threat Intelligence', 2); // TOC Bookmark 
    // $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle );
    $projectDescriptionPage->addText('The investigation uses all available resources, software or data files available on the internet to find out if the target assets are published online.', null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("Our target is to offer our client the best possible overview of his assets, as available to an outside hacker. When doing so we focus exclusively on assets where the client has clear ownership rights (no personal details about the employees are provided).", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("Cyber Threat Intelligence (CTI) can still be described as a nascent and fast-developing field. However, the practice of intelligence itself is historically and commercially a very well-established discipline.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("Using an intelligence-led approach has long been accepted as best practice in the realm of conventional security. Without it, organisations will invariably defend against too little, because they don’t understand the threats they face, or try to defend against all potential threats–an unsustainable approach that may also impair the organisation’s ability to operate effectively.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("For example, accompany looking to build a facility in a potentially hostile environment would first seek intelligence on the threat posed by malicious actors in the vicinity before trying to adopt appropriate security controls.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("The Threat Intelligence methodology contains the following phases:", null, $defaultParagraphStyle);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Environmental Context", array("bold"=>true), $defaultParagraphStyle);
    $projectDescriptionPage->addText("A deep understanding of your organization, including your organization’s entire attack surface; threats, risks, and opportunities targeting your organization and industry; and your organization’s internal and external network and operations. Gaining this understanding is a continuous process and influences what data is needed to perform cyber intelligence.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("Data Gathering", array("bold"=>true), $defaultParagraphStyle);
    $projectDescriptionPage->addText("Through automated and labor-intensive means, data and information is collected from multiple internal and external sources for analysts to analyze to answer organizational intelligence requirements.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("Threat Analysis", array("bold"=>true), $defaultParagraphStyle);
    $projectDescriptionPage->addText("Assessing technical telemetry and non-technical data pertaining to specific threats to your organization and industry to inform cybersecurity operations/actions and Strategic Analysis. Threat Analysis is built on operational and tactical analysis and enhances CSO/CISO and other mid- to senior level decision making.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("Strategic Analysis", array("bold"=>true), $defaultParagraphStyle);
    $projectDescriptionPage->addText("Holistically assessing threats, risks and opportunities to enhance executive decision-making pertaining to organization-wide vital interests such as financial health, brand, stature, and reputation.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addText("Reporting and Feedback", array("bold"=>true), $defaultParagraphStyle);
    $projectDescriptionPage->addText("Communication between analysts and decision makers, peers, and other intelligence consumers regarding their products and work performance. Reporting and feedback help identify intelligence requirements and intelligence gaps.", null, $defaultParagraphStyle);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('The Different Levels of Cyber Threat Intelligence', array("bold"=>true, "size" => 13), $defaultParagraphStyle );
    $projectDescriptionPage->addText("As with conventional intelligence, there are different levels of cyber threat intelligence: operational, tactical, and strategic. Each level differs in the nature and format of the material conveyed, its intended audience and its application. These are summarised:", null, $defaultParagraphStyle);

    $dark1 = $projectDescriptionPage->addListItemRun(0);
    $dark1->addText("Operational threat intelligence ", array("bold"=>true));
    $dark1->addText("often relates to details of potential impending operations against an organisation. Although it is not always easy to obtain, by using an all-source approach an intelligence provider will be able to detect, for example, chatter from cyber activists discussing potential targets for an upcoming campaign, or data leaked or sold on a dark web forum that could be used in an operation against the company. Cyber threat intelligence providers will generally supply operational threat intelligence in a combination of human and machine-readable formats.");

    $dark2 = $projectDescriptionPage->addListItemRun(0);
    $dark2->addText("Tactical threat intelligence ", array("bold"=>true));
    $dark2->addText("consists of material relating to the techniques, tactics and procedures (TTP’s) used by threat actors. Indicators of compromise (IOCs) are the main deliverable for tactical threat intelligence providers. These are particularly useful for updating signature-based defence systems to defend against known attack types, but can also prove useful for more proactive measures, such as threat hunting exercises. It is therefore particularly useful to network defenders such as Security Operations Centres (SOCs). CTI providers will generally supply IOCs in machine-readable formats, whereas intelligence on TTPs will be in human-readable formats, and will require human assimilation and action.", null, $defaultParagraphStyle);

    $dark3 = $projectDescriptionPage->addListItemRun(0);
    $dark3->addText("Strategic threat intelligence ", array("bold"=>true), $defaultParagraphStyle);
    $dark3->addText("exists to inform senior decision makers of broader changes in the threat landscape. Because of this intended audience, strategic intelligence products are expressed in plain language and focus on issues of business risk rather than technical terminology. The reporting format of strategic cyber threat intelligence products will reflect this longer-term view – for example it will often be disseminated on a monthly or quarterly basis to assist the formulation of longer-term strategy.", null, $defaultParagraphStyle);

    $dark4 = $projectDescriptionPage->addListItemRun(0);
    $dark4->addText("Sources of intelligence that we are searching in: ", array("bold"=>true), $defaultParagraphStyle);
    $dark4->addText("Cyber threat intelligence suppliers should draw from a wide range of different sources to enable them to provide a rounded and holistic understanding of the threats that organisations face. This is particularly true because the range of cyber adversaries most organisations face are disparate, and relevant information sources about those threat actors need to match that challenge. Commonly used sources by cyber threat intelligence providers include:", null, $defaultParagraphStyle);

    $dark5 = $projectDescriptionPage->addListItemRun(1);
    $dark5->addText("Indicators of compromise (IoCs) ", array("bold"=>true), $defaultParagraphStyle);
    $dark5->addText("associated with malicious activity. Hashes of malware samples, IP addresses and domain names can all be used to update firewalls and detection systems, as well as contribute to an understanding of threat actors’ TTPs. IOCs are their own are more akin to data than processed intelligence, though are still included within the spectrum of cyber threat intelligence.", null, $defaultParagraphStyle);

    $dark6 = $projectDescriptionPage->addListItemRun(1);
    $dark6->addText("Client-derived data, ", array("bold"=>true), $defaultParagraphStyle);
    $dark6->addText("such as that regarding its infrastructure or extracted from a security information and event management (SIEM) tool or other logs can be correlated with other sources, or for pro-active measures such as threat hunting.", null, $defaultParagraphStyle);

    $dark7 = $projectDescriptionPage->addListItemRun(1);
    $dark7->addText("Deep web, ", array("bold"=>true), $defaultParagraphStyle);
    $dark7->addText("such as information from member-only hacking forums frequented by cybercriminals. These sources can provide valuable insight into the tools and services advertised and requested by cybercriminals, as well as identifying which exploits are being discussed to enable patch prioritisation.", null, $defaultParagraphStyle);

    $dark8 = $projectDescriptionPage->addListItemRun(1);
    $dark8->addText("Deep web ", array("bold"=>true), $defaultParagraphStyle);
    $dark8->addText("will include marketplaces and shops that are hosted on anonymity-focused networks such as Tor or I2P which criminals use to purchase goods and services. This will enable consumers to identify if their data – ranging from login credentials to valuable intellectual property – is available or being advertised for sale, or if infrastructure they use may be targeted.", null, $defaultParagraphStyle); 

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Messaging platforms are also used by threat actors to communicate, and can provide intelligence. Rather than relying on semi-public forums, some cybercriminals prefer more direct means of engaging each other to sell their goods and services. Similarly, cyber activists will often use a combination of outmoded Internet Relay Chat (IRC) channels and other messaging platforms to discuss impending operations, which can provide useful insight into potential tactics and targets.", null, $defaultParagraphStyle);

    $dark9 = $projectDescriptionPage->addListItemRun(0);
    $dark9->addText("Social media ", array("bold"=>true), $defaultParagraphStyle );
    $dark9->addText("can be used by a variety of actors, typically those with low capabilities. Activists may signal their intent to pursue specific targets in advance via social media pages. Criminals may use popular networks as an alternative means of attracting potential customers, particularly in jurisdictions where law enforcement capability is limited and they do not run the risk of arrest. Social media collection may also include coverage of inadvertent data leaks by employees or potential threats from malicious insiders.");

    $dark10 = $projectDescriptionPage->addListItemRun(0);
    $dark10->addText("Human intelligence ", array("bold"=>true), $defaultParagraphStyle );
    $dark10->addText("can be derived from engagement with individuals via several the above sources. However, threat intelligence providers should only engage in such activity under a strict and defined framework and in pursuit of specific intelligence requirements and in a legal and ethical way. Providers also need to ensure that collection efforts from social media and human sources are compliant with legislation such as the General Data Protection Regulation (GDPR).");

    $dark11 = $projectDescriptionPage->addListItemRun(0);
    $dark11->addText("Malware analysis, ", array("bold"=>true), $defaultParagraphStyle );
    $dark11->addText("which allows analysts to extract information such as indicators of compromise from a sample, which can in turn be used to search the client estate. Analysis also allows providers to better understand the latest tactics, techniques and procedures that are being used by threat actors, with a view to informing network defenders how to better respond.");

    $dark12 = $projectDescriptionPage->addListItemRun(0);
    $dark12->addText("Geopolitical developments ", array("bold"=>true), $defaultParagraphStyle );
    $dark12->addText("can be used to derive an understanding of the intent of nation-state actors. For example, understanding how a state’s strategic development objectives coincide with those of the client organisation, or how potential nation-state rivalries will affect the prospect of disruptive attacks in a region in which it operates, will help it understand the threats it faces.");

    $dark13 = $projectDescriptionPage->addListItemRun(0);
    $dark13->addText("Code repositories, ", array("bold"=>true), $defaultParagraphStyle );
    $dark13->addText("such as exploit databases, can provide insight into which exploits are available for adoption by threat actors, and which vulnerabilities should be prioritised for patching as a result.");

    $dark14 = $projectDescriptionPage->addListItemRun(0);
    $dark14->addText("Paste sites can reveal a wide array of information, including leaked credentials, indications of impending activist operations, code snippets, and evidence of breaches. The example in the image to the right shows a message from a campaign by the Anonymous collective, which goes on to list a series of targets for DDoS attacks.");

    $dark15 = $projectDescriptionPage->addListItemRun(0);
    $dark15->addText("Information sharing platforms ", array("bold"=>true), $defaultParagraphStyle );
    $dark15->addText("can also provide additional context and insight to threat actors’ current activity.");


    $projectDescriptionPage->addTextBreak();