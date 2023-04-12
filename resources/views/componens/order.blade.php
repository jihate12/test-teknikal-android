@extends('index')

@section('title')
    Form Order Product
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
        <h2>Form Order Product</h2>
        <form method="POST" action="">
            @csrf
            
            <label>Pemesan</label>
            <select name="userId">
                <option value="" selected></option>
                @foreach ($users as $data)
                <option value="{{ $data->user_id }}">{{ $data->full_name }}</option>
                @endforeach
            </select>
            
            <label>Product</label>
            <select name="productId">
                <option value="" selected></option>
                @foreach ($products as $data)
                <option value="{{ $data->product_id }}">{{ $data->name }}</option>
                @endforeach
            </select>

            <label>Quantity</label>
            <input type="number" name="qty" value="{{ old('qty') }}">

            <label>Harga</label>
            <input type="date" name="date"  value="{{ old('date') }}">

            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="container-table">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Product</th>
                    <th>Pemesan</th>
                    <th>QTY</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $data)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $data->product_id }}</th>
                        <th>{{ $data->user_id }}</th>
                        <th>{{ $data->quantity }}</th>
                        <th>{{ $data->date }}</th>
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
