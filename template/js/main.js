//$(document).ready(function () {
//    var array = {
//        'id-doc': false,
//        'login': false,
//        'pass': false,
//        'pass-confirm': false,
//        'surname': false,
//        'name': false,
//        'patronymic': false,
//        'birthday': false,
//        'phone': false,
//        'secret_pass': false,
//        'gender_id': false,
//        'post_id': false
//    };




    $("#registerForm").validate({
        rules: {
            login: {digits: true, required: true, minleght:4}
        },
        tooltip_options: {
            login: {placement: 'left'}
        },
        messages:{
            login:{
                required:'Поле Login обязательно для заполнения',
                minleght:jQuery.format('Длина Login должна быть не меньше {0}-х символов')
            }
        }
    });
//
//    /*
//     * проверка массива. если 12шт. = true то удаляет атребут disabled у кнопки. Если  false то добавляет.
//     */
//    function arrayСheck() {
//        var result = 0;
//        for (var key in array) {
//            if (array[key]) {
//                result++;
//            }
//        }
//        if (result == 12) {
//            $('#submit').removeAttr('disabled');
//        } else {
//            $('#submit').attr('disabled', 'disabled');
//        }
//    }
//    /*
//     * проверка пароля
//     */
//    function passwordСheck() {
//        if ($("#pass").val() != $("#pass-confirm").val() || $("#pass").val().length == 0 || $("#pass-confirm").val().length == 0) {
//            fieldColor(0, 'pass');
//            fieldColor(0, 'pass-confirm');
//        } else {
//            fieldColor(1, 'pass');
//            fieldColor(1, 'pass-confirm');
//        }
//    }
//    /*
//     * Функция которая меняет цвет фона и записывает в массив true если значение валидное.
//     */
//    function fieldColor(erorColor, id) {
//        if (erorColor == 1) {
//            $('#' + id).css('background-color', '#90EE90');
//            array[id] = true;
//            arrayСheck();
//        } else {
//            $('#' + id).css('background-color', '#FFB6C1');
//            array[id] = false;
//            arrayСheck();
//        }
//    }
//
//    $("#id-doc").mask("99999");
//    $("#id-doc").change(function () {
//        if ($("#id-doc").val().length == 5) {
//            fieldColor(1, 'id-doc');
//        } else {
//            fieldColor(0, 'id-doc');
//        }
//    });
//    $("#login").change(function () {
//
//        if ($("#login").val().length < 5) {
//            fieldColor(0, 'login');
//        } else {
//            fieldColor(1, 'login');
//            for (var key in logins) {
//                if ($("#login").val() == logins[key]) {
//                    $("#login").
//                            alert("Такой логинсуществует");
//                    fieldColor(0, 'login');
//                }
//            }
//        }
//    });
//    $("#pass").change(function () {
//        passwordСheck();
//    });
//    $("#pass-confirm").change(function () {
//        passwordСheck();
//    });
//    $("#surname").change(function () {
//        if ($("#surname").val().length < 5) {
//            fieldColor(0, 'surname');
//        } else {
//            fieldColor(1, 'surname');
//        }
//    });
//    $("#name").change(function () {
//        if ($("#name").val().length < 5) {
//            fieldColor(0, 'name');
//        } else {
//            fieldColor(1, 'name');
//        }
//    });
//    $("#patronymic").change(function () {
//        if ($("#patronymic").val().length < 5) {
//            fieldColor(0, 'patronymic');
//        } else {
//            fieldColor(1, 'patronymic');
//        }
//    });
//    $("#birthday").mask("99-99-9999", {placeholder: "дд-мм-гггг"});
//    $("#birthday").change(function () {
//        var birthday = $("#birthday").val().split('-');
//        if (birthday[0] > 31 || birthday[1] > 12 || birthday[2] < 1950 || $("#birthday").val() == '') {
//            fieldColor(0, 'birthday');
//        } else {
//            fieldColor(1, 'birthday');
//        }
//    });
//    $("#phone").mask("+38(999)999-99-99");
//    $("#phone").change(function () {
//        if ($("#phone").val().length == 17) {
//            fieldColor(1, 'phone');
//        } else {
//            fieldColor(0, 'phone');
//        }
//    });
//    $("#secret_pass").change(function () {
//        if ($("#secret_pass").val().length < 50) {
//            fieldColor(0, 'secret_pass');
//        } else {
//            fieldColor(1, 'secret_pass');
//        }
//    });
//    $("#gender_id").change(function () {
//        if ($("#gender_id").val() > 0) {
//            fieldColor(1, 'gender_id');
//        } else {
//            fieldColor(0, 'gender_id');
//        }
//    });
//    $("#post_id").change(function () {
//        if ($("#post_id").val() > 0) {
//            fieldColor(1, 'post_id');
//        } else {
//            fieldColor(0, 'post_id');
//        }
//    });
//});






