<?php
    use PhpOffice\PhpPresentation\Style\Alignment;
    use PhpOffice\PhpPresentation\Style\Color;
    use PhpOffice\PhpPresentation\Style\Bullet;
    use PhpOffice\PhpPresentation\Style\Fill;
    use PhpOffice\PhpPresentation\Style\Border;

    $slideFour = $objPHPPresentation->createSlide();
    $slideFour->setBackground($bgImage02);
    


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
                    ->setColor( new Color( "FF" . $redOne ) 
    );

    $shape = $slideFour->createRichTextShape()
        ->setWidth(450)
        ->setHeight(400)
        ->setOffsetX(30)
        ->setOffsetY(140);

    

    $block_data = array(
        $serviceName ." identified ".$totalVulnerabilities." issues including ".$high." high issue around " . $overallRating,
        $medium . " other medium and low issues were also identified, which require attention in the short-term.",
        $critical . " critical issues were found which indicates the highlight risk.",
        "The overall number of issues found was reasonably (Overall low/high) in the context of this " . $serviceName . "."
    );
    
    
    $textRun = $shape->getActiveParagraph()
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

    $shape = $slideFour->createRichTextShape()
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

    $shape = $slideFour->createTableShape(2);
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
                ->setStartColor(new Color('FFFFFFFF'));
    
    $cell = $row->nextCell();
    
    $cell->getBorders()->getLeft()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
    $cell->createTextRun('Informational')->getFont()->setName($proximaNova)->setBold(true)->setSize(10)->setColor(new Color("FF00B050"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);

    $cell = $row->nextCell();
    
    $cell->getBorders()->getLeft()->setLineWidth(1)
    ->setLineStyle(Border::LINE_SINGLE)
    ->setDashStyle(Border::DASH_DASH);
    $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
    $cell->createTextRun($informational)->getFont()->setName($proximaNova)->setBold(true)->setSize(10)->setColor(new Color("FF000000"));
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