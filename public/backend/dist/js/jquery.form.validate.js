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
//  CATEGORY VALIDATION

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

//  SUB CATEGORY VALIDATION

$(document).ready(function () {

    $('#SubCategoryForm').validate({
        rules: {
            category: {
                required: true,
                category: true,
            },
            subcat_name: {
                required: true,
                subcat_name: true,
            },
            status: {
                required: true,
                status: true,
            },
        },
        messages: {
            category: {
                required: " Please select your parent category",
                category: "Please select your parent category"
            },
            subcat_name: {
                required: " Your sub category name is required",
                subcat_name: "Your sub category name is required"
            },
            status: {
                required: " status is required",
                status: "status is required"
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


//  SUB CATEGORY VALIDATION

// Only allow number keys + number pad

$('input[name="buying_price"]').keypress
(
    function(event)
    {
        if (event.keyCode == 46 || event.keyCode == 8)
        {
            //do nothing
        }
        else
        {
            if (event.keyCode < 48 || event.keyCode > 57 )
            {
                event.preventDefault();
            }
        }
    }
);
$(document).ready(function () {

    $('#productForm').validate({
        rules: {
            cat_id: {
                required: true,
                category: true,
            },
            sub_cat_id: {
                required: true,
                subcat_name: true,
            },
            brand_id: {
                required: true,
                subcat_name: true,
            },
            product_name: {
                required: true,
                subcat_name: true,
            },
            color: {
                required: true,
                subcat_name: true,
            },
            buying_price: {
                required: true,
                subcat_name: true,
            },
            selling_price: {
                required: true,
                subcat_name: true,
            },
            quantity: {
                required: true,
                subcat_name: true,
            },
            image: {
                required: true,
                subcat_name: true,
            },
            description: {
                required: true,
                subcat_name: true,
            },
            status: {
                required: true,
                status: true,
            },
        },
        messages: {
            cat_id: {
                required: " Please select your parent category",
                cat_id: "Please select your parent category"
            },
            sub_cat_id: {
                required: " Please select your sub category",
                subcat_name: "Please select your sub category"
            },
            brand_id: {
                required: " Please select your brand",
                subcat_name: " Please select your brand"
            },
            product_name: {
                required: " Your product name is required",
                subcat_name: " Your product name is required"
            },
            color: {
                required: " product color is required",
                color: " product color is required "
            },
            buying_price: {
                required: " buying price  is required",
                buying_price: " buying price  is required "
            },
            selling_price: {
                required: " buing price  is required",
                selling_price: " buing price  is required "
            },
            quantity: {
                required: " quantity is required",
                quantity: "quantity is required "
            },
            image: {
                required: " product image is required",
                image: "product image is required "
            },
            description: {
                required: " description field is required",
                description: "description field is required "
            },
            status: {
                required: " status is required",
                status: "status is required"
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