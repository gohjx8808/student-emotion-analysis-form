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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
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

        .resultMsg {
            background-color: white;
            font-weight: bold;
            padding: 10px;
        }
    </style>
</head>

<body class="background">
    <div class="form-background">
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
        <form action="Q1/save" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <p class="white-label">1.</p>
                <div class="text-center">
                    <img src="https://firebasestorage.googleapis.com/v0/b/student-emotion-analysis-d61dc.appspot.com/o/Q1.1.PNG?alt=media&token=a7e66fd0-9c83-4c3c-8c54-d0c00b55e05d"
                        class="img-fluid rounded" alt="Q1_1" />
                </div>
                <label for="Q1" class="white-label" style="margin-top: 15px">What is the output for the question
                    above?</label>
                <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;height:60px;">
                    <input class="form-control-input" type="radio" id="Q1_1a" name="Q1_1" value="a" required"
                        {{old("Q1_1")=='a'?'checked':''}} {{old("flag")?'disabled':''}} />
                    <label class="form-check-label" for="Q1_1a" style="padding-left: 15px;">
                        t1.a=100, t1.b=200<br />
                        t2.a=10, t2.b=200
                    </label>
                </div>
                <div class="form-control radio-center" style="height:60px;">
                    <input class="form-control-input" type="radio" id="Q1_1b" name="Q1_1" value="b"
                        {{old("Q1_1")=='b'?'checked':''}} {{old("flag")?'disabled':''}} />
                    <label class="form-check-label" for="Q1_1b" style="padding-left: 15px">
                        t1.a=10, t1.b=200<br />
                        t2.a=10, t2.b=200
                    </label>
                </div>
                <div class="form-control radio-center" style="height:60px;">
                    <input class="form-control-input" type="radio" id="Q1_1c" name="Q1_1" value="c"
                        {{old("Q1_1")=='c'?'checked':''}} {{old("flag")?'disabled':''}} />
                    <label class="form-check-label" for="Q1_1c" style="padding-left: 15px">
                        t1.a=100, t1.b=200<br />
                        t2.a=10, t2.b=20
                    </label>
                </div>
                <div class="form-control" style="border-radius: 0px 0px 10px 10px;height:60px;">
                    <input class="form-control-input" type="radio" id="Q1_1d" name="Q1_1" value="d"
                        {{old("Q1_1")=='d'?'checked':''}} {{old("flag")?'disabled':''}} />
                    <label class="form-check-label" for="Q1_1d" style="padding-left: 15px">
                        t1.a=100, t1.b=200<br />
                        t2.a=100, t2.b=200
                    </label>
                </div>
                @if(Session::has('endResult'))
                <p class="rounded resultMsg" type='text'
                    style="display: {{old('flag')?'block': 'none' }};color: {{Session::get('endResult')[0][2]?'green':'red'}}" />
                {{Session::get('endResult')[0][0]}}<br />{{Session::get('endResult')[0][1]}}
                </p>
                @endif
            </div>
            <div class="form-group" style="padding-top: 25px">
                <p class="white-label">2.</p>
                <div class="text-center">
                    <img src="https://firebasestorage.googleapis.com/v0/b/student-emotion-analysis-d61dc.appspot.com/o/Q1.2.PNG?alt=media&token=353bcf2b-dadf-4487-9d97-64bd50d45f86"
                        class="img-fluid rounded" alt="Q1_2" />
                </div>
                <label for="Q1" class="white-label" style="margin-top: 15px">What is the output for the question
                    above?</label>
                <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                    <input class="form-control-input" type="radio" id="Q1_2a" name="Q1_2" value="a" required"
                        {{old("Q1_2")=='a'?'checked':''}} {{old("flag")?'disabled':''}} />
                    <label class="form-check-label" for="Q1_2a" style="padding-left: 15px;">
                        Constructor called Method called
                    </label>
                </div>
                <div class="form-control radio-center">
                    <input class="form-control-input" type="radio" id="Q1_2b" name="Q1_2" value="b"
                        {{old("Q1_2")=='b'?'checked':''}} {{old("flag")?'disabled':''}} />
                    <label class="form-check-label" for="Q1_2b" style="padding-left: 15px">
                        Compilation error
                    </label>
                </div>
                <div class="form-control radio-center">
                    <input class="form-control-input" type="radio" id="Q1_2c" name="Q1_2" value="c"
                        {{old("Q1_2")=='c'?'checked':''}} {{old("flag")?'disabled':''}} />
                    <label class="form-check-label" for="Q1_2c" style="padding-left: 15px">
                        Runtime error
                    </label>
                </div>
                <div class="form-control" style="border-radius: 0px 0px 10px 10px;">
                    <input class="form-control-input" type="radio" id="Q1_2d" name="Q1_2" value="d"
                        {{old("Q1_2")=='d'?'checked':''}} {{old("flag")?'disabled':''}} />
                    <label class="form-check-label" for="Q1_2d" style="padding-left: 15px">
                        None of the above
                    </label>
                </div>
                @if(Session::has('endResult'))
                <p class="rounded resultMsg" type='text'
                    style="display: {{old('flag')?'block': 'none' }};color: {{Session::get('endResult')[1][2]?'green':'red'}}" />
                {{Session::get('endResult')[1][0]}}<br />{{Session::get('endResult')[1][1]}}
                </p>
                @endif
            </div>
            <div class="form-group" style="padding-top: 25px">
                <p class="white-label">3.</p>
                <div class="text-center">
                    <img src="https://firebasestorage.googleapis.com/v0/b/student-emotion-analysis-d61dc.appspot.com/o/Q1.3.PNG?alt=media&token=50957e0f-e0c0-47e6-95e0-c9928181fb5a"
                        class="img-fluid rounded" alt="Q1_3" />
                </div>
                <label for="Q1" class="white-label" style="margin-top: 15px">What is the output for the question
                    above?</label>
                <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                    <input class="form-control-input" type="radio" id="Q1_3a" name="Q1_3" value="a" required"
                        {{old("Q1_3")=='a'?'checked':''}} {{old("flag")?'disabled':''}} />
                    <label class="form-check-label" for="Q1_3a" style="padding-left: 15px;">
                        alpha beta b b
                    </label>
                </div>
                <div class="form-control radio-center">
                    <input class="form-control-input" type="radio" id="Q1_3b" name="Q1_3" value="b"
                        {{old("Q1_3")=='b'?'checked':''}} {{old("flag")?'disabled':''}} />
                    <label class="form-check-label" for="Q1_3b" style="padding-left: 15px">
                        alpha beta a b
                    </label>
                </div>
                <div class="form-control radio-center">
                    <input class="form-control-input" type="radio" id="Q1_3c" name="Q1_3" value="c"
                        {{old("Q1_3")=='c'?'checked':''}} {{old("flag")?'disabled':''}} />
                    <label class="form-check-label" for="Q1_3c" style="padding-left: 15px">
                        beta alpha b b
                    </label>
                </div>
                <div class="form-control" style="border-radius: 0px 0px 10px 10px;">
                    <input class="form-control-input" type="radio" id="Q1_3d" name="Q1_3" value="d"
                        {{old("Q1_3")=='d'?'checked':''}} {{old("flag")?'disabled':''}} />
                    <label class="form-check-label" for="Q1_3d" style="padding-left: 15px">
                        beta alpha a b
                    </label>
                </div>
                @if(Session::has('endResult'))
                <p class="rounded resultMsg" type='text'
                    style="display: {{old('flag')?'block': 'none' }};color: {{Session::get('endResult')[2][2]?'green':'red'}}" />
                {{Session::get('endResult')[2][0]}}<br />{{Session::get('endResult')[2][1]}}
                </p>
                @endif
            </div>
            <input type="hidden" value=true name="flag" />
            <div style="text-align:end;margin-top:15px">
                <button type="submit" class="btn btn-success" style="width:10%;margin-bottom:15px" id='submit'
                    {{old("flag")?'disabled':''}}>
                    Check
                </button>
            </div>
            <input type="hidden" value="0" id="mouseClicked" name="mouseClicked" />
        </form>
        <div style=" text-align: center;">
            <button type="button" class="btn btn-primary" style="width:15%" id='submit' {{old("flag")?'':'disabled'}}
                onclick="window.location='{{ url("SAMQ1") }}'">
                Next
            </button>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            window.addEventListener('mousedown', function() {
                let mouseClickedInt = $("#mouseClicked").val();
                mouseClickedInt++;

                $('#mouseClicked').val(mouseClickedInt);
            })
        })
    </script>
</body>

</html>
