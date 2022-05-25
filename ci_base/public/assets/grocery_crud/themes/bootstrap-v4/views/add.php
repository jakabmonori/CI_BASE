<?php
    $this->set_css($this->default_theme_path.'/bootstrap-v4/css/bootstrap/bootstrap.min.css');
    $this->set_css($this->default_theme_path.'/bootstrap-v4/css/elusive-icons/css/elusive-icons.min.css');
    $this->set_css($this->default_theme_path.'/bootstrap-v4/css/common.css');
    $this->set_css($this->default_theme_path.'/bootstrap-v4/css/general.css');
    $this->set_css($this->default_theme_path.'/bootstrap-v4/css/add-edit-form.css');
    $this->set_css($this->default_theme_path.'/bootstrap-v4/css/main.css');

    $jquery_js = isset($jquery_js) ? $jquery_js : grocery_CRUD::JQUERY;

    if ($this->config->environment == 'production') {
        $this->set_js_lib($this->default_javascript_path . '/' . $jquery_js);
        $this->set_js_lib($this->default_theme_path.'/bootstrap-v4/build/js/global-libs.min.js');
        $this->set_js_config($this->default_theme_path.'/bootstrap-v4/js/form/add.min.js');
    } else {
        $this->set_js_lib($this->default_javascript_path . '/' . $jquery_js);
        $this->set_js_lib($this->default_theme_path.'/bootstrap-v4/js/jquery-plugins/jquery.form.min.js');
        $this->set_js_lib($this->default_theme_path.'/bootstrap-v4/js/common/common.min.js');
        $this->set_js_config($this->default_theme_path.'/bootstrap-v4/js/form/add.js');
    }


include(__DIR__ . '/common_javascript_vars.php');
?>
<div class="crud-form" data-unique-hash="<?php echo $unique_hash; ?>">
    <div class="gc-container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-label">
                    <div class="floatL l5">
                        <?php echo $this->l('form_add'); ?> <?php echo $subject?>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="form-container table-container">
                    <?php echo form_open( $insert_url, 'method="post" id="crudForm"  enctype="multipart/form-data"" class=""'); ?>

                    <?php

                    $relation_fields = [];
                    $other_fields = [];

                    foreach($fields as $field){
                        $field_type = $input_fields[$field->field_name]->crud_type;
                        if($field_type == 'relation')
                            $relation_fields[] = $field;
                        else
                            $other_fields[] = $field;

                    }

                    ?>


                    <div class="d-flex flex-column bd-highlight mb-3">
                    <?php foreach($relation_fields as $field) {
                        $field_type = $input_fields[$field->field_name]->crud_type;
//                        print($field_type);
                        ?>

                        <div class="form-group mt-2 mb-0 d-flex <?php echo $field->field_name; ?>_form_group row">

                            <label class="col-sm-2 mt-1 md-2 control-label">
                                <?php echo $input_fields[$field->field_name]->display_as; ?><?php echo ($input_fields[$field->field_name]->required) ? "<span class='required'>*</span> " : ""; ?>:
                            </label>
                            <div class="<?php echo ($field_type=='integer' || $field_type='date') ? 'col-md-6' : 'col-xs-4'; ?> mt-1">
                                <?php echo $input_fields[$field->field_name]->input?>
                            </div>

                    </div>

                    <?php }?>
                    </div>
                    <div class="d-flex flex-column bd-highlight mb-3">
                    <?php foreach($other_fields as $field) {
                        $field_type = $input_fields[$field->field_name]->crud_type;
//                        print($field_type);
                        ?>

                        <div class="form-group mt-2 mb-0 d-flex <?php echo $field->field_name; ?>_form_group">

                            <label class="col-sm-2 mt-1 md-2 control-label">
                                <?php echo $input_fields[$field->field_name]->display_as; ?><?php echo ($input_fields[$field->field_name]->required) ? "<span class='required'>*</span> " : ""; ?>:
                            </label>
                            <div class="<?php echo ($field_type=='integer' || $field_type='date') ? 'col-md-6' : 'col-xs-4'; ?> mt-1">
                                <?php echo $input_fields[$field->field_name]->input?>
                            </div>

                    </div>

                    <?php }?>

                    </div>
                    <!-- Start of hidden inputs -->
                    <?php
                    foreach ($hidden_fields as $hidden_field) {
                        echo $hidden_field->input;
                    }
                    ?>
                    <!-- End of hidden inputs -->
                    <?php if ($is_ajax) { ?><input type="hidden" name="is_ajax" value="true" /><?php }?>

                    <div class='small-loading hidden' id='FormLoading'><?php echo $this->l('form_insert_loading'); ?></div>

                    <div class="form-group gcrud-form-group">
                        <div id='report-error' class='report-div error bg-danger' style="display:none"></div>
                        <div id='report-success' class='report-div success bg-success' style="display:none"></div>
                    </div>
                    <div class="form-group gcrud-form-group">
                        <div class="col-sm-offset-3 col-sm-7">
                            <button class="btn btn-secondary btn-success b10" type="submit" id="form-button-save">
                                <i class="el el-ok"></i>
                                <?php echo $this->l('form_save'); ?>
                            </button>
                            <?php 	if(!$this->unset_back_to_list) { ?>
                                <button class="btn btn-info b10" type="button" id="save-and-go-back-button">
                                    <i class="el el-return-key"></i>
                                    <?php echo $this->l('form_save_and_go_back'); ?>
                                </button>
                                <button class="btn btn-secondary cancel-button b10" type="button" id="cancel-button">
                                    <i class="el el-warning-sign"></i>
                                    <?php echo $this->l('form_cancel'); ?>
                                </button>
                            <?php } ?>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </>
            </div>
        </div>
    </div>
</div>
<script>
    var validation_url = '<?php echo $validation_url?>';
    var list_url = '<?php echo $list_url?>';

    var message_alert_add_form = "<?php echo $this->l('alert_add_form')?>";
    var message_insert_error = "<?php echo $this->l('insert_error')?>";
</script>