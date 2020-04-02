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

        .resultMsg {
            background-color: white;
            font-weight: bold;
            padding: 10px;
        }
    </style>
</head>

<body class="background">
    <form class="form-background" action="Q4/save" method="POST">
        {{ csrf_field() }}
        <h1 class="white-label">Student Emotion Analysis</h1>
        <br />
        <h4 class="white-label">Part 2: Questions</h4>
        <p class="white-label">
            Please answer the questions as best as you can. Good luck!
        </p>
        <hr style="background-color:white" />
        <p class="white-label"><u>Question 4: True/False</u></p>
        <p class="white-label">The questions below are based on the fundamentals of Java programming</p>
        <p class="white-label">
            1. In an instance method or a constructor, "this" is a reference to the current object.
        </p>
        <div class="form-group">
            <div class="form-control">
                <label>
                    <input type="radio" name="Q4_1" value="true" class="form-control-input" required
                        style="margin-left:25px" {{old("Q4_1")=='true'?'checked':''}} {{old("flag")?'disabled':''}} />
                    True
                </label>
                <label>
                    <input type="radio" name="Q4_1" value="false" class="form-control-input" style="margin-left:200px"
                        {{old("Q4_1")=='false'?'checked':''}} {{old("flag")?'disabled':''}} />
                    False
                </label>
            </div>
            @if(Session::has('endResult'))
            <p class="rounded resultMsg" type='text'
                style="display: {{old('flag')?'block': 'none' }};color: {{Session::get('endResult')[0][2]?'green':'red'}}" />
            {{Session::get('endResult')[0][0]}}<br />{{Session::get('endResult')[0][1]}}
            </p>
            @endif
        </div>
        <p class="white-label">
            2. The "switch" selection structure must end with the default case.
        </p>
        <div class="form-group">
            <div class="form-control">
                <label>
                    <input type="radio" name="Q4_2" value="true" class="form-control-input" required
                        style="margin-left:25px" {{old("Q4_2")=='true'?'checked':''}} {{old("flag")?'disabled':''}} />
                    True
                </label>
                <label>
                    <input type="radio" name="Q4_2" value="false" class="form-control-input" style="margin-left:200px"
                        {{old("Q4_2")=='false'?'checked':''}} {{old("flag")?'disabled':''}} />
                    False
                </label>
            </div>
            @if(Session::has('endResult'))
            <p class="rounded resultMsg" type='text'
                style="display: {{old('flag')?'block': 'none' }};color: {{Session::get('endResult')[1][2]?'green':'red'}}" />
            {{Session::get('endResult')[1][0]}}<br />{{Session::get('endResult')[1][1]}}
            </p>
            @endif
        </div>
        <p class="white-label">
            3. int x[] = new int[]{10,20,30};<br />
            Arrays can also be created and initialize as in above statement.
        </p>
        <div class="form-group">
            <div class="form-control">
                <label>
                    <input type="radio" name="Q4_3" value="true" class="form-control-input" required
                        style="margin-left:25px" {{old("Q4_3")=='true'?'checked':''}} {{old("flag")?'disabled':''}} />
                    True
                </label>
                <label>
                    <input type="radio" name="Q4_3" value="false" class="form-control-input" style="margin-left:200px"
                        {{old("Q4_3")=='false'?'checked':''}} {{old("flag")?'disabled':''}} />
                    False
                </label>
            </div>
            @if(Session::has('endResult'))
            <p class="rounded resultMsg" type='text'
                style="display: {{old('flag')?'block': 'none' }};color: {{Session::get('endResult')[2][2]?'green':'red'}}" />
            {{Session::get('endResult')[2][0]}}<br />{{Session::get('endResult')[2][1]}}
            </p>
            @endif
        </div>
        <input type="hidden" value="0" id="mouseClicked" name="mouseClicked" />
        <input type="hidden" value=true name="flag" />
        <input type="hidden" value="0" id="timeTaken" name="timeTaken" />
        <input type="hidden" value="0" id="mouseWheelCounter" name="mouseWheelCounter"/>
        <input type="hidden" value="[0,0,0,0]" id="quadrantsCounter" name="quadrantsCounter"/>
        <input type="hidden" value="[0,0,0,0]" id="quadrantsTimer" name="quadrantsTimer"/>
        <div style="text-align:end;margin-top:15px">
            <button type="submit" class="btn btn-success" style="width:10%;margin-bottom:15px" id='submit'
                {{old("flag")?'disabled':''}}>
                Check
            </button>
        </div>
    </form>
    <div style="text-align: center;">
        <button type="button" class="btn btn-primary" style="width:15%" id='submit' {{old("flag")?'':'disabled'}}
            onclick="window.location='{{ url("SAMQ4") }}'">
            Next
        </button>
    </div>
    <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>
</body>

</html>
