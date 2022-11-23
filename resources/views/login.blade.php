@extends('layout.app')

@section('content')
    <h1 class="text-center mt-5">Login</h1>
    <div class="container mt-5">
        <div class="row d-flex  justify-content-center">
            <div class="col-8 border border-info p-5 ">
                <form class="d-flex flex-column">
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="">
                    </div>
                    <div >
                        <a href="register" class='btn btn-primary m-auto'>SignUp</a>
                        <button type="submit" class="btn btn-primary align-self-end" style="margin-right: 30px">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
