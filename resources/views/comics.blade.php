@extends('layouts.master')

@section('content')
    <div class="cards-container">
        <button class="ticket" disabled>CURRENT SERIES</button>
        <div class="row row-col-1 row-cols-xs-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-6 gx-3">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="comic-card d-flex flex-column align-items-center">
                        <div class="card-img-wrapper">
                            <img src="{{$comic['thumb']}}" alt="" class="img-fluid">
                        </div>
                        
                        <p class="comic-title">{{ $comic['title'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection