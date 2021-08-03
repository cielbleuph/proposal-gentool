<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    $methodologiesPage->addTitle('Performance Stress / Load Testing', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText( htmlspecialchars("Red Team Partners offers a Stress Testing service to help clients verify the stability & reliability of the system. Our research-led approach differentiates us from the traditional Pen Test approach with an object that determines the system on its robustness and error handling under extremely heavy load conditions."), null, $defaultParagraphStyle);
    
    $methodologiesPage->addText("We even test beyond the normal operating point and evaluates how the system works under those extreme conditions. Our approach is done to make sure that the system would not crash under crunch situations. ", null, $defaultParagraphStyle);

    $methodologiesPage->addText("Under Stress Testing (also known as Endurance Testing) as per our approach, AUT is stressed for a short period to know its withstanding capacity. Our core focus is to determine the limit, to which the system or software, or hardware breaks. It is also meant to checks whether the system demonstrates effective error management under extreme conditions.", null, $defaultParagraphStyle);

    $methodologiesPage->addText('Focus during Stress Testing:', $boldText, $defaultParagraphStyle);
    $methodologiesPage->addListItem("To accommodate such abnormal traffic spikes", 0);
    $methodologiesPage->addListItem("To check whether the system works under abnormal conditions.", 0);
    $methodologiesPage->addListItem("Displaying appropriate error messages when the system is under stress.", 0);
    $methodologiesPage->addListItem("System failure under extreme conditions ", 0);
    $methodologiesPage->addListItem("It is better to be prepared for extreme conditions by executing Stress Testing.", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Goals of Stress Testing', $boldText, $defaultParagraphStyle);
    $methodologiesPage->addText("Our goal of stress testing is to analyse the behavior of the system after a failure. For stress testing to be successful, the tested system should display an appropriate error message while it is under extreme conditions.", null, $defaultParagraphStyle );

    $methodologiesPage->addText("To conduct Stress Testing, sometimes, massive data sets may be used which may get lost during Stress Testing. Our Testers look into a parameter that they do not lose security-related data while doing stress testing.", null, $defaultParagraphStyle);

    $methodologiesPage->addText("The main purpose of stress testing is to make sure how fast the system recovers after failure.", null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addImage(ASSETS_IMG_DIR . 'methodologies/stress-load-testing.jpg', 
        array(
            'width'         => 300,
            'marginTop'     => 2,
            'marginLeft'    => -100,
            'wrappingStyle' => 'inline',
            'alignment' => 'center',
            'wrapDistanceLeft' => 100
        )
    );

    $methodologiesPage->addTextBreak();

    $performanceTable = $methodologiesPage->addTable(
        array(
            'width' => 5000,
            'unit' => 'pct',
            'borderColor' => 'CE4E4E',
            'cellSpacing' => 0,
            'borderSize'=>1,
            'cellMargin' => 150
        )
    );
    
    $performanceTable->addRow();
    $performanceTable->addCell(null, $DarkRedCellStyle)->addText('Load Testing', array('color'=>'FFFFFF', "bold"=>true), array("alignment" => "center"));
    $performanceTable->addCell(null, $DarkRedCellStyle)->addText('Stress Testing', array('color'=>'FFFFFF', "bold"=>true), array("alignment" => "center"));

    $performanceTable->addRow();
    $performanceTable->addCell()->addText('Load Testing is to test the system behaviour under normal workload conditions, and it is just testing or simulating with the actual workload.');
    $performanceTable->addCell()->addText('Stress Testing is to test the system behaviour under extreme conditions and is carried out till the system failure.');

    $performanceTable->addRow();
    $performanceTable->addCell()->addText('Load Testing does not break the system.');
    $performanceTable->addCell()->addText('Stress Testing tries to break the system by testing with overwhelming data or resources.');

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Test Patterns', $boldText, $defaultParagraphStyle);
    $methodologiesPage->addText("Red Team Partners follows a different approach while performing a Stress test depending on the goal to be achieved, time, and effort. The client is interested to invest during the commencement of the project.", null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Distributed Stress Testing:", $boldText, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addImage(ASSETS_IMG_DIR . 'methodologies/stress-load-testing-02.png', 
        array(
            'width'         => 300,
            'marginTop'     => 2,
            'marginLeft'    => -100,
            'wrappingStyle' => 'inline',
            'alignment' => 'center',
            'wrapDistanceLeft' => 100
        )
    );

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("In distributed client-server systems, testing is done across all clients from the server. The role of the stress server is to distribute a set of stress tests to all stress clients and track the status of the client. After the client contacts the server, the server adds the name of the client and starts sending data for testing.", null, $defaultParagraphStyle);

    $methodologiesPage->addText(htmlspecialchars("Meanwhile, client machines send signal or heartbeat that it relates to the server. If the server does not receive any signals from the client machine, it needs to be investigated further for debugging. From the figure, a server can connect with the 2 clients (Client1 and Client2), but it cannot send or receive a signal from Client 3 & 4."), null, $defaultParagraphStyle);

    $methodologiesPage->addText("Night run is one of the options performed, to run these stress testing scenarios. Large server farms need a more efficient method for determining which computers have had stress failures that need to be investigated.", null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Application Stress Testing:", $boldText, $defaultParagraphStyle);
    $methodologiesPage->addText("During this testing, we concentrate on finding defects related to data locking and blocking, network issues, and performance bottlenecks in an application.", null, $defaultParagraphStyle);


    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Transactional Stress Testing:", $boldText, $defaultParagraphStyle);
    $methodologiesPage->addText(htmlspecialchars("It does stress testing on one or more transactions between two or more applications. It is used for fine-tuning & optimizing the system."), null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Systemic Stress Testing:", $boldText, $defaultParagraphStyle);
    $methodologiesPage->addText("This methodology is deployed for integrated stress testing which can be tested across multiple systems running on the same server. It is used to find defects where one application data blocks another application. ", null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Performance Modelling and Full-Scale Network Performance Testing", $boldText, $defaultParagraphStyle);
    $methodologiesPage->addText("Performance Modelling and performance testing on scaled environments are very useful and provide a very good analysis of potential performance issues.  However, network testing to actual volumes provides the highest level of risk mitigation when verifying the capacity and performance requirements of a system.
    The most reliable and risk-averse approach is to load tests to the most realistic concurrent volumes.", null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Exploratory Stress Testing: ", $boldText, $defaultParagraphStyle);
    $methodologiesPage->addText("This is one of the test scenarios which is used to test the system with unusual parameters or conditions that are unlikely to occur in a real scenario. It is used to find defects in unexpected scenarios like");
    
    $methodologiesPage->addListItem("A large number of users logged in at the same time.", 0);
    $methodologiesPage->addListItem("If a virus scanner started in all machines simultaneously", 0);
    $methodologiesPage->addListItem("If Database has gone offline when it is accessed from a website,", 0);
    $methodologiesPage->addListItem("When a large volume of data is inserted into the database simultaneously", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPageTwo = $phpWord->addSection();

    $methodologiesPage->addText("How we do Stress Testing?", $boldText, $defaultParagraphStyle);
    $methodologiesPage->addText("The Stress Testing process can be done in 5 major steps:", null, $defaultParagraphStyle);
    $methodologiesPage->addListItem("Planning the Stress Test. Here you gather the system data, analyze the system, define the stress test goals.", 0, null, $numberStyleList);
    $methodologiesPage->addListItem("Create Automation Scripts: In this phase, you create the Stress testing automation scripts, generate the test data for the stress scenarios.", 0, null, $numberStyleList);
    $methodologiesPage->addListItem("Script Execution: In this stage, you run the Stress testing automation scripts and store the stress results.", 0, null, $numberStyleList);
    $methodologiesPage->addListItem("Results Analysis: In this stage, you analyze the Stress Test results and identify bottlenecks.", 0, null, $numberStyleList);
    $methodologiesPage->addListItem("Tweaking and Optimization: In this stage, you fine-tune the system, change configurations, optimise the code to meet the desired benchmark.", 0, null, $numberStyleList);

    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText("Lastly, you again run the entire cycle to determine that the tweaks have produced the desired results. For example, it's not unusual to have 3 to 4 cycles of the Stress Testing process to achieve the performance goals.", null, $defaultParagraphStyle);


    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Load Testing Networks', $boldText, $defaultParagraphStyle);
    $methodologiesPage->addText("Where a system can support testing to actual volumes, we have a performance testing service to meet your requirements.", null, $defaultParagraphStyle);
    $methodologiesPage->addText("This service also offers a comprehensive security validation by testing your system while it is experiencing peak load and while some of that load is attacking traffic.", null, $defaultParagraphStyle);

    $methodologiesPage->addText("Tools we use during Stress Testing:", $boldText, $defaultParagraphStyle);

    $performanceOne = $methodologiesPage->addListItemRun();
    $performanceOne->addText("LoadRunner", $boldText);
    $performanceOne->addText(" - LoadRunner from HP is a widely used Load Testing tool. Load Test Results shaped by Loadrunner are considered as a benchmark.");

    $performanceTwo = $methodologiesPage->addListItemRun();
    $performanceTwo->addText("Jmeter", $boldText);
    $performanceTwo->addText(" - Jmeter is an Open-Source testing tool. It is a pure Java application for stress and Performance Testing. Jmeter is intended to cover types of tests like load, functional, stress, etc. It needs JDK 5 or higher to function.");

    $performanceThree = $methodologiesPage->addListItemRun();
    $performanceThree->addText("Stress Tester ", $boldText);
    $performanceThree->addText(" - This tool provides an extensive analysis of the web application performance, provides results in graphical format, and it is extremely easy to use. No high-level scripting is required, and it gives a good return on investment. ");

    $performanceFour = $methodologiesPage->addListItemRun();
    $performanceFour->addText("Neo load", $boldText);
    $performanceFour->addText(" - This is a popular tool available in the market to test web and mobile applications. This tool can simulate thousands of users to evaluate the application performance under load and analyse the response times. It also supports Cloud-integrated performance, load, and stress testing. It is easy to use, cost-effective and provides good scalability.");

    $methodologiesPage->addListItem("WAN Killer Network Traffic Generator", 0);
    $methodologiesPage->addListItem("Ostinato Packet Generator", 0);
    $methodologiesPage->addListItem("Packet Sender", 0);
    $methodologiesPage->addListItem("Nping from Nmap", 0);
    $methodologiesPage->addListItem("Cisco’s TRex", 0);
    $methodologiesPage->addListItem("Packet Generator from NetScanTools", 0);
    $methodologiesPage->addListItem("NTGM from PBSoftware", 0);

    




    $methodologiesPage->addPageBreak();

    