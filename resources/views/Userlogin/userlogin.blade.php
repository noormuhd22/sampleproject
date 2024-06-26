


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
  .container{
        width: 500px;
        margin-top: 200px;
        background-color: #ffffff;
        color:#007bff;
    padding: 20px;
    border-radius: 12px;
    border: 2px solid #007bff;
    box-shadow: 0 0 10px rgba(0, 0, 10, 0.67);
    }
     h4{
      text-align: center;
     }
     a button{
      background-color:  #007bff;
      color: white;
     
      padding:  5px;
     height: 40px;
      margin: 10px;
      width: 70px;
      border-radius: 5px;
      border: none;
     }
     p a{
      color: #007bff;
     }
     .btn-primary{
      border: 1px solid white;
     }
     .btn-primary:hover{
      border: 1px solid rgb(255, 255, 255);
     }
</style>
<body>
  
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

  <div class="container ">
    
    <h2 class="w3-jumbo"><b>Login </b></h2>
          
          
            <form action="{{ route('userlogin') }}" method="POST">
                @csrf
             
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                <div class="text-danger">

                  @error('email')
                    {{ $message }}
                  @enderror 
                </div>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" required>
                <div class="text-danger">

                  @error('password')
                    {{ $message }}
                  @enderror 
                </div>
             
              </div>
              <button type="submit" class="btn btn-primary">login</button>
            </form>
            <div class="mt-3">
              <p>Create an account ? <a href="{{ route('usersignuppage') }}">Signup</a></p>
            </div>
          </div>
        </div>
        <br>
        <br>
        <br>
    



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


