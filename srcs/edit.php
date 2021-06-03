<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
        nav {
          height: 8vh;
        }
  
        .container {
          width: 30%;
          height: 92vh;
        }
  
        button {
          width: 100%;
        }
      </style>

    <title>Edit</title>
</head>
<body>
    <nav class="navbar navbar-light bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">IAM - Identity and Access Management</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="new-user-title">Edit user</h1>
    
        <form action="home.html" method="POST" class="new-user">
            <div class="mb-3">
                <label for="user-id" class="form-label">User ID</label>
                <input type="text" class="form-control" id="user-id">
            </div>
    
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
    
            <div class="mb-3 row">
                <div class="col">
                    <label for="first-name" class="form-label">First name</label>
                    <input type="text" class="form-control" id="first-name" aria-label="First name">
                </div>
    
                <div class="col">
                    <label for="last-name" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="last-name" aria-label="Last name">
                </div>
            </div>
    
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email">
            </div>
    
            <div class="mb-3">
                <label for="phone" class="form-label">Phone no.</label>
                <input type="text" class="form-control" id="phone">
            </div>
    
            <button type="submit" class="btn btn-primary" style="width: 100%">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>