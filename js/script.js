// AUTHENTICATION
$(document).ready(function () {
  // open register
  $("#join-us").click(function () {
    $("#auth-title").html("Register");
    $("#login-form").hide();
    $("#register-form").show();
  });

  // open login
  $("#sign-in").click(function () {
    $("#auth-title").html("Login");
    $("#register-form").hide();
    $("#login-form").show();
  });

  // toggle passwod visibility
  $("#checkbox").click(function () {
    var x = document.querySelector("#password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  });
  $("#checkbox_").click(function () {
    var x = document.querySelector("#password_");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  });
});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

// reCAPTCHA
// function onSubmit(token) {
//   document.getElementById("register-form").submit();
// }
// function onRecaptchaLoadCallback() {
//   var clientId = grecaptcha.render("inline-badge", {
//     sitekey: "6LedzUMeAAAAAEopHYgH45weICZbcodupci-dK9W",
//     badge: "inline",
//     size: "invisible",
//   });

//   grecaptcha.ready(function () {
//     grecaptcha
//       .execute(clientId, {
//         action: "includes/register.php",
//       })
//       .then(function (token) {
//         // Verify the token on the server.
//       });
//   });
// }

// Date picker
let today = new Date().toISOString().substr(0, 10);
document.querySelector("#datepicker").value = today;

// add autocomplete for all form / input
let tagArr = document.getElementsByTagName("form");
for (let i = 0; i < tagArr.length; i++) {
  tagArr[i].autocomplete = "off";
}
