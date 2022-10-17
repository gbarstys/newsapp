<x-layout>
@include('partials._search')
 
            <a href="/" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
<div class="mx-4">
    <x-card class="p-10">
        <div
            class="flex flex-col items-center justify-center text-center"
        >
            <img
                class="w-100 mr-6 mb-6"
                src="{{$listing->newsimage ? asset('storage/' . $listing->newsimage) : asset('/images/no-image.jpg')}}" alt=""
            />
                <h3 class="text-3xl font-bold mb-4">
                    {{$listing->headline}}
                </h3>
                <div class="text-lg space-y-6">
                    {{$listing->description}}
            </div>
        </div>
    </x-card>

    <x-card class="mt-4 p-2 flex space-x-6">
        <a href="/listings/{{$listing->id}}/edit">
            <i class="fa-solid fa-pencil"></i> Edit
        </a>

    </x-card>

</div>
</x-layout>
