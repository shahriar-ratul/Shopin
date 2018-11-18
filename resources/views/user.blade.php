@extends('front.app')

@section('content')
<div class="container">
	<div class="row">
		 <div class="row col-md-10 col-md-offset-0 custyle">
            <table class="table table-striped custab" >
				<tr>
					
					<td>name</td>
					<td>email</td>
					<td>type</td>
					<td>action</td>
								
				</tr>

				
					<tr>
						<td>{{$data['info']->name}}</td>
						<td>{{$data['info']->email}}</td>		
						<td>@if($data['info']->type==1)
							yes
							@else
							no
							@endif
						</td>
						<td><a href="" class="btn-danger">Edit</a>
						</td>


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