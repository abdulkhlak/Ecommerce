

$('body').on('change','#userStatus',function () {
    var id = $(this).attr('data-id');
    if (this.checked)
    {
        var status= 1;
    }else{
        var status =0;
    }
    $('.loader__bg').show();
    $.ajax({
        url:'userStatus/'+id+'/'+status,
        method:'get',
        success: function (result) {
            $('.loader__bg').hide();
        }
});
});
// BRANDS
$('body').on('change','#brandStatus',function () {
    var id = $(this).attr('data-id');
    if (this.checked)
    {
        var status= 1;
    }else{
        var status =0;
    }
    $('.loader__bg').show();
    $.ajax({
        url:'brandStatus/'+id+'/'+status,
        method:'get',
        success: function (result) {
            $('.loader__bg').hide();
        }
});
});
// CATEGORIES
$('body').on('change','#categoryStatus',function () {
    var id = $(this).attr('data-id');
    if (this.checked)
    {
        var status= 1;
    }else{
        var status =0;
    }
    $('.loader__bg').show();
    $.ajax({
        url:'categoryStatus/'+id+'/'+status,
        method:'get',
        success: function (result) {
            $('.loader__bg').hide();
        }
});
});
// SUB  CATEGORIES
$('body').on('change','#subCategoryStatus',function () {
    var id = $(this).attr('data-id');
    if (this.checked)
    {
        var status= 1;
    }else{
        var status =0;
    }
    $('.loader__bg').show();
    $.ajax({
        url:'subCategoryStatus/'+id+'/'+status,
        method:'get',
        success: function (result) {
            $('.loader__bg').hide();
        }
});
});
// SLIDER STATUS
$('body').on('change','#sliderStatus',function () {
    var id = $(this).attr('data-id');
    if (this.checked)
    {
        var status= 1;
    }else{
        var status =0;
    }
    $('.loader__bg').show();
    $.ajax({
        url:'sliderStatus/'+id+'/'+status,
        method:'get',
        success: function (result) {
            $('.loader__bg').hide();
        }
});
});
// PRODUCT STATUS
$('body').on('change','#productStatus',function () {
    var id = $(this).attr('data-id');
    if (this.checked)
    {
        var status= 1;
    }else{
        var status =0;
    }
    $('.loader__bg').show();
    $.ajax({
        url:'productStatus/'+id+'/'+status,
        method:'get',
        success: function (result) {
            $('.loader__bg').hide();
        }
});
});
// WARRAMTY
$('body').on('change','input[name="warranty"]',function () {
    var n = $(this).val();


if (n==1)
{
    $('.warranty-box').show();

}else {
    $('.warranty-box').hide();
}
});

//  CAT ID WISE  ---- SUB CATEGORY
const site_url = "http://127.0.0.1:8000/products/";
$('body').on('change','#cat_id',function () {
    var id = $(this).val();
  if (id)
  {


    $('.loader__bg').show();
    $.ajax({
        url: site_url+"find-categories/"+id,
        method:'get',
        success: function (result) {
            $('#sub_cat_id').html(result);
            $('.loader__bg').hide();
        }
    });
  }
});

//  CAT ID WISE  ---- SUB CATEGORY

$('body').on('change','.buying_price',function () {
    var price = $(this).val();
    var id = $(this).attr('data-id');

    $('.loader__bg').show();
    $.ajax({
        url: site_url+"upByingPrice/"+id+'/'+price,
        method:'get',
        success: function (result) {
            $('.loader__bg').hide();
        }
    });

});






















//I added event handler for the file upload control to access the files properties.
document.addEventListener("DOMContentLoaded", init, false);

//To save an array of attachments
var AttachmentArray = [];

//counter for attachment array
var arrCounter = 0;

//to make sure the error message for number of files will be shown only one time.
var filesCounterAlertStatus = false;

//un ordered list to keep attachments thumbnails
var ul = document.createElement("ul");
ul.className = "thumb-Images";
ul.id = "imgList";

function init() {
    //add javascript handlers for the file upload event
    document
        .querySelector("#files")
        .addEventListener("change", handleFileSelect, false);
}

