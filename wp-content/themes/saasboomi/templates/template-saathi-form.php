<?php
/*
* Template Name: Saathi Form
*/ ?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/intlTelInput.min.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/annual-events-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/forms.css">

<div class="event-annual-page forms-page saathi-form">
    <section class="forms-banner-section">
        <div class="container">
            <div class="row flex-centered">
                <div class="col-md-9">
                    <h1 class="heading3">
                        <img src="<?php echo get_template_directory_uri();?>/img/saathi_logo_black.svg" />
                    </h1>
                    <p class="paragraph">
                        A founder’s journey is tough, full of ups and downs and at times there is<br/>
                        nobody to chat about such personal issues. Don’t feel lonely as Saathi<br/>
                        aims to be your partner during these tough times.
                    </p>
                </div>
                <div class="col-md-3 image-grid">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/saathi_form_hero.png" alt="Saathi Registration form banner image" />
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
                                    Personal Details
                                    <img src="<?php echo get_template_directory_uri();?>/img/validation_completed.svg" alt="image" />
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="sidebar-link" data-block="block2" data-target="#additionalQuestions">
                                    Additional Questions
                                    <img src="<?php echo get_template_directory_uri();?>/img/validation_completed.svg" alt="image" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <form action="https://saasboomi.com:8080/https://docs.google.com/forms/u/0/d/e/1FAIpQLSdhigqulhCZrJeMxko9Up-yq1dr1e-jsiVJjFkYlefxExsb2w/formResponse" class="registration-form" data-parsley-validate="">
                        <div class="form-field-group" id="personalDetails">
                            <h4 class="heading4 field-title">Personal Details</h4>
                            <div class="fields-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group nomination-group">
                                            <label class="paragraph" style="margin-bottom: 24px">Are you a founder or nominating someone?</label>
                                            <div class="form-check custom-checkbox custom-control" style="margin-bottom: 16px">
                                                <input checked name="checkbox" class="form-check-input custom-control-input" type="radio" id="category1" data-parsley-required-message="Select anyone" data-parsley-errors-container="#categoryError" data-parsley-multiple="mymultiplelink" required value="Self nominating" />
                                                <label class="form-check-label custom-control-label" for="category1">
                                                    Self nominating
                                                </label>
                                            </div>
                                            <div class="form-check custom-checkbox custom-control">
                                                <input name="checkbox" class="form-check-input custom-control-input" type="radio"  id="category2" data-parsley-required-message="Select anyone" data-parsley-errors-container="#categoryError" data-parsley-multiple="mymultiplelink" required value="Nominating someone"/>
                                                <label class="form-check-label custom-control-label" for="category2">
                                                    Nominating someone
                                                </label>
                                            </div>
                                            <span id="categoryError"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Full Name</label>
                                            <input
                                                type="text"
                                                name="entry.914597938"
                                                class="form-control"
                                                placeholder="Enter Full Name"
                                                data-parsley-group="block1"
                                                required
                                                data-parsley-required-message="Full name is required"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Company Name</label>
                                            <input
                                                type="text"
                                                name="entry.320900589"
                                                class="form-control"
                                                placeholder="Enter Company Name"
                                                data-parsley-group="block1"
                                                required
                                                data-parsley-required-message="Company name is required"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Email ID</label>
                                            <input
                                                type="email"
                                                name="entry.264830781"
                                                class="form-control"
                                                placeholder="Enter Email ID"
                                                data-parsley-group="block1"
                                                required
                                                data-parsley-required-message="Email is required"
                                                data-parsley-type-message="Enter valid Email ID"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Mobile Number</label>
                                            <div class="country-group">
                                                <input
                                                    type="tel"
                                                    placeholder="Enter phone number"
                                                    data-name="country-code"
                                                    data-parsley-errors-container="#mobileNumber"
                                                    required
                                                    data-parsley-required-message="Mobile Number is required"
                                                    data-parsley-type-message="Enter valid Mobile Number"
                                                    data-parsley-type="digits"
                                                    data-parsley-group="block1"
                                                    class="form-control"
                                                />
                                                <input name="entry.1187743065"  class="coutry-dial-code" type="hidden" />
                                            </div>
                                            <span id="mobileNumber"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Company Website</label>
                                            <input
                                                type="url"
                                                name="entry.2121591357"
                                                class="form-control"
                                                placeholder="Enter Company Website"
                                                data-parsley-group="block1"
                                                required
                                                data-parsley-required-message="Company Website is required"
                                                data-parsley-type-message="Enter valid URL"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-field-group" id="additionalQuestions">
                            <h4 class="heading4 field-title">Additional Questions</h4>
                            <div class="fields-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="paragraph">What are you going through? (all data will remain confidential) </label>
                                            <input
                                                type="text"
                                                name="entry.1549914186"
                                                class="form-control"
                                                placeholder="Your Answer"
                                                data-parsley-group="block2"
                                                required
                                                data-parsley-required-message="This detail is required"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row submit-row">
                            <div class="col-md-12">
                                <input class="nomination-input" type="hidden" name="entry.206525984" jsname="L9xHkb" value="Self nominating">
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

