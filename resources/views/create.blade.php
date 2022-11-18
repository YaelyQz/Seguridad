<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <form action = '\create' method='POST'>
                {{ csrf_field() }}
                <h3 class="mb-5">Create User</h3>
                <div class="form-outline mb-4">
                <input type="name" name="name" class="form-control form-control-lg" />
                <label class="form-label" for="name">Name</label>
                </div>
                <div class="form-outline mb-4">
                <input type="email" name="email" class="form-control form-control-lg" />
                <label class="form-label" for="email">Email</label>
                </div>

                <div class="form-outline mb-4">
                <input type="password" name="password" class="form-control form-control-lg" />
                <label class="form-label" for="password">Password</label>
                </div>

                <button class="btn btn-primary btn-lg btn-block" type="submit">Create</button>
                <a href="{{url('/')}}">Iniciar Sesion</a>
            </form>            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>    


    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
></script>
</body>
</html>