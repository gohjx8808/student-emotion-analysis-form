<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:image" content="/var/www/website/public/website.jpg">
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
            background-image: url('/images/wooden_bg.jfif');
            background-size: cover;
        }

        .white-label {
            color: white;
        }

        .radio-center {
            margin-left: 7%;
        }
    </style>
</head>

<body class="background">
    <form class="form-background" action="" method="POST">
        {{ csrf_field() }}
        <h1 class="white-label">Student Emotion Analysis</h1>
        <br />
        <p class="white-label" style="font-size:20px">
            Welcome to my emotion experiment!
        </p>
        <p class="white-label" style="font-size:20px">
            I'm Goh Jing Xuan, a final year student from the faculty of Computer
            Science, majoring in Artificial Intelligence (AI).
        </p>
        <p class="white-label" style="font-size:20px">
            The purpose of this experiment is to collect data required for my
            Final Year Project (FYP). The project is related to the emotion
            of students while learning and answering questions. The
            objective of the research project is to predict which type of
            teaching method is suitable for the students with their
            respective mood in real-time. The outcome of this study will facilitate both teachers and students to have
            an
            improved teaching and learning experience
        </p>
        <p class="white-label" style="font-size:20px">
            This experiment consists of 3 sections. <br /><u>Section 1</u><br />You are required to fill in your
            personal information.<br /><u>Section 2</u><br />- You will be given some videos as guidance on how to
            answer the Self-Assessment Manikin(SAM) test to best describe your emotion at that time.<br />- You will
            also be given one test run of the actual experiment so that you are familiar to the experiment.<br />- You
            are required to answer 10 programming questions with different topics and formats.<br />- After each
            question, you are required to record your emotion using the metrics provided, SAM test.<br />- While you are
            filling up the SAM test, you will be given 15 seconds of nature sound to calm your emotion.<br />
            <u>Section 3</u><br />You are required to fill in the post-experiment survey form for feedbacks and reviews
            regarding the experiment.<br />
        </p>
        <span style="color:yellow; font-size:20px;">Note:<br />- This experiment is conducted anonymously, so please
            provide the accurate information. <br />- Please wear your earphone for higher accuracy and better
            experience.<br />- For the coding questions, please try your best, any coding representation will do.
            (pseudocode, code, any flowchart or mind chart).<br/>- This experiment will take around 20 minutes, please have enough time to do so.<br/><br/>
        </span>
        <p class="white-label" style="font-size:20px">
            Thank you for you time and attention. Good luck and have a nice day!
        </p>
        <div style="text-align: center; margin-top:50px">
            <button type="button" class="btn btn-primary" style="width:15%" id='submit'
                onClick="window.location='{{url("personalDetail")}}'">
                Next
            </button>
        </div>
    </form>
</body>

</html>
