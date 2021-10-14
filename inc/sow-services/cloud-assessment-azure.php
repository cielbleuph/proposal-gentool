<?php
    $DarkRedCellStyle = array(
        'bgColor' => $darkRed,
        'valign'=> 'center',
    );

    $lightRedCellStyle = array(
        'bgColor' => $lightRed
    );

    // $projectDescriptionPage->addTitle('Cloud Assessment/Review (Azure)', 2); // TOC Bookmark 
    // $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addText('Fundamentals', $paragraphHeadingStyle, $paragraphHeadingPStyle);
    $projectDescriptionPage->addText('Red Team Partners offers Cloud Assessment/Review (AZURE). This assessment aims to highlight any vulnerabilities and misconfigurations in your Azure environment. A report will be provided highlighting what has passed and any remediation or recommendations necessary.', null, $defaultParagraphStyle);
    

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('Test Areas', $boldText);
    $projectDescriptionPage->addText( 'Red Team Partners offers a Cloud Assessment/Review (AZURE) that combines best practice guidelines and cyber testing. This assessment will contain the following areas that are assessed throughout the Cloud Assessment/Review (AZURE):' );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("IAM", $boldText);

    $projectDescriptionPage->addListItem("Multi-factor authentication is enabled for all privileged users", 0);
    $projectDescriptionPage->addListItem("Multi-factor authentication is enabled for all non-privileged users", 0);
    $projectDescriptionPage->addListItem("Guest users are reviewed monthly", 0);
    $projectDescriptionPage->addListItem("'Allow users to remember multi-factor authentication on devices they trust' is 'Disabled'", 0);
    $projectDescriptionPage->addListItem("'Number of methods required to reset' is set to '2'", 0);
    $projectDescriptionPage->addListItem("'Number of days before users are asked to re-confirm their authentication information is not set to ", 0);
    $projectDescriptionPage->addListItem("'Notify users on password resets?' is set to 'Yes'", 0);
    $projectDescriptionPage->addListItem("'Notify all admins when other admins reset their password?' is set to 'Yes'", 0);
    $projectDescriptionPage->addListItem("'Users can consent to apps accessing company data on their behalf' is set to 'No'", 0);
    $projectDescriptionPage->addListItem("'Users can add gallery apps to their Access Panel' is set to 'No'", 0);
    $projectDescriptionPage->addListItem("'Users can register applications' is set to 'No'", 0);
    $projectDescriptionPage->addListItem("'Guest user permissions are limited' is set to 'Yes'", 0);
    $projectDescriptionPage->addListItem("'Members can invite' is set to 'No'", 0);
    $projectDescriptionPage->addListItem("'Guests can invite' is set to 'No'", 0);
    $projectDescriptionPage->addListItem("'Restrict access to Azure AD administration portal' is set to 'Yes'", 0);
    $projectDescriptionPage->addListItem("'Restrict user ability to access groups features in the Access Pane' is set to 'No'", 0);
    $projectDescriptionPage->addListItem("'Users can create security groups in Azure Portals' is set to 'No'", 0);
    $projectDescriptionPage->addListItem("'Owners can manage group membership requests in the Access Panel' is set to 'No'", 0);
    $projectDescriptionPage->addListItem("'Users can create Microsoft 365 groups in Azure Portals' is set to 'No'", 0);
    $projectDescriptionPage->addListItem("'Require Multi-Factor Auth to join devices' is set to 'Yes'", 0);
    $projectDescriptionPage->addListItem("No custom subscription owner roles are created", 0);
    $projectDescriptionPage->addListItem("Security Defaults is enabled on Azure Active Directory", 0);
    $projectDescriptionPage->addListItem("Custom Role is assigned for Administering Resource Locks", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Security Center", $boldText);

    $projectDescriptionPage->addListItem("Azure Defender is set to On for Servers", 0);
    $projectDescriptionPage->addListItem("Azure Defender is set to On for App Service", 0);
    $projectDescriptionPage->addListItem("Azure Defender is set to On for Azure SQL database servers", 0);
    $projectDescriptionPage->addListItem("Azure Defender is set to On for SQL servers on machines", 0);
    $projectDescriptionPage->addListItem("Azure Defender is set to On for Storage", 0);
    $projectDescriptionPage->addListItem("Azure Defender is set to On for Kubernetes", 0);
    $projectDescriptionPage->addListItem("Azure Defender is set to On for Container Registries", 0);
    $projectDescriptionPage->addListItem("Azure Defender is set to On for Key Vault", 0);
    $projectDescriptionPage->addListItem("Windows Defender ATP (WDATP) integration with Security Center is selected", 0);
    $projectDescriptionPage->addListItem("Microsoft Cloud App Security (MCAS) integration with Security Center is selected", 0);
    $projectDescriptionPage->addListItem("'Automatic provisioning of monitoring agent' is set to 'On'", 0);
    $projectDescriptionPage->addListItem("Any of the ASC Default policy settings are not set to 'Disabled'", 0);
    $projectDescriptionPage->addListItem("'Additional email addresses' is configured with a security contact email", 0);
    $projectDescriptionPage->addListItem("'Notify about alerts with the following severity' is set to 'High'", 0);
    $projectDescriptionPage->addListItem("'All users with the following roles' is set to 'Owner'", 0);

    $projectDescriptionPage->addTextBreak();
    
    $projectDescriptionPage->addText("Storage Accounts", $boldText);
    
    $projectDescriptionPage->addListItem("'Secure transfer required' is set to 'Enabled'", 0);
    $projectDescriptionPage->addListItem("Storage account access keys are periodically regenerated", 0);
    $projectDescriptionPage->addListItem("Storage logging is enabled for Queue service for reading, writing, and deleting requests", 0);
    $projectDescriptionPage->addListItem("Shared access signature tokens expire within an hour", 0);
    $projectDescriptionPage->addListItem("'Public access level' is set to Private for blob containers", 0);
    $projectDescriptionPage->addListItem("Default network access rule for Storage Accounts is set to deny", 0);
    $projectDescriptionPage->addListItem("'Trusted Microsoft Services' is enabled for Storage Account access", 0);
    $projectDescriptionPage->addListItem("Soft delete is enabled for Azure Storage", 0);
    $projectDescriptionPage->addListItem("Storage for critical data is encrypted with Customer Managed Key", 0);
    $projectDescriptionPage->addListItem("Storage logging is enabled for Blob service for read, write, and delete requests", 0);
    $projectDescriptionPage->addListItem("Storage logging is enabled for Table service for reading, writing, and deleting requests", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Database Services - SQL Server Auditing", $boldText);
    $projectDescriptionPage->addListItem("'Auditing' is set to 'On'", 0);
    $projectDescriptionPage->addListItem("'Data encryption' is set to 'On' on a SQL Database", 0);
    $projectDescriptionPage->addListItem("'Auditing' Retention is 'greater than 90 days'", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Database Services - Azure Defender for SQL", $boldText);
    $projectDescriptionPage->addListItem("Advanced Threat Protection (ATP) on a SQL server is set to 'Enabled'", 0);
    $projectDescriptionPage->addListItem("Vulnerability Assessment (VA) is enabled on a SQL server by setting a Storage Account", 0);
    $projectDescriptionPage->addListItem("VA setting Periodic Recurring Scans is enabled on a SQL server", 0);
    $projectDescriptionPage->addListItem("VA setting Send scan reports to is configured for a SQL server", 0);
    $projectDescriptionPage->addListItem("VA setting 'Also send email notifications to admins and subscription owners' is set for a SQL server", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Database Services - PostgreSQL Database Server", $boldText);
    $projectDescriptionPage->addListItem("'Enforce SSL connection' is set to 'ENABLED' for PostgreSQL Database Server", 0);
    $projectDescriptionPage->addListItem("'Enforce SSL connection' is set to 'ENABLED' for MySQL Database Server", 0);
    $projectDescriptionPage->addListItem("Server parameter 'log_checkpoints' is set to 'ON' for PostgreSQL Database Server", 0);
    $projectDescriptionPage->addListItem("Server parameter 'log_connections' is set to 'ON' for PostgreSQL Database Server", 0);
    $projectDescriptionPage->addListItem("Server parameter 'log_disconnections' is set to 'ON' for PostgreSQL Database Server", 0);
    $projectDescriptionPage->addListItem("Server parameter 'connection_throttling' is set to 'ON' for PostgreSQL Database Server", 0);
    $projectDescriptionPage->addListItem("Server parameter 'log_retention_days' is greater than 3 days for PostgreSQL Database Server", 0);
    $projectDescriptionPage->addListItem("'Allow access to Azure services for PostgreSQL Database Server is disabled", 0);
    $projectDescriptionPage->addListItem("Azure Active Directory Admin is configured", 0);
    $projectDescriptionPage->addListItem("SQL server's TDE protector is encrypted with a Customer-managed key", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Logging and Monitoring – Configuring Diagnostic Settings", $boldText);
    $projectDescriptionPage->addListItem("'Diagnostics Setting' exists", 0);
    $projectDescriptionPage->addListItem("Diagnostic Setting captures appropriate categories", 0);
    $projectDescriptionPage->addListItem("Storage container storing the activity logs is not publicly accessible", 0);
    $projectDescriptionPage->addListItem("Storage account containing the container with activity logs is encrypted with BYOK (Use Your Own Key)", 0);
    $projectDescriptionPage->addListItem("Logging for Azure KeyVault is 'Enabled'", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Logging and Monitoring – Monitoring using Activity Log Alerts", $boldText);
    $projectDescriptionPage->addListItem("Activity Log Alert exists for Create Policy Assignment", 0);
    $projectDescriptionPage->addListItem("Activity Log Alert exists for Delete Policy Assignment", 0);
    $projectDescriptionPage->addListItem("Activity Log Alert exists for Create or Update Network Security Group", 0);
    $projectDescriptionPage->addListItem("Activity Log Alert exists for Delete Network Security Group", 0);
    $projectDescriptionPage->addListItem("Activity Log Alert exists for Create or Update Network Security Group Rule", 0);
    $projectDescriptionPage->addListItem("Activity log alert exists for the Delete Network Security Group Rule", 0);
    $projectDescriptionPage->addListItem("Activity Log Alert exists for Create or Update Security Solution", 0);
    $projectDescriptionPage->addListItem("Activity Log Alert exists for Delete Security Solution", 0);
    $projectDescriptionPage->addListItem("Activity Log Alert exists for Create or Update or Delete SQL Server Firewall Rule", 0);
    $projectDescriptionPage->addListItem("Diagnostic Logs are enabled for all services which support it", 0);


    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Networking", $boldText);
    
    $projectDescriptionPage->addListItem("RDP access is restricted from the internet", 0);
    $projectDescriptionPage->addListItem("SSH access is restricted from the internet", 0);
    $projectDescriptionPage->addListItem("No SQL Databases allow ingress 0.0.0.0/0 (ANY IP)", 0);
    $projectDescriptionPage->addListItem("Network Security Group Flow Log retention period is 'greater than 90 days'", 0);
    $projectDescriptionPage->addListItem("Network Watcher is 'Enabled'", 0);
    $projectDescriptionPage->addListItem("UDP Services are restricted from the Internet", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Virtual Machines", $boldText);
    $projectDescriptionPage->addListItem("Virtual Machines are utilizing Managed Disks", 0);
    $projectDescriptionPage->addListItem("'OS and Data' disks are encrypted with CMK", 0);
    $projectDescriptionPage->addListItem("'Unattached disks' are encrypted with CMK", 0);
    $projectDescriptionPage->addListItem("Only approved extensions are installed", 0);
    $projectDescriptionPage->addListItem("The latest OS Patches for all Virtual Machines are applied", 0);
    $projectDescriptionPage->addListItem("The endpoint protection for all Virtual Machines is installed", 0);
    $projectDescriptionPage->addListItem("VHD's are encrypted", 0);

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("Other Security Considerations", $boldText);
    $projectDescriptionPage->addListItem("The expiration date is set on all keys", 0);
    $projectDescriptionPage->addListItem("The expiration date is set on all Secrets", 0);
    $projectDescriptionPage->addListItem("Resource Locks are set for mission-critical Azure resources", 0);
    $projectDescriptionPage->addListItem("Key vault is recoverable Enable role-based access control (RBAC) within Azure Kubernetes Services", 0);



    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText("AppService", $boldText);
    $projectDescriptionPage->addListItem("The App Service Authentication is set on Azure App Service", 0);
    $projectDescriptionPage->addListItem("The Web app redirects all HTTP traffic to HTTPS in Azure App Service", 0);
    $projectDescriptionPage->addListItem("The Web app is using the latest version of TLS encryption", 0);
    $projectDescriptionPage->addListItem("The web app has 'Client Certificates (Incoming client certificates)' set to 'On'", 0);
    $projectDescriptionPage->addListItem("Register with Azure Active Directory is enabled on App Service", 0);
    $projectDescriptionPage->addListItem("'PHP version' is the latest, if used to run the web app", 0);
    $projectDescriptionPage->addListItem("'Python version' is the latest, if used to run the web app", 0);
    $projectDescriptionPage->addListItem("'Java version' is the latest, if used to run the web app", 0);
    $projectDescriptionPage->addListItem("'HTTP Version' is the latest, if used to run the web app", 0);
    $projectDescriptionPage->addListItem("FTP deployments are disabled", 0);
    $projectDescriptionPage->addListItem("Azure Keyvaults are used to store secrets", 0);

    $projectDescriptionPage->addPageBreak();




    // // $azureReviewTable = $projectDescriptionPage->addTable(
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

    // $projectDescriptionPage->addTextBreak();

    // $projectDescriptionPage->addText( 'This Review also compromises the following checks:' );

    // $projectDescriptionPage->addTextBreak();

    // $azureReviewTableTwo = $projectDescriptionPage->addTable(
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

    // $projectDescriptionPage->addTextBreak();