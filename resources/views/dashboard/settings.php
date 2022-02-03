<!-- Page Content -->
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3><?= $title ?></h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <form id="settings" method="post" class="form-horizontal form-label-left">
                <div class="x_panel">
                    <div class="x_content">
                        <div id="notificationArea"></div>
                        <div class="col-md-2">
                            <div class="nav nav-tabs flex-column bar_tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-basic-tab" data-toggle="pill" href="#v-pills-basic" role="tab" aria-controls="v-pills-basic" aria-selected="true">Basic</a>
                                <a class="nav-link" id="v-pills-api-tab" data-toggle="pill" href="#v-pills-api" role="tab" aria-controls="v-pills-api" aria-selected="false">API</a>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-basic" role="tabpanel" aria-labelledby="v-pills-basic-tab">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Project Name</label>
                                            <input type="text" name="project_name" value="<?= $settings['project_name'] ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Contact Form Email</label>
                                            <input type="text" name="contact_email" value="<?= $settings['contact_email'] ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Admin Email</label>
                                            <input type="text" name="admin_email" value="<?= $settings['admin_email'] ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Currency Name</label>
                                            <input type="text" name="currency_name" value="<?= $settings['currency_name'] ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Time Zone</label>
                                            <input type="text" name="time_zone" value="<?= $settings['time_zone']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Time Format</label>
                                            <select name="time_format" class="form-control">
                                                <option value="">Select Format</option>
                                                <option value="<?= 'g:i A' ?>" <?= ($settings['time_format'] == 'g:i A') ? 'selected' : '' ?>><?= date('g:i A') ?></option>
                                                <option value="<?= 'G:i' ?>" <?= ($settings['time_format'] == 'G:i') ? 'selected' : '' ?>><?= date('G:i') ?></option>
                                                <option value="<?= 'H:i:s' ?>" <?= ($settings['time_format'] == 'H:i:s') ? 'selected' : '' ?>><?= date('H:i:s') ?></option>
                                                <option value="<?= 'h:i:s A' ?>" <?= ($settings['time_format'] == 'h:i:s A') ? 'selected' : '' ?>><?= date('h:i:s A') ?></option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Date Format</label>
                                            <select name="date_format" class="form-control">
                                                <option value="">Select Format</option>
                                                <option value="<?= 'F j, Y' ?>" <?= ($settings['date_format'] == 'F j, Y') ? 'selected' : '' ?>><?= date('F j, Y') ?></option>
                                                <option value="<?= 'm.d.y' ?>" <?= ($settings['date_format'] == 'm.d.y') ? 'selected' : '' ?>><?= date('m.d.y') ?></option>
                                                <option value="<?= 'j-n-Y' ?>" <?= ($settings['date_format'] == 'j-n-Y') ? 'selected' : '' ?>><?= date('j-n-Y') ?></option>
                                                <option value="<?= 'D, M j, Y' ?>" <?= ($settings['date_format'] == 'D, M j, Y') ? 'selected' : '' ?>><?= date('D, M j, Y') ?></option>
                                                <option value="<?= 'l, M j, Y' ?>" <?= ($settings['date_format'] == 'l, M j, Y') ? 'selected' : '' ?>><?= date('l, M j, Y') ?></option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Currency Sign</label>
                                            <input type="text" name="currency_sign" value="<?= $settings['currency_sign'] ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">  
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" value="<?= $settings['address'] ?>" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Meta Description</label>
                                            <textarea name="meta_description" class="form-control"><?= $settings['meta_description'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Facebook Page</label>
                                            <input type="text" name="facebook_page" value="<?= $settings['facebook_page'] ?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-api" role="tabpanel" aria-labelledby="v-pills-api-tab">
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Google Analytics</label>
                                                <textarea name="google_analytics" class="form-control"><?= $settings['google_analytics'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tawk Integration</label>
                                                <textarea name="tawk_integration" class="form-control"><?= $settings['tawk_integration'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <button type="submit" id="submit" class="btn btn-primary btn-sm">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Page Content -->
<script>
    jQ.push(function () {
        $('#submit').click(function (e) {
            e.preventDefault();
            $("#submit").attr("disabled", true);
            $("#submit").html('Processing..');
            $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>/dashboard/save_settings',
                data: $('#settings').serialize(),
                success: function (data)
                {
                    if (data === 'success') {
                        $("#submit").attr("disabled", true);
                        $('#notificationArea').html("<div class='alert alert-primary' role='alert'>Settings Changed!</div>");
                    } else {
                        $("#submit").attr("disabled", false);
                        $('#notificationArea').html("<div class='alert alert-danger' role='alert'>" + data + "</div>");
                    }
                    $("#submit").html('Update');
                }
            });
        });
    });
</script>