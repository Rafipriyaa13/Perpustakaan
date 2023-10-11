<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-10 " >
              <div class="card">
                  <div class="card-body">

                      <a href="{{ route('penerbit.create') }}" type="button" class="btn btn-success">Tambah +</a>
                      <div class="row" style="padding-top:10px;">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Nama Penerbit</th>
                                      <th scope="col">No Telepon</th>
                                      <th scope="col">Alamat</th>
                                      <th scope="col">Tanggal Dibuat</th>
                                      <th scope="col">Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach ($data as $key => $row)
                                  <tr>
                                      <td>{{ $key + 1 }}</td>
                                          <td>{{ $row->nama_penerbit }} </td>
                                          <td>{{ $row->no_telepon }} </td>
                                          <td>{{ $row->alamat }} </td>

                                          <td>{{ $row->created_at->diffForHumans() }} </td>
                                          <td>
                                              <div class="d-flex">
                                              {{-- <a href="{{route( 'pegawai.destroy',$row->id) }}"class="btn btn-danger">Delete</a> --}}
                                              <a href=" {{route('penerbit.edit', $row->id) }}"
                                                  class="btn btn-primary mr-1">Edit</a>
                                                  <form action="{{ route('penerbit.destroy',$row->id) }}" method="post">
                                                      @method('DELETE')
                                                      @csrf
                                                      <button type="button" class="btn btn-danger delete-btn" data-id="{{ $row->id }}">Hapus</button>
                                                  </form>

                                                  @endforeach  </div>
                                          </td>

                                      </tr>


                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <script src="
              https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.all.min.js
              "></script>
              <script>
                  $(document).ready(function () {
                      $('.delete-btn').click(function () {
                          let id = $(this).data('id');

                          Swal.fire({
                              title: 'Konfirmasi',
                              text: 'Apakah anda yakin Ingin menghapus data ini?',
                              icon: 'warning',
                              showCancelButton: true,
                              confirmButtonText: 'Ya',
                              cancelButtonText: 'Batal'
                          }).then((result) => {
                              if (result.isConfirmed) {
                                  // Submit the form for deletion
                                  $(this).closest('form').submit();
                              }
                          });
                      });
                  });
              </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>
