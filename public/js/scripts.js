$(document).ready(function () {

    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        cache: false
    });

    // Commonly user variables
    var winHeight = window.innerHeight;
    var winWidth = window.innerWidth;
    var screenHeight = screen.availHeight;
    var screenWidth = screen.availWidth;
    var staticNavHeight = $('nav.navbar.fixed-top').outerHeight();

    // Animations initialization
    new WOW().init();

    // Initialize MDB select
    $('.mdb-select').materialSelect();

    // Work around for select search not working
    $(".mdb-select").find(".search").on("click", function (e) {
        e.preventDefault();
        $(this).focus();
    });

    // Initialize the datetimepicker
    $('.datepicker').datepicker({
        // Escape any “rule” characters with an exclamation mark (!).
        format: 'mm/dd/yyyy',
        formatSubmit: 'yyyy/mm/dd',
    });

    // Dropdown Init
    $('.dropdown-toggle').dropdown();

    // Remove flash message if there is one after 8 seconds
    if ($('.flashMessage').length == 1) {
        $('.flashMessage').animate({top: '+=' + ($('nav').height() + 150) + 'px'});
        setTimeout(function () {
            $('.flashMessage').animate({top: '-150px'}, function () {
                // $('.flashMessage').remove();
            });
        }, 8000);
    }

    // Call function for file preview when uploading
    // new images to properties page
    $("#upload_photo_input").change(function () {
        filePreview(this);
        fileLoaded(this);
    });

    // Check to see if the value of the call type has been changed
    $("#call_type").change(function () {
        var call_type = $(this).val();

        // Remove any of the options showing
        $('.call_count_select').each(function (index, call_count_select) {
            $(call_count_select).slideUp();
        });

        if (call_type === 'standard_call') {
            $('.standard_call_count_select').slideDown();
        } else if (call_type === 'no_holds_call') {
            $('.no_holds_call_count_select').slideDown();
        } else {
            $('.sound_room_call_count_select').slideDown();
        }
    });
});

//Check to see if the file has been loaded
//If so then remove modal
function fileLoaded(input) {
    var imagePreview = setInterval(function () {
        if ($('.imgPreview').length == input.files.length) {
            $('.loadingSpinner, .modal-backdrop')
                .css({'display': 'none'})
                .removeClass('show')
                .addClass('hide');
            $('body')
                .removeClass('modal-open');

            clearInterval(imagePreview);
        }
    }, 1000);
    var avatarPreview = setInterval(function () {
        if ($('.avatarPreview').length == input.files.length) {
            $('.loadingSpinner, .modal-backdrop')
                .css({'display': 'none'})
                .removeClass('show')
                .addClass('hide');
            $('body')
                .removeClass('modal-open');

            clearInterval(avatarPreview);
        }
    }, 1000);
}

// Preview images before being uploaded on images page and new location page
function filePreview(input) {
    $('.loadingSpinner').find('p').text('Adding Image/Video').ready(function () {
        $('.loadingSpinner').modal('show');
    });

    if (input.files && input.files[0]) {
        if (input.files.length > 1) {
            var imgCount = input.files.length;
            $('.imgPreview').parent().remove();

            for (x = 0; x < imgCount; x++) {
                if ($('.uploadsView').length < 1) {
                    if (input.files[x].type.indexOf('video') != -1) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $('<div class="d-block mx-auto mb-2 d-sm-inline-block" style="height:250px; width:250px; position:relative"><video controls class="imgPreview" style="max-height:250px;"><source src="' + e.target.result + '" /></video></div>').appendTo($('.currentCarImageDiv').find('.row'));
                        }
                        reader.readAsDataURL(input.files[x]);
                    } else {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $('<div class="col-4 my-1"><img class="imgPreview img-thumbnail h-100 w-100" src="' + e.target.result + '"/></div>').appendTo($('.currentCarImageDiv').find('.row'));
                        }
                        reader.readAsDataURL(input.files[x]);
                    }
                } else {
                    if (input.files[x].type.indexOf('video') != -1) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $('<div class="col-6 my-1"><video controls class="imgPreview" style="max-height:250px;"><source src="' + e.target.result + '" /></video></div>').appendTo('.uploadsView');
                        }
                        reader.readAsDataURL(input.files[x]);
                    } else {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $('<div class="col-4 my-1"><img class="imgPreview img-thumbnail" src="' + e.target.result + '" width="450" height="300"/></div>').appendTo($('.uploadsView').find('.row'));
                        }
                        reader.readAsDataURL(input.files[x]);
                    }
                }
            }
        } else {
            var reader = new FileReader();
            $('.imgPreview').parent().remove();

            if ($('.uploadsView').length < 1) {
                if (input.files[0].type.indexOf('video') != -1) {
                    reader.onload = function (e) {
                        $('<div class="d-block mx-auto mb-2 d-sm-inline-block" style="height:250px; width:250px; position:relative"><video controls class="imgPreview" style="max-height:250px;"><source src="' + e.target.result + '" /></video></div>').insertAfter('.currentCarImageDiv:last-of-type');
                    }
                    reader.readAsDataURL(input.files[0]);
                } else {
                    reader.onload = function (e) {
                        $('<div class="col-4 my-1"><img class="imgPreview img-thumbnail h-100 w-100" src="' + e.target.result + '"/></div>').appendTo($('.currentCarImageDiv').find('.row'));
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            } else {
                if (input.files[0].type.indexOf('video') != -1) {
                    reader.onload = function (e) {
                        $('<div class="col-6 my-1"><video controls class="imgPreview" style="max-height:250px;"><source src="' + e.target.result + '" /></video></div>').appendTo('.uploadsView');
                    }
                    reader.readAsDataURL(input.files[0]);
                } else {
                    reader.onload = function (e) {
                        $('<div class="col-4 my-1"><img class="imgPreview img-thumbnail" src="' + e.target.result + '" width="450" height="300"/></div>').appendTo($('.uploadsView').find('.row'));
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        }
    }
}

// Send PayPal Information along with form to
// store transaction
function payPalComplete(data) {
    $.ajax({
        method: "POST",
        url: "/paypal_donation",
        data: $.param(data) + "&" + $('form#paypal_donation').serialize()
    })
        .done(function (data) {
            toastr.success(data, "", {showMethod: 'slideDown'});
        })
        .fail(function (data) {
            toastr.success(data, "", {showMethod: 'slideDown'});
        })
}

function updateAmount() {
    return $("#total_price").val();
}

// Initialize tooltip
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});

// MDB Lightbox Init
$(function () {
    $("#mdb-lightbox-ui").load("/addons/mdb-lightbox-ui.html");
});

// object-fit polyfill run
// objectFitImages();

/* init Jarallax */
jarallax(document.querySelectorAll('.jarallax'));

jarallax(document.querySelectorAll('.jarallax-keep-img'), {
    keepImg: true,
});
