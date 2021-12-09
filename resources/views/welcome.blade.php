@extends('layouts.app')

@section('content')
    @auth
    <div class="background">
       <!-- Start -->
         <livewire:prayers />
    </div>
    @endauth
@endsection
