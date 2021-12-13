@extends('layouts.main')

@section('main_content')
    <div class="container" style="margin-top: 80px">
        <div class="row">
            @if(count($widgets) > 0)
                @foreach($widgets as $key => $widget)
                    <div class="col-lg-6 col-sm-12 col-md-12">
                        <div class="card" style="width: 24rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $widget->name }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Check all the availabe packs</h6>
                                <a href="{{ route('packs.index', ['widget_id' => $widget->id]) }}" class="text-decoration-none">Check widget details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
