@extends('layouts.app')

@section('content')
    <div class="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>اضغط علي كل صلاة تصليها </h1>
                </div>
            </div>
            <!-- Start -->
                <livewire:prayers />
        </div>
    </div>
@endsection
