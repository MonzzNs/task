<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('asset/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/my.css') }}">
</head>

<body>

    {{-- <div class="container" id="container">
        <div class="form-container sign-up-container">
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
                    <div class="card" style="width: 575px; height:450px">
                        <div class="card-tittle" style="border-bottom: 1px black solid">
                            <h3 style="color: black;">Message</h3>
                        </div>
                        <div class="card-body">
                            <textarea name="" id="" disabled cols="55" rows="1"></textarea>
                            <textarea name="" id="" disabled cols="55" rows="10"></textarea>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="sign rounded">
        <div class="row">
            <div class="col-md-8 shadow-lg bg-light rounded" style="border: 1px">
                <h1>Log In</h1>
                <small>Powerful feature ensuring the sucess of SHOPPINGMALL</small>
                <br>
                <small>SHOPPINGMALL Framework management system following 3W</small>
                <hr>
                <label>Username :</label>
                <input type="text" class="input-group input-group-lg shadow-sm bg-white rounded rounded">
                <label>Password :</label>
                <input type="text" class="input-group input-group-lg shadow-sm bg-white rounded rounded">
                <hr>
                <button class="btn btn-primary">Log In</button>
            </div>
            <div class="col-md-4 shadow bg-light rounded">
                <h3 class="text-center">Message</h3>
                <hr>
                <textarea name="" disabled id="" cols="30" rows="10"></textarea>
                <textarea name="" disabled id="" cols="30" rows="2"></textarea>
                <hr>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary btn-sm float-right" data-toggle="modal" data-target="#exampleModal" style="margin-top: -10px; margin-bottom:10px;">
                    Lihat
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table table table-striped">
                                    <thead class="thead thead-light">
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">jeff Bezos</td>
                                            <td class="text-center">20-12-2001</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script src="{{ asset('asset/bootstrap/js/bootstrap.min.js') }}"></script> --}}
    <script src="{{ asset('asset/fontawesome/js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('asset/js/modal.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
