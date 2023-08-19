echo"<div class='charts'>
    <div class='mid-content-top charts-grids'>
        <div class='middle-content'>
            <h4 class='title'>PATIENT REGISTRATON FORM</h4>
            <!-- start content_slider -->
            <div class='alert alert-info'>
                <i class='fa fa-info'></i>&nbsp;Use the form below to enter teachersssss details
            </div>
            <form action='register.php' method='post'>
                <div class='charts'>
                    <div class='col-md-4 charts-grids widget'>
                        <div class='card-header' style='font-weight: bold;font-family: ' Palatino Linotype', serif'>
                            <h3>Personal Details</h3>
                        </div>

                        <div id='container' style='width: 100%; '>
                            <p style='margin-bottom:10px; margin-top:10px;'>
                                <span style='font-size: 15px; font-weight: bold;font-family: ' Palatino Linotype', serif'><input type='checkbox' name='pro'>&nbsp;Pro&nbsp;&nbsp; &nbsp; &nbsp;</span>
                                <span style='font-size: 15px; font-weight: bold;font-family: ' Palatino Linotype', serif'><input type='checkbox' name='dr'>&nbsp;Dr &nbsp; &nbsp;&nbsp;&nbsp;</span>
                                <span style='font-size: 15px; font-weight: bold;font-family: ' Palatino Linotype', serif'><input type='checkbox' name='mr'>&nbsp;Mr &nbsp; &nbsp; &nbsp;&nbsp;</span>
                                <span style='font-size: 15px; font-weight: bold;font-family: ' Palatino Linotype', serif'><input type='checkbox' name='mrs'>&nbsp;Mrs &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>
                                <span style='font-size: 15px; font-weight: bold;font-family: ' Palatino Linotype', serif'><input type='checkbox' name='miss'>&nbsp;Miss</span>
                            </p>
                            <div class='input-group' style='margin-bottom:10px;'>
                                <span class='input-group-addon'>First Name</span>
                                <input type='text' name='fname' placeholder='Enter First Name' value='' class='form-control'>
                            </div>
                            <div class='input-group' style='margin-bottom:10px;'>
                                <span class='input-group-addon'>Other Name</span>
                                <input type='text' name='mname' placeholder='Other name' value='' class='form-control' value=''>
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
                                <input type='date' placeholder='Payment Log date' name='dob' class='form-control' value=''>
                            </div>

                        </div>

                    </div>

                    <div class='col-md-4 charts-grids widget states-mdl'>
                        <div class='card-header' style='font-weight: bold;font-family: ' Palatino Linotype', serif'>
                            <h3>Other Details</h3>
                        </div>


                        <div class='input-group' style='margin-bottom:10px;margin-top:15px;'>
                            <span class='input-group-addon'>Village</span>
                            <input type='text' name='village' placeholder='Residential area' class='form-control' value=''>
                        </div>
                        <div class='input-group' style='margin-bottom:10px;'>
                            <span class='input-group-addon'>Next of Kin</span>
                            <input type='text' name='guardian' placeholder='Enter Guardian' class='form-control' value=''>
                        </div>
                        <div class='input-group' style='margin-bottom:10px;'>
                            <span class='input-group-addon'>Relationship</span>
                            <select name='relationshipd' style='height:30px; width: 100%'>
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
                            <input type='number' name='phone' placeholder='Enter Phone' value='' class='form-control' value=''>
                        </div>
                        <div class='input-group' style='margin-bottom:10px;'>
                            <span class='input-group-addon'>Patient Phone</span>
                            <input type='number' name='kphone' placeholder='Enter Phone' value='' class='form-control' value=''>
                        </div>
                        <div class='input-group' style='margin-bottom:10px;'>
                            <span class='input-group-addon'>Select Payment</span>
                            <select name='patientpay' id='paypatient' style='height:30px; width: 100%'>
                                <option>CASH</option>
                                <option>SCHEME</option>



                            </select>

                        </div>




                    </div>

                    <div class='clearfix'> </div>
                </div>



                <div class='modal-footer'>

                    <input type='submit' class='btn btn-success' id='btns1' value='Submit' name='submited2'> &nbsp;
                    <input type='reset' class='btn btn-success' id='btns' value='Clear' name=''>

                </div>
            </form>
        </div>
    </div>
</div>";