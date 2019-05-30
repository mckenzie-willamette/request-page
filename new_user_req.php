<?php
  include ("assets/header.php");
  if (isset($_GET['key']))
  {
    $show_modal = true;
  }
  else
  {
    $message = '';
  }

?>
    <div class="py-5">
      <div class="container">
        <!--SUBMISSION SUCCESS BLOCK -->
        <div id="thxModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="thxModal" aria-hidden="true" >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header alert-success border-bottom">
                <h5 class="modal-title" id="sucessModal">Success!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body alert-success">Request submitted. Please allow 5-7 days for processing.</div>
            </div>
          </div>
        </div>
        <div class="row">
          <?php include ("assets/nav.php"); ?>
          <div class="col-md-9" style="">
            <h4 class="">New User Request</h4>
            <form id="NU_form-h" class="pt-3" method="POST">
              <div class="row" id="user demo">
                <div class="col-md-12 border bg-light">
                  <h5 class="mb-0 border-bottom">User Information</h5>
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group row">
                        <!-- USER INFORMATION FORM BLOCK -->
                        <label for="uName" class="col-2 col-form-label">User's Name</label>
                        <div class="col-10">
                          <input type="text" class="form-control mt-2" id="uName" required>
                          <small id="uNameHelpBlock" class="form-text text-muted">FIRST MI LAST</small></div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                        <label for="jTitle" class="col-2 col-form-label">Job Title</label>
                        <div class="col-10">
                          <input type="text" class="form-control mt-2" id="jTitle" required> </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group row"> <label for="uPhone" class="col-2 col-form-label">Phone</label>
                        <div class="col-10">
                          <input type="tel" class="form-control" id="uPhone"> </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group row"> <label for="uDept" class="col-2 col-form-label">Department</label>
                        <div class="col-10">
                          <input type="text" class="form-control" id="uDept" required> </div>
                      </div>
                    </div>
                  </div>
                </div><small id="uNameHelpBlock" class="form-text text-muted">
                </small>
              </div>
              <!-- MANAGER INFORMATION FORM BLOCK -->
              <div class="row" id="manager demo">
                <div class="col-md-12 border">
                  <h5 class="mb-0 pt-1 border-bottom">Manager Information</h5>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="mName" class="col-2 col-form-label">Manager Name</label>
                        <div class="col-10">
                          <input type="text" class="form-control mt-2" id="mName" placeholder="" required>
                          <small id="mNameHelpBlock" class="form-text text-muted">Manager of the user</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="mEmail" class="col-2 col-form-label">Email</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control mt-2" id="mEmail" required>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row"> <label for="mEmail" class="col-2 col-form-label">Title</label>
                        <div class="col-10">
                          <input type="text" class="form-control mt-2" id="mEmail" required> </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row"> <label for="mPhone" class="col-2 col-form-label">Phone</label>
                        <div class="col-10">
                          <input type="text" class="form-control mt-2" id="mPhone" required> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- USER TYPE FORM BLOCK -->
              <div class="row" id="user type">
                <div class="col-md-12 border bg-light">
                  <h5 class="mb-0 pt-1 border-bottom">User Type</h5>
                  <div class="row">
                    <div class="col-md-6 form-check-inline">
                      <input type="radio" id="employee" name="userType" value="empType1" class="form-check-input ml-2">
                      <label for="employee" class="form-check-label">Hospital Employee</label>

                    </div>
                    <div class="col-md-6 form-check form-check-inline">
                      <input class="form-check-input ml-2" name="userType" type="radio" id="contracted" value="empType2">
                      <label for="contracted" class="form-check-label">Contracted Employee</label>
                      <div class="row reveal-if-active">
                        <br>
                        <div class="col-md-12 form-check form-check-inline">
                        <label class="form-check-label ml-4" for="start">Start Date</label>
                        <input type="date" id="start" name="start" class="form-check-input requre-if-active" data-require-pair="#contracted">
                        <label class="form-check-label" for="end">End Date</label>
                        <input type="date" id="end" name="end" class="form-check-input require-if-active" data-require-pair="#contracted">
                      </div>
                      </div>
                    </div>

                  </div>

                </div>
              </div>
              <!-- PERMISSIONS FORM BLOCK -->
              <div class="row">
                <div class="col-md-12 border">
                  <h5 class="mb-0 pt-1 border-bottom">Applications Requested</h5>
                  <div class="row">
                    <div class="col-md-4"><input id="email" value="email" type="checkbox">
                      <label for="email" class="form-check-label">Email</label></div>
                    <div class="col-md-4"><input type="checkbox" id="employee" value="xcellera">
                      <label for="employee" class="form-check-label">Xcellera</label></div>
                    <div class="col-md-4"><input type="checkbox" id="employee" value="shares">
                      <label for="employee" class="form-check-label">Dept Shared Folders</label></div>
                  </div>
                  <div class="row">
                    <div class="col-md-4"><input type="checkbox" id="employee" value="pacs">
                      <label for="employee" class="form-check-label">PACS</label></div>
                    <div class="col-md-4"><input type="checkbox" id="employee" value="midas">
                      <label for="employee" class="form-check-label">MIDAS</label></div>
                    <div class="col-md-4"><input type="checkbox" id="employee" value="other">
                      <label for="employee" class="form-check-label">Other</label></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 border bg-light">
                  <h5 class="mb-0 pt-1 border-bottom">Additional Instructions/Comments</h5>
                  <div class="row">
                    <div class="col-md-12 py-2">
                      <textarea class="form=control pt-2" id="comments" rows="5"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 btn-toolbar float-right pr-5 pt-1" role="toolbar">
                <!--<a href="new_change_tasks.php">--><button type="submit" class="btn btn-primary mr-1">Submit</button><!--</a>-->
                <button type="reset" class="btn btn-danger">Clear</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  if($show_modal):?>
  <script>
   $('#thxModal').modal('show');

 </script>
  <?php endif;
    //if(isset($_POST['submit'])){
    //  $uname = $_POST['uName'];
    //  $jTitle = $_POST['jTitle'];
    //  $uPhone = $_POST['uPhone'];
    //  $uDept = $_POST['uDept'];
    //  $mName = $_POST['mName'];
    //  $mEmail = $_POST['mEmail'];
    //  $mTitle = $_POST['mTitle'];
    //  $mPhone = $_POST['mPhone'];
    //  $uType = $_POST['userType'];
    //  $start_date = $_POST['start'];
    //  $end_date = $_POST['end'];
    //  $apps = $_POST['email'] . $_POST['xcellera'] . $_POST['shares'] . $_POST['pacs'] . $_POST['midas'] . $_POST['other'];
//testing to see if data is showing up correctly.
    //  echo $uname . " " . $jTitle . " " . $uphone;
    //}else{}-->
  ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
