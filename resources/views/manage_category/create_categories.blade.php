@extends('layouts.app_admin')

@section('content')
<div class="container">
	<div class="row">



		 <div class="row col-md-8 col-md-offset-2 custyle">

		 <form role="form" method="post" action="{{ url('/')}}/store-categories" enctype="multipart/form-data" >

			{{ csrf_field() }}

			<!--
		 		<div class="form-group">
                  <label>Select</label>
                  <select class="form-control">
                  <option>select</option>
                  @foreach($data['my_categories'] as $category)
	                 <option value="{{ $category->category_row_id}}" >
	                  {{$category->category_name}} 
	                 </option>
                  @endforeach
                    
                  </select>
                </div>
               -->
	            <div class="box-body">
                <div class="form-group">
                  <label class="col-md-5 control-label" for="email">Category Name</label>
                  <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Category Name" required="">
                </div>
                <div class="form-group">
                 <div class="box-body pad">
                  <label class="col-md-5 control-label" for="email">Category Short description</label>
                   <textarea  name="category_short_description" rows="6" cols="80">
    
                   </textarea>
                </div>
                 <div class="form-group">
					<label class="col-md-5 control-label" for="email">Parent id</label> 
					 <input type="text" class="form-control" name="parent_id" id="parent_id" placeholder="Parent id">
					
				</div>
				 <div class="form-group">
					<label class="col-md-5 control-label" for="email">Level</label> 
					 <input type="text" class="form-control" name="level" id="parent_id" placeholder="level">
					
				</div>
                </div>
                <div class="form-group">
                 <div class="box-body pad">
                  <label class="col-md-5 control-label" for="email">Category long description</label>
                   <textarea  name="category_long_description" rows="6" cols="80">
    
                   </textarea>
                </div>
                </div>

	                <div class="form-group">
	                  <label class="col-md-3 control-label" for="email">Category Image</label>
	                  <div class="col-md-8">
						        <input type="file" name="category_image" accept="image/*"> 
						        </div>
	                </div>
                </div>
        <div class="box-body">
                <div class="form-group">
        					<label  class="col-md-3 control-label" for="email">is_featured</label> 
        							<input type="radio" name="is_featured" value="1"> yes<br>
        							 <input type="radio" name="is_featured" value="0">no
        				</div>

				  <div class="form-group">
					   <label class="col-md-3 control-label" for="email">Has child</label> 
							   <input type="radio" name="has_child" value="1">yes <br>
							   <input type="radio" name="has_child" value="0">no					
				  </div>
			</div>
              
              
              

              <div class="box-footer">
              	<div class="row col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>


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