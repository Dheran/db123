window.jsPDF = window.jspdf.jsPDF;
window.autoTable = window.jspdf.autoTable;


$(document).ready(function() {
    $("#searchInput").on("keyup", function() {  
        var value = $(this).val().toLowerCase();
        $("#myTable tbody tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });

    $('#download').click(function(e) {
        $('tr th').last().addClass("d-none");
        $('tr td:last-child').addClass("d-none");
        const doc = new jsPDF();

        doc.autoTable({html: '#myTable'});
        doc.save("table.pdf");
        window.location.reload();
    })
});