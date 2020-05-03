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
    </style>
</head>

<body class="background">
    <form class="form-background" action="endSurvey/post" method="POST">
        {{ csrf_field() }}
        <h1 class="white-label">Student Emotion Analysis</h1>
        <br />
        <h4 class="white-label">Part 3: End Survey</h4>
        <hr style="background-color: white" />
        <p class="white-label" style="font-size: 18px; font-style: italic; font-weight: 600">
            Thank you for your participation in this
            experiment. Please complete the end survey form
            for review and improvements.
        </p>
        <div class="form-group">
            <label for="feeling" class="white-label">1. Overall, how do you feel after trying the questions of
                different topics and format?
            </label>
            <img src="https://firebasestorage.googleapis.com/v0/b/student-emotion-analysis-d61dc.appspot.com/o/feeling1.png?alt=media&token=41f6780b-788e-4590-a232-6d05f8068662"
                class="img-fluid mx-auto d-block rounded" alt="feeling" />
            <div class="form-control containerSpacing" style="width: 970px;margin:auto">
                <input type="radio" name="feeling" value="E1" style="margin-left: 70px" required />
                <input type="radio" name="feeling" class="radio-center" style="margin-left: 180px" value="E2" />
                <input type="radio" name="feeling" class="radio-center" style="margin-left: 180px" value="E3" />
                <input type="radio" name="feeling" class="radio-center" style="margin-left: 180px" value="E4" />
                <input type="radio" name="feeling" class="radio-center" style="margin-left: 180px" value="E5" />
            </div>
        </div>
        <div class="form-group" style="padding-top: 20px">
            <label for="comfortable" class="white-label">2. Which type of question is the most comfortable for you to
                answer?
            </label>
            <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                <label class="form-check-label" for="MCQ-comfortable">
                    <input class="form-control-input" type="radio" id="MCQ-comfortable" name="comfortable" value="MCQ"
                        required />
                    Multiple Choices Question (MCQ)
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="Coding-comfortable">
                    <input class="form-control-input" type="radio" id="Coding-comfortable" name="comfortable"
                        value="Coding" />
                    Coding
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="FIB-comfortable">
                    <input class="form-control-input" type="radio" id="FIB-comfortable" name="comfortable"
                        value="FIB" />
                    Fill-In-The-Blank
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="selection-comfortable">
                    <input class="form-control-input" type="radio" id="selection-comfortable" name="comfortable"
                        value="selection" />
                    Selection
                </label>
            </div>
            <div class="input-group radio-center radio-center">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <label class="form-check-label" for="other-comfortable">
                            <input class="form-control-input" type="radio" id="other-comfortable" name="comfortable"
                                value="others-comfortable" />
                            Other that is not tested:
                        </label>
                    </div>
                </div>
                <input type="text" class="form-control" id="others-comfortable" name="others-comfortable" disabled />
            </div>
        </div>
        <div class="form-group" style="padding-top: 20px">
            <label for="stress" class="white-label">3. Which type of question makes you stressed out while answering
                it?
            </label>
            <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                <label class="form-check-label" for="MCQ-stress">
                    <input class="form-control-input" type="radio" id="MCQ-stress" name="stress" value="MCQ" required />
                    Multiple Choices Question (MCQ)
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="Coding-stress">
                    <input class="form-control-input" type="radio" id="Coding-stress" name="stress" value="Coding" />
                    Coding
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="FIB-stress">
                    <input class="form-control-input" type="radio" id="FIB-stress" name="stress" value="FIB" />
                    Fill-In-The-Blank
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="selection-stress">
                    <input class="form-control-input" type="radio" id="selection-stress" name="stress"
                        value="selection" />
                    Selection
                </label>
            </div>
            <div class="input-group radio-center radio-center">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <label class="form-check-label" for="other-stress">
                            <input class="form-control-input" type="radio" id="other-stress" name="stress"
                                value="others-stress" />
                            Other that is not tested:
                        </label>
                    </div>
                </div>
                <input type="text" class="form-control" id="others-stress" name="others-stress" disabled />
            </div>
        </div>
        <div class="form-group" style="padding-top: 20px">
            <label for="stress-reason" class="white-label">
                4. Why does it makes you stressed out?
            </label>
            <textarea class="form-control" id="stress-reason" rows="3" name="stress-reason" required></textarea>
        </div>
        <div class="form-group">
            <label for="confusing" class="white-label">5. Is there any parts of the experiment you find
                confusing?</label>
            <input class="form-control" type="text" id="confusing" name="confusing" required />
        </div>
        <div class="form-group" style="padding-top: 20px">
            <label for="confusing-reason" class="white-label">
                6. Why does it makes you confused?
            </label>
            <textarea class="form-control" id="confusing-reason" rows="3" name="confusing-reason" required></textarea>
        </div>
        <div style="text-align: center;">
            <button type="submit" class="btn btn-primary" style="width:15%" id='submit'>
                Submit
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

                $("input[name=comfortable]").on("change", function() {
                    var comfortable = $(this).val();
                    if (comfortable == "others-comfortable") {
                        $("input[name=others-comfortable]").removeAttr("disabled");
                    } else {
                        $("input[name=others-comfortable]").attr("disabled", true);
                    }
                });

                $("input[name=stress]").on("change", function() {
                    var stress = $(this).val();
                    if (stress == "others-stress") {
                        $("input[name=others-stress]").removeAttr("disabled");
                    } else {
                        $("input[name=others-stress]").attr("disabled", true);
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
