$(document).ready(function () {


});

$(onClick);

function onClick(type) {

    //$('#myButton').bind('click', sayHello);
    $('#plus').bind('click', setProc(type));
}



//function sayHello() {
//    document.write("Всем - привет!");
//}

function setProc(type) {
    $("#last").val(type);
    $(".action_button").each(function () {
        $(this).css('background-color', 'green');
    });
    $("#" + type).css('background-color', 'red');

}



function getResult() {

    var action = $("#last").val();
    var a = $("#n_1").val() * 1;
    var b = $("#n_2").val() * 1;
    $("#errors").html('');

    if (action == 0) {

        $("#errors").html('выбери действие');
        return false;
    }

    if (a < 1) {

        $("#errors").html("input a");
        return false;
    }

    if (b < 1) {

        $("#errors").html('input b');
        return false;
    }

    if (action == "plus") {
        var c = a + b;
        $("#result").val(c);
    }
    if (action == "minus") {
        var c = a - b;
        $("#result").val(c);
    }
    if (action == "multiply") {
        var c = a * b;
        $("#result").val(c);
    }
}

