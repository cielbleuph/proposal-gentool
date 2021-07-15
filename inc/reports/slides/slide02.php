<?php
    use PhpOffice\PhpPresentation\Style\Alignment;
    use PhpOffice\PhpPresentation\Style\Color;
    use PhpOffice\PhpPresentation\Style\Bullet;
    use PhpOffice\PhpPresentation\Style\Fill;
    use PhpOffice\PhpPresentation\Style\Border;


    $slideTwo = $objPHPPresentation->createSlide();
    $slideTwo->setBackground($bgImage02);
    
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
            ->setColor( new Color(  "FF" . $redOne ) 
    );


    $shape = $slideTwo->createRichTextShape()
        ->setWidth(450)
        ->setHeight(400)
        ->setOffsetX(30)
        ->setOffsetY(100);

    $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_LEFT );
    $textRun = $shape->setAutoFit('normAutofit')->createTextRun("Red Team Partners has conducted a ".$serviceName." for ". $companyName." on their cyber environment on ".$testDuration );

    $textRun->getFont()
        ->setSize(18)
        ->setName( $proximaNovaAltLT )
        ->setColor( new Color( "FF" . $blackDefault ) 
    );

    $shape->createBreak(2);

    $block_data = array(
        "Types of testing were conducted",
        $serviceName,
        $overallSecurity,
        "The ".$serviceName." has identified ".$totalVulnerabilities." issues including ".$critical." Critical and ".$high." High issues which warrants immediate attention"
    );
    
    
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

    $shape = $slideTwo->createRichTextShape()
        ->setWidth(450)
        ->setHeight(60)
        ->setOffsetX(520)
        ->setOffsetY(110);

    $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER );
    $textRun = $shape->createTextRun(htmlspecialchars( "SECURITY ISSUES IDENTIFIED" ));
    $textRun->getFont()->setSize(16)
            ->setBold(true)
            ->setName( $proximaNova )
            ->setColor( new Color(  "FFFFFFFF" ) 
    );

    // Create a shape (table)

    $shape = $slideTwo->createTableShape(2);
    $shape->setHeight(500);
    $shape->setWidth(390);
    $shape->setOffsetX(545);
    $shape->setOffsetY(160);

    // Add row
    
    $row = $shape->createRow();
    $row->getFill()->setFillType(Fill::FILL_SOLID)
                ->setStartColor(new Color('FF434343'));
    
    $cell = $row->nextCell();
    
    $cell->getBorders()->getLeft()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
    $cell->createTextRun('Risk Rating')->getFont()->setName($proximaNova)->setBold(true)->setSize(10)->setColor(new Color("FFFFFFFF"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);

    $cell = $row->nextCell();
    
    $cell->getBorders()->getLeft()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
    $cell->createTextRun( $serviceName )->getFont()->setName($proximaNova)->setBold(true)->setSize(10)->setColor(new Color("FFFFFFFF"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);




    $row = $shape->createRow();

    $row->getFill()->setFillType(Fill::FILL_SOLID)
                ->setStartColor(new Color('FFFFFFFF'));
    
    $cell = $row->nextCell();
    
    $cell->getBorders()->getLeft()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
    $cell->createTextRun('Critical')->getFont()->setName($proximaNova)->setBold(true)->setSize(10)->setColor(new Color("FF7030A0"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);

    $cell = $row->nextCell();
    
    $cell->getBorders()->getLeft()->setLineWidth(1)
    ->setLineStyle(Border::LINE_SINGLE)
    ->setDashStyle(Border::DASH_DASH);
    $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
    $cell->createTextRun($critical)->getFont()->setName($proximaNova)->setBold(true)->setSize(10)->setColor(new Color("FF000000"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);     
        


    $row = $shape->createRow();

    $row->getFill()->setFillType(Fill::FILL_SOLID)
                ->setStartColor(new Color('FFFFFFFF'));
    
    $cell = $row->nextCell();
    
    $cell->getBorders()->getLeft()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
    $cell->createTextRun('High')->getFont()->setName($proximaNova)->setBold(true)->setSize(10)->setColor(new Color("FFFF0000"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);

    $cell = $row->nextCell();
    
    $cell->getBorders()->getLeft()->setLineWidth(1)
    ->setLineStyle(Border::LINE_SINGLE)
    ->setDashStyle(Border::DASH_DASH);
    $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
    $cell->createTextRun($high)->getFont()->setName($proximaNova)->setBold(true)->setSize(10)->setColor(new Color("FF000000"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);  

    $row = $shape->createRow();

    $row->getFill()->setFillType(Fill::FILL_SOLID)
                ->setStartColor(new Color('FFFFFFFF'));
    
    $cell = $row->nextCell();
    
    $cell->getBorders()->getLeft()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
    $cell->createTextRun('Medium')->getFont()->setName($proximaNova)->setBold(true)->setSize(10)->setColor(new Color("FFED7D31"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);

    $cell = $row->nextCell();
    
    $cell->getBorders()->getLeft()->setLineWidth(1)
    ->setLineStyle(Border::LINE_SINGLE)
    ->setDashStyle(Border::DASH_DASH);
    $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
    $cell->createTextRun($medium)->getFont()->setName($proximaNova)->setBold(true)->setSize(10)->setColor(new Color("FF000000"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10); 


    $row = $shape->createRow();

    $row->getFill()->setFillType(Fill::FILL_SOLID)
                ->setStartColor(new Color('FFFFFFFF'));
    
    $cell = $row->nextCell();
    
    $cell->getBorders()->getLeft()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
    $cell->createTextRun('Low')->getFont()->setName($proximaNova)->setBold(true)->setSize(10)->setColor(new Color("FF00B0F0"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);

    $cell = $row->nextCell();
    
    $cell->getBorders()->getLeft()->setLineWidth(1)
    ->setLineStyle(Border::LINE_SINGLE)
    ->setDashStyle(Border::DASH_DASH);
    $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
    $cell->createTextRun($low)->getFont()->setName($proximaNova)->setBold(true)->setSize(10)->setColor(new Color("FF000000"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10); 

    $row = $shape->createRow();

    $row->getFill()->setFillType(Fill::FILL_SOLID)
                ->setStartColor(new Color('FF434343'));
    
    $cell = $row->nextCell();
    
    $cell->getBorders()->getLeft()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
    $cell->createTextRun('Total')->getFont()->setName($proximaNova)->setBold(true)->setSize(10)->setColor(new Color("FFFFFFFF"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);

    $cell = $row->nextCell();
    
    $cell->getBorders()->getLeft()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
    $cell->createTextRun($totalVulnerabilities)->getFont()->setName($proximaNova)->setBold(true)->setSize(10)->setColor(new Color("FFFFFFFF"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);        