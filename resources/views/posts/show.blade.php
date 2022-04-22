@extends('layouts.app')

@section('content')
    <div class="">
        <div class="w-full grid grid-cols-2 grid-rows-2 bg-white p-6 rounded-lg">
            <x-post :post="$post" />
        </div>
    </div>
@endsection