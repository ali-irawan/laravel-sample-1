@extends("master")
@section("title")
		{{ $title }}
@stop
@section("content")
			
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Category</th>
					</tr>
				</thead>
				<tbody>
				
					@foreach($list as $key => $value)
						<tr>
							<td>{{ $value->name }}</td>
							<td>{{ $value->email }}</td>
							<td>{{ $value->phone }}</td>
							<td>{{ $value->category_name }}</td>			
						</tr>
					@endforeach
				
				</tbody>
			</table>
@stop