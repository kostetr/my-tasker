$(document).ready(function () {
    var array = {
        'id_doc': 'false',
        'login': 'false',
        'pass': 'false',
        'surname': 'false',
        'name': 'false',
        'patronymic': 'false',
        'phone': 'false',
        'secret_pass': 'false',
        'gender_id': 'false',
        'post_id': 'false',
    };
    /*
     * проверка пароля
     */
    function passwordСheck() {

    }
    /*
     * Функция которая меняет цвет фона
     */
    function fieldColor(erorColor, id) {
        if (erorColor == 1) {
            $(id).css('background-color', '#90EE90');
        } else {
            $(id).css('background-color', '#FFB6C1');
        }
    }

    $("#id-doc").mask("99999");
    $("#id-doc").change(function () {
        if ($("#id-doc").val().length == 5) {
            fieldColor(1, '#id-doc');
        } else {
            fieldColor(0, '#id-doc');
        }
    });



    $("#login").change(function () {
        if ($("#login").val().length < 5) {
            fieldColor(0, '#login');
        } else {
            fieldColor(1, '#login');
        }
    });

    $("#pass").change(function () {
        if ($("#pass").val() != $("#pass-confirm").val() || $("#pass").val().length == 0) {
            fieldColor(0, '#pass');
            fieldColor(0, '#pass-confirm');
        } else {
            fieldColor(1, '#pass');
            fieldColor(1, '#pass-confirm');
        }

    });
    $("#pass-confirm").change(function () {
        if ($("#pass").val() != $("#pass-confirm").val() || $("#pass-confirm").val().length == 0) {
            fieldColor(0, '#pass');
            fieldColor(0, '#pass-confirm');
        } else {
            fieldColor(1, '#pass');
            fieldColor(1, '#pass-confirm');
        }
    });

    $("#surname").change(function () {
        if ($("#surname").val().length < 5) {
            fieldColor(0, '#surname');
        } else {
            fieldColor(1, '#surname');
        }
    });
    $("#name").change(function () {
        if ($("#name").val().length < 5) {
            fieldColor(0, '#name');
        } else {
            fieldColor(1, '#name');
        }
    });
    $("#patronymic").change(function () {
        if ($("#patronymic").val().length < 5) {
            fieldColor(0, '#patronymic');
        } else {
            fieldColor(1, '#patronymic');
        }
    });


    $("#phone").mask("+38(999)999-99-99");
    $("#phone").change(function () {
        if ($("#phone").val().length == 17) {
            fieldColor(1, '#phone');
        } else {
            fieldColor(0, '#phone');
        }
    });

    $("#secret_pass").change(function () {
        if ($("#secret_pass").val().length < 50) {
            fieldColor(0, '#secret_pass');
        } else {
            fieldColor(1, '#secret_pass');
        }
    });


    $("#gender_id").change(function () {
        if ($("#gender_id").val() > 0) {
            fieldColor(1, '#gender_id');
        } else {
            fieldColor(0, '#gender_id');
        }
    });

    $("#post_id").change(function () {
        if ($("#post_id").val() > 0) {
            fieldColor(1, '#post_id');
        } else {
            fieldColor(0, '#post_id');
        }
    });

    $("#birthday").mask("99-99-9999", {placeholder: "дд-мм-гггг"});
    $("#birthday").change(function () {
        var birthday = $("#birthday").val().split('-');
        if (birthday[0] > 31 || birthday[1] > 12 || birthday[2] < 1950 || $("#birthday").val() == '') {
            fieldColor(0, '#birthday');
        } else {
            fieldColor(1, '#birthday');
        }

    });



});






