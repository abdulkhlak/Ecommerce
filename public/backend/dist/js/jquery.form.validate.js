$(document).ready(function () {

    $('#myForm').validate({
        rules: {
            name: {
                required: true,
                name: true,
            },
            email: {
                required: true,
                email: true,
            },
            mobile: {
                required: true,
                mobile: true,
            },
            userType: {
                required: true,
                userType: true,
            },
            address: {
                required: true,
                address: true,
            },
            password: {
                required: true,
                minlength: 6
            },
            confirm_password: {
                required: true,
                equalTo: '#password'
            },
            terms: {
                required: true
            },
        },
        messages: {
            name: {
                required: "Please enter your name",
                name: "Please enter your name"
            },
            email: {
                required: "Please enter a email address",
                email: "Please enter a vaild email address"
            },
            mobile: {
                required: "Please enter your name",
                mobile: "Please enter your name"
            },
            address: {
                required: "Please enter your name",
                address: "Please enter your name"
            },
            userType: {
                required: "Please select userType",
                userType: "Please select userType"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            confirm_password: {
                required: "Please enter a confirm password",
                equalTo: "Confirm password does not match"
            },
            terms: "Please accept our terms"
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});

//  PROFILE PASSWORD CHANGE VALIDATION

$(document).ready(function () {

    $('#passwordForm').validate({
        rules: {
            current_password: {
                required: true,
                current_password: true,
            },
            new_password: {
                required: true,
                minlength: 6
            },
            confirm_password: {
                required: true,
                equalTo: '#new_password'
            },
            terms: {
                required: true
            },
        },
        messages: {
            current_password: {
                required: "Please enter your current password",
                current_password: "Please enter your current passowrd"
            },
            new_password: {
                required: "Please enter your new password",
                minlength: "Your password must be at least 5 characters long"
            },
            confirm_password: {
                required: "Please enter your confirm password",
                equalTo: "Confirm password does not match"
            },
            terms: "Please accept our terms"
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});


//  BRAND VALIDATION

$(document).ready(function () {

    $('#brandform').validate({
        rules: {
            brand_name: {
                required: true,
                brand_name: true,
            },
        },
        messages: {
            brand_name: {
                required: " Your brand name is required",
                brand_name: "Your brand name is required"
            },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});
//  BRAND VALIDATION

$(document).ready(function () {

    $('#categoryForm').validate({
        rules: {
            category_name: {
                required: true,
                category_name: true,
            },
        },
        messages: {
            category_name: {
                required: " Your category name is required",
                category_name: "Your category name is required"
            },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});