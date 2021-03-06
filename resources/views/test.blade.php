<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container-fluid rounded mt-4 bg-secondary">
        <form action="">
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
                <input type="submit" value="SIMPAN" class="btn btn-outline-danger">
            </div>
        </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>