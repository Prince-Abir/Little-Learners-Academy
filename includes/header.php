    <div class="bg-white p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.php" class="navbar-brand">
                <h1 class="m-0 logo"><i class="fa fa-book-reader me-3"></i>Little Learners Academy</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="/index.php" class="nav-item nav-link">Home</a>
                    <a href="/classes.php" class="nav-item nav-link">Classes</a>
                    <a href="/about.php" class="nav-item nav-link">About Us</a>
                    <a href="/contact.php" class="nav-item nav-link">Contact Us</a>

                    <select name="view" id="pageSelect" onchange="redirectToPage()" class="nav-item nav-link">
                        <option value="#">View</option>
                        <option value="/viewclassroutine.php">Class Routine</option>
                        <option value="/viewexamroutine.php">Exam Routine</option>
                        <option value="/viewteachers.php">Teacher</option>
                    </select>

                    <a href="/admin/index.php" class="nav-item nav-link">Admin</a>
                </div>
                <a href="/visit.php" class="btn submit-button rounded-pill px-3 d-none d-lg-block">Schedule a Visit<i class="fa fa-arrow-right ms-3"></i></a>
                &nbsp;&nbsp;
                <a href="/enrollment.php" class="btn submit-button rounded-pill px-3 d-none d-lg-block">Enroll Now<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>

    </div>
  <script>
    function redirectToPage() {
      var selectElement = document.getElementById("pageSelect");
      var selectedOption = selectElement.value;
      if (selectedOption) {
        window.location.href = selectedOption;
      }
    }
  </script>
        <!-- Navbar End -->

        <style>
            #pageSelect{
                outline: none;
                appearance: none;
                border: none;
                -webkit-appearance: none;
            }
        </style>