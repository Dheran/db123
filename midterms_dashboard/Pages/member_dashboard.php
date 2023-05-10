<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to the login page
}

require("doc_header.php");
?>
<body>
<div class="container-fluid">
    <div class="row">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 ms-3">
                <h3 class="d-block">Welcome, <?php echo $_SESSION['username']?></h3>
            </div>
            <div class="col-md-3 text-end">
                <button id="logoutBtn" type="button" class="btn btn-secondary me-3 ">Logout</button>
            </div>
        </header>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <?php include('member_info.php')?>
        <div class="col-2"></div>
    </div>


</div>



<script src="../Javascript/bootstrap/bootstrap.bundle.min.js"></script>
<script src="../Javascript/member_dashboard.js"></script>
</body>
</html>