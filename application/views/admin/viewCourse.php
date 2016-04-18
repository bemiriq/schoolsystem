        <div id="page-wrapper">


<br>
        <div class="col-xs-5 col-xs-offset-0 col-sm-4 col-sm-offset-1 col-md-10 col-md-offset-1">
    <div class="col-md-10 col-md-offset-1">
      <?php if($msg = $this->session->flashdata("message")): ?>

                <h4 class="success" style="color:#59b7ff;">
                    <?=$msg?>
                </h4>

      <?php endif; ?>
      <div class="login-panel panel panel-default">

        <div class="panel-heading">Course Detail</div>
        <div class="panel-body">
                      <div class="table-responsive">
                  <table class="table tablesorter table-bordered table-hover table-striped sortable">
                     <thead>
                        <tr>
                           <th>Year</th>
                           <th>Faculty</th>
                           <th>Course Name</th>
                           <th>Date Posted</th>
                           <th>Update</th>
                           <th>Delete</th>

                        </tr>
                     </thead>
                     <tbody>
                        <?php $i=1; foreach($posts as $post): ?>
                        <tr <?=($i % 2 == 0) ? 'class="even"' : '' ?>>
                           <td><?=$post->year?></td>
                           <td><?=$post->faculty?></td>
                           <td><?=$post->course_name?></td>
                           <td><?=$post->date_posted?></td>
                           <td><a href="<?=site_url("school/editCourse/".$post->course_id)?>">edit</a> </td>
                           <td> <a href="<?=site_url("school/deleteCourse/".$post->course_id)?>">delete</a></td>
                        </tr>
                        <?php $i++; endforeach; ?>
                     </tbody>
                  </table>
               </div>
        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row --> 
</div>
</div>