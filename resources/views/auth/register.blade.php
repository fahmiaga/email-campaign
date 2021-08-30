@extends('auth.layout')
@section('content')
@section('title', 'Register')


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
                                    <h1 class="h4 text-gray-900 mb-4">Register Form</h1>
                                </div>
                                <form action="/register-process" class="user" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control form-control-user {{ $errors->has('name') ? 'is-invalid' : '' }} "
                                            id="exampleInputEmail" name="name" aria-describedby="emailHelp"
                                            placeholder="Enter Name...">
                                        @if ($errors->has('name'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="email"
                                            class="form-control form-control-user {{ $errors->has('email') ? 'is-invalid' : '' }} "
                                            name="email" id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address...">
                                        @if ($errors->has('email'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="password"
                                            class="form-control form-control-user {{ $errors->has('password') ? 'is-invalid' : '' }} "
                                            name="password" id="exampleInputPassword" placeholder="Password">
                                        @if ($errors->has('password'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('password') }}
                                            </div>
                                        @endif
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Register
                                    </button>
                                    <hr>
                                </form>

                                <div class="text-center">
                                    <a class="small" href="/login">login</a>
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
