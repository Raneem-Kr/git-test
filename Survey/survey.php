<?php
session_start();
include('../includes/db/db.php');
$page = "All";


if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

if ($page == "All") {


?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Survey</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../CSS/style.css" />
        <link rel="stylesheet" href="survey.css" />
    </head>

    <body>
        <!--start Navbrar-->
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    include('../includes/temp/navbar.php');
                    ?>
                </div>
            </div>
        </div>

        <!--End Navbar-->

        <div class="survey">
            <div class="container-fluid ml-4 mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <h6 class="note">
                            Please take a moment to answer these 6 questions about our website’s content. Your insights are crucial for my improvement. <br> Afterward, kindly complete the survey. Your support is invaluable and will greatly assist me in completing my <br> bachelor thesis. <span>Thank you for your time and contribution!</span>

                        </h6>


                        <hr>
                    </div>

                    <div class="col-md-12">
                        <form action="?page=create" method="post">
                            <div class="question-one">
                                <label class="text-label-form">1- What are the three main types of diabetes?</label>
                                <br>
                                <div class="d-flex">

                                    <input type="radio" name="questionone" class="m-1" value="Type 1, type 2, and gestational diabetes"><label>Type 1, type 2, and gestational diabetes</label>
                                </div>
                                <br>
                                <div class="d-flex">

                                    <input type="radio" name="questionone" class="m-1" value="Type 1, type 2, and adult-onset diabetes"><label>Type 1, type 2, and adult-onset diabetes</label>
                                </div>
                                <br>
                                <div class="d-flex">

                                    <input type="radio" name="questionone" class="m-1" value="Type 1, type 2, and childhood diabetes"><label>Type 1, type 2, and childhood diabetes</label>
                                </div>
                                <br>
                                <div class="d-flex">

                                    <input type="radio" name="questionone" class="m-1" value="Type 1, type 2, and insulin-dependent diabetes"><label>Type 1, type 2, and insulin-dependent diabetes</label>
                                </div>

                            </div>

                            <div class="question-two">
                                <label class="text-label-form">2- What are the four blood tests presented in the website to diagnose if you have diabetes?</label>
                                <br>
                                <div class="d-flex">

                                    <input type="radio" name="questiontwo" class="m-1" value="A1C test, Fasting Blood Sugar Test, Glucose Tolerance Test, Urine Test"><label>A1C test, Fasting Blood Sugar Test, Glucose Tolerance Test, Urine Test</label>
                                </div>
                                <br>
                                <div class="d-flex">

                                    <input type="radio" name="questiontwo" class="m-1" value="A1C test, Blood Pressure Test, Cholesterol Test, Glucose Tolerance Test"><label>A1C test, Blood Pressure Test, Cholesterol Test, Glucose Tolerance Test</label>
                                </div>
                                <br>
                                <div class="d-flex">

                                    <input type="radio" name="questiontwo" class="m-1" value="A1C test, Fasting Blood Sugar Test, Glucose Tolerance Test, Random Blood Sugar Test"><label>A1C test, Fasting Blood Sugar Test, Glucose Tolerance Test, Random Blood Sugar Test</label>
                                </div>
                                <br>
                                <div class="d-flex">

                                    <input type="radio" name="questiontwo" class="m-1" value="None of the above"><label>None of the above</label>
                                </div>

                            </div>

                            <div class="question-three">
                                <label class="text-label-form">3- Which medicine should you take if you have Type 1 diabetes?</label>
                                <br>
                                <div class="d-flex">

                                    <input type="radio" name="questionthree" class="m-1" value="Metformin"><label>Metformin</label>
                                </div>
                                <br>
                                <div class="d-flex">

                                    <input type="radio" name="questionthree" class="m-1" value="Insulin"><label>Insulin</label>
                                </div>
                                <br>
                                <div class="d-flex">

                                    <input type="radio" name="questionthree" class="m-1" value="Sulfonylureas"><label>Sulfonylureas</label>
                                </div>
                                <br>
                                <div class="d-flex">

                                    <input type="radio" name="questionthree" class="m-1" value="None of the above"><label>None of the above</label>
                                </div>

                            </div>
                            <div class="question-four">
                                <label class="text-label-form">4- What does it mean to eat well?</label>
                                <br>
                                <div class="d-flex">

                                    <input type="radio" name="question-four" class="m-1" value="Avoiding all sugars and carbohydrates."><label>Avoiding all sugars and carbohydrates.</label>
                                </div>
                                <br>
                                <div class="d-flex">

                                    <input type="radio" name="question-four" class="m-1" value=">Eating only organic food."><label>Eating only organic food.</label>
                                </div>
                                <br>
                                <div class="d-flex">

                                    <input type="radio" name="question-four" class="m-1" value="Following a strict diet with no flexibility."><label>Following a strict diet with no flexibility.</label>
                                </div>
                                <br>
                                <div class="d-flex">

                                    <input type="radio" name="question-four" class="m-1" value="Eating healthy foods in the right amounts at the right times."><label>Eating healthy foods in the right amounts at the right times.</label>
                                </div>

                            </div>

                            <div class="question-five">
                                <label class="text-label-form">5- Cardiovascular Disease is one of the complications that can arise from diabetes</label>
                                <br>
                                <div class="d-flex">

                                    <input type="radio" name="question-five" class="m-1" value="true"><label>True</label>
                                </div>
                                <br>
                                <div class="d-flex">

                                    <input type="radio" name="question-five" class="m-1" value="false"><label>False</label>
                                </div>


                            </div>
                            <div class="question-six">
                                <label class="text-label-form">6- The number of people with diabetes (61 million) in EUR Region will increase 15% by 2045</label>
                                <br>
                                <div class="d-flex">

                                    <input type="radio" name="question-six" class="m-1" value="true"><label>True</label>
                                </div>
                                <br>
                                <div class="d-flex">

                                    <input type="radio" name="question-six" class="m-1" value="false"><label>False</label>
                                </div>


                            </div>
                            <hr>
                            <!-- start survey question from 1 to 5  -->
                            <h4 class="mt-4">Survey:</h4>
                            <h6 class="text-danger content-text">Please rate your agreement by selecting a number from 1 to 5, where 1 means ‘Disagree’ and 5 means ‘Strongly Agree’.</h6>
                            <div class="survey">
                                <label class="text-survey-form text-dark">1-The website maintained a consistent look and feel across all pages, which made it easier for me to navigate and understand the content</label>
                                <div class="survey-dots">

                                    <input type="radio" name="survey-1" value="1">



                                    <input type="radio" name="survey-1" value="2">



                                    <input type="radio" name="survey-1" value="3">



                                    <input type="radio" name="survey-1" value="4">



                                    <input type="radio" name="survey-1" value="5">

                                </div>
                            </div>



                            <div class="survey">
                                <label class="text-survey-form text-dark">2-Key information was highlighted in a way that supported my habit of scanning content, allowing me to quickly find what I needed without reading every word.
                                </label>
                                <div class="survey-dots-inner">

                                    <input type="radio" name="survey-2" value="1">



                                    <input type="radio" name="survey-2" value="2">



                                    <input type="radio" name="survey-2" value="3">



                                    <input type="radio" name="survey-2" value="4">



                                    <input type="radio" name="survey-2" value="5">

                                </div>
                            </div>


                            <div class="survey">
                                <label class="text-survey-form text-dark">3-The typography(fonts, line spacing, typefaces) used on the website effectively supported my comprehension of the content.</label>
                                <div class="survey-dots-inner">

                                    <input type="radio" name="survey-3" value="1">



                                    <input type="radio" name="survey-3" value="2">



                                    <input type="radio" name="survey-3" value="3">



                                    <input type="radio" name="survey-3" value="4">



                                    <input type="radio" name="survey-3" value="5">

                                </div>
                            </div>


                            <div class="survey">
                                <label class="text-survey-form text-dark">4-The hierarchical organization of information on the website helped me understand the content structure and navigate more efficiently.</label>
                                <div class="survey-dots-inner">

                                    <input type="radio" name="survey-4" value="1">



                                    <input type="radio" name="survey-4" value="2">



                                    <input type="radio" name="survey-4" value="3">



                                    <input type="radio" name="survey-4" value="4">



                                    <input type="radio" name="survey-4" value="5">

                                </div>
                            </div>




                            <div class="survey">
                                <label class="text-survey-form text-dark">5-I think that I would like to use this website frequently</label>
                                <div class="survey-dots-inner">

                                    <input type="radio" name="survey-5" value="1">



                                    <input type="radio" name="survey-5" value="2">



                                    <input type="radio" name="survey-5" value="3">



                                    <input type="radio" name="survey-5" value="4">



                                    <input type="radio" name="survey-5" value="5">

                                </div>
                            </div>



                            <div class="survey">
                                <label class="text-survey-form text-dark">6-I found the website unnecessarily complex</label>
                                <div class="survey-dots-inner">

                                    <input type="radio" name="survey-6" value="1">
                                    <input type="radio" name="survey-6" value="2">
                                    <input type="radio" name="survey-6" value="3">
                                    <input type="radio" name="survey-6" value="4">
                                    <input type="radio" name="survey-6" value="5">

                                </div>
                            </div>

                            <div class="survey">
                                <label class="text-survey-form text-dark">7-I thought the website was easy to be used</label>
                                <div class="survey-dots-inner">

                                    <input type="radio" name="survey-7" value="1">



                                    <input type="radio" name="survey-7" value="2">



                                    <input type="radio" name="survey-7" value="3">



                                    <input type="radio" name="survey-7" value="4">



                                    <input type="radio" name="survey-7" value="5">

                                </div>
                            </div>
                            <div class="survey">
                                <label class="text-survey-form text-dark">8-I think that I would need the support of a technical person to be able <br> to use this website</label>
                                <div class="survey-dots-inner">

                                    <input type="radio" name="survey-8" value="1">



                                    <input type="radio" name="survey-8" value="2">



                                    <input type="radio" name="survey-8" value="3">



                                    <input type="radio" name="survey-8" value="4">



                                    <input type="radio" name="survey-8" value="5">

                                </div>
                            </div>


                            <div class="survey">
                                <label class="text-survey-form text-dark">9-I found the various function in this website were well integrated</label>
                                <div class="survey-dots-inner">

                                    <input type="radio" name="survey-9" value="1">



                                    <input type="radio" name="survey-9" value="2">



                                    <input type="radio" name="survey-9" value="3">



                                    <input type="radio" name="survey-9" value="4">



                                    <input type="radio" name="survey-9" value="5">

                                </div>
                            </div>


                            <div class="survey">
                                <label class="text-survey-form text-dark">10-I thought there was too much inconsistency in this website</label>
                                <div class="survey-dots-inner">
                                    <input type="radio" name="survey-10" value="1">
                                    <input type="radio" name="survey-10" value="2">
                                    <input type="radio" name="survey-10" value="3">
                                    <input type="radio" name="survey-10" value="4">
                                    <input type="radio" name="survey-10" value="5">

                                </div>
                            </div>


                            <div class="survey">
                                <label class="text-survey-form text-dark">11-I would imagine that most people would learn to use this website very quickly</label>
                                <div class="survey-dots-inner">
                                    <input type="radio" name="survey-11" value="1">
                                    <input type="radio" name="survey-11" value="2">
                                    <input type="radio" name="survey-11" value="3">
                                    <input type="radio" name="survey-11" value="4">
                                    <input type="radio" name="survey-11" value="5">
                                </div>
                            </div>


                            <div class="survey">
                                <label class="text-survey-form text-dark">12-I found the website very cumbersome to use</label>
                                <div class="survey-dots-inner">
                                    <input type="radio" name="survey-12" value="1">
                                    <input type="radio" name="survey-12" value="2">
                                    <input type="radio" name="survey-12" value="3">
                                    <input type="radio" name="survey-12" value="4">
                                    <input type="radio" name="survey-12" value="5">
                                </div>
                            </div>


                            <div class="survey">
                                <label class="text-survey-form text-dark">13-I felt very confident using the website</label>
                                <div class="survey-dots-inner">
                                    <input type="radio" name="survey-13" value="1">
                                    <input type="radio" name="survey-13" value="2">
                                    <input type="radio" name="survey-13" value="3">
                                    <input type="radio" name="survey-13" value="4">
                                    <input type="radio" name="survey-13" value="5">
                                </div>
                            </div>


                            <div class="survey">
                                <label class="text-survey-form text-dark">14-I needed to learn a lot things before I could get going with this website</label>
                                <div class="survey-dots-inner">
                                    <input type="radio" name="survey-14" value="1">
                                    <input type="radio" name="survey-14" value="2">
                                    <input type="radio" name="survey-14" value="3">
                                    <input type="radio" name="survey-14" value="4">
                                    <input type="radio" name="survey-14" value="5">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="feedback-textarea" class="text-survey-form text-dark">Your Feedback:</label>
                                <textarea class="form-control" id="feedback-textarea" name="feedback" rows="3" placeholder="Do You Have Any Suggestions? Let Me Know!"></textarea>
                            </div>

                            <!-- End survey question from 1 to 5  -->
                            <button class="text-center"> Send</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!--start Footer section-->
        <footer class="mt-4 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="pt-5">Diabetes</h2>
                        <hr />
                        <div class="text-center">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-solid fa-house"></i>
                            <i class="fa-brands fa-linkedin"></i>
                        </div>
                    </div>
                    <div class="col-md-5 m-auto">
                        <form action="">
                            <input class="form-control" type="text" name="name" id="" placeholder="Name" />
                            <br />
                            <input class="form-control" type="email" name="email" id="" placeholder="E-mail" />
                            <br />
                            <textarea class="form-control" name="" id="" placeholder="Message"></textarea>
                        </form>
                    </div>
                </div>
            </div>
        </footer>

        <!--end Footer section-->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    </body>

    </html>

<?php
} else if ($page == "create") {

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $q1 = $_POST['questionone'];
        $q2 = $_POST['questiontwo'];
        $q3 = $_POST['questionthree'];
        $q4 = $_POST['question-four'];
        $q5 = ($_POST['question-five'] == 'true') ? 1 : 0;
        $q6 = ($_POST['question-six'] == 'true') ? 1 : 0;
        $s1 = $_POST['survey-1'];
        $s2 = $_POST['survey-2'];
        $s3 = $_POST['survey-3'];
        $s4 = $_POST['survey-4'];
        $s5 = $_POST['survey-5'];
        $s6 = $_POST['survey-6'];
        $s7 = $_POST['survey-7'];
        $s8 = $_POST['survey-8'];
        $s9 = $_POST['survey-9'];
        $s10 = $_POST['survey-10'];
        $s11 = $_POST['survey-11'];
        $s12 = $_POST['survey-12'];
        $s13 = $_POST['survey-13'];
        $s14 = $_POST['survey-14'];
        $feedback = $_POST['feedback'];

        $statement = $connect->prepare("INSERT INTO survey (main_type, blood_test, medicine, eat_well, complications, numbers, information, Navigating, cognitive_load, scanning,  hierarchical_organization, sytem_complexity, system_easy, technical_support, integrate_function, system_inconsistency, system_learnabilty, system_cumbersome, system_confident, system_things, feedback) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $statement->execute(array($q1, $q2, $q3, $q4, $q5, $q6, $s1, $s2, $s3, $s4, $s5, $s6, $s7, $s8, $s9, $s10, $s11, $s12, $s13, $s14, $feedback));

        $_SESSION['message'] = "Thank You For Your Valubale Feedback";

        echo "<h3 style='color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    position: relative;
    padding: 0.75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem ;
    text-align: center;'>" . $_SESSION['message'] . "</h3>";

        header('Refresh:5;url=../index.php');
    }
}
