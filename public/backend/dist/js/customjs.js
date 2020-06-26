

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

