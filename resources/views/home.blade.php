@extends('layout.main')

@section('title', 'Home')

@section('main')
    <div class="wrapper">
        <h1>Treni in trasito</h1>

        <div class="table">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h5>NUMERO TRENO</h5>
                        @foreach ($trains as $train)
                            <p>{{ $train->train_id }}</p>
                        @endforeach
                    </div>
                    <div class="col">
                        <h5>PARTENZE</h5>
                        @foreach ($trains as $train)
                            <p>{{ $train->departure_station }}</p>
                        @endforeach
                    </div>
                    <div class="col">
                        <h5>ARRIVI</h5>
                        @foreach ($trains as $train)
                            <p>{{ $train->departure_station }}</p>
                        @endforeach
                    </div>
                    <div class="col">
                        <h5>PARTENZA</h5>
                        @foreach ($trains as $train)
                            <p>{{ $train->departure_time }}</p>
                        @endforeach
                    </div>
                    <div class="col">
                        <h5>ARRIVO</h5>
                        @foreach ($trains as $train)
                            <p>{{ $train->arrival_time }}</p>
                        @endforeach
                    </div>
                    <div class="col">
                        <h5>RITARDO</h5>
                        @foreach ($trains as $train)
                            <p>{{ $train->isTimely() }}</p>
                        @endforeach
                    </div>
                    <div class="col">
                        <h5>CANCELLATI</h5>
                        @foreach ($trains as $train)
                            <p class="{{ $train->isDeleted() }}">{{ $train->isDeleted() }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
