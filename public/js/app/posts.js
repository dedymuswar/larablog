$(document).ready(function () {
    $("#judul").keyup(function () {
        var judul = $(this).val();
        judul = judul.toLowerCase();
        judul = judul.replace(/[^a-zA-Z0-9]+/g, '-');
        judul = judul.slice(0, 80);
        console.log(judul);
        $("#slug").val(judul);
    });

});