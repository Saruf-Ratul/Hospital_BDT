<div class="row">
    <div class="col-sm-12"> 
        <div  class="panel panel-default thumbnail">
        <?php
        if($this->permission->method('medicine_list','read')->access() || $this->permission->method('medicine_list','update')->access() || $this->permission->method('medicine_list','delete')->access()){
        ?>
            <div class="panel-heading no-print">
                <div class="btn-group"> 
                    <a class="btn btn-primary" href="<?php echo base_url("pharmacy/medicine") ?>"> <i class="fa fa-list"></i>  <?php echo display('medicine_list') ?> </a>  
                </div>
            </div> 
        <?php } ?>


        <?php
        if($this->permission->method('medicine_list','update')->access()){
        ?>
            <div class="panel-body panel-form">
                <div class="row">
                    <div class="col-md-9 col-sm-12">

                        <?php echo form_open('pharmacy/medicine/form/'.$medicine->id,'class="form-inner"') ?>

                            <?php echo form_hidden('id', $medicine->id) ?>

                            <div class="form-group row">
                                <label for="name" class="col-xs-3 col-form-label"><?php echo display('medicine_name')?> <i class="text-danger">*</i></label>
                                <div class="col-xs-9">
                                    <input name="name"  type="text" class="form-control" id="name" placeholder="<?php echo display('medicine_name')?>" value="<?php echo $medicine->name ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="category_id" class="col-xs-3 col-form-label"><?php echo display('category_name')?> <i class="text-danger">*</i></label>
                                <div class="col-xs-9">
                                    <?php echo form_dropdown('category_id', $category_list, $medicine->category_id, 'class="form-control" id="category_id"') ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-xs-3 col-form-label"><?php echo display('description') ?> </label>
                                <div class="col-xs-9">
                                    <textarea name="description" class="form-control tinymce"  placeholder="<?php echo display('description') ?>"  rows="7"><?php echo $medicine->description ?></textarea>
                                </div>
                            </div>
                            
                             <div class="form-group row">
                                <label for="quantity" class="col-xs-3 col-form-label"><?php echo display('quantity')?></label>
                                <div class="col-xs-9">
                                    <input name="quantity"  type="number" class="form-control" id="quantity" placeholder="<?php echo display('quantity')?>" value="<?php echo $medicine->quantity ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-xs-3 col-form-label"><?php echo display('price')?></label>
                                <div class="col-xs-9">
                                    <input name="price"  type="text" class="form-control" id="price" placeholder="<?php echo display('price')?>" value="<?php echo $medicine->price ?>">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="manufactured_by" class="col-xs-3 col-form-label"><?php echo display('manufactured_by')?></label>
                                <div class="col-xs-9">
                                    <input name="manufactured_by"  type="text" class="form-control" id="manufactured_by" placeholder="<?php echo display('manufactured_by')?>" value="<?php echo $medicine->manufactured_by ?>">
                                </div>
                            </div>

                            <!--Radios-->
                            <div class="form-group row">
                                <label class="col-sm-3"><?php echo display('status') ?></label>
                                <div class="col-xs-9"> 
                                    <div class="form-check">
                                        <label class="radio-inline"><input type="radio" name="status" value="1" checked><?php echo display('active') ?></label>
                                        <label class="radio-inline"><input type="radio" name="status" value="0"><?php echo display('inactive') ?></label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <div class="ui buttons">
                                        <button type="reset" class="ui button"><?php echo display('reset') ?></button>
                                        <div class="or"></div>
                                        <button class="ui positive button"><?php echo display('save') ?></button>
                                    </div>
                                </div>
                            </div>

                        <?php echo form_close() ?>

                    </div>
                </div>
            </div>
            <?php 
}
 else{
 ?>
    <div class="col-sm-12">
       <div class="panel panel-bd lobidrag">
        <div class="panel-heading">
          <div class="panel-title">
            <h4><?php echo display('you_do_not_have_permission_to_access_please_contact_with_administrator');?>.</h4>
           </div>
           </div>
         </div>
        </div>
 <?php
 }
 ?>
        </div>
    </div>

</div>