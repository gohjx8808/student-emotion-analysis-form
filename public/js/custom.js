$(document).ready(function() {
    window.addEventListener("mousedown", function() {
        let mouseClickedInt = $("#mouseClicked").val();
        mouseClickedInt++;
        $("#mouseClicked").val(mouseClickedInt);
    });

    window.addEventListener("mousewheel", function() {
        let mouseWheelCounter = $("#mouseWheelCounter").val();
        mouseWheelCounter++;

        $("#mouseWheelCounter").val(mouseWheelCounter);
    });

    setInterval(function() {
        let counter = $("#timeTaken").val();
        counter++;

        $("#timeTaken").val(counter);
    }, 1000);

    //quadrantsCounter=[topLeft, topRight, bottomLeft, bottomRight]
    window.addEventListener("mousemove", function(event) {
        let quadrantsCounter = JSON.parse($("#quadrantsCounter").val());
        let windowY = $(window).height() / 2;
        let windowX = $(window).width() / 2;
        let currentX = event.pageX;
        let currentY = event.pageY - $(window).scrollTop();
        if (currentX > windowX) {
            if (currentY > windowY) {
                quadrantsCounter[3] += 1;
            } else {
                quadrantsCounter[1] += 1;
            }
        } else {
            if (currentY < windowY) {
                quadrantsCounter[0] += 1;
            } else {
                quadrantsCounter[2] += 1;
            }
        }
        $("#quadrantsCounter").val(JSON.stringify(quadrantsCounter));
    });
});
