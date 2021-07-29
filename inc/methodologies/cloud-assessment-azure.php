<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    $methodologiesPage->addTitle('Cloud Assessment/Review (Azure)', 2); // TOC Bookmark 
    $methodologiesPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $methodologiesPage->addText('Red Team Partners offers Cloud Assessment/Review (AZURE). This assessment aims to highlight any vulnerabilities and misconfigurations in your Azure environment. A report will be provided highlighting what has passed and any remediation or recommendations necessary.', null, $defaultParagraphStyle);
    

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText('Test Areas', $boldText);
    $methodologiesPage->addText( 'Red Team Partners offers a Cloud Assessment/Review (AZURE) that combines best practice guidelines and cyber testing. This assessment will contain the following areas that are assessed throughout the Cloud Assessment/Review (AZURE):' );

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("IAM", $boldText);

    $methodologiesPage->addListItem("Multi-factor authentication is enabled for all privileged users", 0);
    $methodologiesPage->addListItem("Multi-factor authentication is enabled for all non-privileged users", 0);
    $methodologiesPage->addListItem("Guest users are reviewed monthly", 0);
    $methodologiesPage->addListItem("'Allow users to remember multi-factor authentication on devices they trust' is 'Disabled'", 0);
    $methodologiesPage->addListItem("'Number of methods required to reset' is set to '2'", 0);
    $methodologiesPage->addListItem("'Number of days before users are asked to re-confirm their authentication information is not set to ", 0);
    $methodologiesPage->addListItem("'Notify users on password resets?' is set to 'Yes'", 0);
    $methodologiesPage->addListItem("'Notify all admins when other admins reset their password?' is set to 'Yes'", 0);
    $methodologiesPage->addListItem("'Users can consent to apps accessing company data on their behalf' is set to 'No'", 0);
    $methodologiesPage->addListItem("'Users can add gallery apps to their Access Panel' is set to 'No'", 0);
    $methodologiesPage->addListItem("'Users can register applications' is set to 'No'", 0);
    $methodologiesPage->addListItem("'Guest user permissions are limited' is set to 'Yes'", 0);
    $methodologiesPage->addListItem("'Members can invite' is set to 'No'", 0);
    $methodologiesPage->addListItem("'Guests can invite' is set to 'No'", 0);
    $methodologiesPage->addListItem("'Restrict access to Azure AD administration portal' is set to 'Yes'", 0);
    $methodologiesPage->addListItem("'Restrict user ability to access groups features in the Access Pane' is set to 'No'", 0);
    $methodologiesPage->addListItem("'Users can create security groups in Azure Portals' is set to 'No'", 0);
    $methodologiesPage->addListItem("'Owners can manage group membership requests in the Access Panel' is set to 'No'", 0);
    $methodologiesPage->addListItem("'Users can create Microsoft 365 groups in Azure Portals' is set to 'No'", 0);
    $methodologiesPage->addListItem("'Require Multi-Factor Auth to join devices' is set to 'Yes'", 0);
    $methodologiesPage->addListItem("No custom subscription owner roles are created", 0);
    $methodologiesPage->addListItem("Security Defaults is enabled on Azure Active Directory", 0);
    $methodologiesPage->addListItem("Custom Role is assigned for Administering Resource Locks", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Security Center", $boldText);

    $methodologiesPage->addListItem("Azure Defender is set to On for Servers", 0);
    $methodologiesPage->addListItem("Azure Defender is set to On for App Service", 0);
    $methodologiesPage->addListItem("Azure Defender is set to On for Azure SQL database servers", 0);
    $methodologiesPage->addListItem("Azure Defender is set to On for SQL servers on machines", 0);
    $methodologiesPage->addListItem("Azure Defender is set to On for Storage", 0);
    $methodologiesPage->addListItem("Azure Defender is set to On for Kubernetes", 0);
    $methodologiesPage->addListItem("Azure Defender is set to On for Container Registries", 0);
    $methodologiesPage->addListItem("Azure Defender is set to On for Key Vault", 0);
    $methodologiesPage->addListItem("Windows Defender ATP (WDATP) integration with Security Center is selected", 0);
    $methodologiesPage->addListItem("    Microsoft Cloud App Security (MCAS) integration with Security Center is selected", 0);
    $methodologiesPage->addListItem("'Automatic provisioning of monitoring agent' is set to 'On'", 0);
    $methodologiesPage->addListItem("Any of the ASC Default policy settings are not set to 'Disabled'", 0);
    $methodologiesPage->addListItem("'Additional email addresses' is configured with a security contact email", 0);
    $methodologiesPage->addListItem("'Notify about alerts with the following severity' is set to 'High'", 0);
    $methodologiesPage->addListItem("'All users with the following roles' is set to 'Owner'", 0);

    $methodologiesPage->addTextBreak();
    
    $methodologiesPage->addText("Storage Accounts", $boldText);
    
    $methodologiesPage->addListItem("'Secure transfer required' is set to 'Enabled'", 0);
    $methodologiesPage->addListItem("Storage account access keys are periodically regenerated", 0);
    $methodologiesPage->addListItem("Storage logging is enabled for Queue service for reading, writing, and deleting requests", 0);
    $methodologiesPage->addListItem("Shared access signature tokens expire within an hour", 0);
    $methodologiesPage->addListItem("'Public access level' is set to Private for blob containers", 0);
    $methodologiesPage->addListItem("Default network access rule for Storage Accounts is set to deny", 0);
    $methodologiesPage->addListItem("'Trusted Microsoft Services' is enabled for Storage Account access", 0);
    $methodologiesPage->addListItem("Soft delete is enabled for Azure Storage", 0);
    $methodologiesPage->addListItem("Storage for critical data is encrypted with Customer Managed Key", 0);
    $methodologiesPage->addListItem("Storage logging is enabled for Blob service for read, write, and delete requests", 0);
    $methodologiesPage->addListItem("Storage logging is enabled for Table service for reading, writing, and deleting requests", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Database Services - SQL Server Auditing", $boldText);
    $methodologiesPage->addListItem("'Auditing' is set to 'On'", 0);
    $methodologiesPage->addListItem("'Data encryption' is set to 'On' on a SQL Database", 0);
    $methodologiesPage->addListItem("'Auditing' Retention is 'greater than 90 days'", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Database Services - Azure Defender for SQL", $boldText);
    $methodologiesPage->addListItem("Advanced Threat Protection (ATP) on a SQL server is set to 'Enabled'", 0);
    $methodologiesPage->addListItem("Vulnerability Assessment (VA) is enabled on a SQL server by setting a Storage Account", 0);
    $methodologiesPage->addListItem("VA setting Periodic Recurring Scans is enabled on a SQL server", 0);
    $methodologiesPage->addListItem("VA setting Send scan reports to is configured for a SQL server", 0);
    $methodologiesPage->addListItem("VA setting 'Also send email notifications to admins and subscription owners' is set for a SQL server", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Database Services -  PostgreSQL Database Server", $boldText);
    $methodologiesPage->addListItem("'Enforce SSL connection' is set to 'ENABLED' for PostgreSQL Database Server", 0);
    $methodologiesPage->addListItem("'Enforce SSL connection' is set to 'ENABLED' for MySQL Database Server", 0);
    $methodologiesPage->addListItem("Server parameter 'log_checkpoints' is set to 'ON' for PostgreSQL Database Server", 0);
    $methodologiesPage->addListItem("Server parameter 'log_connections' is set to 'ON' for PostgreSQL Database Server", 0);
    $methodologiesPage->addListItem("Server parameter 'log_disconnections' is set to 'ON' for PostgreSQL Database Server", 0);
    $methodologiesPage->addListItem("Server parameter 'connection_throttling' is set to 'ON' for PostgreSQL Database Server", 0);
    $methodologiesPage->addListItem("Server parameter 'log_retention_days' is greater than 3 days for PostgreSQL Database Server", 0);
    $methodologiesPage->addListItem("'Allow access to Azure services for PostgreSQL Database Server is disabled", 0);
    $methodologiesPage->addListItem("Azure Active Directory Admin is configured", 0);
    $methodologiesPage->addListItem("SQL server's TDE protector is encrypted with a Customer-managed key", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Logging and Monitoring – Configuring Diagnostic Settings", $boldText);
    $methodologiesPage->addListItem("'Diagnostics Setting' exists", 0);
    $methodologiesPage->addListItem("Diagnostic Setting captures appropriate categories", 0);
    $methodologiesPage->addListItem("Storage container storing the activity logs is not publicly accessible", 0);
    $methodologiesPage->addListItem("Storage account containing the container with activity logs is encrypted with BYOK (Use Your Own Key)", 0);
    $methodologiesPage->addListItem("Logging for Azure KeyVault is 'Enabled'", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Logging and Monitoring – Monitoring using Activity Log Alerts", $boldText);
    $methodologiesPage->addListItem("Activity Log Alert exists for Create Policy Assignment", 0);
    $methodologiesPage->addListItem("Activity Log Alert exists for Delete Policy Assignment", 0);
    $methodologiesPage->addListItem("Activity Log Alert exists for Create or Update Network Security Group", 0);
    $methodologiesPage->addListItem("Activity Log Alert exists for Delete Network Security Group", 0);
    $methodologiesPage->addListItem("Activity Log Alert exists for Create or Update Network Security Group Rule", 0);
    $methodologiesPage->addListItem("Activity log alert exists for the Delete Network Security Group Rule", 0);
    $methodologiesPage->addListItem("Activity Log Alert exists for Create or Update Security Solution", 0);
    $methodologiesPage->addListItem("Activity Log Alert exists for Delete Security Solution", 0);
    $methodologiesPage->addListItem("Activity Log Alert exists for Create or Update or Delete SQL Server Firewall Rule", 0);
    $methodologiesPage->addListItem("Diagnostic Logs are enabled for all services which support it", 0);


    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Networking", $boldText);
    
    $methodologiesPage->addListItem("RDP access is restricted from the internet", 0);
    $methodologiesPage->addListItem("SSH access is restricted from the internet", 0);
    $methodologiesPage->addListItem("No SQL Databases allow ingress 0.0.0.0/0 (ANY IP)", 0);
    $methodologiesPage->addListItem("Network Security Group Flow Log retention period is 'greater than 90 days'", 0);
    $methodologiesPage->addListItem("Network Watcher is 'Enabled'", 0);
    $methodologiesPage->addListItem("UDP Services are restricted from the Internet", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Virtual Machines", $boldText);
    $methodologiesPage->addListItem("Virtual Machines are utilizing Managed Disks", 0);
    $methodologiesPage->addListItem("'OS and Data' disks are encrypted with CMK", 0);
    $methodologiesPage->addListItem("'Unattached disks' are encrypted with CMK", 0);
    $methodologiesPage->addListItem("Only approved extensions are installed", 0);
    $methodologiesPage->addListItem("The latest OS Patches for all Virtual Machines are applied", 0);
    $methodologiesPage->addListItem("The endpoint protection for all Virtual Machines is installed", 0);
    $methodologiesPage->addListItem("VHD's are encrypted", 0);

    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("Other Security Considerations", $boldText);
    $methodologiesPage->addListItem("The expiration date is set on all keys", 0);
    $methodologiesPage->addListItem("The expiration date is set on all Secrets", 0);
    $methodologiesPage->addListItem("Resource Locks are set for mission-critical Azure resources", 0);
    $methodologiesPage->addListItem("Key vault is recoverable Enable role-based access control (RBAC) within Azure Kubernetes Services", 0);



    $methodologiesPage->addTextBreak();

    $methodologiesPage->addText("AppService", $boldText);
    $methodologiesPage->addListItem("The App Service Authentication is set on Azure App Service", 0);
    $methodologiesPage->addListItem("The Web app redirects all HTTP traffic to HTTPS in Azure App Service", 0);
    $methodologiesPage->addListItem("The Web app is using the latest version of TLS encryption", 0);
    $methodologiesPage->addListItem("The web app has 'Client Certificates (Incoming client certificates)' set to 'On'", 0);
    $methodologiesPage->addListItem("Register with Azure Active Directory is enabled on App Service", 0);
    $methodologiesPage->addListItem("'PHP version' is the latest, if used to run the web app", 0);
    $methodologiesPage->addListItem("'Python version' is the latest, if used to run the web app", 0);
    $methodologiesPage->addListItem("'Java version' is the latest, if used to run the web app", 0);
    $methodologiesPage->addListItem("'HTTP Version' is the latest, if used to run the web app", 0);
    $methodologiesPage->addListItem("FTP deployments are disabled", 0);
    $methodologiesPage->addListItem("Azure Keyvaults are used to store secrets", 0);

    $methodologiesPage->addPageBreak();




    // // $azureReviewTable = $methodologiesPage->addTable(
    // //     array(
    // //         'width' => 5000,
    // //         'unit' => 'pct',
    // //         'borderColor' => 'FFFFFF',
    // //         'cellSpacing' => 5,
    // //         'borderSize'=>1,
    // //         'cellMargin' => 20
    // //     )
    // // );
    
    // $azureReviewTable->addRow();
    // $azureReviewTable->addCell(450, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center') );
    // $azureReviewTable->addCell(null, $lightRedCellStyle)->addText('RDS Config', null, array('indent'=>0.5));

    // $azureReviewTable->addRow();
    // $azureReviewTable->addCell(450, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $azureReviewTable->addCell(null, $lightRedCellStyle)->addText('VPN Gateway', null, array('indent'=>0.5));

    // $azureReviewTable->addRow();
    // $azureReviewTable->addCell(450, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $azureReviewTable->addCell(null, $lightRedCellStyle)->addText('Logical isolation - Resource groups, vnets, subnets, VNET peering and NSG implementation/config', null, array('indent'=>0.5));

    // $azureReviewTable->addRow();
    // $azureReviewTable->addCell(450, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $azureReviewTable->addCell(null, $lightRedCellStyle)->addText('VM and SQL Azure database access restrictions', null, array('indent'=>0.5));

    // $azureReviewTable->addRow();
    // $azureReviewTable->addCell(450, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $azureReviewTable->addCell(null, $lightRedCellStyle)->addText('Security Groups', null, array('indent'=>0.5));

    // $azureReviewTable->addRow();
    // $azureReviewTable->addCell(450, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $azureReviewTable->addCell(null, $lightRedCellStyle)->addText('Azure AD', null, array('indent'=>0.5));

    // $methodologiesPage->addTextBreak();

    // $methodologiesPage->addText( 'This Review also compromises the following checks:' );

    // $methodologiesPage->addTextBreak();

    // $azureReviewTableTwo = $methodologiesPage->addTable(
    //     array(
    //         'width' => 5000,
    //         'unit' => 'pct',
    //     )
    // );
    
    // $azureReviewTableTwo->addRow();
    // $azureReviewTableTwo->addCell(450, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center') );
    // $azureReviewTableTwo->addCell(null, $lightRedCellStyle)->addText('Ensure access controls are in place for individual users. Ensure that logging features have been enabled.', null, array('indent'=>0.5));

    // $azureReviewTableTwo->addRow();
    // $azureReviewTableTwo->addCell(450, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $azureReviewTableTwo->addCell(null, $lightRedCellStyle)->addText('Ensure password strength factors are implemented with sane settings.', null, array('indent'=>0.5));

    // $azureReviewTableTwo->addRow();
    // $azureReviewTableTwo->addCell(450, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $azureReviewTableTwo->addCell(null, $lightRedCellStyle)->addText('Ensure that multi factor authentication is offered.', null, array('indent'=>0.5));

    // $azureReviewTableTwo->addRow();
    // $azureReviewTableTwo->addCell(450, $DarkRedCellStyle)->addText('-', array('color'=>'FFFFFF'), array('alignment'=>'center'));
    // $azureReviewTableTwo->addCell(null, $lightRedCellStyle)->addText('Best practise review of specific implementations such as OFS, Intune, AWS, etc.', null, array('indent'=>0.5));

    // $methodologiesPage->addTextBreak();