<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Sugar Tracker</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="./Blood-Sugar-Tracker.css">
    <script>
        // Attempt to load saved blood sugar levels from localStorage
        var bloodSugarLevels = JSON.parse(localStorage.getItem('bloodSugarLevels')) || [];

        function drawGraph() {
            var canvas = document.getElementById('bloodSugarCanvas');
            var ctx = canvas.getContext('2d');

            canvas.width = 600; // Clear the canvas
            canvas.height = 400;

            // Graph axes
            ctx.beginPath();
            ctx.moveTo(50, 350);
            ctx.lineTo(550, 350);
            ctx.moveTo(50, 350);
            ctx.lineTo(50, 50);
            ctx.stroke();

            // Axes labels
            ctx.fillText('Measurements', 555, 350);
            ctx.fillText('Blood Sugar Level', 20, 45);

            var x = 70;
            for (var i = 0; i < bloodSugarLevels.length; i++) {
                var y = 350 - bloodSugarLevels[i];
                ctx.beginPath();
                ctx.arc(x, y, 5, 0, Math.PI * 2, true);
                ctx.fill();

                // Display the value near the point
                ctx.fillText(bloodSugarLevels[i], x - 10, y - 10);

                if (i < bloodSugarLevels.length - 1) {
                    var nextY = 350 - bloodSugarLevels[i + 1];
                    ctx.moveTo(x, y);
                    ctx.lineTo(x + 70, nextY);
                    ctx.stroke();
                }

                x += 70;
            }
        }

        function addMeasurement() {
            var measurement = parseInt(document.getElementById('measurementInput').value, 10);
            if (!isNaN(measurement)) {
                bloodSugarLevels.push(measurement);
                localStorage.setItem('bloodSugarLevels', JSON.stringify(bloodSugarLevels)); // Save updated array to localStorage
                provideFeedback(measurement); // Provide feedback based on the measurement
                drawGraph();
            }
        }

        function provideFeedback(measurement) {
            var feedback = '';
            if (measurement < 70) feedback = 'Low';
            else if (measurement <= 140) feedback = 'Normal';
            else feedback = 'High';

            document.getElementById('feedback').innerText = `Measurement is ${feedback}.`;
        }

        function resetGraph() {
            bloodSugarLevels = [];
            localStorage.removeItem('bloodSugarLevels'); // Clear stored data
            drawGraph();
            document.getElementById('measurementInput').value = ''; // Clear input field
            document.getElementById('feedback').innerText = ''; // Clear feedback
        }

        window.onload = function() {
            drawGraph();
        };
    </script>


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

    <!--start graph section-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center py-5">
                <h2>Blood Sugar Tracker Graph</h2>
                <canvas id="bloodSugarCanvas" style="border:1px solid #000;width:60%;"></canvas>
                <br>
                <label for="measurementInput">Enter Blood Sugar Measurement:</label>
                <input type="number" id="measurementInput" placeholder="Blood Sugar Level">
                <button class="btn-success" onclick="addMeasurement()">Add Measurement</button>
                <button class="btn-danger" onclick="resetGraph()">Reset Graph</button>
                <p id="feedback"></p> <!-- Feedback will be shown here -->
                <!--end graph section-->
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
    <!-- External Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    </div>
</body>

</html>
