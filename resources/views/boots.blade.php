@extends('layouts.main_template')
@section('title','Boots')

@section('content')
        <!-- Boots -->
        <div class="row">
            @forelse($boots as $boot)
            <div class="small-3 columns">
                    <div class="item-wrapper">
                        <div class="img-wrapper">
                            <a class="button expanded add-to-cart" href="#">
                                Add to Cart
                            </a>
                            <a href="{{route('product')}}">
                                <img src="{{url('images',$boot->image)}}"/>
                            </a>
                        </div>
                        <a href="{{route('product')}}">
                        <h3>
                            <a href="{{route('product')}}">
                                {{$boot->name}}
                            </a>
                        </h3>
                        
                        <h5>
                            ${{$boot->price}}
                        </h5>
                        <p>
                            {{$boot->description}}
                        </p>
                    </div>
            </div>
            @empty
            <h2>no shirts</h2>
            @endforelse
        </div>
        </div>
@endsection