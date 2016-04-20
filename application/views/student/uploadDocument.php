        <div id="page-wrapper">


<br>
        <div class="col-xs-5 col-xs-offset-0 col-sm-4 col-sm-offset-1 col-md-7 col-md-offset-0">
    <div class="col-md-10 col-md-offset-1">
      <?php if($msg = $this->session->flashdata("message")): ?>

                <h4 class="success" style="color:#59b7ff;">
                    <?=$msg?>
                </h4>

      <?php endif; ?>
      <div class="login-panel panel panel-default">

        <div class="panel-heading">Upload Document</div>
        <div class="panel-body">
          <? echo form_open_mutipart('main/save/'); ?>
              <div class="table-responsive">
                  <table class="table tablesorter table-bordered table-hover table-striped sortable">
                     
                        <tr>
                           <td>Title</td>
                           <td><?php echo form_input('title'); ?> </td>
                        </tr>
                        <tr>
                           <td>Image</td>
                           <td><?php echo form_upload('pic'); ?> </td>
                        </tr>
                        <tr>
                           <td></td>
                           <td><?php echo form_submit('submit','Save', 'class="btn btn-primary"'); ?> </td>
                        </tr>

                  </table>
              </div>
              

              <!-- <? echo form_open_mutipart('school/upload'); ?>
              <input type="file" name="userfile" />
              <input type="submit" name="submit" value="upload image" /> -->


        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row --> 
</div>
</div>