@extends('layouts.main')

@section('title', $title)

@section('content')
<form action="{{ route('product-view-shop', [
    'product' => $product->code,
]) }}" method="get" class="search centerized" style="width: 300px;">
    <label>
        <b>search</b>
        <input class="thead" type="text" name="term" value="{{ $term }}" />
    </label>
  </form>
  
  {{ $shops->withQueryString()->links() }}
  <br />
  <table class="none">
    <thead class="thead">
      <tr class="none">
        <th class="none">Code</th><th class="none">Name</th><th class="none">Owner</th>
      </tr>
    </thead>
    <tbody>
    @foreach($shops as $shop)
        <tr >
            <th class="none">
                <a href="{{ route('shop-view', [
                    'shop' => $shop->code,
                ]) }}">
                    {{ $shop->code }}
                </a>
            </th>
            <td class="none">{{ $shop->name }}</td>
            <td class="none">{{ $shop->owner }}</td>
        </tr>
    @endforeach
    </tbody>
  </table>
@endsection