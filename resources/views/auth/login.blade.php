@extends('layouts.master')

@section('content')
<div class="containter-fluid">
    <div class="col-lg-4 col-md-6 col-sm-6 ml-auto mr-auto">
        <form class="form" method="POST" action="{!! route('login') !!}">
            @csrf
            <div class="card card-login card-hidden">
                <div class="card-header card-header-rose text-center">
                    <h4 class="card-title">Login</h4>
                </div>
                <div class="card-body ">
                    <span class="bmd-form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">face</i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username..." name="username">
                        </div>
                    </span>
                    <span class="bmd-form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                            </div>
                            <input type="password" class="form-control" placeholder="Password..." name="password">
                        </div>
                    </span>
                </div>
                <div class="card-footer justify-content-center">
                    <button type="submit" class="btn btn-rose btn-link btn-lg">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection