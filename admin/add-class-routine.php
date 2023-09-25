<?php session_start();
// Database Connection
include('includes/config.php');
//Validating Session
if (strlen($_SESSION['aid']) == 0) {
    header('location:index.php');
} else {
    // Code for Add New Teacher
    if (isset($_POST['submit'])) {
        //Getting Post Values  
        $tname = $_POST['teacher'];
        $cname = $_POST['class'];
        $agegroup = $_POST['agegroup'];
        $time = $_POST['time'];
        $day = $_POST['day'];
        $room = $_POST['room'];



        $query = mysqli_query($con, "insert into tblclassroutine(teacherName,className,ageGroup,day,time,room) values('$tname','$cname','$agegroup','$day','$time','$room')");
        if ($query) {
            echo "<script>alert('Class added successfully.');</script>";
            echo "<script type='text/javascript'> document.location = 'add-class-routine.php'; </script>";
        } else {
            echo "<script>alert('Something went wrong. Please try again.');</script>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Little Learners Academy | Add Class Routine</title>

    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="../plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="../plugins/dropzone/min/dropzone.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once("includes/navbar.php"); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once("includes/sidebar.php"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Add Class Routine</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Add Class Routine</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-8">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Persoanl Info</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form name="addlawyer" method="post" enctype="multipart/form-data">
                                    <div class="card-body">

                                        <!-- Teacher--->
                                        <div class="form-group">
                                            <label for="exampleInputFullname">Teacher</label>
                                            <select class="form-control" id="teacher" name="teacher" required>
                                                <option value="">Select Teacher</option>
                                                <?php $query = mysqli_query($con, "select id,fullName,teacherSubject from tblteachers");
                                                while ($row = mysqli_fetch_array($query)) {
                                                ?>
                                                    <option value="<?php echo $row['fullName']; ?>"><?php echo $row['fullName']; ?>-(<?php echo $row['teacherSubject']; ?>)</option>
                                                <?php } ?>

                                            </select>
                                        </div>

                                        <!-- Class Name -->
                                        <div class="form-group">
                                            <label for="exampleInputFullname">Class Name</label>
                                            <select class="form-control" id="class" name="class" required>
                                                <option value="">Select Class</option>
                                                <?php $query = mysqli_query($con, "select id,className from tblclasses");
                                                while ($row = mysqli_fetch_array($query)) {
                                                ?>
                                                    <option value="<?php echo $row['className']; ?>"><?php echo $row['className']; ?></option>
                                                <?php } ?>

                                            </select>

                                            <!--Age Group---->
                                            <div class="form-group">
                                                <label for="text">Age Group</label>
                                                <select class="form-control" id="agegroup" name="agegroup" required>
                                                    <option value="">Select</option>
                                                    <option value="18 Month-3 Year">18 Month-2 Year</option>
                                                    <option value="2-3 Year">2-3 Year</option>
                                                    <option value="3-4 Year">3-4 Year</option>
                                                    <option value="4-5 Year">4-5 Year</option>
                                                    <option value="5-6 Year">5-6 Year</option>
                                                </select>
                                            </div>


                                            <!--Day---->
                                            <div class="form-group">
                                                <label for="text">Day</label>
                                                <select class="form-control" id="day" name="day" required>
                                                    <option value="">Select Day</option>
                                                    <option value="Saturday">Saturday</option>
                                                    <option value="Sunday">Sunday</option>
                                                    <option value="Monday">Monday</option>
                                                    <option value="Tuesday">Tuesday</option>
                                                    <option value="Wednesday">Wednesday</option>
                                                    <option value="Thursday">Thursday</option>
                                                    <option value="Friday">Friday</option>
                                                </select>
                                            </div>

                                            <!--Time---->
                                            <div class="form-group">
                                                <label for="text">Time Slot</label>
                                                <select class="form-control" id="time" name="time" required>
                                                    <option value="">Select Time</option>
                                                    <option value="8-9 AM">8-9 AM</option>
                                                    <option value="9-10 AM">9-10 AM</option>
                                                    <option value="10-11 AM">10-11 AM</option>
                                                    <option value="11-12 PM">11-12 PM</option>
                                                    <option value="12-1 PM">12-1 PM</option>
                                                    <option value="1-2 PM">1-2 PM</option>
                                                    <option value="2-3 PM">2-3 PM</option>
                                                    <option value="3-4 PM">3-4 PM</option>
                                                    <option value="4-5 PM">4-5 PM</option>
                                                </select>
                                            </div>

                                            <!--Time---->
                                            <div class="form-group">
                                                <label for="text">Room</label>
                                                <input class="form-control" type="text" name="room" id="room" required>
                                                </select>
                                            </div>







                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                                            </div>

                                        </div>
                                        <!-- /.card-body -->

                                    </div>
                                    <!-- /.card -->
                            </div>
                            <!--/.col (left) -->


                            </form>


                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include_once('includes/footer.php'); ?>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script src="../plugins/select2/js/select2.full.min.js"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        });
    </script>
</body>

</html>
<?php
?>