@extends('layouts.app_admin')

@section('content')
<div class="container">
	<div class="row">
		 <div class="row col-md-10 col-md-offset-0 custyle">
            <table class="table table-striped custab" >
				<tr>
					
					<td>Category id</td>
					<td>Category name</td>
					<td>Category image</td>
					<td>Category short description</td>
					<td>feature</td>
					<td>parent id</td>
					<td>level</td>
					<td>action</td>
								
				</tr>

				@foreach($data['my_categories'] as $row)
					<tr>
						<td>{{$row->category_row_id}}</td>
						<td>{{$row->category_name}}</td>
						<td>{{$row->category_image}}</td>
						<td>{{$row->category_short_description}}</td>
						
						<td>@if($row->is_featured==1)
							yes
							@else
							no
							@endif
						</td>
						<td>{{$row->parent_id}}
						</td>
						<td>{{$row->level}}
						</td>
						<td><a href="{{ url('/')}}/admin/category/edit/{{ $row->category_row_id }}">Edit</a>|
						<a href="{{ url('/') }}/admin/category/delete/{{ $row->category_row_id }}">Delete</a></td>


					</tr>
				@endforeach
				<tr>
					<td>{{$data['my_categories']->links()}}</td>
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