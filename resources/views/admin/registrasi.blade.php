<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
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
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="roles" id="roles" value="Manajer_Toko">
                            <label class="form-check-label" for="roles">Manager</label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="radio" name="roles" id="roles" value="Supervisor">
                            <label class="form-check-label" for="roles">Supervisor</label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="radio" name="roles" id="roles" value="Kasir">
                            <label class="form-check-label" for="roles">Kasir</label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="radio" name="roles" id="roles" value="Pegawai_Gudang">
                            <label class="form-check-label" for="roles">Gudang</label>
                          </div>
                          </div>
                          <label>Cabang</label>
                        <div class="form-check">  
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="cabang" id="cabang" value="A1">
                            <label class="form-check-label" for="cabang">Jakarta</label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="radio" name="cabang" id="cabang" value="B2">
                            <label class="form-check-label" for="cabang">Bandung</label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="radio" name="cabang" id="cabang" value="C3">
                            <label class="form-check-label" for="cabang">Semarang</label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="radio" name="cabang" id="cabang" value="C5">
                            <label class="form-check-label" for="cabang">Lampung</label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="radio" name="cabang" id="cabang" value="D4">
                            <label class="form-check-label" for="cabang">Bali</label>
                          </div>
                          <div class="d-flex justify-content-between mt-3"> 
                            <button type="submit" class="btn btn-primary">Simpan</button> 
                            <a href="{{ route('admin.pegawai') }}" class="btn btn-secondary">Kembali</a> 
                          </div>    
                     </form>
                 </div>
            </div>
        </div>
    </div>
    
    </div>
</body>
</html>