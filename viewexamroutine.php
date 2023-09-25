<?php include_once('includes/config.php'); ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Exam Routine</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/routine.css" rel="stylesheet">
    <script src="script.js"></script>
</head>


<body>

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <h1>Exam Routine</h1>


        <div id="routine-table">

            <div class="title-area">
                <h2>Search By Class</h2>

                <form action="#" method="post" class="form-show">
                    <label for="class">Select Class:</label>
                    <select name="class" id="class">
                        <option value="18 Month-2 Year">Rainbow (18 Month-2 Year)</option>
                        <option value="2-3 Year">Blossom (2-3 Year)</option>
                        <option value="3-4 Year">Caterpillar (3-4 Year)</option>
                        <option value="4-5 Year">Wonderland (4-5 Year)</option>
                        <option value="5-6 Year">Sunshine (5-6 Year)</option>
                    </select>
                    <input type="submit" value="Get Routine" id="button" class="btn btn-secondary">
                </form>
            </div>

            <?php

            if(isset($_POST['class'])){

                $selectedClass = $_POST['class'];

                $sql = "SELECT * FROM tblexamroutine WHERE ageGroup = '$selectedClass'";
                $result = $con->query($sql);
    
                if ($result->num_rows > 0) {
                    echo '<table>';
                    echo '<tr>
                                <th>Teacher</th>
                                <th>Class</th>
                                <th>Age Group</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Room</th>
                             </tr>';
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $row['teacherName'] . '</td>';
                        echo '<td>' . $row['className'] . '</td>';
                        echo '<td>' . $row['ageGroup'] . '</td>';
                        echo '<td>' . $row['date'] . '</td>';
                        echo '<td>' . $row['time'] . '</td>';
                        echo '<td>' . $row['room'] . '</td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                } else {
                    echo '<p>No routine data available.</p>';
                }
               
            }

            ?>
         
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>


    <?php include_once('includes/footer.php'); ?>


</body>

</html>