<html>
  <head>

  <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>

</head>
  <style>
    body {
      background: #dd5e89;
  background: -webkit-linear-gradient(to left, #5e7cdd, #6a90bb);
  background: linear-gradient(to left, #88afd4, #304874);
  margin:0px;
  font-family: 'Ubuntu', sans-serif;
  background-size: 100% 110%;
}
h1, h2, h3, h4, h5, h6, a {
  margin:0; padding:0;
}

.login {

  margin:0 auto;
  max-width:500px;
}
.login-header {
  color:#fff;
  text-align:center;
  font-size:300%;
}
/* .login-header h1 {
   text-shadow: 0px 5px 15px #000; */
}
.login-form {
  border:.5px solid #fff;
  background:#95b8db;
  border-radius:10px;
  box-shadow:0px 0px 10px #000;
}
.login-form h3 {
  text-align:left;
  margin-left:40px;
  color:black;
}
.login-form {
  box-sizing:border-box;
  padding-top:15px;
  padding-bottom:10%;
  margin:5% auto;
  text-align:center;
}
.login input[type="text"],
.login input[type="password"] {
  max-width:400px;
  width: 80%;
  line-height:3em;
  font-family: 'Ubuntu', sans-serif;
  margin:1em 2em;
  border-radius:5px;
  border:2px solid #95b8db;
  outline:none;
  padding-left:10px;
}
.login-form input[type="button"] {
  height:50px;
  width:150px;
  background:#fff;
  border:1px solid #f2f2f2;
  border-radius:20px;
  color: slategrey;
  text-transform:uppercase;
  font-family: 'Ubuntu', sans-serif;
  cursor:pointer;
}
.sign-up{
  color:#95b8db;
  margin-left:-70%;
  cursor:pointer;
  text-decoration:underline;
}
.no-access {
  color:#95b8db;
  margin:20px 0px 20px -57%;
  text-decoration:underline;
  cursor:pointer;
}
.try-again {
  color:#95b8db;
  text-decoration:underline;
  cursor:pointer;
}

/*Media Querie*/
@media only screen and (min-width : 150px) and (max-width : 530px){
  .login-form h3 {
    text-align:center;
    margin:0;
  }
  .sign-up, .no-access {
    margin:10px 0;
  }
  .login-button {
    margin-bottom:10px;
  }
}
</style>
<body>
<div class="login">
  <div class="login-header">
    <h1>Add Bus</h1>
  </div>
  <div class="login-form">
  <form class="form-inline" action ="{{route('bus.store')}}" method="POST" enctype="mutipart/form-data" >
  @csrf
    {{ csrf_field() }}
    <h3>Bus number: </h3>
  <div class="login-form">
    <input type="text" class="form-group" id="bus_num" name="bus_num" >
    @if($errors->has('bus_num'))
    <div class="error">{{ $errors->first('bus_num') }}</div>
@endif

    <h3>Driver name </h3>
    <div class="form-group" >
  <label for="Driver_name"></label>

    <input type="text" class="form-group" id="driver_name" name="driver_name">
    @if($errors->has('driver_name'))
    <div class="error">{{ $errors->first('driver_name') }}</div>
@endif
<div class="form-group" >
    <h3> Line name:</h3>


    <select style="width:400px;height:47px;border:0px solid black;border-radius:4px;margin-top:10px;"class="form-group" id="line_name" name="line_name" >

    @foreach ( $data as $BB)
<option>{{$BB->line_name}}</option>
@endforeach

</select>
<br><br>
    <h3> number of seats:</h3>
    <label for="seats_num"> </label>
      <input type="text" class="form-group" id="seats_num" name="seats_num">
      @if($errors->has('seats_num'))
      <div class="error">{{ $errors->first('seats_num') }}</div>
  @endif
    </div>
</div>


    <div class="login-form">
    <button style="border-radius:30px;border:0px solid black;" type="submit">
        <input type="button" value="Add" class="login-button"/>
        </button>
    </div>
  </div>
</div>
</div>
</div>

</body>
<script>
  $('.error-page').hide(0);

$('.login-button , .no-access').click(function(){
  $('.login').slideUp(500);
  $('.error-page').slideDown(1000);
});

$('.try-again').click(function(){
  $('.error-page').hide(0);
  $('.login').slideDown(1000);
});
</script>
</html>
