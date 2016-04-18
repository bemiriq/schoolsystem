


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

                <div class="panel-heading">Add Transportation</div>
                <div class="panel-body">
                    <form action="" method="post">
                        <fieldset>
                            <div class="form-group">
                                <label for="exampleInputName2">Starting Location</label>
                                <input class="form-control" placeholder="Enter starting location" name="post[slocation]" type="text" autofocus="" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName2">Ending Location</label>
                                <input class="form-control" placeholder="Enter ending location" name="post[elocation]" type="text" autofocus="" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName2">Morning time</label>
                                <input class="form-control" placeholder="Enter morning time" name="post[stime]" type="text" autofocus="" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName2">Afternoon time</label>
                                <input class="form-control" placeholder="Enter afternoon time" name="post[etime]" type="text" autofocus="" required>
                            </div>
                            <input class="btn btn-lg btn-primary btn-block" name="add_trans" type="submit" value="Submit"/>
                            
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



