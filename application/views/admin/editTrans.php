

      <?php if($msg = $this->session->flashdata("message")): ?>

                <h4 class="success" style="color:#59b7ff;">
                    <?=$msg?>
                </h4>

      <?php endif; ?>  
      <div class="login-panel panel panel-default" style="width: 99%;">

            <div id="page-wrapper">

                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                    <div class="panel-heading"><h2>Update Transportation</h2></div>
                <div class="panel-body">
                        <form name="frmOne" class="form-horizontal" action="" method="post">
                    <!-- <p>
                        <label for="date_posted">Date post</label>
                        <textarea name="post[date_posted]" id="date_posted" rows="5" cols="40"></textarea>
                    </p> -->

                    <div class="form-group">
                        <label for="priority" style="color:#3fa9f5;" class="col-sm-3 control-label">Starting Stop</label>
                        <div class="col-sm-8">
                            <input type="text" value="<?=$post->slocation?>" class="form-control" name="post[slocation]" id="slocation">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="priority" style="color:#3fa9f5;" class="col-sm-3 control-label">Last Stop</label>
                        <div class="col-sm-8">
                            <input type="text" value="<?=$post->elocation?>" class="form-control" name="post[elocation]" id="elocation">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="building" style="color:#3fa9f5;" class="col-sm-3 control-label">Morning time</label>
                        <div class="col-sm-8">
                            <input type="text" value="<?=$post->stime?>" class="form-control" name="post[stime]" id="stime">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="building" style="color:#3fa9f5;" class="col-sm-3 control-label">Day time</label>
                        <div class="col-sm-8">
                            <input type="text" value="<?=$post->etime?>" class="form-control" name="post[etime]" id="etime">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="date_posted" style="color:#3fa9f5;" class="col-sm-3 control-label">Date Posted</label>
                        <div class="col-sm-8">
                            <input type="text" value="<?=$post->date_posted?>" class="form-control" name="post[date_posted]" id="date_posted" placeholder="Issue posted on">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-6 col-sm-5">
                            <button type="submit" style="color:white; background:#3fa9f5;" name="update_trans" value="Update Transportation" class="btn btn-default">Submit</button>
                        </div>
                    </div>

                </form>

                    </div>
                </div>
                <!-- /.row -->

                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
    </div>

