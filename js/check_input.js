
$( document ).ready(function() {



    $('input[name="status"]').click(function () {
        $('#error-status').hide();
    });
    $('input[name="gender"]').click(function () {
        $('#error-gender').hide();
    });

    $('input[name="email"]').blur(function () {

        var text = $(this).val();
        if(text == 0 ) {
            $('#error-email').html('Chưa nhập email');
            $('#btn-request').prop('disabled' , true);
        }


        else {
            var url = '../libs/ajax.php?text=';
            $.get(url + text, function (data) {
                if (data == 0) {
                    $('#error-email').html('');
                    $('#btn-request').prop('disabled', false);
                } else {
                    $('#error-email').html('Email đã tồn tại');
                    $('#btn-request').prop('disabled', true);
                }

            });
        }
    });
});

