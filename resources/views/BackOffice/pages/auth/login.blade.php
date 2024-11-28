<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name').' '.'-'.' '.$page_title ?? 'Home'}}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="card">
          <div class="card-body">
            <form action="{{route('auth.login')}}" method="POST">
              @csrf
              <div class="form-group">
                <lable form="">Username</lable>
                <input type="text" name="username" required id="" class="form-control">
              </div>
              <div class="form-group">
                <lable form="">Password</lable>
                <input type="password" name="password" required id="" class="form-control">
              </div>
              <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary btn-blok">Sign In Now</button>
              </div>
            </form>
          </div>
        </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
          <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

          <script>
            @if(session('error'))
            Swal.fire({
              title: "Opss...",
              text: "{{session('error')}}",
              icon: "error"
            })
            @endif
          </script>
    </body>

</html>
