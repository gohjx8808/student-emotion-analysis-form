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
        <form
            class="form-background"
            action="personaldetail/post"
            method="POST"
        >
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
            <div class="form-group">
                <label for="gender" class="white-label">Gender</label>
                <div
                    class="form-control"
                    style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;"
                >
                    <label class="form-check-label" for="male">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="male"
                            name="gender"
                            value="male"
                            required
                        />
                        Male
                    </label>
                </div>
                <div
                    class="form-control"
                    style="border-top-width: 0;border-radius: 0px 0px 10px 10px;"
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
                <label for="age" class="white-label">Age</label>
                <input
                    type="number"
                    class="form-control"
                    id="age"
                    name="age"
                    placeholder="Please enter your age"
                    required
                />
            </div>
            <div class="form-group">
                <label for="race" class="white-label">Race</label>
                <div
                    class="form-control"
                    style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;"
                >
                    <label class="form-check-label" for="malays">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="malays"
                            name="race"
                            value="malays"
                            required
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
                            <label class="form-check-label" for="others-race">
                                <input
                                    class="form-control-input"
                                    type="radio"
                                    id="others-race"
                                    name="race"
                                    value="others-race"
                                />
                                Others:
                            </label>
                        </div>
                    </div>
                    <input
                        type="text"
                        class="form-control"
                        id="others-race"
                        name="others-race"
                        disabled
                    />
                </div>
            </div>
            <div class="form-group">
                <label for="major" class="white-label">Major</label>
                <select class="form-control" id="major" name="major" required>
                </select>
            </div>
            <div class="form-group">
                <label for="year" class="white-label">Year of study</label>
                <div
                    class="form-control"
                    style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;"
                >
                    <label class="form-check-label" for="1st">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="1st"
                            name="year_study"
                            value="1st-year"
                            required
                        />
                        1st year
                    </label>
                </div>
                <div class="form-control radio-center">
                    <label class="form-check-label" for="2nd">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="2nd"
                            name="year_study"
                            value="2nd-year"
                        />
                        2nd year
                    </label>
                </div>
                <div class="form-control radio-center">
                    <label class="form-check-label" for="3rd">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="3rd"
                            name="year_study"
                            value="3rd-year"
                        />
                        3rd year
                    </label>
                </div>
                <div
                    class="form-control"
                    style="border-top-width: 0;border-radius: 0px 0px 10px 10px;"
                >
                    <label class="form-check-label" for="final">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="final"
                            name="year_study"
                            value="final-year"
                        />
                        Final year
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="duration" class="white-label"
                    >Years of experience in computer programming</label
                >
                <div
                    class="form-control"
                    style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;"
                >
                    <label class="form-check-label" for="less-1year">
                        <input
                            required
                            class="form-control-input"
                            type="radio"
                            id="less-1year"
                            name="programming_duration"
                            value="less_than_1_year"
                        />
                        1 year or less
                    </label>
                </div>
                <div class="form-control radio-center">
                    <label class="form-check-label" for="2year">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="2year"
                            name="programming_duration"
                            value="2year"
                        />
                        2 years
                    </label>
                </div>
                <div class="form-control radio-center">
                    <label class="form-check-label" for="3year">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="3year"
                            name="programming_duration"
                            value="3year"
                        />
                        3 years
                    </label>
                </div>
                <div
                    class="form-control"
                    style="border-top-width: 0;border-radius: 0px 0px 10px 10px;"
                >
                    <label class="form-check-label" for="more 3year">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="more 3year"
                            name="programming_duration"
                            value="more_than_3_year"
                        />
                        More than 3 years
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="FOPgrade" class="white-label"
                    >Grade for Fundamental of Programming (FOP)</label
                >
                <select
                    class="form-control"
                    id="FOPgrade"
                    name="FOPgrade"
                    required
                ></select>
            </div>
            <div class="form-group">
                <label for="firstLanguage" class="white-label"
                    >What language did you first learn to program?
                </label>
                <div
                    class="form-control"
                    style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;"
                >
                    <label class="form-check-label" for="Java">
                        <input
                            required
                            class="form-control-input"
                            type="radio"
                            id="Java"
                            name="firstLanguage"
                            value="Java"
                        />
                        Java
                    </label>
                </div>
                <div class="form-control radio-center">
                    <label class="form-check-label" for="C">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="C"
                            name="firstLanguage"
                            value="C"
                        />
                        C
                    </label>
                </div>
                <div class="form-control radio-center">
                    <label class="form-check-label" for="C++">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="C++"
                            name="firstLanguage"
                            value="C++"
                        />
                        C++
                    </label>
                </div>
                <div class="form-control radio-center">
                    <label class="form-check-label" for="Python">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="Python"
                            name="firstLanguage"
                            value="Python"
                        />
                        Python
                    </label>
                </div>
                <div class="form-control radio-center">
                    <label class="form-check-label" for="Javascript">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="Javascript"
                            name="firstLanguage"
                            value="Javascript"
                        />
                        Javascript
                    </label>
                </div>
                <div class="form-control radio-center">
                    <label class="form-check-label" for="PHP">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="PHP"
                            name="firstLanguage"
                            value="PHP"
                        />
                        PHP
                    </label>
                </div>
                <div class="input-group radio-center radio-center">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <label
                                class="form-check-label"
                                for="others-language"
                            >
                                <input
                                    class="form-control-input"
                                    type="radio"
                                    id="others-language"
                                    name="firstLanguage"
                                    value="others-language"
                                />
                                Others:
                            </label>
                        </div>
                    </div>
                    <input
                        type="text"
                        class="form-control"
                        id="others-languages"
                        name="others-languages"
                        disabled
                    />
                </div>
            </div>
            <div class="form-group">
                <label for="programmingRate" class="white-label"
                    >How would you rate your overall programming
                    expertise?</label
                >
                <div
                    class="form-control"
                    style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;"
                >
                    <label class="form-check-label" for="novice">
                        <input
                            required
                            class="form-control-input"
                            type="radio"
                            id="novice"
                            name="programmingRate"
                            value="novice"
                        />
                        Novice
                    </label>
                </div>
                <div class="form-control radio-center">
                    <label class="form-check-label" for="intermediate">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="intermediate"
                            name="programmingRate"
                            value="intermediate"
                        />
                        Intermediate
                    </label>
                </div>
                <div
                    class="form-control"
                    style="border-top-width: 0;border-radius: 0px 0px 10px 10px;"
                >
                    <label class="form-check-label" for="expert">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="expert"
                            name="programmingRate"
                            value="expert"
                        />
                        Expert
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="languageAmount" class="white-label"
                    >How many programming languages have you learned?</label
                >
                <div
                    class="form-control"
                    style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;"
                >
                    <label class="form-check-label" for="1language">
                        <input
                            required
                            class="form-control-input"
                            type="radio"
                            id="1language"
                            name="languageAmount"
                            value="1language"
                        />
                        1
                    </label>
                </div>
                <div class="form-control radio-center">
                    <label class="form-check-label" for="2language">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="2language"
                            name="languageAmount"
                            value="2language"
                        />
                        2
                    </label>
                </div>
                <div class="form-control radio-center">
                    <label class="form-check-label" for="3language">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="3language"
                            name="languageAmount"
                            value="3language"
                        />
                        3
                    </label>
                </div>
                <div
                    class="form-control"
                    style="border-top-width: 0;border-radius: 0px 0px 10px 10px;"
                >
                    <label class="form-check-label" for="more-3language">
                        <input
                            class="form-control-input"
                            type="radio"
                            id="more-3language"
                            name="languageAmount"
                            value="more_than_3_language"
                        />
                        More than 3
                    </label>
                </div>
            </div>
            <div style="text-align: center;">
                <button type="submit" class="btn btn-primary" style="width:15%">
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
