<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous"
        />
        <script
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"
        ></script>
        <style>
            .form-background {
                padding: 50px;
                top: 25px;
                background-color: midnightblue;
                width: 85%;
                margin: auto;
                position: relative;
            }
            .background {
                background-image: url("/images/wooden_bg.jfif");
                background-size: cover;
            }
            .white-label {
                color: white;
            }
            .radio-center {
                width: 30%;
                border-bottom-width: 0;
                border-radius: 0px;
            }
        </style>
    </head>
    <body class="background">
        <form class="form-background">
            <h1 class="white-label">Student Emotion Analysis</h1>
            <p class="white-label">
                The purpose of this survey is to collect data required for my
                Final Year Project (FYP). The project is related to the emotion
                of students while learning and answering questions. The
                objective of the research project is to predict which type of
                teaching method is suitable for the students with their
                respective mood in real-time. For example, when students feel
                bored, the lecturer should use MCQ to make the lecture more
                interesting and hence the students are able to improve their
                learning performance and hence improving their academic
                performance.
            </p>
            <br />
            <div class="form-group">
                <h4 class="white-label">Part 1: Personal Detail</h4>
                <label for="exampleFormControlInput1" class="white-label"
                    >Gender</label
                >
                <div
                    class="form-control"
                    style="width: 10%;border-bottom-width: 0;border-radius: 10px 10px 0px 0px;"
                >
                    <label class="form-check-label" for="male">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="male"
                            name="gender"
                            value="male"
                        />
                        Male
                    </label>
                </div>
                <div
                    class="form-control"
                    style="width: 10%;border-top-width: 0;border-radius: 0px 0px 10px 10px;"
                >
                    <label class="form-check-label" for="female">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="female"
                            name="gender"
                            value="female"
                        />
                        Female
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="race" class="white-label">Race</label>
                <div
                    class="form-control"
                    style="width: 30%;border-bottom-width: 0;border-radius: 10px 10px 0px 0px;"
                >
                    <label class="form-check-label" for="malays">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="malays"
                            name="race"
                            value="malays"
                        />
                        Malays
                    </label>
                </div>
                <div class="form-control radio-center">
                    <label class="form-check-label" for="chinese">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="chinese"
                            name="race"
                            value="chinese"
                        />
                        Chinese
                    </label>
                </div>
                <div class="form-control radio-center">
                    <label class="form-check-label" for="indian">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="indian"
                            name="race"
                            value="indian"
                        />
                        Indian
                    </label>
                </div>
                <div class="input-group radio-center radio-center">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <label class="form-check-label" for="others">
                                <input
                                    class="form-control-input"
                                    type="radio"
                                    id="others"
                                    name="race"
                                    value="others"
                                />
                                Others:
                            </label>
                        </div>
                    </div>
                    <input
                        type="text"
                        class="form-control"
                        id="others-details"
                        name="others-details"
                        disabled
                    />
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="white-label"
                    >Example textarea</label
                >
                <textarea
                    class="form-control"
                    id="exampleFormControlTextarea1"
                    rows="3"
                ></textarea>
            </div>
        </form>
        <script>
            $(document).ready(function() {
                $("input[name=race]").change(function() {
                    var race = $(this).val();

                    if (race == "others") {
                        $("input[name=others-details]").removeAttr("disabled");
                    } else {
                        $("input[name=others-details]").attr("disabled", true);
                    }
                });
            });
        </script>
    </body>
</html>
