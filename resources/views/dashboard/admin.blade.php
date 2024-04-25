<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/admin.css">
    <title>AdminHub</title>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">AdminHub</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">My Calender</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Analytics</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Message</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-group'></i>
                    <span class="text">Team</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="assets/img/Nazril.JPG">
            </a>
        </nav>
        <!-- NAVBAR -->
        <!-- MAIN -->
        <main>


            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>



                <a href="#" class="btn-download">
                    <i class='bx bxs-cloud-download'></i>
                    <span class="text">Download PDF</span>
                </a>
            </div>

            <div class="info">
                @if (Session::get('sucessAdd'))
                <div class="alert alert-success   w-32 h-10">
                    {{ Session::get('sucessAdd') }}
                    @endif
                    @if (Session::get('successUpdate'))
                    <div class="alert alert-success w-32 h-10">
                        {{ Session::get('successUpdate') }}
                    </div>
                    @endif
                    @if (Session::get('successDelete'))
                    <div class="alert alert-danger w-32 h-10">
                        {{ Session::get('successDelete') }}
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger w-32 h-10">
                        @foreach ($errors->all() as $error)
                        {{ $error }}
                        @endforeach
                        </ul>
                        @endif
                    </div>


                    <ul class="box-info">
                        <li class="pr-32">
                            <i class='bx bxs-calendar-check'></i>
                            <span class="text">
                                <h3>1020</h3>
                                <p>New Order</p>
                            </span>
                        </li>
                        <li>
                            <i class='bx bxs-group'></i>
                            <span class="text">
                                <h3>2834</h3>
                                <p>Visitors</p>
                            </span>
                        </li>
                        <li>
                            <i class='bx bxs-dollar-circle'></i>
                            <span class="text">
                                <h3>$2543</h3>
                                <p>Total Sales</p>
                            </span>
                        </li>
                    </ul>

                    <div class="table-data ">
                        <div class="order">
                            <div class="head">
                                <h3>Data prestasi siswa</h3>
                                <i class='bx bx-search'></i>
                                <i class='bx bx-filter'></i>
                                <div class="head-title">
                                    <div class="left">
                                    </div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        Tambah data
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Form data prestasi
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('store.data') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Judul</label>
                                                            <input type="text" class="form-control" name="judul"
                                                                id="judul" placeholder="judul">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Nama
                                                                Lengkap</label>
                                                            <input type="text" class="form-control" name="nama"
                                                                id="nama" placeholder="Nama Lengkap">
                                                        </div>
                                                        <label for="exampleDataList" class="form-label">Jurusan</label>
                                                        <input class="form-control" type="text" name="jurusan"
                                                            id="jurusan" list="datalistOptions" id=""
                                                            placeholder="Type to search...">
                                                        <datalist id="datalistOptions">
                                                            <option value="PPLG">
                                                            <option value="DKV">
                                                            <option value="TJKT">
                                                            <option value="MPLB">
                                                            <option value="KLN">
                                                        </datalist>
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Rayon
                                                            </label>
                                                            <input type="text" class="form-control" name="rayon"
                                                                id="rayon" placeholder="rayon">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Deskripsi</label>
                                                            <textarea class="form-control" name="deskripsi"
                                                                id="deskripsi" rows="1"></textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Dokumentasi
                                                            </label>
                                                            <input type="file" class="form-control" name="foto"
                                                                id="foto" placeholder="foto">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-danger"
                                                                data-bs-dismiss="modal">kembali</button>
                                                            <button type="submit" value="kirim data siswa"
                                                                class="btn btn-success">Simpan data</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Akhir modal -->
                                </div>
                            </div>
                            <div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Nama</th>
                                            <th>Jurusan</th>
                                            <th>Rayon</th>
                                            <th>Deskripsi</th>
                                            <th>Dokumentasi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no=1; @endphp @foreach ($informasis as $item)
                                        <tr>
                                            <td class="mt-2">{{ $no++ }}</td>
                                            <td>{{ $item['judul'] }}</td>
                                            <td>{{$item['nama']}}</td>
                                            <td>{{$item['jurusan']}}</td>
                                            <td>{{$item['rayon']}}</td>
                                            <td>{{$item['deskripsi']}}</td>
                                            <td> <a href="../assets/image/{{$item->foto}}" target="_blank">
                                                    <img src="{{asset('assets/image/' . $item->foto)}}" style=""></td>
                                            <td style="display: flex; align-items: center;">
                                                <a class="btn btn-sm btn-warning" href="/edit/{{$item->id}}"><i
                                                        data-feather="link"></i>
                                                    Edit</a>
                                                <form action="/hapus/{{$item->id}}" class="mx-2" method="post">

                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" type="submit"><i
                                                            data-feather="trash"></i> Delete</button>

                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src=" assets/js/admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>