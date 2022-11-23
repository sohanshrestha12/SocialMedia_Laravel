@extends('layout.app')

@section('content')
    <div class="container" style="height: 90%">
        <div class="row d-flex justify-content-center align-items-center h-100" >
            <div class="col-md-5">
                <div class="box shadow bg-white p-4">
                    <h1 class="text-center mt-5">SignUp</h1>
                    <form class="d-flex flex-column" action="{{ route('Register') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="exampleInputPassword1" name="password">
                            @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg border-0 rounded-0 mt-3">Submit</button>
                        <a href="login" class="d-flex align-self-end mt-3">LogIn?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
