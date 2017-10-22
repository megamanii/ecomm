@extends('admin.layout.admin')

@section('content')

    <h2>All Products</h2>

    <!-- Loop thru products in product table https://laravel.com/docs/5.5/blade#loops -->
    @forelse($products as $product)
        <div class="col-sm-12" style="padding-top: 2em;">
          <h4>Product Name: {{$product->name}}</h4>
          <h4>Product Price: ${{$product->price}}</h4>

          <!-- Edit Product 
          <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary btn-sm">Edit Product</a>
          <br/>
          <br/-->

          <!-- Delete Product -->
          <form action="{{route('product.destroy',$product->id)}}"  method="POST">
             {{csrf_field()}}
             {{method_field('DELETE')}}
             <input class="btn btn-sm btn-danger" type="submit" value="Delete">
          </form>
        <hr style="height: 2px; background-color: #000000;"/>
        @empty
          <h3>No products</h3>
        </div>
    @endforelse


@endsection