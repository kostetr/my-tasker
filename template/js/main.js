$(document).ready(function () {

    $("#id-doc").mask("99999");
    $("#id-doc").change(function () {
        if ($("#id-doc").val().length<5 || $("#id-doc").val().length>5){
            $("#id-doc").css('background-color', '#FFB6C1');
        }else{
            $("#id-doc").css('background-color', '#90EE90');
        }
    });
    

    $("#phone").mask("+38(999)999-99-99");
    $("#birthday").mask("99-99-9999", {placeholder: "дд-мм-гггг"});
    $("#birthday").change(function () {
        var birthday = $("#birthday").val().split('-');
        if (birthday[0] > 31 || birthday[1] > 12 || birthday[2] < 1950) {
            $("#birthday").css('background-color', '#FFB6C1');
        } else {
            $("#birthday").css('background-color', '#90EE90');
        }

    });


});






