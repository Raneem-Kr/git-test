<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/style.css" />

</head>

<body>
    <!--start Navbra-->
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-md-12">
                <?php
                include('includes/temp/navbar_home.php');
                ?>
            </div>
        </div>
    </div>

    <!--End Navbar-->

    <!--Start Header-->
    <div class="container mt-md-5">
        <div class="row">
            <div class="col-md-6 mt-5 moto">
                <h1 class=" pt-5">Defeat Diabetes:</h1>
                <h2 class="pl-3 ml-5 my-4">Embrace Health,</h2>
                <h2 class="pl-5 ml-5">Empower Lives!</h2>

            </div>
            <div class="col-md-6 ml-auto">
                <img src="CSS/images/image_home2.jpg" class="img-fluid" />
            </div>
        </div>
    </div>
    <!--End Header-->
    <div class="main">

        <!--Start Boxes Section-->
        <div class="box">
            <div class="container-fluid mt-5 pt-5">
                <div class="row">
                    <div class="col-md-4 m-auto mx-5 text-center">
                        <div class="box-content">
                            <a href="complications/complications.php">
                                <i class="fa-solid fa-disease"></i>
                                <h4>Complications</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 m-auto mx-5 text-center">
                        <div class="box-content">
                            <a href="Treatment/Treatment.php">
                                <i class="fa-solid fa-notes-medical"></i>
                                <h4>Treatment</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 m-auto mx-5 text-center">
                        <div class="box-content">
                            <a href="Diabetes-Diet/diabetes-diet.php">
                                <i class="fa-solid fa-bowl-food"></i>
                                <h4>Diabetes Diet</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Boxes Section-->

        <!--start Detail Section-->
        <div class="detail">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <video class=" video mt-3 pt-5" controls muted loop width="90%">
                            <source src="CSS/images/VID-20231030-WA0091.mp4" />
                        </video>
                    </div>
                    <div class="col-md-6 mt-5 pt-5 pr-2">
                        <h4 style="margin-left: -8px" class="mb-4">
                            Diabetes facts and figures show the growing global burden <br />
                            for individuals, families, and countries.
                        </h4>
                        <ul>
                            <li class="mb-3 item">
                                The IDF Diabetes Atlas (2021) reports that 10.5% of the adult
                                population (20-79 years) has diabetes, with almost half unaware
                                that they are living with the condition
                            </li>
                            <li class="mb-3 item">
                                By 2045, IDF projections show that 1 in 8 adults, approximately
                                783 million, will be living with diabetes, an increase of 46%.
                            </li>
                            <li class="mb-3 item">
                                Over 90% of people with diabetes have type 2 diabetes, which is
                                driven by socio-economic, demographic, environmental, and
                                genetic factors.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--end Detail Section-->

        <!--start info section-->

        <div class="info mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="mb-3 mt-3">Diabettes Around The World In 2021</h2>
                        <h4>537 million</h4>
                        <p>
                            Approximately 537 million adults (20-79 years) are living with
                            diabetes
                        </p>
                        <h4>643 million by 2030</h4>
                        <p>
                            the total number of pepole living with diabetes is projected to
                            rise to 643 million by 2030 and 783 nillion by 2045
                        </p>
                        <h4>3 in 4</h4>
                        <p>
                            3 in 4 adults with diabetes live in low-and middle-income
                            countries
                        </p>
                    </div>
                    <div class="col-md-2">
                        <h6>
                            350M <br />
                            adults predicted to have diabetes by 2030
                        </h6>
                        <img src="CSS/images/IMG-20231109-WA0023.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="col-md-2">
                        <img src="CSS/images/IMG-20231109-WA0025.jpg" class="img-fluid content-image" alt="" />
                    </div>
                    <div class="col-md-2">
                        <img src="CSS/images/IMG-20231109-WA0027.jpg" class="img-fluid" alt="" />
                        <h6 class="mt-3">
                            96M <br />
                            pepole living with undiagnosed diabetes
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <!--end info sectiom-->
        <!--start Test section-->
        <div class="test mt-5 pt-5 test">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Are You at Risk?</h2>
                        <p>
                            Learning your risk is the first step in taking action against type
                            2 diabetes. Take our 60-Second Prediabetes Risk Test today to
                            receive actionable next steps in your health journey.
                        </p>
                    </div>
                    <div class="col-md-6 m-auto text-center pt-2">
                        <a href="https://www.cdc.gov/prediabetes/takethetest/" class=" button btn btn-success py-3 px-5" target="_self">Take the Test</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end Test section-->

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
            <!-- Impressum link -->

            <a class="ml-1 impressum" href="Impressum/impressum.php">Impressum</a>
            <!-- end Impressum link -->
            <h6 class="mt-2 ml-1 copyright">&copy; <?php echo date("Y"); ?> Raneem Krenbeh. All rights reserved.</h6>
        </footer>
    </div>
    <!--end Footer section-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>