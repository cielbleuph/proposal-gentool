<?php 
    //############################### PROJECT SCOPE PAGE ###############################    

    $projectScopePage = $phpWord->addSection();
    $projectScopePage->addTitle( 'PROJECT SCOPE', 1); // TOC Bookmark
    $projectScopePage->addLine($lineStyle);   

    $projectScopePage->addTitle( '*** SCOPE of Project Selected ***', 2); // TOC Bookmark 

    $projectScopePage->addPageBreak();

    //############################### END PROJECT SCOPE PAGE ###############################    



    //############################### PROJECT DESCRIPTION PAGE ###############################    

    $projectDescriptionPage = $phpWord->addSection();
    $projectDescriptionPage->addTitle( 'PROJECT DESCRIPTION', 1); // TOC Bookmark 
    $projectDescriptionPage->addLine($lineStyle);

    $projectDescriptionPage->addTitle( 'FUNDAMENTALS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Red Team Partners offers a Cloud Assessment (AWS). Red Team Partners provides a readiness assessment and determine if the resources and IT environment is capable of migrating to the cloud.' );
    $projectDescriptionPage->addText( 'Red Team Partners performs a cloud readiness assessment in order to smooth the migration process and set up a cloud environment that fits the organization’s requirements.' );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addTitle( 'METHOD', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Red Team Partners offers a Cloud Assessment (AWS) with detailed planning, assessment, testing and verifying.' );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'Red Team Partners Cloud Assessment (AWS) compromises the following:' );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText('AWS', array('color'=>'DE5C5C'));
    $projectDescriptionPage->addListItem('General Threats');

    $projectDescriptionPage->addListItem('Compromise of (entire) AWS', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Denial of Service (DoS) attack on application', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Insider threats and privileged user threats: These incidents can include both malicious and negligent behavior— ranging from taking actions that unintentionally expose data to risk, to employees stealing data before quitting to join a competitor', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Third-party account compromise:  Misconfigured security settings or accounts that have excessive identity and access management (IAM) permissions can increase the potential damage.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Sensitive data uploaded against policy/regulation: Many organizations have industry-specific or regional regulations, or internal policies, that prohibit certain types of data from being uploaded to the cloud', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Software development lacks security input: As enterprises continue to migrate to or build their custom applications in AWS Amazon takes responsibility for the security of its infrastructure. The customer is responsible for ensuring their AWS environment is configured securely, data is not shared with someone it shouldn’t be shared with inside or outside the company, identifying when a user misuses AWS, and enforcing compliance and governance policies.', 1, null, null, $aParagraphStyles );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addImage('assets/images/sow/cloud-assessment-aws-01.png', 
        array(
            'width'         => 450,
            'marginTop'     => 2,
            'marginLeft'    => -100,
            'wrappingStyle' => 'inline',
            'alignment' => 'center',
            'wrapDistanceLeft' => 100
        )
    );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addListItem('Client Security Responsibilities', 0 );
    $projectDescriptionPage->addListItem('Preventing or detecting when an AWS account has been compromised', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Preventing or detecting a privileged or regular AWS user behaving in an insecure manner', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Preventing sensitive data from being uploaded to or shared from applications in an inappropriate manner', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Configuring AWS services (except AWS Managed Services) in a secure manner', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Restricting access to AWS services or custom applications to only those users who require it', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Updating guest operating systems and applying security patches', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Ensuring AWS and custom applications are being used in a manner compliant with internal and external policies', 1, null, null, $aParagraphStyles );

    $projectDescriptionPage->addTextBreak(2);

    $projectDescriptionPage->addListItem('Amazon Security Responsibilities', 0);
    $projectDescriptionPage->addListItem('Ensuring AWS and custom applications are being used in a manner compliant with internal and external policies ', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Ensuring network security (DoS, man-in-the-middle (MITM), port scanning) ', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Configuring AWS Managed Services in a secure manner', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Providing physical access control to hardware/software', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Providing environmental security assurance against things like mass power outages, earthquakes, floods, and other natural disasters', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Database patching', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Protecting against AWS zero-day exploits and other vulnerabilities', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Business continuity management (availability, incident response)', 1, null, null, $aParagraphStyles );

    $projectDescriptionPage->addTextBreak(2);

    $projectDescriptionPage->addText('AWS Security CHEAT SHEET', array('color'=>'DE5C5C') );
    $projectDescriptionPage->addListItem('Enable CloudTrail logging across all AWS.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Turn on CloudTrail log file validation.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Enable CloudTrail multi-region logging.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Integrate CloudTrail with CloudWatch.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Enable access logging for CloudTrail S3 buckets.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Enable access logging for Elastic Load Balancer (ELB).', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Enable Redshift audit logging.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Enable Virtual Private Cloud (VPC) flow logging.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Require multi factor authentication (MFA) to delete CloudTrail buckets.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Turn on multi factor authentication for the “root” account.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Turn on multi-factor authentication for IAM users.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Enable IAM users for multi-mode access.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Attach IAM policies to groups or roles.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Rotate IAM access keys regularly, and standardize on the selected number of days.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Set up a strict password policy.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Set the password expiration period to 90 days and prevent reuse Customer Visualforce pages with standard headers.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Don’t use expired SSL/TLS certificates.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('User HTTPS for CloudFront distributions.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Restrict access to CloudTrail buckets.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Encrypt CloudTrail log files at rest.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Encrypt Elastic Block Store (EBS) database', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Provision access to resources using IAM roles.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Ensure EC2 security groups don’t have large ranges of ports open.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Configure EC2 security groups to restrict inbound access to EC2.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Avoid using root user accounts.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Use secure SSL ciphers when connecting between the client and ELB.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Use secure SSL versions when connecting between client and ELB.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Use a standard naming (tagging) convention for EC2.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Encrypt Amazon’s Relational Database Service (RDS).', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Ensure access keys are not being used with root accounts.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Use secure CloudFront SSL versions.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Enable the require_ssl parameter in all Redshift clusters.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Rotate SSH keys periodically.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Minimize the number of discrete security groups.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Reduce number of IAM groups.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Terminate unused access keys.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Disable access for inactive or unused IAM users.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Remove unused IAM access keys.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Delete unused SSH Public Keys.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Restrict access to Amazon Machine Images (AMIs).', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Restrict access to EC2 security groups.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Restrict access to RDS instances.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Restrict access to Redshift clusters.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Restrict access to outbound access.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Disallow unrestricted ingress access on uncommon ports.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Restrict access to well-known ports such as CIFS, FTP, ICMP, SMTP, SSH, Remote desktop.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Inventory and categorize all existing custom applications by the types of data stored, compliance requirements and possible threats they face.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Involve IT security throughout the development process.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Grant the fewest privileges as possible for application users.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Enforce a single set of data loss prevention policies across custom applications and all other cloud services.', 0, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Encrypt highly sensitive data such as protected health information (PHI) or personally identifiable information (PII)', 0, null, null, $aParagraphStyles );

    $projectDescriptionPage->addTextBreak(2);

    $projectDescriptionPage->addText('Checklist Per Component', array('color'=>'DE5C5C') );
    $projectDescriptionPage->addListItem('IAM', 0 );
    $projectDescriptionPage->addListItem('Avoid using AWS root account user access keys as it gives full access to all resources.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('MFA authentication is enabled for the root account to provide two-factor authentication.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Assign individual IAM users with necessary permissions to enable login.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Ensure User Accounts also have MFA authentication.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('IAM Access Keys must be rotated at periodic intervals.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Ensure a strong password policy for users.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Assign permissions to users based on User Groups, instead of individual IAM users.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Provide access to a resource through IAM Roles', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Grant least access while creating IAM Policies, needed to perform the necessary actions', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Attach IAM Policies to Groups or Roles on creation', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('If required, conditions can be defined for Policies under which access is granted to a resource', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Get rid of unnecessary IAM credentials, those with are inactive or unused', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Use IAM Roles to grant access to applications on EC2 Instances', 1, null, null, $aParagraphStyles );
    
    $projectDescriptionPage->addTextBreak();
    
    $projectDescriptionPage->addListItem('S3', 0 );
	$projectDescriptionPage->addListItem('Ensure S3 buckets are not publicly accessible (public read or write permissions) — users can enable Amazon S3 to block public access.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Make use of object-level or bucket-level permissions in addition to IAM Policies to grant access to resources.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Enable MFA Delete to prevent accidental deletion of buckets.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Consider encryption of stored data, which can be done in two ways — server-side and client-side encryption.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Enable encryption of inbound and outbound data traffic, through SSL endpoints.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Configure S3 lifecycle management through rule-based actions and use versioning to store and retrieve multiple versions of an object in a bucket, to deal with accidental deletions.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Ensure S3 access logging is enabled.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Constantly audit and monitor S3 buckets using CloudWatch metrics.', 1, null, null, $aParagraphStyles );

    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addListItem('EC2, VPC, and EBS', 0 );
    $projectDescriptionPage->addListItem('Ensure data and disk volumes in EBS are encrypted with AES-256, the industry-standard algorithm.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Restrict access to instances from limited IP ranges using a Security Group.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Limit the range of open ports on EC2 security groups, to prevent exposure to vulnerabilities.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Ensure ELBs have a valid security group attached to it.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Monitor and optimize default security groups, as they allow unrestricted access for inbound and outbound traffic.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Ensure restricted inbound access to SSH, FTP, SMTP, MySQL, PostgreSQL, MongoDB, MSSQL, CIFS, etc. to required entities only.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Use IAM roles to grant access to EC2, instead of access keys for temporary requirements.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('If you’re using IAM user access keys for long term permissions, ensure that you don’t embed the keys directly into code, generate different keys for different applications, rotate your access keys, use MFA authentication and decommission unused key pairs.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Enable and activate your VPC flow logs to record inbound and outbound traffic in your VPC for better monitoring and early diagnosis.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Delete unused Virtual Private Gateways and VPC Internet Gateways.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Make sure that no VPC endpoints are exposed, by checking the principal value in the policy.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Ensure no ACLs allow unrestricted inbound or outbound access.', 1, null, null, $aParagraphStyles );
    

    $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addListItem('CloudTrail', 0 );
    $projectDescriptionPage->addListItem('Ensure CloudTrail is activated across all regions, and for global services like IAM, STS, etc.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('It is recommended to log to a centralized S3 bucket.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Make sure both CloudTrail itself and CloudTrail logging are enabled for all regions.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Ensure CloudTrail log file integrity validation is enabled.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Ensure CloudTrail log files are encrypted.', 1, null, null, $aParagraphStyles );
    
    $projectDescriptionPage->addTextBreak();


    $projectDescriptionPage->addListItem('RDS', 0 );
    $projectDescriptionPage->addListItem('Ensure RDS security groups do not allow unrestricted access.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Ensure encryption of the RDS instances and snapshots, using AES-256 level encryption.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Protect data in transit to RDS through SSL endpoints.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Monitor control to RDS using AWS KMS and Customer Managed Keys.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Configure AWS Secrets Manager to automatically rotate the secrets for Amazon RDS.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Ensure RDS database instances and snapshots are not publicly accessible.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Enable the auto minor upgrade feature for RDS.', 1, null, null, $aParagraphStyles );

    $projectDescriptionPage->addTextBreak();
    $projectDescriptionPage->addListItem('Redshift', 0 );
    $projectDescriptionPage->addListItem('Enable the require_ssl parameter in all Redshift clusters to minimize risk for encryption of data in transit for Redshift, and to connect your SQL client with your cluster.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Enable Redshift Cluster encryption.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Ensure Redshift user activity logging is enabled.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Ensure Redshift encryption with KMS Customer Managed Keys.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('It is recommended that Redshift clusters are launched within a VPC for better control.', 1, null, null, $aParagraphStyles );
    $projectDescriptionPage->addListItem('Ensure that the Redshift clusters are not publicly accessible.', 1, null, null, $aParagraphStyles );
    
    

    $projectDescriptionPage->addTextBreak(2);
    $projectDescriptionPage->addTitle( 'FALLBACKS', 2); // TOC Bookmark 
    $projectDescriptionPage->addText( 'Red Team Partners will provide a detailed report at the end of this engagement. Our reports are quality controlled by certified testers. Using the traffic light system (Red=High, Yellow=Medium, Green=Low) your report will highlight any vulnerabilities/risks from this assessment. From the report provided, you will be able to understand any weaknesses that can be exploited and if your system meets expectations for functionality and security. Red Team Partners will also include remediation/comments and suggestions on how to resolve any vulnerabilities/risks found.' );
    $projectDescriptionPage->addTextBreak();

    $projectDescriptionPage->addText( 'Should exploitation successfully permit, Red Team Partners will aim to escalate to the highest of privileges and, with your agreement, continue to leverage this access to penetrate as deep as possible in your network to help portray a realistic attack scenario.' );
    
    $projectDescriptionPage->addPageBreak();

    //############################### END PROJECT DESCRIPTION PAGE ###############################


