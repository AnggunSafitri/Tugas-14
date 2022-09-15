@extends('template.admin')
@section('base')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                Tambah Data Produk
                            </div>
                            
                            <!-- form start -->
                            <form action="{{ url('admin/produk') }}" method="POST">
                                @csrf
                                <div class="form-horizontal">

                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Toko</label>
                                            <div class="col-sm-10">
                                                <select name="id_penjual" class="form-control">
                                                    <option value=""> Pilih Nama Toko</option>
                                                    @foreach ($list_penjual as $penjual)
                                                        <option value="{{ $penjual->id }}"> {{ $penjual->nama_toko }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Produk</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" placeholder="Nama Produk"
                                                    name="nama_produk">
                                                    @error('nama_produk')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori Produk</label>
                                            <div class="col-sm-10">
                                                <select name="id_kategori" class="form-control">
                                                    <option value=""> Pilih Kategori</option>
                                                    @foreach ($list_kategori as $kategori)
                                                        <option value="{{ $kategori->id }}"> {{ $kategori->nama_kategori }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Warna</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control @error('warna') is-invalid @enderror" placeholder="Warna"
                                                    name="warna">
                                                    @error('warna')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Stok</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control @error('stok') is-invalid @enderror" placeholder="Stok"
                                                    name="stok">
                                                    @error('stok')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control @error('harga') is-invalid @enderror" placeholder="Harga"
                                                    name="harga">
                                                    @error('harga')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>


                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-info">Batal</button>
                                        <button class="btn btn-default float-right">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
