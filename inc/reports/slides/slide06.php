<?php
    use PhpOffice\PhpPresentation\Style\Alignment;
    use PhpOffice\PhpPresentation\Style\Color;
    use PhpOffice\PhpPresentation\Style\Bullet;

    $slideSix = $objPHPPresentation->createSlide();
    $slideSix->setBackground($bgImageDefault);


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
                    ->setColor( new Color( "FF" . $redOne ) 
    );        

    

    $shape = $slideSix->createRichTextShape()
        ->setWidth(700)
        ->setHeight(400)
        ->setOffsetX(30)
        ->setOffsetY(100);

    $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_LEFT );  
    $textRun = $shape->createTextRun(htmlspecialchars( "The goals provided are set out to be suggestions and should be reviewed and fixed according to the risk posed to your business model." ));

    
    $textRun->getFont()
        ->setSize(18)
        ->setName( $proximaNovaAltLT )
        ->setColor( new Color( "FF" . $blackDefault ) 
    );

    $shape->createBreak(2);

    $textRun = $shape->createParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_LEFT );
    $textRun = $shape->createTextRun(htmlspecialchars( "Short Term Goals:" ));
    

    $textRun->getFont()
        ->setSize(18)
        ->setName( $proximaNovaAltLT )
        ->setBold(true)
        ->setColor( new Color( "FF" . $blackDefault )
    );

    $block_data = array();

    foreach($shortTermGoals as $sGoals) {
        $block_data[] = $sGoals;
    }
    
    
    $textRun = $shape->createParagraph()
        ->createTextRun(implode("\n", $block_data));

    
    $shape->getActiveParagraph()
        ->getBulletStyle()
        ->setBulletType(Bullet::TYPE_BULLET)
        ->setBulletColor(new Color( "FF". $darkRed ))
        ->setBulletChar('•')
        ;
    
    $shape->getActiveParagraph()
        ->getAlignment()
        ->setIndent(24);


    $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_LEFT )
        ->setMarginLeft(25)
        ->setIndent(-25);

    $textRun->getFont()
        ->setSize(16)
        ->setName( $proximaNovaAltLT )
        ->setColor( new Color( "FF" . $blackDefault ) 
    );

    

    // 

    $slideSixA = $objPHPPresentation->createSlide();
    $slideSixA->setBackground($bgImageDefault);


    $shape = $slideSixA->createRichTextShape()
        ->setWidth(600)
        ->setHeight(50)
        ->setOffsetX(30)
        ->setOffsetY(40);

    $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_LEFT );

    $textRun = $shape->createTextRun(htmlspecialchars( "RECOMMENDATIONS" ));

    $textRun->getFont()->setSize(28)
            ->setBold(true)
                    ->setName( $proximaNovaBl )
                    ->setColor( new Color( "FF" . $redOne ) 
    );        

    

    $shape = $slideSixA->createRichTextShape()
        ->setWidth(700)
        ->setHeight(400)
        ->setOffsetX(30)
        ->setOffsetY(100);

    

    $textRun = $shape->createParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_LEFT );
    $textRun = $shape->createTextRun(htmlspecialchars( "Medium Term Goals:" ));
    

    $textRun->getFont()
        ->setSize(18)
        ->setName( $proximaNovaAltLT )
        ->setBold(true)
        ->setColor( new Color( "FF" . $blackDefault )
    );

    $block_data = array();

    foreach($mediumTermGoals as $mGoals) {
        $block_data[] = $mGoals;
    }
    
    
    $textRun = $shape->createParagraph()
        ->createTextRun(implode("\n", $block_data));

    
    $shape->getActiveParagraph()
        ->getBulletStyle()
        ->setBulletType(Bullet::TYPE_BULLET)
        ->setBulletColor(new Color( "FF". $darkRed ))
        ->setBulletChar('•')
        ;
    
    $shape->getActiveParagraph()
        ->getAlignment()
        ->setIndent(24);


    $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_LEFT )
        ->setMarginLeft(25)
        ->setIndent(-25);

    $textRun->getFont()
        ->setSize(16)
        ->setName( $proximaNovaAltLT )
        ->setColor( new Color( "FF" . $blackDefault ) 
    );
