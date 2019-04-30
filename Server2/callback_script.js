jQuery(document).ready(function () {
    var h1Value = $("h1:first").text();
    if (h1Value == '') {
        alert("Provide h1 tag");
        return false;
    }
    var href = document.location.href;
    var pageName = href.substr(href.lastIndexOf('/') + 1);
    var actionData = new FormData();
    actionData.append('heading1', h1Value);
    actionData.append('page', pageName);
    $.ajax({
        url: "php_tracking_script.php",
        type: "POST",
        data: actionData,
        contentType: false,
        cache: false,
        processData: false,
        dataType: "html",
        success: function (data) {
            console.log(data);
            if (data != 1) {
                alert("Error: Something went wrong");
            }
        }
    });
});
