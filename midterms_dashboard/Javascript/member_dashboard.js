$(document).ready(function() {
    $('#logoutBtn').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: '../Server/logout.php',
            type: 'POST',
            success: function() {
                window.location.href = "login.php";
            }
        });
    });
});