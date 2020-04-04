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
        <p class="white-label"><u>Question 2</u></p>
        <form action="Q2/save" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                @if($Qformat!=null)
                {{-- mcq --}}
                @if($Qformat==1)
                <div>
                    <label for=" Q2" class="white-label" style="margin-top: 15px">
                        What will be the output of the following program?</label>
                    <p class="programming-bg" style="font-weight:bold">Input:<br />100<br />93<br />
                        4<br />53<br />8<br />-1<br />48<br />-22<br /></p>
                    <div class="programming-bg">
                        <p>
                            <span class="programming-blue">import</span> java.util.Scanner;<br />
                            <span class="programming-blue">public class Q2</span><br />
                            {<br />
                            &emsp;<span class="programming-blue">public static void</span>
                            <span class="programming-green">main</span> (String[] args)<br />
                            &emsp;{<br />
                            &emsp;&emsp;Scanner in = <span class="programming-blue">new Scanner</span>(System.in);<br />
                            &emsp;&emsp;<span class="programming-blue">int</span> x = 10; <br />
                            &emsp;&emsp;<span class="programming-blue">int</span> even = 0; <br />
                            &emsp;&emsp;<span class="programming-blue">int</span> odd = 0; <br />
                            &emsp;&emsp;<span class="programming-blue">int</span> total = 0; <br />
                            &emsp;&emsp;<span class="programming-blue">int</span> counter = 0; <br />
                            &emsp;&emsp;<span class="programming-blue">while</span> (x >= 0) <br />
                            &emsp;&emsp;{<br />
                            &emsp;&emsp;&emsp;<span class="programming-blue">int</span> x = in.<span
                                class="programming-green">nextInt</span>(); <br />
                            &emsp;&emsp;&emsp;counter += 1;<br />
                            &emsp;&emsp;&emsp;total += x;<br />
                            &emsp;&emsp;&emsp;<span class="programming-blue">if</span> (x >= 0)<br />
                            &emsp;&emsp;&emsp;{ <br />
                            &emsp;&emsp;&emsp;&emsp;<span class="programming-blue">if</span> (x % 2 == 1)<br />
                            &emsp;&emsp;&emsp;&emsp;{ <br />
                            &emsp;&emsp;&emsp;&emsp;&emsp;odd += x;<br />
                            &emsp;&emsp;&emsp;&emsp;}<br />
                            &emsp;&emsp;&emsp;&emsp;<span class="programming-blue">else if</span> (x % 2 == 0)<br />
                            &emsp;&emsp;&emsp;&emsp;{ <br />
                            &emsp;&emsp;&emsp;&emsp;&emsp;even += x;<br />
                            &emsp;&emsp;&emsp;&emsp;}<br />
                            &emsp;&emsp;&emsp;}<br />
                            &emsp;&emsp;}<br />
                            &emsp;<span class="programming-blue">double</span> average = total / counter;<br />
                            &emsp;System.out.<span class="programming-green">println</span>(<span
                                class="programming-green">"Average = "</span> + average + <span
                                class="programming-green">"\nTotal of Odd Number = "</span> + odd + <span
                                class="programming-green">"\nTotal of Even Number = "</span> + even);<br />
                            &emsp;}<br />
                            }
                        </p>
                    </div>
                    <br />
                    <div class="form-control"
                        style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;height:85px">
                        <input class="form-control-input" type="radio" id="Q2_1a" name="Q2_1" value="a" required"
                            {{old("Q2_1")=='a'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q2_1a" style="padding-left: 15px;">
                            Average = 51.6<br />
                            Total of Odd Number = 146<br />
                            Total of Even Number = 112<br />
                        </label>
                    </div>
                    <div class="form-control radio-center" style="height:85px">
                        <input class="form-control-input" type="radio" id="Q2_1b" name="Q2_1" value="b"
                            {{old("Q2_1")=='b'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q2_1b" style="padding-left: 15px">
                            Average = 42.83<br />
                            Total of Odd Number = 146<br />
                            Total of Even Number = 112<br />
                        </label>
                    </div>
                    <div class="form-control radio-center" style="height:85px">
                        <input class="form-control-input" type="radio" id="Q2_1c" name="Q2_1" value="c"
                            {{old("Q2_1")=='c'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q2_1c" style="padding-left: 15px">
                            Average = 35.375<br />
                            Total of Odd Number = 146<br />
                            Total of Even Number = 306<br />
                        </label>
                    </div>
                    <div class="form-control" style="border-radius: 0px 0px 10px 10px;height:85px">
                        <input class="form-control-input" type="radio" id="Q2_1d" name="Q2_1" value="d"
                            {{old("Q2_1")=='d'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q2_1d" style="padding-left: 15px">
                            Average = 51<br />
                            Total of Odd Number = 146<br />
                            Total of Even Number = 160<br />
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
                    <p class="programming-bg" style="font-weight:bold">Input:<br />100<br />93<br />
                        4<br />53<br />8<br />-1<br />48<br />-22<br /><br /> Output:<br /> Average = 51.6<br />
                        Total of Odd Number = 146<br />
                        Total of Even Number = 112<br />
                        <div class="programming-bg">
                            <span class="programming-blue">import</span> java.util.Scanner;<br />
                            <span class="programming-blue">public class Q2</span><br />
                            {<br />
                            &emsp;<span class="programming-blue">public static void</span>
                            <span class="programming-green">main</span> (String[] args)<br />
                            &emsp;{<br />
                            &emsp;&emsp;Scanner in = <span class="programming-blue">new Scanner</span>(System.in);<br />
                            &emsp;&emsp;<span class="programming-blue">int</span> x = 10; <br />
                            &emsp;&emsp;<span class="programming-blue">int</span> even = 0; <br />
                            &emsp;&emsp;<span class="programming-blue">int</span> odd = 0; <br />
                            &emsp;&emsp;<span class="programming-blue">int</span> total = 0; <br />
                            &emsp;&emsp;<span class="programming-blue">int</span> counter = 0; <br />
                            &emsp;&emsp;<select class="form-control" name="Q2_1A" required
                                style="display: inline; width:500px;" {{old("flag")?'disabled':''}}>
                                <option value="" disabled selected />
                                <option value='a' {{old("Q2_1A")=='a'?'selected':''}}>while (x != -1 && x >= 0)</option>
                                <option value='b' {{old("Q2_1A")=='b'?'selected':''}}>while (x != -1 && x > 0)</option>
                                <option value='c' {{old("Q2_1A")=='c'?'selected':''}}>while (x == -1 && x > 0)</option>
                            </select>
                            @if(Session::has('endResult'))
                            <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                                <ion-icon name="{{Session::get('endResult')[0]?'checkmark-circle':'close-circle'}}"
                                    style="color: {{Session::get('endResult')[0]?'green':'red'}};"></ion-icon>
                            </div>
                            @endif<br />
                            &emsp;&emsp;{<br />
                            &emsp;&emsp;&emsp;<span class="programming-blue">int</span> x = in.<span
                                class="programming-green">nextInt</span>(); <br />
                            &emsp;&emsp;&emsp;<span class="programming-blue">if</span> (x != -1 && x >= 0)<br />
                            &emsp;&emsp;&emsp;{ <br />
                            &emsp;&emsp;&emsp;&emsp;counter += 1;<br />
                            &emsp;&emsp;&emsp;&emsp;total += x;<br />
                            &emsp;&emsp;&emsp;&emsp;<span class="programming-blue">if</span> (x % 2 == 1)<br />
                            &emsp;&emsp;&emsp;&emsp;{ <br />
                            &emsp;&emsp;&emsp;&emsp;&emsp;odd += x;<br />
                            &emsp;&emsp;&emsp;&emsp;}<br />
                            &emsp;&emsp;&emsp;&emsp;<span class="programming-blue">else if</span> (x % 2 == 0)<br />
                            &emsp;&emsp;&emsp;&emsp;{ <br />
                            &emsp;&emsp;&emsp;&emsp;&emsp;even += x;<br />
                            &emsp;&emsp;&emsp;&emsp;}<br />
                            &emsp;&emsp;&emsp;}<br />
                            &emsp;&emsp;}<br />
                            &emsp;<span class="programming-blue">double</span> average = total / counter;<br />
                            &emsp;System.out.<span class="programming-green">println</span>(<span
                                class="programming-green">"Average = "</span> + average + <span
                                class="programming-green">"\nTotal of Odd Number = "</span> + odd + <span
                                class="programming-green">"\nTotal of Even Number = "</span> + even);<br />
                            &emsp;}<br />
                            }
                    </p>
                </div>
                @elseif($Qformat==3)
                {{-- fill-in-blank --}}
                <div>
                    <label for=" Q1" class="white-label" style="margin-top: 15px">
                        Please select the appropriate input to produce the following output.</label>
                    <p class="programming-bg" style="font-weight:bold">Input:<br />100<br />93<br />0<br />
                        4<br />53<br />8<br />-1<br />48<br />-22<br /><br /> Output:<br /> Average = 51.6<br />
                        Total of Odd Number = 146<br />
                        Total of Even Number = 112<br />
                        <div class="programming-bg">
                            <span class="programming-blue">import</span> java.util.Scanner;<br />
                            <span class="programming-blue">public class Q2</span><br />
                            {<br />
                            &emsp;<span class="programming-blue">public static void</span>
                            <span class="programming-green">main</span> (String[] args)<br />
                            &emsp;{<br />
                            &emsp;&emsp;Scanner in = <span class="programming-blue">new Scanner</span>(System.in);<br />
                            &emsp;&emsp;<span class="programming-blue">int</span> x = 10; <br />
                            &emsp;&emsp;<span class="programming-blue">int</span> even = 0; <br />
                            &emsp;&emsp;<span class="programming-blue">int</span> odd = 0; <br />
                            &emsp;&emsp;<span class="programming-blue">int</span> total = 0; <br />
                            &emsp;&emsp;<span class="programming-blue">int</span> counter = 0; <br />
                            &emsp;&emsp;<input class="form-control" name="Q2_1A" required type="text"
                                style="display: inline; width:500px;" value='{{old("Q2_1A")}}'
                                {{old("flag")?'disabled':''}} />
                            @if(Session::has('endResult'))
                            <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                                <ion-icon name="{{Session::get('endResult')[0]?'checkmark-circle':'close-circle'}}"
                                    style="color: {{Session::get('endResult')[0]?'green':'red'}};"></ion-icon>
                            </div>
                            @endif<br />
                            &emsp;&emsp;{<br />
                            &emsp;&emsp;&emsp;<span class="programming-blue">int</span> x = in.<span
                                class="programming-green">nextInt</span>(); <br />
                            &emsp;&emsp;&emsp;<span class="programming-blue">if</span> (x > 0)<br />
                            &emsp;&emsp;&emsp;{ <br />
                            &emsp;&emsp;&emsp;&emsp;counter += 1;<br />
                            &emsp;&emsp;&emsp;&emsp;total += x;<br />
                            &emsp;&emsp;&emsp;&emsp;<span class="programming-blue">if</span> (x % 2 == 1)<br />
                            &emsp;&emsp;&emsp;&emsp;{ <br />
                            &emsp;&emsp;&emsp;&emsp;&emsp;odd += x;<br />
                            &emsp;&emsp;&emsp;&emsp;}<br />
                            &emsp;&emsp;&emsp;&emsp;<span class="programming-blue">else if</span> (x % 2 == 0)<br />
                            &emsp;&emsp;&emsp;&emsp;{ <br />
                            &emsp;&emsp;&emsp;&emsp;&emsp;even += x;<br />
                            &emsp;&emsp;&emsp;&emsp;}<br />
                            &emsp;&emsp;&emsp;}<br />
                            &emsp;&emsp;}<br />
                            &emsp;<span class="programming-blue">double</span> average = total / counter;<br />
                            &emsp;System.out.<span class="programming-green">println</span>(<span
                                class="programming-green">"Average = "</span> + average + <span
                                class="programming-green">"\nTotal of Odd Number = "</span> + odd + <span
                                class="programming-green">"\nTotal of Even Number = "</span> + even);<br />
                            &emsp;}<br />
                            }
                        </div>
                    </p>
                    @if(Session::has('endResult'))
                    @if(Session::get('endResult')[0]==false)
                    <p class="rounded resultMsg" style="color: red;" />
                    {{Session::get('endResult')[1]}}
                    </p>
                    @endif
                    @endif
                </div>
                @elseif($Qformat==4)
                {{-- code --}}
                <div style="display: {{$Qformat==4?'block':'none'}}">
                    <label for=" Q2" class="white-label" style="margin-top: 15px">
                        Please write a program that accepts integers and output the total of odd and even numbers
                        and the average of all the numbers. The program must stop when it encounters integer smaller
                        than 0.</label>
                    <textarea class="form-control" rows="30" required name='Q2' {{old("flag")?'disabled':''}}>{{old('Q2')}}
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
                onclick="window.location='{{ url("SAMQ2") }}'">
                Next
            </button>
        </div>
    </div>
    <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>
</body>

</html>
