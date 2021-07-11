<?php

    // if (!isset($_POST) || count($_POST) <= 0 || $_SERVER["REQUEST_METHOD"] != "POST" ) {
    //     exit('Restricted Access');
    // }

    use PhpOffice\PhpWord\PhpWord;
    use PhpOffice\PhpWord\Shared\Converter;

    include dirname(dirname(__FILE__) ) . "\prepend.php";
    include HELPER_DIR . 'helper.php';

    require_once VENDOR_DIR . 'autoload.php';

    $dateHelper = new Helper();
    $dateFormat = 'F j, Y';

    
    if ( isset($_POST) && count($_POST) != 0 && $_SERVER["REQUEST_METHOD"] === "POST" ) {
        

        if ( isset( $_POST['company-name'] ) && $_POST['company-name'] != "" ) {
            $companyName = $_POST["company-name"];
        }

        if ( isset( $_POST['service-name'] ) && $_POST['service-name'] != "" ) {
            $serviceName = $_POST["service-name"];
        }

        if ( isset( $_POST['version'] ) && $_POST['version'] != "" ) {
            $version = $_POST["version"];
        }

        if ( isset( $_POST['date-generated'] ) && $_POST['date-generated'] != "" ) {
            $dateGenerated = $dateHelper->convertDateToStringFormat($_POST["date-generated"], $dateFormat);
        }

        if ( isset( $_POST['test-duration-from'] ) && $_POST['test-duration-from'] != "" 
          && isset( $_POST['test-duration-to'] ) && $_POST['test-duration-to'] != ""  ) {
            $testDurationFrom = $_POST["test-duration-from"];
            $testDurationTo = $_POST["test-duration-to"];
            $testDuration = $dateHelper->convertDateToStringFormat( $testDurationFrom, $dateFormat ) . " - " . $dateHelper->convertDateToStringFormat( $testDurationTo, $dateFormat );
        }
        
        if ( isset( $_POST['overall-security'] ) && $_POST['overall-security'] != "" ) {
            $overallSecurity = $_POST["overall-security"];
        }

        if ( isset( $_POST['overall-security'] ) && $_POST['overall-security'] != "" ) {
            $overallSecurity = $_POST["overall-security"];
        }

        if ( isset( $_POST['keyfindings-hidden'] ) && $_POST['keyfindings-hidden'] != "" ) {
            $keyFindings = $_POST["keyfindings-hidden"];
        }
        
        if ( isset( $_POST['shortterm-hidden'] ) && $_POST['shortterm-hidden'] != "" ) {
            $shortTermGoals = $_POST["shortterm-hidden"];
        }

        if ( isset( $_POST['mediumterm-hidden'] ) && $_POST['mediumterm-hidden'] != "" ) {
            $mediumTermGoals = $_POST["mediumterm-hidden"];
        }

        if ( isset( $_POST['critical'] ) && $_POST['critical'] != "" ) {
            $critical = $_POST["critical"];
        }

        if ( isset( $_POST['high'] ) && $_POST['high'] != "" ) {
            $high = $_POST["high"];
        }
        
        if ( isset( $_POST['medium'] ) && $_POST['medium'] != "" ) {
            $medium = $_POST["medium"];
        }

        if ( isset( $_POST['low'] ) && $_POST['low'] != "" ) {
            $low = $_POST["low"];
        }

        if ( isset( $_POST['informational'] ) && $_POST['informational'] != "" ) {
            $informational = $_POST["informational"];
        }

        if ( isset( $_POST['total-findings'] ) && $_POST['total-findings'] != "" ) {
            $totalFindings = $_POST["total-findings"];
        }
    }
    else{
        exit('Oh noes! There\'s an issue! We apologized for this. Do not worry, we already notified the bug catchers. Check back again later.');
    }

    // FIRST DOCUMENT - SUMMARY OVERVIEW

    // Creating the new document...
    $phpWord = new \PhpOffice\PhpWord\PhpWord();
    // helper 
    $converter = new \PhpOffice\PhpWord\Shared\Converter();
    // force update to reflect correct page number in TOC.
    $phpWord->getSettings()->setUpdateFields(true);
    // $phpWord->getSettings()->setOutputEscapingEnabled(true);
    
    //############################### DOCUMENT SETTINGS AND DEFINING STYLES ###############################

    include_once(INC_DIR . 'gen-styles.php');

    // GENERAL SETTINGS
    $phpWord->setDefaultFontName( "Proxima Nova Rg" );
    $phpWord->setDefaultFontSize( 14 );
    $phpWord->setDefaultParagraphStyle( array(
       'lineHeight' => 1,
       'align' => 'both'
    ) );


    $TOCFontStyle = array('spaceAfter' => 10, 'size' => 20, 'name'=>'Arial');
    $phpWord->addTitleStyle(null, array('name' => 'Times New Roman', 'size' => 18, 'color' => 'C42543', 'bold' => true ) );
    $phpWord->addTitleStyle(1, array( 'name' => 'Proxima Nova Rg', 'size' => 28, 'color' => 'C42543', 'bold' => true ) );
    $phpWord->addTitleStyle(2, array( 'name' => 'Arial', 'size' => 20, 'color' => 'C42543', 'bold' => true ) );
    $phpWord->addTitleStyle(3, array('size' => 16, 'italic' => true));
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
    $paper->setSize('A4');

    


    ############################### COVER PAGE ###############################
    
    $coverPage = $phpWord->addSection(array(
        'pageSizeW' => $paper->getWidth(),
        'pageSizeH' => $paper->getHeight(),
        'marginLeft' => $converter->inchToTwip(.7),
        'marginRight' => $converter->inchToTwip(.3)
    ));

    $coverPage->addImage(ASSETS_IMG_DIR . '/reports/reports-cover.png', 
        array(
            // 'width' => \PhpOffice\PhpWord\Shared\Drawing::centimetersToPixels(3),
            // 'height' => \PhpOffice\PhpWord\Shared\Drawing::centimetersToPixels(3),
            'width' => 596,
            'positioning' => \PhpOffice\PhpWord\Style\Image::POSITION_ABSOLUTE,
            'posHorizontal' => \PhpOffice\PhpWord\Style\Image::POSITION_HORIZONTAL_LEFT,
            'posHorizontalRel' => \PhpOffice\PhpWord\Style\Image::POSITION_RELATIVE_TO_PAGE,
            'posVerticalRel' => \PhpOffice\PhpWord\Style\Image::POSITION_RELATIVE_TO_PAGE,
            'marginLeft' => \PhpOffice\PhpWord\Shared\Drawing::centimetersToPixels(15.5),
            'marginTop' => \PhpOffice\PhpWord\Shared\Drawing::centimetersToPixels(1.55),
            'wrappingStyle' => 'behind'
        )
    );
    
    $coverPage->addTextBreak(20);
    $coverPage->addText( htmlspecialchars( $companyName ), array('color'=>$darkRed, 'name'=> $proximaNovaBl, 'size'=>48, 'bold'=> true), array('alignment'=>'start'));
    $coverPage->addText( htmlspecialchars( $serviceName ), array('color'=>'000000', 'name'=> $proximaNovaAltLT, 'size'=>20, 'bold'=> true), array( 'alignment' =>'start' ) );
    $coverPage->addText( htmlspecialchars( $dateGenerated ), array('color'=>'333333', 'name'=> $proximaNovaAltLT, 'size'=>14, 'bold'=> true), array( 'alignment' =>'start' ) );
    $coverPage->addText( htmlspecialchars( "Version " . $version ), array('color'=>'333333', 'name'=> $proximaNovaAltLT, 'size'=>14, 'bold'=> true), array( 'alignment' =>'start' ) );

    ############################### END COVER PAGE ###############################


    ############################### TOC PAGE ###############################
  
    $TOCPage = $phpWord->addSection(array(
        'pageSizeW' => $paper->getWidth(),
        'pageSizeH' => $paper->getHeight(),
        'marginLeft' => $converter->inchToTwip(.6),
        'marginRight' => $converter->inchToTwip(3.5)
    ));

    $TOCPage->addImage(ASSETS_IMG_DIR . '/reports/reports-toc.png', 
        array(
            // 'width' => \PhpOffice\PhpWord\Shared\Drawing::centimetersToPixels(3),
            // 'height' => \PhpOffice\PhpWord\Shared\Drawing::centimetersToPixels(3),
            'width' => 596,
            'positioning' => \PhpOffice\PhpWord\Style\Image::POSITION_ABSOLUTE,
            'posHorizontal' => \PhpOffice\PhpWord\Style\Image::POSITION_HORIZONTAL_LEFT,
            'posHorizontalRel' => \PhpOffice\PhpWord\Style\Image::POSITION_RELATIVE_TO_PAGE,
            'posVerticalRel' => \PhpOffice\PhpWord\Style\Image::POSITION_RELATIVE_TO_PAGE,
            'marginLeft' => \PhpOffice\PhpWord\Shared\Drawing::centimetersToPixels(15.5),
            'marginTop' => \PhpOffice\PhpWord\Shared\Drawing::centimetersToPixels(1.55),
            'wrappingStyle' => 'behind'
        )
    );

    $TOCPage->addTextBreak();
    // Add text elements
    $TOCPage->addTitle('', 0);
    
    $TOCPage->addTextBreak();

    // Add text elements
    $TOCPage->addTitle('', 0);

    // Add TOC
    $toc = $TOCPage->addTOC($TOCFontStyle);

    $TOCPage->addTextBreak();

    ############################### END TOC PAGE ###############################


    ############################### INTRODUCTION PAGE ###############################

    $introPage = $phpWord->addSection(array(
        'pageSizeW' => $paper->getWidth(),
        'pageSizeH' => $paper->getHeight(),
    ));

    // $TOCPagePageHeader = $TOCPage->addHeader();
    // $TOCPagePageHeader->addImage( 'assets/images/sow-header-image.png', $headerWatermarkStyle);

    $introPageHeader = $introPage->addHeader();
   
    // $clientDetailsPageHeader->addImage( 'assets/images/sow-header-image.png', $headerImageStyle);
    $introPageHeader->addWatermark( ASSETS_IMG_DIR . 'sow-header-image.png', $headerWatermarkStyle );


    $introPage->addTitle(htmlentities('Introduction', 1)); // TOC Bookmark
    
    // $introPage->addLine($lineStyle);

    $introPage->addTextBreak();

    $introPage->addText( htmlspecialchars("Red Team Partners services provide a comprehensive review of your organisation's information security. Using industry standard methodologies our consultants have performed a series of assessments designed to discover areas of concern in your business. Conducting a ".$serviceName." is a process of identifying flaws in business which may be exploited by an attacker. During the engagement, any entry that may be exploited is considered a vulnerability, and the severity of each vulnerability is measured using the latest CVSSv3 scoring system. We categorise all our findings so it’s easy for you to identify root causes and work on solving issues at their core."));

    // $introPage->addTextBreak();

    $introPage->addText( htmlspecialchars("Vulnerabilities may be caused by anything from incorrect configuration to out-of-date software or the use of weak authentication. As well as identifying technical vulnerabilities, you may need to review your policies and procedures to ensure that working practices are not vulnerable to other forms of attack. For example, we may identify weak password use or lapses in physical security, which may result or assist in a successful attack. By identifying possible attack vectors from the perspective of an attacker and rating the severity of each vulnerability, we are able to report on how intruders would most likely attempt to gain unauthorised access to your systems.") );

    // $introPage->addTextBreak();

    $introPage->addText( htmlspecialchars("The purpose of this document is to summarise the findings of the ". $serviceName .".") );

    ############################### END INTRODUCTION PAGE ###############################


    ############################### EXECUTIVE SUMMARY PAGE ###############################

    $executiveSummaryPage = $phpWord->addSection(array(
        'pageSizeW' => $paper->getWidth(),
        'pageSizeH' => $paper->getHeight(),
    ));

    $executiveSummaryPage->addTitle( 'Executive Summary', 1); // TOC Bookmark
    // $projectScopePage->addLine($lineStyle);  

    $executiveSummaryPage->addTextBreak();

    $strFindingsNumber = "";
    $strCriticalHighNumber = "";


    $findings_arr = array();


    if ($critical > 0) {
    //     $strFindingsNumber = "(" . $critical . ") Critical";
    //     $strCriticalHighNumber .= "(" . $critical . ") Critical";
        $findings_arr["Critical"] = $critical;
    }

    if ($high > 0) {
    //     $strFindingsNumber .= ", ";
    //     $strFindingsNumber .= "(" . $high . ") High";
    //     $strCriticalHighNumber .= " and ";
    //     $strCriticalHighNumber .= "(" . $high . ") High";
        $findings_arr["High"] = $high;
    }

    if ($medium > 0) {
    //     $strFindingsNumber .= ", ";
    //     $strFindingsNumber .= "(" . $medium . ") Medium";
        $findings_arr["Medium"] = $medium;
    }

    if ($low > 0) {
    //     $strFindingsNumber .= ", ";
    //     $strFindingsNumber .= "(" . $low . ") Low";
        $findings_arr["Low"]= $low;
    }

    if ($informational > 0) {
    //     $strFindingsNumber .= ", ";
    //     $strFindingsNumber .= "(" . $informational . ") Informational";
        $findings_arr["Informational"] = $informational;
    }

    $ctr = 0;
    
    foreach($findings_arr as $findings => $val) {
        $strFindingsNumber .= "(" . $val . ") " .ucfirst($findings);
        $ctr++;
        if ($ctr != sizeof($findings_arr)) {
            $strFindingsNumber .= ", ";
        }
    }

    // foreach($find)

    if ( $findings_arr["Critical"] == 0 || $findings_arr["High"] == 0) {
        if ($findings_arr["Critical"] > 0) {
            $strCriticalHighNumber = "(" . $findings_arr["Critical"] . ") Critical";
        }

        elseif($findings_arr["High"] > 0) {
            $strCriticalHighNumber = "(" . $findings_arr["High"] . ") High";
        }
        else{
            $strCriticalHighNumber = "no";
        }

        
    }else{
        $strCriticalHighNumber .= "(" . $findings_arr["Critical"] . ") Critical and (" . $findings_arr["High"] . ") High" ;
    }

    // for($i = 0; $i < sizeof($findings_arr; $i++) ){
    //     $strFindingsNumber .= ucfirst($key)
    // }

    $executiveSummaryPage->addText( htmlspecialchars("Red Team Partners has performed a ". $serviceName ." for ". $companyName ." against its environment. The assessment was carried out between ". $testDuration .". In performing a detailed ". $serviceName ." against ". $companyName ."'s environment, Red Team Partners identified ". $strCriticalHighNumber ." areas of concern, but overall found ". $overallSecurity .". Throughout this report we provide brief descriptions of each finding and how it could affect your business.") );

    // $executiveSummaryPage->addTextBreak();

    $executiveSummaryPage->addText( htmlspecialchars("Overall, Red Team Partners was able to achieve the goals of the ". $serviceName ." and there was a total of ". $totalFindings ." findings during the assessment. These were categorised into " . $strFindingsNumber . "." ) );

    $executiveSummaryPage->addTextBreak();

    $executiveSummaryPage->addText( htmlspecialchars("The key findings during this assessment were:") );

    foreach ($keyFindings as $key) {
        $executiveSummaryPage->addListItem( htmlspecialchars( $key ), 0 );
    }

    ############################### END EXECUTIVE SUMMARY PAGE ###############################


    ############################### TECHNICAL SUMMARY PAGE ###############################

    $technicalSummaryPage = $phpWord->addSection(array(
        'pageSizeW' => $paper->getWidth(),
        'pageSizeH' => $paper->getHeight(),
    ));

    $technicalSummaryPage->addTitle( htmlspecialchars("Technical Summary"), 1); // TOC Bookmark
    // $projectScopePage->addLine($lineStyle);

    $technicalSummaryPage->addTextBreak();

    $technicalSummaryPage->addText( htmlspecialchars("The most important objective of the assessment was to identify any vulnerabilities or potential issues that could affect the systems in scope, in case of a cyber-attack. The security team has conducted the assessment based on the agreed scope to determine the security posture of your organisation.") );

    // $technicalSummaryPage->addTextBreak();

    $technicalSummaryPage->addText( htmlspecialchars("In order to improve the security of the environment, ". $companyName ." should apply the fixes mentioned in the main report in order of category. We have provided some suggestions below that should be reviewed and fixed according to the risk posed to your business model.") );

    if ( sizeof($shortTermGoals) > 0 ) {

        $technicalSummaryPage->addTextBreak();

        $technicalSummaryPage->addText( htmlspecialchars("Our suggestions for the short-term goals are:") );

        foreach ($shortTermGoals as $shortTermGoal) {
            $technicalSummaryPage->addListItem( htmlspecialchars( $shortTermGoal ), 0 );
        }
    }   

    if ( sizeof($mediumTermGoals) > 0 ) {

        $technicalSummaryPage->addTextBreak();

        $technicalSummaryPage->addText( htmlspecialchars("Medium-Term Goals:") );

        foreach ($mediumTermGoals as $mediumTermGoal) {
            $technicalSummaryPage->addListItem( htmlspecialchars( $mediumTermGoal ), 0 );
        }
    }

    $technicalSummaryPage->addTextBreak();

    $technicalSummaryPage->addText( htmlspecialchars("With the identified vulnerabilities, an attacker can abuse the confidentiality, integrity and availability of the system and its components. The overall security posture of the environment presents impactful risks.") );

    // $technicalSummaryPage->addTextBreak();

    $technicalSummaryPage->addText( htmlspecialchars("The security team recommends that you should conduct a session for planning the remediation of the above-mentioned risks, starting with the highest rated vulnerability."));

    $technicalSummaryPage->addTextBreak();

    $technicalSummaryPage->addText( htmlspecialchars("For full details on each finding and how to remediate them, your team can refer to the main report. If there are any questions, we can arrange a call with our tester to discuss any part of the report in detail."), array("italic"=>true, "name"=>$aileronLight) );

    $technicalSummaryPage->addTextBreak();

    $technicalSummaryPageDisclaimer = $technicalSummaryPage->addTextRun();
    $technicalSummaryPageDisclaimer->addText( htmlspecialchars("DISCLAIMERS: "), array("name"=>$proximaNova, "bold"=>true, "color"=>$darkRed) );
    $technicalSummaryPageDisclaimer->addText( htmlspecialchars("The information presented in this document is provided as is and without warranty. Vulnerability assessments are a “point in time” analysis and as such it is possible that something in the environment could have changed since the tests reflected in this report were run. Also, it is possible that new vulnerabilities may have been discovered since the tests were run. For this reason, this report should be considered a guide, not a 100% representation of the risk threatening your systems, networks, and applications.") );

    // $technicalSummaryPage->addPageBreak();


    ############################### END TECHNICAL SUMMARY PAGE ###############################


    ############################### RED TEAM PARTNERS RECOMMENDED NEXT STEPS PAGE ###############################

    $rtpRecommendedNextStepPage = $phpWord->addSection(array(
        'pageSizeW' => $paper->getWidth(),
        'pageSizeH' => $paper->getHeight(),
    ));

    $rtpRecommendedNextStepPage->addTitle( htmlspecialchars("Red Team Partners Recommended Next Steps"), 1); // TOC Bookmark

    $rtpRecommendedNextStepPage->addTextBreak();

    $rtpRecommendedNextStepPage->addText("Alongside addressing the risks identified, RTP also suggests the following:");

    $rtpRecommendedNextStepPage->addListItem( htmlspecialchars("Quarterly Vulnerability Scan and a minimum of an annual Penetration Test."), 0 );

    $rtpRecommendedNextStepPage->addListItem( htmlspecialchars("This will ensure the security posture does not regress."), 1 );
    $rtpRecommendedNextStepPage->addListItem( htmlspecialchars("Any remediations can be verified in next quarter of testing."), 1 );
    $rtpRecommendedNextStepPage->addListItem( htmlspecialchars("Ensure any modifications or application developments do not introduce additional security risks."), 1 );

    $rtpRecommendedNextStepPage->addListItem( htmlspecialchars("Phishing"), 0 );

    $rtpRecommendedNextStepPage->addListItem( htmlspecialchars("Regular phishing attacks will ensure staff are reminded of their responsibilities around safeguarding their access and be aware of suspicious activities."), 1 );

    $rtpRecommendedNextStepPage->addListItem( htmlspecialchars("Longer-term"), 0 );

    $rtpRecommendedNextStepPage->addListItem( htmlspecialchars("Annual Red Team to ensure the security risks are not just focused on the application or specific environment."), 1 );
    $rtpRecommendedNextStepPage->addListItem( htmlspecialchars("Threat Intelligence – security monitoring for pro-active warning of potential risks and attacks. "), 1 );

    ############################### END RED TEAM PARTNERS RECOMMENDED NEXT STEPS PAGE ###############################


    ############################### APPENDIX - AUDIT CHECKLIST PAGE ###############################

    $appendixPage = $phpWord->addSection(array(
        'pageSizeW' => $paper->getWidth(),
        'pageSizeH' => $paper->getHeight(),
    ));

    $appendixPage->addTitle( htmlspecialchars("Appendix - Audit Checklist"), 1); // TOC Bookmark

    $appendixPage->addTextBreak();

    $appendixPage->addText( htmlspecialchars("To make remediation more organized, you can use the following checklist: "));

    $appendixPage->addTextBreak(2);

    $appendixPage->addText( htmlspecialchars(" *** INSERT TABLE AUDIT CHECKLIST HERE *** ") );

    ############################### END APPENDIX - AUDIT CHECKLIST PAGE ###############################


    // var_dump($_POST);

    // var_dump($keyFindings);
    // exit();

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

    
    // -------------------  

    $now = new DateTime();
    $now->setTimezone(new DateTimeZone('Europe/London'));    // Another way
    $now->getTimestamp();           // Unix Timestamp -- Since PHP 5.3
    $dtString = $now->format('YmdHis');    // MySQL datetime format

    // $dtString = $now;
    $filename = "";

    // $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
    // $objWriter->save('temp/helloWorld-'.$dtString.'.docx');

    // $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
    // $objWriter->save('temp/helloWorld2-'. $dtString .'.docx');


    // SECOND DOCUMENT - AUDIT CHECKLIST



    