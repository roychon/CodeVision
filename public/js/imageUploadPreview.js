function showPreview(event) {
    if (event.target.files.length > 0) {
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("profileImage");
        preview.src = src;
        preview.style.display = "block";
    }
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $("#imagepreview1").prop("src", e.target.result).show();
        };

        reader.readAsDataURL(input.files[0]);
    }
}

$("#input1").change(function () {
    readURL(this);
    $("#imagepreview1").show();
});

$("#input1").click(function () {
    $("#imagepreview1").attr("src", "");
});

$("#imagepreview1").click(function () {
    $("#input1").replaceWith($("#input1").clone(true));
    $("#imagepreview1").hide();
});

$("#cancel").click(function (e) {
    $("#input1").val("");
    $("#imagepreview1").attr("src", "");
});
