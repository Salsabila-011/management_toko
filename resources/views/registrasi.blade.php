<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Akun</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>
    <div class="text-center mt-5">
        <h2>Tambah Akun</h2>
        <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-start">
                    <form action="{{ route('registrasi.submit') }}" method="post">
                        @csrf
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control mb-2">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control mb-2">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control mb-2">
                        <label>Role</label>
                        <div class="form-check">
  <input class="form-check-input" type="radio" name="roles" id="roles" value="Admin_Utama">
  <label class="form-check-label" for="roles">
    Admin
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="roles" id="roles" value="Manajer_Toko">
  <label class="form-check-label" for="roles">
    Manager
  </label>
</div>
                        <button class="btn btn-primary">Simpan</button>
                     </form>
               </div>
            </div>
        </div>
    </div>
    
    </div>
</body>
</html>