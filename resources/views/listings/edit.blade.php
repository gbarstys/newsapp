<x-layout>
<x-card class="p-10 rounded max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Edit a News
        </h2>
        <p class="mb-4">Edit: {{$listing->headline}}</p>
    </header>

    <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="headline" class="inline-block text-lg mb-2"
                >News Headline</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="headline"
                value="{{$listing->headline}}"
                placeholder="Example: Electricity bills going to raise by 20% this season "
            />

            @error('headline')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label for="newsimage" class="inline-block text-lg mb-2">
                News Image
            </label>
            <input
                type="file"
                class="border border-gray-200 rounded p-2 w-full"
                name="newsimage"
            />

            <img
                class="w-100 mr-6 mb-6"
                src="{{$listing->newsimage ? asset('storage/' . $listing->newsimage) : asset('/images/no-image.jpg')}}" alt=""
            />

            @error('newsimage')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label
                for="description"
                class="inline-block text-lg mb-2"
            >
                News Description
            </label>
            <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="description"
                rows="10"
                placeholder="Electricity bills raise going to reach everyone’s pockets this year, etc. ">
                {{$listing->description}}
            </textarea>

            @error('description')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

        </div>

        <div class="mb-6">
            <button
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Update The News
            </button>

            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
</div>
</x-card>
</x-layout>