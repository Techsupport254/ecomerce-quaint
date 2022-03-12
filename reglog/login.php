<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>register-quaint-ecommerce</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="login-form" class="login-page">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" onclick="login()" class="toggle-btn">Login</button>
                <button type="button" onclick="register()" class="toggle-btn">Register</button>
            </div>
            <form action="https://sheetdb.io/api/v1/2gf1mf6pgzbr5" method="get" id="login" class="input-group-login">
                <input type="text" class="input-field" placeholder="Email" name="data[email]" required><br>
                <input type="password" class="input-field" placeholder="Enter Password" name="data[password]" id="pass"
                    required><br>
                <input type="checkbox" class="check-box"><span>Remember Password</span><br>
                <button type="button" class="submit-btn" value="Login" onClick="login(this.parentNode);">Login</button>
            </form>
            <div id="msg"></div>
            <script>
            function login(obj) {
                google.script.run
                    .withSuccessHandler((obj) => {
                        (obj.loggedin == true) ? document.getElementById('msg').innerHTML = "Your are logged in":
                            document.getElementById('msg').innerHTML = "Go away";
                    }).login(obj);
            }
            console.log("My Code");
            </script>
            <form action="https://sheetdb.io/api/v1/2gf1mf6pgzbr5" method="post" id="register"
                class="input-group-register">
                <input type="text" class="input-field" placeholder="First Name" name="data[firstname]" required>
                <input type="text" class="input-field" placeholder="Last Name" name="data[lastname]" required><br>
                <input type="email" class="input-field" placeholder="Email" name="data[email]" required><br>
                <input type="password" class="input-field" placeholder="Enter Password" name="data[password]"
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                    id="pass" required>
                <input type="password" class="input-field" placeholder="Confirm Password" name="data[confirmpassword]"
                    id="conpass" required><br>
                <input type="checkbox" onclick="myFunction()">Show Password<br>
                <input type="checkbox" class="check-box"><span>I agree to the terms and coditions <a href="#">read
                        more</a></span><br>
                <button type="submit" class="submit-btn">Register</button>

            </form>
        </div>
    </div>
    <script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");

    function register() {
        x.style.left = "-400px"
        y.style.left = "50px"
        z.style.left = "110px"
    }

    function login() {
        x.style.left = "50px"
        y.style.left = "450px"
        z.style.left = "0px"
    }
    </script>
    <script>
    function myFunction() {
        var x = document.getElementById("pass");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
    <script>
    var modal = document.getElementById("login-form");
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
    <script>
    function login(obj) {
        google.script.run
            .withSuccessHandler((obj) => {
                (obj.loggedin == true) ? document.getElementById('msg').innerHTML = "Your are logged in": document
                    .getElementById('msg').innerHTML = "Go away";
            }).login(obj);
    }
    console.log("My Code");
    </script>

    <script>
    var form = document.getElementById('register');
    form.addEventListener("submit", e => {
        e.preventDefault();
        fetch(form.action, {
            method: "POST",
            body: new FormData(document.getElementById("register")),
        }).then(
            response => response.json()
        ).then((html) => {
            // you can put any JS code here
            window.open('register.html', '_blank');

        });
    });
    </script>
    <iframe
        src="https://script.google.com/macros/s/AKfycbxtIF1dvI7h4dSqxfrMSPvWok0Pjm9-C6G4hq-DuxGpE_Uv_MYS9gEOLZF26_LFZmBYIA/exec"></iframe>
    <script>
    var myInput = document.getElementById("psw");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if (myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if (myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if (myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
        }

        // Validate length
        if (myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
        }
    }
    </script>

</body>

</html>