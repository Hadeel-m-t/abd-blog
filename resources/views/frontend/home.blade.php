@include('frontend.master')


<div class="container-fluid">	
	<div class="row">

		<div class="col-md-6 me-5">

<nav class="navbar-collapse pb-5 pt-3">
<div class="container ">
          <ul class="navbar-nav">
            @guest
                @if (Route::has('login'))
                    <li class="nav-item me-3">
                        <a href="{{ route('login') }}" class="shadow-sm fs-6" style="color: #4995f5;">Login</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item me-3">
                        <a href="{{ route('register') }}" class="shadow-sm fs-6" style="color: #4995f5;">Register</a>
                    </li>
                    @endif
            @endguest 
        </ul>
    </div>
</nav>
		 
		<div class="container text-center pt-5 ">
		<h1 style="color: #4995f5;">COMING SOON...</h1>
		<p class="text-body-tertiary text-center">Stay Connected, Stay Updated !</p>

		<hr class="mt-5 mb-3 mx-5" style="height: 10px;">

		<div class="text-center">

		<a href="https://wa.me/qr/MFKQGLU3ZDROE1" class="bi bi-whatsapp" style="font-size: 2rem; color: green;"></a>

		<a href="https://www.linkedin.com/in/abdullah-touma/" class="bi bi-linkedin text-dark ms-3" style="font-size: 2rem;"></a>

		<a href="{{ url('download/')}}" class="bi bi-file-person-fill ms-3" style="font-size: 2rem;"></a>


		</div>
		</div>
		</div>


		<div class="col vh-100" style="background: linear-gradient(45deg,#4995f5,#9e57fb); padding-top:60px; ">
		
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-8 offset-md-2">
	    				<div class="card bg-light ">
	    					<div class="card-header text-secondary">
	    						Contact Me
	    					</div> 
	    						<div class="card-body text-secondary">
	    							@if(Session::has('message-sent'))
	    								<div class="alert alert-success" role='alert'><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	    									{{ Session::get('message-sent') }}
	    								</div>
	    							@endif
	    							<form method="POST" action="{{ route('send.message') }}" enctype="multipart/form-data">
	    								@csrf
	    								<div class="form-group">
	    									<label for="name">Name:</label>
	    									<input type="text" name="name" class="form-control" required/>
	    								</div>
	    								<div class="form-group">
	    									<label for="email">Email:</label>
	    									<input type="email" name="email" class="form-control" required />
	    								</div>
	    								<div class="form-group">
	    									<label for="phone">Phone:</label>
	    									<input type="tel" name="phone" class="form-control" required/>
	    								</div>
	    								<div class="form-group">
	    									<label for="msg">Message:</label>
	    									<textarea name="msg" class="form-control" required></textarea>
	    								</div>
	    								<button type="submit" class="btn float-right mt-2 border-0 rounded-5 text-white d-grid gap-2 col-12" style="background: linear-gradient(45deg,#4995f5,#9e57fb);">Send</button>
	    							</form>
	    						</div>
	    				</div>
	    			</div>
	    			
	    		</div>
	    		
	    	</div>
		</div>
	</div>
</div>
