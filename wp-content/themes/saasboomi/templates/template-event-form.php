<?php
/*
* Template Name: Event Form
*/ ?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/annual-events-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/forms.css">

<div class="event-annual-page forms-page event-form">
    <section class="forms-banner-section">
        <div class="container">
            <div class="row flex-centered">
                <div class="col-md-3">
                    <h1 class="heading3">
                        <img src="<?php echo get_template_directory_uri();?>/img/product_logo_black.svg" />
                    </h1>
                    <p class="paragraph">
                        Learn to build products that sell themselves
                    </p>
                </div>
                <div class="col-md-9 text-right">
                     <h4 class="heading4 title">Product 2020</h4>
                     <p class="dates heading5">19th December 2020  •  11 AM - 12.30 PM  •  Virtual Event</p>
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
                                    <img src="<?php echo get_template_directory_uri();?>/img/validation_completed.svg" alt="image" />
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="sidebar-link" data-block="block2" data-target="#companyDetails">
                                    Company Details
                                    <img src="<?php echo get_template_directory_uri();?>/img/validation_completed.svg" alt="image" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <form action="https://saasboomi.com:8080/https://docs.google.com/forms/u/0/d/e/1FAIpQLSdhigqulhCZrJeMxko9Up-yq1dr1e-jsiVJjFkYlefxExsb2w/formResponse" class="registration-form" data-parsley-validate="">
                        <div class="form-field-group" id="personalDetails">
                            <h4 class="heading4 field-title">Member Details</h4>
                            <div class="fields-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Full Name</label>
                                            <input
                                                type="text"
                                                name="entry.642704711"
                                                class="form-control"
                                                placeholder="Jhon Doe"
                                                data-parsley-group="block1"
                                                required
                                                data-parsley-required-message="Full name is required"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Designation</label>
                                            <input
                                                type="text"
                                                name="entry.1510614301"
                                                class="form-control"
                                                placeholder="Apple"
                                                data-parsley-group="block1"
                                                required
                                                data-parsley-required-message="Designation is required"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Work Email ID</label>
                                            <input
                                                type="email"
                                                name="entry.1510237245"
                                                class="form-control"
                                                placeholder="johndoe@example.com"
                                                data-parsley-group="block1"
                                                required
                                                data-parsley-required-message="Work Email ID is required"
                                                data-parsley-type-message="Enter valid Work Email ID"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Mobile Number</label>
                                            <input
                                                type="text"
                                                name="entry.2128900306"
                                                class="form-control"
                                                placeholder="91 1234567890"
                                                data-parsley-group="block1"
                                                data-parsley-type="digits"
                                                required
                                                data-parsley-required-message="Mobile Number is required"
                                                data-parsley-type-message="Enter valid Mobile Number"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">LinkedIn Profile Link</label>
                                            <input
                                                type="url"
                                                name="entry.551315513"
                                                class="form-control"
                                                placeholder="https://www.linkedin.com/in/jhondoe"
                                                data-parsley-group="block1"
                                                required
                                                data-parsley-required-message="LinkedIn Profile Link is required"
                                                data-parsley-type-message="Enter valid URL"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Twitter Profile Link</label>
                                            <input
                                                type="url"
                                                name="entry.886270896"
                                                class="form-control"
                                                placeholder="https://twitter.com/jhondoe"
                                                data-parsley-group="block1"
                                                required
                                                data-parsley-required-message="Twitter Profile Link is required"
                                                data-parsley-type-message="Enter valid URL"
                                            />
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
                                            <input
                                                type="text"
                                                name="entry.1942825513"
                                                class="form-control"
                                                placeholder="Enter Company Name"
                                                data-parsley-group="block2"
                                                required
                                                data-parsley-required-message="Company Name is required"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Company Founded In</label>
                                            <input
                                                type="text"
                                                name="entry.1592210438"
                                                class="form-control"
                                                placeholder="Enter Company Founded In"
                                                data-parsley-group="block2"
                                                required
                                                data-parsley-required-message="Company Founded In is required"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Company Website</label>
                                            <input
                                                type="url"
                                                name="entry.1942825513"
                                                class="form-control"
                                                placeholder="Enter Company Website"
                                                data-parsley-group="block2"
                                                required
                                                data-parsley-required-message="Company Website is required"
                                                data-parsley-type-message="Enter valid URL"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">City</label>
                                            <input
                                                type="text"
                                                name="entry.1942825513"
                                                class="form-control"
                                                placeholder="Enter City"
                                                data-parsley-group="block2"
                                                required
                                                data-parsley-required-message="City is required"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Company Crunchbase Profile</label>
                                            <input
                                                type="text"
                                                name="entry.1942825513"
                                                class="form-control"
                                                placeholder="Enter Company Crunchbase Profile"
                                                data-parsley-group="block2"
                                                required
                                                data-parsley-required-message="Company Crunchbase Profile is required"
                                            />
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
                        <li class="list-inline-item"><a href="javascript:void(0)" class="primary-btn primary-btn-dark btn-large">Okay</a></li>
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
                url: "https://saasboomi.com:8080/https://docs.google.com/forms/d/e/1FAIpQLSdhigqulhCZrJeMxko9Up-yq1dr1e-jsiVJjFkYlefxExsb2w/formResponse",
                data: datastring,
                type: "post",
                dataType: "jsonp",
                statusCode: {
                    0: function () {
                        $this.find('button[type="submit"]').text('Submit');
                        $this.find('button[type="submit"]').removeClass('primary-btn-disabled');
                        $('#errorModal').modal('show');
                    },
                    200: function () {
                        $this.find('button[type="submit"]').text('Submit');
                        $this.find('button[type="submit"]').removeClass('primary-btn-disabled');
                        $('#successModal').modal('show');
                    }
                }
            });
        }
    });
});
</script>

<?php get_footer(); ?>
