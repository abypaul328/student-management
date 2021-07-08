@extends('layouts.master')

@section('content')
	<div class="">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">All Marks</h3>
			</div>

			<div class="box-body">
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>Name</th>
							<th>Term</th>
							<th>Maths</th>
							<th>Science</th>
							<th>History</th>
							<th>Total</th>
							<th>Created On</th>
							<th>Action</th>

						</tr>
						
					</thead>

					<tbody>

						@foreach($marks as $mark)
							<tr>
								<td>{{$mark->name}}</td>
								<td>{{$mark->term}}</td>
								<td>{{$mark->maths}}</td>
								<td>{{$mark->science}}</td>
								<td>{{$mark->history}}</td>
								<td>{{$mark->total}}</td>
								<td>{{$mark->createdOn}}</td>
								<td>
									<button class="btn btn-info" data-studId="{{$mark->student_id}}" data-term="{{$mark->term}}" data-maths="{{$mark->maths}}" data-science="{{$mark->science}}" data-markId={{$mark->mark_id}} data-toggle="modal" data-target="#edit">Edit</button>
									/
									<button class="btn btn-danger" data-markId={{$mark->mark_id}} data-toggle="modal" data-target="#delete">Delete</button>
								</td>
							</tr>

						@endforeach
					</tbody>


				</table>				
			</div>
		</div>
	</div>

	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
 	Add New
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New Mark</h4>
      </div>
      <form action="{{route('mark.store')}}" method="post">
      		{{csrf_field()}}
	      <div class="modal-body">
				@include('mark.form')
	      </div>
	      <div class="modal-footer">
		  <?php
		  $date = date("M j, Y h:i A");
		  ?>
		  	<input type="hidden" name="created_on" id="created_on" value="{{$date}}">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Mark</h4>
      </div>
      <form action="{{route('mark.update','test')}}" method="post">
      		{{method_field('patch')}}
      		{{csrf_field()}}
	      <div class="modal-body">
	      		<input type="hidden" name="markId" id="markId" value="">
				@include('mark.form')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save Changes</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('category.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="markId" id="markId" value="">

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
	        <button type="submit" class="btn btn-warning">Yes, Delete</button>
	      </div>
      </form>
    </div>
  </div>
</div>

@endsection
