@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <p style="font-size: 15px">  You are logged in !!!</p><br><br><br>
                    <div style="font-size: 22px">
                      <marquee>  Welcome to <span>MO</span><span style="color:red">B</span><span style="color:black">k</span>A<span style="color:RoyalBlue">R</span><span style="color:orange">T</span></marquee>
<br><br><br> 
                    <center>  <div style="color:rgb(127, 8, 142)">
                        Clearance Sale is ON!!!
                        Grab the offers Now..........
                    </div></center>

                </div>
            </div>
        </div>
    </div>
</div>




@endsection
