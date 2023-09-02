$(document).ready(function() {
    function checkInputs() {
        const name = $("#contact-name").val();
        const email = $("#contact-email").val();
        const message = $("#contact-message").val();

        if (name === "" || email === "" || message === "") {
            $("#contact-submit").prop("disabled", true);
        } else {
            $("#contact-submit").prop("disabled", false);
        }
    }


    checkInputs();


    $("#contact-name, #contact-email, #contact-message").on("input", checkInputs);

    $("#contact-form").submit(function(event) {

        if ($("#contact-submit").prop("disabled")) {
            event.preventDefault();
        }
    });
});