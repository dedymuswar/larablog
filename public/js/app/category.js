$(document).ready(function () {
    $("#category_add").on('shown.bs.modal', function () {
        $(this).find('#category').focus();
    });
});


//when click add category
$("#create-category").click(function () {
    $("#simpan").val("create-category");
    $("#formCategory").trigger('reset');
    $("#simpan").html("Simpan");
    $("#id_category").val('');
    $("#titlemodal").html("Create Category");
    $("#category_add").modal("show");
});

//when click edit category
$("tbody").on("click", ".edit-category", function () {
    var id = $(this).data("id");

    $.get("category/" + id + "/edit", function (data) {
        $("#titlemodal").html("Edit Category");
        $("#simpan").html("Update");
        $("#simpan").val("edit-category");

        $("#category_add").modal("show");
        $("#id_category").val(data.categories['id']);
        $("#category").val(data.categories['name_category']);
    });
});

$("#simpan").on("click", function () {
    var category = $("#category").val();

    $.ajax({
        data: $("#formCategory").serialize(),
        url: "categoryAdd",
        type: "POST",
        dataType: "json",
        success: function (data) {

        },
        error: function (data) {
            console.log("Error:", data);
        }

    });

    $("#category_add").modal("hide");
    if ($("#simpan").val() == "edit-category") {
        swal({
            title: 'Success',
            text: 'Berhasil mengubah data Category',
            icon: 'success',
            timer: 2000,
            buttons: false,
        });
    } else {
        swal({
            title: 'Success',
            text: 'Berhasil menambahkan Category baru',
            icon: 'success',
            timer: 2000,
            buttons: false,
        });
    }
    setTimeout(location.reload.bind(location), 1000);
});