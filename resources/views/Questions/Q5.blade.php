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
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
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
            background-image: "https://firebasestorage.googleapis.com/v0/b/student-emotion-analysis-d61dc.appspot.com/o/wooden_bg.jfif?alt=media&token=9e27ac6a-5944-413e-b058-5d0128f4a7c3";
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

        .programming-blue {
            font-weight: bold;
            color: blue;
        }

        .programming-green {
            font-weight: bold;
            color: green;
        }

        .programming-bg {
            background-color: white;
            font-family: 'Courier New', Courier, monospace;
            padding: 20px;
            border-radius: 10px;
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
        <p class="white-label"><u>Question {{Session::get('counter')}}</u></p>
        <form action="Q5/save" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                @if($Qformat!=null)
                {{-- mcq --}}
                @if($Qformat==1)
                <div>
                    <label for=" Q5" class="white-label" style="margin-top: 15px">
                        What is the output of the following program?</label>
                    <p class="programming-bg" style="font-weight:bold">Input: 3</p>
                    <div class="programming-bg">
                        <span class="programming-blue">public class Q{{Session::get('counter')}}</span><br />
                        {<br />
                        &emsp;<span class="programming-blue">public static void</span>
                        <span class="programming-green">main</span> (String[] args)<br />
                        &emsp;{<br />
                        &emsp;&emsp;Scanner in = <span class="programming-blue">new Scanner</span>(System.in);<br />
                        &emsp;&emsp;<span class="programming-blue">int </span>n, num = 1, c, d;<br />
                        &emsp;&emsp;n = in.<span class="programming-green">nextInt</span>(); <br />
                        &emsp;&emsp;<span class="programming-blue">for</span> (c = 1; c &lt;= n; c++)<br />
                        &emsp;&emsp;{ <br />
                        &emsp;&emsp;&emsp;<span class="programming-blue">for</span> (d = 1; d &lt;= c; d++)<br />
                        &emsp;&emsp;&emsp;{ <br />
                        &emsp;&emsp;&emsp;System.out.<span class="programming-green">print</span>(num + <span
                            class="programming-green">" "</span>);<br />
                        &emsp;&emsp;&emsp;num++;<br />
                        &emsp;&emsp;&emsp;} <br />
                        &emsp;&emsp;&emsp;System.out.<span class="programming-green">println</span>();<br />
                        &emsp;&emsp;} <br />
                        &emsp;}<br />
                        }
                    </div>
                    <br />
                    <div class="form-control"
                        style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;height:60px">
                        <input class="form-control-input" type="radio" id="Q5_1a" name="Q5_1" value="a" required"
                            {{old("Q5_1")=='a'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q5_1a" style="padding-left: 15px;">
                            1<br />2 3
                        </label>
                    </div>
                    <div class="form-control radio-center">
                        <input class="form-control-input" type="radio" id="Q5_1b" name="Q5_1" value="b"
                            {{old("Q5_1")=='b'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q5_1b" style="padding-left: 15px">
                            1 2 3
                        </label>
                    </div>
                    <div class="form-control radio-center" style="height: 85px">
                        <input class="form-control-input" type="radio" id="Q5_1c" name="Q5_1" value="c"
                            {{old("Q5_1")=='c'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q5_1c" style="padding-left: 15px">
                            1<br />2 3<br />4 5 6
                        </label>
                    </div>
                    <div class="form-control" style="border-radius: 0px 0px 10px 10px;">
                        <input class="form-control-input" type="radio" id="Q5_1d" name="Q5_1" value="d"
                            {{old("Q5_1")=='d'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q5_1d" style="padding-left: 15px">
                            1 2 3 4 5 6
                        </label>
                    </div>
                    @if(Session::has('endResult'))
                    <p class="rounded resultMsg" type='text'
                        style="display: {{old('flag')?'block': 'none' }};color: {{Session::get('endResult')[0][2]?'green':'red'}}" />
                    {{Session::get('endResult')[0][0]}} {{Session::get('endResult')[0][1]}}
                    </p>
                    @endif
                </div>
                @elseif($Qformat==2)
                {{-- matching --}}
                <div>
                    <label for="Q5" class="white-label" style="margin-top: 15px">
                        Please select the appropriate variables to produce the following output.</label>
                    <p class="programming-bg" style="font-weight:bold">Input: 4<br />Output:<br /> 1<br />2 3<br />4 5
                        6<br />7 8 9 10 </p>
                    <div class="programming-bg">
                        <span class="programming-blue">public class Q{{Session::get('counter')}}</span><br />
                        {<br />
                        &emsp;<span class="programming-blue">public static void</span>
                        <span class="programming-green">main</span> (String[] args)<br />
                        &emsp;{<br />
                        &emsp;&emsp;Scanner in = <span class="programming-blue">new Scanner</span>(System.in);<br />
                        &emsp;&emsp;<span class="programming-blue">int </span>rows, num = 1, counter, d;<br />
                        &emsp;&emsp;rows = in.<span class="programming-green">nextInt</span>(); <br />
                        &emsp;&emsp;<span class="programming-blue">for</span> (counter = 1;
                        <select class="form-control" name="Q5_1A" required style="display: inline; width:120px;"
                            {{old("flag")?'disabled':''}}>
                            <option value="" disabled selected />
                            <option value='rows' {{old("Q5_1A")=='rows'?'selected':''}}>rows</option>
                            <option value='counter' {{old("Q5_1A")=='counter'?'selected':''}}>counter</option>
                            <option value='d' {{old("Q5_1A")=='d'?'selected':''}}>d</option>
                        </select>@if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[0]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[0]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif
                        &lt;=
                        <select class="form-control" name="Q5_1B" required style="display: inline; width:120px;"
                            {{old("flag")?'disabled':''}}>
                            <option value="" disabled selected />
                            <option value='rows' {{old("Q5_1B")=='rows'?'selected':''}}>rows</option>
                            <option value='counter' {{old("Q5_1B")=='counter'?'selected':''}}>counter</option>
                            <option value='d' {{old("Q5_1B")=='d'?'selected':''}}>d</option>
                        </select>
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[1]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[1]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif ; counter++)<br />
                        &emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;<span class="programming-blue">for</span> (d = 1;
                        <select class="form-control" name="Q5_1C" required style="display: inline; width:120px;"
                            {{old("flag")?'disabled':''}}>
                            <option value="" disabled selected />
                            <option value='rows' {{old("Q5_1C")=='rows'?'selected':''}}>rows</option>
                            <option value='counter' {{old("Q5_1C")=='counter'?'selected':''}}>counter</option>
                            <option value='d' {{old("Q5_1C")=='d'?'selected':''}}>d</option>
                        </select>@if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[2]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[2]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif
                        &lt;=
                        <select class="form-control" name="Q5_1D" required style="display: inline; width:120px;"
                            {{old("flag")?'disabled':''}}>
                            <option value="" disabled selected />
                            <option value='rows' {{old("Q5_1D")=='rows'?'selected':''}}>rows</option>
                            <option value='counter' {{old("Q5_1D")=='counter'?'selected':''}}>counter</option>
                            <option value='d' {{old("Q5_1D")=='d'?'selected':''}}>d</option>
                        </select>
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[3]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[3]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif ; d++)<br />
                        &emsp;&emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;&emsp;System.out.<span class="programming-green">print</span>(num
                        + <span class="programming-green">" "</span>);<br />
                        &emsp;&emsp;&emsp;&emsp;num++;<br />
                        &emsp;&emsp;&emsp;}<br />
                        &emsp;&emsp;&emsp;System.out.<span class="programming-green">println</span>();<br />
                        &emsp;&emsp;}<br />
                        &emsp;}<br />
                        }
                    </div>
                    @if(Session::has('endResult'))
                    @if(Session::get('endResult')[4]!='')
                    <p class="rounded resultMsg" type='text'
                        style="display: {{old('flag')?'block': 'none' }};color: red" />
                    {{Session::get('endResult')[4]}}
                    </p>
                    @endif
                    @endif
                </div>
                @elseif($Qformat==3)
                {{-- fill-in-blank --}}
                <div>
                    <label for="Q5" class="white-label" style="margin-top: 15px">
                        Please input the appropriate variables to produce the following output.</label>
                    <p class="programming-bg" style="font-weight:bold">Input: 7<br />Output:<br /> 1<br />2
                        3<br />4 5
                        6<br />7 8 9 10<br />11 12 13 14 15<br />16 17 18 19 20 21<br />22 23 24 25 26 27 28 29 </p>
                    <div class="programming-bg">
                        <span class="programming-blue">public class Q{{Session::get('counter')}}</span><br />
                        {<br />
                        &emsp;<span class="programming-blue">public static void</span>
                        <span class="programming-green">main</span> (String[] args)<br />
                        &emsp;{<br />
                        &emsp;&emsp;Scanner in = <span class="programming-blue">new Scanner</span>(System.in);<br />
                        &emsp;&emsp;<span class="programming-blue">int </span>rows, num = 1, counter, d;<br />
                        &emsp;&emsp;rows = in.<span class="programming-green">nextInt</span>(); <br />
                        &emsp;&emsp;<span class="programming-blue">for</span> (counter = 1;
                        <input class="form-control" name="Q5_1A" required style="display: inline; width:120px;"
                            {{old("flag")?'disabled':''}} type="text" value="{{old('Q5_1A')}}" />
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[0]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[0]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif
                        &lt;=
                        <input class="form-control" name="Q5_1B" required style="display: inline; width:120px;"
                            {{old("flag")?'disabled':''}} type="text" value="{{old('Q5_1B')}}" />
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[1]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[1]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif ; counter++)<br />
                        &emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;<span class="programming-blue">for</span> (d = 1;
                        <input class="form-control" name="Q5_1C" required style="display: inline; width:120px;"
                            {{old("flag")?'disabled':''}} type="text"
                            value="{{old('Q5_1C')}}" />@if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[2]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[2]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif
                        &lt;=
                        <input class="form-control" name="Q5_1D" required style="display: inline; width:120px;"
                            {{old("flag")?'disabled':''}} type="text" value="{{old('Q5_1D')}}" />
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[3]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[3]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif ; d++)<br />
                        &emsp;&emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;&emsp;System.out.<span class="programming-green">print</span>(num
                        + <span class="programming-green">" "</span>);<br />
                        &emsp;&emsp;&emsp;&emsp;num++;<br />
                        &emsp;&emsp;&emsp;}<br />
                        &emsp;&emsp;&emsp;System.out.<span class="programming-green">println</span>();<br />
                        &emsp;&emsp;}<br />
                        &emsp;}<br />
                        }
                    </div>

                    @if(Session::has('endResult'))
                    @if(Session::get('endResult')[4]!='')
                    <p class="rounded resultMsg" type='text'
                        style="display: {{old('flag')?'block': 'none' }};color: red" />
                    {{Session::get('endResult')[4]}}
                    </p>
                    @endif
                    @endif
                </div>
                @elseif($Qformat==4)
                {{-- code --}}
                <div>
                    <label for=" Q5" class="white-label" style="margin-top: 15px">
                        Please write a program that will prompt user for number of rows and based on the input, it would
                        print the Floyd's triangle having the same number of rows in Java</label>
                    <textarea class="form-control" rows="30" required name='Q5' {{old("flag")?'disabled':''}}>{{old('Q5')}}
                    </textarea>
                    @if(Session::has('endResult'))
                    <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                        <p class="rounded resultMsg" type='text'
                            style="display: {{old('flag')?'block': 'none' }};color:green;">
                            {{Session::get('endResult')[0]}}</p>
                    </div>
                    @endif
                </div>
                @endif
                @endif
                <input type="hidden" value=true name="flag" />
                <div style="text-align:end;margin-top:15px">
                    <button type="submit" class="btn btn-success" style="width:10%;margin-bottom:15px" id='submit'
                        {{old("flag")?'disabled':''}}>
                        Check
                    </button>
                </div>
                <input type="hidden" value="0" id="mouseClicked" name="mouseClicked" />
                <input type="hidden" value="0" id="timeTaken" name="timeTaken" />
                <input type="hidden" value="0" id="mouseWheelCounter" name="mouseWheelCounter" />
                <input type="hidden" value="[0,0,0,0]" id="quadrantsCounter" name="quadrantsCounter" />
                <input type="hidden" value="[0,0,0,0]" id="quadrantsTimer" name="quadrantsTimer" />
                <input type="hidden" value={{$Qformat}} name="Qformat" />
                <input type="hidden" value={{Session::get('counter')}} name="counter" />
        </form>
        <div style=" text-align: center;">
            <button type="button" class="btn btn-primary" style="width:15%" id='submit' {{old("flag")?'':'disabled'}}
                onclick="window.location='{{ url("SAMQ5") }}'">
                Next
            </button>
        </div>
    </div>
    <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>
</body>

</html>
