@extends('admin.layout.admin')
@section('content')
   <div class="">
   		<h2>Categories</h2>
   		@include('admin.category.create_category')

	   	<div class="row">
	   	<br>
	   	    <!-- If categories not empty loop thru -->
		   	@if(!empty($categories))
			   	@forelse($categories as $category)
			   	<div class="col-sm-4">
			   		<a class ="btn btn-info" href="{{route('category.show',$category->id)}}">{{$category->name}}</a>
		   		</div>
		   		@empty
		   			<h2>no categories</h2>
		   		@endforelse
	   		@endif
	   	<br>
	   	<br>

	   	<br>
	   	@if(!empty($products))
	   		<h3>Category Products</h3>

	        <div class="col-sm-12" style="padding-top: 2em;">
	        	@forelse($products as $product)
		          	<h4>Product Name: {{$product->name}}</h4>
		          	<h4>Product Price: ${{$product->price}}</h4>
		        	<hr style="height: 2px; background-color: #000000;"/>
	        	@empty
	          		<h4>No products</h4>
	    		@endforelse
	    	</div>

	   	@endif
   	</div>
   	</div>
@endsection