@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Пары Тайной Санты</h1>
        <a href="{{ route('santa.index') }}" class="btn btn-primary">Назад</a>
    </div>
    <ul class="list-group">
        @foreach ($pairs as $pair)
            <li class="list-group-item"><b>{{ $pair['giver'] }}</b> дарит подарок <b>{{ $pair['receiver'] }}</b></li>
        @endforeach
    </ul>
@endsection
