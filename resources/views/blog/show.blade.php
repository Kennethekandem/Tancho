@extends('layouts.author')
@section('content')
    <div class="row page-titles mt-4">
        <div class="col-md-12 align-self-center">
            <h4 class="card-title text-uppercase m-b-15 font-18 font-medium">Large card</h4>
            <h6 class="card-subtitle m-b-15 text-muted">Use the classes <code>btn btn-default, btn-default, btn-default</code> to quickly create different kinds of buttons. Use the classes btn btn-default.</h6>
        </div>
    </div>
    <div class="row">
        <!-- Column -->
        <div class="col-lg-8 col-md-6">
            <!-- Card -->
            <div class="card">
                <div class="card-img-container"> <img class="card-img-top img-responsive" src="{{ asset('authored/assets/imgs/gallery/img7.jpg') }}" alt="Card image cap">

                        <div class="card-img-details p-4">
                            @php
                                $tags_var = json_decode($blog->tagged);
                            @endphp
                            @foreach($tags_var as $tag)
                            <a href="#" class="label label-default">{{ $tag->name }}</a>
                            @endforeach
                            {{--<a href="#" class="label label-default">Books</a> --}}
                        </div>
                </div>
                <div class="card-body p-b-0">
                    <h4 class="card-title2">{{ $blog->title }}</h4>
                    <p class="card-text m-b-20 font-16">{!! $blog->description !!}</p>
                    <div class="row b-t-1 p-t-15">
                        <div class="col-lg-7 col-md-6">{{ $blog->created_at->diffForHumans() }}</div>
                        <div class="col-lg-5 col-md-6">
                            <ul class="card-detail">
                                <li><i class="fas fa-comment"></i> 10</li>
                                <li><i class="fas fa-heart"></i> 315</li>
                                <li><i class="fas fa-share-alt"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card -->
        </div>
        <div class="col-lg-4 col-md-6">
            <!-- Card -->
            <div class="card">
                <div class="card-img-container"> <img class="card-img-top img-responsive" src="{{ asset('authored/assets/imgs/gallery/img4.jpg') }}" alt="Card image cap">
                    <div class="card-img-details p-4"><a href="#" class="label label-default">Literature</a> <a href="#" class="label label-default">Books</a> </div>
                </div>
                <div class="card-body p-b-0">
                    <h4 class="card-title2">American writer of bad cowboy stories arrived in</h4>
                    <p class="card-text font-16">Volunteering to help people in need combined with travelling to faraway places is a new trend.</p>
                    <div class="row b-t-1 p-t-15">
                        <div class="col-lg-5 col-md-6">15.07.2017</div>
                        <div class="col-lg-7 col-md-6">
                            <ul class="card-detail">
                                <li><i class="fas fa-comment"></i> 10</li>
                                <li><i class="fas fa-heart"></i> 315</li>
                                <li><i class="fas fa-share-alt"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card -->
        </div>
        <!-- Column -->
    </div>
@endsection
@section('js')
    <script src="{{ asset('authored/plugins/vendors/styleswitcher/jQuery.style.switcher.js') }}"></script>
@endsection