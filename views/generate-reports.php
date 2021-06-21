<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?php echo $titlePage; ?></h1>
</div>

<div class="card">
    <div class="card-body card-padding palette-Grey-100 bg">
        <form name="reports-generator-form" id="reports-generator-form" class="reports-generator-form">
            <div class="row">
                
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header palette-Red-300">
                            <h2 class="c-white"><i data-feather="tool"></i> Information</h2>
                        </div>
                        <div class="card-body form-padding">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="company-name" class="control-label f-700">Company Name <span class="required">*</span></label>
                                        <input type="text" class="form-control company-name" name="company-name" id="company-name" aria-label="Company Name" aria-describedby="company-name" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="service-name" class="control-label f-700">Service Name <span class="required">*</span></label>
                                        <input type="text" class="form-control service-name" name="service-name" id="service-name" aria-label="Service Name" aria-describedby="service-name" placeholder="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="version" class="control-label f-700">Version <span class="required">*</span></label>
                                        <input type="text" class="form-control version" name="version" id="version" aria-label="Version" aria-describedby="version" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="date-generated" class="control-label f-700">Date Generated <span class="required">*</span></label>
                                        <input type="text" class="form-control date-generated" name="date-generated" id="date-generated" aria-label="Date Generated" aria-describedby="date-generated" placeholder="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="test-duration" class="control-label f-700">Test Duration <span class="required">*</span></label>
                                <div class="date-generated-wrapper">
                                    <input type="text" class="form-control test-duration-from" name="test-duration-from" id="test-duration-from" aria-label="Date Generated From" aria-describedby="date-generated-from" placeholder="" required>
                                    <span>to</span>
                                    <input type="text" class="form-control test-duration-to" name="test-duration-to" id="test-duration-to" aria-label="Test Duration To" aria-describedby="test-duration-to" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="overall-security" class="control-label f-700">Overall Security <span class="required">*</span></label>
                                <textarea name="overall-security" id="overall-security" cols="30" rows="3" class="form-control overall-security" aria-label="Overall Security" aria-describedby="overall-security" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header palette-Red-300">
                            <h2 class="c-white"><i data-feather="tool"></i> Key Findings</h2>
                        </div>
                        <div class="card-body form-padding">
                            <div class="form-group">
                                <label for="keyfindings-input" class="control-label f-700">Add New Entry <span class="required">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control keyfindings-input" name="keyfindings-input" id="keyfindings-input" aria-label="Add New Key Finding Entry" aria-describedby="keyfindings-input" placeholder="">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" id="keyfindings-add-btn" type="button">Add Entry</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <ul class="list-group keyfindings-listgroup">
                                    <li class="list-group-item">Cras justo odio</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        
                    <div class="card">
                        <div class="card-header palette-Red-300">
                            <h2 class="c-white"><i data-feather="tool"></i> Short Term Goals</h2>
                        </div>
                        <div class="card-body form-padding">
                            <div class="form-group">
                                <label for="date-generated" class="control-label f-700">Date Generated <span class="required">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control date-generated" name="date-generated" id="date-generated" aria-label="Date Generated" aria-describedby="date-generated" placeholder="" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">Add Entry</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Morbi leo risus</li>
                                    <li class="list-group-item">Porta ac consectetur ac</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header palette-Red-300">
                            <h2 class="c-white"><i data-feather="tool"></i> Medium Term Goals</h2>
                        </div>
                        <div class="card-body form-padding">
                            <div class="form-group">
                                <label for="date-generated" class="control-label f-700">Date Generated <span class="required">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control date-generated" name="date-generated" id="date-generated" aria-label="Date Generated" aria-describedby="date-generated" placeholder="" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">Add Entry</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Morbi leo risus</li>
                                    <li class="list-group-item">Porta ac consectetur ac</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header palette-Red-300">
                            <h2 class="c-white"><i data-feather="tool"></i> Findings Breakdown </h2>
                        </div>
                        <div class="card-body form-padding">
                            <div class="form-group row">
                                <div class="traffic-color traffic-color-critical col-sm-2"></div>
                                <label for="critical" class="col-sm-4 col-form-label control-label f-700">Critical <span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="number" min="1" max="100" class="form-control date-generated" name="date-generated" id="date-generated" aria-label="Date Generated" aria-describedby="date-generated" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="traffic-color traffic-color-high col-sm-2"></div>
                                <label for="critical" class="col-sm-4 col-form-label control-label f-700">High <span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="number" min="1" max="100" class="form-control date-generated" name="date-generated" id="date-generated" aria-label="Date Generated" aria-describedby="date-generated" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="traffic-color traffic-color-medium col-sm-2"></div>
                                <label for="critical" class="col-sm-4 col-form-label control-label f-700">Medium <span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="number" min="1" max="100" class="form-control date-generated" name="date-generated" id="date-generated" aria-label="Date Generated" aria-describedby="date-generated" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="traffic-color traffic-color-low col-sm-2"></div>
                                <label for="critical" class="col-sm-4 col-form-label control-label f-700">Low <span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="number" min="1" max="100" class="form-control date-generated" name="date-generated" id="date-generated" aria-label="Date Generated" aria-describedby="date-generated" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="traffic-color traffic-color-informational col-sm-2"></div>
                                <label for="critical" class="col-sm-4 col-form-label control-label f-700">Informational <span class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="number" min="1" max="100" class="form-control date-generated" name="date-generated" id="date-generated" aria-label="Date Generated" aria-describedby="date-generated" placeholder="" required>
                                </div>
                            </div>
                            <hr />
                            <div class="form-group row">
                                <div class="col-sm-6 offset-sm-6">
                                    <input disabled type="number" class="form-control total-findings" name="total-findings" id="total-findings" aria-label="Total Findings" aria-describedby="total-findings">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="card">
                        <div class="card-header palette-Red-300">
                            <h2 class="c-white"><i data-feather="tool"></i> Generate Report </h2>
                        </div>
                        <div class="card-body form-padding">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Summary Overview</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                <label class="form-check-label" for="flexSwitchCheckChecked">Audit Checklist</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled">
                                <label class="form-check-label" for="flexSwitchCheckDisabled">Board Report</label>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            <button type="submit" class="btn btn-success waves-effect btn-lg">Generate</button>
                            <div class="lds-facebook"><div></div><div></div><div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>