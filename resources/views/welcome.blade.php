@extends('layouts.app')

@section('content')
<header class="bg-gray-900 shadow-sm">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold text-gray-100 text-center">
        Click when you pray - اضغط عندما تصلي
      </h1>
    </div>
  </header>
    <div class="background">
       <!-- Start -->
         <livewire:prayers />
    </div>
@endsection
