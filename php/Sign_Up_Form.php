   <?php 
    <!-- Sign UP FORMS -->
echo"
    <div class='w-100 vh-100 position-fixed box-shadow-login' id='hideover-lay' onclick='signupclose()'>
        <div class='container position-absolute top-40 start-50 translate-middle z-index-10' id='Child'
            onclick='Login_Page_onclick(event)'>
            <div class='d-flex justify-content-between'>
                <div class='d-flex justify-content-center'>
                    <button class='fs-24px px-3 py-3 fw-500 border border-0 ' onclick='lawyersignup()'
                        id='colorwl'>Lawyer</button>
                    <button class='fs-24px px-3 py-3 fw-500 border-0' onclick='usersignup()' id='colorbu'>User</button>
                </div>
                <div class='d-flex bg-color-login px-3' onclick='signupclose()'>
                    <button class='fs-4 border-0'>&#10006;</button>
                </div>
            </div>
            <div class='bg-color-login container py-5 z-index-12'>

                <!-- User Sign Up Form -->
                <form action='' class='' id='showu'>

                    <div class='row justify-content-center justify-content-lg-around my-lg-5'>
                        <div class='col-10 col-lg-4'>
                            <input type='text' placeholder='Enter Full Name*'
                                class='form-control border border-top-0 border-end-0 border-start-0 border-bottom-3 rounded-0 fs-18px py-1 my-2 text-color-grey fw-400 border-secondary-subtle'
                                onchange='validate_User_Name()' id='User_Name' required>
                            <div class='invalid_User_Name text-color-red'>
                            </div>
                        </div>
                        <div class='col-10 col-lg-4'>
                            <input type='email' name='' placeholder='Enter your Email*'
                                class='form-control border border-top-0 border-end-0 border-start-0 border-bottom-3 rounded-0 fs-18px py-1 my-2 text-color-grey fw-400 border-secondary-subtle '
                                onchange='validate_User_Email()' id='User_Email' required>
                            <div class='invalid_User_Email text-color-red'>
                            </div>
                        </div>
                    </div>
                    <div class='row justify-content-center justify-content-lg-around my-lg-5'>
                        <div class='col-10 col-lg-4'>
                            <input type='text' placeholder='Phone Number*'
                                class='form-control border border-top-0 border-end-0 border-start-0 border-bottom-3 rounded-0 fs-18px py-1 my-2 text-color-grey fw-400 border-secondary-subtle'
                                onchange='validate_User_Number()' id='User_Number' required>
                            <div class='invalid_User_Number text-color-red'>
                            </div>
                        </div>
                        <div class='col-10 col-lg-4'>
                            <input type='text' placeholder='State'
                                class='form-control border border-top-0 border-end-0 border-start-0 border-bottom-3 rounded-0 fs-18px py-1 my-2 text-color-grey fw-400 border-secondary-subtle'
                                onchange='validate_User_State()' id='User_State' required>
                            <div class='invalid_User_State text-color-red'>
                            </div>
                        </div>
                    </div>
                    <div class='row justify-content-center justify-content-lg-around my-lg-5'>
                        <div class='col-10 col-lg-4'>
                            <input type='password' placeholder='Enter Password*'
                                class='form-control border border-top-0 border-end-0 border-start-0 border-bottom-3 rounded-0 fs-18px py-1 my-2 text-color-grey fw-400 border-secondary-subtle'
                                onchange='validate_User_Password()' id='User_Password' required>
                            <div class='invalid_User_Password text-color-red'>
                            </div>
                        </div>
                        <div class='col-10 col-lg-4'>
                            <input type='password' placeholder='Confirm Password*'
                                class='form-control border border-top-0 border-end-0 border-start-0 border-bottom-3 rounded-0 fs-18px py-1 my-2 text-color-grey fw-400 border-secondary-subtle'
                                onchange='Confirm_User_Password()' id='User_CPassword' required>
                            <div class='invalid_User_CPassword text-color-red'>
                            </div>
                        </div>
                    </div>
                    <div class='d-flex justify-content-center align-items-baseline mt-3 mt-lg-5 '>
                        <button type='submit'
                            class='bg-color-blue text-color-white px-2 py-2 mx-auto fs-16px fw-600 border border-0 rounded-500'
                            onclick='Alert_Msg_User()' id='Register_ButtonU'>Register
                            Now</button>
                    </div>

                </form>
                <!-- Lawyer Sign up From  -->
                <form action='' class='' id='hiddenl'>
                    <div class='row justify-content-center justify-content-lg-around my-lg-5'>
                        <div class='col-10 col-lg-4'>
                            <input type='text' placeholder='Enter Full Name*'
                                class='form-control mb-3 border border-top-0 border-end-0 border-start-0 border-bottom-3 rounded-0 fs-18px py-1 my-1 text-color-grey fw-400 border-secondary-subtle User_Name'
                                onchange='validate_Lawyer_Name()' id='Lawyer_Name' required value>
                            <div class='invalid_Lawyer_Name text-color-red'>
                            </div>
                        </div>
                        <div class='col-10 col-lg-4'>
                            <input type='email' name='' placeholder='Enter your Email*'
                                class='form-control mb-3 border border-top-0 border-end-0 border-start-0 border-bottom-3 rounded-0 fs-18px py-1 my-1 text-color-grey fw-400 border-secondary-subtle User_Email'
                                onchange='validate_Lawyer_Email()' id='Lawyer_Email' required value>
                            <div class='invalid_Lawyer_Email text-color-red'>
                            </div>
                        </div>
                    </div>
                    <div class='row justify-content-center justify-content-lg-around my-lg-5'>
                        <div class='col-10 col-lg-4'>
                            <input type='text' placeholder='Phone Number*'
                                class='form-control mb-3 border border-top-0 border-end-0 border-start-0 border-bottom-3 rounded-0 fs-18px py-1 my-1 text-color-grey fw-400 border-secondary-subtle'
                                onchange='validate_Lawyer_Number()' id='Lawyer_Number' required>
                            <div class='invalid_Lawyer_Number text-color-red'>
                            </div>
                        </div>
                        <div class='col-10 col-lg-4'>
                            <input type='text' placeholder='Experience'
                                class='form-control mb-3 border border-top-0 border-end-0 border-start-0 border-bottom-3 rounded-0 fs-18px py-1 my-1 text-color-grey fw-400 border-secondary-subtle'
                                onchange='validate_Lawyer_Exper()' id='Lawyer_Exper' required>
                            <div class='invalid_Lawyer_Exper text-color-red'>
                            </div>
                        </div>
                    </div>
                    <div class='row justify-content-center justify-content-lg-around my-lg-5'>
                        <div class='col-10 col-lg-4'>
                            <input type='text' placeholder='Specialization'
                                class='form-control mb-3 border border-top-0 border-end-0 border-start-0 border-bottom-3 rounded-0 fs-18px py-1 my-1 text-color-grey fw-400 border-secondary-subtle' required>
                        </div>
                        <div class='col-10 col-lg-4'>
                            <input type='text' placeholder='Enter or Choose Location'
                                class='form-control mb-3 border border-top-0 border-end-0 border-start-0 border-bottom-3 rounded-0 fs-18px py-1 my-1 text-color-grey fw-400 border-secondary-subtle' required>
                        </div>
                    </div>
                    <div class='row justify-content-center justify-content-lg-around my-lg-5'>
                        <div class='col-10 col-lg-4'>
                            <input type='password' placeholder='Enter Password*'
                                class='form-control mb-3 border border-top-0 border-end-0 border-start-0 border-bottom-3 rounded-0 fs-18px py-1 my-1 text-color-grey fw-400 border-secondary-subtle'
                                onchange='validate_Lawyer_Password()' id='Lawyer_Password' required>
                            <div class='invalid_Lawyer_Password text-color-red'>
                            </div>
                        </div>
                        <div class='col-10 col-lg-4'>
                            <input type='password' placeholder='Confirm Password*'
                                class='form-control mb-3 border border-top-0 border-end-0 border-start-0 border-bottom-3 rounded-0 fs-18px py-1 my-1 text-color-grey fw-400 border-secondary-subtle'
                                onchange='Confirm_Lawyer_Password()' id='Lawyer_CPassword' required>
                            <div class='invalid_Lawyer_CPassword text-color-red'>
                            </div>
                        </div>
                    </div>
                    <div class='d-flex justify-content-center align-items-baseline mt-3 mt-lg-5 '>
                        <button type='submit'
                            class='bg-color-blue text-color-white px-2 py-2 mx-auto fs-16px fw-600 border border-0 rounded-500'
                            onclick='Alert_Msg_Lawyer()' id='Register_ButtonL'>Register
                            Now</button>
                    </div>


                </form>
            </div>
        </div>

    </div>
    <!-- sign UP form End  -->"

?>