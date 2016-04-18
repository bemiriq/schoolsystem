


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

                <div class="panel-heading">Add Course</div>
                <div class="panel-body">
                    <form action="" method="post">
                        <fieldset>
                            <div class="form-group">
                                <select class="form-control" name="post[year]">
                                  <option>Class-XI</option>
                                  <option>Class-XII</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="post[faculty]">
                                  <option>Management</option>
                                  <option>Science</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName2">Course Name</label>
                                <input class="form-control" placeholder="Enter course name" name="post[course_name]" type="text" autofocus="">
                            </div>
                            <input class="btn btn-lg btn-primary btn-block" name="add_course" type="submit" value="Submit"/>
                            
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



