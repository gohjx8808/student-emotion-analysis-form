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

        .resultMsg {
            background-color: white;
            font-weight: bold;
            padding: 10px;
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
    <form class="form-background" action="Q3/save" method="POST">
        {{ csrf_field() }}
        <h1 class="white-label">Student Emotion Analysis</h1>
        <br />
        <h4 class="white-label">Part 2: Questions</h4>
        <p class="white-label">
            Please answer the questions as best as you can. Good luck!
        </p>
        <hr style="background-color:white" />
        <p class="white-label"><u>Question 3: Fill in the blank</u></p>
        <p class="white-label">The questions below are based on the fundamentals of Java programming</p>
        <p class="white-label">
            1. <input type="text" name="Q3_1" value="{{old('Q3_1')}}" /> is a concept in OOP which hides unimportant
            implementation details
            from other objects.
        </p>
        @if(Session::has('endResult'))
        <p class="rounded resultMsg" type='text'
            style="display: {{old('flag')?'block': 'none' }};color: {{Session::get('endResult')[0][2]?'green':'red'}}" />
        {{Session::get('endResult')[0][0]}}<br />{{Session::get('endResult')[0][1]}}
        </p>
        @endif
        <p class="white-label">
            2. What data type should be use? <br /><input type="text" name="Q3_2" style="margin-left:17px"
                value="{{old('Q3_2')}}" />
            number="3";.
        </p>
        @if(Session::has('endResult'))
        <p class="rounded resultMsg" type='text'
            style="display: {{old('flag')?'block': 'none' }};color: {{Session::get('endResult')[1][2]?'green':'red'}}" />
        {{Session::get('endResult')[1][0]}}<br />{{Session::get('endResult')[1][1]}}
        </p>
        @endif
        <p class="white-label">
            3. A subclass can call a constructor method defined by its super class by use of the <input type="text"
                name="Q3_3" value="{{old('Q3_3')}}" /> keyword.
        </p>
        @if(Session::has('endResult'))
        <p class="rounded resultMsg" type='text'
            style="display: {{old('flag')?'block': 'none' }};color: {{Session::get('endResult')[2][2]?'green':'red'}}" />
        {{Session::get('endResult')[2][0]}}<br />{{Session::get('endResult')[2][1]}}
        </p>
        @endif
        <input type="hidden" value="0" id="mouseClicked" name="mouseClicked" />
        <input type="hidden" value=true name="flag" />
        <input type="hidden" value="0" id="timeTaken" name="timeTaken" />
        <input type="hidden" value="0" id="mouseWheelCounter" name="mouseWheelCounter"/>
        <input type="hidden" value="[0,0,0,0]" id="quadrantsCounter" name="quadrantsCounter"/>
        <div style="text-align:end;margin-top:15px">
            <button type="submit" class="btn btn-success" style="width:10%;margin-bottom:15px" id='submit'
                {{old("flag")?'disabled':''}}>
                Check
            </button>
        </div>
    </form>
    <div style="text-align: center;">
        <button type="button" class="btn btn-primary" style="width:15%" id='submit' {{old("flag")?'':'disabled'}}
            onclick="window.location='{{ url("SAMQ3") }}'">
            Next
        </button>
    </div>
    <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>
</body>
</html>
