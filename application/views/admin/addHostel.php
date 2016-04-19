


        <div id="page-wrapper">

            <div class="container-fluid">

                    <div class="row" style="width: 100%;">
        <div class="col-xs-7 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-5 col-md-offset-3">
            <?php if($msg = $this->session->flashdata("message")): ?>

                <h4 class="success" style="color:#59b7ff;">
                    <?=$msg?>
                </h4>

            <?php endif; ?>

            <br>
            <div class="login-panel panel panel-default">

                <div class="panel-heading">Add Hostel</div>
                <div class="panel-body">
                    <form action="" method="post">
                        <fieldset>
                            <div class="form-group">
                                <select class="form-control" name="post[gender]">
                                  <option>Boys</option>
                                  <option>Girls</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName2">Capacity</label>
                                <input class="form-control" placeholder="Enter Total Capacity" name="post[capacity]" type="text" autofocus="" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName2">Main Location</label>
                                <input class="form-control" placeholder="Enter Main Location" name="post[mlocation]" type="text" autofocus="" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName2">City</label>
                                <input class="form-control" placeholder="Enter City Name" name="post[city]" type="text" autofocus="" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName2">Map Link</label>
                                <input class="form-control" placeholder="Enter Direct Embeded Link" name="post[embededMap]" type="text" autofocus="" required>
                            </div>
                            <input class="btn btn-lg btn-primary btn-block" name="add_hostel" type="submit" value="Submit"/>
                            
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->



