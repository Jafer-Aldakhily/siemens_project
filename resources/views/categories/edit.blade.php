@extends('layouts.app')

@section('content')

    @if (count($errors)>0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
            </div>
        @endforeach
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
    @endif
    
 

    <div>
        <form action="/categories/{{ $category->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group row">
                <label class="col-2" for="name">Category Name: </label>
                <input type="text" class="form-control col-10" name="name" placeholder="Category Name" value="{{ $category->name }}">
            </div>
            <div class="form-group row">
                <label class="col-2" for="description">Category Description: </label>
                <div class="col-10">
                    <textarea class="form-control col-10" id="ckeditorDescription" name="description" cols="30" rows="10" placeholder="Category Description">{{ $category->description }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2" for="content">Category Content: </label>
                <div class="col-10">
                    <textarea class="form-control col-10" id="ckeditorContent" name="content" cols="30" rows="10" placeholder="Category Content">{{ $category->content }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2" for="image">Category Image: </label>
                <input class="form-control-file col-10" type="file" name="image">
            </div>
            <div class="row justify-content-end">
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection