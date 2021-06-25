<?php

    // if (!isset($_POST) || count($_POST) <= 0 || $_SERVER["REQUEST_METHOD"] != "POST" ) {
    //     exit('Restricted Access');
    // }

    use PhpOffice\PhpWord\PhpWord;
    use PhpOffice\PhpWord\Shared\Converter;

    include "prepend.php";
    include HELPER_DIR . 'helper.php';

    require_once VENDOR_DIR . 'autoload.php';

    $dateHelper = new Helper();
    $dateFormat = 'd F Y';

    
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
            $dateGenerated = $_POST["date-generated"];
        }

        if ( isset( $_POST['test-duration-from'] ) && $_POST['test-duration-from'] != "" 
          && isset( $_POST['test-duration-to'] ) && $_POST['test-duration-to'] != ""  ) {
            $testDurationFrom = $_POST["test-duration-from"];
            $testDurationTo = $_POST["test-duration-to"];
            $testDuration = $testDurationFrom . " - " . $testDurationTo;
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
            $lol = $_POST["low"];
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

    // php word

    // Creating the new document...
    $phpWord = new \PhpOffice\PhpWord\PhpWord();
    // helper 
    $converter = new \PhpOffice\PhpWord\Shared\Converter();
    // force update to reflect correct page number in TOC.
    $phpWord->getSettings()->setUpdateFields(true);
    // $phpWord->getSettings()->setOutputEscapingEnabled(true);

    /** Document Settings & Styles **/
    
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

    $phpWord->addParagraphStyle('paragraph_default', array('spaceBefore' => 0, 'spaceAfter' => 0));


    $defaultTableStyle = array(
        'unit'=>'pct', 
        'width' => 5000,
        'alignment' => 'center',
        'borderSize'=>0
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

    include_once(INC_DIR . 'gen-styles.php');


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
    
    $coverPage->addTextBreak(30);
    $coverPage->addText( htmlspecialchars( $companyName ), array('color'=>$darkRed, 'name'=> $aileronHeavy, 'size'=>60, 'bold'=> true), array('alignment'=>'start'));
    $coverPage->addText( htmlspecialchars( $serviceName ), array('color'=>'000000', 'name'=> $proximaNovaAltLT, 'size'=>20, 'bold'=> true), array( 'alignment' =>'start' ) );
    $coverPage->addText( htmlspecialchars( $dateGenerated ), array('color'=>'333333', 'name'=> $proximaNovaAltLT, 'size'=>14, 'bold'=> true), array( 'alignment' =>'start' ) );
    $coverPage->addText( htmlspecialchars( "V" . $version ), array('color'=>'333333', 'name'=> $proximaNovaAltLT, 'size'=>14, 'bold'=> true), array( 'alignment' =>'start' ) );

    ############################### END COVER PAGE ###############################


    ############################### TOC PAGE ###############################
  
    $TOCPage = $phpWord->addSection(array(
        'pageSizeW' => $paper->getWidth(),
        'pageSizeH' => $paper->getHeight(),
        'marginLeft' => $converter->inchToTwip(.7),
        'marginRight' => $converter->inchToTwip(.3)
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

    ############################### END TOC PAGE ###############################


    ############################### INTRODUCTION PAGE ###############################

    $TOCPage = $phpWord->addSection(array(
        'pageSizeW' => $paper->getWidth(),
        'pageSizeH' => $paper->getHeight(),
    ));

    // $TOCPagePageHeader = $TOCPage->addHeader();
    // $TOCPagePageHeader->addImage( 'assets/images/sow-header-image.png', $headerWatermarkStyle);

    $TOCPageHeader = $TOCPage->addHeader();
   
    // $clientDetailsPageHeader->addImage( 'assets/images/sow-header-image.png', $headerImageStyle);
    $TOCPageHeader->addWatermark( ASSETS_IMG_DIR . 'sow-header-image.png', $headerWatermarkStyle );

    ############################### END INTRODUCTION PAGE ###############################


    ############################### EXECUTIVE SUMMARY PAGE ###############################

    ############################### END EXECUTIVE SUMMARY PAGE ###############################


    ############################### TECHNICAL SUMMARY PAGE ###############################

    ############################### END TECHNICAL SUMMARY PAGE ###############################


    ############################### RED TEAM PARTNERS RECOMMENDED NEXT STEPS PAGE ###############################

    ############################### END RED TEAM PARTNERS RECOMMENDED NEXT STEPS PAGE ###############################


    ############################### APPENDIX - AUDIT CHECKLIST PAGE ###############################

    ############################### END APPENDIX - AUDIT CHECKLIST PAGE ###############################


    // var_dump($_POST);
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