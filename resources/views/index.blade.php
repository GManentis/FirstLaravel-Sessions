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
      <span style="float:right;top:50%;">{!!$user!!}</span><br>
      </div>
          <div class='container'>
            <p style="text-align:justify;margin-top:4%;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fringilla leo urna, vel mollis augue fermentum vel. Ut lobortis diam quis neque consequat congue.
            Morbi commodo dignissim ligula dignissim malesuada. Nunc eget elit tincidunt, vestibulum felis et, rhoncus mi. Nam et erat at metus tincidunt eleifend vitae ac sapien.
            Aliquam suscipit imperdiet tristique. Nulla vel volutpat nulla, non mattis massa.
            Nam ut augue at odio varius fermentum. Vestibulum at mattis turpis. In tellus lorem, interdum at tincidunt at, mattis sed lectus. Fusce diam diam, volutpat sit amet maximus non,
            vestibulum sit amet felis. In elementum ex nec bibendum venenatis. Ut ullamcorper neque nisl, eu dictum nisl ornare non. Praesent euismod venenatis interdum. Donec consequat dui non velit
            cursus vulputate. Quisque bibendum ex malesuada, malesuada justo convallis, malesuada nulla. Nullam ut erat ac mauris porttitor mattis vel non orci. In hac habitasse platea dictumst. Aenean quis purus in sapien feugiat tempus. Mauris venenatis congue nisi ac placerat. Quisque at odio sit amet neque congue feugiat vel nec urna. Pellentesque ut libero tristique, euismod elit nec, molestie risus. Nulla facilisi.
            </p>
        </div>
      </div>
    </body>
</html>
