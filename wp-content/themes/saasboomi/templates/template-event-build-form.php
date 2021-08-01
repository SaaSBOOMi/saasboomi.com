<?php
/*
* Template Name: Event Build Form
*/ ?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/intlTelInput.min.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/annual-events-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/forms.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/select2.min.css">

<div class="event-annual-page forms-page build-form">
    <section class="forms-banner-section build-form">
        <div class="container">
            <div class="row flex-centered">
                <div class="col-md-3">
                    <h1 class="heading3">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/build_logo_black.svg" class="logo" />
                    </h1>
                    <p class="paragraph">
                        Learn to build products that sell themselves
                    </p>
                </div>
                <div class="col-md-9 text-right">
                    <?php if (isset($_GET['title']) && $_GET['title']) : ?>
                        <h4 class="heading4 title"><?php echo $_GET['title'] ?></h4>
                        <?php if (isset($_GET['start_date']) && $_GET['start_date'] && isset($_GET['end_date']) && $_GET['end_date']) : ?>
                            <p class="dates  heading5"><?php echo $_GET['start_date'] ?> - <?php echo $_GET['end_date'] ?> <?php if (isset($_GET['duration'])) : ?> • <?php echo $_GET['duration'];
                                                                                                                                                                    endif ?> </p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="form-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading3 section-title">Registration Form</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar">
                        <h4 class="heading5 sidebar-title">INDEX</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="javascript:void(0)" class="active sidebar-link" data-block="block1" data-target="#personalDetails">
                                    Member Details
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/validation_completed.svg" alt="image" />
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="sidebar-link" data-block="block2" data-target="#companyDetails">
                                    Company Details
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/validation_completed.svg" alt="image" />
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="sidebar-link" data-block="block3" data-target="#additionalDetails">
                                    Additional Questions
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/validation_completed.svg" alt="image" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <form action="https://saasboomi.com:8080/https://docs.google.com/forms/u/0/d/e/1ytHDZcquDrfh0zp67hHNw-QB0lrHhQh0VXf3eV-vyjQ/formResponse" class="registration-form" data-parsley-validate="">
                        <div class="form-field-group" id="personalDetails">
                            <h4 class="heading4 field-title">Member Details</h4>
                            <div class="fields-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Full Name</label>
                                            <input type="text" name="entry.1861194900" class="form-control" placeholder="Enter Full Name" data-parsley-group="block1" required data-parsley-required-message="Full name is required" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Designation</label>
                                            <input type="text" name="entry.2073851849" class="form-control" placeholder="Enter Designation" data-parsley-group="block1" required data-parsley-required-message="Designation is required" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Work Email ID</label>
                                            <input type="email" name="entry.1296689627" class="form-control" placeholder="Enter Work Email ID" data-parsley-group="block1" required data-parsley-required-message="Work Email ID is required" data-parsley-type-message="Enter valid Work Email ID" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Mobile Number</label>
                                            <div class="country-group">
                                                <input type="tel" placeholder="Enter phone number" data-name="country-code" data-parsley-errors-container="#mobileNumber" required data-parsley-required-message="Mobile Number is required"  data-parsley-type-message="Enter valid Mobile Number" data-parsley-type="digits" data-parsley-group="block1" />
                                                <input name="entry.542829681" class="coutry-dial-code" type="hidden" />
                                            </div>
                                            <span id="mobileNumber"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">LinkedIn Profile Link</label>
                                            <input type="url" name="entry.2122436391" class="form-control" placeholder="Enter LinkedIn Profile Link" data-parsley-group="block1" required data-parsley-required-message="LinkedIn Profile Link is required" data-parsley-type-message="Enter valid URL"/>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="form-field-group" id="companyDetails">
                            <h4 class="heading4 field-title">Company Details</h4>
                            <div class="fields-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Company Name</label>
                                            <input type="text" name="entry.1803003799" class="form-control" placeholder="Enter Company Name" data-parsley-group="block2" required data-parsley-required-message="Company Name is required" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">City</label>
                                            <input type="text" name="entry.126676264" class="form-control" placeholder="Enter City" data-parsley-group="block2" required data-parsley-required-message="City is required" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Company Website</label>
                                            <input type="url" name="entry.814205720" class="form-control" placeholder="Enter Company Website" data-parsley-group="block2" required data-parsley-required-message="Company Website is required" data-parsley-type-message="Enter valid URL"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Company Founder’s Name</label>
                                            <input type="text" name="entry.865248434" class="form-control" placeholder="Enter Founder's Name" data-parsley-group="block2" required data-parsley-required-message="Founder's Name is required" />
                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Current ARR Range</label>
                                            <div class="form-select">
                                                <select class="paragraph" name="entry.1695128490" id="current-arr" placeholder="Select Current ARR Range">
                                                    <option value="Idea Stage">Idea Stage </option>
                                                    <option value="Product Ready-No Revenue">Product Ready-No Revenue </option>
                                                    <option value="Less than $200K">Less than $200K</option>
                                                    <option value="$200K - $1M">$200K - $1M</option>
                                                    <option value="$1M - $2M">$1M - $2M</option>
                                                    <option value="$2M+">$2M+</option>
                                                </select>
                                            </div>
                                            <!-- <input type="text" name="entry.1942825513" class="form-control" placeholder="Select Current ARR Range" data-parsley-group="block2" required data-parsley-required-message="Company Crunchbase Profile is required" /> -->
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Startup Target Segment</label>
                                            <div class="form-select">
                                                <select class="paragraph" name="entry.1385733272" id="startup-target" placeholder="Select Startup Target Segment">
                                                    <option value="SMB">SMB</option>
                                                    <option value="Mid Market">Mid Market</option>
                                                    <option value="Enterprise">Enterprise</option>
                                                </select>
                                            </div>
                                            <!-- <input type="text" name="entry.1942825513" class="form-control" placeholder="Select Startup Target Segment" data-parsley-group="block2" required data-parsley-required-message="Company Crunchbase Profile is required" /> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-field-group" id="additionalDetails">
                            <h4 class="heading4 field-title">Additional Questions</h4>
                            <div class="fields-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="paragraph">What is the size of your Product and Engineering Team?</label>
                                            <input type="text" name="entry.469791988" class="form-control" placeholder="Your answer" data-parsley-group="block3" required data-parsley-required-message="This detail is required" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="paragraph">Top 3 challenges related to your Product in the company?</label>
                                            <input type="text" name="entry.1494402637" class="form-control" placeholder="Your answer" data-parsley-group="block3" required data-parsley-required-message="This detail is required" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row submit-row">
                            <div class="col-md-12">
                                <button type="submit" class="primary-btn primary-btn-dark btn-large">Submit</button>
                                <span class="support-text note">* You must fill these fields in order to continue</span>
                                <p class="heading5 status success-status" style="display: none">Thank you for registration.</p>
                                <p class="heading5 status error-status" style="display: none">Something went wrong please try again...!</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('templates/template-newsletter'); ?>

