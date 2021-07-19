<?php
    use PhpOffice\PhpWord\Shared\Html as HTMLParser;

    $methodologiesPage->addTitle('API Penetration Testing', 2); // TOC Bookmark 
    $methodologiesPage->addTextBreak();
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    
    $methodologiesPage->addText('Red Team Partners will conduct a full security assessment on your APIs that can be provided as onsite or remote service. The purpose of this assessment is to highlight any vulnerabilities which can exploit the API.', null, $defaultParagraphStyle);

    $methodologiesPage->addText( htmlspecialchars("This includes:"), null, $defaultParagraphStyle );

    $methodologiesPage->addTextBreak();
    $methodologiesPage->addListItem("SQL Injection");
    $methodologiesPage->addListItem("Cross-site Scripting");
    $methodologiesPage->addListItem("Denial of Service");
    $methodologiesPage->addListItem("Predictable Resource Location");
    $methodologiesPage->addListItem("Unintentional Information Disclosure");
    $methodologiesPage->addListItem("Brute Force Attack");

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Performing these mock attacks will exploit the availability, integrity, and confidentially of the service(s) and any data contained within.", null, $defaultParagraphStyle);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Test Areas', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    
    $methodologiesPage->addText('Red Team Partners will conduct a full in-depth API assessment service to ensure that the configuration and recommended best practises have been followed to minimise risks for the organisation. This assessment will highlight any risks and vulnerabilities that are seen as below best practise. Red Team Partners uses a variety of checks.', null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();


    // $methodologiesPage->addImage(
    //     ASSETS_IMG_DIR . 'methodologies/api-testing-01.png',
    //     array(
    //         'width'         => 450,
    //         // 'height'        => 52,
    //         'marginTop'     => 2,
    //         'marginLeft'    => -1,
    //         'wrappingStyle' => 'behind',
    //         'alignment' => 'center',
    //     )
    // );

    $methodologiesPage->addText("Below are the most common performed checks (This may vary depending on technologies).", null, $defaultParagraphStyle);
    $methodologiesPage->addTextBreak();


    $htmlStr = "<ol>
    <li><strong>Authentication:</strong><ul><li>Attempt to bypass authentication</li><li>Ascertain the account lockout policy</li><li>Assess the use of generic error messages</li></ul></li>
    <li><strong>Input Manipulation:</strong><ul><li>Inject malicious commands into SOAP messages</li><li>Attempt to exploit server-side includes</li><li>Check data validation</li><li>Utilise long character strings to uncver buffer overflow vulnerabilities</li><li>Identify limitations of any possible payloads</li></ul></li>
    <li><strong>Session Management:</strong><ul><li>Confirm user-session is cancelled upon logout</li><li>Ensure session IDs are not predictable</li><li>Attempt request relaying attacks</li><li>Check if a session timeout is enforced</li></ul></li>
    <li><strong>Service Vulnerabilities:</strong><ul><li>Identify any transport security weaknesses including weak cypher configuration</li><li>Highlight any XML based attack vectors</li><li>Examine SOAP messages for information disclosure vulnerabilities</li></ul></li></ol>";
    HTMLParser::addHtml($methodologiesPage, $htmlStr);

    $methodologiesPage->addTextBreak();