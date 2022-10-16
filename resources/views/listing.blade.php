@extends('layout')

@section('content')
@include('partials._search')
 
            <a href="/" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
<div class="mx-4">
    <div class="bg-gray-50 border border-gray-200 p-10 rounded">
        <div
            class="flex flex-col items-center justify-center text-center"
        >
            <img
                class="w-48 mr-6 mb-6"
                src="{{asset('images/no-image.jpg')}}"
                alt=""
            />

            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <h3 class="text-3xl font-bold mb-4">
                    {{$listing->headline}}
                </h3>
                <div class="text-lg space-y-6">
                    {{$listing->description}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection