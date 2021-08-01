<?php
/*
* Template Name: Award Form
*/ ?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/intlTelInput.min.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/annual-events-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/forms.css">

<div class="event-annual-page forms-page awards-form">
    <section class="forms-banner-section">
        <div class="container">
            <div class="row flex-centered">
                <div class="col-md-3">
                    <h1 class="heading3">
                        <img src="<?php echo get_template_directory_uri();?>/img/awards_logo_black.svg" />
                    </h1>
                    <p class="paragraph">
                        To honour Indian SaaS <br/>
                        companies and their founders, <br/>
                        where the SaaS community of <br/>
                        India celebrates its own.
                    </p>
                </div>
                <div class="col-md-6">
                     <h4 class="heading4">Criteria</h4>
                     <ul class="list-unstyled criteria-list">
                        <li class="support-text">If your SaaS company has products which generate recurring revenue (whether monthly, quarterly or annual)</li>
                        <li class="support-text">It should have been in existence for over 12 months</li>
                        <li class="support-text">Indian SaaS Companies - founded in India or founded by Indian founders with significant presence in India</li>
                    </ul>
                </div>
                <div class="col-md-3 image-grid">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/awards_form_banner.png" alt="Awards form banner image" />
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
                                <a href="javascript:void(0)" class="active sidebar-link" data-block="block1" data-target="#memberDetails">
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
                            <li>
                                <a href="javascript:void(0)" class="sidebar-link" data-block="block5" data-target="#categoryDetails">
                                    Category Selection
                                    <img src="<?php echo get_template_directory_uri();?>/img/validation_completed.svg" alt="image" />
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="sidebar-link" data-block="block3" data-target="#financialDetails">
                                    Financial Details
                                    <img src="<?php echo get_template_directory_uri();?>/img/validation_completed.svg" alt="image" />
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="sidebar-link" data-block="block4" data-target="#additionalDetails">
                                    Additional Questions
                                    <img src="<?php echo get_template_directory_uri();?>/img/validation_completed.svg" alt="image" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <form action="https://saasboomi.com:8080/https://docs.google.com/forms/u/0/d/e/1FAIpQLSdhigqulhCZrJeMxko9Up-yq1dr1e-jsiVJjFkYlefxExsb2w/formResponse" class="registration-form" data-parsley-validate="">
                        <div class="form-field-group" id="memberDetails">
                            <h4 class="heading4 field-title">Member Details</h4>
                            <div class="fields-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">First Name</label>
                                            <input
                                                type="text"
                                                name="entry.155281030"
                                                class="form-control"
                                                placeholder="Enter First Name"
                                                data-parsley-group="block1"
                                                required
                                                data-parsley-required-message="First Name is required"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Last Name</label>
                                            <input
                                                type="text"
                                                name="entry.585726593"
                                                class="form-control"
                                                placeholder="Enter Last Name"
                                                data-parsley-group="block1"
                                                required
                                                data-parsley-required-message="Last Name is required"
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
                                                name="entry.1678607724"
                                                class="form-control"
                                                placeholder="Enter Work Email"
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
                                                <input name="entry.1935006403"  class="coutry-dial-code" type="hidden" />
                                            </div>
                                            <span id="mobileNumber"></span>
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
                                                name="entry.1250510654"
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
                                            <label class="paragraph">Year Founded In</label>
                                            <input
                                                type="text"
                                                name="entry.1418404853"
                                                class="form-control"
                                                placeholder="Enter Year Founded"
                                                data-parsley-group="block2"
                                                required
                                                data-parsley-required-message="Year Founded In is required"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Company Website</label>
                                            <input
                                                type="url"
                                                name="entry.263824241"
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
                                                name="entry.1878973468"
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
                                            <label class="paragraph">Number of Employees</label>
                                            <input
                                                type="text"
                                                name="entry.2057326872"
                                                class="form-control"
                                                placeholder="Enter Number of Employees"
                                                data-parsley-group="block2"
                                                required
                                                data-parsley-required-message="Number of Employees is required"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-field-group" id="categoryDetails">
                            <h4 class="heading4 field-title">Category Selection</h4>
                            <div class="fields-group category-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check custom-checkbox custom-control">
                                                <input value="Bootstrapped SaaS startup of the year" class="form-check-input custom-control-input" type="checkbox" id="category1" data-parsley-required-message="Select at least one category" data-parsley-errors-container="#categoryError" data-parsley-multiple="mymultiplelink" required />
                                                <label class="form-check-label custom-control-label" for="category1">
                                                    Bootstrapped SaaS startup of the year
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check custom-checkbox custom-control">
                                                <input value="Vertical SaaS startup of the year" class="form-check-input custom-control-input" type="checkbox" id="category2" data-parsley-multiple="mymultiplelink" required />
                                                <label class="form-check-label custom-control-label" for="category2">
                                                    Vertical SaaS startup of the year
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check custom-checkbox custom-control">
                                                <input value="Deep tech startup of the year" class="form-check-input custom-control-input" type="checkbox" id="category3" data-parsley-multiple="mymultiplelink" required />
                                                <label class="form-check-label custom-control-label" for="category3">
                                                    Deep tech startup of the year
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check custom-checkbox custom-control">
                                                <input value="Moonshot startup of the year" class="form-check-input custom-control-input" type="checkbox" id="category4" data-parsley-multiple="mymultiplelink" required />
                                                <label class="form-check-label custom-control-label" for="category4">
                                                    Moonshot startup of the year
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check custom-checkbox custom-control">
                                                <input value="Category creator SaaS startup of the year" class="form-check-input custom-control-input" type="checkbox" id="category5" data-parsley-multiple="mymultiplelink" required />
                                                <label class="form-check-label custom-control-label" for="category5">
                                                    Category creator SaaS startup of the year
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check custom-checkbox custom-control">
                                                <input value="DevTools SaaS startup of the year" class="form-check-input custom-control-input" type="checkbox" id="category6" data-parsley-multiple="mymultiplelink" required />
                                                <label class="form-check-label custom-control-label" for="category6">
                                                    DevTools SaaS startup of the year
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check custom-checkbox custom-control">
                                                <input value="Breakout SaaS startup of the year" class="form-check-input custom-control-input" type="checkbox" id="category7" data-parsley-multiple="mymultiplelink" required />
                                                <label class="form-check-label custom-control-label" for="category7">
                                                    Breakout SaaS startup of the year
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check custom-checkbox custom-control">
                                                <input value="Other" class="form-check-input custom-control-input" type="checkbox" id="invalidCheck" data-parsley-multiple="mymultiplelink" required />
                                                <label class="form-check-label custom-control-label" for="invalidCheck">
                                                    Other
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <span id="categoryError"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-field-group" id="financialDetails">
                            <h4 class="heading4 field-title">Financial Details</h4>
                            <div class="fields-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Current ARR (MRR as of end October x 12)</label>
                                            <input
                                                type="text"
                                                name="entry.110687453"
                                                class="form-control"
                                                placeholder="Enter Current ARR"
                                                data-parsley-group="block3"
                                                required
                                                data-parsley-required-message="Current ARR is required"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Previous Year ARR (Same Month)</label>
                                            <input
                                                type="text"
                                                name="entry.750421686"
                                                class="form-control"
                                                placeholder="Enter Previous Year ARR"
                                                data-parsley-group="block3"
                                                required
                                                data-parsley-required-message="Previous Year ARR is required"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Funding Raised (in USD)</label>
                                            <input
                                                type="text"
                                                name="entry.2022543469"
                                                class="form-control"
                                                placeholder="Enter Funding Raised"
                                                data-parsley-group="block3"
                                                required
                                                data-parsley-required-message="Funding Raised is required"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="paragraph">Your SaaS Magic Number</label>
                                            <input
                                                type="text"
                                                name="entry.1055271692"
                                                class="form-control"
                                                placeholder="Enter Your SaaS Magic Number"
                                                data-parsley-group="block3"
                                                required
                                                data-parsley-required-message="Your SaaS Magic is required"
                                            />
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
                                            <label class="paragraph">Why do you believe you should win the award in the applied category?</label>
                                            <input
                                                type="text"
                                                name="entry.445701512"
                                                class="form-control"
                                                placeholder="Your Answer"
                                                data-parsley-group="block4"
                                                required
                                                data-parsley-required-message="This detail is required"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="paragraph">What are the key achievements you want the Jury members to know of? </label>
                                            <input
                                                type="text"
                                                name="entry.17680077"
                                                class="form-control"
                                                placeholder="Your Answer"
                                                data-parsley-group="block4"
                                                required
                                                data-parsley-required-message="This detail is required"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="paragraph">Where do you see the company 3 years from now? What big milestones would you want to achieve?</label>
                                            <input
                                                type="text"
                                                name="entry.549595223"
                                                class="form-control"
                                                placeholder="Your Answer"
                                                data-parsley-group="block4"
                                                required
                                                data-parsley-required-message="This detail is required"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="paragraph">Define your ICP </label>
                                            <input
                                                type="text"
                                                name="entry.545925362"
                                                class="form-control"
                                                placeholder="Your Answer"
                                                data-parsley-group="block4"
                                                required
                                                data-parsley-required-message="This detail is required"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="paragraph">Ghost write a reco letter from customer endorsing your startup</label>
                                            <input
                                                type="text"
                                                name="entry.467225011"
                                                class="form-control"
                                                placeholder="Your Answer"
                                                data-parsley-group="block4"
                                                required
                                                data-parsley-required-message="This detail is required"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="paragraph">How does your customer quantify ROI?</label>
                                            <input
                                                type="text"
                                                name="entry.1498329134"
                                                class="form-control"
                                                placeholder="Your Answer"
                                                data-parsley-group="block4"
                                                required
                                                data-parsley-required-message="This detail is required"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="paragraph">Reference Name</label>
                                                    <input
                                                        type="text"
                                                        name="entry.1186973848"
                                                        class="form-control"
                                                        placeholder="Enter the Full Name of Reference "
                                                        data-parsley-group="block4"
                                                        required
                                                        data-parsley-required-message="Reference Name is required"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="paragraph">Reference Email ID</label>
                                                    <input
                                                        type="email"
                                                        name="entry.1867295079"
                                                        class="form-control"
                                                        placeholder="Enter the Email ID of Reference"
                                                        data-parsley-group="block4"
                                                        required
                                                        data-parsley-required-message="Reference Email is required"
                                                        data-parsley-type-message="Enter valid Reference Email"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="paragraph">Reference Letter Text</label>
                                            <input
                                                type="text"
                                                name="entry.293948434"
                                                class="form-control"
                                                placeholder="Your Answer"
                                                data-parsley-group="block4"
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
        var block3Valid = $('.registration-form').parsley().isValid({group: 'block3', force: true});
        var block4Valid = $('.registration-form').parsley().isValid({group: 'block4', force: true});
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
        if(block3Valid){
            $('.sidebar-link[data-block="block3"]').addClass('completed');
        }else{
            $('.sidebar-link[data-block="block3"]').removeClass('completed');
        }
        if(block4Valid){
            $('.sidebar-link[data-block="block4"]').addClass('completed');
        }else{
            $('.sidebar-link[data-block="block4"]').removeClass('completed');
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
            var categoryHtml = '';
            $('.category-group input[type="checkbox"]:checked').each(function () {
                var val = $(this).val();
                categoryHtml += '<input type="hidden" name="entry.927776707" value="'+val+'"/>';
            });
            $('.registration-form').append(categoryHtml);
            $this.find('button[type="submit"]').text('Submitting....');
            $this.find('button[type="submit"]').addClass('primary-btn-disabled');
            var datastring = $(".registration-form").serialize();
            $.ajax({
                headers: { "Accept": "application/json"},
                url: "https://saasboomi.com:8080/https://docs.google.com/forms/d/1zEFxPZC1z1bT-ZPDLzW2pk3_zDHQBYiZSRfX2xvwlAA/formResponse",
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
                        $('.registration-form').find('input[name="entry.927776707"]').remove();
                    },
                    200: function () {
                        $this.find('button[type="submit"]').text('Submit');
                        $this.find('button[type="submit"]').removeClass('primary-btn-disabled');
                        $('#successModal').modal('show');
                        $('.registration-form').trigger("reset");
                        $('.sidebar-link').removeClass('completed');
                        $('.registration-form').find('input[name="entry.927776707"]').remove();
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

    $('#categoryDetails, input[type="checkbox]').on('click', function(){
        var len = $('#categoryDetails input[type="checkbox"]:checked').length;
        if(len){
            $('.sidebar-link[data-block="block5"]').addClass('completed');
        }else{
            $('.sidebar-link[data-block="block5"]').removeClass('completed');
        }
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
