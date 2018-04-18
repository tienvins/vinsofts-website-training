
$( document ).ready(function() {
    $('input[name="name"]').blur(function () {
        var name = $(this).val();
        if(name == 0) {
            $('#error-name').html('Chưa nhập name');
        }
    });
    $('input[name="phone_number"]').blur(function () {
        var phone_number = $(this).val();
        if( phone_number == 0) {
            $('#error-phone').html('Chưa nhập phone_number');
        }
        else  {
            var url = '../libs/ajax.php2?text=';
            $.get(url + text, function (data) {
                if (data == 0) {
                    $('#error-email').html('');
                } else {
                    $('#error-email').html('Email đã tồn tại');
                }

            });
        }
    });
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
        }
        else {
            var url = '../libs/ajax.php?text=';
            $.get(url + text, function (data) {
                if (data == 0) {
                    $('#error-email').html('');
                } else {
                    $('#error-email').html('Email đã tồn tại');
                }

            });
        }
    });
});

