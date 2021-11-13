@extends('notes.layouts')
@section('MainContent')



        <div class="card" style="width: 100%;">
        <img src="{{ asset($notes->image) }}" alt="Creator Profile" style="max-width: 575px;max-height: 575px;margin-top: 10px"> 
    <div class="card-body">
    <h5 class="card-title">Image Details </h5>
    <h5 class="card-text">{{$notes->classno}} </h5>
    <h5 class="card-text">{{$notes->topic}} </h5>
    <h5 class="card-text">{{$notes->subject}} </h5>
    <a href="{{route('notes.index')}}" class="btn btn-primary">All Images</a>
  </div>
</div>
@endsection