<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="expires" content="Sun, 01 Jan 2014 00:00:00 GMT"/>
    <meta http-equiv="pragma" content="no-cache" />
    <title>Proposal Generator Tool</title>
    <!-- Required meta tags -->
   

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
    <style>
        body{
            background-color: #d1ff0014;
        }
        textarea{
            resize: none;
        }
        .btn{
            width: 100%;
        }
        .btn:hover{
            opacity: 0.7;
        }
        select{
            width: 100%;
        }


    </style>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Proposal Generation Tool</h1>
            </div>
        </div>
        <div class="alert alert-info" role="alert">
            <strong>Under Development</strong>
        </div>
        <form method="post" action="process.php" id="proposal-generator-form" class="proposal-generator-form">
            <div class="row">
                <div class="col-md-6">
                    <h2>Client Information Sheet</h2>
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
                    <h2>For RTP Personnel Only</h2>
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
                                    <option value="Web Application Penetration Testing">Web Application Penetration Testing</option>
                                    <option value="Red Team Assessment">Red Team Assessment</option>
                                    <option value="Vulnerability Assessment">Vulnerability Assessment</option>
                                    <option value="Infrastructure Testing">Infrastructure Testing</option>
                                    <option value="API Testing">API Testing</option>
                                    <option value="Mobile iOS and Android Testing">Mobile iOS and Android Testing</option>
                                    <option value="Phishing Simulation">Phishing Simulation</option>
                                    <option value="Documentation Review">Documentation Review</option>
                                    <option value="Firewall Assessment">Firewall Assessment</option>
                                    <option value="Cloud Based Configuration Review">Cloud Based Configuration Review</option>
                                    <option value="Wireless Network Audit">Wireless Network Audit</option>
                                    <option value="VPN Assessment">VPN Assessment</option>
                                    <option value="Build Review">Build Review</option>
                                    <option value="PCI DSS Compliance Audit">PCI DSS Compliance Audit</option>
                                    <option value="Secure Code Review">Secure Code Review</option>
                                    <option value="Cyber Security Training">Cyber Security Training</option>
                                    <option value="Forensics and Investigations">Forensics and Investigations</option>
                                    <option value="Dark Web Cyber Intelligence Monitoring">Dark Web Cyber Intelligence Monitoring</option>
                                    <option value="Performance Stress Testing/Load Testing">Performance Stress Testing/Load Testing</option>
                                    <option value="IoT Penetration Testing">IoT Penetration Testing</option>
                                </select>
                                <small id="service-type-help" class="form-text text-muted">What are the types of services included.</small>
                                <!-- Infrastructure Penetration Test / Phishing Simulation / Vulnerability Scanning / Cyber Threat Intelligence -->
                                
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
                        <div class="col-xs-12 col-lg-12">
                            <div class="form-group">
                                <input type="text"
                                    class="form-control" name="number-of-days" id="number-of-days" aria-label="Number of Days to Complete" aria-describedby="number-of-days-help" placeholder="Number of Days">
                                <small id="number-of-days-help" class="form-text text-muted">Total number of days to complete.</small>
                            </div>
                        </div>
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
    </div>


    

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="assets/js/script.js?t=<?php echo time(); ?>"></script>
  </body>
</html>