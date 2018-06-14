$('#CallFind').on('submit', function () {
    var fData = $(this),
        contents = fData.serialize();
    
    $.ajax({
        url: '/scripts/PHP/service.php',
        dataType: 'json',
        type: 'post',
        data: contents,
        success: function (data) {
            console.log(data);
        }
    });
    return false;
});