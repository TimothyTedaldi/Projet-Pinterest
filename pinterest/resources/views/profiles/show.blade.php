@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-4 text-center">
            <img src="" alt="" class="rouded-circle">
        </div>
        <div class="col-8">
            <div class="h4 mr-3 pt-2">{{ $user->'username'}}</div>
        </div>
        
    </div>
</div>
@endsection
