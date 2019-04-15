<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="_token" content="{{csrf_token()}}" />
        <title>Laravel Project</title>
        <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
      <div class="container" style="background-image:url('takis.jpg');">
        <h3>Laravel Sessions</h3>
        <span style="float:left;top:50%;"> Welcome to The Laravel Session. Here you can create an account. Sign up Today!
        </span>
      <span style="float:right;top:50%;bottom:50%;"><a class='btn btn-default' href='/login'>Log In</a>&nbsp;<a class='btn btn-default' href='/signup'>Sign Up</a></span>
      </div>
      <div class='container'>
        <center><h2 style="bottom:2%;">Welcome back!</h2></center>
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
           <form action="/login" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <table class='table tbl-striped'>
              <tr>
                <td>Username</td><td><input type='text' class='form-control' name='username'></td>
              </tr>
              <tr>
                <td>Password</td><td><input type='password' class='form-control' name='password'></td>
             </tr>
            </table>
            <centeR><input class='btn btn-success' type='submit' name='submit' value='Log In!'></center>
            </form>
        </div>
        <div class="col-sm-4"></div>
        </div>
        <div class='container' style='text-align:center;'>
                {!!$message!!}
        </div>
    </body>
</html>
