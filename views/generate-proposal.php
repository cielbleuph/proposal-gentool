<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?php echo $titlePage; ?></h1>
</div>

<div class="card">
    <div class="card-body card-padding palette-Grey-100 bg">
    <form method="post" action="process.php" id="proposal-generator-form" class="proposal-generator-form form-columnar form" role="form">
        <div class="row">

            <div class="col-md-6">
                <!-- <h2>Client Information Sheet</h2> -->
                <div class="card">
                    <div class="card-header palette-Light-Blue-800">
                        <h2 class="c-white"><i data-feather="info"></i> Client Information</h2>
                    </div>
                    
                    <div class="card-body form-padding">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="company-name" class="control-label f-700">Company Name <span class="required">*</span></label>
                                    <input type="text"
                                        class="form-control" name="company-name" id="company-name" aria-label="Company Name" aria-describedby="company-name-help" required>
                                    <small id="company-name-help" class="form-text text-muted">Enter client's company name.</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="client-name" class="control-label f-700">Client's Name <span class="required">*</span></label>
                                    <input type="text"
                                        class="form-control" name="client-name" id="client-name" aria-label="Client's Name" aria-describedby="client-name-help" required>
                                    <small id="client-name-help" class="form-text text-muted">Enter client's full name.</small>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="company-description" class="control-label f-700">Company Description <span class="required">*</span></label>
                                <textarea class="form-control" name="company-description" id="company-description" aria-label="Company Description" rows="3" required></textarea>
                                <small id="company-description-help" class="form-text text-muted">What does the company offer - services/provides?</small>
                                </div>
                            </div>    
                        </div>
                    
                    
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="company-email" class="control-label f-700">Client's Email Address <span class="required">*</span></label>
                                    <input type="email"
                                        class="form-control" name="client-email" id="client-email" aria-label="Client's Email" aria-describedby="client-email-help" required>
                                    <small id="client-email-help" class="form-text text-muted">Enter client's Email Address</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="company-contact" class="control-label f-700">Company Contact Number <span class="required">*</span></label>
                                    <input type="text"
                                        class="form-control" name="client-contact" id="client-contact" aria-label="Client's Contact" aria-describedby="client-contact-help" required>
                                    <small id="client-contact-help" class="form-text text-muted">Enter client's contact number.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                
                
                
            </div>
        </div>

        <div class="col-md-6">
            <!-- <h2>For RTP Personnel Only</h2> -->
            <div class="card">
                <div class="card-header palette-Red-300">
                    <h2 class="c-white"><i data-feather="tool"></i> RTP Information</h2>
                </div>
                <div class="card-body form-padding">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="account-manager" class="control-label f-700">Account Manager's Name <span class="required">*</span></label>
                                <input type="text"
                                    class="form-control" name="account-manager" id="account-manager" aria-label="Account Manager" aria-describedby="account-manager-help" required>
                                <small id="account-manager-help" class="form-text text-muted">Enter your account manager's name.</small>
                            </div>  
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="account-manager-contact" class="control-label f-700">Account Manager's Contact Number <span class="required">*</span></label>
                                <input type="text"
                                    class="form-control" name="account-manager-contact" id="account-manager-contact" aria-label="Account Manager Contact Number" aria-describedby="account-manager-email-help" required>
                                <small id="account-manager-contact-help" class="form-text text-muted">Enter valid account manager's contact number.</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="company-name" class="control-label f-700">Account Manager's Email Address <span class="required">*</span></label>
                                <input type="email"
                                    class="form-control" name="account-manager-email" id="account-manager-email" aria-label="Account Manager Email" aria-describedby="account-manager-email-help" required>
                                <small id="account-manager-email-help" class="form-text text-muted">Enter valid account manager's email address.</small>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="test-date" class="control-label f-700">Test Date</label>
                                <input type="text"
                                    class="form-control" name="test-date" id="test-date" aria-label="Testing Date" aria-describedby="test-date-help">
                                <small id="test-date-help" class="form-text text-muted">Enter estimated start of testing.</small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="service-type" class="control-label f-700">Service Types <span class="required">*</span></label>
                                <select class="form-control service-type" id="service-type" name="service-type[]" multiple="multiple" aria-label="Type of Service" aria-describedby="service-type-help"  required>
                                    <?php 
                                        $services = array(
                                            'API Penetration Test',
                                            'Build Review Assessment',
                                            // 'Cloud Based Configuration Review',
                                            // 'Cyber Security Training',
                                            // 'Dark Web Cyber Intelligence Monitoring',
                                            'Documentation/Architecture Review',
                                            'Firewall Configuration Assessment',
                                            'Cyber Forensics and Investigations',
                                            'Infrastructure Penetration Test',
                                            // 'IoT Penetration Testing',
                                            'Mobile Application Penetration Test',
                                            // 'PCI DSS Compliance Audit',
                                            // 'Performance Stress Testing/Load Testing',
                                            'Phishing Simulation',
                                            'Red Team Assessment',
                                            'Secure Code Review',
                                            'VPN Assessment',
                                            'Vulnerability Assessment',
                                            'Web Application Penetration Test',
                                            'Wireless Network Assessment',
                                            'Dark Web Cyber Threat Intelligence',
                                            'O365 Penetration Test',
                                            'Cloud Assessment/Review (AWS)',
                                            'Cloud Assessment/Review (Azure)',
                                            'Cyber Essentials Basic',
                                            'Cyber Essentials Plus',
                                            'Fraud Investigation',
                                            'OWASP for Developers',
                                            'Physical Assessment',
                                        );

                                        sort($services);

                                        foreach($services as $service)
                                        echo '<option value="'.$service.'">'.$service.'</option>';
                                    ?>


                                </select>
                                <small id="service-type-help" class="form-text text-muted">What are the types of services included.</small>
                                <!-- Infrastructure Penetration Test / Phishing Simulation / Vulnerability Scanning / Cyber Threat Intelligence -->
                                
                            </div>
                            

                            <div class="form-group service-type-container" id="service-type-container">
                                <div class="services-type-wrapper" id="services-type-wrapper">
                                    <ul>
                                    </ul>
                                </div>
                            </div>

                            <div class="services-actions">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <button class="btn-primary btn waves-effect" id="add-days" disabled>Add Days</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <button class="btn-danger btn waves-effect" id="clear-services" disabled>Clear Selection</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="list-service-wrapper" id="list-service-wrapper">
                        
                            </div>
                        </div>
                    </div>

                    
                    
                    <!-- <div class="col-xs-12 col-lg-12">
                        <div class="form-group">
                            <input type="text"
                                class="form-control" name="number-of-days" id="number-of-days" aria-label="Number of Days to Complete" aria-describedby="number-of-days-help" placeholder="Number of Days">
                            <small id="number-of-days-help" class="form-text text-muted">Total number of days to complete.</small>
                        </div>
                    </div> -->
                </div>
                
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-success waves-effect">Generate</button>
            <div class="lds-facebook"><div></div><div></div><div></div></div>
        </div>
    </div>
    <input type="hidden" name="totalDays" id="totalDays" class="totalDays" /> 
        </form>
    </div>
</div>