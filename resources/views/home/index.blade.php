@extends('layouts.app')
 
@section('content')
  <div class="container">
    <div class="games__container">
      @auth
        <h1>Купленные игры</h1>
        <div class="games">
          @foreach($user_games as $user_game)
            <div class="game-card">
              <h2>{{ $user_game->game->name }}</h2>
              <p>
                <b>Жанр: </b> {{ $user_game->game->genre }}
              </p>
              <p>
                <b>Стоимость: </b> {{ $user_game->game->cost }}
              </p>
            </div>
          @endforeach
        </div>
      @endauth
      <h1>Список игр:</h1>
      <div class="games">
        @foreach($games as $game)
          <div class="game-card">
            <h2>{{ $game->name }}</h2>
            <p>
              <b>Жанр: </b> {{ $game->genre }}
            </p>
            <p>
              <b>Стоимость: </b> {{ $game->cost }}
            </p>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection