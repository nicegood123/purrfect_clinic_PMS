@extends('layouts.layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Home</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/" class="text-teal">Home</a></li>
                        <li class="breadcrumb-item active">Welcome Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="{{ asset('assets/dist/img/CompanyLogo.png') }}" width="300px">
                <h2>
                    Hi, welcome to <b class="text-teal">Purrfect Clinic, Inc.</b><br>
                </h2>
                <h1><b class="text-dark">Pet Management System</b></h1>
            </div>
        </div>
    </section>
@endsection
