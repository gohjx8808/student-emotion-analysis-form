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
            border-bottom-width: 0;
            border-radius: 0px;
        }
    </style>
</head>

<body class="background">
    <form class="form-background" action="personaldetail/post" method="POST">
        {{ csrf_field() }}
        <h1 class="white-label">Student Emotion Analysis</h1>
        <p class="white-label">
            The purpose of this survey is to collect data required for my
            Final Year Project (FYP). The project is related to the emotion
            of students while learning and answering questions. The
            objective of the research project is to predict which type of
            teaching method is suitable for the students with their
            respective mood in real-time. For example, when students feel
            bored, the lecturer should use MCQ to make the lecture more
            interesting so the students are able to improve their learning
            performance and hence improving their academic performance.
        </p>
        <br />
        <h4 class="white-label">Part 1: Personal Detail</h4>
        <hr style="background-color: white" />
        <div class="form-group">
            <label for="gender" class="white-label">Gender</label>
            <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                <label class="form-check-label" for="male">
                    <input class="form-control-input" type="radio" id="male" name="gender" value="male" required />
                    Male
                </label>
            </div>
            <div class="form-control" style="border-top-width: 0;border-radius: 0px 0px 10px 10px;">
                <label class="form-check-label" for="female">
                    <input class="form-control-input" type="radio" id="female" name="gender" value="female" />
                    Female
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="age" class="white-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" placeholder="Please enter your age"
                required />
        </div>
        <div class="form-group">
            <label for="nationality" class="white-label">Nationality</label>
            <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                <label class="form-check-label" for="malaysian">
                    <input class="form-control-input" type="radio" id="malaysian" name="nationality" value="malaysian"
                        required />
                    Malaysian
                </label>
            </div>
            <div class="input-group radio-center radio-center">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <label class="form-check-label" for="international">
                            <input class="form-control-input" type="radio" id="international" name="nationality"
                                value="international" />
                            International:
                        </label>
                    </div>
                </div>
                <input type="text" class="form-control" id="international" name="international" disabled
                    placeholder="Please enter your nationality" />
            </div>
        </div>
        <div class="form-group">
            <label for="race" class="white-label">Race</label>
            <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                <label class="form-check-label" for="malays">
                    <input class="form-control-input" type="radio" id="malays" name="race" value="malays" required />
                    Malays
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="chinese">
                    <input class="form-control-input" type="radio" id="chinese" name="race" value="chinese" />
                    Chinese
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="indian">
                    <input class="form-control-input" type="radio" id="indian" name="race" value="indian" />
                    Indian
                </label>
            </div>
            <div class="input-group radio-center radio-center">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <label class="form-check-label" for="others-race">
                            <input class="form-control-input" type="radio" id="others-race" name="race"
                                value="others-race" />
                            Others:
                        </label>
                    </div>
                </div>
                <input type="text" class="form-control" id="others-race" name="others-race" disabled />
            </div>
        </div>
        <div class="form-group">
            <label for="major" class="white-label">Major</label>
            <select class="form-control" id="major" name="major" required>
            </select>
        </div>
        <div class="form-group">
            <label for="year" class="white-label">Year of study</label>
            <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                <label class="form-check-label" for="1st">
                    <input class="form-control-input" type="radio" id="1st" name="year_study" value="1st-year"
                        required />
                    1st year
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="2nd">
                    <input class="form-control-input" type="radio" id="2nd" name="year_study" value="2nd-year" />
                    2nd year
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="3rd">
                    <input class="form-control-input" type="radio" id="3rd" name="year_study" value="3rd-year" />
                    3rd year
                </label>
            </div>
            <div class="form-control" style="border-top-width: 0;border-radius: 0px 0px 10px 10px;">
                <label class="form-check-label" for="final">
                    <input class="form-control-input" type="radio" id="final" name="year_study" value="final-year" />
                    Final year
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="duration" class="white-label">Years of experience in computer programming</label>
            <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                <label class="form-check-label" for="less-1year">
                    <input required class="form-control-input" type="radio" id="less-1year" name="programming_duration"
                        value="less_than_1_year" />
                    1 year or less
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="2year">
                    <input class="form-control-input" type="radio" id="2year" name="programming_duration"
                        value="2year" />
                    2 years
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="3year">
                    <input class="form-control-input" type="radio" id="3year" name="programming_duration"
                        value="3year" />
                    3 years
                </label>
            </div>
            <div class="form-control" style="border-top-width: 0;border-radius: 0px 0px 10px 10px;">
                <label class="form-check-label" for="more 3year">
                    <input class="form-control-input" type="radio" id="more 3year" name="programming_duration"
                        value="more_than_3_year" />
                    More than 3 years
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="FOPgrade" class="white-label">Grade for Fundamental of Programming (FOP)</label>
            <select class="form-control" id="FOPgrade" name="FOPgrade" required></select>
        </div>
        <div class="form-group">
            <label for="firstLanguage" class="white-label">What language did you first learn to program?
            </label>
            <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                <label class="form-check-label" for="Java">
                    <input required class="form-control-input" type="radio" id="Java" name="firstLanguage"
                        value="Java" />
                    Java
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="C">
                    <input class="form-control-input" type="radio" id="C" name="firstLanguage" value="C" />
                    C
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="C++">
                    <input class="form-control-input" type="radio" id="C++" name="firstLanguage" value="C++" />
                    C++
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="Python">
                    <input class="form-control-input" type="radio" id="Python" name="firstLanguage" value="Python" />
                    Python
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="Javascript">
                    <input class="form-control-input" type="radio" id="Javascript" name="firstLanguage"
                        value="Javascript" />
                    Javascript
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="PHP">
                    <input class="form-control-input" type="radio" id="PHP" name="firstLanguage" value="PHP" />
                    PHP
                </label>
            </div>
            <div class="input-group radio-center radio-center">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <label class="form-check-label" for="others-language">
                            <input class="form-control-input" type="radio" id="others-language" name="firstLanguage"
                                value="others-language" />
                            Others:
                        </label>
                    </div>
                </div>
                <input type="text" class="form-control" id="others-languages" name="others-languages" disabled />
            </div>
        </div>
        <div class="form-group">
            <label for="programmingRate" class="white-label">How would you rate your overall programming
                expertise?</label>
            <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                <label class="form-check-label" for="novice">
                    <input required class="form-control-input" type="radio" id="novice" name="programmingRate"
                        value="novice" />
                    Novice
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="intermediate">
                    <input class="form-control-input" type="radio" id="intermediate" name="programmingRate"
                        value="intermediate" />
                    Intermediate
                </label>
            </div>
            <div class="form-control" style="border-top-width: 0;border-radius: 0px 0px 10px 10px;">
                <label class="form-check-label" for="expert">
                    <input class="form-control-input" type="radio" id="expert" name="programmingRate" value="expert" />
                    Expert
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="languageAmount" class="white-label">How many programming languages have you learned?</label>
            <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                <label class="form-check-label" for="1language">
                    <input required class="form-control-input" type="radio" id="1language" name="languageAmount"
                        value="1language" />
                    1
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="2language">
                    <input class="form-control-input" type="radio" id="2language" name="languageAmount"
                        value="2language" />
                    2
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="3language">
                    <input class="form-control-input" type="radio" id="3language" name="languageAmount"
                        value="3language" />
                    3
                </label>
            </div>
            <div class="form-control" style="border-top-width: 0;border-radius: 0px 0px 10px 10px;">
                <label class="form-check-label" for="more-3language">
                    <input class="form-control-input" type="radio" id="more-3language" name="languageAmount"
                        value="more_than_3_language" />
                    More than 3
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="white-label">Please rate from your perspective the following statements about learning a
                programming language.</label>
            <table class="table table-hover" style="background-color: white; border-radius:5px">
                <thead>
                    <tr>
                        <th scope="col">Item</th>
                        <th scope="col">Questions</th>
                        <th scope="col">Strongly Disagree</th>
                        <th scope="col">Disagree</th>
                        <th scope="col">Neutral</th>
                        <th scope="col">Agree</th>
                        <th scope="col">Strongly Agree</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>It is too difficult to remember the syntax</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P1-difficultSyntax"
                                value="stronglyDisagree" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P1-difficultSyntax" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P1-difficultSyntax" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P1-difficultSyntax" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P1-difficultSyntax"
                                value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>I do not understand the logic of the programming.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P2-noLogic" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P2-noLogic" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P2-noLogic" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P2-noLogic" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P2-noLogic" value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>The materials for learning do not provide suitable examples.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P3-noExample" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P3-noExample" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P3-noExample" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P3-noExample" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P3-noExample" value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>It requires certain skills that I do not have.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P4-noSkill" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P4-noSkill" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P4-noSkill" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P4-noSkill" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P4-noSkill" value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>It is not enough interesting, exciting, or provoking for me.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P5-notInteresting"
                                value="stronglyDisagree" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P5-notInteresting" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P5-notInteresting" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P5-notInteresting" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P5-notInteresting"
                                value="stronglyAgree" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <label class="white-label">How do you generally feel while programming?</label>
            <table class="table table-hover" style="background-color: white; border-radius:5px">
                <thead>
                    <tr>
                        <th scope="col">Item</th>
                        <th scope="col">Questions</th>
                        <th scope="col">Strongly Disagree</th>
                        <th scope="col">Disagree</th>
                        <th scope="col">Neutral</th>
                        <th scope="col">Agree</th>
                        <th scope="col">Strongly Agree</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Bored</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F1-bored" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F1-bored" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F1-bored" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F1-bored" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F1-bored" value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Happy</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F2-happy" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F2-happy" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F2-happy" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F2-happy" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F2-happy" value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Frustrated</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F3-frustrated" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F3-frustrated" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F3-frustrated" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F3-frustrated" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F3-frustrated" value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Relaxed</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F4-relaxed" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F4-relaxed" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F4-relaxed" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F4-relaxed" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F4-relaxed" value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Enthusiastic</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F5-enthusiastic" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F5-enthusiastic" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F5-enthusiastic" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F5-enthusiastic" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F5-enthusiastic" value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Idle</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F6-idle" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F6-idle" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F6-idle" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F6-idle" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F6-idle" value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Excited</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F7-excited" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F7-excited" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F7-excited" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F7-excited" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F7-excited" value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Dissatisfied</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F8-dissatisfied" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F8-dissatisfied" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F8-dissatisfied" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F8-dissatisfied" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F8-dissatisfied" value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>Motivated</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F9-motivated" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F9-motivated" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F9-motivated" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F9-motivated" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F9-motivated" value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Focused</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F10-focused" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F10-focused" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F10-focused" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F10-focused" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F10-focused" value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>Stressful</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F11-stressful" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F11-stressful" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F11-stressful" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F11-stressful" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F11-stressful" value="stronglyAgree" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <label class="white-label">How do you generally approach a programming task? Please rate the following
                statements.</label>
            <table class="table table-hover" style="background-color: white; border-radius:5px">
                <thead>
                    <tr>
                        <th scope="col">Item</th>
                        <th scope="col">Questions</th>
                        <th scope="col">Strongly Disagree</th>
                        <th scope="col">Disagree</th>
                        <th scope="col">Neutral</th>
                        <th scope="col">Agree</th>
                        <th scope="col">Strongly Agree</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>I usually use tutorials and examples.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A1-tutorial" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A1-tutorial" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A1-tutorial" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A1-tutorial" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A1-tutorial" value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>I focus on the coding with all my attention.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A2-fullAttention" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A2-fullAttention" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A2-fullAttention" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A2-fullAttention" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A2-fullAttention" value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>I like to finish my coding task as soon as possible.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A3-ASAP" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A3-ASAP" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A3-ASAP" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A3-ASAP" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A3-ASAP" value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>I get distracted easily by other stimuli.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A4-distractedEasily" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A4-distractedEasily" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A4-distractedEasily" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A4-distractedEasily" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A4-distractedEasily" value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>I am usually interested and curious about the coding I am writing.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A5-curious" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A5-curious" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="curious" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A5-curious" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A5-curious" value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>I usually lose the notion of time when coding.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A6-veryFocus" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A6-veryFocus" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A6-veryFocus" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A6-veryFocus" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A6-veryFocus" value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>I like to code challenging problems.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A7-likeChallenging" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A7-likeChallenging" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A7-likeChallenging" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A7-likeChallenging" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A7-likeChallenging" value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>I am not sure whether my code is producing the right result.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A8-doubt" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A8-doubt" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A8-doubt" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A8-doubt" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A8-doubt" value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>I like to learn and try new things when coding.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A9-learnNewThings" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A9-learnNewThings" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A9-learnNewThings" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A9-learnNewThings" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A9-learnNewThings" value="stronglyAgree" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>I finish the coding when I have given all my best.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A10-giveTheBest" value="stronglyDisagree"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A10-giveTheBest" value="disagree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A10-giveTheBest" value="neutral" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A10-giveTheBest" value="agree" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A10-giveTheBest" value="stronglyAgree" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="text-align: center;">
            <button type="submit" class="btn btn-primary" style="width:15%" id='submit'>
                Next
            </button>
        </div>
    </form>
    <script>
        var majors = [
                { name: "Artificial Intelligence", value: "AI" },
                { name: "Software Engineering", value: "SE" },
                { name: "Computer System and Network", value: "NET" },
                { name: "Mutimedia", value: "MUL" },
                { name: "Information Systems", value: "IS" },
                { name: "Data Science", value: "DS" }
            ];

            var grades = [
                { name: "A", value: "A" },
                { name: "A-", value: "A-" },
                { name: "B+", value: "B+" },
                { name: "B", value: "B" },
                { name: "B-", value: "B-" },
                { name: "C+", value: "C+" },
                { name: "C", value: "C" },
                { name: "D", value: "D" },
                { name: "D-", value: "D-" },
                { name: "E", value: "E" },
                { name: "F", value: "F" }
            ];

            $(document).ready(function() {

                $("input[name=nationality]").on("change", function() {
                    var race = $(this).val();
                    if (race == "international") {
                        $("input[name=international]").removeAttr("disabled");
                    } else {
                        $("input[name=international]").attr("disabled", true);
                    }
                });

                $("input[name=race]").on("change", function() {
                    var race = $(this).val();
                    if (race == "others-race") {
                        $("input[name=others-race]").removeAttr("disabled");
                    } else {
                        $("input[name=others-race]").attr("disabled", true);
                    }
                });

                $("input[name=firstLanguage]").on("change", function() {
                    var language = $(this).val();
                    if (language == "others-language") {
                        $("input[name=others-languages]").removeAttr(
                            "disabled"
                        );
                    } else {
                        $("input[name=others-languages]").attr(
                            "disabled",
                            true
                        );
                    }
                });

                let majorSelect = $("#major");
                majorSelect.append(
                    '<option selected="true" value="" disabled>Please select your major</option>'
                );
                $.each(majors, function(key, major) {
                    majorSelect.append(
                        $("<option></option>")
                            .attr("value", major.value)
                            .text(major.name)
                    );
                });

                let gradeDropdown = $("#FOPgrade");
                gradeDropdown.append(
                    '<option selected="true" value="" disabled>Please select your grade</option>'
                );
                $.each(grades, function(key, grade) {
                    gradeDropdown.append(
                        $("<option></option>")
                            .attr("value", grade.value)
                            .text(grade.name)
                    );
                });
            });
    </script>
</body>

</html>
