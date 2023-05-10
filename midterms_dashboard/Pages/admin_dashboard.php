<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to the login page
}
require("doc_header.php");
?>
<body>
<script src="../Javascript/jsPDF/jspdf.umd.min.js"></script>
<script src="../Javascript/jsPDF/jspdf.autotable.js"></script>
<div class="container-fluid">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 ms-3">
            <h3 class="d-block">Welcome, <?php echo $_SESSION['username']?></h3>
        </div>
        <div class="col-md-3 text-end">
            <button id="addMember" class="btn btn-dark">Add Member</button>
            <button id="logoutBtn" type="button" class="btn btn-secondary me-3 ">Logout</button>
        </div>
    </header>
    <div class="row mt-3 mb-3">
        <div class="col">
            <div class="input-group">
                <input type="text" id="searchInput" class="form-control ms-3 me-3 rounded" placeholder="Search...">
                <div class="input-group-append">
                    <button id="searchButton" class="btn btn-dark" type="button">Search</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center my-4">Dashboard</h1>
        </div>
    </div>
    <div class="row">
        <div class="text-center">
            <button id="download" class="btn btn-lg btn-outline-dark mb-5">Download as PDF</button>
        </div>
    </div>
    <?php include('user_table.php')?>
    </div>
    <?php 
    include('update_form.php');
    include('delete_confirm.php');
    include('add_member.php');
    ?>
    <script src="../Javascript/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../Javascript/admin_dashboard.js"></script>
</body>
</html>