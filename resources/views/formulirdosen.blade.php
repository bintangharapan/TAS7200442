<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  </head>
  <body>
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12 bg-primary py-2">'
                <div class="dropdown float-right">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-person-circle"></i>User
                    </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Bintang</a>
                    <a class="dropdown-item" href="/user">Data Peserta</a>
                    <a class="dropdown-item" href="#">Logout</a>
            </div>
      </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-2  vh-100">
                <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" href="#" >Home</a>
                    <a class="nav-link" href="/dosen">Dosen</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Mahasiswa</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Skripsi</a>
                </div>
              </div>
              <div class="col-lg-10 vh-100">
                  <div class="card mt-4">
                      <div class="card-header"></div>
                      <div class="card-body">
                          @if(session('alert'))
                          <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong>{{ session('alert') }}</strong>
                              <button type="button" class="close" data-dismiss='alert' aria-label='Close'>
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          @endif
            <div class="container-fluid rounded">
            <form action="/dosen/simpandosen" method="POST">
            @csrf
            <div class="form-group w-25">
                <label>NIDN</label>
                <input type="number" name="nidn" class="form-control" placeholder="Masukkan NIDN" required>
            </div>
            <div class="form-group w-25">
                <label>Nama Dosen</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
            </div>
            <label>Status</label>
            <div class="form-check w-25=">
                <input type="radio" name="status" value="Dosen Tetap" class="form-check-input">
                <label>Dosen Tetap</label>
            </div>
            <div class="form-check w-25">
                <input type="radio" name="status" value="Dosen Tidak Tetap" class="form-check-input">
                <label>Dosen Tidak Tetap</label>
            </div>
            <div class="form-group w-25">
                <label>Jabatan Fungsional</label>
                <select name="jafung" class="form-control">
                    <option value="0">-----Pilih Jabatan Fungsional-----</option>
                    <option value="Tenaga Pengajar">Tenaga Pengajar</option>
                    <option value="Asisten Ahli">Asisten Ahli</option>
                    <option value="Lektor">Lektor</option>
                    <option value="Lektor Kepala">Lektor Kepala</option>
                    <option value="Guru Besar">Guru Besar</option>
                </select>
            </div>
            <label>Bidang Keahlian</label>
            <div class="form-check w-25">
                <input type="checkbox" name="pakar[]" value="Artificial Intelligence" class="form-check-input">
                <label>Artificial Intelligence</label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" name="pakar[]" value="Web Engineer" class="form-check-input">
                <label>Web Engineer</label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" name="pakar[]" value="DB Engineer" class="form-check-input">
                <label>DB Engineer</label>
            </div>
            <div class="form-group pt-4">
                <input type="submit" value="SIMPAN" class="btn btn-outline-primary">
            </div>
        </form>
      </div>
                    
                  </div>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>