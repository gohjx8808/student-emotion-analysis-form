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
        <form action="Q9/save" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                @if($Qformat!=null)
                {{-- mcq --}}
                @if($Qformat==1)
                <div>
                    <label for=" Q9" class="white-label" style="margin-top: 15px">
                        What is the output of the following program?</label>
                    <p class="programming-bg" style="font-weight:bold">Input: laravel</p>
                    <div class="programming-bg">
                        <span class="programming-blue">public class Q{{Session::get('counter')}}</span><br />
                        {<br />
                        &emsp;<span class="programming-blue">static boolean </span><span
                            class="programming-green">isP</span>(String str)<br />
                        &emsp;{<br />
                        &emsp;&emsp;<span class="programming-blue">int </span>i = 0, j = str.length() - 1;<br />
                        &emsp;&emsp;<span class="programming-blue">while </span>(i &lt; j)<br />
                        &emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;<span class="programming-blue">if </span>(str.charAt(i) !=
                        str.charAt(j))<br />
                        &emsp;&emsp;&emsp;&emsp;<span class="programming-blue">return false</span>;<br />
                        &emsp;&emsp;&emsp;i++;<br />
                        &emsp;&emsp;&emsp;j--;<br />
                        &emsp;&emsp;}<br />
                        &emsp;&emsp;<span class="programming-blue">return true</span>;<br />
                        &emsp;}<br /><br />
                        &emsp;<span class="programming-blue">public static void</span>
                        <span class="programming-green">main</span> (String[] args)<br />
                        &emsp;{<br />
                        &emsp;&emsp;Scanner in = <span class="programming-blue">new Scanner</span>(System.in);<br />
                        &emsp;&emsp;String str = in.nextLine();<br />
                        &emsp;&emsp;<span class="programming-blue">if </span>(isP(str))<br />
                        &emsp;&emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                            class="programming-green">"Yes"</span>);<br />
                        &emsp;&emsp;<span class="programming-blue">else</span><br />
                        &emsp;&emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                            class="programming-green">"No"</span>);<br />
                        }
                    </div>
                    <br />
                    <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                        <input class="form-control-input" type="radio" id="Q9_1a" name="Q9_1" value="a" required"
                            {{old("Q9_1")=='a'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q9_1a" style="padding-left: 15px;">
                            No
                        </label>
                    </div>
                    <div class="form-control radio-center">
                        <input class="form-control-input" type="radio" id="Q9_1b" name="Q9_1" value="b"
                            {{old("Q9_1")=='b'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q9_1b" style="padding-left: 15px">
                            Compiler Error
                        </label>
                    </div>
                    <div class="form-control radio-center">
                        <input class="form-control-input" type="radio" id="Q9_1c" name="Q9_1" value="c"
                            {{old("Q9_1")=='c'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q9_1c" style="padding-left: 15px">
                            Yes
                        </label>
                    </div>
                    <div class="form-control" style="border-radius: 0px 0px 10px 10px;">
                        <input class="form-control-input" type="radio" id="Q9_1d" name="Q9_1" value="d"
                            {{old("Q9_1")=='d'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q9_1d" style="padding-left: 15px">
                            Syntax Error
                        </label>
                    </div>
                    @if(Session::has('endResult'))
                    <p class="rounded resultMsg" type='text'
                        style="display: {{old('flag')?'block': 'none' }};color: {{Session::get('endResult')[0][2]?'green':'red'}}">
                        {{Session::get('endResult')[0][0]}}<br />
                        @if(Session::get('endResult')[1]!='')
                        {{Session::get('endResult')[1]}}
                        @endif
                    </p>
                    @endif
                </div>
                @elseif($Qformat==2)
                {{-- matching --}}
                <div>
                    <label for=" Q9" class="white-label" style="margin-top: 15px">
                        This is a palindrome checker program.<br />Please select the appropriate algorithm to produce
                        the following output.</label>
                    <p class="programming-bg" style="font-weight:bold">Input: tacocat<br />Output: Yes</p>
                    <div class="programming-bg">
                        <span class="programming-blue">public class Q{{Session::get('counter')}}</span><br />
                        {<br />
                        &emsp;<span class="programming-blue">static boolean </span><span
                            class="programming-green">isP</span>(String str)<br />
                        &emsp;{<br />
                        &emsp;&emsp;<span class="programming-blue">int </span>i = 0, j = str.length() - 1;<br />
                        &emsp;&emsp;<span class="programming-blue">while </span>(i &lt; j)<br />
                        &emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;<span class="programming-blue">if </span>(
                        <select class="form-control" name="Q9_1A" required style="display: inline; width:190px;"
                            {{old("flag")?'disabled':''}}>
                            <option value="" disabled selected />
                            <option value='a' {{old("Q9_1A")=='a'?'selected':''}}>str.charAt(i-1)</option>
                            <option value='b' {{old("Q9_1A")=='b'?'selected':''}}>str.charAt(i)</option>
                            <option value='c' {{old("Q9_1A")=='c'?'selected':''}}>str.charAt(i+1)</option>
                        </select>
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[0]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[0]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif !=
                        <select class="form-control" name="Q9_1B" required style="display: inline; width:190px;"
                            {{old("flag")?'disabled':''}}>
                            <option value="" disabled selected />
                            <option value='a' {{old("Q9_1B")=='a'?'selected':''}}>str.charAt(j-1)</option>
                            <option value='b' {{old("Q9_1B")=='b'?'selected':''}}>str.charAt(j+1)</option>
                            <option value='c' {{old("Q9_1B")=='c'?'selected':''}}>str.charAt(j)</option>
                        </select>
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[1]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[1]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif )<br />
                        &emsp;&emsp;&emsp;&emsp;<span class="programming-blue">return false</span>;<br />
                        &emsp;&emsp;
                        <select class="form-control" name="Q9_1C" required style="display: inline; width:90px;"
                            {{old("flag")?'disabled':''}}>
                            <option value="" disabled selected />
                            <option value='a' {{old("Q9_1C")=='a'?'selected':''}}>i+=1</option>
                            <option value='b' {{old("Q9_1C")=='b'?'selected':''}}>i++</option>
                            <option value='c' {{old("Q9_1C")=='c'?'selected':''}}>i--</option>
                        </select>
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[2]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[2]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif;<br />
                        &emsp;&emsp;
                        <select class="form-control" name="Q9_1D" required style="display: inline; width:90px;"
                            {{old("flag")?'disabled':''}}>
                            <option value="" disabled selected />
                            <option value='a' {{old("Q9_1D")=='a'?'selected':''}}>j+=1</option>
                            <option value='b' {{old("Q9_1D")=='b'?'selected':''}}>j++</option>
                            <option value='c' {{old("Q9_1D")=='c'?'selected':''}}>j--</option>
                        </select>
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[3]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[3]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif;<br /><br />
                        &emsp;&emsp;}<br />
                        &emsp;&emsp;<span class="programming-blue">return true</span>;<br />
                        &emsp;}<br /><br />
                        &emsp;<span class="programming-blue">public static void</span>
                        <span class="programming-green">main</span> (String[] args)<br />
                        &emsp;{<br />
                        &emsp;&emsp;Scanner in = <span class="programming-blue">new Scanner</span>(System.in);<br />
                        &emsp;&emsp;String str = in.nextLine();<br />
                        &emsp;&emsp;<span class="programming-blue">if </span>(isP(str))<br />
                        &emsp;&emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                            class="programming-green">"Yes"</span>);<br />
                        &emsp;&emsp;<span class="programming-blue">else</span><br />
                        &emsp;&emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                            class="programming-green">"No"</span>);<br />
                        }
                    </div>
                    @if(Session::has('endResult'))
                    <p class="rounded resultMsg" type='text'
                        style="display: {{old('flag')?'block': 'none' }};color:red">
                        @if(Session::get('endResult')[4]!='')
                        {{Session::get('endResult')[4]}}
                        @endif
                    </p>
                    @endif
                </div>
                @elseif($Qformat==3)
                {{-- fill-in-blank --}}
                <div>
                    <label for=" Q9" class="white-label" style="margin-top: 15px">
                        This is a palindrome checker program.<br />Please input the appropriate algorithm to produce
                        the following output.</label>
                    <p class="programming-bg" style="font-weight:bold">Input: durian<br />Output: No</p>
                    <div class="programming-bg">
                        <span class="programming-blue">public class Q{{Session::get('counter')}}</span><br />
                        {<br />
                        &emsp;<span class="programming-blue">static boolean </span><span
                            class="programming-green">isP</span>(String str)<br />
                        &emsp;{<br />
                        &emsp;&emsp;<span class="programming-blue">int </span>i = 0, j = str.length() - 1;<br />
                        &emsp;&emsp;<span class="programming-blue">while </span>(i &lt; j)<br />
                        &emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;<span class="programming-blue">if </span>(
                        <input class="form-control" name="Q9_1A" required style="display: inline; width:190px;"
                            {{old("flag")?'disabled':''}} value="{{old('Q9_1A')}}" />
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[0]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[0]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif !=
                        <input class="form-control" name="Q9_1B" required style="display: inline; width:190px;"
                            {{old("flag")?'disabled':''}} value="{{old('Q9_1B')}}" />
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[1]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[1]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif )<br />
                        &emsp;&emsp;&emsp;&emsp;<span class="programming-blue">return false</span>;<br />
                        &emsp;&emsp;
                        <input class="form-control" name="Q9_1C" required style="display: inline; width:190px;"
                            {{old("flag")?'disabled':''}} value="{{old('Q9_1C')}}" />
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[2]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[2]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif;<br />
                        &emsp;&emsp;
                        <input class="form-control" name="Q9_1D" required style="display: inline; width:190px;"
                            {{old("flag")?'disabled':''}} value="{{old('Q9_1D')}}" />
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[3]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[3]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif;<br /><br />
                        &emsp;&emsp;}<br />
                        &emsp;&emsp;<span class="programming-blue">return true</span>;<br />
                        &emsp;}<br /><br />
                        &emsp;<span class="programming-blue">public static void</span>
                        <span class="programming-green">main</span> (String[] args)<br />
                        &emsp;{<br />
                        &emsp;&emsp;Scanner in = <span class="programming-blue">new Scanner</span>(System.in);<br />
                        &emsp;&emsp;String str = in.nextLine();<br />
                        &emsp;&emsp;<span class="programming-blue">if </span>(isP(str))<br />
                        &emsp;&emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                            class="programming-green">"Yes"</span>);<br />
                        &emsp;&emsp;<span class="programming-blue">else</span><br />
                        &emsp;&emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                            class="programming-green">"No"</span>);<br />
                        }
                    </div>
                    @if(Session::has('endResult'))
                    <p class="rounded resultMsg" type='text'
                        style="display: {{old('flag')?'block': 'none' }};color:red">
                        @if(Session::get('endResult')[5]!='')
                        {{Session::get('endResult')[5]}}<br /><br />
                        @endif
                        <span style="color:green">
                            <u>The appropriate answers are:</u><br />
                            {{Session::get('endResult')[4][0]}}<br />
                            {{Session::get('endResult')[4][1]}}<br />
                            {{Session::get('endResult')[4][2]}}<br />
                            {{Session::get('endResult')[4][3]}}
                        </span>
                    </p>
                    @endif
                </div>
                @elseif($Qformat==4)
                {{-- code --}}
                <div style="display: {{$Qformat==4?'block':'none'}}">
                    <label for=" Q9" class="white-label" style="margin-top: 15px">
                        Please write a Java program to determine if an input string is palindrome.</label>
                    <textarea class="form-control" rows="30" required name='Q9' {{old("flag")?'disabled':''}}>{{old('Q9')}}
                    </textarea>
                    @if(Session::has('endResult'))
                    <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                        <p class="rounded resultMsg" type='text'
                            style="display: {{old('flag')?'block': 'none' }};color:green;">
                            {{Session::get('endResult')[0][0]}}<br/>
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
                onclick="window.location='{{ url("SAMQ9") }}'">
                Next
            </button>
        </div>
    </div>
    <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>
</body>

</html>
