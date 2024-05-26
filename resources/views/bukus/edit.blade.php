<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('admin/css/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ asset('admin/css/timeline.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/startmin.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('admin/css/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            {{-- NAVBAR --}}
            @include('layouts.navbar')
            {{-- /NAVBAR --}}

            {{-- SIDEBAR --}}
            @include('layouts.sidebar')
            {{-- /SIDEBAR --}}
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit Data Buku</h1>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Edit Data Buku
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label>Nama Buku</label>
                                                <input type="text" class="form-control" name="nama_buku"
                                                    placeholder="Nama Buku" value="{{ $buku->nama_buku }}">
                                                <p class="help-block">Masukkan data yang anda mau</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Deskripsi</label>
                                                <textarea class="form-control" rows="3" placeholder="Masukkan Deskripsi" name="deskripsi" >{{ $buku->deskripsi }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select class="form-control" name="kategori" >
                                                    <option disabled selected>Masukkan Kategori</option>
                                                    <option value="Novel"{{ $buku->kategori == 'Novel' ? 'selected' : ''}}><b>Novel</b></option>
                                                    <option value="Komik"{{ $buku->kategori == 'Komik' ? 'selected' : ''}}><b>Komik</b></option>
                                                    <option value="Majalah"{{ $buku->kategori == 'Majalah' ? 'selected' : ''}}><b>Majalah</b></option>
                                                    <option value="Biografi"{{ $buku->kategori == 'Biografi' ? 'selected' : ''}}><b>Biografi</b></option>
                                                    <option value="Dongeng"{{ $buku->kategori == 'Dongeng' ? 'selected' : ''}}><b>Dongeng</b></option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="datePicker" class="form-label">Pilih Tanggal</label>
                                                <input type="date" class="form-control" id="datePicker"
                                                    name="tanggal_terbit" value="{{ $buku->tanggal_terbit }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Penulis</label>
                                                <select class="form-control" name="id_penulis">
                                                    @foreach ($penulis as $data)
                                                        <option value="{{ $data->id }}"
                                                            {{ $data->id == $buku->id_penulis ? 'selected' : '' }}>{{ $data->nama_penulis }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Cover</label>
                                                <input type="file" name="cover">
                                            </div>
                                            <button type="submit" class="btn btn-success">Tambah</button>
                                            <a href="{{ url('buku') }}" class="btn btn-primary">Kembali</a>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('admin/js/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('admin/js/raphael.min.js') }}"></script>
    <script src="{{ asset('admin/js/morris.min.js') }}"></script>
    <script src="{{ asset('admin/js/morris-data.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('admin/js/startmin.js') }}"></script>

</body>

</html>
