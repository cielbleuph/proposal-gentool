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
                                <textarea name="overall-security" id="overall-security" cols="30" rows="5" class="form-control overall-security" aria-label="Overall Security" aria-describedby="overall-security" required></textarea>
                            </div>
                            
                        </div>
                    </div>
                    <br />
                    
                    <div class="card">
                        <div class="card-header palette-Red-300">
                            <h2 class="c-white"><i data-feather="tool"></i> Key Findings <a data-toggle="collapse" href="#keyfindings-help-content" role="button" aria-expanded="true"><span data-placement="bottom" data-toggle="tooltip" title="Where can I find this?" class="help-icon keyfindings-help"><i data-feather="help-circle"></i></span></a></h2>
                        </div>
                        <div class="card-body form-padding">

                            <div class="form-group">
                                <label for="keyfindings-input" class="control-label f-700">Add New Entry</label>
                                <div class="input-group">
                                    <input type="text" class="form-control keyfindings-input" id="keyfindings-input" aria-label="Add New Key Finding Entry" aria-describedby="keyfindings-input" placeholder="">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary entry-btn" id="keyfindings" type="button"><i data-feather="plus"></i> Entry</button>
                                    </div>
                                </div>
                                
                            </div>
                            <small class="form-text text-muted"><a data-toggle="collapse" href="#keyfindings-help-content" role="button" aria-expanded="true">Where Can I Find This?</a></small>
                            
                            <div class="collapse form-group" id="keyfindings-help-content">
                                <br />
                                <div class="card card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div>
                            </div>

                            <small class="form-text text-muted"><a data-toggle="collapse" href="#keyfindings-bulk-wrapper" role="button" aria-expanded="true">Upload in Bulk</a></small>
                            <br />
                            
                            <div class="collapse form-group" id="keyfindings-bulk-wrapper">
                                <div class="card">
                                    <div class="card-header"><h2>Key Findings Bulk Upload</h2></div>
                                    <div class="card-body">
                                        <div class="alert alert-info" role="alert">
                                            Make sure that each entry should be separated by a semi-colon.
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control bulk-upload-textarea" id="keyfindings-bulk-upload" rows="10"></textarea>
                                        </div>
                                        
                                    
                                    </div>
                                    <div class="card-footer">
                                        <button class="align-center btn btn-secondary" id="keyfindings-bulk-btn"><i data-feather="plus"></i> Add Entries</button>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="form-group keyfindings-listgroup-wrapper">
                                <ul class="list-group list-group keyfindings-listgroup">
                                
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="card">
                        <div class="card-header palette-Red-300">
                            <h2 class="c-white"><i data-feather="tool"></i> Short Term Goals <a data-toggle="collapse" href="#shortterm-help-content" role="button" aria-expanded="true"><span data-placement="bottom" data-toggle="tooltip" title="Where can I find this?" class="help-icon shortterm-help"><i data-feather="help-circle"></i></span></a></h2>
                        </div>
                        <div class="card-body form-padding">
                            
                            <div class="form-group">
                                <label for="shortterm-input" class="control-label f-700">Add New Entry</label>
                                <div class="input-group">
                                    <input type="text" class="form-control shortterm-input" id="shortterm-input" aria-label="Add New Short Term Goal Entry" aria-describedby="shortterm-input" placeholder="">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary entry-btn" id="shortterm" type="button"><i data-feather="plus"></i> Entry</button>
                                    </div>
                                </div>
                            </div>
                            <small class="form-text text-muted"><a data-toggle="collapse" href="#shortterm-help-content" role="button" aria-expanded="true">Where Can I Find This?</a></small>
                            <div class="collapse form-group" id="shortterm-help-content">
                                <br />
                                <div class="card card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                            <small class="form-text text-muted"><a data-toggle="collapse" href="#shortterm-bulk-wrapper" role="button" aria-expanded="true">Upload in Bulk</a></small>
                            <br />
                            <div class="collapse form-group" id="shortterm-bulk-wrapper">
                                <div class="card">
                                    <div class="card-header"><h2>Short Term Goal sBulk Upload</h2></div>
                                    <div class="card-body">
                                        <div class="alert alert-info" role="alert">
                                            Make sure that each entry should be separated by a semi-colon.
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control bulk-upload-textarea" id="shortterm-bulk-upload" rows="10"></textarea>
                                        </div>
                                        
                                    
                                    </div>
                                    <div class="card-footer">
                                        <button class="align-center btn btn-secondary" id="shortterm-bulk-btn"><i data-feather="plus"></i> Add Entries</button>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="form-group shortterm-listgroup-wrapper">
                                <ul class="list-group list-group shortterm-listgroup">

                                </ul>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="card">
                        <div class="card-header palette-Red-300">
                            <h2 class="c-white"><i data-feather="tool"></i> Medium Term Goals <a data-toggle="collapse" href="#mediumterm-help-content" role="button" aria-expanded="true"><span data-placement="bottom" data-toggle="tooltip" title="Where can I find this?" class="help-icon mediumterm-help"><i data-feather="help-circle"></i></span></a></h2>
                        </div>
                        <div class="card-body form-padding">
                            
                            <div class="form-group">
                                <label for="mediumterm-input" class="control-label f-700">Add New Entry</label>
                                <div class="input-group">
                                    <input type="text" class="form-control mediumterm-input" id="mediumterm-input" aria-label="Add New Medium Term Goal Entry" aria-describedby="mediumterm-input" placeholder="">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary entry-btn" id="mediumterm" type="button"><i data-feather="plus"></i> Entry </button>
                                    </div>
                                </div>
                            </div>
                            <small class="form-text text-muted"><a data-toggle="collapse" href="#mediumterm-help-content" role="button" aria-expanded="true">Where Can I Find This?</a></small>
                            <div class="collapse form-group" id="mediumterm-help-content">
                                <br>                            
                                <div class="card card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                            <small class="form-text text-muted"><a data-toggle="collapse" href="#mediumterm-bulk-wrapper" role="button" aria-expanded="true">Upload in Bulk</a></small>
                            <br />
                            <div class="collapse form-group" id="mediumterm-bulk-wrapper">
                                <div class="card">
                                    <div class="card-header"><h2>Medium Term Goals Bulk Upload</h2></div>
                                    <div class="card-body">
                                        <div class="alert alert-info" role="alert">
                                            Make sure that each entry should be separated by a semi-colon.
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control bulk-upload-textarea" id="mediumterm-bulk-upload" rows="10"></textarea>
                                        </div>
                                        
                                    
                                    </div>
                                    <div class="card-footer">
                                        <button class="align-center btn btn-secondary" id="mediumterm-bulk-btn"><i data-feather="plus"></i> Add Entries</button>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group mediumterm-listgroup-wrapper">
                                <ul class="list-group list-group mediumterm-listgroup">
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br />

                    <div class="card">
                        <div class="card-header palette-Red-300">
                            <h2 class="c-white"><i data-feather="star"></i> Red Team Partners Recommendation <a data-toggle="collapse" href="#keyfindings-help-content" role="button" aria-expanded="true"><span data-placement="bottom" data-toggle="tooltip" title="Where can I find this?" class="help-icon keyfindings-help"><i data-feather="help-circle"></i></span></a></h2>
                        </div>
                        <div class="card-body form-padding">
                            <div class="form-group">
                                <label for="rtp-recommendations" class="control-label f-700">Add Recommendation <span class="required">*</span></label>
                                <textarea name="rtp-recommendations" cols="30" rows="5" class="form-control rtp-recommendations" id="rtp-recommendations" aria-label="Red Team Partners Recommendations" aria-describeby="rtp-recommendations" required></textarea>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>

                

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header palette-Red-300">
                            <h2 class="c-white"><i data-feather="tool"></i> Findings Breakdown </h2>
                        </div>
                        <div class="card-body form-padding">
                            <div class="form-group row">
                                <div class="traffic-color traffic-color-critical col-sm-2"></div>
                                <label for="critical" class="col-sm-5 col-form-label control-label f-700">Critical <span class="required">*</span></label>
                                <div class="col-sm-5">
                                    <input type="number" min="0" max="100" class="form-control findings critical" name="critical" id="critical" aria-label="Critical Findings" aria-describedby="critical" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="traffic-color traffic-color-high col-sm-2"></div>
                                <label for="high" class="col-sm-5 col-form-label control-label f-700">High <span class="required">*</span></label>
                                <div class="col-sm-5">
                                    <input type="number" min="0" max="100" class="form-control findings high" name="high" id="high" aria-label="High Findings" aria-describedby="high" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="traffic-color traffic-color-medium col-sm-2"></div>
                                <label for="medium" class="col-sm-5 col-form-label control-label f-700">Medium <span class="required">*</span></label>
                                <div class="col-sm-5">
                                    <input type="number" min="0" max="100" class="form-control findings medium" name="medium" id="medium" aria-label="Medium Findings" aria-describedby="medium" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="traffic-color traffic-color-low col-sm-2"></div>
                                <label for="low" class="col-sm-5 col-form-label control-label f-700">Low <span class="required">*</span></label>
                                <div class="col-sm-5">
                                    <input type="number" min="0" max="100" class="form-control findings low" name="low" id="low" aria-label="Low Findings" aria-describedby="low" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="traffic-color traffic-color-informational col-sm-2"></div>
                                <label for="informational" class="col-sm-5 col-form-label control-label f-700">Informational <span class="required">*</span></label>
                                <div class="col-sm-5">
                                    <input type="number" min="0" max="100" class="form-control findings informational" name="informational" id="informational" aria-label="Informational Findings" aria-describedby="informational" placeholder="">
                                </div>
                            </div>
                            <hr />
                            <div class="form-group row">
                                <div class="col-md-7">
                                    <label for="total-findings" class="col-form-label control-label f-700">Total Findings</label>
                                </div>
                                <div class="col-sm-5">
                                    <input readonly type="number" class="form-control total-findings" name="total-findings" id="total-findings" aria-label="Total Findings" aria-describedby="total-findings">
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
                                <input class="report-output form-check-input summary-overview-check output-group" type="checkbox" id="summary-overview-check" name="summary-overview-check">
                                <label class="form-check-label" for="summary-overview-check">Summary Overview</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="report-output form-check-input audit-checklist-check output-group" type="checkbox" id="audit-checklist-check" name="audit-checklist-check">
                                <label class="form-check-label" for="audit-checklist-check">Audit Checklist</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="report-output form-check-input board-report-check output-group" type="checkbox" id="board-report-check" name="board-report-check">
                                <label class="form-check-label" for="board-report-check">Board Report</label>
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

<div id="delete-confirm" style="display: none;" title="Delete Entry?">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>This item will be permanently deleted and cannot be recovered. Are you sure?</p>
</div>