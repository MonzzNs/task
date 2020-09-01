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
                    <h1 class="mb-lg-4 mt-lg-3">OPO Studio</h1>
                    <p class="text1 mb-lg-n1 mr-lg-4">Powerful feature ensuring the sucess of SHOPPINGMALL</p>
                    <p class="text2 mb-lg-n1 mr-lg-n2">SHOPPINGMALL Framework management system following 3W</p>
                </div>

                <input class="rounded" type="email" placeholder="Email" />
                <input class="rounded" type="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button class="mb-lg-4">Sign In</button>

                <div class="footer">
                    <a href="" class="btn btn-outline-primary col-lg-2" data-toggle="tooltip" data-placement="top"
                        title="Outlook">
                        <img src="{{ asset('img/outlook.png') }}" alt="outlook" width='20'>
                    </a>
                    <a href="" class="btn btn-outline-success col-lg-2" data-toggle="tooltip" data-placement="top"
                        title="Download doc">
                        <i class="fa fa-file-download"></i>
                    </a>
                </div>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">

                    <div class="title2 ">
                        <h1>Title 2</h1>
                    </div>

                    <form action="" class="form-c">
                        <input type="text" placeholder="title1" class="rounded">
                        <textarea type="text" placeholder="title2" class="rounded"></textarea>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                            data-target="#myModal">Open Modal</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Modal Header</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Some text in the modal.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="{{ asset('asset/fontawesome/js/fontawesome.min.js') }}"></script>
</body>

</html>
