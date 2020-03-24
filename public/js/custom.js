$(document).ready(function() {
    window.addEventListener('mousedown', function() {
        let mouseClickedInt = $("#mouseClicked").val();
        mouseClickedInt++;

        $('#mouseClicked').val(mouseClickedInt);
    })

    window.addEventListener('mousewheel',function(){
        let mouseWheelCounter=$('#mouseWheelCounter').val();
        mouseWheelCounter++;

        $('#mouseWheelCounter').val(mouseWheelCounter);
    })

    setInterval(function(){
        let counter=$('#timeTaken').val();
        counter++;

        $('#timeTaken').val(counter);
    },1000)

})
