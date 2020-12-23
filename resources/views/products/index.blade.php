@extends('layouts.default')

@section('content')
    @foreach($products as $product)
        <table>
            <tr>
                <td>{{ $product['name'] }}</td>
            </tr>
            <tr>
                <td>{{ $product['description'] }}</td>
            </tr>
            <tr>
                <td>{{ $product['price'] }}$</td>
            </tr>
            <tr>
                <td><a href="{{ $product['website'] }}" target="_blank">{{ $product['manufacturer'] }}</a></td>
            </tr>
        </table>
    @endforeach
@endsection
