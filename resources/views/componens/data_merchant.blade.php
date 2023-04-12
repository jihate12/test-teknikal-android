@extends('index')

@section('title')
    Form Data Merchant
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
        <h2>Form Data Merchant</h2>
        <form method="POST" action="{{ url('merchant') }}">
            @csrf
            <label>Nama Merchant</label>
            <input type="text" name="merchant_name" placeholder="Masukkan Nama Merchant" value="{{ old('merchant_name') }}">

            <label>Kota</label>
            <select name="cityId">
                <option value="" selected></option>
                @foreach ($cities as $data)
                    <option value="{{ $data->city_id }}">{{ $data->name }}</option>
                @endforeach
            </select>

            <label>Nomor Telepon</label>
            <input type="tel" name="phone" placeholder="Masukkan Nomor Telepon" value="{{ old('tel') }}">

            <label>Alamat</label>
            <textarea name="address" placeholder="Masukkan Alamat"></textarea>
            
            <label>Expired Date</label>
            <input type="date" name="exdate" placeholder="Masukkan Tanggal" value="{{ old('exdate') }}">
            
            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="container-table">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Merchant</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Expire Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($merchant as $data)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $data->merchant_name }}</th>
                        <th>{{ $data->phone }}</th>
                        <th>{{ $data->address }}</th>
                        <th>{{ $data->expire_date }}</th>
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
