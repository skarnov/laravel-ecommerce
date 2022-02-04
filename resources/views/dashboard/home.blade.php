<!-- Page Content -->
<div class="right_col" role="main">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="alert alert-danger">
                    
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="alert alert-warning">
                   
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="alert alert-success">
                
                </div>
            </div>
        </div>

    <div class="col-md-12">
        <div class="col-md-4">
            <div class="card border-secondary mb-3">
                <div class="card-header bg-transparent border-dark"><b>Active User</b></div>
                <div class="card-body text-secondary">
                    <h5 class="card-title"></h5>
                    <p class="card-text">Active User</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-secondary mb-3">
                <div class="card-header bg-transparent border-dark"><b>This Month User</b></div>
                <div class="card-body text-purple">
                    <h5 class="card-title"></h5>
                    <p class="card-text">This Month User</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-success mb-3">
                <div class="card-header bg-transparent border-dark"><b>Cashbook IN</b></div>
                <div class="card-body text-success">
                    <h5 class="card-title"></h5>
                    <p class="card-text">Total Cashbook Amount</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-info mb-3">
                <div class="card-header bg-transparent border-info"><b>Cashbook OUT</b></div>
                <div class="card-body text-info">
                    <h5 class="card-title"></h5>
                    <p class="card-text">Total Cashbook Amount</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-secondary mb-3">
                <div class="card-header bg-transparent border-dark"><b>Total Income</b></div>
                <div class="card-body text-pink">
                    <h5 class="card-title"></h5>
                    <p class="card-text">Total Income</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-secondary mb-3">
                <div class="card-header bg-transparent border-dark"><b><?= date('F') ?> Month Income</b></div>
                <div class="card-body text-purple">
                    <h5 class="card-title"></h5>
                    <p class="card-text"><?= date('F') ?> Month Income</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-secondary mb-3">
                <div class="card-header bg-transparent border-dark"><b>Domains</b></div>
                <div class="card-body text-cream">
                    <h5 class="card-title"></h5>
                    <p class="card-text">Total Active Domains</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-danger mb-3">
                <div class="card-header bg-transparent border-danger"><b>Domains Warning</b></div>
                <div class="card-body text-danger">
                    <h5 class="card-title"><a href="javascript:;" data-toggle="modal" data-target="#domainWarning"></a></h5>
                    <p class="card-text">Total Warning Domains</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-primary mb-3">
                <div class="card-header bg-transparent border-primary"><b>Hostings</b></div>
                <div class="card-body text-primary">
                    <h5 class="card-title"></h5>
                    <p class="card-text">Total Active Hostings</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-danger mb-3">
                <div class="card-header bg-transparent border-danger"><b>Hostings Warning</b></div>
                <div class="card-body text-danger">
                    <h5 class="card-title"><a href="javascript:;" data-toggle="modal" data-target="#hostingWarning"></a></h5>
                    <p class="card-text">Total Warning Hostings</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-danger mb-3">
                <div class="card-header bg-transparent border-danger"><b>New User</b></div>
                <div class="card-body text-danger">
                    <h5 class="card-title"></h5>
                    <p class="card-text">Total New User</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-danger mb-3">
                <div class="card-header bg-transparent border-danger"><b>Support Ticket</b></div>
                <div class="card-body text-danger">
                    <h5 class="card-title"></h5>
                    <p class="card-text">New Support Ticket</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Page Content -->

<!-- Start Domain Warning Modal -->
<div class="modal fade" id="domainWarning" tabindex="-1" aria-labelledby="domainWarningLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Domain Warning</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Expiry Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Domain Warning Modal -->

<!-- Start Hosting Warning Modal -->
<div class="modal fade" id="hostingWarning" tabindex="-1" aria-labelledby="hostingWarningLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hosting Warning</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Domain</th>
                            <th scope="col">Space</th>
                            <th scope="col">Expiry Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Hosting Warning Modal -->