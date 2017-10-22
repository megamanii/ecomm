@extends('layouts.main_template')
@section('title','Be Elite.')
@section('content')
    <!-- HERO SECTION -->
        <a href="product">
            <section class="hero text-center">
            </section>
        </a>
        <br/>
        <div class="subheader text-center">
        <h2>
            Greatness Awaits
        </h2>
        </div>
       
        <!-- Latest Shirts -->
        <div class="row">
            <!-- Show only 4 results -->
            @forelse($boots->chunk(4) as $chunk)
                @foreach($chunk as $product)
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart" href="{{route('cart.edit',$product->id)}}">
                            Add to Cart
                        </a>
                        <a href="{/product}">
                            <img src="{{url('images',$product->image)}}"/>
                        </a>
                    </div>
                    <a href="/product">
                        <h3>
                            {{$product->name}}
                        </h3>
                    </a>
                    <h5>
                        ${{$product->price}}
                    </h5>
                    <p>
                        {{$product->description}}
                    </p>
                </div>
            </div>
                @endforeach
            @empty
                <h4>no products</h4>
            @endforelse
        </div>
    @endsection