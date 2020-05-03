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
            height:900px;
        }

        .background {
            background-image: url("https://firebasestorage.googleapis.com/v0/b/student-emotion-analysis-d61dc.appspot.com/o/wooden_bg.jfif?alt=media&token=9e27ac6a-5944-413e-b058-5d0128f4a7c3");
            background-size: cover;
        }

        .white-label {
            color: white;
            text-align: center;
            font-size: 8rem;
        }

        .radio-center {
            margin-left: 6.5%;
        }

        .rate {
            padding-right: 80px;
        }

        .containerSpacing {
            margin-bottom: 30px;
        }
    </style>
</head>

<body class="background">
    <form class="form-background" action="randomQ" method="POST" id="randomQ">
        {{ csrf_field() }}
        <p class="white-label" id="countdownTimer"></p>
        <audio id="nature1" src="https://firebasestorage.googleapis.com/v0/b/student-emotion-analysis-d61dc.appspot.com/o/nature1.mp3?alt=media&token=b73363b7-b865-4ad7-97c6-b7c7c70501c8"></audio>
        <audio id="nature2" src="https://firebasestorage.googleapis.com/v0/b/student-emotion-analysis-d61dc.appspot.com/o/nature2.mp3?alt=media&token=3548f659-0d15-4bf0-b54d-864df58b07ba"></audio>
    </form>
    <script src="{{asset('js/customRelax.js')}}" type="text/javascript">
    </script>
</body>

</html>
