@extends('layouts.new-master')
    @section('content')
 
        テストします
 
    @endsection

    @section('product')
    <section class="py-5">
        @foreach($posts as $post)
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                
            <div class="col mb-5">
                    <div class="card h-100">
                        <!--Product image-->
                        <img class="card-img-top" src="{{  asset($post->image_book_path)  }}" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h3>{{ $post->title }}</h3>  
                                <!--Product price-->
                                {{ $post->price }}円
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
    @endsection