$(document).ready(function() {
    function t() {
        var t = $("#contact-name").val(),
            c = $("#contact-email").val(),
            a = $("#contact-message").val();
        "" === t || "" === c || "" === a ? $("#contact-submit").prop("disabled", !0) : $("#contact-submit").prop("disabled", !1)
    }
    t(), $("#contact-name, #contact-email, #contact-message").on("input", t), $("#contact-form").submit(function(t) { $("#contact-submit").prop("disabled") && t.preventDefault() })
});