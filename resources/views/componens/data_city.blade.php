@extends('index')

@section('title')
    Form Data Kota
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
        <h2>Form Data Kota</h2>
        <form method="POST" action="{{ url('cities') }}">
            @csrf
            <label>Nama Kota</label>
            <input type="text" name="cityName" placeholder="Masukkan Nama Kota" value="{{ old('cityName') }}">

            <label>Longitude</label>
            <input type="decimal" name="longitude" placeholder="Masukkan Longitude" value="{{ old('longitude') }}">

            <label>Latitude</label>
            <input type="decimal" name="latitude" placeholder="Masukkan Latitude" value="{{ old('latitude') }}">

            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="container-table">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Kota</th>
                    <th>Longitude</th>
                    <th>Latitude</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cities as $data)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $data->name }}</th>
                        <th>{{ $data->longitude }}</th>
                        <th>{{ $data->latitude }}</th>
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
