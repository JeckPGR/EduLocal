<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login form</title>
  <!-- Boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
      overflow: hidden;
    }
  </style>
  <!-- Aos -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />



</head>

<body>
  <div class="row">
    <div class="col-lg-8 col-md-6 bg-primary-subtle d-flex justify-content-center" style="height: 100vh">
      <img src="img/Learning-amico.svg" alt="" class="img-fluid" style="height: 100vh" />
    </div>
    <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center flex-column" style="height: 100vh">
      @if (session('msg'))
      <div class="alert alert-{{session('msg.type')}}" role="alert">
        {{session('msg.msg')}}
      </div>
      @endif
      <img src="img/logo.png" data-aos="fade-down" data-aos-duration="1000" alt="Logo" height="180px" width="auto" />
      <form data-aos="fade-right" data-aos-duration="1000" method="POST" action="/auth">
        @csrf
        <div class="my-3">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" />
          <div id="emailHelp" class="form-text">
            We'll never share your email with anyone else.
          </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" />
        </div>
        <div class="mb-3 d-flex justify-content-between">
          <div>
            <input type="checkbox" class="form-check-input" id="exampleCheck1" />
            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
          </div>
          <a href="/">Back</a>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>

  <!-- AOS initalization -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>