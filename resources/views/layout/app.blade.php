<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article App</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
    </style>
    @vite(['resources/js/app.js'])
</head>

<body style="height: 100vh;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand m-3 mt-0 mb-0" href="/">Article App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse m-3 mt-0 mb-0" id="navbarSupportedContent">
                @auth
                    {{ auth()->user()->Name }}
                @endauth
                @guest

                    <ul class="navbar-nav me-auto justify-content-end" style="width: 100%;">
                        <li class="nav-item ">
                            <a class="nav-link active" aria-current="page" href="login">Login</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="register">SignUp</a>
                        </li>
                    </ul>
                @endguest
            </div>
        </div>
    </nav>


    {{-- dynamic content --}}
    @yield('content')



</body>

</html>
