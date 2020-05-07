$(document).ready(function () {
    let windowY = $(window).height() / 2;
    let windowX = $(window).width() / 2;
    window.addEventListener("mousedown", function () {
        let mouseClickedInt = $("#mouseClicked").val();
        mouseClickedInt++;
        $("#mouseClicked").val(mouseClickedInt);
    });

    window.addEventListener("mousewheel", function () {
        let mouseWheelCounter = $("#mouseWheelCounter").val();
        mouseWheelCounter++;

        $("#mouseWheelCounter").val(mouseWheelCounter);
    });

    setInterval(function () {
        let time = $("#timeTaken").val();
        time++;

        $("#timeTaken").val(time);
    }, 1000);

    //quadrantsCounter=[topLeft, topRight, bottomLeft, bottomRight]
    window.addEventListener("mousemove", function (event) {
        let quadrantsCounter = JSON.parse($("#quadrantsCounter").val());
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

    var idleState = false;
    var idleTimer = null;
    var incrementTimer = null;

    $("*").bind(
        "mousemove click mouseup mousedown keydown keypress keyup submit change mouseenter scroll resize dblclick",
        function (event) {
            let quadrantsTimer = JSON.parse($("#quadrantsTimer").val());
            clearTimeout(idleTimer);
            clearInterval(incrementTimer);
            if (idleState == true) {
            }
            idleState = false;
            idleTimer = setTimeout(function () {
                let currentX = event.pageX;
                let currentY = event.pageY - $(window).scrollTop();
                let quad = 0;
                if (currentX > windowX) {
                    if (currentY > windowY) {
                        quad = 3;
                    } else {
                        quad = 1;
                    }
                } else {
                    if (currentY < windowY) {
                        quad = 0;
                    } else {
                        quad = 2;
                    }
                }
                incrementTimer = setInterval(function () {
                    quadrantsTimer[quad] += 1;
                    $("#quadrantsTimer").val(JSON.stringify(quadrantsTimer));
                }, 1000);

                idleState = true;
            }, 2000);
        }
    );

});
