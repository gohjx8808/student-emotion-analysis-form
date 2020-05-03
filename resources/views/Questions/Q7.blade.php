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
        <form action="Q7/save" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                @if($Qformat!=null)
                {{-- mcq --}}
                @if($Qformat==1)
                <div>
                    <label for=" Q7" class="white-label" style="margin-top: 15px">
                        What should be filled in [y] of the following program to produce the following
                        output?</label>
                    <p class="programming-bg" style="font-weight:bold">
                        <u>Output:</u><br />11 13 23 67 98 100</p>
                    <div class="programming-bg">
                        <span class="programming-blue">class Q{{Session::get('counter')}}</span><br />
                        {<br />
                        &emsp;<span class="programming-blue">void </span>
                        <span class="programming-green">sort</span>(<span class="programming-blue">int
                        </span>arr[])<br />
                        &emsp;{<br />
                        &emsp;&emsp;<span class="programming-blue">int </span>n = arr.length;<br />
                        &emsp;&emsp;<span class="programming-blue">for </span>(<span class="programming-blue">int
                        </span>
                        i = 0; i &lt; n-1; i++)<br />
                        &emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;<span class="programming-blue">for </span>(<span class="programming-blue">int
                        </span>
                        j = 0; j &lt; n-i-1; j++)<br />
                        &emsp;&emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;&emsp;<span class="programming-blue">if </span>(arr[j] &gt;
                        arr[j+1])<br />
                        &emsp;&emsp;&emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;&emsp;&emsp;<strong>[y]</strong><br />
                        {{-- &emsp;&emsp;&emsp;&emsp;&emsp;<span class="programming-blue">int </span>temp = arr[j];<br />
                        &emsp;&emsp;&emsp;&emsp;&emsp;arr[j] = arr[j+1];<br />
                        &emsp;&emsp;&emsp;&emsp;&emsp;arr[j+1] = temp;<br /> --}}
                        &emsp;&emsp;&emsp;&emsp;}<br />
                        &emsp;&emsp;&emsp;}<br />
                        &emsp;&emsp;}<br />
                        &emsp;}<br /><br />
                        &emsp;<span class="programming-blue">void </span>
                        <span class="programming-green">printArray</span>(<span class="programming-blue">int
                        </span>arr[])<br />
                        &emsp;{<br />
                        &emsp;&emsp;<span class="programming-blue">int </span>n = arr.length;<br />
                        &emsp;&emsp;<span class="programming-blue">for </span>(<span class="programming-blue">int
                        </span>
                        i = 0; i &lt; n; ++i)<br />
                        &emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;System.out.<span class="programming-green">print</span>(arr[i] + <span
                            class="programming-green">"&emsp;"</span>);<br />
                        &emsp;&emsp;}<br />
                        &emsp;&emsp;System.out.<span class="programming-green">println</span>();<br />
                        &emsp;}<br /><br />
                        &emsp;<span class="programming-blue">public static void</span>
                        <span class="programming-green">main</span> (String[] args)<br />
                        &emsp;{<br />
                        &emsp;&emsp;Q{{Session::get('counter')}} ob = <span class="programming-blue">new</span> Q{{Session::get('counter')}}();<br />
                        &emsp;&emsp;<span class="programming-blue">int </span>arr[] = {23, 67, 13, 100, 11,
                        98};<br />
                        &emsp;&emsp;ob.sort(arr);<br />
                        &emsp;&emsp;ob.printArray(arr);<br />
                        &emsp;}<br />
                        }
                    </div>
                    <br />
                    <div class="form-control"
                        style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;height: 85px;font-family: 'Courier New', Courier, monospace;">
                        <input class="form-control-input" type="radio" id="Q7_1a" name="Q7_1" value="a" required"
                            {{old("Q7_1")=='a'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q7_1a" style="padding-left: 15px;">
                            int temp = arr[j];<br />
                            arr[j] = arr[j+1];<br />
                            arr[j+1] = temp;<br />
                        </label>
                    </div>
                    <div class="form-control radio-center"
                        style="height: 85px;font-family: 'Courier New', Courier, monospace;">
                        <input class="form-control-input" type="radio" id="Q7_1b" name="Q7_1" value="b"
                            {{old("Q7_1")=='b'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q7_1b" style="padding-left: 15px">
                            int temp = arr[j];<br />
                            arr[j+1] = arr[j];<br />
                            arr[j] = temp;<br />
                        </label>
                    </div>
                    <div class="form-control radio-center"
                        style="height: 85px;font-family: 'Courier New', Courier, monospace;">
                        <input class="form-control-input" type="radio" id="Q7_1c" name="Q7_1" value="c"
                            {{old("Q7_1")=='c'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q7_1c" style="padding-left: 15px">
                            int temp = arr[j+1];<br />
                            arr[j] = arr[j-1];<br />
                            arr[j-1] = temp;<br />
                        </label>
                    </div>
                    <div class="form-control"
                        style="border-radius: 0px 0px 10px 10px;height:85px;font-family: 'Courier New', Courier, monospace;">
                        <input class="form-control-input" type="radio" id="Q7_1d" name="Q7_1" value="d"
                            {{old("Q7_1")=='d'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q7_1d" style="padding-left: 15px">
                            int temp = arr[j];<br />
                            arr[j] = arr[j+i];<br />
                            arr[j+i] = temp;<br />
                        </label>
                    </div>
                    @if(Session::has('endResult'))
                    <p class="rounded resultMsg" type='text'
                        style="display: {{old('flag')?'block': 'none' }};color: {{Session::get('endResult')[0][2]?'green':'red'}}" />
                    {{Session::get('endResult')[0][0]}}
                    @endif
                </div>
                @elseif($Qformat==2)
                {{-- matching --}}
                <div>
                    <label for="Q7" class="white-label" style="margin-top: 15px">
                        Please select the appropriate algorithm to produce the following output.</label>
                    <p class="programming-bg" style="font-weight:bold">Output: 8 10 56 64 99 105</p>
                    <div class="programming-bg">
                        <span class="programming-blue">class Q{{Session::get('counter')}}</span><br />
                        {<br />
                        &emsp;<span class="programming-blue">void </span>
                        <span class="programming-green">sort</span>(<span class="programming-blue">int
                        </span>arr[])<br />
                        &emsp;{<br />
                        &emsp;&emsp;<span class="programming-blue">int </span>n = arr.length;<br />
                        &emsp;&emsp;<span class="programming-blue">for </span>(<span class="programming-blue">int
                        </span>
                        i = 0; i &lt; n-1; i++)<br />
                        &emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;<span class="programming-blue">for </span>(<span
                            class="programming-blue">int</span>
                        j = 0; j &lt; n-i-1; j++)<br />
                        &emsp;&emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;&emsp;<span class="programming-blue">if </span>(arr[j] &gt;
                        arr[j+1])<br />
                        &emsp;&emsp;&emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;&emsp;&emsp;<select class="form-control" name="Q7_1A" required
                            style="display: inline; width:230px;" {{old("flag")?'disabled':''}}>
                            <option value="" disabled selected />
                            <option value='a' {{old("Q7_1A")=='a'?'selected':''}}>int temp = arr[j+i]</option>
                            <option value='b' {{old("Q7_1A")=='b'?'selected':''}}>int temp = arr[j-1]</option>
                            <option value='c' {{old("Q7_1A")=='c'?'selected':''}}>int temp = arr[j]</option>
                            <option value='d' {{old("Q7_1A")=='d'?'selected':''}}>int temp = arr[j-i]</option>
                        </select>
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[0]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[0]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif;<br />
                        &emsp;&emsp;&emsp;&emsp;&emsp;<select class="form-control" name="Q7_1B" required
                            style="display: inline; width:230px;" {{old("flag")?'disabled':''}}>
                            <option value="" disabled selected />
                            <option value='a' {{old("Q7_1B")=='a'?'selected':''}}>arr[j] = arr[j+i]</option>
                            <option value='b' {{old("Q7_1B")=='b'?'selected':''}}>arr[j+1] = arr[j]</option>
                            <option value='c' {{old("Q7_1B")=='c'?'selected':''}}>arr[j] = arr[j-i]</option>
                            <option value='d' {{old("Q7_1B")=='d'?'selected':''}}>arr[j] = arr[j-1]</option>
                            <option value='e' {{old("Q7_1B")=='e'?'selected':''}}>arr[j] = arr[j+1]</option>
                        </select>
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[1]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[1]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif;<br />
                        &emsp;&emsp;&emsp;&emsp;&emsp;<select class="form-control" name="Q7_1C" required
                            style="display: inline; width:230px;" {{old("flag")?'disabled':''}}>
                            <option value="" disabled selected />
                            <option value='a' {{old("Q7_1C")=='a'?'selected':''}}>arr[j] = temp</option>
                            <option value='b' {{old("Q7_1C")=='b'?'selected':''}}>arr[j+i] = temp</option>
                            <option value='c' {{old("Q7_1C")=='c'?'selected':''}}>arr[j+1] = temp</option>
                            <option value='d' {{old("Q7_1C")=='d'?'selected':''}}>arr[j-1] = temp</option>
                            <option value='e' {{old("Q7_1C")=='e'?'selected':''}}>arr[j-i] = temp</option>
                        </select>
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[2]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[2]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif;<br />
                        &emsp;&emsp;&emsp;&emsp;}<br />
                        &emsp;&emsp;&emsp;}<br />
                        &emsp;&emsp;}<br />
                        &emsp;}<br /><br />
                        &emsp;<span class="programming-blue">void </span>
                        <span class="programming-green">printArray</span>(<span class="programming-blue">int
                        </span>arr[])<br />
                        &emsp;{<br />
                        &emsp;&emsp;<span class="programming-blue">int </span>n = arr.length;<br />
                        &emsp;&emsp;<span class="programming-blue">for </span>(<span class="programming-blue">int
                        </span>
                        i = 0; i &lt; n; ++i)<br />
                        &emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;System.out.<span class="programming-green">print</span>(arr[i] + <span
                            class="programming-green">"&emsp;"</span>);<br />
                        &emsp;&emsp;}<br />
                        &emsp;&emsp;System.out.<span class="programming-green">println</span>();<br />
                        &emsp;}<br /><br />
                        &emsp;<span class="programming-blue">public static void</span>
                        <span class="programming-green">main</span> (String[] args)<br />
                        &emsp;{<br />
                        &emsp;&emsp;Q{{Session::get('counter')}} ob = <span class="programming-blue">new</span> Q{{Session::get('counter')}}();<br />
                        &emsp;&emsp;<span class="programming-blue">int </span>arr[] = {56, 10, 64, 8, 99,
                        105};<br />
                        &emsp;&emsp;ob.sort(arr);<br />
                        &emsp;&emsp;ob.printArray(arr);<br />
                        &emsp;}<br />
                        }
                    </div>
                    @if(Session::has('endResult'))
                    @if(Session::get('endResult')[3][0]!='')
                    <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                        <p class="rounded resultMsg" type='text'
                            style="display: {{old('flag')?'block': 'none' }};color:green;font-family: 'Courier New', Courier, monospace;">
                            <u>The answer is:</u><br />
                            {{Session::get('endResult')[3][0]}}<br />
                            {{Session::get('endResult')[3][1]}}<br />
                            {{Session::get('endResult')[3][2]}}
                        </p>
                    </div>
                    @endif
                    @endif
                </div>
                @elseif($Qformat==3)
                {{-- fill-in-blank --}}
                <div>
                    <label for="Q7" class="white-label" style="margin-top: 15px">
                        Please input the appropriate algorithm to produce the following output.</label>
                    <p class="programming-bg" style="font-weight:bold">Output: 100 98 67 23 13 11</p>
                    <div class="programming-bg">
                        <span class="programming-blue">class Q{{Session::get('counter')}}</span><br />
                        {<br />
                        &emsp;<span class="programming-blue">void </span>
                        <span class="programming-green">sort</span>(<span class="programming-blue">int
                        </span>arr[])<br />
                        &emsp;{<br />
                        &emsp;&emsp;<span class="programming-blue">int </span>n = arr.length;<br />
                        &emsp;&emsp;<span class="programming-blue">for </span>(<span class="programming-blue">int
                        </span>
                        i = 0; i &lt; n-1; i++)<br />
                        &emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;<span class="programming-blue">for </span>(<span
                            class="programming-blue">int</span>
                        j = 0; j &lt; n-i-1; j++)<br />
                        &emsp;&emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;&emsp;<span class="programming-blue">if </span>(arr[j] &lt;
                        arr[j+1])<br />
                        &emsp;&emsp;&emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;&emsp;&emsp;<input class="form-control" name="Q7_1A" required
                            style="display: inline; width:230px;" {{old("flag")?'disabled':''}}
                            value="{{old('Q7_1A')}}" />
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[0]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[0]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif;<br />
                        &emsp;&emsp;&emsp;&emsp;&emsp;<input class="form-control" name="Q7_1B" required
                            style="display: inline; width:230px;" {{old("flag")?'disabled':''}}
                            value="{{old('Q7_1B')}}" />
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[1]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[1]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif;<br />
                        &emsp;&emsp;&emsp;&emsp;&emsp;<input class="form-control" name="Q7_1C" required
                            style="display: inline; width:230px;" {{old("flag")?'disabled':''}}
                            value="{{old('Q7_1C')}}" />
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[2]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[2]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif;<br />
                        &emsp;&emsp;&emsp;&emsp;}<br />
                        &emsp;&emsp;&emsp;}<br />
                        &emsp;&emsp;}<br />
                        &emsp;}<br /><br />
                        &emsp;<span class="programming-blue">void </span>
                        <span class="programming-green">printArray</span>(<span class="programming-blue">int
                        </span>arr[])<br />
                        &emsp;{<br />
                        &emsp;&emsp;<span class="programming-blue">int </span>n = arr.length;<br />
                        &emsp;&emsp;<span class="programming-blue">for </span>(<span class="programming-blue">int
                        </span>
                        i = 0; i &lt; n; ++i)<br />
                        &emsp;&emsp;{<br />
                        &emsp;&emsp;&emsp;System.out.<span class="programming-green">print</span>(arr[i] + <span
                            class="programming-green">"&emsp;"</span>);<br />
                        &emsp;&emsp;}<br />
                        &emsp;&emsp;System.out.<span class="programming-green">println</span>();<br />
                        &emsp;}<br /><br />
                        &emsp;<span class="programming-blue">public static void</span>
                        <span class="programming-green">main</span> (String[] args)<br />
                        &emsp;{<br />
                        &emsp;&emsp;Q{{Session::get('counter')}} ob = <span class="programming-blue">new</span> Q{{Session::get('counter')}}();<br />
                        &emsp;&emsp;<span class="programming-blue">int </span>arr[] = {23, 67, 13, 100, 11,
                        98};<br />
                        &emsp;&emsp;ob.sort(arr);<br />
                        &emsp;&emsp;ob.printArray(arr);<br />
                        &emsp;}<br />
                        }
                    </div>
                    @if(Session::has('endResult'))
                    @if(Session::get('endResult')[3][0]!='')
                    <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                        <p class="rounded resultMsg" type='text'
                            style="display: {{old('flag')?'block': 'none' }};color:green;font-family: 'Courier New', Courier, monospace;">
                            <u>The possible answers are:</u><br />
                            {{Session::get('endResult')[3][0]}}<br />
                            {{Session::get('endResult')[3][1]}}<br />
                            {{Session::get('endResult')[3][2]}}<br />
                            OR<br />
                            {{Session::get('endResult')[4][0]}}<br />
                            {{Session::get('endResult')[4][1]}}<br />
                            {{Session::get('endResult')[4][2]}}<br />
                            Your answer is correct if it falls in one of the answer.
                        </p>
                    </div>
                    @endif
                    @endif
                </div>
                @elseif($Qformat==4)
                {{-- code --}}
                <div>
                    <label for=" Q7" class="white-label" style="margin-top: 15px">
                        Please write a program to sort array with Bubble Sort in Java.
                    </label>
                    <textarea class="form-control" rows="30" required name='Q7' {{old("flag")?'disabled':''}}>{{old('Q7')}}
                    </textarea>
                    @if(Session::has('endResult'))
                    <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                        <p class="rounded resultMsg" type='text'
                            style="display: {{old('flag')?'block': 'none' }};color:green;">
                            {{Session::get('endResult')[0]}}<br/>
                            {{Session::get('endResult')[1]}}
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
                onclick="window.location='{{ url("SAMQ7") }}'">
                Next
            </button>
        </div>
    </div>
    <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>
</body>

</html>
