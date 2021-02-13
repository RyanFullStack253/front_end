<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Estate.com || Contact Us</title>
    <?php require 'header.view.php'?>
</head>
<body>
   
<?php require 'nav.view.php' ?>
   
    <!--banner-->
    
  <header class="banner"></header>
  
  <!--banner-->


  <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 border my-5">
                <h1>Contact Us</h1>
                <form>
                    <div class="form-group my-4">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter full name">
                    </div>
                    <div class="form-group my-4">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" class="form-control" id="phone_number" aria-describedby="emailHelp" placeholder="Enter phone number">
                    </div>
                    <div class="form-group my-4">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group my-4">
                        <label class="my-1 mr-2" for="preference">Preference</label>
                        <select class="custom-select my-1 mr-sm-2" id="preference">
                            <option selected>Choose...</option>
                            <option value="1">1 story</option>
                            <option value="2">2 story</option>
                            <option value="3">1-3 rooms</option>
                            <option value="3">4-6 rooms</option>
                        </select>
                    </div>
                    <div class="form-group my-4">                            
                        <label for="message" class="mb-1">Message</label>
                        <textarea class="form-control" id="message" cols="30" rows="7" class="message"></textarea>
                    </div>
                </form>
                <button type="submit" class="btn btn-primary mb-3" onclick="Contact()">Submit</button>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>

    <div id="result">jjj</div>
<?php require 'footer.view.php' ?>
</body>
<script>
    function Contact(){
        let name, phoneNumber, email, preference, message;
        name = document.getElementById("name").value;
        phoneNumber = document.getElementById("phone_number").value;
        email = document.getElementById("email").value;
        preference = document.getElementById("preference").value;
        message = document.getElementById("message").value;

        registerEmail = localStorage.getItem("email");
        if(registerEmail === email){
            var myHeaders = new Headers();
            myHeaders.append("Content-Type", "application/json");

            var raw = JSON.stringify({
                "name": name,
                "phone_number": phoneNumber,
                "email": email,
                "preference": preference,
                "message": message
            });

            var requestOptions = {
                method: 'POST',
                headers: myHeaders,
                body: raw,
                redirect: 'follow'
            };

            if(name === "" || phoneNumber === "" || email === "" || preference === "" || message === ""){
                alert("All fields must have a value");
            }else{
                fetch(" http://127.0.0.1:5000/add/contact", requestOptions)
                .then(response => response.text())
                .then(result => (JSON.parse(result)).message === "success" ? alert("Thank you for your feedback.") : alert("Faied to send message."))
                .catch(error => console.log('error', error)); 
            }
        }else{
            alert("This email is not registered");
        }
    } 
</script>
</html>

