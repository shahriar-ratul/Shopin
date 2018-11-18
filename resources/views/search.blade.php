@extends('front.app')
@section('content')

<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h4>Sample product details</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>image<th>
                <th>price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $product)
            <tr>

                <td>{{$product->product_name}}</td>
                <td><a href="" class="at-in"><img src="{{ asset('/public') }}/product_images/{{ $product->product_image }}" class="img-responsive" alt=""></a></td>
                <td>TK-{{$product->product_price}}</td>
            </tr>
            @endforeach
        </tbody>
        <tr>
            <td><td>{{$details->links()}}</td></td>
        </tr>
    </table>
    @else
        no data found
    @endif
</div>
@endsection

