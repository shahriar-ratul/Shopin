@extends('layouts.app_admin')
	@section('content')
	<div class="container">
    	<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
							<div class="panel-body">

								<form method="post" action="{{ url('/')}}/store-product" enctype="multipart/form-data" >
									{{ csrf_field() }}



		<div class="form-group">
			<label class="col-md-4 control-label" for="email">category</label>
				<div class="col-md-6">
					<select name="category" required="required">
						<option value="">select</option>
							@foreach($data['my_categories'] as $category)
                             <option value="{{ $category->category_row_id}}" >
                                 {{$category->category_name}} </option>
                             @endforeach


					</select>

				<br/><br/>

			</div>
		</div>



	<div class="form-group">
		<label class="col-md-4 control-label" for="email">Product Name</label> <div class="col-md-6">

			<input id="product_name" name="product_name" type="text" class="form-control input-md" required="">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label" for="email">Product Sku</label>
		<div class="col-md-6">
		<input id="product_sku" name="product_sku" type="text" class="form-control input-md" >
	</div>
	</div>

	<div class="form-group">
	 <label class="col-md-4 control-label" for="email">Product Price</label>
		<div class="col-md-6">
		<input id="product_price" name="product_price" type="text" class="form-control input-md" required="">
	</div>
	</div>





	<div class="form-group">
	<label class="col-md-4 control-label" for="email"> product_height</label>
		<div class="col-md-6">
		<input id="Product" name="product_height" type="text" class="form-control input-md" >
	</div>
	</div>

	<div class="form-group">
	<label class="col-md-4 control-label" for="email">Product Width</label>
		<div class="col-md-6">
	<input id="product_width" name="product_width" type="text" class="form-control input-md">
	</div>
	</div>

	<div class="form-group">
	<label class="col-md-4 control-label" for="email">Product Weight</label>
		<div class="col-md-6">
		<input id="product_weight" name="product_weight" type="text" class="form-control input-md">
	</div>
	</div>



								<div class="form-group">
									<label class="col-md-4 control-label" for="email">Product short Description</label>
										<div class="col-md-6">
											<textarea name="product_short_description" rows="5"></textarea>
											<br/>
										</div>
								</div>
								<div class="form-group">
										<label class="col-md-4 control-label" for="email">Image</label>
												<div class="col-md-6">
													<input type="file" name="product_image" accept="image/*">
													  <br/>
												</div>
								</div>


								<div class="form-group">
										<label class="col-md-4 control-label" for="email">is_featured</label>
												<div class="col-md-6">
													<input type="radio" name="is_featured" value="1"> yes<br>
													 <input type="radio" name="is_featured" value="0">no
												</div>
									</div>

								<div class="form-group">
										<label class="col-md-4 control-label" for="email">Leatest</label>

												<div class="col-md-6">
													<input type="checkbox" value="1"  name="is_latest">new <br>
													<input type="checkbox" value="0" name="is_latest">old
												</div>

								</div>



								<div class="form-group">
									<label class="col-md-4 control-label" for="singlebutton"></label>
										<div class="col-md-4">
											<button id="submit" name="submit" class="btn btn-primary">Add Product</button>
										</div>
								</div>


</form>

<div style="clear:both;padding:200px 0 0 0"><a href="{{ url('/')}}/home"> Back to My Dashboard </a></div>
</div>
</div>
</div>
</div>
@endsection
