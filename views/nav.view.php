<link rel="stylesheet" href="../css/style.css">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="images/logo.jpg" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php"> Home </a>
        </li>
          <li class="nav-item active">
          <a class="nav-link" href="about.php"> About Us </a>
        </li>        
        <li class="nav-item">
          <a class="nav-link" href="Contact.php"> Contact Us </a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0 search_input_placeholder">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </div>
            <div class="col-sm-6">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Search </button>
            </div>
          </div>
        </div>
      </form>
          <a class="nav-link text-light btn btn-primary my-sm-0" id="registerBtn" href="register.php"> Register </a>
    </div>
    <div class="ml-5">
            <p>Welcome, <b id="result"></b></p>
          </div>
          <script>
            document.getElementById("result").innerHTML = localStorage.getItem("name");
          </script>
  </div>
</nav>
