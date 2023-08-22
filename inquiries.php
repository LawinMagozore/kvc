<?php include("header.php") ?>
<?php
include('db.php')
?>
<?php

if (isset($_POST['submit'])) {
    $status = $_POST['status'];
    $firstname = $_POST['firstname'];
    $othername = $_POST['othername'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $location = $_POST['location'];
    $nextkin = $_POST['nextkin'];
    $relationship = $_POST['relationship'];
    $nextkinphone = $_POST['nextkinphone'];
    $phonenumb = $_POST['phonenumb'];
    $payment = $_POST['payment'];
    $anyspecial = $_POST['anyspecial'];
    $nodays = $_POST['nodays'];
    $docoming = $_POST['docoming'];
    $doleaing = $_POST['doleaing'];
    $norooms = $_POST['norooms'];
    $email = $_POST['email'];


    $sql = " INSERT INTO inquiries (`status`,`firstname`,`othername`,`lname`,`gender`,`dob`,`location`,`nextkin`,`relationship`,`nextkinphone`,`phonenumb`,`payment`,`anyspecial`,`nodays`,`docoming`,`doleaing`,`norooms`,`email`) VALUES('$status','$firstname','$othername','$lname','$gender','$dob','$location','$nextkin','$relationship','$nextkinphone','$phonenumb','$payment','$anyspecial','$nodays','$docoming','$doleaing','$norooms','$email')";
?>

    <?php if ($result = mysqli_query($con, $sql)) {
        echo "<script type='text/javascript'> alert('Your Qoutation application has been sent')</script>"; ?>


        <section class="vh-100 d-flex" style="background-color: #05014a;">
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

                                    <form action='' method='POST'>
                                        <div class='charts'>
                                            <div class='col-md-4 charts-grids widget'>
                                                <div class='card-header' style='font-weight: bold;font-family: 1' Palatino Linotype', serif'>
                                                    <h3>Personal Details</h3>
                                                </div>

                                                <div id='container' style='width: 100%; '>
                                                    <p style='margin-bottom:10px; margin-top:10px;'>
                                                        <span style='font-size: 15px; font-weight: bold;font-family: 1' Palatino Linotype', serif'><input type='checkbox' name='status'>&nbsp;Pro&nbsp;&nbsp; &nbsp; &nbsp;</span>
                                                        <span style='font-size: 15px; font-weight: bold;font-family: 1' Palatino Linotype', serif'><input type='checkbox' name='status'>&nbsp;Dr &nbsp; &nbsp;&nbsp;&nbsp;</span>
                                                        <span style='font-size: 15px; font-weight: bold;font-family: 1' Palatino Linotype', serif'><input type='checkbox' name='status'>&nbsp;Mr &nbsp; &nbsp; &nbsp;&nbsp;</span>
                                                        <span style='font-size: 15px; font-weight: bold;font-family: 1' Palatino Linotype', serif'><input type='checkbox' name='status'>&nbsp;Mrs &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>
                                                        <span style='font-size: 15px; font-weight: bold;font-family: 1' Palatino Linotype', serif'><input type='checkbox' name='status'>&nbsp;Miss</span>
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
                                                <div class='card-header' style='font-weight: bold;font-family: 1' Palatino Linotype', serif'>
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
                                                    <span class='input-group-addon'>Meal Plan</span>
                                                    <select name='relationship' style='height:30px; width: 100%'>
                                                        <option value selected></option>
                                                        <option value="Room only">Room only</option>
                                                        <option value="Breakfast">Breakfast</option>
                                                        <option value="Half Board">Half Board</option>
                                                        <option value="Full Board">Full Board</option>

                                                    </select>

                                                </div>

                                                <div class='input-group' style='margin-bottom:10px;'>
                                                    <span class='input-group-addon'>Next of Kin Phone</span>
                                                    <input type='text' name='nextkinphone' placeholder='Enter Phone' value='' class='form-control' value=''>
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
                                                <div class='card-header' style='font-weight: bold;font-family: 1' Palatino Linotype', serif'>
                                                    <h3>Other Details</h3>
                                                </div>


                                                <div class='input-group' style='margin-bottom:10px;margin-top:15px;'>
                                                    <span class='input-group-addon'>No of Rooms</span>
                                                    <input type='number' name='norooms' placeholder='No of Rooms' class='form-control' value=''>
                                                </div>
                                                <div class='input-group' style='margin-bottom:10px;'>
                                                    <span class='input-group-addon'>Type Of Room</span>
                                                    <select name='relationship' style='height:30px; width: 100%'>
                                                        <option value selected></option>
                                                        <option value="Superior Room">SUPERIOR ROOM</option>
                                                        <option value="Deluxe Room">DELUXE ROOM</option>
                                                        <option value="Guest House">GUEST HOUSE</option>
                                                        <option value="Single Room">SINGLE ROOM</option>
                                                    </select>

                                                </div>
                                                <div class='input-group' style='margin-bottom:10px;'>
                                                    <span class='input-group-addon'>Type Of Bed</span>
                                                    <select name='nodays' style='height:30px; width: 100%'>
                                                        <option value selected></option>
                                                        <option value="Single">Single</option>
                                                        <option value="Double">Double</option>
                                                        <option value="Triple">Triple</option>
                                                        <option value="Quad">Quad</option>
                                                        <option value="None">None</option>

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
                                            <a href="qoutation.php" class="btn btn-success form-control">Print Your Qoutation By Clicking This Button</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



            </div>


        </section>





<?php } else {
        echo "DB Error";
    }
} ?>









<section class="vh-100 d-flex" style="background-color: #05014a;">
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

                            <form action='' method='POST'>
                                <div class='charts'>
                                    <div class='col-md-4 charts-grids widget'>
                                        <div class='card-header' style='font-weight: bold;font-family: 1' Palatino Linotype', serif'>
                                            <h3>Personal Details</h3>
                                        </div>

                                        <div id='container' style='width: 100%; '>
                                            <p style='margin-bottom:10px; margin-top:10px;'>
                                                <span style='font-size: 15px; font-weight: bold;font-family: 1' Palatino Linotype', serif'><input type='checkbox' name='status'>&nbsp;Pro&nbsp;&nbsp; &nbsp; &nbsp;</span>
                                                <span style='font-size: 15px; font-weight: bold;font-family: 1' Palatino Linotype', serif'><input type='checkbox' name='status'>&nbsp;Dr &nbsp; &nbsp;&nbsp;&nbsp;</span>
                                                <span style='font-size: 15px; font-weight: bold;font-family: 1' Palatino Linotype', serif'><input type='checkbox' name='status'>&nbsp;Mr &nbsp; &nbsp; &nbsp;&nbsp;</span>
                                                <span style='font-size: 15px; font-weight: bold;font-family: 1' Palatino Linotype', serif'><input type='checkbox' name='status'>&nbsp;Mrs &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>
                                                <span style='font-size: 15px; font-weight: bold;font-family: 1' Palatino Linotype', serif'><input type='checkbox' name='status'>&nbsp;Miss</span>
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
                                        <div class='card-header' style='font-weight: bold;font-family: 1' Palatino Linotype', serif'>
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
                                            <span class='input-group-addon'>Meal Plan</span>
                                            <select name='anyspecial' style='height:30px; width: 100%'>
                                                <option value selected></option>
                                                <option value="Room only">Room only</option>
                                                <option value="Breakfast">Breakfast</option>
                                                <option value="Half Board">Half Board</option>
                                                <option value="Full Board">Full Board</option>

                                            </select>

                                        </div>

                                        <div class='input-group' style='margin-bottom:10px;'>
                                            <span class='input-group-addon'>Next of Kin Phone</span>
                                            <input type='text' name='nextkinphone' placeholder='Enter Phone' value='' class='form-control' value=''>
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
                                        <div class='card-header' style='font-weight: bold;font-family: 1' Palatino Linotype', serif'>
                                            <h3>Other Details</h3>
                                        </div>


                                        <div class='input-group' style='margin-bottom:10px;margin-top:15px;'>
                                            <span class='input-group-addon'>No of Rooms</span>
                                            <input type='number' name='norooms' placeholder='No of Rooms' class='form-control' value=''>
                                        </div>
                                        <div class='input-group' style='margin-bottom:10px;'>
                                            <span class='input-group-addon'>Type Of Room</span>
                                            <select name='relationship' style='height:30px; width: 100%'>
                                                <option value selected></option>
                                                <option value="Superior Room">SUPERIOR ROOM</option>
                                                <option value="Deluxe Room">DELUXE ROOM</option>
                                                <option value="Guest House">GUEST HOUSE</option>
                                                <option value="Single Room">SINGLE ROOM</option>
                                            </select>

                                        </div>
                                        <div class='input-group' style='margin-bottom:10px;'>
                                            <span class='input-group-addon'>No Of Days</span>
                                            <select name='nodays' style='height:30px; width: 100%'>
                                                <option value selected></option>
                                                <option value="Single">Single</option>
                                                <option value="Double">Double</option>
                                                <option value="Triple">Triple</option>
                                                <option value="Quad">Quad</option>
                                                <option value="None">None</option>

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
                                    <button name="submit" class="btn btn-success"> Submit </button>
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