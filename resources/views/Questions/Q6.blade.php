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
            background-image: url('/images/wooden_bg.jfif');
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
        <form action="Q6/save" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                @if($Qformat!=null)
                {{-- mcq --}}
                @if($Qformat==1)
                <div>
                    <label for=" Q6" class="white-label" style="margin-top: 15px">
                        What is the output of the following program?</label>
                    <div class="programming-bg">
                        <span class="programming-blue">class </span>Base<br />
                        {<br />
                        &emsp;<span class="programming-blue">public void </span>Print()<br />
                        &emsp;{<br />
                        &emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                            class="programming-green">"Base"</span>);<br />
                        &emsp;}<br />
                        }<br /><br />
                        <span class="programming-blue">class </span>Derived<span class="programming-blue"> extends
                        </span>Base<br />
                        {<br />
                        &emsp;<span class="programming-blue">public void </span>Print()<br />
                        &emsp;{<br />
                        &emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                            class="programming-green">"Derived"</span>);<br />
                        &emsp;}<br />
                        }<br /><br />
                        <span class="programming-blue">class </span>Q{{Session::get('counter')}}<br />
                        {<br />
                        &emsp;<span class="programming-blue">public static void</span>
                        <span class="programming-green">DoPrint</span> (Base o)<br />
                        &emsp;{<br />
                        &emsp;&emsp;o.Print();<br />
                        &emsp;}<br />
                        &emsp;<span class="programming-blue">public static void</span>
                        <span class="programming-green">main</span> (String[] args)<br />
                        &emsp;{<br />
                        &emsp;&emsp;Base x = <span class="programming-blue">new</span> Base();<br />
                        &emsp;&emsp;Base y = <span class="programming-blue">new</span> Derived();<br />
                        &emsp;&emsp;Derived z = <span class="programming-blue">new</span> Derived();<br />
                        &emsp;&emsp;DoPrint(x);<br />
                        &emsp;&emsp;DoPrint(y);<br />
                        &emsp;&emsp;DoPrint(z);<br />
                        &emsp;}<br />
                        }
                    </div>
                    <br />
                    <div class="form-control"
                        style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px; height:85px">
                        <input class="form-control-input" type="radio" id="Q6_1a" name="Q6_1" value="a" required"
                            {{old("Q6_1")=='a'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q6_1a" style="padding-left: 15px;">
                            Base<br />Derived<br />Derived
                        </label>
                    </div>
                    <div class="form-control radio-center" style="height:85px">
                        <input class="form-control-input" type="radio" id="Q6_1b" name="Q6_1" value="b"
                            {{old("Q6_1")=='b'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q6_1b" style="padding-left: 15px">
                            Base<br />Derived<br />Base
                        </label>
                    </div>
                    <div class="form-control radio-center" style="height:85px">
                        <input class="form-control-input" type="radio" id="Q6_1c" name="Q6_1" value="c"
                            {{old("Q6_1")=='c'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q6_1c" style="padding-left: 15px">
                            Base<br />Base<br />Derived
                        </label>
                    </div>
                    <div class="form-control" style="border-radius: 0px 0px 10px 10px;">
                        <input class="form-control-input" type="radio" id="Q6_1d" name="Q6_1" value="d"
                            {{old("Q6_1")=='d'?'checked':''}} {{old("flag")?'disabled':''}} />
                        <label class="form-check-label" for="Q6_1d" style="padding-left: 15px">
                            Compiler Error
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
                    <label for="Q6" class="white-label" style="margin-top: 15px">
                        Please select the appropriate algorithm to produce the following output.</label>
                    <p class="programming-bg" style="font-weight:bold">
                        <u>Output:</u><br />Derived<br />Base<br />Derived </p>
                    <div class="programming-bg">
                        <span class="programming-blue">class </span>Base<br />
                        {<br />
                        &emsp;<span class="programming-blue">public void </span>Print()<br />
                        &emsp;{<br />
                        &emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                            class="programming-green">"Base"</span>);<br />
                        &emsp;}<br />
                        }<br /><br />
                        <span class="programming-blue">class </span>Derived<span class="programming-blue"> extends
                        </span>Base<br />
                        {<br />
                        &emsp;<span class="programming-blue">public void </span>Print()<br />
                        &emsp;{<br />
                        &emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                            class="programming-green">"Derived"</span>);<br />
                        &emsp;}<br />
                        }<br /><br />
                        <span class="programming-blue">class </span>Q{{Session::get('counter')}}<br />
                        {<br />
                        &emsp;<span class="programming-blue">public static void</span>
                        <span class="programming-green">DoPrint</span> (Base o)<br />
                        &emsp;{<br />
                        &emsp;&emsp;o.Print();<br />
                        &emsp;}<br />
                        &emsp;<span class="programming-blue">public static void</span>
                        <span class="programming-green">main</span> (String[] args)<br />
                        &emsp;{<br />
                        &emsp;&emsp;Derived x = <span class="programming-blue">new </span><select class="form-control"
                            name="Q6_1A" required style="display: inline; width:130px;" {{old("flag")?'disabled':''}}>
                            <option value="" disabled selected />
                            <option value='Base()' {{old("Q6_1A")=='Base()'?'selected':''}}>Base()</option>
                            <option value='Derived()' {{old("Q6_1A")=='Derived()'?'selected':''}}>Derived()</option>
                        </select>
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[0]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[0]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif;<br />
                        &emsp;&emsp;Base y = <span class="programming-blue">new </span><select class="form-control"
                            name="Q6_1B" required style="display: inline; width:130px;" {{old("flag")?'disabled':''}}>
                            <option value="" disabled selected />
                            <option value='Base()' {{old("Q6_1B")=='Base()'?'selected':''}}>Base()</option>
                            <option value='Derived()' {{old("Q6_1B")=='Derived()'?'selected':''}}>Derived()</option>
                        </select>
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[1]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[1]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif;<br />
                        &emsp;&emsp;Base z = <span class="programming-blue">new </span><select class="form-control"
                            name="Q6_1C" required style="display: inline; width:130px;" {{old("flag")?'disabled':''}}>
                            <option value="" disabled selected />
                            <option value='Base()' {{old("Q6_1C")=='Base()'?'selected':''}}>Base()</option>
                            <option value='Derived()' {{old("Q6_1C")=='Derived()'?'selected':''}}>Derived()</option>
                        </select>
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[2]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[2]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif;<br />
                        &emsp;&emsp;DoPrint(x);<br />
                        &emsp;&emsp;DoPrint(y);<br />
                        &emsp;&emsp;DoPrint(z);<br />
                        &emsp;}<br />
                        }
                    </div>
                </div>
                @elseif($Qformat==3)
                {{-- fill-in-blank --}}
                <div>
                    <label for="Q6" class="white-label" style="margin-top: 15px">
                        Please enter the appropriate algorithm to produce the following output.</label>
                    <p class="programming-bg" style="font-weight:bold">
                        <u>Output:</u><br />Derived<br />Base<br />Derived</p>
                    <div class="programming-bg">
                        <span class="programming-blue">class </span>Base<br />
                        {<br />
                        &emsp;<span class="programming-blue">public void </span>Print()<br />
                        &emsp;{<br />
                        &emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                            class="programming-green">"Base"</span>);<br />
                        &emsp;}<br />
                        }<br /><br />
                        <span class="programming-blue">class </span>Derived<span class="programming-blue"> extends
                        </span>Base<br />
                        {<br />
                        &emsp;<span class="programming-blue">public void </span>Print()<br />
                        &emsp;{<br />
                        &emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                            class="programming-green">"Derived"</span>);<br />
                        &emsp;}<br />
                        }<br /><br />
                        <span class="programming-blue">class </span>Q{{Session::get('counter')}}<br />
                        {<br />
                        &emsp;<span class="programming-blue">public static void</span>
                        <span class="programming-green">DoPrint</span> (Base o)<br />
                        &emsp;{<br />
                        &emsp;&emsp;o.Print();<br />
                        &emsp;}<br />
                        &emsp;<span class="programming-blue">public static void</span>
                        <span class="programming-green">main</span> (String[] args)<br />
                        &emsp;{<br />
                        &emsp;&emsp;Derived x = <span class="programming-blue">new </span>
                        <input class="form-control" name="Q6_1A" required style="display: inline; width:130px;"
                            {{old("flag")?'disabled':''}} value="{{old('Q6_1A')}}" />
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[0]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[0]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif;<br />
                        &emsp;&emsp;Base y = <span class="programming-blue">new </span>
                        <input class="form-control" name="Q6_1B" required style="display: inline; width:130px;"
                            {{old("flag")?'disabled':''}} value="{{old('Q6_1B')}}" />
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[1]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[1]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif;<br />
                        &emsp;&emsp;Base z = <span class="programming-blue">new </span>
                        <input class="form-control" name="Q6_1C" required style="display: inline; width:130px;"
                            {{old("flag")?'disabled':''}} value="{{old('Q6_1C')}}" />
                        @if(Session::has('endResult'))
                        <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                            <ion-icon name="{{Session::get('endResult')[2]?'checkmark-circle':'close-circle'}}"
                                style="color: {{Session::get('endResult')[2]?'green':'red'}};"></ion-icon>
                        </div>
                        @endif;<br />
                        &emsp;&emsp;DoPrint(x);<br />
                        &emsp;&emsp;DoPrint(y);<br />
                        &emsp;&emsp;DoPrint(z);<br />
                        &emsp;}<br />
                        }
                    </div>
                </div>
                @elseif($Qformat==4)
                {{-- code --}}
                <div>
                    <label for="Q6" class="white-label" style="margin-top: 15px">
                        Please write the remaining short codes to produce the following output.</label>
                    <p class="programming-bg" style="font-weight:bold">
                        <u>Output:</u><br />Base<br />Derived<br />Derived</p>
                    <div class="programming-bg">
                        <span class="programming-blue">class </span>Base<br />
                        {<br />
                        &emsp;<span class="programming-blue">public void </span>Print()<br />
                        &emsp;{<br />
                        &emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                            class="programming-green">"Base"</span>);<br />
                        &emsp;}<br />
                        }<br /><br />
                        <span class="programming-blue">class </span>Derived<span class="programming-blue"> extends
                        </span>Base<br />
                        {<br />
                        &emsp;<span class="programming-blue">public void </span>Print()<br />
                        &emsp;{<br />
                        &emsp;&emsp;System.out.<span class="programming-green">println</span>(<span
                            class="programming-green">"Derived"</span>);<br />
                        &emsp;}<br />
                        }<br /><br />
                        <span class="programming-blue">class </span>Q{{Session::get('counter')}}<br />
                        {<br />
                        &emsp;<span class="programming-blue">public static void</span>
                        <span class="programming-green">DoPrint</span> (Base o)<br />
                        &emsp;{<br />
                        &emsp;&emsp;o.Print();<br />
                        &emsp;}<br />
                        &emsp;<span class="programming-blue">public static void</span>
                        <span class="programming-green">main</span> (String[] args)<br />
                        &emsp;{
                        &emsp;&emsp;<textarea class="form-control" rows="10" required name='Q6'
                            {{old("flag")?'disabled':''}}>{{old('Q6')}}
                        </textarea>
                        &emsp;}<br />
                        }
                    </div>
                    @if(Session::has('endResult'))
                    <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                        <p class="rounded resultMsg" type='text'
                            style="display: {{old('flag')?'block': 'none' }};color:green;">
                            <u>The answer is:</u><br />
                            {{Session::get('endResult')[0]}}<br />
                            {{Session::get('endResult')[1]}}<br />
                            {{Session::get('endResult')[2]}}<br />
                            {{Session::get('endResult')[3]}}<br />
                            {{Session::get('endResult')[4]}}<br />
                            {{Session::get('endResult')[5]}}
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
                onclick="window.location='{{ url("SAMQ6") }}'">
                Next
            </button>
        </div>
    </div>
    <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>
</body>

</html>
