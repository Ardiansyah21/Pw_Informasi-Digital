<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/admin.css">
    <title>Document</title>
</head>

<body>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger w-75">
            {{ $error }}</li>
            @endforeach
    </ul>
    @endif
    <div>
        <div class="card" style="margin:20px; ">
            <div class="card-header">Edit data</div>
            <div class="card-body">
                <form action="/ubah/{{$informasis->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <label>Judul</label><br>
                    <input type="Text" name="judul" id="judul" class="form-control" class="form-control"
                        placeholder="Masukkan judul" value="{{$informasis->judul}}">
                    <label>Nama</label><br>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama"
                        value="{{$informasis->nama}}">
                    <label>Jurusan</label><br>
                    <input type="text" name="jurusan" id="jurusan" class="form-control" placeholder="Masukkan jurusan"
                        value="{{$informasis->jurusan}}">
                    <label>Royon</label><br>
                    <input type="text" name="rayon" id="rayon" class="form-control" placeholder="Masukkan rayon"
                        value="{{$informasis->rayon}}">
                    <label>Deskripsi</label><br>
                    <input type="text" name="deskripsi" id="deskripsi" class="form-control"
                        placeholder="Masukkan deskripsi" value="{{$informasis->deskripsi}}">
                    <td> <img src="{{asset('assets/image/' . $informasis->foto)}}" width="80"> </td>
                    <input type="file" name="foto">
                    <button type="submit" value="Kirim data siswa" class=" btn btn-success">Kirim</button>
                    <a href="/admin" class="btn btn-danger btn-sm">Kembali</a>
                </form>
            </div>
        </div>
</body>

</html>