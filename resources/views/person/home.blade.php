<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add person</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
            integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
            </script>
     <!-- Min.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
            integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
            </script>
</head>
<body> 
<div class="container mt-5"> 
  <div class="row" style="margin-top:45px">
     <div class="col-md-4 mx-auto col-md-offset-4">
          <h4>Add new person</h4><hr>
          <form action="{{ route('person.save') }}" method="post" id="login_form">
          @csrf
               <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your name">
                    <span class="text-danger error-text name_error"></span>
               </div>
               <div class="form-group">
                    <label>Surname</label>
                    <input type="text" class="form-control" name="surname" placeholder="Enter your surname">
                    <span class="text-danger error-text surname_error"></span>
               </div>
               <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter your email">
                    <span class="text-danger error-text email_error"></span>
               </div>
               <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                    <span class="text-danger error-text password_error"></span>
               </div>
               {{-- <div class="form-group">
                    <label>Repeat password</label>
                    <input type="password" class="form-control" name="rep_password" placeholder="Repeat password">
                    <span class="text-danger error-text password_error"></span>
               </div> --}}
               <br>
               <button type="submit" class="btn btn-block btn-outline-dark">Save</button>
          </form>
     </div>
  </div>
</div>
</body>
</html>