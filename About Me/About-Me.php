<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Me </title>
    <!-- External Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">

</head>

<body>
    <!--start Navbra-->
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
    <div class="container-fluid mx-4">
        <div class="row">
            <div class="col-md-8 about-me">
                <h1 class="my-5">Welcome to My Website!</h1>








                <p class="my-4">Hello and welcome! My name is Raneem, and I'm currently a Digital Media student. For my bachelor's thesis, I've created this website focusing on diabetes. The primary objective of my research is to investigate how specific usability factors can impact user comprehension of the information presented on the website.</p>

                <p class="">By testing these usability factors, I aim to identify key elements that contribute to effective communication and understanding of diabetes-related information. Although the website may not be fully functional, it serves as a platform for testing and gathering valuable insights for my research.</p>

                <p>Your participation in the provided tasks and surveys is greatly appreciated, as it will help me collect data and refine my findings. Together, we can work towards enhancing user experiences and improving the accessibility of diabetes information online</p>

                <h6 class="my-5">Thank you for visiting, and I genuinely appreciate your involvement in this project. </h6>
            </div>
        </div>
    </div>


    <!-- Your survey link or form can be placed here -->

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
    <!--Java Script-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    </div>
</body>

</html>