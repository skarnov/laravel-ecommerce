<!DOCTYPE html>

<html lang="en">
    <head>
        <meta name="robots" content="noindex" />
        <meta name="googlebot" content="noindex">
        <meta name="googlebot-news" content="nosnippet">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title ? $title : $config['project_name'] ?></title>
        <!-- Favicon -->
        <link href="<?= URL::to('/') ?>/assets/frontend/img/favicon.ico" rel="icon">
        <!-- Bootstrap -->
        <link href="<?= URL::to('/') ?>/assets/backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
        <!-- Font Awesome -->
        <link href="<?= URL::to('/') ?>/assets/backend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
        <!-- Data Table -->
        <link href="<?= URL::to('/') ?>/assets/backend/vendor/datatable/datatables.min.css" rel="stylesheet"/>
        <link href="<?= URL::to('/') ?>/assets/backend/vendor/datatable/buttons.dataTables.min.css" rel="stylesheet"/>
        <!-- iCheck -->
        <link href="<?= URL::to('/') ?>/assets/backend/vendor/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="<?= URL::to('/') ?>/assets/backend/css/style.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <script>
            var jQ = new Array();
        </script>
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="<?= URL::to('/') ?>" target="_blank" class="site_title"><span><?= $config['project_name'] ?></span></a>
                        </div>
                        <div class="clearfix"></div>
                        <!-- Menu Profile -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                        
                                    <img src="<?= URL::to('/') . '/uploads/profile_image/'  ?>" class="img-circle profile_img">
          
                                    <img src="<?= URL::to('/') ?>/assets/backend/img/default/user.png" class="img-circle profile_img">
                   
                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2 class="text-capitalize"></h2>
                            </div>
                        </div>
                        <br/>
                        <!-- Sidebar Menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <ul class="nav side-menu">
                                    <li><a href="<?= URL::to('/') ?>/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                                    <?php if ($permissions == 'superadmin' || array_search('view_activity', $permissions) || array_search('view_role', $permissions) || array_search('view_admin', $permissions) || array_search('view_settings', $permissions) || array_search('view_maintenance', $permissions)): ?>
                                        <li><a><i class="fa fa-building"></i> Administration <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <?php if ($permissions == 'superadmin' || array_search('view_activity', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/dashboard/manage_activities">User Activities</a></li>
                                                <?php endif ?>
                                                <?php if ($permissions == 'superadmin' || array_search('view_role', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/dashboard/roles_permissions">Role & Permission</a></li>
                                                <?php endif ?>
                                                <?php if ($permissions == 'superadmin' || array_search('view_admin', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/dashboard/admins">Admins</a></li>
                                                <?php endif ?>
                                                <?php if ($permissions == 'superadmin' || array_search('view_settings', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/dashboard/settings">Settings</a></li>
                                                <?php endif ?>
                                                <?php if ($permissions == 'superadmin' || array_search('view_maintenance', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/dashboard/maintenance">Maintenance</a></li>
                                                <?php endif ?>
                                            </ul>
                                        </li>
                                    <?php endif ?>
                                    <?php if ($permissions == 'superadmin' || array_search('view_user', $permissions) || array_search('add_fund', $permissions) || array_search('view_fund', $permissions) || array_search('view_fund_transaction', $permissions)): ?>
                                        <li><a><i class="fa fa-cloud"></i> User <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <?php if ($permissions == 'superadmin' || array_search('view_user', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/user">Users</a></li>
                                                <?php endif ?>
                                                <?php if ($permissions == 'superadmin' || array_search('add_fund', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/user/add_fund">Add Fund</a></li>
                                                <?php endif ?>
                                                <?php if ($permissions == 'superadmin' || array_search('view_fund', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/user/manage_funds">Fund Management</a></li>
                                                <?php endif ?>
                                                <?php if ($permissions == 'superadmin' || array_search('view_fund_transaction', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/user/fund_transactions">Transaction Management</a></li>
                                                <?php endif ?>
                                            </ul>
                                        </li>
                                    <?php endif ?>
                                    <?php if ($permissions == 'superadmin' || array_search('view_partner', $permissions) || array_search('add_investment', $permissions) || array_search('view_investment', $permissions)): ?>
                                        <li><a><i class="fa fa-cloud"></i> Partner <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <?php if ($permissions == 'superadmin' || array_search('view_partner', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/partner">Partner Management</a></li>
                                                <?php endif ?>
                                                <?php if ($permissions == 'superadmin' || array_search('add_investment', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/partner/add_investment">Add Investment</a></li>
                                                <?php endif ?>
                                                <?php if ($permissions == 'superadmin' || array_search('view_investment', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/partner/investment_transactions">Transaction Management</a></li>
                                                <?php endif ?>
                                            </ul>
                                        </li>
                                    <?php endif ?>
                                    <?php if ($permissions == 'superadmin' || array_search('view_domain', $permissions) || array_search('view_domain_transaction', $permissions)): ?>
                                        <li><a><i class="fa fa-life-bouy"></i> Domains <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <?php if ($permissions == 'superadmin' || array_search('view_domain', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/domain">Domain Management</a></li>
                                                <?php endif ?>
                                                <?php if ($permissions == 'superadmin' || array_search('view_domain_transaction', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/domain/transactions">Transaction Management</a></li>
                                                <?php endif ?>
                                            </ul>
                                        </li>
                                    <?php endif ?>
                                    <?php if ($permissions == 'superadmin' || array_search('view_hosting_package', $permissions) || array_search('view_hosting', $permissions) || array_search('view_hosting_transaction', $permissions)): ?>
                                        <li><a><i class="fa fa-database"></i> Hosting <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <?php if ($permissions == 'superadmin' || array_search('view_hosting_package', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/hosting/packages">Hosting Package</a></li>
                                                <?php endif ?>
                                                <?php if ($permissions == 'superadmin' || array_search('view_hosting', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/hosting">Hosting Management</a></li>
                                                <?php endif ?>
                                                <?php if ($permissions == 'superadmin' || array_search('view_hosting_transaction', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/hosting/transactions">Transaction Management</a></li>
                                                <?php endif ?>
                                            </ul>
                                        </li>
                                    <?php endif ?>
                                    <?php if ($permissions == 'superadmin' || array_search('view_service', $permissions) || array_search('view_service_transaction', $permissions)): ?>
                                        <li><a><i class="fa fa-cube"></i> Service <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <?php if ($permissions == 'superadmin' || array_search('view_service', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/service">Service Management</a></li>
                                                <?php endif ?>
                                                <?php if ($permissions == 'superadmin' || array_search('view_service_transaction', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/service/transactions">Transaction Management</a></li>
                                                <?php endif ?>
                                            </ul>
                                        </li>
                                    <?php endif ?>
                                    <?php if ($permissions == 'superadmin' || array_search('view_ticket', $permissions)): ?>
                                        <li><a><i class="fa fa-tasks"></i> CRM <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="<?= URL::to('/') ?>/email">Send Email</a></li>
                                                <li><a href="<?= URL::to('/') ?>/ticket">Ticket Management</a></li>
                                            </ul>
                                        </li>
                                    <?php endif ?>
                                    <?php if ($permissions == 'superadmin' || array_search('view_sale', $permissions) || array_search('view_sale_transaction', $permissions)): ?>
                                        <li><a><i class="fa fa-barcode"></i> Sales <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <?php if ($permissions == 'superadmin' || array_search('view_sale', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/account">Sale Management</a></li>
                                                <?php endif ?>
                                                <?php if ($permissions == 'superadmin' || array_search('view_sale_transaction', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/account/transactions">Transaction Management</a></li>
                                                <?php endif ?>
                                            </ul>
                                        </li>
                                    <?php endif ?>
                                    <?php if ($permissions == 'superadmin' || array_search('view_cashbook', $permissions) || array_search('view_income', $permissions) || array_search('view_expense', $permissions)): ?>
                                        <li><a><i class="fa fa-calculator"></i> Account <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <?php if ($permissions == 'superadmin' || array_search('view_cashbook', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/account/cashbook">Cashbook</a></li>
                                                <?php endif ?>
                                                <?php if ($permissions == 'superadmin' || array_search('view_income', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/account/income">Income Management</a></li>
                                                <?php endif ?>
                                                <?php if ($permissions == 'superadmin' || array_search('view_expense', $permissions)): ?>
                                                    <li><a href="<?= URL::to('/') ?>/account/expense">Expense Management</a></li>
                                                <?php endif ?>
                                            </ul>
                                        </li>
                                    <?php endif ?>
                                    <li><a><i class="fa fa-home"></i> About</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Top Navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <nav class="nav navbar-nav">
                            <ul class=" navbar-right">
                                <li class="nav-item dropdown open" style="padding-left: 15px;">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                        
                                            <img src="<?= URL::to('/') . '/uploads/profile_image/'  ?>">
                                     
                                            <img src="<?= URL::to('/') ?>/assets/backend/img/default/user.png">
                                     
                                    </a>
                                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                        <?php if ($permissions == 'superadmin' || array_search('view_profile', $permissions)): ?>
                                            <a class="dropdown-item" href="<?= URL::to('/') ?>/dashboard/profile"> Profile</a>
                                        <?php endif ?>
                                        <?php if ($permissions == 'superadmin' || array_search('view_setting', $permissions)): ?>
                                            <a class="dropdown-item" href="<?= URL::to('/') ?>/settings">
                                                <span>Settings</span>
                                            </a>
                                        <?php endif ?>
                                        <a class="dropdown-item" href="<?= URL::to('/') ?>/login/admin_logout"><i class="fa fa-sign-out pull-right"></i> Logout</a>
                                    </div>
                                </li>
                                <li role="presentation" class="nav-item dropdown open">
                                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-bell-o"></i>
                                        <span class="badge bg-green"><?= $unseen_notifications ? $unseen_notifications : 0 ?></span>
                                    </a>
                                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                              
                                            <li class="nav-item">
                                                <a href="<?= URL::to('/') ?>/dashboard/view_notification/" class="dropdown-item">
                                                    <span>
                                                        <span></span>
                                                        <span class="time"></span>
                                                    </span>
                                                    <span class="message">
                                                    </span>
                                                </a>
                                            </li>
                                         
                                        <li class="nav-item">
                                            <div class="text-center">
                                                <a href="<?= URL::to('/') ?>/dashboard/manage_notifications" class="dropdown-item">
                                                    <strong>See All Alerts</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <?= $home ?>
            </div>
            <!-- Footer Content -->
            <footer>
                <div class="pull-right">
                    &copy; Evis Technology 2013 - <?= date('Y') ?>. All Rights Reserved
                </div>
                <div class="clearfix"></div>
            </footer>
        </div>
        <!-- jQuery -->
        <script src="<?= URL::to('/') ?>/assets/backend/vendor/jquery/jquery-3.5.1.js"></script>
        <!-- Bootstrap -->
        <script src="<?= URL::to('/') ?>/assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Parsley -->
        <script src="<?= URL::to('/') ?>/assets/backend/vendor/parsley/parsley.min.js"></script>
        <!-- iCheck -->
        <script src="<?= URL::to('/') ?>/assets/backend/vendor/iCheck/icheck.min.js"></script>
        <!-- jQuery Form -->
        <script src="<?= URL::to('/') ?>/assets/backend/vendor/jquery/jquery.form.min.js"></script>
        <!-- Data Table -->
        <script src="<?= URL::to('/') ?>/assets/backend/vendor/datatable/datatables.min.js"></script>
        <script src="<?= URL::to('/') ?>/assets/backend/vendor/datatable/dataTables.buttons.min.js"></script>
        <script src="<?= URL::to('/') ?>/assets/backend/vendor/datatable/buttons.flash.min.js"></script>
        <script src="<?= URL::to('/') ?>/assets/backend/vendor/datatable/jszip.min.js"></script>
        <script src="<?= URL::to('/') ?>/assets/backend/vendor/datatable/pdfmake.min.js"></script>
        <script src="<?= URL::to('/') ?>/assets/backend/vendor/datatable/vfs_fonts.js"></script>
        <script src="<?= URL::to('/') ?>/assets/backend/vendor/datatable/buttons.html5.min.js"></script>
        <script src="<?= URL::to('/') ?>/assets/backend/vendor/datatable/buttons.print.min.js"></script>
        <!-- Tinymce -->        
        <script src="<?= URL::to('/') ?>/assets/backend/vendor/tinymce/tinymce.min.js"></script>        
        <!-- Custom Theme Scripts -->
        <script src="<?= URL::to('/') ?>/assets/backend/js/custom.min.js"></script>
        <script>
            for (var i in jQ) {
                jQ[i]();
            }

            function findCustomerBalance(Id) {
                $("#submit").attr("disabled", true);
                $("#submit").html('Executing..');
                $.ajax({
                    url: "<?= URL::to('/') ?>/user/findCustomerBalance/" + Id,
                    type: "POST",
                    success: function (data) {
                        $("#submit").html('Save');
                        $("#submit").attr("disabled", false);
                        $("#balance").val(data);
                    }
                });
            }

            function findPartnerInvestment(Id) {
                $("#submit").attr("disabled", true);
                $("#submit").html('Executing..');
                $.ajax({
                    url: "<?= URL::to('/') ?>/partner/findPartnerInvestment/" + Id,
                    type: "POST",
                    success: function (data) {
                        $("#submit").html('Save');
                        $("#submit").attr("disabled", false);
                        $("#balance").val(data);
                    }
                });
            }

            function findSaleDue(Id) {
                $("#submit").attr("disabled", true);
                $("#submit").html('Executing..');
                $.ajax({
                    url: "<?= URL::to('/') ?>/hosting/findSaleDue/" + Id,
                    type: "POST",
                    success: function (data) {
                        $("#submit").html('Save');
                        $("#submit").attr("disabled", false);
                        $("#balance").val(data);
                    }
                });
            }

            function save_permission(ths, rollId, permissionName) {
                if ($(ths).is(":checked")) {
                    $.ajax({
                        type: 'GET',
                        url: '<?= URL::to('/') ?>/dashboard/update_permission/' + rollId + '/' + permissionName,
                        beforeSubmit: function () {
                            $("#notificationArea").hide();
                            $("#progressDivId").css("display", "block");
                            var percentValue = '0%';

                            $('#progressBar').width(percentValue);
                            $('#percent').html(percentValue);
                            $("#submit").attr("disabled", true);
                            $("#submit").html('Processing..');
                        },

                        error: function (xhr) {
                            $("#progressDivId").hide();
                            $("#notificationArea").html("<div class='alert alert-danger'>" + xhr.responseText + "</div>");
                        },

                        complete: function (xhr) {
                            $("#notificationArea").show();
                            var result = JSON.parse(xhr.responseText);
                            if (result.type == 'error') {
                                $("#progressDivId").hide();
                                $("#notificationArea").html("<div class='alert alert-danger'>" + result.msg + "</div>");
                            } else {
                                $("#notificationArea").html("<div class='alert alert-success'>" + result.msg + "</div>");
                                $("#progressDivId").hide();
                            }
                        }
                    });
                } else {
                    $.ajax({
                        type: 'GET',
                        url: '<?= URL::to('/') ?>/dashboard/delete_permission/' + rollId + '/' + permissionName,
                        beforeSubmit: function () {
                            $("#notificationArea").hide();
                            $("#progressDivId").css("display", "block");
                            var percentValue = '0%';

                            $('#progressBar').width(percentValue);
                            $('#percent').html(percentValue);
                            $("#submit").attr("disabled", true);
                            $("#submit").html('Processing..');
                        },

                        error: function (xhr) {
                            $("#progressDivId").hide();
                            $("#notificationArea").html("<div class='alert alert-danger'>" + xhr.responseText + "</div>");
                        },

                        complete: function (xhr) {
                            $("#notificationArea").show();
                            var result = JSON.parse(xhr.responseText);
                            if (result.type == 'error') {
                                $("#progressDivId").hide();
                                $("#notificationArea").html("<div class='alert alert-danger'>" + result.msg + "</div>");
                            } else {
                                $("#notificationArea").html("<div class='alert alert-danger'>" + result.msg + "</div>");
                                $("#progressDivId").hide();
                            }
                        }
                    });
                }
            }
        </script>
    </body>
</html>