</div>

<div class="modal fade form-response-modal" id="successModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img data-dismiss="modal" class="close-modal" src="<?php echo get_template_directory_uri(); ?>/img/close_grey.svg" />
                <img class="success-image" src="<?php echo get_template_directory_uri(); ?>/img/form_success.svg" />
                <h5 class="heading5">Registration successful</h5>
                <p class="paragraph">You have successfully registered for Build</p>
                <p class="paragraph">We will get in touch with you shortly.</p>
                <div class="text-center btn-wrapper">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="primary-btn primary-btn-dark btn-large" data-dismiss="modal">Okay</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade form-response-modal" id="errorModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img data-dismiss="modal" class="close-modal" src="<?php echo get_template_directory_uri(); ?>/img/close_grey.svg" />
                <img class="success-image" src="<?php echo get_template_directory_uri(); ?>/img/form_error.svg" />
                <h5 class="heading5">Oops Something went wrong</h5>
                <p class="paragraph">Your registration was unsuccesful! Please try again.</p>
                <div class="text-center btn-wrapper">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a data-dismiss="modal" href="javascript:void(0)" class="primary-btn primary-btn-dark btn-large">Try Again</a></li>
                        <li class="list-inline-item"><a data-dismiss="modal" href="javascript:void(0)" class="primary-btn primary-btn-dark btn-large">Go Back</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/parsley.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/intlTelInput-jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/select2.min.js"></script>


