@extends('layouts.auth')

@section('content')
    <div class="main-content container-fluid">
        <div class="splash-container sign-up">
            <div class="card card-border-color card-border-color-primary">
                <div class="card-header"><img class="logo-img" src="{{ asset('img/logo-xx.png') }}" alt="logo" width="102" height="27"><span class="splash-description">Please enter your user information.</span></div>
                <div class="card-body">
                    <form action="#" method="get"><span class="splash-title pb-4">Sign Up</span>
                        <div class="form-group">
                            <input class="form-control" type="text" name="nick" required="" placeholder="Username" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                        </div>
                        <div class="form-group row signup-password">
                            <div class="col-6">
                                <input class="form-control" id="pass1" type="password" required="" placeholder="Password">
                            </div>
                            <div class="col-6">
                                <input class="form-control" required="" placeholder="Confirm">
                            </div>
                        </div>
                        <div class="form-group pt-2">
                            <button class="btn btn-block btn-primary btn-xl" type="submit">Sign Up</button>
                        </div>
                        <div class="title"><span class="splash-title pb-3">Or</span></div>
                        <div class="form-group row social-signup pt-0">
                            <div class="col-6">
                                <button class="btn btn-lg btn-block btn-social btn-facebook btn-color" type="button"><i class="mdi mdi-facebook icon icon-left"></i>Facebook</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-lg btn-block btn-social btn-google-plus btn-color" type="button"><i class="mdi mdi-google-plus icon icon-left"></i>Google Plus</button>
                            </div>
                        </div>
                        <div class="form-group pt-3 mb-3">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="check1">
                                <label class="custom-control-label" for="check1">By creating an account, you agree the <a href="#">terms and conditions</a>.</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="splash-footer">&copy; 2018 Your Company</div>
        </div>
    </div>
@endsection