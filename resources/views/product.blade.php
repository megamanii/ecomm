@extends('layouts.main_template')
@section('title','{{$product->name}}')

@section('content')
    @forelse ($products as $product)
        <div class="row">
            <div class="small-5 small-offset-1 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="#">
                            <img src="https://www.soccerpro.com/images/soccerpro/main/bb3679_adidas_nemeziz_17_plus_360agility_fg_01.jpg"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="small-6 columns">
                <div class="item-wrapper">
                    <h3 class="subheader">
                       <span class="price-tag">${{$product->price}}</span><br/>
                       {{$product->name}}
                    </h3>
                    <div class="row">
                        <div class="large-12 columns">
                            <label>
                                Select Size
                                <select>
                                    <!-- Loop thru Sizes -->
                                    <option value="small">
                                        9US
                                    </option>                                  
                                </select>
                            </label>
                            <a href="#" class="button expanded">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <h4>no data</h4>
    @endforelse
@endsection