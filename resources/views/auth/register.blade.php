<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <title>Advisor Sign Up </title>

</head>

<body id="kt_body"
    class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading">

    <div class="d-flex flex-column flex-root">
        <div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid wizard" id="kt_login">
            <div class="login-aside d-flex flex-column flex-row-auto">
                <div class="d-flex flex-column-auto flex-column pt-5 px-30">
                    <a href="#" class="login-logo py-6">
                        <img src="{{asset('admin/assets/media/logos/logoo.png')}}" class="max-h-100px" alt="" />
                    </a>

                    <div class="wizard-nav pt-5 pt-lg-10">
                        <div class="wizard-steps">
                            <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                <div class="wizard-wrapper">
                                    <div class="wizard-icon">
                                        <i class="wizard-check ki ki-check"></i>
                                        <span class="wizard-number">1</span>
                                    </div>
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">Personal Information</h3>
                                        <div class="wizard-desc">Setup Your Account Details</div>
                                    </div>
                                </div>
                            </div>

                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-wrapper">
                                    <div class="wizard-icon">
                                        <i class="wizard-check ki ki-check"></i>
                                        <span class="wizard-number">2</span>
                                    </div>
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">Other Details</h3>
                                        <div class="wizard-desc">some other Information</div>
                                    </div>
                                </div>
                            </div>

                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-wrapper">
                                    <div class="wizard-icon">
                                        <i class="wizard-check ki ki-check"></i>
                                        <span class="wizard-number">3</span>
                                    </div>
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">Completed!</h3>
                                        <div class="wizard-desc">Review and Submit</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="aside-img-wizard d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center pt-2 pt-lg-5"
                    style="background-position-y: calc(100% + 3rem); background-image: url({{asset('admin/assets/media/svg/illustrations/Register.jpg')}})">
                </div>
            </div>

            <div class="login-content flex-column-fluid d-flex flex-column p-10">
                <div class="text-right d-flex justify-content-center">

                </div>

                <div class="d-flex flex-row-fluid flex-center">
                    <div class="login-form login-form-signup">
                        <form class="form" action="{{route('register')}}" method="POST" id="kt_login_signup_form1"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                <div class="pb-10 pb-lg-15">
                                    <h3 class="font-weight-bolder text-dark display5">Create Advisor Account</h3>

                                    <div class="text-muted font-weight-bold font-size-h4">Already have an Account ?
                                        <a href="{{route('login')}}" class="text-primary font-weight-bolder">Sign In</a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">First Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"
                                                name="first_name" id="first_name" placeholder="First Name"
                                                value="{{old('first_name', '')}}" />
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">Last Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"
                                                name="last_name" id="last_name" placeholder="Last Name"
                                                value="{{old('last_name', '')}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">Email <span
                                            class="text-danger">*</span></label>
                                    <input type="email"
                                        class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"
                                        name="email" id="email" placeholder="Email" value="{{old('email', '')}}" />
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">Phone<span
                                                    class="text-danger">*</span></label>
                                            <input type="tel"
                                                class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"
                                                name="phone" id="phone" placeholder="phone"
                                                value="{{old('phone', '')}}" />
                                        </div>
                                    </div>


                                </div>


                                <!--end::Form Group-->
                            </div>
                            <!--end: Wizard Step 1-->
                            <!--begin: Wizard Step 2-->
                            <div class="pb-5" data-wizard-type="step-content">
                                <!--begin::Title-->
                                <div class="pt-lg-0 pt-5 pb-15">
                                    <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Other Details
                                    </h3>
                                </div>
                                <!--begin::Title-->
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">Address <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"
                                                name="address" id="address" placeholder="Address " />
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">City <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6"
                                                name="city" id="city" placeholder="Enter Your city" />
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>

                                <!--end::Form Group-->
                                <!--begin::Form Group-->
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">Preferred Language:
                                    </label>
                                    <select name="language" id="language"
                                        class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6">
                                        <option value="English" selected="selected">Select a language Type Option
                                        </option>
                                        <option value="English">English</option>
                                        <option value="Arabic">Arabic</option>
                                    </select>
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->

                            </div>

                            <!--end: Wizard Step 3-->
                            <!--begin: Wizard Step 4-->
                            <div class="pb-5" data-wizard-type="step-content">
                                <!--begin::Title-->
                                <div class="pt-lg-0 pt-5 pb-15">
                                    <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Complete</h3>
                                    <div class="text-muted font-weight-bold font-size-h4">Complete Your Signup And
                                        Become A
                                        Member!
                                    </div>
                                </div>
                                <!--end::Title-->
                                <!--begin::Section-->
                                <h4 class="font-weight-bolder mb-3">Personal Information</h4>
                                <div class="text-dark-50 font-weight-bold line-height-lg mb-8">
                                    <div id="first_name_output"></div>
                                    <div id="last_name_output"></div>
                                    <div id="phone_output"></div>
                                    <div id="email_output"></div>
                                    <div id="education_output"></div>
                                    <div id="field_output"></div>
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <h4 class="font-weight-bolder mb-3">Other Details</h4>
                                <div class="text-dark-50 font-weight-bold line-height-lg mb-8">
                                    <div id="address_output"></div>
                                    <div id="city_output"></div>
                                    <div id="payment_output"></div>
                                    <div id="language_output"></div>
                                </div>

                            </div>

                            <div class="d-flex justify-content-between pt-3">
                                <div class="mr-2">
                                    <button type="button"
                                        class="btn btn-light-primary font-weight-bolder font-size-h6 pl-6 pr-8 py-4 my-3 mr-3"
                                        data-wizard-type="action-prev">
                                        <span class="svg-icon svg-icon-md mr-1">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Left-2.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3"
                                                        transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)"
                                                        x="14" y="7" width="2" height="10" rx="1" />
                                                    <path
                                                        d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                                                        fill="#000000" fill-rule="nonzero"
                                                        transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>Previous
                                    </button>
                                </div>
                                <div>
                                    <button type="submit"
                                        class="btn btn-primary font-weight-bolder font-size-h6 pl-5 pr-8 py-4 my-3"
                                        data-wizard-type="action-submit" id="kt_login_singin_form_submit_button">Submit
                                        <span class="svg-icon svg-icon-md ml-2">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3"
                                                        transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)"
                                                        x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                    <path
                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                        fill="#000000" fill-rule="nonzero"
                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span></button>
                                    <button type="button"
                                        class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3"
                                        data-wizard-type="action-next">Next Step
                                        <span class="svg-icon svg-icon-md ml-1">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3"
                                                        transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)"
                                                        x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                    <path
                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                        fill="#000000" fill-rule="nonzero"
                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                </g>
                                            </svg>
                                        </span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
    var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const firstNameInput = document.getElementById('first_name');
        const lastNameInput = document.getElementById('last_name');
        const phoneInput = document.getElementById('phone');
        const emailInput = document.getElementById('email');
        const educationSelect = document.querySelector('select[name="education"]');
        const educationOutput = document.getElementById('education_output');
        const addressInput = document.getElementById('address');
        const cityInput = document.getElementById('city');
        const languageSelect = document.querySelector('select[name="language"]');
        const languageOutput = document.getElementById('language_output');

        // Update output functions
        function updateFirstName() {
            firstNameOutput.textContent = 'First Name: ' + firstNameInput.value;
        }

        function updateLastName() {
            lastNameOutput.textContent = 'Last Name: ' + lastNameInput.value;
        }

        function updatePhone() {
            phoneOutput.textContent = 'Phone: ' + phoneInput.value;
        }

        function updateEmail() {
            emailOutput.textContent = 'Email: ' + emailInput.value;
        }

        function updateEducation() {
            educationOutput.textContent = 'Educational Qualification: ' + educationSelect.value;
        }

        function updateAddress() {
            addressOutput.textContent = 'Address: ' + addressInput.value;
        }

        function updateCity() {
            cityOutput.textContent = 'City: ' + cityInput.value;
        }

        function updateLanguage() {
            languageOutput.textContent = 'Preferred Language: ' + languageSelect.value;
        }

        firstNameInput.addEventListener('input', updateFirstName);
        lastNameInput.addEventListener('input', updateLastName);
        phoneInput.addEventListener('input', updatePhone);
        emailInput.addEventListener('input', updateEmail);
        educationSelect.addEventListener('change', updateEducation);
        addressInput.addEventListener('input', updateAddress);
        cityInput.addEventListener('input', updateCity);
        languageSelect.addEventListener('change', updateLanguage);

        updateFirstName();
        updateLastName();
        updatePhone();
        updateEmail();
        updateEducation();
        updateAddress();
        updateCity();
        updateLanguage();
    });
    </script>

</body>

</html>