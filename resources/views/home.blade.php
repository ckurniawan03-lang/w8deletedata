@extends('base.base')
@section('content')
<<<<<<< HEAD
    <h1>My Homepage</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($product_categories as $pc)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pc->name }}</h5>
                        <p class="card-text">{{ $pc->description }}</p>
                        <p class="card-text">Total Product: {{ $pc->products->count() }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
=======
<h2>This is My Home Page</h2>
<div class="row row-cols-1 row-cols-md-3 g-4">
@foreach ($product_categories as $product_category)
<div class="col">
<div class="card">
<div class="card-body">
<h5 class="card-title"> {{ $product_category->name }}</h5>
<p class="card-text"><i>{{ $product_category->description }}</i></p>
<p class="card-text">Total Products: {{ $product_category->products->count() }}</p>
</div>
</div>
</div>
@endforeach
</div>
>>>>>>> a17a68c75f0ef523e9974de07746f14d6a06b83e
@endsection