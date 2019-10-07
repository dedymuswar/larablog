
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function () {
    $("#tag_modal").on('shown.bs.modal', function () {
        $(this).find('#tag').focus();
    });
});


//when click add tag
$("#create-tag").click(function () {
    $("#simpan").val("create-tag");
    $("#formtag").trigger('reset');
    $("#simpan").html("Simpan");
    $("#id_tag").val('');
    $("#titlemodal").html("Create tag");
    $("#tag_modal").modal("show");
});

//when click edit tag
$("tbody").on("click", ".edit-tag", function () {
    var id = $(this).data("id");

    $.get("tag/" + id + "/edit", function (data) {
        $("#titlemodal").html("Edit tag");
        $("#simpan").html("Update");
        $("#simpan").val("edit-tag");

        $("#tag_modal").modal("show");
        $("#id_tag").val(data.tags['id']);
        $("#tag").val(data.tags['name']);
    });
});

//when click submit tag
$("#simpan").on("click", function () {

    $.ajax({
        data: $("#formTag").serialize(),
        url: "tagAdd",
        type: "POST",
        dataType: "json",
        success: function (data) {

        },
        error: function (data) {
            console.log("Error:", data);
        }

    });

    $("#tag_add").modal("hide");
    if ($("#simpan").val() == "edit-tag") {
        swal({
            title: 'Success',
            text: 'Berhasil mengubah data tag',
            icon: 'success',
            timer: 2000,
            buttons: false,
        });
    } else {
        swal({
            title: 'Success',
            text: 'Berhasil menambahkan tag baru',
            icon: 'success',
            timer: 2000,
            buttons: false,
        });
    }
    setTimeout(location.reload.bind(location), 1000);
});