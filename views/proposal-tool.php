<?php #include('views/header.php'); ?>

    <div class="container-fluid">
      <div class="row">
        
        <!-- <?php #include('views/sidebar-nav.php'); ?> -->

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Proposal Generator Tool</h1>
            <!-- <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                This week
              </button>
            </div> -->
          </div>

          <!-- <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="2304" height="972" style="display: block; height: 486px; width: 1152px;"></canvas> -->

          <form method="post" action="process.php" id="proposal-generator-form" class="proposal-generator-form">
            <div class="row">
                <div class="col-md-6">
                    <!-- <h2>Client Information Sheet</h2> -->
                    <div class="row">
                        <div class="col-xs-12 col-lg-12">
                            <div class="form-group">
                                <input type="text"
                                    class="form-control" name="company-name" id="company-name" aria-label="Company Name" aria-describedby="company-name-help" placeholder="Company Name of Client">
                                <small id="company-name-help" class="form-text text-muted">Enter client's company name.</small>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-12">
                            <div class="form-group">
                            <textarea class="form-control" name="company-description" id="company-description" aria-label="Company Description" rows="3" placeholder="Description of Company"></textarea>
                            <small id="company-description-help" class="form-text text-muted">What does your company offer - services/provides?</small>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-12">
                            <div class="form-group">
                                <input type="text"
                                    class="form-control" name="client-name" id="client-name" aria-label="Client's Name" aria-describedby="client-name-help" placeholder="Client's Name">
                                <small id="client-name-help" class="form-text text-muted">Enter client's full name.</small>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-12">
                            <div class="form-group">
                                <input type="email"
                                    class="form-control" name="client-email" id="client-email" aria-label="Client's Email" aria-describedby="client-email-help" placeholder="Client's Email Address">
                                <small id="client-email-help" class="form-text text-muted">Enter client's Email Address</small>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-12">
                            <div class="form-group">
                                <input type="text"
                                    class="form-control" name="client-contact" id="client-contact" aria-label="Client's Contact" aria-describedby="client-contact-help" placeholder="Client's Contact Number">
                                <small id="client-contact-help" class="form-text text-muted">Enter client's contact number.</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- <h2>For RTP Personnel Only</h2> -->
                    <div class="row">
                        <div class="col-xs-12 col-lg-12">
                            <div class="form-group">
                                <input type="text"
                                    class="form-control" name="account-manager" id="account-manager" aria-label="Account Manager" aria-describedby="account-manager-help" placeholder="Account Manager's Name">
                                <small id="account-manager-help" class="form-text text-muted">Enter your account manager's name.</small>
                            </div>  
                        </div>
                        <div class="col-xs-12 col-lg-12">
                            <div class="form-group">
                                <input type="text"
                                    class="form-control" name="account-manager-contact" id="account-manager-contact" aria-label="Account Manager Contact Number" aria-describedby="account-manager-email-help" placeholder="Account Manager Contact Number">
                                <small id="account-manager-contact-help" class="form-text text-muted">Enter valid account manager's contact number.</small>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-12">
                            <div class="form-group">
                                <input type="email"
                                    class="form-control" name="account-manager-email" id="account-manager-email" aria-label="Account Manager Email" aria-describedby="account-manager-email-help" placeholder="Account Manager Email Address">
                                <small id="account-manager-email-help" class="form-text text-muted">Enter valid account manager's email address.</small>
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-lg-12">
                            <div class="form-group">
                                <!-- <input type="text"
                                    class="form-control" name="service-type" id="service-type" aria-label="Type of Service" aria-describedby="service-type-help" placeholder="Type of Service"> -->
                                <select class="form-control service-type" id="service-type" name="service-type[]" multiple="multiple" aria-label="Type of Service" aria-describedby="service-type-help">
                                    <?php 
                                        $services = array(
                                            'API Testing',
                                            'Build Review',
                                            'Cloud Based Configuration Review',
                                            'Cyber Security Training',
                                            'Dark Web Cyber Intelligence Monitoring',
                                            'Documentation Review',
                                            'Firewall Assessment',
                                            'Forensics and Investigations',
                                            'Infrastructure Testing',
                                            'IoT Penetration Testing',
                                            'Mobile iOS and Android Testing',
                                            'PCI DSS Compliance Audit',
                                            'Performance Stress Testing/Load Testing',
                                            'Phishing Simulation',
                                            'Red Team Assessment',
                                            'Secure Code Review',
                                            'VPN Assessment',
                                            'Vulnerability Assessment',
                                            'Web Application Penetration Testing',
                                            'Wireless Network Audit',
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

                            <div class="services-actions row">
                                <div class="col-md-6">
                                    <button class="btn-success btn" id="add-days" disabled>Add Days</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn-danger btn" id="clear-services" disabled>Clear Selection</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-lg-12">
                            <div class="form-group">
                                <div class="list-service-wrapper" id="list-service-wrapper">
                            
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-xs-12 col-lg-12">
                            <div class="form-group">
                                <input type="text"
                                    class="form-control" name="test-date" id="test-date" aria-label="Testing Date" aria-describedby="test-date-help" placeholder="Date of Test">
                                <small id="test-date-help" class="form-text text-muted">Enter testing date (MM/DD/YYYY).</small>
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
            <hr />
            <div class="row">
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </div>
        </form>
        </main>
      </div>
    </div>

<?php #include('views/footer.php'); 