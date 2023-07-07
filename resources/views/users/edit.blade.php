@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Edit Data Users</h3>
        <form action="{{ url('/users/' . $row->users_id) }}" method="POST">
            @method('PATCH')
            @csrf
            
            <div class="mb-3">
                <label>NAMA</label>
                <input type="text" class="form-control"name="users_nama" value="{{ $row->users_nama }}"></>
            </div>
            <div class="mb-3">
                <label>EMAIL</label>
                <input type="text" class="form-control"name="users_email" value="{{ $row->users_email }}"></>
            </div>
            <div class="mb-3">
                <label>PASSWORD</label>
                <input type="text" class="form-control"name="users_pass" value="{{ $row->users_pass }}"></>
            </div>
            <div class="mb-3">
                <label>ALAMAT</label>
                <input type="text" class="form-control"name="users_alamat" value="{{ $row->users_alamat }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>
        </form>
    </div>

@endsection