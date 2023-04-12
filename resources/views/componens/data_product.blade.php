@extends('index')

@section('title')
    Form Data Product
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
        <h2>Form Data Product</h2>
        <form method="POST" action="{{ url('products') }}">
            @csrf
            <label>Nama Product</label>
            <input type="text" name="name" placeholder="Masukkan Nama Product" value="{{ old('name') }}">

            <label>Harga</label>
            <input type="number" name="price" placeholder="Masukkan Harga" value="{{ old('price') }}">

            <label>Merchant</label>
            <select name="merchantId">
                <option value="" selected></option>
                @foreach ($merchant as $data)
                    <option value="{{ $data->merchant_id }}">{{ $data->merchant_name }}</option>
                @endforeach
            </select>

            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="container-table">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $data)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $data->name }}</th>
                        <th>{{ $data->price }}</th>
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
