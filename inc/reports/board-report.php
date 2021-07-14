<?php

    use PhpOffice\PhpPresentation\PhpPresentation;
    use PhpOffice\PhpPresentation\DocumentLayout;
    use PhpOffice\PhpPresentation\IOFactory;
    use PhpOffice\PhpPresentation\Style\Color;
    use PhpOffice\PhpPresentation\Style\Alignment;
    use PhpOffice\PhpPresentation\Shape\Placeholder;
    use PhpOffice\PhpPresentation\Shape\RichText;
    use PhpOffice\PhpPresentation\Style\Fill;
    use PhpOffice\PhpPresentation\Shape\Drawing;


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
    

    // Create slide
    $currentSlide = $objPHPPresentation->getActiveSlide();

    $oFill = new Fill();
    $oFill->setFillType(Fill::FILL_SOLID)
        ->setStartColor(new Color(Color::COLOR_DARKRED));
    $shape = new Drawing\File();
    $shape->setName('RTP Cover Page')
        ->setDescription('PHPPresentation logo')
        ->setPath(ASSETS_IMG_DIR . '/board-report-bg-1.jpg')
        ->setHeight(540)
        ->setOffsetX(0)
        ->setOffsetY(0)
        ->setFill($oFill);
    $currentSlide->addShape($shape);


    // Create a shape (text)
    $shape = $currentSlide->createRichTextShape()
        ->setWidth(600)
        ->setHeight(100)
        ->setOffsetX(70)
        ->setOffsetY(60);
    $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_LEFT );
    $textRun = $shape->createTextRun(htmlspecialchars( $companyName ));
    $textRun->getFont()->setBold(true)
                    ->setSize(44)
                    ->setName( $proximaNovaBl )
                    ->setColor( new Color( 'FFFFFF' )
          
    );
    
    $shape = $currentSlide->createRichTextShape()
        ->setWidth(600)
        ->setHeight(50)
        ->setOffsetX(70)
        ->setOffsetY(125);
    $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_LEFT );
    $textRun = $shape->createTextRun(htmlspecialchars( $serviceName ));
    $textRun->getFont()->setSize(20)
                    ->setName( $proximaNovaAltLT )
                    ->setColor( new Color( $darkRed ) 
    );

    $shape = $currentSlide->createRichTextShape()
        ->setWidth(600)
        ->setHeight(50)
        ->setOffsetX(70)
        ->setOffsetY(160);
    $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_LEFT );
    $textRun = $shape->createTextRun(htmlspecialchars( $version ));
    $textRun->getFont()->setSize(20)
                    ->setName( $proximaNovaAltLT )
                    ->setColor( new Color( $redOne ) 
    );
    
    
    // ########## SLIDE 2 ###########

    $slideTwo = $objPHPPresentation->createSlide();
    
    $oFill = new Fill();
    $oFill->setFillType(Fill::FILL_SOLID)
        ->setStartColor(new Color(Color::COLOR_DARKRED));

    $shape = new Drawing\File();
    $shape->setName('Executive Summary')
        ->setDescription('Executive Summary')
        ->setPath(ASSETS_IMG_DIR . '/board-report-default-bg.jpg')
        ->setHeight(540)
        ->setOffsetX(0)
        ->setOffsetY(0)
        ->setFill($oFill);
    $slideTwo->addShape($shape);

    $shape = $slideTwo->createRichTextShape()
        ->setWidth(600)
        ->setHeight(50)
        ->setOffsetX(30)
        ->setOffsetY(40);
    $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_LEFT );
    $textRun = $shape->createTextRun(htmlspecialchars( "EXECUTIVE SUMMARY" ));
    $textRun->getFont()->setSize(28)
            ->setBold(true)
                    ->setName( $proximaNovaBl )
                    ->setColor( new Color( $redOne ) 
    );

    $shape = $slideTwo->createRichTextShape()
        ->setWidth(480)
        ->setOffsetX(30)
        ->setOffsetY(120);
    $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_LEFT );
    $textRun = $shape->createTextRun(htmlspecialchars( "Red Team Partners has conducted a (Service) for (Company) on their cyber environment on (Date)" ));
    $textRun->getFont()->setSize(16)
                    ->setName( $proximaNovaAltLT )
                    ->setColor( new Color( '000000' ) 
    );


    // ########## SLIDE 3 ###########

    $slideThree = $objPHPPresentation->createSlide();
    
    $oFill = new Fill();
    $oFill->setFillType(Fill::FILL_SOLID)
        ->setStartColor(new Color(Color::COLOR_DARKRED));

    $shape = new Drawing\File();
    $shape->setName('Application Test Scope')
        ->setDescription('Application Test Scope')
        ->setPath(ASSETS_IMG_DIR . '/board-report-default-bg.jpg')
        ->setHeight(540)
        ->setOffsetX(0)
        ->setOffsetY(0)
        ->setFill($oFill);
    $slideThree->addShape($shape);

    $shape = $slideThree->createRichTextShape()
        ->setWidth(600)
        ->setHeight(50)
        ->setOffsetX(30)
        ->setOffsetY(40);
    $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_LEFT );
    $textRun = $shape->createTextRun(htmlspecialchars( "APPLICATION TEST SCOPE" ));
    $textRun->getFont()->setSize(28)
            ->setBold(true)
                    ->setName( $proximaNovaBl )
                    ->setColor( new Color( $redOne ) 
    );


    // ########## SLIDE 4 ###########

    $slideFour = $objPHPPresentation->createSlide();
    
    $oFill = new Fill();
    $oFill->setFillType(Fill::FILL_SOLID)
        ->setStartColor(new Color(Color::COLOR_DARKRED));

    $shape = new Drawing\File();
    $shape->setName('Service Summary')
        ->setDescription('Service Summary')
        ->setPath(ASSETS_IMG_DIR . '/board-report-default-bg.jpg')
        ->setHeight(540)
        ->setOffsetX(0)
        ->setOffsetY(0)
        ->setFill($oFill);
    $slideFour->addShape($shape);

    $shape = $slideFour->createRichTextShape()
        ->setWidth(600)
        ->setHeight(50)
        ->setOffsetX(30)
        ->setOffsetY(40);
    $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_LEFT );
    $textRun = $shape->createTextRun(htmlspecialchars( $serviceName . " SUMMARY" ));
    $textRun->getFont()->setSize(28)
            ->setBold(true)
                    ->setName( $proximaNovaBl )
                    ->setColor( new Color( $redOne ) 
    );


    // ########## SLIDE 5 ###########
    
    $slideFive = $objPHPPresentation->createSlide();
    
    $oFill = new Fill();
    $oFill->setFillType(Fill::FILL_SOLID)
        ->setStartColor(new Color(Color::COLOR_DARKRED));

    $shape = new Drawing\File();
    $shape->setName('Key Findings')
        ->setDescription('Key Findings')
        ->setPath(ASSETS_IMG_DIR . '/board-report-default-bg.jpg')
        ->setHeight(540)
        ->setOffsetX(0)
        ->setOffsetY(0)
        ->setFill($oFill);
    $slideFive->addShape($shape);

    $shape = $slideFive->createRichTextShape()
        ->setWidth(600)
        ->setHeight(50)
        ->setOffsetX(30)
        ->setOffsetY(40);
    $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_LEFT );
    $textRun = $shape->createTextRun(htmlspecialchars( "KEY FINDINGS" ));
    $textRun->getFont()->setSize(28)
            ->setBold(true)
                    ->setName( $proximaNovaBl )
                    ->setColor( new Color( $redOne ) 
    );    
    
    // ########## SLIDE 6 ###########
    
    $slideSix = $objPHPPresentation->createSlide();
    
    $oFill = new Fill();
    $oFill->setFillType(Fill::FILL_SOLID)
        ->setStartColor(new Color(Color::COLOR_DARKRED));

    $shape = new Drawing\File();
    $shape->setName('Recommendations')
        ->setDescription('Recommendations')
        ->setPath(ASSETS_IMG_DIR . '/board-report-default-bg.jpg')
        ->setHeight(540)
        ->setOffsetX(0)
        ->setOffsetY(0)
        ->setFill($oFill);
    $slideSix->addShape($shape);

    $shape = $slideSix->createRichTextShape()
        ->setWidth(600)
        ->setHeight(50)
        ->setOffsetX(30)
        ->setOffsetY(40);
    $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_LEFT );
    $textRun = $shape->createTextRun(htmlspecialchars( "RECOMMENDATIONS" ));
    $textRun->getFont()->setSize(28)
            ->setBold(true)
                    ->setName( $proximaNovaBl )
                    ->setColor( new Color( $redOne ) 
    );        
    
    // ########## SLIDE 7 ###########

    
    $slideSeven = $objPHPPresentation->createSlide();
    
    $oFill = new Fill();
    $oFill->setFillType(Fill::FILL_SOLID)
        ->setStartColor(new Color(Color::COLOR_DARKRED));

    $shape = new Drawing\File();
    $shape->setName('Next Steps')
        ->setDescription('Next Steps')
        ->setPath(ASSETS_IMG_DIR . '/board-report-default-bg.jpg')
        ->setHeight(540)
        ->setOffsetX(0)
        ->setOffsetY(0)
        ->setFill($oFill);
    $slideSeven->addShape($shape);

    $shape = $slideSeven->createRichTextShape()
        ->setWidth(600)
        ->setHeight(50)
        ->setOffsetX(30)
        ->setOffsetY(40);
    $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_LEFT );
    $textRun = $shape->createTextRun(htmlspecialchars( "NEXT STEPS" ));
    $textRun->getFont()->setSize(28)
            ->setBold(true)
                    ->setName( $proximaNovaBl )
                    ->setColor( new Color( $redOne ) 
    );     
    
    // ########## SLIDE 8 ###########  
    
    
    $slideSeven = $objPHPPresentation->createSlide();
    
    $oFill = new Fill();
    $oFill->setFillType(Fill::FILL_SOLID)
        ->setStartColor(new Color(Color::COLOR_DARKRED));

    $shape = new Drawing\File();
    $shape->setName('Appendix Audit Checklist')
        ->setDescription('Appendix Audit Checklist')
        ->setPath(ASSETS_IMG_DIR . '/board-report-default-bg.jpg')
        ->setHeight(540)
        ->setOffsetX(0)
        ->setOffsetY(0)
        ->setFill($oFill);
    $slideSeven->addShape($shape);

    $shape = $slideSeven->createRichTextShape()
        ->setWidth(600)
        ->setHeight(50)
        ->setOffsetX(30)
        ->setOffsetY(40);
    $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_LEFT );
    $textRun = $shape->createTextRun(htmlspecialchars( "APPENDIX - AUDIT CHECKLIST" ));
    $textRun->getFont()->setSize(28)
            ->setBold(true)
                    ->setName( $proximaNovaBl )
                    ->setColor( new Color( $redOne ) 
    );   

    // ########## SLIDE 9 ###########    






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