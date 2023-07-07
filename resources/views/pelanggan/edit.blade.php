@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Edit Data Pelanggan</h3>
        <form action="{{ url('/pelanggan/' . $row->pel_id) }}" method="POST">
            @method('PATCH')
            @csrf
            
            <div class="mb-3">
                <label>NO PELANGGAN</label>
                <input type="text" class="form-control"name="pel_no" value="{{ $row->pel_no }}"></>
            </div>
            <div class="mb-3">
                <label>NAMA</label>
                <input type="text" class="form-control"name="pel_nama" value="{{ $row->pel_nama }}"></>
            </div>
            <div class="mb-3">
                <label>ALAMAT</label>
                <input type="text" class="form-control"name="pel_alamat" value="{{ $row->pel_alamat }}"></>
            </div>
            <div class="mb-3">
                <label>NO HP</label>
                <input type="text" class="form-control"name="pel_hp" value="{{ $row->pel_hp }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>
        </form>
    </div>

@endsection