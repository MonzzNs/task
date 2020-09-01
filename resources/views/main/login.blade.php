<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/my.css') }}">
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            {{-- <form action="#">
                <h1>Create Account</h1>

                <span>or use your email for registration</span>
                <input type="text" placeholder="Name" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <button>Sign Up</button>
            </form> --}}
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <div class="title mb-lg-5 p-lg-3">
                    <h1 class="mb-lg-4 mt-lg-3">Sign in</h1>
                    <p class="text1 mb-lg-n1 mr-lg-4">Powerful feature ensuring the sucess of SHOPPINGMALL</p>
                    <p class="text2 mb-lg-n1 mr-lg-n2">SHOPPINGMALL Framework management system following 3W</p>
                </div>

                <input class="rounded" type="email" placeholder="Email" />
                <input class="rounded" type="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button class="mb-lg-4">Sign In</button>

                <div class="footer">
                    <a href="" class="btn btn-outline-primary col-lg-2" data-toggle="tooltip" data-placement="top" title="Outlook">
                        <img src="{{ asset('img/outlook.png') }}" alt="outlook" width='20' >
                    </a>
                    <a href="" class="btn btn-outline-success col-lg-2" data-toggle="tooltip" data-placement="top" title="Download doc">
                        <i class="fa fa-file-download"></i>
                    </a>
                </div>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    
                </div>
                <div class="overlay-panel overlay-right">


                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('asset/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/fontawesome/js/fontawesome.min.js') }}"></script>
</body>

</html>
