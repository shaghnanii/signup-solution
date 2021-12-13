@extends('layouts.main')

@section('main_content')
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-12">
                <div class="card" style="width: 24rem;">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center">Available Widgets</h5>
                        <h6 class="card-subtitle mb-2 text-muted">List of available pack sizes</h6>
                        @if(count($packs) > 0)
                            @foreach($packs as $key => $pack)
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item list-group-item-{{ $key % 2 == 0  ? 'secondary' : 'dark'}}">{{ $pack->size }} Widgets</li>
                                </ul>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 col-md-12">
                <h5 class="d-flex justify-content-center alert alert-success">Widgets Whole Saler.</h5>
                @if(count($packs) > 0)
                    <form action="{{ route('packs.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Widgets</label>
                            <input class="form-control" id="amount" type="number" name="amount" min="1" max="30000" value="{{ old('amount') }}">
                            <input type="hidden" name="widget_id" value="{{ $pack->widget->id }}">
                            @error('amount')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <input class="btn btn-primary" type="submit" value="Submit" />
                        </div>
                    </form>
                @else
                    <div class="d-flex justify-content-center">
                        No packs found in the database, please add packs first.
                    </div>
                @endif

                @if(isset($packages))
                    @if(count($packages) > 0)
                        <div class="mt-3">
                            <p>Widgets ordered: <strong>{{ $amount }}</strong></p>
                            <p class="alert alert-primary">Packages need to be delivered.</p>
                            <ul class="list-group">
                                @foreach($packages as $pack)
                                    <li class="list-group-item">{{ $pack['pack'] }} x {{ $pack['count'] }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @else
                    @endif
                @endif
            </div>
        </div>
    </div>
@endsection
