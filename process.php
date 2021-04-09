<?php
    
    use PhpOffice\PhpWord\PhpWord;
    use PhpOffice\PhpWord\Shared\Converter;

    require_once __DIR__ . '/vendor/autoload.php';

    // Variables

    if ( isset($_POST) ) {

        // var_dump($_POST);
        // die();
        // var_dump($_POST);

        if ( isset($_POST['account-manager']) && $_POST['account-manager'] != '' ){
            $accountManagerName = $_POST['account-manager'];
        }

        if ( isset($_POST['account-manager-email']) && $_POST['account-manager-email'] != '' ){
            $accountManagerEmail = $_POST['account-manager-email'];
        }

        if ( isset($_POST['account-manager-contact']) && $_POST['account-manager-contact'] != '' ){
            $accountManagerNumber = $_POST['account-manager-contact'];
        }

        if ( isset($_POST['company-description']) && $_POST['company-description'] != '' ){
            $companyDescription = $_POST['company-description'];
        }

        if ( isset($_POST['test-reason']) && $_POST['test-reason'] != '' ){
            $reasonForTesting = $_POST['test-reason'];
        }

        if ( isset($_POST['client-name']) && $_POST['client-name'] != '' ){
            $clientContactName = $_POST['client-name'];
        }

        if ( isset($_POST['client-contact']) && $_POST['client-contact'] != '' ){
            $clientContactNumber = $_POST['client-contact'];
        }

        if ( isset($_POST['client-email']) && $_POST['client-email'] != '' ){
            $clientContactEmail = $_POST['client-email'];
        }

        if ( isset($_POST['company-name']) && $_POST['company-name'] != '' ){
            $companyName = $_POST['company-name'];
        }

        if ( isset($_POST['test-date']) && $_POST['test-date'] != '' ){
            $startDate = $_POST['test-date'];
        }

        // if ( isset($_POST['service-description']) && $_POST['service-description'] != '' ){
        //     $serviceDescription = $_POST['service-description'];
        // }

        if ( isset($_POST['number-of-days']) && $_POST['number-of-days'] != '' ){
            $numberOfDays = $_POST['number-of-days'];
        }

        if ( isset($_POST['scope']) && $_POST['scope'] != '' ){
            $scopeOfService = $_POST['scope'];
        }

        if ( isset($_POST['service-type']) && $_POST['service-type'] != '' ){
            $typeOfService = $_POST['service-type'];
        }

        // if ( isset($_POST['methodologies']) && $_POST['methodologies'] != '' ){
        //     $methodologies = $_POST['methodologies'];
        // }

        // if ( isset($_POST['assessment-type']) && $_POST['assessment-type'] != '' ){
        //     $typeofAssessments = $_POST['assessment-type'];
        // }
    }

    // die();

    // FIXED 

    
    $serviceDescription = str_replace(",", ", ",implode(",", $typeOfService));

    $accountManagerNumber = "020 3951 0299"; // FIXED

    // $accountManagerName = "Mr Account Manager";
    // $accountManagerEmail = "accountsmanager@rtp.co";
    // $accountManagerNumber = '';
    // $companyDescription = 'Lorem Impsum Dolor Amet';
    // $reasonForTesting = 'This is some sample reason for testing for the purpose of testing only.';
    // $clientContactName = "Mr Client ABC";
    // $companyName = 'Company XYZ';
    // $startDate = '12/12/2021';
    // $serviceDescription = 'Service 007';
    // $numberOfDays = '10';

    // $scopeOfService = '';
    // // $typeOfService = '';
    // $methodologies = '';


    // // NOT IN FORM
    // $typeofAssessments = 'Sample Type of Assessment'; // could this be type of services in form?
    // $clientContactNumber = "092457851452";
    // $clientContactEmail = "mrclientabc@testcompany.co";
    // $rtpRepName = "Mr. Expert Test";
    // $rtpRepNumber = "1234567890";
    // $rtpRepEmail = "rtp@test.co";

    // foreach( $_POST as $stuff => $val) {
    //     echo '<br />' . $stuff . ': ' . $val . '<br />';
    // }
    // die();


    // Creating the new document...
    $phpWord = new \PhpOffice\PhpWord\PhpWord();
    // helper 
    $converter = new \PhpOffice\PhpWord\Shared\Converter();
    // force update to reflect correct page number in TOC.
    $phpWord->getSettings()->setUpdateFields(true);

    //############################### DOCUMENT SETTINGS AND DEFINING STYLES ###############################

    // SETTING THE META DATA OF THE DOCUMENT
    // $properties = $phpWord->getDocInfo();
    // $properties->setCreator( get_ebook_author() );
    // $properties->setCompany( get_ebook_author() );
    // $properties->setTitle( get_ebook_title() );
    // $properties->setDescription( get_ebook_description() );
    // $properties->setCreated( get_ebook_date_created() );
    // $properties->setModified( time() );


    // GENERAL SETTINGS
    $phpWord->setDefaultFontName( 'Times New Roman' );
    $phpWord->setDefaultFontSize( 12 );
    $phpWord->setDefaultParagraphStyle( array(
       'lineHeight' => 1.3,
    ) );

    $phpWord->addNumberingStyle(
        'hNum',
        array(
           'type'   => 'multilevel',
           'levels' => array(
                array('pStyle' => 'Heading1', 'format' => 'decimal', 'text' => '%1'),
                array('pStyle' => 'Heading2', 'format' => 'decimal', 'text' => '%1.%2'),
                array('pStyle' => 'Heading3', 'format' => 'decimal', 'text' => '%1.%2.%3'),
           )
        )
     );


    // adding the necessary font styles
    // Define styles
    $TOCFontStyle = array('spaceAfter' => 60, 'size' => 14);
    $phpWord->addTitleStyle(null, array('size' => 24, 'bold' => true));
    $phpWord->addTitleStyle(1, array('size' => 24, 'color' => '000000', 'bold' => true));
    $phpWord->addTitleStyle(2, array('size' => 20, 'color' => '333333', 'italic'=>true));
    // $phpWord->addTitleStyle(3, array('size' => 14, 'italic' => true));
    // $phpWord->addTitleStyle(4, array('size' => 12));
    
    //adding the necessary header/title styles
    // $phpWord->addTitleStyle(1, array('name'=>'HelveticaNeueLT Std Med', 'size'=>16, 'color'=>'red')); //h1
    // $phpWord->addTitleStyle(2, "font_h2"); //h2
    // $phpWord->addTitleStyle(3, "font_h3"); //h3

    //adding the necessary paragraph styles
    $phpWord->addParagraphStyle('paragraph_default', array('spaceBefore' => 0, 'spaceAfter' => 0));
    

    // General Settings
    // $phpWord->setDefaultFontName('Times New Roman');
    // $phpWord->setDefaultFontSize(14);


    // template colors
    $paletteRed = 'D31439';
    $defaultTableStyle = array(
        'unit'=>'pct', 
        'width' => 5000,
        'alignment' => 'center',
        'borderSize'=>0
    );
    
    $defaultFontStyle = array(
        'size' => 14,
    );

    $headerImageStyle = array(
        'width'         => 109,
        'height'        => 26,
        'marginTop'     => -2,
        'marginRight'    => -1,
        'wrappingStyle' => 'behind',
        'alignment' => 'right',
    );

    $footerTextStyle = array(
        'size' => 9,
    );

    $quoteFontStyle = array(
        'italic'=> true,
        'color'=> '696969',
        'size'=>12
    );

    $quoteParagraphStyle = array(
        'alignment'=>'right',
        'size'=>12
    );

    $servicesFontStyle = array(
        'color'=>'D4173D',
        'italic'=>true,
    );

    $servicesParagraphStyle = array(
        'alignment'=>'center'
    );

    $coverCreatedCellStyle = array('bgColor'=>'494849');

    $footerText = 'Company Number: 09923929 | Registered Address: One Canada Square, Canary Wharf London, E14 5AB | Phone Number: 0203 951 0299 | Email: info@redteampartners.co.uk | Website: www.redteampartners.co.uk';

    //############################### COVER PAGE ###############################

    $cellRowSpan = array('vMerge' => 'restart', 'valign' => 'center', 'bgColor' => $paletteRed);

    $coverPage = $phpWord->addSection();
    
    $cellStyle3 = array(
        'valign'=>'center', 
        'bgColor'=>'FFFF',
        'borderTopSize'=> 15,
        'borderBottomSize'=>15,
        'borderColor' => '000000'
    );

    $sectionTitleStyle = array(
        'bold'=>true,
        'color'=>'000000',
        'size'=>26,
    );

    $sectionTitleParagraphStyle = array(
        'alignment'=>'center'
    );

    $table = $coverPage->addTable($defaultTableStyle);
    $table->addRow();
    $cell = $table->addCell(6000, $cellRowSpan);

    
    $table2 = $coverPage->addTable(array('cellMarginTop'=>150, 'cellMarginBottom'=>150, 'width' => 5000, 'unit' => 'pct'));
    $table2->addRow();
    $cell2 = $table2->addCell(6000);
    $cell2->addText(''); // spacer
    $cell2->addImage(
        'assets/images/rtp-logo.png',
        array(
            'width'         => 200,
            // 'height'        => 52,
            'marginTop'     => 2,
            'marginLeft'    => -1,
            'wrappingStyle' => 'behind',
            'alignment' => 'center',
        )
    );

    $table3 = $coverPage->addTable(array('cellMarginTop'=>500, 'cellMarginBottom'=>500));
    $table3->addRow();
    $cell3 = $table3->addCell(6000, $cellStyle3);
    $cell3->addText('Proposal', $sectionTitleStyle, $sectionTitleParagraphStyle);    

    $coverPage->addTextBreak(1);
    
    $confidentialityTable = $coverPage->addTable(
        array(
            'cellMarginTop'  => 300,
            'cellMarginBottom' => 300,
            'cellMarginLeft' => 200,
            'cellMarginRight' => 200,
            'alignment'   => 'center',
            'width' => 5000,
            'unit' => 'pct'
        )
    );
    $confidentialityTable->addRow();
    $confidentialityTableCell = $confidentialityTable->addCell(4000, array('bgColor'=>$paletteRed));
    $confidentialityTableCell->addText('Confidentiality Notice', 
        array(
            'bold'=>true,
            'color'=>'FFFFFF',
            'size'=>18,
        )
    );
    $confidentialityTableCell->addText('All the material contained herein is considered a confidential trade secret of the proposal submitter. Therefore, the readers/reviewer shall take diligent steps to protect, store and safely review this material without disclosure to unauthorized third parties.', array(
        'color'=>'FFFFFF',
        'size'=>14,
    ));
   

    $coverPage->addTextBreak(2);
    
    $coverCreatedByTable = $coverPage->addTable(
        array(
            'width' => 5000,
            'unit' => 'pct',
            'bgColor' => '9966CC',
            'cellSpacing' => 0,
            'bgColor'=>'494849',
            'borderSize'=>0,
            'borderColor'=>'494849',
            'cellMarginTop' => 110,
            'cellMarginLeft' => 125
        )
    );

    $coverCreatedVariableFontStyle = array(
        'color'=>'FFFFFF',
        'size'=>12,
    );

    $coverCreatedVariableParagraphStyle = array(
        'indent'=>1
    );

    $coverCreatedByTable->addRow();
    $coverCreatedByTable->addCell(2250, $coverCreatedCellStyle)->addText('Created By:', array('color'=>'FFFFFF', 'bold'=>true, 'size'=>14), array('indent'=>0.5));
    $coverCreatedByTable->addCell(2250, $coverCreatedCellStyle)->addText('Created For:', array('color'=>'FFFFFF', 'bold'=>true, 'size'=>14), array('indent'=>0.5));

    $coverCreatedByTable->addRow();
    $coverCreatedByTable->addCell(2250, $coverCreatedCellStyle)->addText($accountManagerName, $coverCreatedVariableFontStyle, $coverCreatedVariableParagraphStyle );
    $coverCreatedByTable->addCell(2250, $coverCreatedCellStyle)->addText($clientContactName, $coverCreatedVariableFontStyle, $coverCreatedVariableParagraphStyle );

    $coverCreatedByTable->addRow();
    $coverCreatedByTable->addCell(2250, $coverCreatedCellStyle)->addText('Red Team Partners', $coverCreatedVariableFontStyle, $coverCreatedVariableParagraphStyle );
    $coverCreatedByTable->addCell(2250, $coverCreatedCellStyle)->addText($companyName, $coverCreatedVariableFontStyle, $coverCreatedVariableParagraphStyle );

    $coverPage->addTextBreak(3);

    $coverFillerTable = $coverPage->addTable($defaultTableStyle);
    $coverFillerTable->addRow();
    $coverFillerTable->addCell(6000, $cellRowSpan);


    //############################### END COVER PAGE ###############################



    //############################### INTRO PAGE ###############################

    $introPage = $phpWord->addSection();
    $introPage->getStyle()->setPageNumberingStart(1);
    $introPageHeader = $introPage->addHeader();
    $introPageHeader->addImage( 'assets/images/rtp-logo.png', $headerImageStyle);

    $introPage->addText($companyName, $defaultFontStyle);
    $introPage->addTextBreak();
    $introPage->addText('The increase in cyber-attacks has driven companies to rethink their security strategy, some of your most valuable assets are online and need to be protected against external and internal threats.', $defaultFontStyle);
    $introPage->addText('Red Team Partners will help you in this everchanging landscape. With a world-wide team of cyber security experts combined with the latest technology and processes, Red Team Partners will partner with you to make sure your digital assets are protected. We understand how hackers and external threats can harm your organisation; Red Team Partner looks to provide you with an insight into how these risks can be remediated.', $defaultFontStyle);

    $introPageFooter = $introPage->addFooter();
    $introPageFooter->addTextRun()->addText($footerText, $footerTextStyle);
    $introPageFooter->addPreserveText('{PAGE}', null, array('alignment' => 'center'));

    //############################### END INTRO PAGE ###############################


    //############################### TABLE OF CONTENTS PAGE ###############################

    $TOCPage = $phpWord->addSection();
    $TOCPagePageHeader = $TOCPage->addHeader();
    $TOCPagePageHeader->addImage( 'assets/images/rtp-logo.png', $headerImageStyle);

    // Add text elements
    $TOCPage->addTitle('Table of Contents', 0);
    $TOCPage->addTextBreak();

    // Add TOC #1
    $toc = $TOCPage->addTOC($TOCFontStyle);
    
    $toc->setMinDepth( 1 );
    $toc->setMaxDepth( 2 );

    $TOCPage->addTextBreak(2);

    $TOCPageFooter = $TOCPage->addFooter();
    $TOCPageFooter->addTextRun()->addText($footerText, $footerTextStyle);
    $TOCPageFooter->addPreserveText('{PAGE}', null, array('alignment' => 'center'));

    //############################### END TABLE OF CONTENTS PAGE ###############################

    //############################### PROPOSAL DETAILS PAGE ###############################

    $proposalDetailsPage = $phpWord->addSection();
    
    // HEADER PART
    $proposalDetailsPageHeader = $proposalDetailsPage->addHeader();
    $proposalDetailsPageHeader->addImage( 'assets/images/rtp-logo.png', $headerImageStyle);

    // BODY PART
    $typeAssessmentTable = $proposalDetailsPage->addTable(
        array(
            'width' => 5000,
            'unit' => 'pct',
            'bgColor' => '9966CC',
            'cellSpacing' => 0,
            'bgColor'=>'494849',
            'borderSize'=>0,
            'cellMargin' => 100
        )
    );


    // $typeOfServiceString = implode(",", $typeOfService);
    // var_dump($typeOfServiceString);
    // var_dump(gettype($typeOfService));

    
    // die();

    $typeAssessmentTable->addRow();
    $typeAssessmentTable->addCell(1500, array('bgColor'=>'CE4E4E'))->addText('Type of Assessment(s):', array('color'=>'FFFFFF'));
    $typeAssessmentCell = $typeAssessmentTable->addCell(3500, array('bgColor'=>'F5B7A6'));
    foreach ($typeOfService as $key) {
        $typeAssessmentCell->addListItem($key, 0);
    }
    // $typeAssessmentCell->addListItem();

    $typeAssessmentTable->addRow();
    $typeAssessmentTable->addCell(1500, array('bgColor'=>'CE4E4E'))->addText('Recommended Start Date:', array('color'=>'FFFFFF'));
    $typeAssessmentTable->addCell(3500, array('bgColor'=>'F5B7A6'))->addText($startDate);

    $proposalDetailsPage->addTextBreak(2);

    $RTPfillUpFormTable = $proposalDetailsPage->addTable(
        array(
            'width' => 5000,
            'unit' => 'pct',
            'bgColor' => '9966CC',
            'cellSpacing' => 0,
            'bgColor'=>'494849',
            'borderSize'=>0,
            'cellMargin' => 100
        )
    );

    $RTPfillUpFormTable->addRow();
    $RTPfillUpFormTable->addCell(5000, array('gridSpan'=> 2, 'bgColor'=>'CE4E4E'))->addText('Red Team Partners', array('color'=>'FFFFFF', 'bold'=>true) , array('align'=>'center') );
    
    $RTPfillUpFormTable->addRow();
    $RTPfillUpFormTable->addCell(1000, array('bgColor'=>'F5B7A6'))->addText('Contact Name:');
    $RTPfillUpFormTable->addCell(4000)->addText($accountManagerName);
    
    $RTPfillUpFormTable->addRow();
    $RTPfillUpFormTable->addCell(1000, array('bgColor'=>'F5B7A6'))->addText('Number:');
    $RTPfillUpFormTable->addCell(4000)->addText($accountManagerNumber);

    $RTPfillUpFormTable->addRow();
    $RTPfillUpFormTable->addCell(1000, array('bgColor'=>'F5B7A6'))->addText('Email:');
    $RTPfillUpFormTable->addCell(4000)->addText($accountManagerEmail);


    $proposalDetailsPage->addTextBreak();

    $companyfillUpFormTable = $proposalDetailsPage->addTable(
        array(
            'width' => 5000,
            'unit' => 'pct',
            'bgColor' => '9966CC',
            'cellSpacing' => 0,
            'bgColor'=>'494849',
            'borderSize'=>0,
            'cellMargin' => 100
        )
    );    


    $companyfillUpFormTable->addRow();
    $companyfillUpFormTable->addCell(5000, array('gridSpan'=> 2, 'bgColor'=>'CE4E4E'))->addText($companyName, array('color'=>'FFFFFF', 'bold'=>true) , array('align'=>'center') );
    
    $companyfillUpFormTable->addRow();
    $companyfillUpFormTable->addCell(1000, array('bgColor'=>'F5B7A6'))->addText('Contact Name:');
    $companyfillUpFormTable->addCell(4000)->addText($clientContactName);
    
    $companyfillUpFormTable->addRow();
    $companyfillUpFormTable->addCell(1000, array('bgColor'=>'F5B7A6'))->addText('Number:');
    $companyfillUpFormTable->addCell(4000)->addText($clientContactNumber);

    $companyfillUpFormTable->addRow();
    $companyfillUpFormTable->addCell(1000, array('bgColor'=>'F5B7A6'))->addText('Email:');
    $companyfillUpFormTable->addCell(4000)->addText($clientContactEmail);

    $proposalDetailsPage->addTextBreak();


    $proposalDetailsPage->addText('This proposal has been prepared exclusively for ' .$companyName. ' and contains information that should be considered the confidential property of Red Team Partners.', $defaultFontStyle);

    $proposalDetailsPage->addText('Red Team Partners gives permission to internally and to any other body where ' .$companyName. ' is required to do so by applicable law or regulation. Other than as permitted by the foregoing, this proposal must not be disclosed to any third party.', $defaultFontStyle);

    // FOOTER PART
    $proposalDetailsPageFooter = $proposalDetailsPage->addFooter();
    $proposalDetailsPageFooter->addTextRun()->addText($footerText, $footerTextStyle);
    $proposalDetailsPageFooter->addPreserveText('{PAGE}', null, array('alignment' => 'center'));

    //############################### END PROPOSAL DETAILS PAGE ###############################

    //############################### PROJECT SUMMARY PAGE ###############################

    
    // HEADER PART
    $projectSummaryPage = $phpWord->addSection();
    $projectSummaryPageHeader = $projectSummaryPage->addHeader();
    $projectSummaryPageHeader->addImage( 'assets/images/rtp-logo.png', $headerImageStyle);

    $projectSummaryPage->addTitle('Project Summary', 1); // TOC Bookmark 
    $projectSummaryPage->addTextBreak();
    
    // BODY PART
    $projectSummaryPage->addText($companyName. ' provides '. $companyDescription .'.  Currently, '.$companyName.' requires ' .$reasonForTesting.'. Part of this project includes '.$serviceDescription.' to these tests are performed to ensure best security practices. '.$companyName.' have requested Red Team Partners to conduct '.$serviceDescription.' to identify any potential risk and suggested remediations. ', $defaultFontStyle);
    $projectSummaryPage->addText('Red Team Partners has a specialist team that has a wealth of experience assessing security postures and finding vulnerabilities in organisations that are driving a cyber security strategy. Red Team Partners world class team focus exclusively on some of most important cyber security movements within an organisation involving implementation, systems, infrastructure and applications.', $defaultFontStyle);
    $projectSummaryPage->addText('Red Team Partners are positioned as a partner of '.$companyName.' to help work together in assisting the security maturity of the organisation. Our world-wide specialist team allow us to work within timeframes that best suit you, including a 24-hour turnaround time for those immediate scenarios.', $defaultFontStyle);
    $projectSummaryPage->addText('For '.$companyName.' we understand the security of your assets is a vital process in your business. A breach can have a catastrophic impact on your brand reputation and overall revenue. Red Team Partners has been approached to conduct the following services - '.$serviceDescription.' which allow '.$companyName.' to understand vulnerabilities and risks including concise actions and how to address them.', $defaultFontStyle);
    $projectSummaryPage->addText('Red Team Partners will act as your partner (It’s in the name). Our team of world-class experts will provide a custom test based on your requirements and deliver a clear roadmap of recommendations for change. We confidently update our world class methodologies and technologies to combat new threats.', $defaultFontStyle);
    

    // FOOTER PART
    $projectSummaryPageFooter = $projectSummaryPage->addFooter();
    $projectSummaryPageFooter->addTextRun()->addText($footerText, $footerTextStyle);
    $projectSummaryPageFooter->addPreserveText('{PAGE}', null, array('alignment' => 'center'));

    //############################### END PROJECT SUMMARY PAGE ###############################


    //############################### OUR APPROACH PAGE ###############################


    $ourApproachPage = $phpWord->addSection();
    $ourApproachPageHeader = $ourApproachPage->addHeader();
    $ourApproachPageHeader->addImage( 'assets/images/rtp-logo.png', $headerImageStyle);

    $ourApproachPage->addTitle('Our Approach', 1); // TOC Bookmark 
    $ourApproachPage->addTextBreak();

    $multilevelNumberingStyleName = 'multilevel';
    $phpWord->addNumberingStyle(
        $multilevelNumberingStyleName,
        array(
            'type'   => 'multilevel',
            'levels' => array(
                array('format' => 'decimal', 'text' => '%1.', 'left' => 360, 'hanging' => 360, 'tabPos' => 360),
                array('format' => 'upperLetter', 'text' => '%2.', 'left' => 720, 'hanging' => 360, 'tabPos' => 720),
            ),
        )
    );

    $predefinedMultilevelStyle = array('listType' => \PhpOffice\PhpWord\Style\ListItem::TYPE_NUMBER_NESTED);

    $ourApproachPage->addText('Our key outcomes for this proposal are:');
    $ourApproachPage->addListItem('Provide '.$companyName.' with an understanding of their security stage of their current environment.', 0);
    $ourApproachPage->addListItem('Red Team Partners would like to propose a date of (Date of test – Month) to start conducting test, this date has been discussed with '.$clientContactName .'.', 0);
    $ourApproachPage->addListItem('After testing has been conducted our world-class team will independently verify the report and provide security risks including:', 0);
    $ourApproachPage->addListItem('That '.$companyName.' security posture is being met through policies, procedure and design ', 1);
    $ourApproachPage->addListItem('Vulnerabilities facing '.$companyName.' are highlighted to understand the risk rating and measured to show the key areas to focus on with the organisation.', 1);
    $ourApproachPage->addListItem('Guidance on best practices for regulation', 1);
    $ourApproachPage->addListItem('Exploitation of threats that could be exploited by a bad actor compromising '.$companyName.' systems and data.', 1);
    $ourApproachPage->addListItem('Red Team Partners will focus on key weaknesses to evaluate the probability of an exploitation of each security vulnerability, then creating an action plan to reduce the risk and mitigate the vulnerability. ', 1);
    $ourApproachPage->addTextBreak(2);

    // QUOTABLE QUOTES
    $ourApproachPage->addTextBreak();
    $ourApproachPage->addText('“Red Team Partners have been an integral part of validating and testing our InfoSec strategy. Flexible, agile and always ready to provide insights on the latest industry threats and attack vectors, Red Team Partners provide a personalised service that continues to evolve and adapt to our company\'s rapid growth.”', $quoteFontStyle, $quoteParagraphStyle);
    $ourApproachPage->addText('- Oil and Gas Industry Client', array('bold'=>true, 'italic'=>true), $quoteParagraphStyle);


    $ourApproachPageFooter = $ourApproachPage->addFooter();
    $ourApproachPageFooter->addTextRun()->addText($footerText, $footerTextStyle);
    $ourApproachPageFooter->addPreserveText('{PAGE}', null, array('alignment' => 'center'));

    //############################### END OUR APPROACH PAGE ###############################


    //############################### WHAT MAKES US DIFFERENT PAGE ###############################

    $whatMakesUsDifferentPage = $phpWord->addSection();
    $whatMakesUsDifferentPageHeader = $whatMakesUsDifferentPage->addHeader();
    $whatMakesUsDifferentPageHeader->addImage( 'assets/images/rtp-logo.png', $headerImageStyle);

    $whatMakesUsDifferentPage->addTitle('What Makes Us Different?', 1); // TOC Bookmark 
    $whatMakesUsDifferentPage->addTextBreak();

    $whatMakesUsDifferentPage->addText('With other provider offering services, why choose us?', array('italic'=>true, 'bold'=>true, 'size'=>14));
    $whatMakesUsDifferentPage->addTextBreak();
    
    $whatMakesUsDifferentPage->addText('Deeper Customer Experience', array('bold'=>true));
    $whatMakesUsDifferentPage->addListItem('We understand that conducting a (Service) can be overwhelming, one of Red Team Partners pillars of its foundation is to go beyond helping our customers achieve their desired outcomes through an easy-to-understand process and constant available communication with our team. You can be sure that our customer service and experience goes beyond traditional providers.',0 ,null, array('format'=>'bullet'));
    $whatMakesUsDifferentPage->addTextBreak();

    $whatMakesUsDifferentPage->addText('Better Availability and Capabilities', array('bold'=>true));
    $whatMakesUsDifferentPage->addListItem('Experience in testing is a key differentiator, Red Team Partners has a worldwide based testing team that is engaged to update our methods using latest technologies and testing techniques. You can be sure that our experts are practised, accredited and professional with contributions to the cyber security.',0 ,null, array('format'=>'bullet'));
    $whatMakesUsDifferentPage->addTextBreak();

    $whatMakesUsDifferentPage->addText('Manual Testing', array('bold'=>true));
    $whatMakesUsDifferentPage->addListItem('Most organisations offer automating scanning services, Red Team Partners offers 80% manual testing and 20% using tools. Our results produce a deeper in-depth report avoiding the risk of missing a crucial vulnerability. Using world leading research our methods of testing can be identified as methods of identified worldwide hacks.',0 ,null, array('format'=>'bullet'));
    $whatMakesUsDifferentPage->addTextBreak();

    $whatMakesUsDifferentPage->addText('Capacity', array('bold'=>true));
    $whatMakesUsDifferentPage->addListItem('To our Worldwide customers and consultants, we can offer a 24 hour turn around service, ensuring that when you need us most, we are available to help. When you combine this with our cyber security experts and customer experience you can understand why 96% of companies use Red Team Partners again.',0 ,null, array('format'=>'bullet'));
    $whatMakesUsDifferentPage->addTextBreak();

    $whatMakesUsDifferentPage->addText('Client Focused', array('bold'=>true));
    $whatMakesUsDifferentPage->addListItem('Red Team Partners aim is to advise you according to best standard security practices, any advise provided will be in the best interest of the customer experience. Red Team Partners will work with you to ensure the experience of our team is provided throughout your service, with multiple qualifications and out of the box thinking we will use our expertise to you provide the best quality test available.',0 ,null, array('format'=>'bullet'));
    $whatMakesUsDifferentPage->addTextBreak();

    // QUOTABLE QUOTES
    $whatMakesUsDifferentPage->addTextBreak();
    $whatMakesUsDifferentPage->addText('"I’ve been in the industry for more than 20 years and I am not impressed easily, but my client support experience with RTP has made a positive and lasting impression. They are attentive to my questions, even the ones I may have asked last month, always helpful and never rush the conversation. I’m sure that’s all part of the job description but RTP truly exemplifies commitment when it comes to helping me and my organization."', $quoteFontStyle, $quoteParagraphStyle);
    $whatMakesUsDifferentPage->addText('- Financial Services Customer', array('bold'=>true, 'italic'=>true), $quoteParagraphStyle);
    $whatMakesUsDifferentPage->addTextBreak(3);

    $whatMakesUsDifferentPage->addText('Next Steps', array('size'=>16, 'bold'=>true));
    $whatMakesUsDifferentPage->addText('When you are ready to ahead, please inform your account manager '. $accountManagerName .' using the details below. You will be introduced to our delivery 
    team who will confirm the start date of the test and statement of works.');
    $whatMakesUsDifferentPage->addText('Thank you for your business, we look forward to working with you.');

    $nextStepsTable = $whatMakesUsDifferentPage->addTable(array(
        'width' => 5000,
        'unit' => 'pct',
        'bgColor' => '9966CC',
        // 'cellSpacing' => 0,
        'bgColor'=>'494849',
        'borderSize'=>0,
        'cellMarginTop' => 100,
        'cellMarginLeft' => 50
    ));
    $nextStepsTable->addRow();
    $nextStepsTable->addCell(3000, array('bgColor'=>'CE4E4E'))->addText('Account Manager Name:', array('color'=>'FFFFFF'));
    $nextStepsTable->addCell(3000, array('bgColor'=>'F5B7A6'))->addText($accountManagerName);

    $nextStepsTable->addRow();
    $nextStepsTable->addCell(3000, array('bgColor'=>'CE4E4E'))->addText('Account Manager Email:', array('color'=>'FFFFFF'));
    $nextStepsTable->addCell(3000, array('bgColor'=>'F5B7A6'))->addText($accountManagerEmail);    
    
    $nextStepsTable->addRow();
    $nextStepsTable->addCell(3000, array('bgColor'=>'CE4E4E'))->addText('Account Manager Number:', array('color'=>'FFFFFF'));
    $nextStepsTable->addCell(3000, array('bgColor'=>'F5B7A6'))->addText($accountManagerNumber);    
    
    
    // FOOTER PART
    $whatMakesUsDifferentPageFooter = $whatMakesUsDifferentPage->addFooter();
    $whatMakesUsDifferentPageFooter->addTextRun()->addText($footerText, $footerTextStyle);
    $whatMakesUsDifferentPageFooter->addPreserveText('{PAGE}', null, array('alignment' => 'center'));

    //############################### END WHAT MAKES US DIFFERENT PAGE ###############################


    //############################### STATEMENT OF WORKS PAGE ###############################

    $statementOfWorksPage = $phpWord->addSection();
    $statementOfWorksPageHeader = $statementOfWorksPage->addHeader();
    $statementOfWorksPageHeader->addImage( 'assets/images/rtp-logo.png', $headerImageStyle);

    $statementOfWorksPage->addTitle('Statement of Works', 1); // TOC Bookmark 
    
    // BODY PART
    $statementOfWorksPage->addText('Red Team Partners will provide the services described in this scope. A final Statement of Works will be provided by the delivery team once the proposal has been accepted.');
    $statementOfWorksPage->addText('Understanding the Hamilton’s environment is key to performing the correct assessment. This section will contain the type of assessment requested.');
    $statementOfWorksPage->addTextBreak();

    //############################### SUB SECTIONS OF STATEMENT OF WORKS PAGE ###############################

    $statementOfWorksPage->addTitle('Scope', 2);
    $statementOfWorksPage->addText( $companyName. ' has requested Red Team Partners to conduct cyber security assessment for their (service). Red Team Partners and '.$companyName.' have identified the need for (service). These services have been based on the discussion conducted with ' .$clientContactName);
    $statementOfWorksPage->addTextBreak();
    
    $statementOfWorksPage->addTitle('Details of Scope', 2);
    $statementOfWorksPage->addText('Company has identified the following parameters for the test:');

    $detailsOfScopeTable = $statementOfWorksPage->addTable(array(
        'width' => 5000,
        'unit' => 'pct',
        'bgColor' => '9966CC',
        'cellSpacing' => 0,
        'bgColor'=>'494849',
        'borderSize'=>0,
        'cellMargin' => 100
    ));

    $detailsOfScopeTable->addRow();
    $detailsOfScopeTable->addCell(2000, array('bgColor'=>'CE4E4E'))->addText('Type of Tests:', array('color'=>'FFFFFF'));
    $detailsOfScopeTableCell = $detailsOfScopeTable->addCell(3000, array('bgColor'=>'F5B7A6'));
    $detailsOfScopeTableCell->addText('(TYPE OF TESTS HERE'); // Azsandra!
    
    // foreach ($typeOfService as $key) {
    //     $detailsOfScopeTableCell->addListItem($key);
    // }



    $detailsOfScopeTable->addRow();
    $detailsOfScopeTable->addCell(2000, array('bgColor'=>'CE4E4E'))->addText('Number of Days:', array('color'=>'FFFFFF'));
    $detailsOfScopeTable->addCell(3000, array('bgColor'=>'F5B7A6'))->addText($numberOfDays);

    $statementOfWorksPage->addTextBreak();
    $statementOfWorksPage->addText('(SCOPE LIST HERE)');

    $statementOfWorksPage->addPageBreak();
    $statementOfWorksPage->addText('Red Team Partners will use the following stages to undertake the service requested.', array('bold'=>true));

    $statementOfWorksPage->addImage('assets/images/RTP-stages.jpg', 
        array(
            'width'         => 450,
            'marginTop'     => 2,
            'marginLeft'    => -100,
            'wrappingStyle' => 'inline',
            'alignment' => 'center',
            'wrapDistanceLeft' => 100
        )
    );

    $statementOfWorksPage->addTextBreak(2);
    $statementOfWorksPage->addText('Our delivery team will work with you prior to the test to confirm scope and logistics of the service, rules of engagement will also be discussed at this stage.');

    $statementOfWorksPage->addPageBreak();

    $statementOfWorksPage->addTitle('Pre-Test', 2);
    $statementOfWorksPage->addText('Our delivery team will help schedule your test by providing the following:');
    
    $preTestListItemRunOne = $statementOfWorksPage->addListItemRun();
    $preTestListItemRunOne->addText('Scheduled Test Plan', array('bold' => true));
    $preTestListItemRunOne->addText(' – When requested we are able to provide scheduled test plans, these include critical requirements, credentials and test setup.');
    
    $preTestListItemRunTwo = $statementOfWorksPage->addListItemRun();
    $preTestListItemRunTwo->addText('Personnel Vetting', array('bold' => true));
    $preTestListItemRunTwo->addText(' – Our tester aligns with CREST and OSCP standards, background checks are regularly conducted by Red Team Partners.');
    
    $preTestListItemRunThree = $statementOfWorksPage->addListItemRun();
    $preTestListItemRunThree->addText('Third Party', array('bold' => true));
    $preTestListItemRunThree->addText(' – All third parties that are affected must be informed prior to test.');
    
    $preTestListItemRunFour = $statementOfWorksPage->addListItemRun();
    $preTestListItemRunFour->addText('Confirmation Dates', array('bold' => true));
    $preTestListItemRunFour->addText(' – Dates of test will be confirmed within the Statement of Works.');
    
    $preTestListItemRunFive = $statementOfWorksPage->addListItemRun();
    $preTestListItemRunFive->addText('Point of Contact', array('bold' => true));
    $preTestListItemRunFive->addText(' - Point of contact – A designated point of contact will be required to deal with any issues that arise. Your project manager will be your point of contact for Red Team Partners.');


    $statementOfWorksPage->addTitle('Assessment', 2);
    // $statementOfWorksPage->addPageBreak();

    $assessmentListItemRunOne = $statementOfWorksPage->addListItemRun();
    $assessmentListItemRunOne->addText('Test Environment', array('bold'=>true));
    $assessmentListItemRunOne->addText(' - Red Team Partners is careful to ensure performance of systems when cyber testing, we understand that systems are vital for the company and ensure measures to keep these systems operating during the testing window.');

    $assessmentListItemRunTwo = $statementOfWorksPage->addListItemRun();
    $assessmentListItemRunTwo->addText('Live Communication', array('bold'=>true));
    $assessmentListItemRunTwo->addText(' – We recognise that during your testing window that communication is key, our 24/7 communication platform allows you to contact your security expert for additional updates and related questions.');

    $assessmentListItemRunThree = $statementOfWorksPage->addListItemRun();
    $assessmentListItemRunThree->addText('Notifications of Vulnerabilities', array('bold'=>true));
    $assessmentListItemRunThree->addText(' – During the testing window if a critical vulnerability is found notifications will be sent to your point of contact through our communication platform to ensure remediation action.');

    $assessmentListItemRunFour = $statementOfWorksPage->addListItemRun();
    $assessmentListItemRunFour->addText('Data Handling', array('bold'=>true));
    $assessmentListItemRunFour->addText(' – All testing is performed in a secure laboratory adhering to ISO27001 requirements, only our testing personnel will have access to critical information.');


    $statementOfWorksPage->addTitle('Post-Test', 2);

    $postTestListItemRunOne = $statementOfWorksPage->addListItemRun();
    $postTestListItemRunOne->addText('Report Delivery', array('bold'=>true));
    $postTestListItemRunOne->addText(' - All reports are encrypted from source and are send to your registered point of contact, passwords are sent via SMS to ensure maximum security controls.');

    $postTestListItemRunTwo = $statementOfWorksPage->addListItemRun();
    $postTestListItemRunTwo->addText('Report Results', array('bold'=>true));
    $postTestListItemRunTwo->addText(' - Red Team Partners will provide a detailed report at the end of the engagement, our reports are quality controlled by certified testers. Using the traffic light system (Red=High, Yellow=Medium, Green=Low) your report will highlight any vulnerabilities/risks from this assessment.');

    $postTestListItemRunThree = $statementOfWorksPage->addListItemRun();
    $postTestListItemRunThree->addText('Data Removal', array('bold'=>true));
    $postTestListItemRunThree->addText(' - Once your test has been completed, we dispose of all information using CREST approved procedures and handling methods.');

    $postTestListItemRunFour = $statementOfWorksPage->addListItemRun();
    $postTestListItemRunFour->addText('Debrief', array('bold'=>true));
    $postTestListItemRunFour->addText(' - Red Team Partner encourages a debrief call with our tester to discuss any risk and remediation steps following the result of the report.');


    $statementOfWorksPageFooter = $statementOfWorksPage->addFooter();
    $statementOfWorksPageFooter->addTextRun()->addText($footerText, $footerTextStyle);
    $statementOfWorksPageFooter->addPreserveText('{PAGE}', null, array('alignment' => 'center'));

    //############################### END STATEMENT OF WORKS PAGE ###############################


    //############################### TYPE OF SERVICE PAGE ###############################

    $typeOfServicePage = $phpWord->addSection();
    $typeOfServicePageHeader = $typeOfServicePage->addHeader();
    $typeOfServicePageHeader->addImage( 'assets/images/rtp-logo.png', $headerImageStyle);

    $typeOfServicePage->addTitle('Type of Service(s):', 1); // TOC Bookmark 
    // $typeOfServicePage->addTextBreak();

    
    foreach ($typeOfService as $key) {
        # code...
        $typeOfServicePage->addListItem($key, 0);
    }
        



    $typeOfServicePageFooter = $typeOfServicePage->addFooter();
    $typeOfServicePageFooter->addTextRun()->addText($footerText, $footerTextStyle);
    $typeOfServicePageFooter->addPreserveText('{PAGE}', null, array('alignment' => 'center'));
    
    //############################### END TYPE OF SERVICE PAGE ###############################

    //############################### COSTING PAGE ###############################

    $costingPage = $phpWord->addSection();
    $costingPageHeader = $costingPage->addHeader();
    $costingPageHeader->addImage( 'assets/images/rtp-logo.png', $headerImageStyle);

    $costingPage->addTitle('Costing', 1); // TOC Bookmark 
    // $costingPage->addTextBreak();

    $costingPage->addText('Day Rate:', array('bold'=>true));
    $costingPage->addTextBreak();
    $costingPage->addText('Summary', array('bold'=>true));
    $costingPageTable = $costingPage->addTable(array(
        'width' => 5000,
        'unit' => 'pct',
        'bgColor' => '9966CC',
        'bgColor'=>'494849',
        'borderSize'=>0,
        // 'cellMarginTop' => $converter->inchToTwip(0),
        // 'cellMarginBottom' => $converter->inchToTwip(0),
        // 'cellMarginLeft' => $converter->inchToTwip(0.8),
        // 'cellMarginRight' => $converter->inchToTwip(0.8)
    ));


    // $detailsOfScopeTable->addCell(2000, array('bgColor'=>'CE4E4E'))->addText('Number of Days:', array('color'=>'FFFFFF'));
    // $detailsOfScopeTable->addCell(3000, array('bgColor'=>'F5B7A6'))->addText($numberOfDays);

    

    $costingPageTable->addRow();
    $costingPageTable->addCell(null, array('bgColor'=>'CE4E4E', 'valign'=>'center'))->addText('Phase 1', array('color'=>'FFFFFF', 'bold'=>true), array('alignment'=>'center'));
    $costingPageTable->addCell($converter->pixelToTwip(300), array('bgColor'=>'F5B7A6'))->addText('Activity', null, array('alignment'=>'center', 'bold'=>true));
    $costingPageTable->addCell(null, array('bgColor'=>'F5B7A6'))->addText('Days', null, array('alignment'=>'center', 'bold'=>true));
    $costingPageTable->addCell($converter->pixelToTwip(100), array('bgColor'=>'F5B7A6'))->addText('Price', null, array('alignment'=>'center', 'bold'=>true));

    $costingPageTable->addRow();
    $costingPageTable->addCell(null, array('bgColor'=>'CE4E4E'));
    $costingPageTable->addCell($converter->pixelToTwip(300), array('bgColor'=>'F5B7A6'));
    $costingPageTable->addCell(null, array('bgColor'=>'F5B7A6'));
    $costingPageTable->addCell($converter->pixelToTwip(100), array('bgColor'=>'F5B7A6'));

    $costingPageTable->addRow();
    $costingPageTable->addCell(null, array('bgColor'=>'CE4E4E', 'valign'=>'center'))->addText('TOTAL', array('color'=>'FFFFFF', 'bold'=>true), array('alignment'=>'center'));
    $costingPageTable->addCell($converter->pixelToTwip(300), array('bgColor'=>'F5B7A6'));
    $costingPageTable->addCell(null, array('bgColor'=>'F5B7A6'));
    $costingPageTable->addCell($converter->pixelToTwip(100), array('bgColor'=>'F5B7A6'));

    $costingPage->addTextBreak();

    $costingPage->addText('Pricing Notes:', array('bold'=>true, ));

    
    $costingPage->addListItem('Red Team Partners retains the right to charge for lost income in the event of postponed or cancelled work as mentioned in our Terms and Conditions.', 0);
    $costingPage->addListItem('100% of contract will be invoiced upon commencement of work.', 0);
    $costingPage->addListItem('Please send your Purchase Order (PO) to your account manager.', 0);
    $costingPage->addListItem('If the scope of this project chances, change requested and updated purchase order will be required.', 0);
    $costingPage->addListItem('All services are based remotely unless stated otherwise.', 0);
    $costingPage->addListItem('All testing will be undertaken during normal office hours, Monday to Friday (9am-6pm). Testing can be conducted out of hours and it will incur additional charges at 2x the day rate for evening, weekends and public holidays.',0);
    $costingPage->addTextBreak();


    $costingPage->addText('Our Approach', array('bold'=> true));
    $costingPage->addText('Red Team Partners conduct the following methodologies when conducting delivery of services.');

    $costingPageFooter = $costingPage->addFooter();
    $costingPageFooter->addTextRun()->addText($footerText, $footerTextStyle);
    $costingPageFooter->addPreserveText('{PAGE}', null, array('alignment' => 'center'));
    
    //############################### END COSTING PAGE ###############################

    //############################### METHODOLOGIES PAGE ###############################

    $methodologiesPage = $phpWord->addSection();
    $methodologiesPageHeader = $methodologiesPage->addHeader();
    $methodologiesPageHeader->addImage( 'assets/images/rtp-logo.png', $headerImageStyle);

    $methodologiesPage->addTitle('Methodologies', 1); // TOC Bookmark 
    // $methodologiesPage->addTextBreak();

    // DYNAMIC CONTENT



    foreach($typeOfService as $service) {

        if ($service === 'Web Application Penetration Testing') {
            $methodologiesPage->addText('--- insert Web Application Penetration Testing content ---');
        }

        if ($service === 'Red Team Assessment') {
            $methodologiesPage->addText('--- insert Red Team Assessment content ---');
        }

        if ($service === 'Vulnerability Assessment') {
            $methodologiesPage->addText('--- insert Vulnerability Assessment content ---');
        }

        if ($service === 'Infrastructure Testing') {
            $methodologiesPage->addText('--- insert Infrastructure Testing content ---');
        }

        if ($service === 'API Testing') {
            $methodologiesPage->addText('--- insert API Testing content ---');
        }

        if ($service === 'Mobile iOS and Android Testing') {
            $methodologiesPage->addText('--- insert Mobile iOS and Android Testing content ---');
        }

        if ($service === 'Phishing Simulation') {
            $methodologiesPage->addText('--- insert Phishing Simulation content ---');
        }

        if ($service === 'Documentation Review') {
            $methodologiesPage->addText('--- insert Documentation Review content ---');
        }

        if ($service === 'Firewall Assessment') {
            $methodologiesPage->addText('--- insert Firewall Assessment content ---');
        }

        if ($service === 'Cloud Based Configuration Review') {
            $methodologiesPage->addText('--- insert Cloud Based Configuration Review content ---');
        }

        if ($service === 'Wireless Network Audit') {
            $methodologiesPage->addText('--- insert Wireless Network Audit content ---');
        }

        if ($service === 'VPN Assessment') {
            $methodologiesPage->addText('--- insert VPN Assessment content ---');
        }

        if ($service === 'Build Review') {
            $methodologiesPage->addText('--- insert Build Review content ---');
        }

        if ($service === 'PCI DSS Compliance Audit') {
            $methodologiesPage->addText('--- insert PCI DSS Compliance Audit content ---');
        }

        if ($service === 'Secure Code Review') {
            $methodologiesPage->addText('--- insert Secure Code Review content ---');
        }

        if ($service === 'Cyber Security Training') {
            $methodologiesPage->addText('--- insert Cyber Security Training content ---');
        }

        if ($service === 'Forensics and Investigations') {
            $methodologiesPage->addText('--- insert Forensics and Investigations content ---');
        }

        if ($service === 'Dark Web Cyber Intelligence Monitoring') {
            $methodologiesPage->addText('--- insert Dark Web Cyber Intelligence Monitoring content ---');
        }

        if ($service === 'Performance Stress Testing/Load Testing') {
            $methodologiesPage->addText('--- insert Performance Stress Testing/Load Testing ---');
        }

        if ($service === 'IoT Penetration Testing') {
            $methodologiesPage->addText('--- insert IoT Penetration Testing content ---');
        }
    }

    $methodologiesPageFooter = $methodologiesPage->addFooter();
    $methodologiesPageFooter->addTextRun()->addText($footerText, $footerTextStyle);
    $methodologiesPageFooter->addPreserveText('{PAGE}', null, array('alignment' => 'center'));
    
    //############################### END METHODOLOGIES PAGE ###############################

    //############################### REPORTING PAGE ###############################

    $reportingPage = $phpWord->addSection();
    $reportingPageHeader = $reportingPage->addHeader();
    $reportingPageHeader->addImage( 'assets/images/rtp-logo.png', $headerImageStyle);

    $reportingPage->addTitle('Reporting', 1); // TOC Bookmark 
    // $reportingPage->addTextBreak();

    $reportingPage->addText('After the assessment has been completed Red Team Partners will evaluate any vulnerabilities detected and evaluate their risk rating. These vulnerabilities will be formulated and presented with next step actions to mitigate the risks linked to the final report.');
    $reportingPage->addTextBreak();

    $reportingPageTable = $reportingPage->addTable(array(
            'width' => 5000,
            'unit' => 'pct',
            'borderColor' => 'FFFFFF',
            'cellSpacing' => 0,
            'bgColor'=>'494849',
            'borderSize'=>0,
            'cellMargin' => 100
        )
    );

    $reportingPageTable->addRow();
    $reportingPageTable->addCell(500, array('bgColor'=>'CE4E4E', 'valign'=>'center'))->addText('Colour', array('bold'=>true, 'color'=>'FFFFFF', 'italic'=>true), array('alignment'=>'center') );
    $reportingPageTable->addCell(1000, array('bgColor'=>'CE4E4E', 'valign'=>'center'))->addText('Risk Rating', array('bold'=>true, 'color'=>'FFFFFF'), array('alignment'=>'center') );
    $reportingPageTable->addCell(1000, array('bgColor'=>'CE4E4E', 'valign'=>'center'))->addText('CVSSv2 Score', array('bold'=>true, 'color'=>'FFFFFF'), array('alignment'=>'center') );
    $reportingPageTable->addCell(2500, array('bgColor'=>'CE4E4E', 'valign'=>'center'))->addText('Explanation', array('bold'=>true, 'color'=>'FFFFFF'), array('alignment'=>'center') );

    $reportingPageTable->addRow();
    $reportingPageTable->addCell(500, array('bgColor'=>'7030A0', 'valign'=>'center'))->addText('Purple', array('italic'=>true, 'color'=>'FFFFFF'), array('alignment'=>'center'));
    $reportingPageTable->addCell(1000, array('bgColor'=>'E6CEEE', 'valign'=>'center'))->addText('Critical', null, array('alignment'=>'center'));
    $reportingPageTable->addCell(1000, array('bgColor'=>'E6CEEE', 'valign'=>'center'))->addText('9.0-10.0', null, array('alignment'=>'center'));
    $reportingPageTable->addCell(2500, array('bgColor'=>'E6CEEE', 'valign'=>'center'))->addText('This requires resolution as quickly as possible.', null, array('alignment'=>'center'));

    $reportingPageTable->addRow();
    $reportingPageTable->addCell(500, array('bgColor'=>'FF0000', 'valign'=>'center'))->addText('Red', array('italic'=>true, 'color'=>'FFFFFF'), array('alignment'=>'center'));
    $reportingPageTable->addCell(1000, array('bgColor'=>'FADAD2', 'valign'=>'center'))->addText('High', null, array('alignment'=>'center'));
    $reportingPageTable->addCell(1000, array('bgColor'=>'FADAD2', 'valign'=>'center'))->addText('7.0-8.9', null, array('alignment'=>'center'));
    $reportingPageTable->addCell(2500, array('bgColor'=>'FADAD2', 'valign'=>'center'))->addText('This requires resolution in the near future.', null, array('alignment'=>'center'));

    $reportingPageTable->addRow();
    $reportingPageTable->addCell(500, array('bgColor'=>'FFC000', 'valign'=>'center'))->addText('Orange', array('italic'=>true, 'color'=>'FFFFFF'), array('alignment'=>'center'));
    $reportingPageTable->addCell(1000, array('bgColor'=>'FFE4B5', 'valign'=>'center'))->addText('Medium', null, array('alignment'=>'center'));
    $reportingPageTable->addCell(1000, array('bgColor'=>'FFE4B5', 'valign'=>'center'))->addText('4.0-6.9', null, array('alignment'=>'center'));
    $reportingPageTable->addCell(2500, array('bgColor'=>'FFE4B5', 'valign'=>'center'))->addText('This requires resolution in the medium term.', null, array('alignment'=>'center'));

    $reportingPageTable->addRow();
    $reportingPageTable->addCell(500, array('bgColor'=>'00B0F0', 'valign'=>'center'))->addText('Blue', array('italic'=>true, 'color'=>'FFFFFF'), array('alignment'=>'center'));
    $reportingPageTable->addCell(1000, array('bgColor'=>'C5F0FF', 'valign'=>'center'))->addText('Low', null, array('alignment'=>'center'));
    $reportingPageTable->addCell(1000, array('bgColor'=>'C5F0FF', 'valign'=>'center'))->addText('1.0-3.9', null, array('alignment'=>'center'));
    $reportingPageTable->addCell(2500, array('bgColor'=>'C5F0FF', 'valign'=>'center'))->addText('This requires resolution as part as routine maintenance.', null, array('alignment'=>'center'));

    $reportingPageTable->addRow();
    $reportingPageTable->addCell(500, array('bgColor'=>'00B050', 'valign'=>'center'))->addText('Green', array('italic'=>true, 'color'=>'FFFFFF'), array('alignment'=>'center'));
    $reportingPageTable->addCell(1000, array('bgColor'=>'C3F9CD', 'valign'=>'center'))->addText('Informational', null, array('alignment'=>'center'));
    $reportingPageTable->addCell(1000, array('bgColor'=>'C3F9CD', 'valign'=>'center'))->addText('0-0.9', null, array('alignment'=>'center'));
    $reportingPageTable->addCell(2500, array('bgColor'=>'C3F9CD', 'valign'=>'center'))->addText('This requires resolution to be in line with best practices.', null, array('alignment'=>'center'));

    $reportingPage->addTextBreak();
    $reportingPage->addText('Our reports our presented for management and technical personal');

    $reportingPage->addPageBreak();

    $managementSummaryTextRun = $reportingPage->addTextRun();
    $managementSummaryTextRun->addText('Management Summary', array('bold'=>true));
    $managementSummaryTextRun->addText(' – a high level summary of results including recommendations and overall security posture. This summary is simple and easy to understand it included critical issues found and allows non-technical executives to understand the issues.');

    $reportingPage->addImage(
        'assets/images/management-summary.jpg',
        array(
            'width'         => 300,
            'marginTop'     => 2,
            'marginLeft'    => -1,
            'wrappingStyle' => 'behind',
            'alignment' => 'center',
        )
    );

    $reportingPage->addTextBreak(2);

    $technicalFindingsTextRun = $reportingPage->addTextRun();
    $technicalFindingsTextRun->addText('Technical Findings', array('bold'=>true));
    $technicalFindingsTextRun->addText(' – breakdown of vulnerabilities found during testing phase including exploitation probability, technical fix and risk mitigation advice. Prioritised risks are provided to deal with most actionable suggestions.');

    $reportingPage->addImage(
        'assets/images/technical-findings.jpg',
        array(
            'width'         => 300,
            'marginTop'     => 2,
            'marginLeft'    => -1,
            'wrappingStyle' => 'behind',
            'alignment' => 'center',
        )
    );

    $reportingPage->addTextBreak(2);

    $evidenceTextRun = $reportingPage->addTextRun();
    $evidenceTextRun->addText('Evidence', array('bold'=>true));
    $evidenceTextRun->addText('– Evidence of vulnerabilities will be provided within the report, this will include findings of critical flaws and high-risk vulnerabilities. Vulnerabilities are reported in detail showing the depth of our testing, screenshots and examples are provided.');

    $reportingPage->addTextBreak(2);
    
    $recommendationsRemediationsTextRun = $reportingPage->addTextRun();
    $recommendationsRemediationsTextRun->addText('Recommendations and Remediations', array('bold'=>true));
    $recommendationsRemediationsTextRun->addText(' – Based on findings discovered, our cyber experts provide an in-depth remediation summary based on industry best practice. Samples and screenshots will also be provided within your report.');

    $reportingPage->addImage(
        'assets/images/summary-of-findings.jpg',
        array(
            'width'         => 300,
            'marginTop'     => 2,
            'marginLeft'    => -1,
            'wrappingStyle' => 'behind',
            'alignment' => 'center',
        )
    );

    // $reportingPage->addTextBreak(2);


    $reportingPageFooter = $reportingPage->addFooter();
    $reportingPageFooter->addTextRun()->addText($footerText, $footerTextStyle);
    $reportingPageFooter->addPreserveText('{PAGE}', null, array('alignment' => 'center'));
    
    //############################### END REPORTING PAGE ###############################

    //############################### DELIVERY STEPS PAGE ###############################

    $deliveryStepsPage = $phpWord->addSection();
    $deliveryStepsPageHeader = $deliveryStepsPage->addHeader();
    $deliveryStepsPageHeader->addImage( 'assets/images/rtp-logo.png', $headerImageStyle);

    $deliveryStepsPage->addTitle('Delivery Steps', 1); // TOC Bookmark 
    // $deliveryStepsPage->addTextBreak();

    $deliveryStepsPage->addText('Red Team Partners delivery team will require the following information before testing is conducted:', 0);
    $deliveryStepsPage->addListItem('Technical point of contact who can help resolve or escalate and access or performance issues', 0);
    $deliveryStepsPage->addListItem('Access to testing environment through credentials and change requests', 0);
    $deliveryStepsPage->addListItem('Third parties have consented and been made aware of testing', 0);
    $deliveryStepsPage->addListItem('IP addresses of devices', 0);
    $deliveryStepsPage->addListItem('Delivery Team may ask for details during testing phase', 0);



    $deliveryStepsPageFooter = $deliveryStepsPage->addFooter();
    $deliveryStepsPageFooter->addTextRun()->addText($footerText, $footerTextStyle);
    $deliveryStepsPageFooter->addPreserveText('{PAGE}', null, array('alignment' => 'center'));
    
    //############################### END DELIVERY STEPS PAGE ############################### 


    //############################### TIMESCALES PAGE ###############################

    $timescalesPage = $phpWord->addSection();
    $timescalesPageHeader = $timescalesPage->addHeader();
    $timescalesPageHeader->addImage( 'assets/images/rtp-logo.png', $headerImageStyle);

    $timescalesPage->addTitle('Timescales', 1); // TOC Bookmark 
    // $timescalesPage->addTextBreak();

    $timescalesPage->addText('Once dates have been confirmed by our delivery team and a full Statement of Works has been issued, we are able to start conducting testing.');
    $timescalesPage->addText('You will be allocated a project manager as your project point of contact in addition to this you will also have access to your project lead consultant through our communication platform throughout your testing window. They will be responsible for successfully managing and controlling your project. They will help manage any project issues and track the progress of your project, the delivery team is accountable for the delivery of the full project and will ensure that the project is completed to the expected standard and agreed timescales. All reports are internally reviewed and quality assessed before being released.');

    // QUOTABLE QUOTES
    $timescalesPage->addTextBreak();
    $timescalesPage->addText('"RTP has become an important part of our team for all things Information and Cyber Security. They are a trusted vendor for External/Internal Penetration and Vulnerability Testing.  We have found their process to be easy to follow and their testing to be very thorough.”', $quoteFontStyle, $quoteParagraphStyle);
    $timescalesPage->addText('- Legal Customer', array('bold'=>true, 'italic'=>true), $quoteParagraphStyle);

    $timescalesPageFooter = $timescalesPage->addFooter();
    $timescalesPageFooter->addTextRun()->addText($footerText, $footerTextStyle);
    $timescalesPageFooter->addPreserveText('{PAGE}', null, array('alignment' => 'center'));
    
    //############################### END TIMESCALES PAGE ###############################     


    //############################### WHY CHOOSE RTP PAGE ###############################

    $whyChooseRTPPage = $phpWord->addSection();
    $whyChooseRTPPageHeader = $whyChooseRTPPage->addHeader();
    $whyChooseRTPPageHeader->addImage( 'assets/images/rtp-logo.png', $headerImageStyle);

    $whyChooseRTPPage->addTitle('Why Choose Red Team Partners', 1); // TOC Bookmark 
    // $whyChooseRTPPage->addTextBreak();

    $whyChooseRTPPage->addText('Red Team Partners Experience', array('bold'=>true));
    $whyChooseRTPPage->addListItem('Red Team Partners has provided cyber security services on a global scale from small-medium business to enterprise clients. Our speed, quality and customer experience have been a major factor of successful growth and continued success.', 0);

    $whyChooseRTPPage->addText('Red Team Partners Strength', array('bold'=>true));
    $whyChooseRTPPage->addListItem('Within the cyber security industry, we have a reputation for fast delivery, excellent quality of service and affordable pricing around the world. Our team consists of highly renowned experts in the field of cyber security and hold a vast amount of experience by working with cyber strategic intelligence services. Our customers noticeably experience Red Team Partners values in our service.', 0);

    $whyChooseRTPPage->addText('Vulnerability Detection', array('bold'=>true));
    $whyChooseRTPPage->addListItem('Our teams research through new methods and technologies to identify the most accurate vulnerabilities within your security posture. These accurate findings will provide quantified data to allow actions against findings.', 0);

    $whyChooseRTPPage->addText('Manual Testing', array('bold'=>true));
    $whyChooseRTPPage->addListItem('Our tests are conducted manually rather than using automated scanning tools, these techniques are specialised and can often outperform hackers’ techniques. Using manual testing eradicates false positive which are common in scanning tools.', 0);

    $whyChooseRTPPage->addText('Remediations', array('bold'=>true));
    $whyChooseRTPPage->addListItem('Our recommendations are provided by cyber experts who can identify real actionable results, our customers trust these recommendations and are assured these are for the best benefits of the client’s security posture.', 0);

    $whyChooseRTPPage->addText('Scalable', array('bold'=>true));
    $whyChooseRTPPage->addListItem('We have the capacity to deliver from small to enterprises business worldwide and respond to immediate time scales.', 0);

    $whyChooseRTPPage->addText('Experts in the Field', array('bold'=>true));
    $whyChooseRTPPage->addListItem('Our team consists of best cyber experts from around the world, all are dedicated to helping customers stay secure with years of practical experience in the field. Our Team includes experts with CREST, OSCP, CISSP and GWAPT and CISM. Our certified testers ensure quality of testing and continually research new techniques and technologies.', 0);

    $whyChooseRTPPage->addText('Long Term Vision', array('bold'=>true));
    $whyChooseRTPPage->addListItem('One of our main pillars of Red Team Partners is understanding the long-term partnership with organisations. Our purpose is to provide an outstanding service to develop a long-term relationship with our customers. Our customers are confident in our ability to deliver their requirements and very often use us for future projects.', 0);


    $whyChooseRTPPageFooter = $whyChooseRTPPage->addFooter();
    $whyChooseRTPPageFooter->addTextRun()->addText($footerText, $footerTextStyle);
    $whyChooseRTPPageFooter->addPreserveText('{PAGE}', null, array('alignment' => 'center'));
    
    //############################### END WHY CHOOSE RTP PAGE ###############################     


    //############################### OUR TESTERS QUALIFICATIONS PAGE ###############################

    $testersQualificationsPage = $phpWord->addSection();
    $testersQualificationsPageHeader = $testersQualificationsPage->addHeader();
    $testersQualificationsPageHeader->addImage( 'assets/images/rtp-logo.png', $headerImageStyle);

    $testersQualificationsPage->addTitle('Our Testers Qualifications', 1); // TOC Bookmark 
    // $testersQualificationsPage->addTextBreak();



    $testersQualificationsPageFooter = $testersQualificationsPage->addFooter();
    $testersQualificationsPageFooter->addTextRun()->addText($footerText, $footerTextStyle);
    $testersQualificationsPageFooter->addPreserveText('{PAGE}', null, array('alignment' => 'center'));
    
    //############################### END OUR TESTERS QUALIFICATIONS PAGE ###############################    

    //############################### SERVICES PAGE ###############################

    $servicesPage = $phpWord->addSection();
    $servicesPagePageHeader = $servicesPage->addHeader();
    $servicesPagePageHeader->addImage( 'assets/images/rtp-logo.png', $headerImageStyle);

    $servicesPage->addText('SERVICES', array('size'=>26, 'bold'=>true, 'color'=>'D4173D'), array('alignment'=>'center'));
    $servicesPage->addText('Red Team Partners Offers the Following Services:', array('size'=>16, 'bold'=>true, 'color'=>'D4173D'), array('alignment'=>'center'));
    // $servicesPage->addTextBreak();
    $servicesPage->addText('Web Application Penetration Testing', $servicesFontStyle, $servicesParagraphStyle);
    $servicesPage->addText('Red Team Assessment', $servicesFontStyle, $servicesParagraphStyle);
    $servicesPage->addText('Vulnerability Assessment', $servicesFontStyle, $servicesParagraphStyle);
    $servicesPage->addText('Infrastructure Testing (Internal and External)', $servicesFontStyle, $servicesParagraphStyle);
    $servicesPage->addText('API Testing', $servicesFontStyle, $servicesParagraphStyle);
    $servicesPage->addText('Mobile iOS and Android Testing', $servicesFontStyle, $servicesParagraphStyle);
    $servicesPage->addText('Phishing Simulation', $servicesFontStyle, $servicesParagraphStyle);
    $servicesPage->addText('Documentation Review', $servicesFontStyle, $servicesParagraphStyle);
    $servicesPage->addText('Firewall Assessment', $servicesFontStyle, $servicesParagraphStyle);
    $servicesPage->addText('Cloud Based Configuration Review', $servicesFontStyle, $servicesParagraphStyle);
    $servicesPage->addText('Wireless Network Audit', $servicesFontStyle, $servicesParagraphStyle);
    $servicesPage->addText('VPN Assessment', $servicesFontStyle, $servicesParagraphStyle);
    $servicesPage->addText('Build Review', $servicesFontStyle, $servicesParagraphStyle);
    $servicesPage->addText('PCI DSS Compliance Audit', $servicesFontStyle, $servicesParagraphStyle);
    $servicesPage->addText('Secure Code Review', $servicesFontStyle, $servicesParagraphStyle);
    $servicesPage->addText('Cyber Security Training (Engineers and Awareness/Management)', $servicesFontStyle, $servicesParagraphStyle);
    $servicesPage->addText('Forensics and Investigations', $servicesFontStyle, $servicesParagraphStyle);
    $servicesPage->addText('Dark Web Cyber Intelligence Monitoring', $servicesFontStyle, $servicesParagraphStyle);
    $servicesPage->addText('Performance Stress Testing/Load Testing', $servicesFontStyle, $servicesParagraphStyle);
    $servicesPage->addText('IoT Penetration Testing', $servicesFontStyle, $servicesParagraphStyle);
    

    // Web Application Penetration Testing
    // Red Team Assessment
    // Vulnerability Assessment
    // Infrastructure Testing
    // API Testing
    // Mobile iOS and Android Testing
    // Phishing Simulation
    // Documentation Review
    // Firewall Assessment
    // Cloud Based Configuration Review
    // Wireless Network Audit
    // VPN Assessment
    // Build Review
    // PCI DSS Compliance Audit
    // Secure Code Review
    // Cyber Security Training
    // Forensics and Investigations
    // Dark Web Cyber Intelligence Monitoring
    // Performance Stress Testing/Load Testing
    // IoT Penetration Testing


    $servicesPageFooter = $servicesPage->addFooter();
    $servicesPageFooter->addTextRun()->addText($footerText, $footerTextStyle);
    $servicesPageFooter->addPreserveText('{PAGE}', null, array('alignment' => 'center'));
    
    //############################### END SERVICES PAGE ###############################   

    // // Saving the document as OOXML file...
    // $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
    // $objWriter->save('helloWorld.docx');

    // echo 'Generating Word File... Please wait.';

    // if you want to download the file instead.
    $file = str_replace(' ', '', $companyName) . '-'. date("Y/m/d") .'.docx';
    header("Content-Description: File Transfer");
    header('Content-Disposition: attachment; filename="' . $file . '"');
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    header('Content-Transfer-Encoding: binary');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Expires: 0');
    $xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
    $xmlWriter->save("php://output");