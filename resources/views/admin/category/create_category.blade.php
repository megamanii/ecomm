<!-- Modal to add category -->
	   	<a class="btn btn-default" data-toggle="modal" href='#modal-id'>Add Category</a>
	   	<div class="modal fade" id="modal-id">
	   		<div class="modal-dialog">
	   			{!! Form::open(['route'=>'category.store','method'=>'post']) !!}
	   			<div class="modal-content">
	   				<div class="modal-header">
	   					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	   					<h4 class="modal-title">Add Category</h4>
	   				</div>
	   				<div class="modal-body">
	   					<div class="form-group">
	   					{{ Form::label('name', 'Name') }}
	   					{{ Form::text('name', null, array('class'=>'form-control')) }}
	   					</div>
	   				</div>
	   				<div class="modal-footer">
	   					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	   					<button type="submit" class="btn btn-primary">Save changes</button>
	   				</div>
	   			</div>
	   			{!! Form::close() !!}
	   		</div>
	   	</div>