<?php

    $methodologiesPage->addTitle('API Penetration Testing', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    
    $methodologiesPage->addText('Red Team Partners will conduct a full security assessment on your API’s, this assessment can be provided as an onsite or remote service. The purpose of this assessment is to highlight any vulnerabilities which can exploit the API, this includes SQL Injections, Cross-site Scripting, Denial of Service, Predictable Resource Location, Unintentional Information Disclosure and Brute Force Attack. Performing these mock attacks will exploit the availability, integrity and confidentially of the service(s) and any data contained within.');
    $methodologiesPage->addTextBreak();


    $methodologiesPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    
    $methodologiesPage->addText('Red Team Partners will conduct a full in-depth API assessment service to ensure the configuration and recommended best practises have been followed to minimise risks for the organisation. This assessment will highlight any risks and vulnerabilities that are seen as below best practise. Red Team Partners uses a variety of checks, below are the most common performed (This may vary dependent on technologies).');
    $methodologiesPage->addTextBreak();


    $methodologiesPage->addImage(
        'assets/images/methodologies/api-testing-01.png',
        array(
            'width'         => 450,
            // 'height'        => 52,
            'marginTop'     => 2,
            'marginLeft'    => -1,
            'wrappingStyle' => 'behind',
            'alignment' => 'center',
        )
    );

    $methodologiesPage->addTextBreak();