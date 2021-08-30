@extends('auth.layout')
@section('content')
@section('title', 'Login')

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 justify-content-center" style="margin: auto">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login Form</h1>
                                </div>
                                @if (session('messageLogin'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('messageLogin') }}
                                    </div>
                                @endif
                                @if (session('message'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <form action="/login-process" method="POST" class="user">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control form-control-user {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                            id="exampleInputEmail" aria-describedby="emailHelp" name="email"
                                            placeholder="Enter Email Address...">
                                        @if ($errors->has('email'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="password"
                                            class="form-control form-control-user {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                            id="exampleInputPassword" name="password" placeholder="Password">
                                        @if ($errors->has('password'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('password') }}
                                            </div>
                                        @endif
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                    <hr>
                                </form>

                                <div class="text-center">
                                    <a class="small" href="/register">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>


@endsection
