

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
                    <div class="panel-heading"><h2>Update Hostel</h2></div>
                <div class="panel-body">
                        <form name="frmOne" class="form-horizontal" action="" method="post">
                    <!-- <p>
                        <label for="date_posted">Date post</label>
                        <textarea name="post[date_posted]" id="date_posted" rows="5" cols="40"></textarea>
                    </p> -->

                    <div class="form-group">
                        <label for="name" style="color:#3fa9f5;" class="col-sm-3 control-label">Student</label>
                        <div class="col-sm-8">
                            <select class="form-control" value="<?=$post->gender?>" name="post[gender]">
                                  <option value="<?=$post->gender?>">Boys</option>
                                  <option value="<?=$post->gender?>">Girls</option>
                                </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="priority" style="color:#3fa9f5;" class="col-sm-3 control-label">Capacity</label>
                        <div class="col-sm-8">
                            <input type="text" value="<?=$post->capacity?>" class="form-control" name="post[capacity]" id="capacity" placeholder="Capcity of Hostel">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="building" style="color:#3fa9f5;" class="col-sm-3 control-label">Location</label>
                        <div class="col-sm-8">
                            <input type="text" value="<?=$post->mlocation?>" class="form-control" name="post[mlocation]" id="mlocation" placeholder="Enter Location">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="building" style="color:#3fa9f5;" class="col-sm-3 control-label">City</label>
                        <div class="col-sm-8">
                            <input type="text" value="<?=$post->city?>" class="form-control" name="post[city]" id="city" placeholder="Enter Location">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="building" style="color:#3fa9f5;" class="col-sm-3 control-label">Map Link</label>
                        <div class="col-sm-8">
                            <input type="text" value="<?=$post->embededMap?>" class="form-control" name="post[embededMap]" id="embededMap" placeholder="Enter Link of Location">
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
                            <button type="submit" style="color:white; background:#3fa9f5;" name="update_hostel" value="Update Hostel" class="btn btn-default">Submit</button>
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

