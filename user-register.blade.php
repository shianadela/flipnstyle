@extends('layouts.navigations-auth')

@section('content')

	<div id="content">
            <div class="container">

                <div class="col-md-6">
                    <div class="boxinfo">
                        <h3 class="reg"><strong>Register</strong></h3>

                        <p class="lead1"><strong>Not registered yet?</strong></p>
                        <p class="contentp">With registration with us you can create scrapbooks from moments and bundles of memories with much freedom. And work together with others in editing your scrapbook. The freedom is yours. Register now! </p>
                        <hr class="rhr">

            <form  role="form" method="post" action="{{ route('auth.register') }}">

                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                    <div class="ltb">    
                    <input placeholder="First Name" type="text" name="first_name" class="form-control" id="first_name" value="{{ old('first_name') ?: '' }}">
                    @if ($errors->has('first_name'))
                        <span class="help-block">{{ $errors->first('first_name') }}</span>
                    @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                    <div class="ltb">
                    <input placeholder="Last Name" type="text" name="last_name" class="form-control" id="last_name" value="{{ old('last_name') ?: '' }}">
                    @if ($errors->has('last_name'))
                        <span class="help-block">{{ $errors->first('last_name') }}</span>
                    @endif
                    </div>
                </div>


                 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="ltb"> 
                    <input placeholder="Email" type="text" name="email" class="form-control" id="email" value="{{ old('email') ?: '' }}">
                    @if ($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="ltb"> 
                    <input placeholder="Password" type="password" name="password" class="form-control" id="password">
                    @if ($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif
                    </div>
                </div>

                <div class="text-center">
                        <p class="text-muted">By clicking Register, you agree to Flip 'n Style's <a href="#">Terms of Condition</a></p>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i>Register</button>
                </div>

                 <input type="hidden" name="_token" value="{{ csrf_token() }}">   
            </form>
            </div>
            </div>

            <div class="col-md-6">
                <div class="divbr">
                <img id="regimg" src="img/page_assets/br.png">
                </div>
            </div>

        </div>
        
@endsection