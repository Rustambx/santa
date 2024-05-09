@extends('layouts.app')

@section('content')
    <h2 class="mt-5 mb-4">Santa Form</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('santa.generate.pairs') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="code">Массив email:</label>
            <textarea name="code" class="form-control" id="code" rows="5" placeholder="Массив email адресов пользователей"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
    <p class="mt-5">Пример массива:</p>
    <pre>
[
  "user1@example.com",
  "user2@example.com",
  "user3@example.com",
  "user4@example.com",
  "user5@example.com",
  "user6@example.com",
  "user7@example.com",
  "user8@example.com",
  "user9@example.com",
  "user10@example.com"
]
    </pre>
@endsection
