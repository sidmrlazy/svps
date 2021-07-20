

<link rel="shortcut icon" href="images/early-years-logo/early-years.png">

<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <!-- <h4 class="modal-title">Apply For New Admissions</h4> -->
            </div>
            <div class="modal-body">
              
                <img src="images/popup/admission_pic2.jfif" >
            
            <br><br>
                <form action="includes/new_admission.php" method="post">
                  <div class="form-group m-3">
                        <input type="text" class="form-control" name="name" placeholder="Name" required="">
                    </div>
                    <div class="form-group m-3">
                        <input type="text" class="form-control" name="child_name" placeholder="Child Name" required="">
                    </div>
                    <div class="form-group m-3">
                        <input type="text" class="form-control" name="contact" placeholder="Contact Number">
                    </div>
                    <div class="form-group m-3">
                      <label for="select">Admission To : </label>
                        <select class="form-control" name="classes" id="select">
                           <option value="Play Group"> PlayGroup (Age group 2 years +) </option>
                           <option value="Pre-Nursury"> Pre- Nursery ( Age Group 3 years +) </option>   
                        </select>
                    </div>
                    <div class="form-group m-3">
                        <button type="submit" name="submit" class="btn" style="background-color: #b0006c;color: white;">Submit</button>
                    </div>
                    
                </form>


            </div>
        </div>
    </div>
</div>

                            