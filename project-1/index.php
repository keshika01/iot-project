<!doctype html>
<html lang="en">
  <head>
    <title>Banking System - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="nav justify-content-center container-fluid">
        <a class="navbar-brand" href="#">
          <img src="logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
          Apex Bank
        </a>
     </div>
    </nav>
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Welcome to Apex Bank</h1>
        <p>Taking Banking Technology to Common Man, Your Tech-friendly bank, Your Own Bank</p>
      </div>
    </div>

    <div class="container form-control">
        <h1 class="display-5 fw-bold">Login</h1>
        <form name="myForm" action="login.php" method="post" onsubmit="return validateForm()">
            <div class="mb-3 mt-3">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
              <label for="pwd" class="form-label">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button><br>
            New Customer? Contact Apex Bank to Register
          </form>
    </div>
  
  <footer>
    &copy; Banking System | All Right Reserved | Belongs to Apex Bank    
  </footer>
  </body>
  
  <script>
      function validateForm() {
          let x = document.forms["myForm"]["email"].value;
          let y = document.forms["myForm"]["pass"].value;
          let a="";

    if (x == "") {
        a+="Email must be filled out.\n";
    }
    if (y == "") {
        a+="Password must be filled out.\n";
    }
    
    if(a!=""){
        alert("There are some errors:\n"+a);
        return false;
    }
    else{

    }
  
  }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</html>