<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Africa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="statistics.css" />
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

    <!--start header-->
    <div class="container-fluid mx-4">
        <div class="row">
            <div class="col-md-10">
                <h1>Africa</h1>
                <h3>Diabetes report 2000 — 2045</h3>
                <p>
                    <span>Estimates</span> were made for <span>48 Sub-Saharan African countries</span> and
                    territories in the IDF Africa (AFR) Region. For this edition of the
                    IDF Diabetes Atlas, a total of <span>25 data sources</span> (from 20 countries)
                    were selected. About <span>half (58%) of the countries</span> in the IDF AFR
                    Region <span>lack high-quality in-country data sources</span>. Only one country
                    (Zambia) had studies conducted within the past five years.
                </p>
                <p>
                    <span> Despite the lowest prevalence</span> estimate of <span>4.5% among IDF Regions</span>, the
                    <span> expected increase</span> in the number of people with diabetes <span>by 2045 </span>is
                    <span>the highest 129% </span>reaching <span> 55 million</span>. The <span> AFR Region</span> is also
                    <span>predicted</span> to have the <span>highest increase of 107</span>% in the number of
                    people with impaired <span>glucose tolerance by 2045</span> reaching 117 million.
                    The proportion of <span>undiagnosed diabetes </span>is also <span>highest </span>in the <span>AFR</span>
                    Region with <span>53.6%.</span> Only <span>12.6 billion USD </span>was spent <span>on diabetes</span> in
                    AFR Region, representing <span>1.3% of the total spent worldwide,</span> despite
                    the region being home to 4.5% of people with diabetes worldwide.
                </p>
            </div>
        </div>
    </div>
    <!--end header-->

    <!--start KeyMessages-->
    <div class="container-fluid  messages">
        <div class="row">
            <div class="col-md-12 my-3">
                <h1 class="pl-3">Key Messages</h1>
            </div>

            <div class="col-md-12 content-africa">
                <div class="row">
                    <div class="col-md-2 p-3">

                        <div class="box">
                            <i class="fa-solid fa-users"></i>
                            <br>
                            An approximate <span> 19 million adults aged 20–79 years</span> are <span>living with
                                diabetes</span> in the IDF Africa Region. This represents nearly 4% of the
                            total regional population in this age group.
                        </div>
                    </div>

                    <div class="col-md-2  p-3">
                        <div class="box">
                            <i class="fa-solid fa-arrow-up-wide-short"></i>
                            <br>
                            <span>The number</span> of people with diabetes is <span>expected to increase 48% by
                                2030 </span>and <span>by 143% by 2045</span>, the highest predicted increase of all IDF
                            Regions.

                        </div>
                    </div>
                    <div class="col-md-2 p-3">
                        <div class="box">
                            <i class="fa-solid fa-stethoscope"></i>
                            <br>
                            <span>Over half (60%) of adults aged 20–79 years</span> with diabetes are
                            <span> undiagnosed,</span> the highest proportion of undiagnosed diabetes of all
                            IDF Regions.

                        </div>
                    </div>
                    <div class="col-md-2 p-3">
                        <div class="box">
                            <i class="fa-solid fa-droplet"></i>
                            <br>

                            <span>The number</span> of adults <span>with impaired glucose tolerance</span> is <span>expected to increase by 48% by 2030 and 143% by 2045,</span> the highest predicted increase of all IDF Regions.
                        </div>
                    </div>
                    <div class="col-md-2 p-3">
                        <div class="box">
                            <i class="fa-solid fa-chart-pie"></i>
                            <br>
                            <span> Almost three-quarters of deaths due to diabetes each year</span> occur in people <span>under the age of 60 years –</span> the highest proportion in this age group in the world.
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-africa">
                            <th>At a glance</th>
                            <th>2000</th>
                            <th>2011</th>
                            <th>2021</th>
                            <th>2030</th>
                            <th>2045</th>
                        </thead>
                        <tbody>
                            <tr class="table-row-africa">
                                <th colspan="6">Diabetes estimates (20-79 y)</th>

                            </tr>
                            <tr>
                                <td>People with diabetes, in 1,000s</td>
                                <td>2,532.9</td>
                                <td>14,700.0</td>
                                <td>23,633.9</td>
                                <td>33,446.0 </td>
                                <td>55,254.4</td>
                            </tr>
                            <tr>
                                <td>Age-adjusted comparative prevalence of diabetes, %</td>
                                <td>1.2</td>
                                <td>4.5</td>
                                <td>5.3</td>
                                <td>5.5</td>
                                <td>5.6</td>
                            </tr>
                            <tr>
                                <td>People with undiagnosed diabetes, in 1,000s</td>
                                <td>-</td>
                                <td>-</td>
                                <td>12,658.6</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Proportion of people with undiagnosed diabetes, %</td>
                                <td>-</td>
                                <td>-</td>
                                <td>53.6</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <p class="source">International Diabetes Federation

    </p>
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
    <!-- External Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    </div>
</body>

</html>