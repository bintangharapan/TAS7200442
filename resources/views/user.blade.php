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
                      <div class="card-header">
                          <a name="" id="" class="btn btn-primary" href="/user/formuliruser" role="button"><i class="bi bi-plus-square-fill"></i> ADD USER</a>
                      <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/dosen/cari">
                        <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                      </div>
                <div class="card-body">
                    @foreach (['info', 'success', 'danger'] as $msg)
                    @if (session('alert-' . $msg))
                    <div class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">
                        <strong>{{ (session('alert-' . $msg)) }}</strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @endforeach
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIK User</th>
                            <th scope="col">Nama User</th>
                            <th scope="col">No. Handphone</th>
                            <th scope="col">Password</th>
                            <th scope="col">Manipulasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $no => $u)
                                <tr>
                                <th scope="row">{{ $user->firstItem() +$no }}</th>
                                <td>{{ $u -> nik_user}}</td>
                                <td>{{ $u -> nama_user}}</td>
                                <td>{{ $u -> no_handphone}}</td>
                                <td>{{ $u -> password}}</td>
                                <td>
                                    <a href="/user/edituser/{{ $u -> id}}" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i></a>
                                    <a href="/user/deleteuser/{{ $u -> id}}" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn btn-outline-danger"><i class="bi bi-trash3-fill"></i></i></a>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>   
                    {{  $user->count() }}   
                        <span class="float-right">{{ $user -> links() }}</span>
                </div>
            </div>
        </div>
  </body>
</html>           
