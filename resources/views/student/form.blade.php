	        	<div class="form-group">
		        	<label for="studentName">Name</label>
		        	<input type="text" class="form-control" name="name" id="studentName">
	        	</div>

	        	<div class="form-group">
	        		<label for="des">Age</label>
	        		<input type="text" class="form-control" name="age" id="studentAge">
	        	</div>

				<div class="form-group">
		        	<label for="studentMale">Male</label>
					<input type="radio" class="form-control studentGender" id="studentMale" name="gender" value="male">
					<label for="studentfemale">Female</label>
					<input type="radio" class="form-control studentGender" id="studentfemale" name="gender" value="female">
	        	</div>

	        	<div class="form-group">
	        		<label for="des">Reporting Teacher</label>
	        		<select  class="form-control" name="teacher_id" id="teacher">
					@foreach($teachers as $teacher)
					<option value="{{$teacher->id}}">{{$teacher->name}}</option>
					@endforeach
	        	</div>
