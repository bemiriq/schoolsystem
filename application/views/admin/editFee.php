

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
                    <div class="panel-heading"><h2>Update Fee</h2></div>
                <div class="panel-body">
                        <form name="frmOne" class="form-horizontal" action="" method="post">
                    <!-- <p>
                        <label for="date_posted">Date post</label>
                        <textarea name="post[date_posted]" id="date_posted" rows="5" cols="40"></textarea>
                    </p> -->

                    <div class="form-group">
                        <label for="name" style="color:#3fa9f5;" class="col-sm-3 control-label">Year</label>
                        <div class="col-sm-8">
                            <select class="form-control" value="<?=$post->year?>" name="post[year]">
                                  <option value="<?=$post->year?>">Class-XI</option>
                                  <option value="<?=$post->year?>">Class-XII</option>
                                </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="priority" style="color:#3fa9f5;" class="col-sm-3 control-label">Semester 1</label>
                        <div class="col-sm-8">
                            <input type="text" value="<?=$post->semester1?>" class="form-control" name="post[semester1]" id="semester1" placeholder="Select priority level">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="building" style="color:#3fa9f5;" class="col-sm-3 control-label">Semester 2</label>
                        <div class="col-sm-8">
                            <input type="text" value="<?=$post->semester2?>" class="form-control" name="post[semester2]" id="semester2" placeholder="Select block">
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
                            <button type="submit" style="color:white; background:#3fa9f5;" name="update_fee" value="Update Fee" class="btn btn-default">Submit</button>
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

