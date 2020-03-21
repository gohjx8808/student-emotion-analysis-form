<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous"
        />
        <script
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"
        ></script>
        <style>
            .form-background {
                padding: 50px;
                background-color: midnightblue;
                width: 85%;
                margin: auto;
                margin-top: 25px;
                margin-bottom: 25px;
                position: relative;
                border-radius: 10px;
            }
            .background {
                background-image: url("/images/wooden_bg.jfif");
                background-size: cover;
            }
            .white-label {
                color: white;
            }
            .radio-center {
                border-bottom-width: 0;
                border-radius: 0px;
            }
        </style>
    </head>
    <body class="background">
        <form
            class="form-background"
            action="Q1/save"
            method="POST"
        >
            {{ csrf_field() }}
            <h1 class="white-label">Student Emotion Analysis</h1>
            <br />
            <h4 class="white-label">Part 2: Questions</h4>
            <p class="white-label">
                Please answer the questions as best as you can. Good luck!
            </p>
            <hr style="background-color:white" />
            <p class="white-label"><u>Question 1: MCQ</u></p>
            <p class="white-label">
                Please choose the best match answer according to the information
                below.
            </p>
            <img
                src="https://firebasestorage.googleapis.com/v0/b/student-emotion-analysis-d61dc.appspot.com/o/examples.png?alt=media&token=54d2c644-3dfa-4c77-854b-37f55396a1bf"
                class="img-fluid"
                alt="Responsive image"
            />
            <div class="form-group" style="margin-top: 10px">
                <label for="gender" class="white-label"
                    >Which answer is correct?</label
                >
                <div
                    class="form-control"
                    style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;"
                >
                    <label class="form-check-label" for="a">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="a"
                            name="Q1"
                            value="a"
                            required
                        />
                        A
                    </label>
                </div>
                <div class="form-control radio-center">
                    <label class="form-check-label" for="b">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="b"
                            name="Q1"
                            value="b"
                        />
                        B
                    </label>
                </div>
                <div class="form-control radio-center">
                    <label class="form-check-label" for="c">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="c"
                            name="Q1"
                            value="c"
                        />
                        C
                    </label>
                </div>
                <div
                    class="form-control"
                    style="border-top-width: 0;border-radius: 0px 0px 10px 10px;"
                >
                    <label class="form-check-label" for="d">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="d"
                            name="Q1"
                            value="d"
                        />
                        D
                    </label>
                </div>
            </div>
            <div style="text-align: center;">
                <button type="submit" class="btn btn-primary" style="width:15%" id='submit'>
                    Next
                </button>
            </div>
            <input type="hidden" value="0" id="mouseClicked" name="mouseClicked"/>
        </form>
        <script>
            $(document).ready(function() {
                window.addEventListener('mousedown',function(){
                    let mouseClickedInt=$("#mouseClicked").val();
                    mouseClickedInt++;

                    $('#mouseClicked').val(mouseClickedInt);
                })
            })
        </script>
    </body>
</html>