//the handler for file upload event
function handleFileSelect(e) {
    //to make sure the user select file/files
    if (!e.target.files) return;

    //To obtaine a File reference
    var files = e.target.files;

    // Loop through the FileList and then to render image files as thumbnails.
    for (var i = 0, f; (f = files[i]); i++) {
        //instantiate a FileReader object to read its contents into memory
        var fileReader = new FileReader();

        // Closure to capture the file information and apply validation.
        fileReader.onload = (function(readerEvt) {
            return function(e) {
                //Apply the validation rules for attachments upload
                ApplyFileValidationRules(readerEvt);

                //Render attachments thumbnails.
                RenderThumbnail(e, readerEvt);

                //Fill the array of attachment
                FillAttachmentArray(e, readerEvt);
            };
        })(f);

        // Read in the image file as a data URL.
        // readAsDataURL: The result property will contain the file/blob's data encoded as a data URL.
        // More info about Data URI scheme https://en.wikipedia.org/wiki/Data_URI_scheme
        fileReader.readAsDataURL(f);
    }
    document
        .getElementById("files")
        .addEventListener("change", handleFileSelect, false);
}

//To remove attachment once user click on x button
jQuery(function($) {
    $("div").on("click", ".img-wrap .close", function() {
        var id = $(this)
            .closest(".img-wrap")
            .find("img")
            .data("id");

        //to remove the deleted item from array
        var elementPos = AttachmentArray.map(function(x) {
            return x.FileName;
        }).indexOf(id);
        if (elementPos !== -1) {
            AttachmentArray.splice(elementPos, 1);
        }

        //to remove image tag
        $(this)
            .parent()
            .find("img")
            .not()
            .remove();

        //to remove div tag that contain the image
        $(this)
            .parent()
            .find("div")
            .not()
            .remove();

        //to remove div tag that contain caption name
        $(this)
            .parent()
            .parent()
            .find("div")
            .not()
            .remove();

        //to remove li tag
        var lis = document.querySelectorAll("#imgList li");
        for (var i = 0; (li = lis[i]); i++) {
            if (li.innerHTML == "") {
                li.parentNode.removeChild(li);
            }
        }
    });
});

//Apply the validation rules for attachments upload
function ApplyFileValidationRules(readerEvt) {
    //To check file type according to upload conditions
    if (CheckFileType(readerEvt.type) == false) {
        alert(
            "The file (" +
            readerEvt.name +
            ") does not match the upload conditions, You can only upload jpg/png/gif files"
        );
        e.preventDefault();
        return;
    }

    //To check file Size according to upload conditions
    if (CheckFileSize(readerEvt.size) == false) {
        alert(
            "The file (" +
            readerEvt.name +
            ") does not match the upload conditions, The maximum file size for uploads should not exceed 300 KB"
        );
        e.preventDefault();
        return;
    }

    //To check files count according to upload conditions
    if (CheckFilesCount(AttachmentArray) == false) {
        if (!filesCounterAlertStatus) {
            filesCounterAlertStatus = true;
            alert(
                "You have added more than 10 files. According to upload conditions you can upload 10 files maximum"
            );
        }
        e.preventDefault();
        return;
    }
}

//To check file type according to upload conditions
function CheckFileType(fileType) {
    if (fileType == "image/jpeg") {
        return true;
    } else if (fileType == "image/png") {
        return true;
    } else if (fileType == "image/gif") {
        return true;
    } else {
        return false;
    }
    return true;
}

//To check file Size according to upload conditions
function CheckFileSize(fileSize) {
    if (fileSize < 300000) {
        return true;
    } else {
        return false;
    }
    return true;
}

//To check files count according to upload conditions
function CheckFilesCount(AttachmentArray) {
    //Since AttachmentArray.length return the next available index in the array,
    //I have used the loop to get the real length
    var len = 0;
    for (var i = 0; i < AttachmentArray.length; i++) {
        if (AttachmentArray[i] !== undefined) {
            len++;
        }
    }
    //To check the length does not exceed 10 files maximum
    if (len > 9) {
        return false;
    } else {
        return true;
    }
}

//Render attachments thumbnails.
function RenderThumbnail(e, readerEvt) {
    var li = document.createElement("li");
    ul.appendChild(li);
    li.innerHTML = [
        '<div class="img-wrap"> <span class="close">&times;</span>' +
        '<img class="thumb" src="',
        e.target.result,
        '" title="',
        escape(readerEvt.name),
        '" data-id="',
        readerEvt.name,
        '"/>' + "</div>"
    ].join("");

    var div = document.createElement("div");
    div.className = "FileNameCaptionStyle";
    li.appendChild(div);
    div.innerHTML = [readerEvt.name].join("");
    document.getElementById("Filelist").insertBefore(ul, null);
}

//Fill the array of attachment
function FillAttachmentArray(e, readerEvt) {
    AttachmentArray[arrCounter] = {
        AttachmentType: 1,
        ObjectType: 1,
        FileName: readerEvt.name,
        FileDescription: "Attachment",
        NoteText: "",
        MimeType: readerEvt.type,
        Content: e.target.result.split("base64,")[1],
        FileSizeInBytes: readerEvt.size
    };
    arrCounter = arrCounter + 1;
}


