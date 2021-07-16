<?php
    use PhpOffice\PhpPresentation\Style\Alignment;
    use PhpOffice\PhpPresentation\Style\Color;
    use PhpOffice\PhpPresentation\Style\Bullet;

    $slideFive = $objPHPPresentation->createSlide();
    $slideFive->setBackground($bgImageDefault);

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
                    ->setColor( new Color( "FF" . $redOne ) 
    );    

    $shape = $slideFive->createRichTextShape()
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
    $textRun = $shape->createTextRun(htmlspecialchars( "Key Findings:" ));
    

    $textRun->getFont()
        ->setSize(18)
        ->setName( $proximaNovaAltLT )
        ->setBold(true)
        ->setColor( new Color( "FF" . $blackDefault )
    );

    $block_data = array();

    foreach($keyFindings as $kf) {
        $block_data[] = $kf;
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