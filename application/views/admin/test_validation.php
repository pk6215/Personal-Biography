<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Please sign up for Bootsnipp <small>It's free!</small></h3>
            </div>
            <div class="panel-body">
              <form role="form">
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
                    </div>
                    <div class="col-lg-2">
          <?php echo form_error('first_name');?>
        </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
                    </div>
                  </div>
                </div>

              <div class="col-lg-2">
          <?php echo form_error('last_name');?>
        </div>  
                
                
                <input type="submit" value="Register" class="btn btn-info btn-block">
              
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>