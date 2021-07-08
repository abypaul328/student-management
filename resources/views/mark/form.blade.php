				<div class="form-group">
	        		<label for="des">Student</label>
	        		<select  class="form-control" name="student_id" id="student">
					@foreach($students as $stud)
					<option value="{{$stud->id}}">{{$stud->name}}</option>
					@endforeach
	        	</div>

	        	<div class="form-group">
	        		<label for="des">Trem Selection</label>
	        		<select  class="form-control" name="term" id="term">
					<option value="One">One</option>
					<option value="Two">Two</option>
					<option value="Three">Three</option>
	        	</div>

				<div class="form-group">
		        	<label for="studentMale">Maths</label>
					<input type="number" class="form-control" id="maths" name="maths">
	        	</div>

				<div class="form-group">
		        	<label for="studentMale">Science</label>
					<input type="number" class="form-control" id="science" name="science">
	        	</div>

				<div class="form-group">
		        	<label for="studentMale">History</label>
					<input type="number" class="form-control" id="history" name="history">
	        	</div>

	        	
