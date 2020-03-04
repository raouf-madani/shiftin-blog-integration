$('#meta-checkbox').change(function () {
        if ($(this).attr("checked")) {
            $('#meta-checkbox2').attr('disabled', true);
        } else {
            $('#meta-checkbox2').attr('disabled', false);
        }
    });
    
$('#meta-checkbox2').change(function () {
        if ($(this).attr("checked")) {
            $('#meta-checkbox').attr('disabled', true);
        } else {
            $('#meta-checkbox').attr('disabled', false);
        }
    });    