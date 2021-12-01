@extends('layouts.app')

@section('content')
    @auth
    <div class="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="center">اضغط علي كل صلاة تصليها </h1>
                </div>
            </div>
        </div>
       <!-- Start -->
         <livewire:prayers />
    </div>
    @endauth
@endsection
