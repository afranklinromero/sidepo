@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form action="/denuncia" method="GET">
            <input type ="text" name ="prueba">

            <input type ="submit" value="Enviar" >
            @csrf
    </div>
</div>
@endsection