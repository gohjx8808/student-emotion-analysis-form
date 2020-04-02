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
            color: darkblue;
        }

        .programming-purple {
            font-weight: bold;
            color: darkviolet;
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
                {{-- <div>
                    <label for=" Q1" class="white-label" style="margin-top: 15px">
                        What will be the output of the following program?</label>
                    <div class="programming-bg">
                        <p>
                            <span class="programming-blue">class</span>
                            <span class="programming-purple">OperatorsOutput</span><br />
                            {<br />
                            &emsp;<span class="programming-blue">public static void</span> main(
                            <span class="programming-purple">String</span> s[])<br />
                            &emsp;{<br />
                            &emsp;&emsp;int a = 12 + 21 * 3 - 9 / 2;<br />
                            &emsp;&emsp;int b = 14 - 32 * 4 + 175 / 8 - 3;<br />
                            &emsp;&emsp;if(++a > 71 && --b
                            < 20) <br />
                            &emsp;&emsp;{ <br />
                            &emsp;&emsp;&emsp;System.out.println("a=" + a + " b=" + b);<br />
                            &emsp;&emsp;}<br />
                            &emsp;&emsp;if(b-- == -97 || a--
                            < 100)<br />
                            &emsp;&emsp;{<br />
                            &emsp;&emsp;&emsp;System.out.println(" a=" + a + " b=" + b);<br />
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
                    a = 72 b = -98
                </label>
            </div>
            <div class="form-control radio-center" style="height:60px;">
                <input class="form-control-input" type="radio" id="Q1_1b" name="Q1_1" value="b"
                    {{old("Q1_1")=='b'?'checked':''}} {{old("flag")?'disabled':''}} />
                <label class="form-check-label" for="Q1_1b" style="padding-left: 15px">
                    a = 72 b = -97<br />
                    a = 71 b = -98
                </label>
            </div>
            <div class="form-control radio-center">
                <input class="form-control-input" type="radio" id="Q1_1c" name="Q1_1" value="c"
                    {{old("Q1_1")=='c'?'checked':''}} {{old("flag")?'disabled':''}} />
                <label class="form-check-label" for="Q1_1c" style="padding-left: 15px">
                    Compilation Error
                </label>
            </div>
            <div class="form-control" style="border-radius: 0px 0px 10px 10px;height:60px;">
                <input class="form-control-input" type="radio" id="Q1_1d" name="Q1_1" value="d"
                    {{old("Q1_1")=='d'?'checked':''}} {{old("flag")?'disabled':''}} />
                <label class="form-check-label" for="Q1_1d" style="padding-left: 15px">
                    a = 72 b = -97<br />
                    a = 72 b = -98
                </label>
            </div>
            @if(Session::has('endResult'))
            <p class="rounded resultMsg" type='text'
                style="display: {{old('flag')?'block': 'none' }};color: {{Session::get('endResult')[0][2]?'green':'red'}}" />
            {{Session::get('endResult')[0][0]}}<br />{{Session::get('endResult')[0][1]}}
            </p>
            @endif
    </div> --}}
    <div>
        <label for=" Q1" class="white-label" style="margin-top: 15px">
            Please select the arithmetic operation that will produce the following output.</label>
        <p class="programming-bg" style="font-weight:bold">Output: a = 72 b = -97</p>
        <div class="programming-bg">
            <div>
                <span class="programming-blue">class</span>
                <span class="programming-purple">OperatorsOutput</span><br />
                {<br />
                &emsp;<span class="programming-blue">public static void</span> main(
                <span class="programming-purple">String</span> s[])<br />
                &emsp;{<br />
                &emsp;&emsp;int a = 12 + 21 * 3 - 9 / 2;<br />
                &emsp;&emsp;int b = 14 - 32 * 4 + 175 / 8 - 3;<br />
                &emsp;&emsp;if(++a <select class="form-control" name="Q1_1A" required
                    style="display: inline; width:120px;height:30px" {{old("flag")?'disabled':''}}>
                    <option value="" disabled selected>select</option>
                    <option value='==' {{old("Q1_1A")=='=='?'selected':''}}>==</option>
                    <option value='<' {{old("Q1_1A")=='<'?'selected':''}}>
                        <</option> <option value='>' {{old("Q1_1A")=='>'?'selected':''}}>>
                    </option>
                    <option value='!=' {{old("Q1_1A")=='!='?'selected':''}}>!=</option>
                </select>
                @if(Session::has('endResult'))
                <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                    <ion-icon name="{{Session::get('endResult')[0]?'checkmark-circle':'close-circle'}}"
                        style="color: {{Session::get('endResult')[0]?'green':'red'}};"></ion-icon>
                </div>
                @endif
                71 && --b
                <select class="form-control" name="Q1_1B" required style="display: inline; width:120px;height:30px"
                    {{old("flag")?'disabled':''}}>
                    <option value="" disabled selected>select</option>
                    <option value='==' {{old("Q1_1B")=='=='?'selected':''}}>==</option>
                    <option value='<' {{old("Q1_1B")=='<'?'selected':''}}>
                        <</option> <option value='>' {{old("Q1_1B")=='>'?'selected':''}}>>
                    </option>
                    <option value='!=' {{old("Q1_1B")=='!='?'selected':''}}>!=</option>
                </select>
                @if(Session::has('endResult'))
                <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                    <ion-icon name="{{Session::get('endResult')[1]?'checkmark-circle':'close-circle'}}"
                        style="color: {{Session::get('endResult')[1]?'green':'red'}};"></ion-icon>
                </div>
                @endif
                20) <br />
                &emsp;&emsp;{ <br />
                &emsp;&emsp;&emsp;System.out.println("a=" + a + " b=" + b);<br />
                &emsp;&emsp;}<br />
                &emsp;&emsp;if(b--
                <select class="form-control" name="Q1_1C" required style="display: inline; width:120px;height:30px"
                    {{old("flag")?'disabled':''}}>
                    <option value="" disabled selected>select</option>
                    <option value='==' {{old("Q1_1C")=='=='?'selected':''}}>==</option>
                    <option value='<' {{old("Q1_1C")=='<'?'selected':''}}>
                        <</option> <option value='>' {{old("Q1_1C")=='>'?'selected':''}}>>
                    </option>
                    <option value='!=' {{old("Q1_1C")=='!='?'selected':''}}>!=</option>
                </select>
                @if(Session::has('endResult'))
                <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                    <ion-icon name="{{Session::get('endResult')[2]?'checkmark-circle':'close-circle'}}"
                        style="color: {{Session::get('endResult')[2]?'green':'red'}};"></ion-icon>
                </div>
                @endif
                -97 ||
                a--
                <select class="form-control" name="Q1_1D" required style="display: inline; width:120px;height:30px" {{old("flag")?'disabled':''}}>
                    <option value="" disabled selected>select</option>
                    <option value='==' {{old("Q1_1D")=='=='?'selected':''}}>==</option>
                    <option value='<' {{old("Q1_1D")=='<'?'selected':''}}>
                        <</option> <option value='>' {{old("Q1_1D")=='>'?'selected':''}}>>
                    </option>
                    <option value='!=' {{old("Q1_1D")=='!='?'selected':''}}>!=</option>
                </select>
                @if(Session::has('endResult'))
                <div class="rounded" type='text' style="display: {{old('flag')?'inline': 'none' }};">
                    <ion-icon name="{{Session::get('endResult')[3]?'checkmark-circle':'close-circle'}}"
                        style="color: {{Session::get('endResult')[3]?'green':'red'}};"></ion-icon>
                </div>
                @endif
                100)<br />
                &emsp;&emsp;{<br />
                &emsp;&emsp;&emsp;System.out.println(" a=" + a + " b=" + b);<br />
                &emsp;&emsp;}<br />
                &emsp;}<br />
                }
                </p>
            </div>
        </div>
    </div>
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
