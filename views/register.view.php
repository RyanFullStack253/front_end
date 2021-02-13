<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estate.com || Register</title>
    <?php require 'header.view.php' ?>
</head>
<body>
    <?php require 'nav.view.php' ?>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 border my-5">
                <form class="my-4 mx-2 py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label for="first_namw" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="first_name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4 mr-5">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="last_name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="other_name" class="form-label">Other Names</label>
                        <input type="text" class="form-control" id="other_name">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Eg. Password_123">
                        <div id="passwordHelpBlock" class="form-text">
                            Your password must be 8-20 characters long, contain upper and lower case letters and numbers, and must not contain spaces, special characters except underscores, or emoji.
                        </div>
                    </div>
                </form>
                <button type="submit" class="btn btn-primary mb-5" onclick="Register()">Submit</button>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
    
    <div id="result"></div>

    <?php require 'footer.view.php' ?>
</body>

<script>
    function Register(e){
        let firstName, lastName, otherName, email, password;
        firstName = document.getElementById("first_name").value;
        lastName = document.getElementById("last_name").value;
        otherName = document.getElementById("other_name").value;
        email = document.getElementById("email").value;
        password = document.getElementById("password").value;

        localStorage.setItem("email", email);
        localStorage.setItem("name", firstName);
         
        var myHeaders = new Headers();
        myHeaders.append("Content-Type", "application/json");

        var raw = JSON.stringify({
            "first_name": firstName,
            "last_name": lastName,
            "other_name": otherName,
            "email": email,
            "password": password
        });

        var requestOptions = {
            method: 'POST',
            headers: myHeaders,
            body: raw,
            redirect: 'follow'
        };

        if(firstName === "" || lastName === "" || otherName === "" || email === "" || password === ""){
            alert("All fields must have a value");
        }else{
            fetch("http://127.0.0.1:5000/add/register", requestOptions)
            .then(response => response.text())
            .then(result => (JSON.parse(result)).message === "success" ? alert("User Registered") : alert("Failed User Registration"))
            .catch(error => console.log('error', error)); 
        }
    }
</script>
</html>