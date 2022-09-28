@extends('layouts/'.$template)

@section('main_content')
<div id="main"><div class="container">  
<div class="page-content page-container" id="page-content">
    <h1 style="text-align: center">My profile</h1>
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-xl-6 col-md-12">
                                                <div class="card user-card-full">
                                                    <div class="row m-l-0 m-r-0">
                                                        <div class="col-sm-4 bg-c-lite-green user-profile">
                                                            <div class="card-block text-center text-white">
                                                                <div class="m-b-25">
                                                                    <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                                                </div>
                                                                <h2 class="f-w-600">{{$user->name}} {{$user->surname}}</h2>
                                                                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="card-block">
                                                                <h2 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h2>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <b><p class="m-b-10 f-w-600">Role</p></b>
                                                                        <h4 class="text-muted f-w-400">{{$user->role->name}}</h4>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <b><p class="m-b-10 f-w-600">Email</p></b>
                                                                        <h4 class="text-muted f-w-400">{{$user->email}}</h4>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <b><p class="m-b-10 f-w-600">Address</p></b>
                                                                        <h4 class="text-muted f-w-400">{{$user->address}}</h4>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <b><p class="m-b-10 f-w-600">Phone number</p></b>
                                                                        <h4 class="text-muted f-w-400">{{$user->phone_number}}</h4>
                                                                    </div>
                                                                </div>
                                                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                                                </ul>
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