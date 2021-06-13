<?php #include('views/header.php'); ?>

    <div class="container-fluid">
      <div class="row">
        
        <!-- <?php #include('views/sidebar-nav.php'); ?> -->

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">S.O.W. Generator</h1>
          </div>

          <div class="card">
            <div class="card-body card-padding palette-Grey-100 bg">
                <form name="sow-generator-form" id="sow-generator-form" class="sow-generator-form">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header palette-Red-300">
                                    <h2 class="c-white"><i data-feather="tool"></i> General Information</h2>
                                </div>
                                <div class="card-body form-padding">
                                    <div class="form-group">
                                        <label for="service-type" class="control-label f-700">Select Service Type <span class="required">*</span></label>
                                            <select class="form-control service-type" id="service-type" name="service-type[]" aria-label="Type of Service" aria-describedby="service-type-help" required>
                                                <option></option>
                                                <?php 
                                                    $services = array(
                                                        'API Penetration Test',
                                                        'Web Application Penetration Test',
                                                        'Build Review Assessment',
                                                        'AWS Cloud Assessment',
                                                        'Cloud Based Configuration Review',
                                                        'Cyber Threat Intelligence',
                                                        'Documentation Review',
                                                        'Firewall Configuration Assessment',
                                                        'Infrastructure Penetration Test',
                                                        'Phishing Simulation',
                                                        'Physical Assessment',
                                                        'Red Team Assessment',
                                                        'Virtualisation Configuration Review',
                                                        'VPN Assessment',
                                                        'Vulnerability Assessment',
                                                        'Wireless Network Assessment',
                                                        'Mobile Application Penetration Test',
                                                        'Secure Code Review',
                                                        'O365 Penetration Test',
                                                        'Azure Cloud Review',
                                                    );

                                                    sort($services);

                                                    foreach($services as $service)
                                                    echo '<option value="'.$service.'">'.$service.'</option>';
                                                ?>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="generated-date" class="control-label f-700">Generated Date <span class="required">*</span></label>
                                        <input type="text" class="form-control generated-date" name="generated-date" id="generated-date" aria-label="Generated Date" aria-describedby="generated-date" placeholder="(MM/DD/YYYY)" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="delivery-manager-name" class="control-label f-700">Delivery Manager Name <span class="required">*</span></label>
                                        <input type="text" class="form-control delivery-manager-name" name="delivery-manager-name" id="delivery-manager-name" aria-label="Delivery Manager Name" aria-describedby="delivery-manager-name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="delivery-manager-email" class="control-label f-700">Delivery Manager Email Address <span class="required">*</span></label>
                                        <input type="email" class="form-control delivery-manager-email" name="delivery-manager-email" id="delivery-manager-email" aria-label="generated-date" aria-describedby="Delivery Manager Email" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="estimated-delivery-date" class="control-label f-700">Esimated Delivery Date <span class="required">*</span></label>
                                        <input type="text" class="form-control estimated-delivery-date" name="estimated-delivery-date" id="estimated-delivery-date" aria-label="Estimated Delivery Date" aria-describedby="estimated-delivery-date" placeholder="(MM/DD/YYYY)" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header palette-Indigo-300">
                                    <h2 class="c-white"><i data-feather="tool"></i> Client Information</h2>
                                </div>
                                <div class="card-body form-padding">
                                    <!-- <div class="form-group">
                                        <label for="client-name" class="control-label f-700">Client's Name</label>
                                        <input type="text" 
                                            class="form-control client-name" name="client-name" id="client-name" aria-label="Client Name" aria-describedby="generated-date" >         
                                    </div> -->
                                    <div class="form-group">
                                        <label for="client-company-name" class="control-label f-700">Client's Company Name <span class="required">*</span></label>
                                        <input type="text" 
                                            class="form-control client-company-name" name="client-company-name" id="client-company-name" aria-label="Client Company Name" aria-describedby="client-company-name" required>         
                                    </div>
                                    <div class="form-group">
                                        <label for="poc-name" class="control-label f-700">POC Name <span class="required">*</span></label>
                                        <input type="text" 
                                            class="form-control poc-name" name="poc-name" id="poc-name" aria-label="POC Name" aria-describedby="poc-name" required>         
                                    </div>
                                    <div class="form-group">
                                        <label for="poc-mobile-number" class="control-label f-700">POC Mobile Number <span class="required">*</span></label>
                                        <input type="text" 
                                            class="form-control poc-mobile-number" name="poc-mobile-number" id="poc-mobile-number" aria-label="POC Mobile Number" aria-describedby="poc-mobile-number" required>         
                                    </div>
                                    <div class="form-group">
                                        <label for="poc-email-address" class="control-label f-700">POC Email Address <span class="required">*</span></label>
                                        <input type="email" 
                                            class="form-control poc-email-address" name="poc-email-address" id="poc-email-address" aria-label="POC Email Address" aria-describedby="poc-email-address" required>         
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header palette-Light-Blue-800">
                                    <h2 class="c-white"><i data-feather="tool"></i> Tester Information</h2>
                                </div>
                                <div class="card-body form-padding">
                                    <div class="form-group">
                                        <label for="tester-name" class="control-label f-700">Tester Name <span class="required">*</span></label>
                                        <input type="text" 
                                            class="form-control tester-name" name="tester-name" id="tester-name" aria-label="Tester Name" aria-describedby="tester-name" required>         
                                    </div>
                                    <div class="form-group">
                                        <label for="tester-email" class="control-label f-700">Tester Email Address <span class="required">*</span></label>
                                        <input type="email" 
                                            class="form-control tester-email" name="tester-email" id="tester-email" aria-label="Tester Email" aria-describedby="tester-email"  required>         
                                    </div>
                                    <div class="form-group">
                                        <label for="test-start-date" class="control-label f-700">Test Start Date <span class="required">*</span></label>
                                        <input type="text" class="form-control test-start-date" name="test-start-date" id="test-start-date" aria-label="Test Start Date" aria-describedby="test-start-date" placeholder="(MM/DD/YYYY)" required>
                                    </div>
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
                </form>
            </div>
          </div>
        </main>
      </div>
    </div>

<?php #include('views/footer.php'); 