<div class="modal fade form-response-modal" id="successModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img data-dismiss="modal" class="close-modal" src="<?php echo get_template_directory_uri();?>/img/close_grey.svg" />
                <img class="success-image" src="<?php echo get_template_directory_uri();?>/img/form_success.svg" />
                <h5 class="heading5">Registration successful</h5>
                <p class="paragraph">You have successfully registered for Volunteer</p>
                <p class="paragraph">We will get in touch with you shortly.</p>
                <div class="text-center btn-wrapper">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="primary-btn primary-btn-dark btn-large" data-dismiss="modal" >Okay</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade form-response-modal" id="errorModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img data-dismiss="modal" class="close-modal" src="<?php echo get_template_directory_uri();?>/img/close_grey.svg" />
                <img class="success-image" src="<?php echo get_template_directory_uri();?>/img/form_error.svg" />
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


<script type="text/javascript">
  $(document).ready(function () {

    $('#upcomingEventNotifyForm').parsley();
    $('#upcomingEventNotifyForm #fname').attr('required',true).attr('data-parsley-required-message','Please enter Full Name').attr('data-parsley-minlength-message','First Name must be of minimum 3 characters');
    $('#upcomingEventNotifyForm #email').attr('required',true).attr('data-parsley-required-message','Please enter Email Address').attr('data-parsley-type-message','Please enter valid Email');

    $('.registration-form .form-control').on('keyup', function(){
        var block1Valid = $('.registration-form').parsley().isValid({group: 'block1', force: true});
        var block2Valid = $('.registration-form').parsley().isValid({group: 'block2', force: true});
        if(block1Valid){
            $('.sidebar-link[data-block="block1"]').addClass('completed');
        }else{
            $('.sidebar-link[data-block="block1"]').removeClass('completed');
        }
        if(block2Valid){
            $('.sidebar-link[data-block="block2"]').addClass('completed');
        }else{
            $('.sidebar-link[data-block="block2"]').removeClass('completed');
        }
    });

    $('.sidebar-link').on('click', function(){
        var $this= $(this);
        $('.sidebar-link').removeClass('active');
        $this.addClass('active');
        var target= $this.attr('data-target');
        $([document.documentElement, document.body]).animate({
            scrollTop: $(target).offset().top - 100
        }, 1000);
    });

    $('.registration-form').on('submit', function(e){
        e.preventDefault();
        if($('.registration-form').parsley().isValid()){
            var $this = $(this);
            $(this).find('button[type="submit"]').text('Submitting....');
            $(this).find('button[type="submit"]').addClass('primary-btn-disabled');
            var datastring = $(".registration-form").serialize();
            $.ajax({
                headers: { "Accept": "application/json"},
                url: "https://saasboomi.com:8080/https://docs.google.com/forms/d/1A5BgSlu-B_Q_3veDvcwlqZlTAYy8RLBX7-MqTFIaH4Q/formResponse",
                data: datastring,
                type: "post",
                dataType: "jsonp",
                statusCode: {
                    0: function () {
                        $this.find('button[type="submit"]').text('Submit');
                        $this.find('button[type="submit"]').removeClass('primary-btn-disabled');
                        $('#errorModal').modal('show');
                        $('.registration-form').trigger("reset");
                        $('.sidebar-link').removeClass('completed');
                    },
                    200: function () {
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

    $('.nomination-group input[type="radio"]').on('click', function(){
        var $this = $(this);
        var val = $this.val();
        $('.nomination-input').val(val);
    });

    //Internation dial codes
    countryPicker();

    function countryPicker(){
        var tel = $('.country-group input[type="tel"]').intlTelInput({
            separateDialCode: true,
            initialCountry: "auto",
            nationalMode: false,
            autoHideDialCode: false,
            initialCountry: 'IN',
        });

        $(document).on("countrychange", ".country-group input[type='tel']", function (e, countryData) {
            var $this = $(this);
            var countryData = $this.intlTelInput('getSelectedCountryData');
            if(countryData){
                var countryDialCode = countryData.dialCode;
                var value = $this.val();
                var number = countryDialCode+value;
                $this.closest('.country-group').find('input[type="hidden"]').val(number);
            }
        });

        $('.country-group input[type="tel"]').parent().addClass('js-float-label-wrapper');

        $(document).on("change", ".country-group input[type='tel']", function (e, countryData) {
            var $this = $(this);
            var countryData = $this.intlTelInput('getSelectedCountryData');
            if(countryData){
                var countryDialCode = countryData.dialCode;
                var value = $this.val();
                var number = countryDialCode+value;
                $this.closest('.country-group').find('input[type="hidden"]').val(number);
            }
        });
    }

});
</script>

<?php get_footer(); ?>
