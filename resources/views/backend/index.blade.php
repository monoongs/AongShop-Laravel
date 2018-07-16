@extends('.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <ul>
                    <li><a href="/backend/category">Category</a></li>
                    <li><a href="/backend/product">Product</a></li>
                    <li><a href="/backend/order">Order</a></li>
                    <li><a href="/backend/shopconfig">Shop Config</a></li>
                    <li><a href="/backend/userconfig">User Config</a></li>
                </ul>
            </div>
    
            <div class="col-lg-8">
                @yield('body')
            </div>
        </div>
        
    </div>
@endsection

