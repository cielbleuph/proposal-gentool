<?php
    use PhpOffice\PhpPresentation\Style\Alignment;
    use PhpOffice\PhpPresentation\Style\Color;
    
    // Create slide
    $currentSlide = $objPHPPresentation->getActiveSlide();
    $currentSlide->setBackground($bgImageCover);


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
                    ->setColor( new Color( 'FFFFFFFF' )
          
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
                    ->setColor( new Color( "FF" . $darkRed ) 
    );

    $shape = $currentSlide->createRichTextShape()
        ->setWidth(600)
        ->setHeight(50)
        ->setOffsetX(70)
        ->setOffsetY(160);
    $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_LEFT );
    $textRun = $shape->createTextRun(htmlspecialchars( "Version " . $version ));
    $textRun->getFont()->setSize(14)
                    ->setName( $proximaNovaAltLT )
                    ->setColor( new Color( "FF" . $redOne ) 
    );