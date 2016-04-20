<!-- below script is used to display the report -->
<script type="text/javascript">

function printDiv(divName) {
 alert('Print Information');
 var printContents = document.getElementById(divName).innerHTML;
 w=window.open();
 w.document.write(printContents);
 w.print();
 w.close();
}

</script>

<div id="page-wrapper" style="width: 99%;">

            <div class="row">
                <div class="col-lg-8">
                    <h1 class="page-header">Information Detail</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>   

            <form method="post" id="sform" action="">
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Select Inforamtion of</label>
                <div class="col-sm-3">
                  <select name="user_category" class="form-control">
                    
                      <option value="Student">Student</option>
                      <option value="Teacher">Teacher</option>
                      <!-- <option value="<?=$post->user_category?>"><?=$post->user_category?></option> -->
                    
                  </select>
                  <!-- <select class="form-control" name="post[user_category]">
                      <option>Student</option>
                      <option>Teacher</option>
                  </select> -->
                </div>
                <input type="submit" value="Submit"  class="btn btn-success"/>
              </div>
            </form>     
            <br>

            <input type="button" class="btn btn-info" onclick="printDiv('print')" value="Print" style="margin-left: 73%;"/>
            <div id="print" class="table-responsive">
                  <table border="1" style="width: 80%;" class="table tablesorter table-bordered table-hover table-striped sortable">
                      <thead>
                        <tr>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Username</th>
                           <th>Created Date</th>
                        </tr>
                     </thead>
                     <tbody>
                      <?php $this->loginModel->cmsmodeltable() ?>
                      </tbody>
                  </table>
               </div>
            </div>   

            
