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

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header palette-Red-300">
                            <h2 class="c-white"><i data-feather="tool"></i> General Information</h2>
                        </div>
                        <div class="card-body form-padding">
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header palette-Red-300">
                            <h2 class="c-white"><i data-feather="tool"></i> General Information</h2>
                        </div>
                        <div class="card-body form-padding">
                            
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header palette-Red-300">
                            <h2 class="c-white"><i data-feather="tool"></i> Generator Settings</h2>
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