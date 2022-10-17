@props(['listing'])

<x-card>
<div class="flex">
    <img
        class="hidden w-48 mr-6 md:block"
        src="{{$listing->newsimage ? asset('storage/' . $listing->newsimage) : asset('/images/no-image.jpg')}}"
        alt=""
    />
    <div>
        <h3 class="text-2xl">
            <a href="/listings/{{$listing->id}}">{{$listing->headline}}</a>
        </h3>
    </div>
</div>
</x-card>