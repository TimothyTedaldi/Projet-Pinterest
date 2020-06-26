@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-4 text-center">
            <img src="" alt="" class="rouded-circle">
        </div>
        <div class="col-8">
            <div class="h4 mr-3 pt-2">{{ $user->'username'}}</div>
            <!--conserver {{ $user->'username' }}  = le nom de l'utilisateur ds bd -->
            <div class="mt-3">
                <div class="font-weight bold">{{ $user->profile->title }}</div>
                <!-- conserver {{ $user->profile->title }} = le titre du profile ds bd -->
                <div>{{ $user->profile->description }}</div>
                <!-- conserver {{ $user->profile->description }} = la description du profile ds bd-->
                <a href="#">{{ $user->profile->url }}</a>
                <!-- conserver {{ $user->profile->url }} = l'url de site ds profile ds bd -->
            </div>
        </div>

        
    </div>
</div>
@endsection
