<?php include_once('admin_header.php');?>

<div class="container">


	<?php echo form_open_multipart('admin/store_article', ['class' => 'form-horizental', 'id'=>'adminform']); ?>
  <?php echo form_hidden('user_id', $this->session->userdata('user_id') ); ?>
  <?php echo form_hidden('created_at', date('Y-m-d H:i:s'));?>

  <fieldset>
    <legend>Add Article</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-4 control-label">Article Title</label> 
      <div class="col-lg-8">
      	<?php echo form_input(['name'=>'articletitle', 'class'=>'form-control', 'placeholder'=>'Article Title','value'=>set_value('articletitle')]); ?>
      	<!--<input type="text" class="form-control" id="inputEmail" placeholder="Username">-->
      	</div>
      	<div class="col-lg-4">
      		<?php echo form_error('articletitle');?>
      	</div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-4 control-label">Article Body</label>
      <div class="col-lg-8">
      	<?php echo form_textarea(['name'=>'articlebody','class'=>'form-control', 'placeholder'=>'Article Body', 'value'=>set_value('articlebody')]); ?>
        <!--<input type="password" class="form-control" id="inputPassword" placeholder="Password">-->
        

      </div>
      <div class="col-lg-2">
      		<?php echo form_error('articlebody');?>
      	</div>
    </div>

<!--file upload start-->

<div class="form-group">
      <label for="inputEmail" class="col-lg-4 control-label">Select Image</label> 
      <div class="col-lg-8">
        <?php echo form_upload(['name'=>'userfile', 'class'=>'form-control', 'value'=>set_value('userfile')]); ?>
        <!--<input type="text" class="form-control" id="inputEmail" placeholder="Username">-->
        </div>
        <div class="col-lg-4">
          <?php if(isset($upload_error))
          {
            echo $upload_error;
          }

          ?>
        </div>
    </div>


<!--file upload end-->
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <!--<button type="reset" class="btn btn-default">Cancel</button>-->
        <?php echo
        		form_reset(['name'=>'reset', 'value'=>'Reset', 'class'=>'btn btn-default']),
        		form_submit(['name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-primary']) ?>
        <!--<button type="submit" class="btn btn-primary">Submit</button>-->
      </div>
    </div>
  </fieldset>
</form>
</div>

<?php include_once('admin_footer.php');  ?>