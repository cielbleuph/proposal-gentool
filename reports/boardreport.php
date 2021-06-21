<?php

    use PhpOffice\PhpPresentation\PhpPresentation;
    use PhpOffice\PhpPresentation\IOFactory;
    use PhpOffice\PhpPresentation\Style\Color;
    use PhpOffice\PhpPresentation\Style\Alignment;
    use PhpOffice\PhpPresentation\Shape\Placeholder;
    use PhpOffice\PhpPresentation\Shape\RichText;
    use PhpOffice\PhpPresentation\Style\Fill;


    include('../inc/helper/helper.php');

    require_once ('../vendor/autoload.php');

    $dateHelper = new Helper();
    $dateFormat = 'd F Y';

    $objPHPPresentation = new PhpPresentation();
    

    // Create slide
    $currentSlide = $objPHPPresentation->getActiveSlide();

    // Create a shape (drawing)
    // $shape = $currentSlide->createDrawingShape();
    // $shape->setName('PHPPresentation logo')
    //     ->setDescription('PHPPresentation logo')
    //     ->setPath('/assets/images/rtp-logo.png')
    //     ->setHeight(36)
    //     ->setOffsetX(10)
    //     ->setOffsetY(10);
    // $shape->getShadow()->setVisible(true)
    //                 ->setDirection(45)
    //                 ->setDistance(10);


    // Create a shape (text)
    $shape = $currentSlide->createRichTextShape()
        ->setHeight(300)
        ->setWidth(600)
        ->setOffsetX(170)
        ->setOffsetY(180);
    $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER );
    $textRun = $shape->createTextRun('Thank you for using PHPPresentation!');
    $textRun->getFont()->setBold(true)
                    ->setSize(60)
                    ->setColor( new Color( 'FFE06B20' ) );

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