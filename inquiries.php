<?php include("header.php") ?>
<?php
if (isset($_POST('submit'))) {
    $status = $_POST('status');
    $firstname = $_POST('firstname');
    $othername = $_POST('othername');
    $lname = $_POST('lname');
    $gender = $_POST('gender');
    $dob = $_POST('dob');
    $location = $_POST('location');
    $nextkin = $_POST('nextkin');
    $relationship = $_POST('relationship');
    $nextkinphone = $_POST('nextkinphone');
    $phonenumb = $_POST('phonenumb');
    $payment = $_POST('payment');
    $anyspecial = $_POST('anyspecial');
    $nodays = $_POST('nodays');
    $docoming = $_POST('docoming');
    $doleaing = $_POST('doleaing');
    $norooms = $_POST('norooms');
    $email = $_POST('email');

    mysqli_query($con, "INSERT INTO inquiries (`status`,`firstname`,`lname`,`gender`,`dob`,`location`,`nextkin`,
    `relationship`,`nextkinphone`,`phonenumb`,`payment`,`anyspecial`,`nodays`,`docoming`,`docoming`,`norooms`,`email`) VALUES()");
}







?>

<section class="vh-100 d-flex" style="background-color: #3f51b5;">
    <div class="col-9 m-auto ">
        <div class="card">

            <div class="card-header ">
                <h4 class='card-title text-center '>QOUTATION FORM</h4>
                <!-- start content_slider -->
                <div class='alert alert-info'>
                    <i class='fa fa-info'></i>&nbsp;Use the form below to enter your details for your qoutation
                </div>
            </div>

            <div class="card-body  ">

                <div class='charts'>
                    <div class='mid-content-top charts-grids '>
                        <div class='middle-content '>

                            <form action='' method='post'>
                                <div class='charts'>
                                    <div class='col-md-4 charts-grids widget'>
                                        <div class='card-header' style='font-weight: bold;font-family: ' Palatino Linotype', serif'>
                                            <h3>Personal Details</h3>
                                        </div>

                                        <div id='container' style='width: 100%; '>
                                            <p style='margin-bottom:10px; margin-top:10px;'>
                                                <span style='font-size: 15px; font-weight: bold;font-family: ' Palatino Linotype', serif'><input type='checkbox' name='status'>&nbsp;Pro&nbsp;&nbsp; &nbsp; &nbsp;</span>
                                                <span style='font-size: 15px; font-weight: bold;font-family: ' Palatino Linotype', serif'><input type='checkbox' name='status'>&nbsp;Dr &nbsp; &nbsp;&nbsp;&nbsp;</span>
                                                <span style='font-size: 15px; font-weight: bold;font-family: ' Palatino Linotype', serif'><input type='checkbox' name='status'>&nbsp;Mr &nbsp; &nbsp; &nbsp;&nbsp;</span>
                                                <span style='font-size: 15px; font-weight: bold;font-family: ' Palatino Linotype', serif'><input type='checkbox' name='status'>&nbsp;Mrs &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>
                                                <span style='font-size: 15px; font-weight: bold;font-family: ' Palatino Linotype', serif'><input type='checkbox' name='status'>&nbsp;Miss</span>
                                            </p>
                                            <div class='input-group' style='margin-bottom:10px;'>
                                                <span class='input-group-addon'>First Name</span>
                                                <input type='text' name='firstname' placeholder='Enter First Name' value='' class='form-control'>
                                            </div>
                                            <div class='input-group' style='margin-bottom:10px;'>
                                                <span class='input-group-addon'>Other Name</span>
                                                <input type='text' name='othername' placeholder='Other name' value='' class='form-control' value=''>
                                            </div>
                                            <div class='input-group' style='margin-bottom:10px;'>
                                                <span class='input-group-addon'>Last Name</span>
                                                <input type='text' name='lname' placeholder='Last name' value='' class='form-control'>
                                            </div>
                                            <div class='input-group' style='margin-bottom:10px;'>
                                                <span class='input-group-addon'>Select Gender</span>
                                                <select name='gender' id='gender' style='height:30px; width: 100%'>
                                                    <option>Male</option>

                                                    <option>Female</option>

                                                </select>

                                            </div>
                                            <div class='input-group' style='margin-bottom:10px; '>
                                                <span class='input-group-addon'>Date of Birth</span>
                                                <input type='dob' placeholder='Payment Log date' name='dob' class='form-control' value=''>
                                            </div>

                                        </div>

                                    </div>

                                    <div class='col-md-4 charts-grids widget states-mdl'>
                                        <div class='card-header' style='font-weight: bold;font-family: ' Palatino Linotype', serif'>
                                            <h3>Other Details</h3>
                                        </div>


                                        <div class='input-group' style='margin-bottom:10px;margin-top:15px;'>
                                            <span class='input-group-addon'>Current Location</span>
                                            <input type='text' name='location' placeholder='location' class='form-control' value=''>
                                        </div>
                                        <div class='input-group' style='margin-bottom:10px;'>
                                            <span class='input-group-addon'>Next of Kin</span>
                                            <input type='text' name='nextkin' placeholder='Next of Kin' class='form-control' value=''>
                                        </div>
                                        <div class='input-group' style='margin-bottom:10px;'>
                                            <span class='input-group-addon'>Relationship</span>
                                            <select name='relationship' style='height:30px; width: 100%'>
                                                <option>Mother</option>
                                                <option>Father</option>
                                                <option>Auncle</option>
                                                <option>Aunt</option>
                                                <option>Sister</option>
                                                <option>Brother</option>
                                                <option>Husband</option>
                                                <option>Wife</option>
                                            </select>

                                        </div>

                                        <div class='input-group' style='margin-bottom:10px;'>
                                            <span class='input-group-addon'>Next of Kin Phone</span>
                                            <input type='text' name='nextkin' placeholder='Enter Phone' value='' class='form-control' value=''>
                                        </div>
                                        <div class='input-group' style='margin-bottom:10px;'>
                                            <span class='input-group-addon'>Your Phone</span>
                                            <input type='text' name='phonenumb' placeholder='Enter Phone' value='' class='form-control' value=''>
                                        </div>
                                        <div class='input-group' style='margin-bottom:10px;'>
                                            <span class='input-group-addon'>Select Payment</span>
                                            <select name='payment' id='payment' style='height:30px; width: 100%'>
                                                <option>CASH</option>
                                                <option>SCHEME</option>



                                            </select>

                                        </div>




                                    </div>
                                    <div class='col-md-4 charts-grids widget states-mdl'>
                                        <div class='card-header' style='font-weight: bold;font-family: ' Palatino Linotype', serif'>
                                            <h3>Other Details</h3>
                                        </div>


                                        <div class='input-group' style='margin-bottom:10px;margin-top:15px;'>
                                            <span class='input-group-addon'>No of Rooms</span>
                                            <input type='number' name='norooms' placeholder='No of Rooms' class='form-control' value=''>
                                        </div>
                                        <div class='input-group' style='margin-bottom:10px;'>
                                            <span class='input-group-addon'>Any Special case</span>
                                            <input type='text' name='anyspecial' placeholder='Any Special case' class='form-control' value=''>
                                        </div>
                                        <div class='input-group' style='margin-bottom:10px;'>
                                            <span class='input-group-addon'>No Of Days</span>
                                            <select name='nodays' style='height:30px; width: 100%'>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                            </select>

                                        </div>

                                        <div class='input-group' style='margin-bottom:10px; '>
                                            <span class='input-group-addon'>Date of comming</span>
                                            <input type='date' placeholder='Date of comming' name='docoming' class='form-control' value=''>
                                        </div>
                                        <div class='input-group' style='margin-bottom:10px; '>
                                            <span class='input-group-addon'>Date of Leaving</span>
                                            <input type='date' placeholder='Date of Leaving' name='doleaing' class='form-control' value=''>
                                        </div>
                                        <div class='input-group' style='margin-bottom:10px; '>
                                            <span class='input-group-addon'>Email</span>
                                            <input type='email' placeholder='Email' name='email' class='form-control' value=''>
                                        </div>




                                    </div>

                                    <div class='clearfix'> </div>
                                </div>



                                <div class='modal-footer'>

                                    <input type='submit' class='btn btn-success' id='btns1' value='Submit' name='Submit'> &nbsp;
                                    <input type='reset' class='btn btn-success' id='btns' value='Clear' name=''>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>


</section>


<?php include("footer.php") ?>