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
        <p class="white-label"><u>Question 1</u></p>
        <form action="Q1/save" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                @if($Qformat!=null)
                {{-- mcq --}}
                @if($Qformat==1)
                <div>
                    <label for=" Q1" class="white-label" style="margin-top: 15px">
                        What will be the output of the following program?</label>
                    <div class="programming-bg">
                        <p>
                            <span class="programming-blue">import</span> java.util.Scanner;<br />
                            <span class="programming-blue">public class Q1</span><br />
                            {<br />
                            &emsp;<span class="programming-blue">public static void</span>
                            <span class="programming-green">main</span> (String[] args)<br />
                            &emsp;{<br />
                            &emsp;&emsp;Scanner in = <span class="programming-blue">new Scanner</span>(System.in);<br />
                            &emsp;&emsp;<span class="programming-blue">double</span> x = 3.12; <br />
                            &emsp;&emsp;<span class="programming-blue">double</span> y = 10.98; <br />
                            &emsp;&emsp;<span class="programming-blue">double</span> z = 0.93; <br />
                            &emsp;&emsp;<span class="programming-blue">if</span> (x
                            < y && y < z)<br />
                            &emsp;&emsp;{ <br />
                            &emsp;&emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                                class="programming-green">"Increasing order"</span>);<br />
                            &emsp;&emsp;}<br />
                            &emsp;&emsp;<span class="programming-blue">else if</span> (x > y && y > z)<br />
                            &emsp;&emsp;{ <br />
                            &emsp;&emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                                class="programming-green">"Decreasing order"</span>);<br />
                            &emsp;&emsp;}<br />
                            &emsp;&emsp;<span class="programming-blue">else</span><br />
                            &emsp;&emsp;{<br />
                            &emsp;&emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                                class="programming-green">"Neither option"</span>);<br />
                            &emsp;&emsp;}<br />
                            &emsp;}<br />
                            }
                        </p>
                    </div>
                    <br />
                    <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                        <input class="form-control-input" type="radio" id="Q1_1a" name="Q1_1" value="a" required"
                            {{old("Q1_1")=='a'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q1_1a" style="padding-left: 15px;">
                            Decreasing order
                        </label>
                    </div>
                    <div class="form-control radio-center">
                        <input class="form-control-input" type="radio" id="Q1_1b" name="Q1_1" value="b"
                            {{old("Q1_1")=='b'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q1_1b" style="padding-left: 15px">
                            Compilation Error
                        </label>
                    </div>
                    <div class="form-control radio-center">
                        <input class="form-control-input" type="radio" id="Q1_1c" name="Q1_1" value="c"
                            {{old("Q1_1")=='c'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q1_1c" style="padding-left: 15px">
                            Neither option
                        </label>
                    </div>
                    <div class="form-control" style="border-radius: 0px 0px 10px 10px;">
                        <input class="form-control-input" type="radio" id="Q1_1d" name="Q1_1" value="d"
                            {{old("Q1_1")=='d'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q1_1d" style="padding-left: 15px">
                            Increasing order
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
                    <label for=" Q1" class="white-label" style="margin-top: 15px">
                        Please select the appropriate input to produce the following output.</label>
                    <p class="programming-bg" style="font-weight:bold">Input: x = 900.23 y = 23.45 z =
                        4.534<br />Output: Decreasing order</p>
                    <div class="programming-bg">
                        <span class="programming-blue">import</span> java.util.Scanner;<br />
                        <span class="programming-blue">public class Q1</span><br />
                        {<br />
                        &emsp;<span class="programming-blue">public static void</span>
                        <span class="programming-green">main</span> (String[] args)<br />
                        &emsp;{<br />
                        &emsp;&emsp;Scanner in = <span class="programming-blue">new Scanner</span>(System.in);<br />
                        &emsp;&emsp;System.out.<span class="programming-green">print</span>(<span
                            class="programming-green">"Input first number: "</span>);<br />
                        &emsp;&emsp;<span class="programming-blue">double</span> x = in.<span
                            class="programming-green">nextDouble</span>(); <br />
                        &emsp;&emsp;System.out.<span class="programming-green">print</span>(<span
                            class="programming-green">"Input second number: "</span>);<br />
                        &emsp;&emsp;<span class="programming-blue">double</span> y = in.<span
                            class="programming-green">nextDouble</span>(); <br />
                        &emsp;&emsp;System.out.<span class="programming-green">print</span>(<span
                            class="programming-green">"Input third number: "</span>);<br />
                        &emsp;&emsp;<span class="programming-blue">double</span> z = in.<span
                            class="programming-green">nextDouble</span>(); <br />
                        &emsp;&emsp;<span class="programming-blue">if</span> (
                        <select class="form-control" name="Q1_1A" required
                            style="display: inline; width:70px;height:33px" {{old("flag")?'disabled':''}}>
                            <option value="" disabled selected />
                            <option value='x' {{old("Q1_1A")=='x'?'selected':''}}>x</option>
                            <option value='y' {{old("Q1_1A")=='y'?'selected':''}}>y</option>
                            <option value='z' {{old("Q1_1A")=='z'?'selected':''}}>z</option>
                        </select>
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[0]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[0]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif
                        < y && <select class="form-control" name="Q1_1B" required
                            style="display: inline; width:70px;height:33px" {{old("flag")?'disabled':''}}>
                            <option value="" disabled selected />
                            <option value='x' {{old("Q1_1B")=='x'?'selected':''}}>x</option>
                            <option value='y' {{old("Q1_1B")=='y'?'selected':''}}>y</option>
                            <option value='z' {{old("Q1_1B")=='z'?'selected':''}}>z</option>
                            </select>
                            @if(Session::has('endResult'))
                            <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                                <ion-icon name="{{Session::get('endResult')[1]?'checkmark-circle':'close-circle'}}"
                                    style="color: {{Session::get('endResult')[1]?'green':'red'}};"></ion-icon>
                            </div>
                            @endif
                            < <select class="form-control" name="Q1_1C" required
                                style="display: inline; width:70px;height:33px" {{old("flag")?'disabled':''}}>
                                <option value="" disabled selected />
                                <option value='x' {{old("Q1_1C")=='x'?'selected':''}}>x</option>
                                <option value='y' {{old("Q1_1C")=='y'?'selected':''}}>y</option>
                                <option value='z' {{old("Q1_1C")=='z'?'selected':''}}>z</option>
                                </select>
                                @if(Session::has('endResult'))
                                <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                                    <ion-icon name="{{Session::get('endResult')[2]?'checkmark-circle':'close-circle'}}"
                                        style="color: {{Session::get('endResult')[2]?'green':'red'}};"></ion-icon>
                                </div>
                                @endif)<br />
                                &emsp;&emsp;{ <br />
                                &emsp;&emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                                    class="programming-green">"Increasing order"</span>);<br />
                                &emsp;&emsp;}<br />
                                &emsp;&emsp;<span class="programming-blue">else if</span> (
                                    <select class="form-control"
                                    name="Q1_1D" required style="display: inline; width:70px;height:33px"
                                    {{old("flag")?'disabled':''}}>
                                    <option value="" disabled selected />
                                    <option value='x' {{old("Q1_1D")=='x'?'selected':''}}>x</option>
                                    <option value='y' {{old("Q1_1D")=='y'?'selected':''}}>y</option>
                                    <option value='z' {{old("Q1_1D")=='z'?'selected':''}}>z</option>
                                </select>
                                @if(Session::has('endResult'))
                                <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                                    <ion-icon name="{{Session::get('endResult')[3]?'checkmark-circle':'close-circle'}}"
                                        style="color: {{Session::get('endResult')[3]?'green':'red'}};"></ion-icon>
                                </div>
                                @endif > y && <select class="form-control" name="Q1_1E" required
                                    style="display: inline; width:70px;height:33px" {{old("flag")?'disabled':''}}>
                                    <option value="" disabled selected />
                                    <option value='x' {{old("Q1_1E")=='x'?'selected':''}}>x</option>
                                    <option value='y' {{old("Q1_1E")=='y'?'selected':''}}>y</option>
                                    <option value='z' {{old("Q1_1E")=='z'?'selected':''}}>z</option>
                                </select>
                                @if(Session::has('endResult'))
                                <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                                    <ion-icon name="{{Session::get('endResult')[4]?'checkmark-circle':'close-circle'}}"
                                        style="color: {{Session::get('endResult')[4]?'green':'red'}};"></ion-icon>
                                </div>
                                @endif > z)<br />
                                &emsp;&emsp;{ <br />
                                &emsp;&emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                                    class="programming-green">"Decreasing order"</span>);<br />
                                &emsp;&emsp;}<br />
                                &emsp;&emsp;<span class="programming-blue">else</span><br />
                                &emsp;&emsp;{<br />
                                &emsp;&emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                                    class="programming-green">"Neither option"</span>);<br />
                                &emsp;&emsp;}<br />
                                &emsp;}<br />
                                }
                                </p>
                    </div>
                </div>
                @elseif($Qformat==3)
                {{-- fill-in-blank --}}
                <div>
                    <label for=" Q1" class="white-label" style="margin-top: 15px">
                        Please fill in the approriate variables to produce the following output.</label>
                    <p class="programming-bg" style="font-weight:bold">Input: x = 1.2234 y = 7.823 z = 1080.32
                        <br />Output:
                        Increasing order</p>
                    <div class="programming-bg">
                        <span class="programming-blue">import</span> java.util.Scanner;<br />
                        <span class="programming-blue">public class Q1</span><br />
                        {<br />
                        &emsp;<span class="programming-blue">public static void</span>
                        <span class="programming-green">main</span> (String[] args)<br />
                        &emsp;{<br />
                        &emsp;&emsp;Scanner in = <span class="programming-blue">new Scanner</span>(System.in);<br />
                        &emsp;&emsp;System.out.<span class="programming-green">print</span>(<span
                            class="programming-green">"Input first number: "</span>);<br />
                        &emsp;&emsp;<span class="programming-blue">double</span> x = in.<span
                            class="programming-green">nextDouble</span>(); <br />
                        &emsp;&emsp;System.out.<span class="programming-green">print</span>(<span
                            class="programming-green">"Input second number: "</span>);<br />
                        &emsp;&emsp;<span class="programming-blue">double</span> y = in.<span
                            class="programming-green">nextDouble</span>(); <br />
                        &emsp;&emsp;System.out.<span class="programming-green">print</span>(<span
                            class="programming-green">"Input third number: "</span>);<br />
                        &emsp;&emsp;<span class="programming-blue">double</span> z = in.<span
                            class="programming-green">nextDouble</span>(); <br />
                        &emsp;&emsp;<span class="programming-blue">if</span> (
                        <input class="form-control" name="Q1_1A" required type='text' maxlength=1
                            style="display: inline; width:40px;height:33px" {{old("flag")?'disabled':''}}
                            value={{old("Q1_1A")}}>
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[0]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[0]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif
                        < y && <input class="form-control" name="Q1_1B" required type='text' maxlength=1
                            style="display: inline; width:40px;height:33px" {{old("flag")?'disabled':''}}
                            value={{old("Q1_1B")}}>
                            @if(Session::has('endResult'))
                            <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                                <ion-icon name="{{Session::get('endResult')[1]?'checkmark-circle':'close-circle'}}"
                                    style="color: {{Session::get('endResult')[1]?'green':'red'}};"></ion-icon>
                            </div>
                            @endif
                            < <input class="form-control" name="Q1_1C" required type='text' maxlength=1
                                style="display: inline; width:40px;height:33px" {{old("flag")?'disabled':''}}
                                value={{old("Q1_1C")}}>
                                @if(Session::has('endResult'))
                                <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                                    <ion-icon name="{{Session::get('endResult')[2]?'checkmark-circle':'close-circle'}}"
                                        style="color: {{Session::get('endResult')[2]?'green':'red'}};"></ion-icon>
                                </div>
                                @endif)<br />
                                &emsp;&emsp;{ <br />
                                &emsp;&emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                                    class="programming-green">"Increasing order"</span>);<br />
                                &emsp;&emsp;}<br />
                                &emsp;&emsp;<span class="programming-blue">else if</span> (<input class="form-control"
                                    name="Q1_1D" required type='text' maxlength=1
                                    style="display: inline; width:40px;height:33px" {{old("flag")?'disabled':''}}
                                    value={{old("Q1_1D")}}>
                                @if(Session::has('endResult'))
                                <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                                    <ion-icon name="{{Session::get('endResult')[3]?'checkmark-circle':'close-circle'}}"
                                        style="color: {{Session::get('endResult')[3]?'green':'red'}};"></ion-icon>
                                </div>
                                @endif > y && <input class="form-control" name="Q1_1E" required type='text' maxlength=1
                                    style="display: inline; width:40px;height:33px" {{old("flag")?'disabled':''}}
                                    value={{old("Q1_1E")}}>
                                @if(Session::has('endResult'))
                                <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                                    <ion-icon name="{{Session::get('endResult')[4]?'checkmark-circle':'close-circle'}}"
                                        style="color: {{Session::get('endResult')[4]?'green':'red'}};"></ion-icon>
                                </div>
                                @endif > z)<br />
                                &emsp;&emsp;{ <br />
                                &emsp;&emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                                    class="programming-green">"Decreasing order"</span>);<br />
                                &emsp;&emsp;}<br />
                                &emsp;&emsp;<span class="programming-blue">else</span><br />
                                &emsp;&emsp;{<br />
                                &emsp;&emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                                    class="programming-green">"Neither option"</span>);<br />
                                &emsp;&emsp;}<br />
                                &emsp;}<br />
                                }
                                </p>
                    </div>
                </div>
                @elseif($Qformat==4)
                {{-- code --}}
                <div>
                    <label for=" Q1" class="white-label" style="margin-top: 15px">
                        Please write a program that accepts three numbers from the user and prints "increasing" if the
                        numbers are in increasing order, "decreasing" if the numbers are in decreasing order, and
                        "Neither increasing or decreasing order" otherwise.</label>
                    <textarea class="form-control" rows="30" required name='Q1' {{old("flag")?'disabled':''}}>{{old('Q1')}}
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
        </form>
        <div style=" text-align: center;">
            <button type="button" class="btn btn-primary" style="width:15%" id='submit' {{old("flag")?'':'disabled'}}
                onclick="window.location='{{ url("SAMQ1") }}'">
                Next
            </button>
        </div>
    </div>
    <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>
</body>

</html>
