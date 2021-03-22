@extends('layouts.app')
@section('title','Player')
@section('content')
  <div class="container">
    <h1>Players</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Cognome</th>
          <th scope="col">data_nascita</th>
          <th scope="col">luogo_nascita</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($giocatori as $giocatore)
          <tr>
            <th scope="row">{{$giocatore->id}}</th>
            <td>{{$giocatore->nome}}</td>
            <td>{{$giocatore->cognome}}</td>
            <td>{{$giocatore->data_nascita}}</td>
            <td>{{$giocatore->Luogo_nascita}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
