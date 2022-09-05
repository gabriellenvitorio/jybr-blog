@extends('layouts.page')

@section('title', 'Login')

@section('content')

    
    
    <div class="row justify-content-center">
        <div class="col-3">
            <form method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                  <input type="checkbox" name="lembrar" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Lembrar-se</label>
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
              </form>
        </div>
    </div>
@endsection