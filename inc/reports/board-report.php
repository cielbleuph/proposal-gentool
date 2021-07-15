<?php

    use PhpOffice\PhpPresentation\PhpPresentation;
    use PhpOffice\PhpPresentation\DocumentLayout;
    use PhpOffice\PhpPresentation\IOFactory;
    
    use PhpOffice\PhpPresentation\Shape;
    use PhpOffice\PhpPresentation\Shape\Placeholder;
    use PhpOffice\PhpPresentation\Shape\RichText;
    use PhpOffice\PhpPresentation\Shape\RichText\Paragraph;
    use PhpOffice\PhpPresentation\Shape\Drawing;
    
    use PhpOffice\PhpPresentation\Style\Border;
    use PhpOffice\PhpPresentation\Style\Fill;
    use PhpOffice\PhpPresentation\Style\Bullet;
    use PhpOffice\PhpPresentation\Style\Color;
    use PhpOffice\PhpPresentation\Style\Alignment;
    use PhpOffice\PhpPresentation\Style\Color as StyleColor;
    
    use PhpOffice\PhpPresentation\Slide\Background\Image;
    


    include dirname(dirname(__FILE__) ) . "/prepend.php";
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

        $totalVulnerabilities = intval($critical) + intval($high) + intval($medium) + intval($low);
        
    }
    else{
        exit('Oh noes! There\'s an issue! We apologized for this. Do not worry, we already notified the bug catchers. Check back again later.');
    }

    include_once(INC_DIR . 'gen-styles.php');

    $objPHPPresentation = new PhpPresentation();
    // $objPHPPresentation->getLayout()->setDocumentLayout(['cx' => 1366, 'cy' => 768], true)
    //     ->setCX(1280, DocumentLayout::UNIT_PIXEL)
    //     ->setCY(700, DocumentLayout::UNIT_PIXEL);
    $objPHPPresentation->getLayout()->setDocumentLayout(DocumentLayout::LAYOUT_SCREEN_16X9);



    $bgImageCover = new Image();
    $bgImageCover->setPath(ASSETS_IMG_DIR . '/board-report-bg-01.jpg');
    
    $bgImage02 = new Image();
    $bgImage02->setPath(ASSETS_IMG_DIR . '/board-report-bg-02.jpg');

    $bgImage03 = new Image();
    $bgImage03->setPath(ASSETS_IMG_DIR . '/board-report-bg-03.jpg');
    
    $bgImageDefault = new Image();
    $bgImageDefault->setPath(ASSETS_IMG_DIR . '/board-report-default-bg.jpg');

    // ########## SLIDE 1 ###########

    include('slides/slide01.php');
    
    
    // ########## SLIDE 2 ###########

    include('slides/slide02.php');

    // ########## SLIDE 3 ###########

    include('slides/slide03.php');

    // ########## SLIDE 4 ###########

    include('slides/slide04.php');

    // ########## SLIDE 5 ###########
    
    include('slides/slide05.php');
    
    // ########## SLIDE 6 ###########
    
    include('slides/slide06.php');
    
    // ########## SLIDE 7 ###########

    
    include('slides/slide07.php');
    
    // ########## SLIDE 8 ###########  
    
    include('slides/slide08.php');
     

    $file = 'sample.pptx';
    header("Content-Description: File Transfer");
    header('Content-Disposition: attachment; filename="' . $file . '"');
    header('Content-Type: application/vnd.openxmlformats-officedocument.presentationml.presentation');
    header('Content-Transfer-Encoding: binary');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Expires: 0');
    ob_clean();                    

    $oWriterPPTX = IOFactory::createWriter($objPHPPresentation, 'PowerPoint2007');
    $oWriterPPTX->save("php://output");