$(document).ready(function(){function a(){var t=$("#contact-name").val(),c=$("#contact-email").val(),n=$("#contact-message").val();t===""||c===""||n===""?$("#contact-submit").prop("disabled",!0):$("#contact-submit").prop("disabled",!1)}a(),$("#contact-name, #contact-email, #contact-message").on("input",a),$("#contact-form").submit(function(t){$("#contact-submit").prop("disabled")&&t.preventDefault()})});
