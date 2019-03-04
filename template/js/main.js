$(document).ready(function () {
    /*
     * проверка пароля
     */
    function passwordСheck() {
        if ($("#pass").val() == $("#pass-confirm").val() && $("#pass-confirm").val() !== '') {
            fieldColor(1, '#pass');
            fieldColor(1, '#pass-confirm');
        } else {
            fieldColor(0, '#pass');
            fieldColor(0, '#pass-confirm');
        }
    }
    /*
     * Функция которая меняет цвет фона
     */
    function fieldColor(color, id) {
        if (color == 1) {
            $(id).css('background-color', '#90EE90');
        } else {
            $(id).css('background-color', '#FFB6C1');
        }
    }

    $("#id-doc").mask("99999");
    $("#id-doc").change(function () {
        if ($("#id-doc").val().length < 5 || $("#id-doc").val().length > 5) {
            fieldColor(0, '#id-doc');
        } else {
            fieldColor(1, '#id-doc');
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
        $("#pass").change(passwordСheck());
        $("#pass-confirm").change(passwordСheck());
    });

    



    $("#phone").mask("+38(999)999-99-99");
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






