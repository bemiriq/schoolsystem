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

        <div class="panel-heading">Fee Detail</div>
        <div class="panel-body">
                      <div class="table-responsive">
                  <table class="table tablesorter table-bordered table-hover table-striped sortable">
                     <thead>
                        <tr>
                           <th>Year</th>
                           <th>Semester 1</th>
                           <th>Semester 2</th>
                           <th>Date Posted</th>
                           <!-- <th>Update</th>
                           <th>Delete</th> -->

                        </tr>
                     </thead>
                     <tbody>
                        <?php $i=1; foreach($posts as $post): ?>
                        <tr <?=($i % 2 == 0) ? 'class="even"' : '' ?>>
                           <td><?=$post->year?></td>
                           <td><?=$post->semester1?></td>
                           <td><?=$post->semester2?></td>
                           <td><?=$post->date_posted?></td>
                           <!-- <td><a href="<?=site_url("school/editFee/".$post->fee_id)?>">edit</a> </td>
                           <td> <a href="<?=site_url("school/deleteFee/".$post->fee_id)?>">delete</a></td> -->
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