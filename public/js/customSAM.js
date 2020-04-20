$(document).ready(function () {
    var counter = 20;
    $("#nature").get(0).play();
    $("#submit").attr("disabled", "disabled");
    $("#submit").text("Next (" + counter + ")");
    var interval = setInterval(function () {
        counter--;
        if (counter == 0) {
            $("#submit").text("Next");
            clearInterval(interval);
        } else {
            $("#submit").text("Next (" + counter + ")");
        }
    }, 1000);
    setTimeout(function () {
        $("#nature").get(0).pause();
        $("#submit").removeAttr("disabled");
    }, 20000);
});
