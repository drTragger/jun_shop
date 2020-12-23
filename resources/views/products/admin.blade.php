@extends('layouts.default')

@section('content')
    <a href="{{ url('/products') }}">Add product</a>

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
            <tr>
                <td>
                    <form action="{{ route('products.delete', $product['id']) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-btn fa-trash"></i> Delete
                        </button>
                    </form>
                </td>
            </tr>
        </table>
    @endforeach
@endsection
