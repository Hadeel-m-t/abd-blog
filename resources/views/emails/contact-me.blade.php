@include('frontend.master')
	   

	    <section style="padding-top:60px;">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-6 offset-md-3">
	    				<div class="card">
	    					<div class="card-header">
	    						Contact Me
	    					</div>
	    						<div class="card-body">
	    							@if(Session::has('message-sent'))
	    								<div class="alert alert-success" role='alert'>
	    									{{ Session::get('message-sent') }}
	    								</div>
	    							@endif
	    							<form method="POST" action="{{ route('send.message') }}" enctype="multipart/form-data">
	    								@csrf
	    								<div class="form-group">
	    									<label for="name">Name:</label>
	    									<input type="text" name="name" class="form-control"/>
	    								</div>
	    								<div class="form-group">
	    									<label for="email">Email:</label>
	    									<input type="email" name="email" class="form-control"/>
	    								</div>
	    								<div class="form-group">
	    									<label for="phone">Phone:</label>
	    									<input type="tel" name="phone" class="form-control"/>
	    								</div>
	    								<div class="form-group">
	    									<label for="msg">Message:</label>
	    									<textarea name="msg" class="form-control"></textarea>
	    								</div>
	    								<button type="submit" class="btn btn-dark float-right mt-2">Submit</button>
	    							</form>
	    						</div>
	    				</div>
	    			</div>
	    			
	    		</div>
	    		
	    	</div>
	    </section>
