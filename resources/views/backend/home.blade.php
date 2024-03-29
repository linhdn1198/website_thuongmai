@extends('layouts.app')

@section('content')
<div class="col-md-9">
    <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body text-center">
            <div class="row">
                <div class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="{{ route('dashboad.index') }}">
                                <h5>Product categories</h5>
                            </a>
                        </div>

                        <div class="card-body">
                            <h1>{{ $productCategory }}</h1>
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-header"><a href="{{ route('products.index') }}"><h5>Products</h5></a></div>

                        <div class="card-body">
                            <h1>{{ $product }}</h1>
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-header"><a href="{{ route('orders.index') }}"><h5>Order</h5></a></div>

                        <div class="card-body">
                            <h1>{{ $order }}</h1>
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-header"><a href="{{ route('commentproducts.index') }}"><h5>Comment prodcuts</h5></a></div>

                        <div class="card-body">
                            <h1>{{ $commentProduct }}</h1>
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-header"><a href="{{ route('postcategories.index') }}"><h5>Post categories</h5></a></div>

                        <div class="card-body">
                            <h1>{{ $postCategory }}</h1>
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-header"><a href="{{ route('posts.index') }}"><h5>Posts</h5></a></div>

                        <div class="card-body">
                            <h1>{{ $post }}</h1>
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-header"><a href="{{ route('commentposts.index') }}"><h5>Comment posts</h5></a></div>

                        <div class="card-body">
                            <h1>{{ $commentPost }}</h1>
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-header"><a href="{{ route('users.index') }}"><h5>User</h5></a></div>

                        <div class="card-body">
                            <h1>{{ $user }}</h1>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
