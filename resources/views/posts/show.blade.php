@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg grid grid-col-1 sm:grid-col-2 md:grid-col-3">
            <x-post :post="$post" />
        </div>
    </div>
@endsection