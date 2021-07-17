<?php
    use PhpOffice\PhpPresentation\Style\Alignment;
    use PhpOffice\PhpPresentation\Style\Color;
    use PhpOffice\PhpPresentation\Style\Fill;
    use PhpOffice\PhpPresentation\Style\Border;

    $slideEight = $objPHPPresentation->createSlide();
    $slideEight->setBackground($bgImage03);
    
    $shape = $slideEight->createRichTextShape()
        ->setWidth(600)
        ->setHeight(50)
        ->setOffsetX(30)
        ->setOffsetY(40);
    $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_LEFT );
    $textRun = $shape->createTextRun(htmlspecialchars( "APPENDIX - AUDIT CHECKLIST" ));
    $textRun->getFont()->setSize(28)
            ->setBold(true)
                    ->setName( $proximaNovaAltLTBl )
                    ->setColor( new Color( "FF" . $redOne ) 
    );  


    // Create a shape (table)

    $shape = $slideEight->createTableShape(6);
    $shape->setHeight(900);
    $shape->setWidth(670);
    $shape->setOffsetX(55);
    $shape->setOffsetY(140);

    // Add row
    
    $row = $shape->createRow();
    $row->getFill()->setFillType(Fill::FILL_SOLID)
                ->setStartColor(new Color('FF434343'));
    
    $cell = $row->nextCell();
    
    // $cell->getBorders()->getLeft()->setLineStyle(Border::LINE_NONE);
    // $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
    // $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
    // $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
    $cell->createTextRun('REF')->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FFFFFFFF"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);

    $cell = $row->nextCell();
    
    $cell->createTextRun( "Issue" )->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FFFFFFFF"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);

    $cell = $row->nextCell();
        
    $cell->createTextRun( "Location/Affected\nEnd Point" )->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FFFFFFFF"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);

    $cell = $row->nextCell();

    $cell->createTextRun( "Risk" )->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FFFFFFFF"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);

    $cell = $row->nextCell();

    $cell->createTextRun( "Remediation" )->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FFFFFFFF"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);

    $cell = $row->nextCell();

    $cell->createTextRun( "Date Completed" )->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FFFFFFFF"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);





    $row = $shape->createRow();

    $row->getFill()->setFillType(Fill::FILL_SOLID)
                ->setStartColor(new Color('FFFFFFFF'));
    
    $cell = $row->nextCell();

    $cell->createTextRun('')->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FFFFFFF"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);
    $cell->getFill()->setFillType(Fill::FILL_SOLID)
        ->setStartColor(new Color("FF666666"));

    $cell = $row->nextCell();
    
    $cell->getBorders()->getLeft()->setLineWidth(1)
    ->setLineStyle(Border::LINE_SINGLE)
    ->setDashStyle(Border::DASH_DASH);
    $cell->createTextRun("Name of Findings")->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FF000000"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);     
    
    $cell = $row->nextCell();

    $cell->getBorders()->getLeft()->setLineWidth(1)
    ->setLineStyle(Border::LINE_SINGLE)
    ->setDashStyle(Border::DASH_DASH);
    $cell->createTextRun("")->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FF000000"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);   

    $cell = $row->nextCell();
    
    $cell->getBorders()->getLeft()->setLineWidth(1)
    ->setLineStyle(Border::LINE_SINGLE)
    ->setDashStyle(Border::DASH_DASH);
    $cell->createTextRun("")->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FF000000"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);   

    $cell = $row->nextCell();
    
    $cell->getBorders()->getLeft()->setLineWidth(1)
    ->setLineStyle(Border::LINE_SINGLE)
    ->setDashStyle(Border::DASH_DASH);
    $cell->createTextRun("")->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FF000000"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);   

    $cell = $row->nextCell();
    
    $cell->getBorders()->getLeft()->setLineWidth(1)
    ->setLineStyle(Border::LINE_SINGLE)
    ->setDashStyle(Border::DASH_DASH);
    $cell->createTextRun("")->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FF000000"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);   
        






    $row = $shape->createRow();

    $row->getFill()->setFillType(Fill::FILL_SOLID)
                ->setStartColor(new Color('FFFFFFFF'));
    
    $cell = $row->nextCell();
    

    $cell->createTextRun('')->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FFFFFFF"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);
    $cell->getFill()->setFillType(Fill::FILL_SOLID)
        ->setStartColor(new Color("FF666666"));

    $cell = $row->nextCell();
    
    $cell->getBorders()->getLeft()->setLineWidth(1)
    ->setLineStyle(Border::LINE_SINGLE)
    ->setDashStyle(Border::DASH_DASH);
    $cell->createTextRun("Name of Findings")->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FF000000"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);     
    
    $cell = $row->nextCell();

    $cell->getBorders()->getLeft()->setLineWidth(1)
    ->setLineStyle(Border::LINE_SINGLE)
    ->setDashStyle(Border::DASH_DASH);
    $cell->createTextRun("")->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FF000000"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);   

    $cell = $row->nextCell();
    
    $cell->getBorders()->getLeft()->setLineWidth(1)
    ->setLineStyle(Border::LINE_SINGLE)
    ->setDashStyle(Border::DASH_DASH);
    $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
    $cell->createTextRun("")->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FF000000"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);   

    $cell = $row->nextCell();
    
    $cell->getBorders()->getLeft()->setLineWidth(1)
    ->setLineStyle(Border::LINE_SINGLE)
    ->setDashStyle(Border::DASH_DASH);
    $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
    $cell->createTextRun("")->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FF000000"));
    $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
        ->setMarginLeft(10);   

    $cell = $row->nextCell();
    
    $cell->getBorders()->getLeft()->setLineWidth(1)
    ->setLineStyle(Border::LINE_SINGLE)
    ->setDashStyle(Border::DASH_DASH);
    $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
    $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
    $cell->createTextRun("")->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FF000000"));
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
        $cell->createTextRun('')->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FFFFFFF"));
        $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
            ->setMarginLeft(10);
        $cell->getFill()->setFillType(Fill::FILL_SOLID)
            ->setStartColor(new Color("FF666666"));
    
        $cell = $row->nextCell();
        
        $cell->getBorders()->getLeft()->setLineWidth(1)
        ->setLineStyle(Border::LINE_SINGLE)
        ->setDashStyle(Border::DASH_DASH);
        $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
        $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
        $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
        $cell->createTextRun("Name of Findings")->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FF000000"));
        $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
            ->setMarginLeft(10);     
        
        $cell = $row->nextCell();
    
        $cell->getBorders()->getLeft()->setLineWidth(1)
        ->setLineStyle(Border::LINE_SINGLE)
        ->setDashStyle(Border::DASH_DASH);
        $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
        $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
        $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
        $cell->createTextRun("")->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FF000000"));
        $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
            ->setMarginLeft(10);   
    
        $cell = $row->nextCell();
        
        $cell->getBorders()->getLeft()->setLineWidth(1)
        ->setLineStyle(Border::LINE_SINGLE)
        ->setDashStyle(Border::DASH_DASH);
        $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
        $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
        $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
        $cell->createTextRun("")->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FF000000"));
        $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
            ->setMarginLeft(10);   
    
        $cell = $row->nextCell();
        
        $cell->getBorders()->getLeft()->setLineWidth(1)
        ->setLineStyle(Border::LINE_SINGLE)
        ->setDashStyle(Border::DASH_DASH);
        $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
        $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
        $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
        $cell->createTextRun("")->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FF000000"));
        $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
            ->setMarginLeft(10);   
    
        $cell = $row->nextCell();
        
        $cell->getBorders()->getLeft()->setLineWidth(1)
        ->setLineStyle(Border::LINE_SINGLE)
        ->setDashStyle(Border::DASH_DASH);
        $cell->getBorders()->getRight()->setLineStyle(Border::LINE_NONE);
        $cell->getBorders()->getTop()->setLineStyle(Border::LINE_NONE);
        $cell->getBorders()->getBottom()->setLineStyle(Border::LINE_NONE);
        $cell->createTextRun("")->getFont()->setName($proximaNovaAltLT)->setBold(true)->setSize(8)->setColor(new Color("FF000000"));
        $cell->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER )->setVertical( Alignment::VERTICAL_CENTER )
            ->setMarginLeft(10);   