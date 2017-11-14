@extends('layouts.navigations-admin-designer-auth')

@section('content')
        <div id="content">
            <div class="container">

                 <div class="col-md-4">
                 </div>


                <div class="col-md-4">
                        <h2 class="hello_designer">Welcome Designer!</h2>
                    <div class="boxlogin">
                        <h3>Log-In</h3>

            <form  role="form" method="post" action="designer/index" name="DesignerForm">

                 <div class="form-group{{ $errors->has('designerid') ? ' has-error' : '' }}">
                    <label for="id">Designer ID</label>
                    <input type="text" name="designerid" class="form-control" id="designerid" value="">
                </div>


                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" value="">
                </div>

                <div class="text-center">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i>Login</button>
                </div>

                 <input type="hidden" name="_token" value="{{ csrf_token() }}">   
            </form>

                     </div>
                 </div>
             <div class="col-md-4"></div>
        </div>
    </div>
</div>

@endsection