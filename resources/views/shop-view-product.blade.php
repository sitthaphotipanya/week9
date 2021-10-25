@extends('layouts.main')

@section('title', $title)

@section('content')
<form action="{{ route('shop-view-product', [
    'shop' => $shop->code,
]) }}" method="get" class="search centerized" style="width: 300px;">
    <label>
      <b>search</b>
      <input class="thead1" type="text" name="term" value="{{ $term }}" />
    </label>
  </form>
  
  {{ $products->withQueryString()->links() }}
  <br />
  <table>
    <thead class="thead1">
      <tr>
        <th class="none">Code</th><th class="none">Name</th>
      </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr >
            <th class="none">
                <a href="{{ route('product-view', [
                    'product' => $product->code,
                ]) }}">
                    {{ $product->code }}
                </a>
            </th>
            <td class="none">{{ $product->name }}</td>
        </tr>
        
    @endforeach
    </tbody>
  </table>
@endsection