@extends('layouts.app')

@section('content')
<div class="container">
    <div class="info-box bg-success">
        <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Likes</span>
            <span class="info-box-number">41,410</span>
            <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
            </div>
            <span class="progress-description">
      70% Increase in 30 Days
    </span>
        </div>
    </div>


    <div class="info-box">
        <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Messages</span>
            <span class="info-box-number">1,410</span>
        </div>
    </div>


</div>
@endsection
