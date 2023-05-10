window.jsPDF = window.jspdf.jsPDF;
window.autoTable = window.jspdf.autoTable;

$(document).ready(function(e) {
    var idValue;


    $("#searchButton").on("click", function() {
        var value = $('#searchInput').val().toLowerCase();
        $("#userTable tbody tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });

    $('button.delete-button').click(function(event) {
        idValue = $(this).val();
        event.preventDefault();
        $('.container-fluid').toggleClass('blur');
        $('#deletePrompt').toggleClass('d-none');
        $('#deletePrompt').toggleClass('flex');
    }); 


    $('button.update-button').click(function(event) {
        let buttonValue = $(this).val();

        event.preventDefault();
        $('.container-fluid').toggleClass('blur');
        $('#update-form').toggleClass('d-none');

        $("#updateBtn").val(buttonValue);
        $("#idInput").val($("#id"+buttonValue).text());
        $("#firstNameInput").val($("#firstName"+buttonValue).text());
        $("#lastNameInput").val($("#lastName"+buttonValue).text());
        $("#middleNameInput").val($("#middleName"+buttonValue).text());
        $("#addressInput").val($("#address"+buttonValue).text());
        $("#genderInput").val($("#gender"+buttonValue).text());
        $("#ageInput").val($("#age"+buttonValue).text());
        $("#birthdateInput").val($("#birthdate"+buttonValue).text());
        $("#emailInput").val($("#email"+buttonValue).text());
        $("#usernameInput").val($("#username"+buttonValue).text());
        $("#passwordInput").val($("#password"+buttonValue).text());
        $("#userTypeInput").val($("#usertype"+buttonValue).text());
    }); 


    $('#saveMember').click(e => {
        e.preventDefault();
        $.post("../Server/insert_member.php", {
            firstname : $('#firstName').val(),
            lastname : $('#lastName').val(),
            middlename : $('#middleName').val(),
            address : $('#address').val(),
            gender : $('#gender').val(),
            age : $('#age').val(),
            birthdate : $('#birthdate').val(),
            email : $('#email').val(),
            username : $('#username').val(),
            password : $('#password').val(),
            usertype : $('#userType').val()
        },
        function(data, status) {
            alert("Data: " + data + "\nStatus: " + status);
            window.location.reload();
        });
    })

    $('#addMember').click(e => {
        e.preventDefault();
        $('.container-fluid').toggleClass('blur');
        $('#addMemberForm').toggleClass('d-none');
    })

    $('#delete').click((e)=> {
        e.preventDefault();

        $.post("../Server/delete.php",{id : idValue},
        function(data, status){
            alert("Data: " + data + "\nStatus: " + status);
        });
    });

    $('#cancelDel').click((e) => {
        e.preventDefault();
        window.location.replace("admin_dashboard.php");
        
    })

    $('#cancelBtn').click((e) => {
        e.preventDefault();
        window.location.replace("admin_dashboard.php");
    })

    $('#cancelMember').click((e) => {
        e.preventDefault();
        window.location.replace("admin_dashboard.php");
    })

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

    $('#download').click(function(e) {
        $('tr th').last().addClass("d-none");
        $('tr td:last-child').addClass("d-none");
        const doc = new jsPDF(
            {
                orientation: "landscape"
            }
        );

        doc.autoTable({html: '#userTable'});
        doc.save("table.pdf");
        window.location.reload();
    })


    $('#updateBtn').click(function(e) {
        e.preventDefault();
        $.post('../Server/update.php',
        {
            id : $(this).val(),
            firstname : $('#firstNameInput').val(),
            lastname : $('#lastNameInput').val(),
            middlename : $('#middleNameInput').val(),
            address : $('#addressInput').val(),
            gender : $('#genderInput').val(),
            age : $('#ageInput').val(),
            birthdate : $('#birthdateInput').val(),
            email : $('#emailInput').val(),
            username : $('#usernameInput').val(),
            password : $('#passwordInput').val(),
            usertype: $('#userTypeInput').val()
        },
        function(data, status){
            alert("Data: " + data + "\nStatus: " + status);
            window.location.reload();
          });
    })
});
     
