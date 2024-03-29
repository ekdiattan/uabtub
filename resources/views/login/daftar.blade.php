<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>UABT UB | Daftar</title>
    <link rel="icon" type="image/x-icon" href="/img/logouabt.png">

</head>
<body>
    <div class="container">
        <form action="/daftar" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" >Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Gunakan akun @student.ub.ac.id" value="{{ old('email') }}">
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Buat Kata Sandi</label>
                <input type="text" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
    </div>
</body>
</html>