<script type="text/javascript">
    $(document).ready(function() {


        $('#upcomingEventNotifyForm').parsley();
        $('#upcomingEventNotifyForm #fname').attr('required', true).attr('data-parsley-required-message', 'Please enter Full Name').attr('data-parsley-minlength-message', 'First Name must be of minimum 3 characters');
        $('#upcomingEventNotifyForm #email').attr('required', true).attr('data-parsley-required-message', 'Please enter Email Address').attr('data-parsley-type-message', 'Please enter valid Email');



        $('.registration-form .form-control').on('keyup', function() {
            var block1Valid = $('.registration-form').parsley().isValid({
                group: 'block1',
                force: true
            });
            var block2Valid = $('.registration-form').parsley().isValid({
                group: 'block2',
                force: true
            });

            var block3Valid = $('.registration-form').parsley().isValid({
                group: 'block3',
                force: true
            });
            if (block1Valid) {
                $('.sidebar-link[data-block="block1"]').addClass('completed');
            } else {
                $('.sidebar-link[data-block="block1"]').removeClass('completed');
            }
            if (block2Valid) {
                $('.sidebar-link[data-block="block2"]').addClass('completed');
            } else {
                $('.sidebar-link[data-block="block2"]').removeClass('completed');
            }

            if (block3Valid) {
                $('.sidebar-link[data-block="block3"]').addClass('completed');
            } else {
                $('.sidebar-link[data-block="block3"]').removeClass('completed');
            }
        });

        $('.sidebar-link').on('click', function() {
            var $this = $(this);
            $('.sidebar-link').removeClass('active');
            $this.addClass('active');
            var target = $this.attr('data-target');
            $([document.documentElement, document.body]).animate({
                scrollTop: $(target).offset().top - 100
            }, 1000);
        });

        $('.registration-form').on('submit', function(e) {
            e.preventDefault();
            if ($('.registration-form').parsley().isValid()) {
                var $this = $(this);
                $(this).find('button[type="submit"]').text('Submitting....');
                $(this).find('button[type="submit"]').addClass('primary-btn-disabled');
                var datastring = $(".registration-form").serialize();
                $.ajax({
                    headers: {
                        "Accept": "application/json"
                    },
                    url: "https://saasboomi.com:8080/https://docs.google.com/forms/d/1ytHDZcquDrfh0zp67hHNw-QB0lrHhQh0VXf3eV-vyjQ/formResponse",
                    data: datastring,
                    type: "post",
                    dataType: "jsonp",
                    statusCode: {
                        0: function() {
                            $this.find('button[type="submit"]').text('Submit');
                            $this.find('button[type="submit"]').removeClass('primary-btn-disabled');
                            $('#errorModal').modal('show');
                            $('.registration-form').trigger("reset");
                            $('.sidebar-link').removeClass('completed');
                        },
                        200: function() {
                            $this.find('button[type="submit"]').text('Submit');
                            $this.find('button[type="submit"]').removeClass('primary-btn-disabled');
                            $('#successModal').modal('show');
                            $('.registration-form').trigger("reset");
                            $('.sidebar-link').removeClass('completed');
                        },
                        404: function() {
                            $this.find('button[type="submit"]').text('Submit');
                            $this.find('button[type="submit"]').removeClass('primary-btn-disabled');
                            $('#successModal').modal('show');
                            $('.registration-form').trigger("reset");
                            $('.sidebar-link').removeClass('completed');
                        }
                    }
                });
            }
        });
        $('#startup-target').select2();
        $('#current-arr').select2();
        countryPicker();

        function countryPicker() {
            var tel = $('.country-group input[type="tel"]').intlTelInput({
                separateDialCode: true,
                initialCountry: "auto",
                nationalMode: false,
                autoHideDialCode: false,
                initialCountry: 'IN',
            });

            $(document).on("countrychange", ".country-group input[type='tel']", function(e, countryData) {
                var $this = $(this);
                var countryData = $this.intlTelInput('getSelectedCountryData');
                if (countryData) {
                    var countryDialCode = countryData.dialCode;
                    var value = $this.val();
                    var number = countryDialCode + value;
                    $this.closest('.country-group').find('input[type="hidden"]').val(number);
                }
            });

            $('.country-group input[type="tel"]').parent().addClass('js-float-label-wrapper');

            $(document).on("change", ".country-group input[type='tel']", function(e, countryData) {
                var $this = $(this);
                var countryData = $this.intlTelInput('getSelectedCountryData');
                if (countryData) {
                    var countryDialCode = countryData.dialCode;
                    var value = $this.val();
                    var number = countryDialCode + value;
                    $this.closest('.country-group').find('input[type="hidden"]').val(number);
                }
            });
        }
    });
</script>

<?php get_footer(); ?>
