<?php
    use PhpOffice\PhpPresentation\Style\Alignment;
    use PhpOffice\PhpPresentation\Style\Color;
    use PhpOffice\PhpPresentation\Style\Bullet;

    
    $slideSeven = $objPHPPresentation->createSlide();
    $slideSeven->setBackground($bgImageDefault);
    

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
                    ->setColor( new Color( "FF" . $redOne ) 
    );  

    $shape = $slideSeven->createRichTextShape()
        ->setWidth(600)
        ->setHeight(400)
        ->setOffsetX(30)
        ->setOffsetY(100);

    $textRun = $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_LEFT );
    $textRun = $shape->createTextRun(htmlspecialchars( "Alongside addressing the risks identified, RTP also suggests the following:" ));
    
    $shape->createParagraph()
        ->getAlignment()
        ->setIndent(24);


    $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_LEFT )
        ->setMarginLeft(25)
        ->setIndent(-25);

    $textRun->getFont()
        ->setSize(14)
        ->setName( $proximaNovaAltLT )
        ->setColor( new Color( "FF" . $blackDefault ) 
    );


    $shape->getActiveParagraph()->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT)
        ->setMarginLeft(25)
        ->setIndent(-25);
    
    $shape->getActiveParagraph()
        ->getFont()
        ->setSize(14)
        ->setColor(new Color("FF000000"));

    $shape->getActiveParagraph()
        ->getBulletStyle()
        ->setBulletType(Bullet::TYPE_BULLET)
        ->setBulletColor(new Color( "FF". $darkRed ))
        ->setBulletChar('•');
    
    $shape->createTextRun('Quarterly Vulnerability Scan and a minimum of an annual Penetration Test.');
    $shape->createParagraph()->getAlignment()->setLevel(1)
        ->setMarginLeft(75)
        ->setIndent(-25);
    $shape->createTextRun('This will ensure the security posture does not regress.');
    $shape->createParagraph()->createTextRun('Any remediations can be verified in next quarter of testing.');
    $shape->createParagraph()->createTextRun('Ensure any modifications or application developments do not introduce additional security risks.');
    
    $shape->createParagraph()->getAlignment()->setLevel(0)
        ->setMarginLeft(25)
        ->setIndent(-25);
    $shape->createTextRun('Phishing');

    $shape->createParagraph()->getAlignment()->setLevel(1)
        ->setMarginLeft(75)
        ->setIndent(-25);
    $shape->createTextRun('Regular phishing attacks will ensure staff are reminded of their responsibilities around safeguarding their access and be aware of suspicious activities.');
    
    $shape->createParagraph()->getAlignment()->setLevel(0)
        ->setMarginLeft(25)
        ->setIndent(-25);
    $shape->createTextRun('Longer term');

    $shape->createParagraph()->getAlignment()->setLevel(1)
        ->setMarginLeft(75)
        ->setIndent(-25);
    $shape->createTextRun('Annual Red Team to ensure the security risks are not just focused on the application or specific environment.');
    $shape->createParagraph()->createTextRun('Threat Intelligence – security monitoring for pro-active warning of potential risks and attacks.');

    