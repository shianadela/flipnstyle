@extends('layouts.navigations-auth')

@section('content')
<div id="content">
    <div class="container">
        <div class="col-md-6">
            <div class="boxinfo">
                <h3 class="reg"><strong>Login</strong></h3>
                <p class="lead1"><strong>Already registered?</strong></p>
                <p class="contentp">Log-in and get started with your scrapbook. Edit with freedom and work together with friends!</p>
                <hr class="rhr">

            <form  role="form" method="post" action="{{ route('auth.login') }}">

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
                        <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i>Login</button>
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
</div>
@endsection