$(document).ready(function() {
    window.addEventListener('mousedown', function() {
        let mouseClickedInt = $("#mouseClicked").val();
        mouseClickedInt++;

        $('#mouseClicked').val(mouseClickedInt);
    })

    setInterval(function(){
        let counter=$('#timeTaken').val();
        counter++;

        $('#timeTaken').val(counter);
    },1000)

})
