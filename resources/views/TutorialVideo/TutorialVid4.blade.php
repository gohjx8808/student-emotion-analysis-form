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

        .background {
            background-image: url("/images/wooden_bg.jfif");
            background-size: cover;
        }

        .white-label {
            color: white;
        }

        .radio-center {
            margin-left: 6.5%;
        }
    </style>
</head>

<body class="background">
    <form class="form-background" action="" method="POST">
        {{ csrf_field() }}
        <h1 class="white-label">Student Emotion Analysis</h1>
        <br />
        <h4 class="white-label">Part 2: SAM Test Pratice Round 4</h4>
        <hr style="background-color:white" />
        <p class="white-label">
            Please watch the video displayed below and select the picturee that best matches your feeling on the next
            page.
        </p>
        <video width="90%" height="50%" autoplay controls style="display:block;margin:0 auto">
            <source src="{{url('/videos/relaxed.mp4')}}" typs="video/mp4">
        </video>
        <div style=" text-align: center;margin-top:20px">
            <button type="button" class="btn btn-primary" style="width:15%"
                onclick="window.location='{{ url("SAMVid4") }}'">
                Next
            </button>
        </div>
    </form>
    <script></script>
</body>

</html>
