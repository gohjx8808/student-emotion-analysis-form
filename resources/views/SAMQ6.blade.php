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
            margin-left: 6.5%;
        }

        .rate{
            padding-right:80px;
        }

        .containerSpacing{
            margin-bottom:30px;
        }
    </style>
</head>

<body class="background">
    <form class="form-background" action="SAMQ6/save" method="POST">
        {{ csrf_field() }}
        <h1 class="white-label">Student Emotion Analysis</h1>
        <br />
        <h4 class="white-label">Part 2: Questions</h4>
        <p class="white-label">
            Please answer the questions as best as you can. Good luck!
        </p>
        <hr style="background-color:white" />
        <p class="white-label"><u>Question {{Session::get('counter')}}</u></p>
        <p class="white-label">
            Please choose the options that best matches your emotion after
            trying the questions before.
        </p>
        <div style="text-align: center">
            <label for="SAM1" class="white-label">How do you feel?</label>
            <br />
            <label for="SAM1" class="white-label">
                1 (Very Unpleasant) - 9 (Very Pleasant)
            </label>
            <br />
            <img src="https://firebasestorage.googleapis.com/v0/b/student-emotion-analysis-d61dc.appspot.com/o/SAM1.png?alt=media&token=414e2593-346a-49b7-b3c0-8045ba9dcce7"
                class="img-fluid" alt="SAM1" />
            <br />
            <div class="form-group containerSpacing">
                <div class="form-control" style="width: 620px; margin:auto">
                    <input type="radio" name="SAM1" style="margin-left: 4.3%" value="V1" required />
                    <input type="radio" name="SAM1" class="radio-center" value="V2" />
                    <input type="radio" name="SAM1" class="radio-center" value="V3" />
                    <input type="radio" name="SAM1" class="radio-center" value="V4" />
                    <input type="radio" name="SAM1" class="radio-center" value="V5" />
                    <input type="radio" name="SAM1" class="radio-center" value="V6" />
                    <input type="radio" name="SAM1" class="radio-center" value="V7" />
                    <input type="radio" name="SAM1" class="radio-center" value="V8" />
                    <input type="radio" name="SAM1" class="radio-center" value="V9" />
                </div>
            </div>
            <label for="SAM2" class="white-label">How strong do you feel?</label>
            <br />
            <label for="SAM2" class="white-label">
                1 (Very Calm) - 9 (Very Excited)
            </label>
            <br />
            <img src="https://firebasestorage.googleapis.com/v0/b/student-emotion-analysis-d61dc.appspot.com/o/SAM2.png?alt=media&token=9a832e2a-f8d0-43a1-875a-b4e1dd6fba14"
                class="img-fluid" alt="SAM2" />
            <br />
            <div class="form-group containerSpacing">
                <div class="form-control" style="width: 620px;margin:auto">
                    <input type="radio" name="SAM2" style="margin-left: 4.3%" value="A1" required />
                    <input type="radio" name="SAM2" class="radio-center" value="A2" />
                    <input type="radio" name="SAM2" class="radio-center" value="A3" />
                    <input type="radio" name="SAM2" class="radio-center" value="A4" />
                    <input type="radio" name="SAM2" class="radio-center" value="A5" />
                    <input type="radio" name="SAM2" class="radio-center" value="A6" />
                    <input type="radio" name="SAM2" class="radio-center" value="A7" />
                    <input type="radio" name="SAM2" class="radio-center" value="A8" />
                    <input type="radio" name="SAM2" class="radio-center" value="A9" />
                </div>
            </div>
            <label for="SAM3" class="white-label">Rate your progress</label>
            <br />
            <label for="SAM3" class="white-label">
                1 (Completely Stuck) - 5 (Smooth Flow)
            </label>
            <br />
            <div class="form-group containerSpacing">
                <div class="form-control" style="width: 620px;margin:auto;height:60px">
                    <label class="form-check-label rate">
                        <input type="radio" name="SAM3" class="radio-center" value="R1" required />
                        1
                    </label>
                    <label class="form-check-label rate">
                        <input type="radio" name="SAM3" class="radio-center" value="R2" />
                        2
                    </label>
                    <label class="form-check-label rate">
                        <input type="radio" name="SAM3" class="radio-center" value="R3" />
                        3
                    </label>
                    <label class="form-check-label rate">
                        <input type="radio" name="SAM3" class="radio-center" value="R4" />
                        4
                    </label>
                    <label class="form-check-label">
                        <input type="radio" name="SAM3" class="radio-center" value="R5" />
                        5
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="width:15%" id="submit">
                Next
            </button>
        </div>
        <audio id="nature1" src="{{url("/audio/nature1.mp3")}}"></audio>
        <audio id="nature2" src="{{url("/audio/nature2.mp3")}}"></audio>
    </form>
    <script src="{{asset('js/customSAM.js')}}" type="text/javascript">
    </script>
</body>

</html>
