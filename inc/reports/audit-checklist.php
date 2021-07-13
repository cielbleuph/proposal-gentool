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
        'width' => 841, 
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

    $auditTableStyle = array(
        "unit" => "pct",
        "width" => 110*50,
        "alignment" => "center",
        "borderSize" => 0,
        "indentLeft" => $converter->InchToTwip(-52),
    );

    $coverCreatedCellStyle = array('bgColor'=>'494849');
    $lineStyle = array('weight' => 1, 'width' => 445, 'height' => 0, 'color' => '38c172');

    $paper = new \PhpOffice\PhpWord\Style\Paper();
    $paper->setSize('A4');


    


    ############################### COVER PAGE ###############################
    
    $coverPage = $phpWord->addSection(array(
        'pageSizeW' => $paper->getWidth(),
        'pageSizeH' => $paper->getHeight(),
        // 'marginLeft' => $converter->inchToTwip(.7),
        // 'marginRight' => $converter->inchToTwip(.3),
        'marginTop' => $converter->inchToTwip(.5),
        'orientation' => 'landscape'
    ));

    $coverPage->addImage(ASSETS_IMG_DIR . '/reports/audit-checklist-bg.png', 
        array(
            // 'width' => \PhpOffice\PhpWord\Shared\Drawing::centimetersToPixels(3),
            // 'height' => \PhpOffice\PhpWord\Shared\Drawing::centimetersToPixels(3),
            'width' => 840,
            'positioning' => \PhpOffice\PhpWord\Style\Image::POSITION_ABSOLUTE,
            'posHorizontal' => \PhpOffice\PhpWord\Style\Image::POSITION_HORIZONTAL_LEFT,
            'posHorizontalRel' => \PhpOffice\PhpWord\Style\Image::POSITION_RELATIVE_TO_PAGE,
            'posVerticalRel' => \PhpOffice\PhpWord\Style\Image::POSITION_RELATIVE_TO_PAGE,
            'marginLeft' => \PhpOffice\PhpWord\Shared\Drawing::centimetersToPixels(15.5),
            'marginTop' => \PhpOffice\PhpWord\Shared\Drawing::centimetersToPixels(1.55),
            'wrappingStyle' => 'behind'
        )
    );
    
    $coverPage->addText( htmlspecialchars( $companyName ), array('color'=>$darkRed, 'name'=> $proximaNovaBl, 'size'=>48, 'bold'=> true), array('alignment'=>'start'));
    $coverPage->addText( htmlspecialchars( $serviceName ), array('color'=>'000000', 'name'=> $proximaNovaAltLT, 'size'=>20, 'bold'=> true), array( 'alignment' =>'start' ) );
    $coverPage->addText( htmlspecialchars( $dateGenerated ), array('color'=>'919191', 'name'=> $proximaNovaAltLT, 'size'=>14, 'bold'=> true), array( 'alignment' =>'start' ) );
    $coverPage->addText( htmlspecialchars( "Version " . $version ), array('color'=>'919191', 'name'=> $proximaNovaAltLT, 'size'=>14, 'bold'=> true), array( 'alignment' =>'start' ) );

    ############################### END COVER PAGE ###############################


    

    ############################### AUDIT PAGE TABLE ###############################

    $introPage = $phpWord->addSection(array(
        'pageSizeW' => $paper->getWidth(),
        'pageSizeH' => $paper->getHeight(),
        'orientation' => 'landscape'
    ));

    // $TOCPagePageHeader = $TOCPage->addHeader();
    // $TOCPagePageHeader->addImage( 'assets/images/sow-header-image.png', $headerWatermarkStyle);

    $introPageHeader = $introPage->addHeader();
   
    // $clientDetailsPageHeader->addImage( 'assets/images/sow-header-image.png', $headerImageStyle);
    $introPageHeader->addWatermark( ASSETS_IMG_DIR . 'sow-header-image.png', $headerWatermarkStyle );

    
    $introPage->addTextBreak();

    $introPage->addText( htmlspecialchars("To make remediation more organised, you can use the following checklist:"));

    $appendixPageTable = $introPage->addTable($auditTableStyle);

    $introPage->addTextBreak();

    $appendixPageTable->addRow(null, array( 'tblHeader' => true, 'cantSplit' => false ) );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) , array('bgColor'=>'434343', "valign"=>"center") )->addText( htmlspecialchars("REF"), array("size"=>11, "color"=>"FFFFFF", "bold"=>true), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) , array('bgColor'=>'434343', "valign"=>"center") )->addText( htmlspecialchars("Issue"), array("size"=>11, "color"=>"FFFFFF", "bold"=>true), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) , array('bgColor'=>'434343', "valign"=>"center") )->addText( htmlspecialchars("Location and Affected End Point"), array("size"=>11, "color"=>"FFFFFF", "bold"=>true), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) , array('bgColor'=>'434343', "valign"=>"center") )->addText( htmlspecialchars("Risk"), array("size"=>11, "color"=>"FFFFFF", "bold"=>true), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) , array('bgColor'=>'434343', "valign"=>"center") )->addText( htmlspecialchars("Remediation"), array("size"=>11, "color"=>"FFFFFF", "bold"=>true), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) , array('bgColor'=>'434343', "valign"=>"center") )->addText( htmlspecialchars("Date Completed"), array("size"=>11, "color"=>"FFFFFF", "bold"=>true), array("alignment"=>"center") );


    $appendixPageTable->addRow(null, array( 'tblHeader' => false, 'cantSplit' => false ) );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) , array('bgColor'=>'7F7F7F') )->addText( htmlspecialchars("#.#.#"), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars(""), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars(""), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars("Critical"), array("size"=>11, "color"=>"7030A0", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars(""), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars(""), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );

    $appendixPageTable->addRow(null, array( 'tblHeader' => false, 'cantSplit' => false ) );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) , array('bgColor'=>'7F7F7F') )->addText( htmlspecialchars("#.#.#"), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars(""), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars(""), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars("High"), array("size"=>11, "color"=>"FF0000", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars(""), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars(""), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );

    $appendixPageTable->addRow(null, array( 'tblHeader' => false, 'cantSplit' => false ) );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) , array('bgColor'=>'7F7F7F') )->addText( htmlspecialchars("#.#.#"), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars(""), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars(""), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars("Medium"), array("size"=>11, "color"=>"ED7D31", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars(""), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars(""), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );

    $appendixPageTable->addRow(null, array( 'tblHeader' => false, 'cantSplit' => false ) );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) , array('bgColor'=>'7F7F7F') )->addText( htmlspecialchars("#.#.#"), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars(""), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars(""), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars("Low"), array("size"=>11, "color"=>"00B0F0", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars(""), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars(""), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );

    $appendixPageTable->addRow(null, array( 'tblHeader' => false, 'cantSplit' => false ) );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) , array('bgColor'=>'7F7F7F') )->addText( htmlspecialchars("#.#.#"), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars(""), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars(""), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars("Informational"), array("size"=>11, "color"=>"00B050", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars(""), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );
    $appendixPageTable->addCell( $converter->pixelToTwip(300) )->addText( htmlspecialchars(""), array("size"=>11, "color"=>"FFFFFF", "bold"=>true, "alignment"=>"center"), array("alignment"=>"center") );


    ############################### END AUDIT PAGE TABLE ###############################


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



    