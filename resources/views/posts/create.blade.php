@extends('layouts.master')

@section('content')

    <h2>Create post</h2>

    <hr>

    <form method="POST" action="/posts">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>


    @if (count($errors->all()) > 0)

        @foreach($errors->all() as $error)
            <div class="form-group">
                <div class="alert alert-danger">
                    <li>{{ $error }}</li>
                </div>
            </div>
        @endforeach

    @endif


@endsection
