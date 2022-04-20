@extends('layouts.app')
@section('title')
Ноывй клиент
@endsection

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('client-form')  }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone">
        <div id="phoneHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
        <div id="nameHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="family" class="form-label">Family</label>
        <input type="text" class="form-control" id="family" name="family">
        <div id="familyHelp" class="form-text"></div>
    </div>

    <div class="mb-3">
        <label for="title" class="form-label">Product title</label>
        <input type="text" class="form-control" id="title" name="title">
        <div id="titleHelp" class="form-text"></div>
    </div>

    <div class="mb-3">
        <label for="amount" class="form-label">Product amount</label>
        <input type="text" class="form-control" id="amount" name="amount">
        <div id="amountHelp" class="form-text"></div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
