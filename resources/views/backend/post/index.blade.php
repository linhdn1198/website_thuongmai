@extends('layouts.app')

@section('content')
<div class="col-md-9">
    <div class="card">
        <div class="card-header">Posts</div>
    
        <div class="card-body">
            <a style="margin-bottom:20px;" class="btn btn-primary" href="{{ route('posts.create') }}"><span class="fa fa-plus"></span>&nbsp;&nbsp;Add post</a>
            <table id="myTable" class="table table-border table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Tag</th>
                        <th>Edit</th>
                        <th>Destroy</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($posts->count() > 0)
                        @foreach ($posts as $post)
                            <tr>
                                <th>{{ $post->id }}</th>
                                <th>
                                    <img class="img-fluid" src="{{ asset($post->image) }}" alt="" style="with: 60px; height: 40px;">
                                </th>
                                <th>{{ $post->title }}</th>
                                <th>{!! $post->content !!}</th>
                                <th>
                                    <ul>
                                        @foreach ($post->tags as $tag)
                                            <li>{{ $tag->name }}</li>
                                        @endforeach
                                    </ul>
                                </th>
                                <th>
                                    <a class="btn btn-xs btn-outline-primary" href="{{ route('posts.edit', ['id' => $post->id]) }}">Edit</a>
                                </th>
                                <th>
                                    <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger" type="submit">Destroy</button>
                                    </form>
                                </th>
                            </tr>
                        @endforeach
                    @else
                            <tr>
                                <th class="text-center" colspan="8">No data</th>
                            </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
@endsection
    
@section('script')
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection


