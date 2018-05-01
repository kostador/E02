$.get("files.php", function(data) {
    files = JSON.parse(data);
    for (var key in files) {
        $("#files").append("<li id='" + key + "'><input type='checkbox'>" + files[key] + "</li>");
    }
});

$("#upload").change(function() {
    $("form").submit();
});
