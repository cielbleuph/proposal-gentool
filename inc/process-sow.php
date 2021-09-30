<?php
    if (!isset($_POST) || count($_POST) <= 0 || $_SERVER["REQUEST_METHOD"] != "POST" ) {
        exit('Restricted Access');
    }

    use PhpOffice\PhpWord\PhpWord;
    use PhpOffice\PhpWord\Shared\Converter;

    include "prepend.php";
    include HELPER_DIR . 'helper.php';

    require_once VENDOR_DIR . 'autoload.php';

    $dateHelper = new Helper();
    $dateFormat = 'd F Y';

    
    if ( isset($_POST) && count($_POST) != 0 && $_SERVER["REQUEST_METHOD"] === "POST" ) {

        if ( isset($_POST['service-type']) && $_POST['service-type'] != '' ){
            $typeOfService = $_POST['service-type'];
        }

        if ( isset($_POST['generated-date']) && $_POST['generated-date'] != '' ){
            $generatedDate = $dateHelper->convertDateToStringFormat( $_POST['generated-date'], $dateFormat );
        }

        if ( isset($_POST['test-start-date']) && $_POST['test-start-date'] != '' ){
            $testStartDate = $dateHelper->convertDateToStringFormat( $_POST['test-start-date'], $dateFormat );
        }

        if( isset($_POST['delivery-manager-name']) && $_POST['delivery-manager-name'] != '' ) {
            $managerName = $_POST['delivery-manager-name'];
        }

        if( isset($_POST['delivery-manager-email']) && $_POST['delivery-manager-email'] != '' ) {
            $managerEmail = $_POST['delivery-manager-email'];
        }
        
        if( isset($_POST['estimated-delivery-date']) && $_POST['estimated-delivery-date'] != '' ) {
            $estimatedDeliveryDate = $dateHelper->convertDateToStringFormat( $_POST['estimated-delivery-date'], $dateFormat );
        }

        if( isset($_POST['client-name']) && $_POST['client-name'] != '' ) {
            $clientName = $_POST['client-name'];
        }

        if( isset($_POST['client-company-name']) && $_POST['client-company-name'] != '' ) {
            $clientCompanyName = $_POST['client-company-name'];
        }

        if( isset($_POST['poc-name']) && $_POST['poc-name'] != '' ) {
            $POCName = $_POST['poc-name'];
        }

        if( isset($_POST['poc-mobile-number']) && $_POST['poc-mobile-number'] != '' ) {
            $POCMobileNumber = $_POST['poc-mobile-number'];
        }

        if( isset($_POST['poc-email-address']) && $_POST['poc-email-address'] != '' ) {
            $POCEmailAddress = $_POST['poc-email-address'];
        }

        if( isset($_POST['tester-name']) && $_POST['tester-name'] != '' ) {
            $testerName = $_POST['tester-name'];
        }

        if( isset($_POST['tester-email']) && $_POST['tester-email'] != '' ) {
            $testerEmail = $_POST['tester-email'];
        }

        if( isset($_POST['disclaimer']) && $_POST['disclaimer'] != '' ) {
            $disclaimer = $_POST['disclaimer'];
        }

        if( isset($_POST['prerequisite']) && $_POST['prerequisite'] != '' ) {
            $prerequisite = $_POST['prerequisite'];
        }

    }

    else{
        exit('Oh noes! There\'s an issue! We apologized for this. Do not worry, we already notified the bug catchers. Check back again later.');
    }

    // Creating the new document...
    $phpWord = new \PhpOffice\PhpWord\PhpWord();
    // helper 
    $converter = new \PhpOffice\PhpWord\Shared\Converter();
    // force update to reflect correct page number in TOC.
    $phpWord->getSettings()->setUpdateFields(true);
    // $phpWord->getSettings()->setOutputEscapingEnabled(true);

    //############################### DOCUMENT SETTINGS AND DEFINING STYLES ###############################

    // GENERAL SETTINGS
    $phpWord->setDefaultFontName( 'Proxima Nova Rg' );
    $phpWord->setDefaultFontSize( 14 );
    $phpWord->setDefaultParagraphStyle( array(
       'lineHeight' => 1,
       'align' => 'both'
    ) );

    $phpWord->addNumberingStyle(
        'hNum',
        array(
           'type'   => 'multilevel',
           'levels' => array(
                array('pStyle' => 'Heading1', 'format' => 'decimal', 'text' => '%1'),
                array('pStyle' => 'Heading2', 'format' => 'decimal', 'text' => '%1.%2'),
                array('pStyle' => 'Heading3', 'format' => 'decimal', 'text' => '%1.%2.%3'),
           )
        )
     );


    // adding the necessary font styles
    // Define styles
    $TOCFontStyle = array('spaceAfter' => 60, 'size' => 14);
    $phpWord->addTitleStyle(null, array('name'=>'Proxima Nova Bl', 'size' => 18, 'color' => 'C42543', 'bold' => true ) );
    $phpWord->addTitleStyle(1, array( 'name'=>'Proxima Nova Bl', 'size' => 18, 'color' => 'C42543', 'bold' => true ) );
    $phpWord->addTitleStyle(2, array( 'name' => 'Proxima Nova Rg', 'size' => 14, 'color' => 'C42543', 'bold' => true ) );
    $phpWord->addTitleStyle(3, array('size' => 14, 'italic' => true));
    // $phpWord->addTitleStyle(4, array('size' => 12));


    //adding the necessary paragraph styles
    $phpWord->addParagraphStyle('paragraph_default', array('spaceBefore' => 0, 'spaceAfter' => 0));
    

    // General Settings
    // $phpWord->setDefaultFontName('Times New Roman');
    // $phpWord->setDefaultFontSize(14);

    // template colors
    $paletteRed = 'D31439';
    $darkRed = 'C42543';
    $lightRed = 'F5CBD3';


    $defaultTableStyle = array(
        'unit'=>'pct', 
        'width' => 5000,
        'alignment' => 'center',
        'borderSize'=>0
    );
    
    $defaultFontStyle = array(
        // 'size' => 14,
    );

    $defaultParagraphStyle = array(
        'align'=>'both',
    );

    $defaultParagraphListStyle = array(
        'align'=>'both',
        'line-height'=>1
    );

    $headerImageStyle = array(
        'width'         => 109,
        'height'        => 26,
        'marginTop'     => -2,
        'marginRight'    => -1,
        'wrappingStyle' => 'behind',
        'alignment' => 'right',
    );

    $headerWatermarkStyle = array(
        'width' => 612, 
        'marginTop' => -36,
        'marginLeft' => -73,
        'posHorizontal' => 'absolute',
        'posVertical' => 'absolute',
    );

    $paragraphHeadingStyle = array(
        'bold' => true,
        'size' => 16
    );

    $paragraphHeadingPStyle = array(
        'lineHeight' => 1.5
    );

    $footerTextStyle = array(
        'size' => 9,
    );

    $quoteFontStyle = array(
        'name'=>'Times New Roman',
        'italic'=> true,
        'color'=> '696969',
        'size'=>12
    );

    $quoteParagraphStyle = array(
        'name'=>'Times New Roman',
        'alignment'=>'right',
        'size'=>12
    );

    $servicesFontStyle = array(
        'color'=>'D4173D',
        'italic'=>true,
    );

    $servicesParagraphStyle = array(
        'alignment'=>'center'
    );

    $phpWord->addNumberingStyle(
        'multilevel',
        array(
            'type' => 'multilevel',
            'levels' => array(
                array('format' => 'decimal', 'text' => '%1.', 'left' => 720, 'hanging' => 360, 'tabPos' => 720),
                array('format' => 'upperLetter', 'text' => '%2.', 'left' => 1080, 'hanging' => 360, 'tabPos' => 1080),
            )
        )
    );

    $coverCreatedCellStyle = array('bgColor'=>'494849');
    $lineStyle = array('weight' => 1, 'width' => 445, 'height' => 0, 'color' => '38c172');

    $paper = new \PhpOffice\PhpWord\Style\Paper();
    $paper->setSize('Letter');

    include_once(INC_DIR . 'sow-services/sow-styles.php');

    //############################### COVER PAGE ###############################

    $coverPage = $phpWord->addSection(array(
        'pageSizeW' => $paper->getWidth(),
        'pageSizeH' => $paper->getHeight(),
        'marginLeft' => $converter->inchToTwip(.7),
        'marginRight' => $converter->inchToTwip(.3)
    ));


    $coverPage->addImage(ASSETS_IMG_DIR . '/sow-cover-image.jpg', 
        array(
            // 'width' => \PhpOffice\PhpWord\Shared\Drawing::centimetersToPixels(3),
            // 'height' => \PhpOffice\PhpWord\Shared\Drawing::centimetersToPixels(3),
            'width' => 612,
            'positioning' => \PhpOffice\PhpWord\Style\Image::POSITION_ABSOLUTE,
            'posHorizontal' => \PhpOffice\PhpWord\Style\Image::POSITION_HORIZONTAL_LEFT,
            'posHorizontalRel' => \PhpOffice\PhpWord\Style\Image::POSITION_RELATIVE_TO_PAGE,
            'posVerticalRel' => \PhpOffice\PhpWord\Style\Image::POSITION_RELATIVE_TO_PAGE,
            'marginLeft' => \PhpOffice\PhpWord\Shared\Drawing::centimetersToPixels(15.5),
            'marginTop' => \PhpOffice\PhpWord\Shared\Drawing::centimetersToPixels(1.55),
            'wrappingStyle' => 'behind'
        )
    );

    $coverPage->addTextBreak(4);
    $coverPage->addText(htmlspecialchars($typeOfService[0]), array('color'=>'FFFFFF', 'name'=>'Proxima Nova Rg', 'size'=>30, 'bold'=> true), array('alignment'=>'start'));
    $coverPage->addTextBreak(2);
    $coverPageSOWTextRun = $coverPage->addTextRun(array('alignment'=>'start'));
    $coverPageSOWTextRun->addText(htmlspecialchars("\t\t\t\t\t\t\t\t\t STATEMENT OF WORKS"), array('size'=>16, 'bold'=>true));
    $coverPageSOWTextRun->addTextBreak();
    $coverPageSOWTextRun->addText( htmlspecialchars("\t\t\t\t\t\t\t\t\t for"), array('size'=>16) );
    $coverPageSOWTextRun->addTextBreak();
    $coverPageSOWTextRun->addText( htmlspecialchars("\t\t\t\t\t\t\t\t\t " . $clientCompanyName ), array('size'=>16, 'bold'=>true,'color' => 'C42543') );
    // $coverPage->addText('SOW Generated Date: ' . $generatedDate);

    $coverPage->addTextBreak(2);

    $coverPageDateTextRun = $coverPage->addTextRun( array('alignment' => 'start') );
    $coverPageDateTextRun->addText(htmlspecialchars("\t\t\t\t\t\t\t\t\t DATE:"), array('size' => 16, 'color' => 'C42543'));
    $coverPageDateTextRun->addTextBreak();
    $coverPageDateTextRun->addText(htmlspecialchars( "\t\t\t\t\t\t\t\t\t " . $generatedDate ), array('size'=>16));

    $coverPage->addTextBreak(5);

    $coverPage->addText('Red Team Partners Ltd.', array('size'=>11, 'bold'=>true));
    $coverPage->addText('One Canada Square, Canary Wharf, London, E14 5AB', array('size'=>11), $aParagraphStyles);
    $coverPage->addText('+44 (0) 20 3951 0299', array('size'=>11), $aParagraphStyles);
    $coverPage->addText('www.redteampartners.co.uk', array('size'=>11), $aParagraphStyles);
    $coverPage->addTextBreak();
    $coverPage->addText('We work with qualified testers.', array('size'=>11, 'bold'=>true));

    // $textbox = $coverPage->addTextBox(
    //     array(
    //         'align'   => 'left',
    //         'width'       => 200,
    //         'height'      => 40,
    //         'borderColor' => 'none',
    //         'borderSize'  => 0,
    //         'positioning' => 'absolute',
    //         'marginLeft' => 500,
    //         'marginTop' => 200,
    //     )
    // );
    // $textbox->addText($typeOfService[0], array('name'=>'Aileron Black'), array('alignment' => 'end'));


    //############################### END COVER PAGE ###############################



    //############################### TOC PAGE ###############################
    $TOCPage = $phpWord->addSection(array(
        'pageSizeW' => $paper->getWidth(),
        'pageSizeH' => $paper->getHeight(),
    ));

    // $TOCPagePageHeader = $TOCPage->addHeader();
    // $TOCPagePageHeader->addImage( 'assets/images/sow-header-image.png', $headerWatermarkStyle);

    $TOCPageHeader = $TOCPage->addHeader();
   
    // $clientDetailsPageHeader->addImage( 'assets/images/sow-header-image.png', $headerImageStyle);
    $TOCPageHeader->addWatermark( ASSETS_IMG_DIR . 'sow-header-image.png', $headerWatermarkStyle );

    // Add text elements
    $TOCPage->addTitle('TABLE OF CONTENTS', 0);
    $TOCPage->addLine($lineStyle);
    $TOCPage->addTextBreak();

    // Add TOC #1
    $toc = $TOCPage->addTOC($TOCFontStyle);
    
    $toc->setMinDepth( 1 );
    $toc->setMaxDepth( 2 );

    $TOCPage->addTextBreak();

    //############################### END TOC PAGE ###############################

    //############################### CLIENT DETAILS PAGE ###############################

    $clientDetailsPage = $phpWord->addSection(array(
        'pageSizeW' => $paper->getWidth(),
        'pageSizeH' => $paper->getHeight(),
    ));

    $clientDetailsPageHeader = $clientDetailsPage->addHeader();
   
    // $clientDetailsPageHeader->addImage( 'assets/images/sow-header-image.png', $headerImageStyle);
    $clientDetailsPageHeader->addWatermark( ASSETS_IMG_DIR . 'sow-header-image.png', $headerWatermarkStyle );
    
    $clientDetailsPage->addTitle(htmlentities('CLIENT DETAILS & INFORMATION', 1)); // TOC Bookmark
    
    $clientDetailsPage->addLine($lineStyle);
    // $clientDetailsPage->addText('', [], );

    $clientDetailsPage->addText( htmlspecialchars("Red Team Partners will begin the Test on ".$testStartDate." for ".htmlentities( $clientCompanyName ).". For any changes to the project including dates, please ensure you provide us with at least 2 weeks’ notice to review and agree on any proposed changes."));

    $clientDetailsPage->addText('In this document you will find the details of the work, including dates, the consultant and their details if you wish to contact them during the engagement. The engagement will begin at 9:00 am on the day of testing unless otherwise agreed with you.');

    $clientDetailsPage->addText('If our consultant identifies any critical or high-risk issues during testing, they will let you know straight away to see if the issue can be remediated during the engagement.');

    $clientDetailsPage->addText('Your designated delivery manager will be your first point of contact for communicating change or updates. If you have any queries during the engagement, please do not hesitate to contact '.$managerName.', your Delivery Manager '.$managerEmail.'.');

    $clientDetailsPage->addTextBreak();
    
    $clientDetailsPage->addTitle( 'CLIENT', 2); // TOC Bookmark 
    $companyNameTextRun = $clientDetailsPage->addTextRun( $aParagraphStyles );
    $companyNameTextRun->addText('Company Name:' );
    $companyNameTextRun->addText( htmlspecialchars("\t\t\t\t\t") . htmlspecialchars($clientCompanyName), array( 'bold'=> true ) );

    $technicalPOCNameTextRun = $clientDetailsPage->addTextRun( $aParagraphStyles );
    $technicalPOCNameTextRun->addText('Technical POC Name:' );
    $technicalPOCNameTextRun->addText( htmlspecialchars("\t\t\t\t") . $POCName, array( 'bold'=>true ) );

    $technicalPOCNumberTextRun = $clientDetailsPage->addTextRun( $aParagraphStyles );
    $technicalPOCNumberTextRun->addText('Technical POC Number:' );
    $technicalPOCNumberTextRun->addText( htmlspecialchars("\t\t\t") . $POCMobileNumber, array( 'bold'=>true ) );

    $technicalPOCEmailTextRun = $clientDetailsPage->addTextRun( $aParagraphStyles );
    $technicalPOCEmailTextRun->addText('Technical POC Email:' );
    $technicalPOCEmailTextRun->addText( htmlspecialchars("\t\t\t\t") . $POCEmailAddress, array( 'bold'=>true ) );

    $clientDetailsPage->addTextBreak();

    $clientDetailsPage->addTitle('TESTER', 2);

    $nameOfTesterTextRun = $clientDetailsPage->addTextRun( $aParagraphStyles );
    $nameOfTesterTextRun->addText('Name of Tester:');
    $nameOfTesterTextRun->addText( htmlspecialchars("\t\t\t\t\t") . $testerName, array( 'bold'=>true ));

    $emailOfTesterTextRun = $clientDetailsPage->addTextRun( $aParagraphStyles );
    $emailOfTesterTextRun->addText('Email of Tester:');
    $emailOfTesterTextRun->addText( htmlspecialchars("\t\t\t\t\t") . $testerEmail, array( 'bold'=>true ));

    $clientDetailsPage->addTextBreak();

    $clientDetailsPage->addTitle( 'OTHER INFORMATION', 2);
    $reportDeliveryTextRun = $clientDetailsPage->addTextRun( $aParagraphStyles );
    $reportDeliveryTextRun->addText('Report Delivery Estimated Date:');
    $reportDeliveryTextRun->addText( htmlspecialchars("\t\t") . $estimatedDeliveryDate, array( 'bold'=>true ));

    $clientDetailsPageFooter = $clientDetailsPage->addFooter();
    
    // $clientDetailsPageFooter->addTextRun()->addText($footerText, $footerTextStyle);
    $clientDetailsPageFooter->addPreserveText('{PAGE}', null, array('alignment' => 'right'));

    //############################### END CLIENT DETAILS PAGE ###############################    




    //############################### PROJECT SCOPE PAGE ###############################    

    $projectScopePage = $phpWord->addSection(array(
        'pageSizeW' => $paper->getWidth(),
        'pageSizeH' => $paper->getHeight(),
    ));

    $projectScopePage->addTitle( 'PROJECT SCOPE', 1); // TOC Bookmark
    $projectScopePage->addLine($lineStyle);   

    $projectScopePage->addText( '*** SCOPE of Project Selected ***' ); // TOC Bookmark 

    $projectScopePage->addPageBreak();

    //############################### END PROJECT SCOPE PAGE ###############################  



    //############################### PROJECT DESCRIPTION PAGE ###############################    

    $projectDescriptionPage = $phpWord->addSection(array(
        'pageSizeW' => $paper->getWidth(),
        'pageSizeH' => $paper->getHeight(),
    ));

    // $service = $typeOfService[0];

    foreach($typeOfService as $service) {

        $projectDescriptionPage->addTitle( 'PROJECT DESCRIPTION FOR ' . strtoupper($service), 1); // TOC Bookmark 
        $projectDescriptionPage->addLine($lineStyle);

        if ($service === 'API Penetration Test') {
            include(INC_SOW . 'api-penetration-test.php');
        }

        if ($service === 'Build Review Assessment') {
            include(INC_SOW . 'build-review.php');
        }

        if ($service === 'Cloud Assessment/Review (AWS)') {
            include(INC_SOW . 'cloud-assessment-aws.php');
        }

        if ($service === 'Cloud Assessment/Review (Azure)') {
            include(INC_SOW . 'cloud-assessment-azure.php');
        }

        if ($service === 'Cyber Essentials Basic') {
            include(INC_SOW . 'cyber-essentials-basic.php');
        }

        if ($service === 'Cyber Essentials Plus') {
            include(INC_SOW . 'cyber-essentials-plus.php');
        }

        if ($service === 'Cyber Forensics and Investigations') {
            include(INC_SOW . 'cyber-forensics-investigations.php');
        }

        if ($service === 'Dark Web Cyber Threat Intelligence') {
            include(INC_SOW . 'dark-web-cyber-threat-intelligence.php');
        }

        if ($service === 'Documentation/Architecture Review') {
            include(INC_SOW . 'documentation-architecture-review.php');
        }

        if ($service === 'Firewall Configuration Assessment') {
            include(INC_SOW . 'firewall-configuration-assessment.php');
        }

        if ($service === 'Fraud Investigation') {
            include(INC_SOW . 'fraud-investigation.php');
        }

        if ($service === 'Incident Response and Investigation') {
            include(INC_SOW . 'incident-response-investigation.php');
        }

        if ($service === 'Infrastructure Penetration Test') {
            include(INC_SOW . 'infrastructure-penetration-test.php');
        }

        if ($service === 'IoT Penetration Test') {
            include(INC_SOW . 'iot-penetration-test.php');
        }

        if ($service === 'Mobile Application Penetration Test') {
            include(INC_SOW . 'mobile-application-penetration-test.php');
        }

        if ($service === 'O365 Penetration Test') {
            include(INC_SOW . 'O365-penetration-test.php');
        }

        if ($service === 'OWASP for Developers') {
            include(INC_SOW . 'owasp-developers.php');
        }

        if ($service === 'Performance Stress/Load Test') {
            include(INC_SOW . 'performance-stress-load-test.php');
        }

        if ($service === 'Phishing Simulation') {
            include(INC_SOW . 'phishing-simulation.php');
        }

        if ($service === 'Physical Assessment') {
            include(INC_SOW . 'physical-assessment.php');
        }

        if ($service === 'Red Team Assessment') {
            include(INC_SOW . 'red-team-assessment.php');
        }

        if ($service === 'Secure Code Review') {
            include(INC_SOW . 'secure-code-review.php');
        }

        if ($service === 'VPN Assessment') {
            include(INC_SOW . 'vpn-assessment.php');
        }

        if ($service === 'Virtualisation Configuration Review') {
            include(INC_SOW . 'virtualisation-configuration-review.php');
        }

        if ($service === 'Vulnerability Assessment') {
            include(INC_SOW . 'vulnerability-assessment.php');
        }

        if ($service === 'Web Application Penetration Test') {
            include(INC_SOW . 'web-application-penetration-test.php');
        }

        if ($service === 'Wireless Network Assessment') {
            include(INC_SOW . 'wireless-network-assessment.php');
        }

    }

    
    //############################### END PROJECT DESCRIPTION PAGE ###############################

    //############################### PROJECT PRE-REQUISITES REQUIREMENTS PAGE ###############################    

    $projectPrereqPage = $phpWord->addSection(array(
        'pageSizeW' => $paper->getWidth(),
        'pageSizeH' => $paper->getHeight()
    ));

    $projectPrereqPage->addTitle( 'PROJECT PRE-REQUISITES REQUIREMENTS', 1 ); // TOC Bookmark
    $projectPrereqPage->addLine($lineStyle);

    include( INC_SOW . 'prerequisites.php' );

    $projectPrereqPage->addTextBreak();

    $projectPrereqPage->addText( 'Other project pre-requisites will be discussed on the Slack channel that will be opened before the test/s will be conducted.' );

    //############################### END PROJECT PRE-REQUISITES REQUIREMENTS SCOPE PAGE ###############################   


    
    //############################### PROJECT DISCLAIMER PAGE ###############################    


    $disclaimerTypeOne = array(
        "API Penetration Test", 
        "Mobile Application Penetration Test",
        "Web Application Penetration Test"
    );

    $disclaimerTypeTwo = array(
        "Infrastructure Penetration Test",
        "O365 Penetration Test",
        "Red Team Assessment",
        "VPN Assessment",
        "Vulnerability Assessment"
    );

   
    if( in_array( $typeOfService[0],  $disclaimerTypeOne ) !== false ) {

        $projectDisclaimerPage = $phpWord->addSection(array(
            'pageSizeW' => $paper->getWidth(),
            'pageSizeH' => $paper->getHeight()
        ));

        $projectDisclaimerPage->addTitle( 'PROJECT PENTEST DISCLAIMER', 1); // TOC Bookmark
        $projectDisclaimerPage->addLine($lineStyle);

        $projectDisclaimerPage->addText( htmlspecialchars("Any security testing which is conducted on the production environment needs to consider this disclaimer. ") );

        $projectDisclaimerPage->addText( htmlspecialchars("Red Team Partners security team will utilize a large proportion of manual testing and part of the pen test will be conducted with the help of automated tools. The tools that are in addition to the manual verification scenarios will be included in the final report.") );

        $projectDisclaimerPage->addText( htmlspecialchars("Having a large manual coverage, will allow the security team to carefully handle the tests, only proceeding with safe-checks.") );

        $projectDisclaimerPage->addTextBreak();

        $projectDisclaimerPage->addText( htmlspecialchars("During the assessment, the team will only conduct tests that will be under the Pen tester’s control.") );

        $projectDisclaimerPage->addText( htmlspecialchars("The penetration testing approach will be as follow: ") );
        $projectDisclaimerPage->addListItem( htmlspecialchars("Manual investigation of application code"), 0 );
        $projectDisclaimerPage->addListItem( htmlspecialchars("Passive interception of application requests"), 0 );
        $projectDisclaimerPage->addListItem( htmlspecialchars("Testing parameters, only with safe checks based on business logic and OWASP Top 10. "), 0 );
        $projectDisclaimerPage->addListItem( htmlspecialchars("Test of business logic flows such as register/forgot password, login, etc. (as a normal user)"), 0 );

        $projectDisclaimerPage->addTextBreak();

        $projectDisclaimerPage->addText( htmlspecialchars("During the security testing, if there will be certain functionalities that are uncertain in terms of the testing, the pen tester will notify the owner of the application and ask for approval, without conducting the specific tests."));

        $projectDisclaimerPage->addTextBreak();

        $projectDisclaimerPage->addText( htmlspecialchars("Backup your data:"), array_merge( $boldText, $italicText ));
        $projectDisclaimerPage->addText( htmlspecialchars("It is always a good practice for the client’s IT team to make a backup of all configurations, data, and codes before the test begins. Having a back-up will ensure that data can be restored to pre-test configurations in the event that the test may cause a system to crash or data to be lost. The Security Team recommends that the client’s internal IT or support team be readily available to resolve technical issues with the testing company during the testing phase.") );


        $projectDisclaimerPage->addTextBreak();
        $projectDisclaimerPage->addText( htmlspecialchars("Disclaimer:"), array_merge( $boldText, $italicText ));

        $projectDisclaimerPage->addText( htmlspecialchars("Even though the security team will do all the security testing only with safe checks, it might be possible that a certain command that can be considered usually as a “safe-check” the back-end can interpret it in a way that can affect the whole application, through Denial of Service, data deletion or integrity loss or bad existing user experience.") );

        $projectDisclaimerPage->addText( htmlspecialchars("Another risk that should be taken into consideration is that having the testing done on production and only with certain specific tests (not going in-depth) at the pen tester’s disposal, the security team might not identify all of the vulnerabilities within the application.") );
        
    }

    else if( in_array( $typeOfService[0],  $disclaimerTypeTwo ) !== false ) {

        $projectDisclaimerPage = $phpWord->addSection(array(
            'pageSizeW' => $paper->getWidth(),
            'pageSizeH' => $paper->getHeight()
        ));

        $projectDisclaimerPage->addTitle( 'PROJECT PENTEST DISCLAIMER', 1); // TOC Bookmark
        $projectDisclaimerPage->addLine($lineStyle);

        $projectDisclaimerPage->addText( htmlspecialchars("Any security testing which is conducted on the production environment needs to consider this disclaimer.") );

        $projectDisclaimerPage->addText( htmlspecialchars("Red Team Partners security team will utilize a large proportion of manual testing and part of the pen test will be conducted with the help of automated tools. The tools that are in addition to the manual verification scenarios will be included in the final report.") );

        $projectDisclaimerPage->addTextBreak();

        $projectDisclaimerPage->addText( htmlspecialchars("Disclaimer:"), array_merge( $boldText, $italicText ));

        $projectDisclaimerPage->addText( htmlspecialchars("Even though the security team will do all the security testing only with safe checks, it might be possible that a certain command that can be considered usually as a “safe-check” the back-end can interpret it in a way that can affect the whole application/infrastructure, through Denial of Service, data deletion or integrity loss or bad existing user experience.") );

        $projectDisclaimerPage->addText( htmlspecialchars("During the security testing, if there will be certain functionalities that are uncertain in terms of the testing, the pen tester will notify the owner of the application and ask for approval, without conducting the specific tests.") );

        $projectDisclaimerPage->addTextBreak();

        $projectDisclaimerPage->addText( htmlspecialchars("Backup your data:"), array_merge( $boldText, $italicText ));
        $projectDisclaimerPage->addText( htmlspecialchars("It is always a good practice for the client’s IT team to make a backup of all configurations, data, and codes before the test begins. Having a back-up will ensure that data can be restored to pre-test configurations in the event that the test may cause a system to crash or data to be lost. The Security Team recommends that the client’s internal IT or support team be readily available to resolve technical issues with the testing company during the testing phase.") );
    }


    //############################### END PROJECT DISCLAIMER PAGE ###############################   




    // // Saving the document as OOXML file...
    // $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
    // $objWriter->save('helloWorld.docx');

    // echo 'Generating Word File... Please wait.';

    // if you want to download the file instead.
    $file = 'temp.docx';
    header("Content-Description: File Transfer");
    header('Content-Disposition: attachment; filename="' . $file . '"');
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    header('Content-Transfer-Encoding: binary');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Expires: 0');
    ob_clean();
    $xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
    $xmlWriter->save("php://output");