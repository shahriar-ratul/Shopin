@extends('layouts.app_admin')

@section('content')
<div class="container">
	<div class="row">
		 <div class="row col-md-10 col-md-offset-0 custyle">
            <table class="table table-striped custab" >
				<tr>
					
					<td>name</td>
					<td>category</td>
					<td>sku</td>
					<td>price</td>
					<td>feature</td>
					<td>type</td>
					<td>Image</td>
					<td>action</td>
								
				</tr>

				@foreach($data['my_products'] as $product)
					<tr>
						<td>{{$product->product_name}}</td>
						<td>{{$product->catname->category_name}}</td>
						<td>{{$product->product_sku}}</td>
						<td>{{$product->product_price}}</td>
						
						<td>@if($product->is_featured==1)
							yes
							@else
							no
							@endif
						</td>
						<td>@if($product->is_latest==1)
							yes
							@else
							no
							@endif
						</td>
						<td>{{$product->product_image}}</td>
						<td><a href="{{ url('/')}}/edit-product/{{ $product->product_row_id }}">Edit</a>|
						<a href="{{ url('/')}}/deleteProduct/{{ $product->product_row_id }}">Delete</a></td>


					</tr>
				@endforeach
				<tr>
					<td>{{$data['my_products']->links()}}</td>
				</tr>
			</table>
		</div>
	</div>
</div>
	<style>

    .custab{
        border: 1px solid #ccc;
        padding: 5px;
        margin: 5% 0;
        box-shadow: 3px 3px 2px #ccc;
        transition: 0.5s;
    }
    .custab:hover{
        box-shadow: 3px 3px 0px transparent;
        transition: 0.5s;
    }
</style>
@endsection