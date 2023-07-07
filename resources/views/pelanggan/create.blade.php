@extends ('layouts.app')

@section('content')

<div class="container">
    <h2>Tambah Data Pelanggan</h2>

    <form action="{{ url('/pelanggan') }}" method="post">
        @csrf
        <div class="mb-3">
            <label>GOLONGAN</label>
            <select name="pel_gol_id" id="">
                @foreach ($rows['data_gol'] as $row)
                <option value="{{ $row->gol_id }}">{{ $row->gol_nama }}</option>\
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>USERS</label>
            <select name="pel_users_id" id="">
                @foreach ($rows['data_users'] as $row)
                <option value="{{ $row->users_id }}">{{ $row->users_nama }}</option>\
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>NO</label>
            <input type="text" name="pel_no" class="form-control">
        </div>
        <div class="mb-3">
            <label>NAMA</label>
            <input type="text" name="pel_nama" class="form-control">
        </div>
        <div class="mb-3">
            <label>ALAMAT</label>
            <input type="text" name="pel_alamat" class="form-control">
        </div>
        <div class="mb-3">
            <label>NO HP</label>
            <input type="text" name="pel_hp" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-success">
        </div>
    </form>
</div>
@endsection