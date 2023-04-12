@extends('index')

@section('title')
    Form Data Diri
@endsection

@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif
    @if (session('msg'))
        <div>{{ session('msg') }}</div>
    @endif
    <div class="container">
        <h2>Form Data Diri</h2>
        <form method="POST" action="{{ url('users') }}">
            @csrf
            <label>Nama Lengkap</label>
            <input type="text" name="full_name" placeholder="Masukkan Nama Lengkap" value="{{ old('full_name') }}">

            <label>Email</label>
            <input type="email" name="mail" placeholder="Masukkan Email" value="{{ old('full_name') }}">

            <label>Nomor Telepon</label>
            <input type="tel" name="intphone" placeholder="Masukkan Nomor Telepon" value="{{ old('full_name') }}">

            <label>Alamat</label>
            <textarea name="straddress" placeholder="Masukkan Alamat"></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="container-table">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $data)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $data->full_name }}</th>
                        <th>{{ $data->address }}</th>
                        <th>{{ $data->phone }}</th>
                        <th>{{ $data->mail }}</th>
                        <th>
                            <button>update</button>
                            <button>delete</button>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
