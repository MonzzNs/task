@extends('main.header',["activePage" => "Wear", "tittlePage" => "Wear | SideBar" ])

@section('sidebar')
    {{-- <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-gift"></i><span class="hide-menu">Shirt Product</span></a>
        <ul aria-expanded="false" class="collapse">
            <li><a href="app-calendar.html">Supreme</a></li>
            <li><a href="app-chat.html">Yogs</a></li>
            <li><a href="app-ticket.html">AHHA</a></li>
            <li><a href="app-contact.html">Underarmour</a></li>
        </ul>
    </li>
    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-gift"></i><span class="hide-menu">Pants Product</span></a>
        <ul aria-expanded="false" class="collapse">
            <li><a href="app-calendar.html">Uniqlo</a></li>
            <li><a href="app-chat.html">Zara</a></li>
            <li><a href="app-ticket.html">Yolo</a></li>
            <li><a href="app-contact.html">Underarmour</a></li>
        </ul>
    </li>
    <li style="padding-left: 15px; padding-right: 13px;"> 
        <h6>WareHouse Stock <i class="fa fa-database"></i></h6>
        <div class="progress m-t-10">
            <div class="progress-bar bg-info progress-bar-striped" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 55%; height:10px" role="progressbar">
            </div>
        </div>
        <small>556 pcs/1000 pcs</small>
        <button class="btn btn-sm btn-outline-info float-right disabled" style="margin: 4px;">Stable</button>
    </li> --}}
    {{-- <br> --}}
    <li style="padding-left: 15px;"> 
        <div class="card rounded" style="width: 14rem;">
            <div class="card-body">
                <div class="row">
                    <div clas   s="col-md 7">
                        <h5 class="card-title">Supreme
                          <small><a href="#" class="card-link"> >>>Description</a></small>
                        </h5>
                    </div>
                    <div class="col-md-5">
                        <h2 class="fa fa-tv" style="font-size:70px"></h2>
                    </div>
                </div>
            </div>
          </div>
    </li>
    <li style="padding-left: 15px;"> 
        <div class="card rounded" style="width: 14rem;">
            <div class="card-body">
                <div class="row">
                    <div class="col-md 7">
                        <h5 class="card-title">Surel
                          <small><a href="#" class="card-link">Surel link</a></small>
                        </h5>
                    </div>
                    <div class="col-md-5">
                        <h2 class="fa fa-envelope" style="font-size:70px"></h2>
                    </div>
                </div>
            </div>
          </div>
    </li>
    <li style="padding-left: 15px;"> 
        <div class="card rounded" style="width: 14rem;">
            <div class="card-body">
                <div class="row">
                    <div class="col-md 7">
                        <h5 class="card-title">Komputer
                          <small><a href="#" class="card-link">Komputer link</a></small>
                        </h5>
                    </div>
                    <div class="col-md-5">
                        <h2 class="fa fa-tv" style="font-size:70px"></h2>
                    </div>
                </div>
            </div>
          </div>
    </li>
@endsection