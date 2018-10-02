@include('layouts.nav')

    <!-- Page Content -->
    <div class="container">
    	<h1>Add new task</h1>
     <form>

	<div class="form-group"> <!-- State Button -->
		<label for="state_id" class="control-label">Selectează site-ul</label>
		<select class="form-control" id="site_id">
			<option value="DVT">De vorba cu tine</option>
			<option value="PS">Psihologia de azi</option>
			<option value="SC">Sunt curios</option>

		
		</select>					
	</div>

	<div class="form-group"> <!-- Street 1 -->
		<label for="street1_id" class="control-label">Articol de tradus</label>
		<input type="text" class="form-control" id="link_site" name="link" placeholder="Inserează link...">
	</div>		
	<div class="form-group"> <!-- State Button -->
		<label for="state_id" class="control-label">Selectează autorul:</label>
		<select class="form-control" id="author_id">
			<option value="DA">Daniela</option>
			<option value="CR">Cristina</option>
			<option value="AL">Alexa</option>
		</select>					
	</div>			
							
	<div class="form-group"> <!-- Submit Button -->
		<button type="submit" class="btn btn-primary">Submit</button>
	</div> 
	
</form>			
    </div>

@include('layouts.footer')