/**
 * Created by Karol Golec on 20.08.2016.
 */
$("#contactForm").on("formvalid.zf.abide", function (ev, frm) {
    var url = "http://localhost:8001/send_email.php"; // the script where you handle the form input.
    $(".loading").show();
    $.ajax({
        type: "POST",
        url: url,
        data: $("#contactForm").serialize(), // serializes the form's elements.
        success: function (data) {
            console.log(data);
            if (data === "OK") {
                $("#email_success").show();
                $("#email_error").hide();
                $("#info_error").hide();
            } else {
                $("#email_success").hide();
                $("#email_error").show();
                $("#info_error").hide();
            }
            $(".loading").hide();
        },
        error: function () {
            $("#email_success").hide();
            $("#email_error").show();
            $("#info_error").hide();
            $(".loading").hide();
        }
    });
})

$("#contactForm").submit(function (e) {
    e.preventDefault();
});