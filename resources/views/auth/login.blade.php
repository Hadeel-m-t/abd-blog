@include('frontend.master')

<div class="position-absolute top-50 start-50 translate-middle">
    <div class="card shadow p-1 mb-5 bg-body rounded">
      <div class="card-header">
        <h4>Log in</h4>
<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />


    <form method="POST" action="{{ route('login') }}">  
        <div class="row mb-3 pt-4">
            @csrf

            <!-- Email Address -->
        <div class="row mb-3 col-12">
            <label  for="email" :value="__('Email')"  class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" :value="__('Email')"  class="form-control" name="email" :value="old('email')" required autofocus>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

        </div>
            
            <!-- Password -->
                <div class="row mb-3 col-12">
                    <label for="password" :value="__('Password')"  class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password"/>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                </div>
            </div>

            <!-- Remember Me -->
                <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                                <label class="form-check-label" for="gridCheck1">Remember Me</label>
                        </div>
                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                                @endif

                                <div class="ml-3">
                                    <button type="submit" class="btn btn-success mt-2">Sign in</button>
                                </div>
                            </div>

                    </div>
                </div>
</form>

</div>
</div>
</div>