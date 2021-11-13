@extends('notes.layouts')
@section('MainContent')



        <form action="{{ route('image.update',$image->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('image._form')

        
            <button type="submit" class="btn btn-primary">Update Image</button>
        </form>    

@endsection