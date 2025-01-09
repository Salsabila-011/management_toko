<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pegawai</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>
    <div class="text-center mt-5">
        <h2>Edit Akun</h2>
        <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-start">
                    <form action="{{ route('admin.update', $pegawai->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <label>Nama</label>
                        <input type="text" name="name" value="{{ $pegawai->name }}" class="form-control mb-2">
                        <label>Email</label>
                        <input type="text" name="email" value="{{ $pegawai->email }}" class="form-control mb-2">
                        <label>Password</label>
                        <input type="password" name="password" value="{{ $pegawai->password }}" class="form-control mb-2">
                        <label>Role</label>
                        <div class="form-check">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="roles" id="roles" value="Manajer_Toko" {{ $pegawai->roles == 'Manajer_Toko' ? 'checked' : '' }}>
                            <label class="form-check-label" for="roles">Manager</label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="radio" name="roles" id="roles" value="Supervisor" {{ $pegawai->roles == 'Supervisor' ? 'checked' : '' }}>
                            <label class="form-check-label" for="roles">Supervisor</label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="radio" name="roles" id="roles" value="Kasir" {{ $pegawai->roles == 'Kasir' ? 'checked' : '' }}>
                            <label class="form-check-label" for="roles">Kasir</label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="radio" name="roles" id="roles" value="Pegawai_Gudang" {{ $pegawai->roles == 'Pegawai_Gudang' ? 'checked' : '' }}>
                            <label class="form-check-label" for="roles">Gudang</label>
                          </div>
                          </div>
                          <label>Cabang</label>
                        <div class="form-check">  
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="cabang" id="cabang" value="A1" {{ $pegawai->cabang_id == 'A1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="cabang">Jakarta</label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="radio" name="cabang" id="cabang" value="B2" {{ $pegawai->cabang_id == 'B2' ? 'checked' : '' }}>
                            <label class="form-check-label" for="cabang">Bandung</label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="radio" name="cabang" id="cabang" value="C3" {{ $pegawai->cabang_id == 'C3' ? 'checked' : '' }}>
                            <label class="form-check-label" for="cabang">Semarang</label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="radio" name="cabang" id="cabang" value="C5" {{ $pegawai->cabang_id == 'C5' ? 'checked' : '' }}>
                            <label class="form-check-label" for="cabang">Lampung</label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="radio" name="cabang" id="cabang" value="D4" {{ $pegawai->cabang_id == 'D4' ? 'checked' : '' }}>
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
