@extends('template.penjual')
@section('base')
<div class="content-wrapper">
    <div class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <p>SELAMAT DATANG {{ $penjual->nama }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection