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
                <div class="col-xs-12 col-lg-4">
                    <div class="form-group">
                        <input type="text"
                            class="form-control" name="account-manager" id="account-manager" aria-label="Account Manager" aria-describedby="account-manager-help" placeholder="Account Manager">
                        <small id="account-manager-help" class="form-text text-muted">Enter your account manager's name.</small>
                    </div>  
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="form-group">
                        <input type="email"
                            class="form-control" name="account-manager-email" id="account-manager-email" aria-label="Account Manager Email" aria-describedby="account-manager-email-help" placeholder="Account Manager Email Address">
                        <small id="account-manager-email-help" class="form-text text-muted">Enter valid account manager's email address.</small>
                    </div>
                </div>
                
                
                <div class="col-xs-12 col-lg-4">
                    <div class="form-group">
                        <input type="text"
                            class="form-control" name="client-name" id="client-name" aria-label="Client's Name" aria-describedby="client-name-help" placeholder="Client's Name">
                        <small id="client-name-help" class="form-text text-muted">Enter client's full name.</small>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="form-group">
                        <input type="email"
                            class="form-control" name="client-email" id="client-email" aria-label="Client's Email" aria-describedby="client-email-help" placeholder="Client's Email Address">
                        <small id="client-email-help" class="form-text text-muted">Enter client's Email Address</small>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="form-group">
                        <input type="text"
                            class="form-control" name="client-contact" id="client-contact" aria-label="Client's Contact" aria-describedby="client-contact-help" placeholder="Client's Contact Number">
                        <small id="client-contact-help" class="form-text text-muted">Enter client's contact number.</small>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="form-group">
                        <input type="text"
                            class="form-control" name="company-name" id="company-name" aria-label="Client's Company Name" aria-describedby="company-name-help" placeholder="Company Name of Client">
                        <small id="company-name-help" class="form-text text-muted">Enter client's company name.</small>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="form-group">
                        <input type="text"
                            class="form-control" name="test-date" id="test-date" aria-label="Testing Date" aria-describedby="test-date-help" placeholder="Date of Test">
                        <small id="test-date-help" class="form-text text-muted">Enter testing date (MM/DD/YYYY).</small>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="form-group">
                        <input type="text"
                            class="form-control" name="service-description" id="service-description" aria-label="Service Description" aria-describedby="service-help" placeholder="Service Description">
                        <small id="service-description-help" class="form-text text-muted">Enter service description.</small>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="form-group">
                        <input type="text"
                            class="form-control" name="number-of-days" id="number-of-days" aria-label="Number of Days to Complete" aria-describedby="number-of-days-help" placeholder="Number of Days">
                        <small id="number-of-days-help" class="form-text text-muted">Total number of days to complete.</small>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="form-group">
                        <input type="text"
                            class="form-control" name="scope" id="scope" aria-label="Scope of Test/Service" aria-describedby="scope-help" placeholder="Scope of Test/Service">
                        <small id="scope-help" class="form-text text-muted">Enter scope of services/tests included.</small>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="form-group">
                        <input type="text"
                            class="form-control" name="service-type" id="service-type" aria-label="Type of Service" aria-describedby="service-type-help" placeholder="Type of Service">
                        <small id="service-type-help" class="form-text text-muted">What are the types of services included.</small>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="form-group">
                        <input type="text"
                            class="form-control" name="assessment-type" id="assessment-type" aria-label="Assessment Type" aria-describedby="assessment-type-help" placeholder="Assessment Type">
                        <small id="assessment-type-help" class="form-text text-muted">What is the type of Assessment?</small>
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
                    <textarea class="form-control" name="test-reason" id="test-reason" rows="3" aria-label="Reason for Testing" placeholder="Reason for Testing"></textarea>
                    <small id="test-reason-help" class="form-text text-muted">What's the reason for testing?</small>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-12">
                    <div class="form-group">
                        <textarea class="form-control" name="methodologies" id="methodologies" rows="3" aria-label="Methodologies" placeholder="Methodologies"></textarea>
                        <small id="methodologies-help" class="form-text text-muted">What is the methodologies involved?</small>
                    </div>
                </div>
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
    <script src="assets/js/script.js?t=<?php echo time(); ?>"></script>
  </body>
</html>