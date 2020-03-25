<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
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
    <form class="form-background" action="Q2/save" method="POST">
        {{ csrf_field() }}
        <h1 class="white-label">Student Emotion Analysis</h1>
        <br />
        <h4 class="white-label">Part 2: Questions</h4>
        <p class="white-label">
            Please answer the questions as best as you can. Good luck!
        </p>
        <hr style="background-color:white" />
        <p class="white-label"><u>Question 2: Short Coding Problem</u></p>
        <p class="white-label">
            Please write you answer below
        </p>
        <img src="https://firebasestorage.googleapis.com/v0/b/student-emotion-analysis-d61dc.appspot.com/o/examples.png?alt=media&token=54d2c644-3dfa-4c77-854b-37f55396a1bf"
            class="img-fluid" alt="Responsive image" />
        <div class="form-group">
            <label for="age" class="white-label">Please modify the codes above to produce the correct output.</label>
            <textarea class="form-control" id="Q2" name="Q2" rows="10" required></textarea>
        </div>
        <input type="hidden" value="0" id="mouseClicked" name="mouseClicked" />
        <input type="hidden" value="0" id="timeTaken" name="timeTaken"/>
        <input type="hidden" value="0" id="mouseWheelCounter" name="mouseWheelCounter"/>
        <input type="hidden" value="[0,0,0,0]" id="quadrantsCounter" name="quadrantsCounter"/>
        <div style="text-align: center;">
            <button type="submit" class="btn btn-primary" style="width:15%" id='submit'>
                Next
            </button>
        </div>
    </form>
    <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>
</body>
</html>
