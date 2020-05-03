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
        <form action="Q8/save" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                @if($Qformat!=null)
                {{-- mcq --}}
                @if($Qformat==1)
                <div>
                    <label for=" Q8" class="white-label" style="margin-top: 15px">
                        What is the output of the following program?</label>
                    <div class="programming-bg">
                        <span class="programming-blue">public class Q{{Session::get('counter')}}</span><br />
                        {<br />
                        &emsp;<span class="programming-blue">static void </span>findLeader(<span
                            class="programming-blue">int</span> inputArray[])<br />
                        &emsp;{<br />
                        &emsp;&emsp;<span class="programming-blue">int </span>arrLength = inputArray.length;<br />
                        &emsp;&emsp;<span class="programming-blue">int </span>max = inputArray[arrLength-1];<br />
                        &emsp;&emsp;System.out.<span
                            class="programming-green">println</span>(inputArray[arrLength-1]);<br />
                        &emsp;&emsp;<span class="programming-blue">for </span>(<span class="programming-blue">int
                        </span>i = arrLength-2; i &gt;= 0; i--)<br />
                        &emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;<span class="programming-blue">if </span>(inputArray[i] &gt; max)<br />
                        &emsp;&emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;&emsp;System.out.<span class="programming-green">print</span>(inputArray[i] +
                        <span class="programming-green">" "</span>)<br />
                        &emsp;&emsp;&emsp;&emsp;max = inputArray[i];<br />
                        &emsp;&emsp;&emsp;}<br />
                        &emsp;&emsp;}<br />
                        &emsp;}<br /><br />
                        &emsp;<span class="programming-blue">public static void</span>
                        <span class="programming-green">main</span> (String[] args)<br />
                        &emsp;{<br />
                        &emsp;&emsp;findLeader(<span class="programming-blue">new int</span>[] {55, 12, 65, 29, 45, 3,
                        1});<br />
                        &emsp;}<br />
                        }
                    </div>
                    <br />
                    <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                        <input class="form-control-input" type="radio" id="Q8_1a" name="Q8_1" value="a" required"
                            {{old("Q8_1")=='a'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q8_1a" style="padding-left: 15px;">
                            1 29 12
                        </label>
                    </div>
                    <div class="form-control radio-center">
                        <input class="form-control-input" type="radio" id="Q8_1b" name="Q8_1" value="b"
                            {{old("Q8_1")=='b'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q8_1b" style="padding-left: 15px">
                            1 3 45 65
                        </label>
                    </div>
                    <div class="form-control radio-center">
                        <input class="form-control-input" type="radio" id="Q8_1c" name="Q8_1" value="c"
                            {{old("Q8_1")=='c'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q8_1c" style="padding-left: 15px">
                            45 65 55
                        </label>
                    </div>
                    <div class="form-control" style="border-radius: 0px 0px 10px 10px;">
                        <input class="form-control-input" type="radio" id="Q8_1d" name="Q8_1" value="d"
                            {{old("Q8_1")=='d'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q8_1d" style="padding-left: 15px">
                            3 29 12 55
                        </label>
                    </div>
                    @if(Session::has('endResult'))
                    <p class="rounded resultMsg" type='text'
                        style="display: {{old('flag')?'block': 'none' }};color: {{Session::get('endResult')[0][2]?'green':'red'}}" />
                    {{Session::get('endResult')[0][0]}}
                    </p>
                    @endif
                </div>
                @elseif($Qformat==2)
                {{-- matching --}}
                <div>
                    <label for="Q8" class="white-label" style="margin-top: 15px">
                        This is a Java program to find all the leader elements in the given array. For example, if {14,
                        9, 11, 7, 8, 5, 3} is the given array then {14, 11, 8, 5, 3} are the leaders in this array.
                        <br />Please select the appropriate options to produce the following output.</label>
                    <p class="programming-bg" style="font-weight:bold">Output: 10 33 39 65 87 100</p>
                    <div class="programming-bg">
                        <span class="programming-blue">public class Q{{Session::get('counter')}}</span><br />
                        {<br />
                        &emsp;<span class="programming-blue">static void </span>findLeader(<span
                            class="programming-blue">int</span> inputArray[])<br />
                        &emsp;{<br />
                        &emsp;&emsp;<span class="programming-blue">int </span>arrLength = inputArray.length;<br />
                        &emsp;&emsp;<span class="programming-blue">int </span>max = inputArray[arrLength-1];<br />
                        &emsp;&emsp;System.out.<span
                            class="programming-green">println</span>(inputArray[arrLength-1]);<br />
                        &emsp;&emsp;<span class="programming-blue">for </span>(<span class="programming-blue">int
                        </span>
                        i =
                        <select class="form-control" name="Q8_1A" required style="display: inline; width:155px;"
                            {{old("flag")?'disabled':''}}>
                            <option value="" disabled selected />
                            <option value='a' {{old("Q8_1A")=='a'?'selected':''}}>arrLength-1</option>
                            <option value='b' {{old("Q8_1A")=='b'?'selected':''}}>arrLength</option>
                            <option value='c' {{old("Q8_1A")=='c'?'selected':''}}>arrLength-2</option>
                        </select>
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[0]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[0]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif; i &gt;= 0; i--)<br />
                        &emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;<span class="programming-blue">if </span>(inputArray[i]
                        <select class="form-control" name="Q8_1B" required style="display: inline; width:70px;"
                            {{old("flag")?'disabled':''}}>
                            <option value="" disabled selected />
                            <option value='>' {{old("Q8_1B")=='>'?'selected':''}}>&gt;</option>
                            <option value='<' {{old("Q8_1B")=='<'?'selected':''}}>&lt;</option>
                            <option value='==' {{old("Q8_1B")=='=='?'selected':''}}>==</option>
                        </select>
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[1]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[1]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif
                        max)<br />
                        &emsp;&emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;&emsp;System.out.<span class="programming-green">print</span>(inputArray[i] +
                        <span class="programming-green">" "</span>)<br />
                        &emsp;&emsp;&emsp;&emsp;max = inputArray[i];<br />
                        &emsp;&emsp;&emsp;}<br />
                        &emsp;&emsp;}<br />
                        &emsp;}<br /><br />
                        &emsp;<span class="programming-blue">public static void</span>
                        <span class="programming-green">main</span> (String[] args)<br />
                        &emsp;{<br />
                        &emsp;&emsp;findLeader(<span class="programming-blue">new int</span>[] {100, 87, 65, 29, 39, 33,
                        10});<br />
                        &emsp;}<br />
                        }
                    </div>
                    @if(Session::has('endResult'))
                    @if(Session::get('endResult')[2][0]!='')
                    <p class="rounded resultMsg" type='text'
                        style="display: {{old('flag')?'block': 'none' }};color: red;font-family: 'Courier New', Courier, monospace;">
                        <u>The answers are as below:</u><br />
                        {{Session::get('endResult')[2][0]}}<br />{{Session::get('endResult')[2][1]}}
                    </p>
                    @endif
                    @endif
                </div>
                @elseif($Qformat==3)
                {{-- fill-in-blank --}}
                <div>
                    <label for="Q8" class="white-label" style="margin-top: 15px">
                        This is a Java program to find all the leader elements in the given array. For example, if {14,
                        9, 11, 7, 8, 5, 3} is the given array then {14, 11, 8, 5, 3} are the leaders in this array.
                        <br />Please select the appropriate options to produce the following output.</label>
                    <p class="programming-bg" style="font-weight:bold">Output: 10 33 39 65 87 100</p>
                    <div class="programming-bg">
                        <span class="programming-blue">public class Q{{Session::get('counter')}}</span><br />
                        {<br />
                        &emsp;<span class="programming-blue">static void </span>findLeader(<span
                            class="programming-blue">int</span> inputArray[])<br />
                        &emsp;{<br />
                        &emsp;&emsp;<span class="programming-blue">int </span>arrLength = inputArray.length;<br />
                        &emsp;&emsp;<span class="programming-blue">int </span>max = inputArray[arrLength-1];<br />
                        &emsp;&emsp;System.out.<span
                            class="programming-green">println</span>(inputArray[arrLength-1]);<br />
                        &emsp;&emsp;<span class="programming-blue">for </span>(<span class="programming-blue">int
                        </span>
                        i =
                        <input class="form-control" name="Q8_1A" required style="display: inline; width:155px;"
                            {{old("flag")?'disabled':''}} value="{{old('Q8_1A')}}" />
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[0]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[0]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif; i &gt;= 0; i--)<br />
                        &emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;<span class="programming-blue">if </span>(inputArray[i]
                        <input class="form-control" name="Q8_1B" required style="display: inline; width:60px;"
                            {{old("flag")?'disabled':''}} value="{{old('Q8_1B')}}" maxlength="2" />
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[1]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[1]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif
                        max)<br />
                        &emsp;&emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;&emsp;System.out.<span class="programming-green">print</span>(inputArray[i] +
                        <span class="programming-green">" "</span>)<br />
                        &emsp;&emsp;&emsp;&emsp;max = inputArray[i];<br />
                        &emsp;&emsp;&emsp;}<br />
                        &emsp;&emsp;}<br />
                        &emsp;}<br /><br />
                        &emsp;<span class="programming-blue">public static void</span>
                        <span class="programming-green">main</span> (String[] args)<br />
                        &emsp;{<br />
                        &emsp;&emsp;findLeader(<span class="programming-blue">new int</span>[] {100, 87, 65, 29, 39, 33,
                        10});<br />
                        &emsp;}<br />
                        }
                    </div>
                    @if(Session::has('endResult'))
                    @if(Session::get('endResult')[2][0]!='')
                    <p class="rounded resultMsg" type='text'
                        style="display: {{old('flag')?'block': 'none' }};color: red;font-family: 'Courier New', Courier, monospace;">
                        <u>The answers are as below:</u><br />
                        {{Session::get('endResult')[2][0]}}<br />{{Session::get('endResult')[2][1]}}
                    </p>
                    @endif
                    @endif
                </div>
                @elseif($Qformat==4)
                {{-- code --}}
                <div style="display: {{$Qformat==4?'block':'none'}}">
                    <label for=" Q8" class="white-label" style="margin-top: 15px">
                        Given an integer array, you have to find all the leader elements in this array. An element is
                        said to be leader if all the elements on it’s right side are smaller than it. Rightmost element
                        is always a leader. For example, if {14, 9, 11, 7, 8, 5, 3} is the given array then {14, 11, 8,
                        5, 3} are the leaders in this array.<br />
                        Please write a Java program for the problem above.
                    </label>
                    <textarea class="form-control" rows="50" required name='Q8' {{old("flag")?'disabled':''}}>{{old('Q8')}}
                    </textarea>
                    @if(Session::has('endResult'))
                    <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                        <p class="rounded resultMsg" type='text'
                            style="display: {{old('flag')?'block': 'none' }};color:green;">
                            {{Session::get('endResult')[0][0]}}<br />
                            {{Session::get('endResult')[0][1]}}
                        </p>
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
                onclick="window.location='{{ url("SAMQ8") }}'">
                Next
            </button>
        </div>
    </div>
    <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>
</body>

</html>
