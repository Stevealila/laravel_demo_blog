<x-layout>
    <div class="w-6/12 mx-auto my-8">
        <h2 class="text-2xl text-bold">{{ $blog->title }}</h2>
        <div class="my-6">
            <img src="{{ asset('storage/images/'. $blog->image) }}" alt="Blog image" class="w-2/3 h-72 object-cover">
        </div>
        <div>
            {{ $blog->body }}
        </div>
    </div>
</x-layout>