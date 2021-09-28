<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?php echo $titlePage; ?></h1>
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
                                    <!-- <select class="form-control service-type" id="service-type" name="service-type[]" aria-label="Type of Service" aria-describedby="service-type-help" required> -->

                                    <select class="form-control service-type" id="service-type" name="service-type[]" multiple="multiple" aria-label="Type of Service" aria-describedby="service-type-help"  required>
                                        <option></option>
                                        <?php 
                                            // $services = array(
                                            //     'API Penetration Test',
                                            //     'Web Application Penetration Test',
                                            //     'Build Review Assessment',
                                            //     'AWS Cloud Assessment',
                                            //     'Cloud Based Configuration Review',
                                            //     'Cyber Threat Intelligence',
                                            //     'Documentation Review',
                                            //     'Firewall Configuration Assessment',
                                            //     'Infrastructure Penetration Test',
                                            //     'Phishing Simulation',
                                            //     'Physical Assessment',
                                            //     'Red Team Assessment',
                                            //     'Virtualisation Configuration Review',
                                            //     'VPN Assessment',
                                            //     'Vulnerability Assessment',
                                            //     'Wireless Network Assessment',
                                            //     'Mobile Application Penetration Test',
                                            //     'Secure Code Review',
                                            //     'O365 Penetration Test',
                                            //     'Azure Cloud Review',
                                            // );

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
                                                'IoT Penetration Testing',
                                                'Mobile Application Penetration Test',
                                                // 'PCI DSS Compliance Audit',
                                                // 'Performance Stress Testing/Load Testing',
                                                'Phishing Simulation',
                                                'Red Team Assessment',
                                                'Secure Code Review',
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
                                                'Virtualisation Configuration Review',
                                                'VPN Assessment',
                                                'Incident Response and Investigation',
                                                'Performance Stress/Load testing',
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

                    <br />

                    <!-- <div class="card">
                        <div class="card-header palette-Light-Blue-800">
                            <h2 class="c-white"><i data-feather="tool"></i> Project Pre-Requisites</h2>
                        </div>
                        <div class="card-body form-padding">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="prerequisite" id="prerequisite_a" checked required>
                                <label class="form-check-label" for="prerequisite_a">
                                    Pre-Requisite A
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="prerequisite" id="prerequisite_b" required>
                                <label class="form-check-label" for="prerequisite_b">
                                    Pre-Requisite B
                                </label>
                            </div>
                            
                        </div>
                    </div> -->

                    <br />

                    <div class="card">
                        <div class="card-header palette-Light-Blue-800">
                            <h2 class="c-white"><i data-feather="tool"></i> Project Disclaimers</h2>
                        </div>
                        <div class="card-body form-padding">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="disclaimer" id="disclaimer_a" checked required>
                                <label class="form-check-label" for="disclaimer_a">
                                    Disclaimer A
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="disclaimer" id="disclaimer_b" required>
                                <label class="form-check-label" for="disclaimer_b">
                                    Disclaimer B
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="disclaimer" id="disclaimer_c" required>
                                <label class="form-check-label" for="disclaimer_c">
                                    Disclaimer C
                                </label>
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