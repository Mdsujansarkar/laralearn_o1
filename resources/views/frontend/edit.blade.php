<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    	html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-align: center;
  -ms-flex-pack: center;
  -webkit-box-align: center;
  align-items: center;
  -webkit-box-pack: center;
  justify-content: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

    </style>

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <a href="{{ route('show') }}" class="form-signin">Show Info</a>
    <form class="form-signin" action="{{ route('student.update') }}" method="POST">
     @csrf
     <input type="hidden" name="studUpdate" value="{{ $edit->id }}">
      <h1 class="h3 mb-3 font-weight-normal">Student Info</h1>

      <label for="inputEmail" class="sr-only">Student Nmae</label>
      <input type="text" name="name" id="inputEmail" class="form-control" value="{{ $edit->name }}" required autofocus><br>

      <label for="inputPassword" class="sr-only">Student Roll</label>
      <input type="text" id="inputPassword" name="roll" class="form-control" value="{{ $edit->roll }}" required><br>
      <label for="inputPassword" class="sr-only">Student Subject</label>
      <input type="text" id="inputPassword" name="subject" class="form-control" value="{{ $edit->subject }}" required>
     <br><label for="inputPassword" class="sr-only">Student Class</label>
      <input type="text" id="inputPassword" name="class" class="form-control" value="{{ $edit->class }}" required>
     
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Update Info</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
