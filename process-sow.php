<?php
    use PhpOffice\PhpWord\PhpWord;
    use PhpOffice\PhpWord\Shared\Converter;

    include('inc/helper/helper.php');

    require_once __DIR__ . '/vendor/autoload.php';

    $dateHelper = new Helper();
    $dateFormat = 'd F Y';

    if ( isset($_POST) ) {
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

    }

    

    // Creating the new document...
    $phpWord = new \PhpOffice\PhpWord\PhpWord();
    // helper 
    $converter = new \PhpOffice\PhpWord\Shared\Converter();
    // force update to reflect correct page number in TOC.
    $phpWord->getSettings()->setUpdateFields(true);



        //############################### DOCUMENT SETTINGS AND DEFINING STYLES ###############################

 

    // GENERAL SETTINGS
    $phpWord->setDefaultFontName( 'Proxima Nova Rg' );
    $phpWord->setDefaultFontSize( 14 );
    $phpWord->setDefaultParagraphStyle( array(
       'lineHeight' => 1,
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
    $phpWord->addTitleStyle(null, array('size' => 24, 'bold' => true));
    $phpWord->addTitleStyle(1, array( 'name'=>'Proxima Nova Rg', 'size' => 16, 'color' => '000000', 'bold' => true ) );
    $phpWord->addTitleStyle(2, array( 'name' => 'Proxima Nova Rg', 'size' => 14, 'color' => 'DE5C5C', 'bold' => true ));
    $phpWord->addTitleStyle(3, array('size' => 14, 'italic' => true));
    // $phpWord->addTitleStyle(4, array('size' => 12));


    //adding the necessary paragraph styles
    $phpWord->addParagraphStyle('paragraph_default', array('spaceBefore' => 0, 'spaceAfter' => 0));
    

    // General Settings
    // $phpWord->setDefaultFontName('Times New Roman');
    // $phpWord->setDefaultFontSize(14);

    // template colors
    $paletteRed = 'D31439';
    $darkRed = 'CE4E4E';
    $lightRed = 'F5B7A6';


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
        'width' => 596, 
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

    include_once('inc/sow-services/sow-styles.php');

    //############################### COVER PAGE ###############################

    $coverPage = $phpWord->addSection();
    $coverPage->addText('Name of Service: ' . $typeOfService[0]);
    $coverPage->addText('Statement of Works for: ' . $clientCompanyName);
    $coverPage->addText('SOW Generated Date: ' . $generatedDate);

    $coverPage->addPageBreak();

    //############################### END COVER PAGE ###############################



    //############################### TOC PAGE ###############################
    $TOCPage = $phpWord->addSection();
    // $TOCPagePageHeader = $TOCPage->addHeader();
    // $TOCPagePageHeader->addImage( 'assets/images/sow-header-image.png', $headerWatermarkStyle);

    // Add text elements
    $TOCPage->addTitle('Table of Contents', 0);
    $TOCPage->addTextBreak();

    // Add TOC #1
    $toc = $TOCPage->addTOC($TOCFontStyle);
    
    $toc->setMinDepth( 1 );
    $toc->setMaxDepth( 2 );

    $TOCPage->addTextBreak();


    //############################### END TOC PAGE ###############################


    //############################### CLIENT DETAILS PAGE ###############################

    $clientDetailsPage = $phpWord->addSection();
    $clientDetailsPageHeader = $clientDetailsPage->addHeader();
   
    // $clientDetailsPageHeader->addImage( 'assets/images/sow-header-image.png', $headerImageStyle);
    $clientDetailsPageHeader->addWatermark( 'assets/images/sow-header-image.png', $headerWatermarkStyle );
    
    $clientDetailsPage->addTitle(htmlentities('CLIENT DETAILS & INFORMATION', 1)); // TOC Bookmark
    
    $clientDetailsPage->addLine($lineStyle);
    // $clientDetailsPage->addText('', [], );

    $clientDetailsPage->addText('Red Team Partners will begin the Test on '.$testStartDate.' for '.$clientCompanyName.'. For any changes to the project including dates, please ensure you provide us with at least 2 weeks’ notice to review and agree on any proposed changes.');

    $clientDetailsPage->addText('In this document you will find the details of the work, including dates, the consultant and their details if you wish to contact them during the engagement. The engagement will begin at 9:00 am on the day of testing unless otherwise agreed with you.');

    $clientDetailsPage->addText('If our consultant identifies any critical or high-risk issues during testing, they will let you know straight away to see if the issue can be remediated during the engagement.');

    $clientDetailsPage->addText('Your designated delivery manager will be your first point of contact for communicating change or updates. If you have any queries during the engagement, please do not hesitate to contact '.$managerName.', your Delivery Manager '.$managerEmail.'.');

    $clientDetailsPage->addTextBreak();
    
    $clientDetailsPage->addTitle( 'Client', 2); // TOC Bookmark 
    $companyNameTextRun = $clientDetailsPage->addTextRun( $aParagraphStyles );
    $companyNameTextRun->addText('Company Name:' );
    $companyNameTextRun->addText( htmlspecialchars("\t\t\t\t\t") . $clientCompanyName, array( 'bold'=> true ) );

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


    //############################### END CLIENT DETAILS PAGE ###############################    

    // include files

    // foreach($typeOfService as $service) {
    //     if ( $service === 'API Testing' ) {
    //         include('inc/sow-services/api-testing.php');
    //     }
    // }

    $service = $typeOfService[0];

    switch ($service) {
        case 'API Testing':
            include('inc/sow-services/api-testing.php');
            break;
        
        case 'Application Pen Test':
            include('inc/sow-services/app-pentest.php');
            break;
        
        case 'Build Review':
            include('inc/sow-services/build-review.php');
            break;
        
        case 'Cloud Assessment AWS':
            include('inc/sow-services/cloud-assessment-aws.php');
            break;
        
        case 'Cloud Based Config':
            include('inc/sow-services/cloud-based-config.php');
            break;        
        
        case 'Cyber Threat Intelligence':
            include('inc/sow-services/cyber-threat-intelligence.php');
            break;             

        case 'Document Review':
            include('inc/sow-services/document-review.php');
            break;    
            
        case 'Firewall':
            include('inc/sow-services/firewall.php');
            break;

        case 'Infrastructure Penetration':
            include('inc/sow-services/infrastructure-penetration.php');
            break;
        
        case 'Phishing Simulation':
            include('inc/sow-services/phishing-simulation.php');
            break;
        
        case 'Physical Assessment':
            include('inc/sow-services/physical-assessment.php');
            break;
        
        case 'Red Team Assessment':
            include('inc/sow-services/red-team-assessment.php');
            break;
        
        case 'Virtualisation Config':
            include('inc/sow-services/virtualisation-config.php');
            break;        
        
        case 'VPN Assessment':
            include('inc/sow-services/vpn-assessment.php');
            break;             

        case 'Vulnerability Scan':
            include('inc/sow-services/vulnerability-scan.php');
            break;    
            
        case 'Wireless Network Assessment':
            include('inc/sow-services/wireless-network-assessment.php');
            break;     
        
        default:
            # code...
            break;
    }

    //############################### PROJECT PRE-REQUISITES REQUIREMENTS PAGE ###############################    

    $projectPrereqPage = $phpWord->addSection();
    $projectPrereqPage->addTitle( 'PROJECT PRE-REQUISITES REQUIREMENTS', 1); // TOC Bookmark
    $projectPrereqPage->addLine($lineStyle);

    $projectPrereqPage->addText('Other project pre-requisites will be discussed on the Slack channel that will be opened before the test/s will be conducted.');
    // $projectPrereqPage->addText('(If API Test');


    if ($typeOfService[0] == 'API Testing') {
        $projectPrereqPage->addListItem('Application which is consuming the API');
        $projectPrereqPage->addListItem('Accounts created for each user role');
        $projectPrereqPage->addListItem('API documentation');
        $projectPrereqPage->addListItem('Exported API list such as SWAGGER file, YAML or WSDL');
    }

    //############################### END PROJECT PRE-REQUISITES REQUIREMENTS SCOPE PAGE ###############################   

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