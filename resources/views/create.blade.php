<x-layout>

<form action="{{ url('store') }}" method="post" enctype="multipart/form-data" class="w-2/4 mx-auto">
    @csrf 
    <div class="mb-4">
        <label for="title" class="block mb-2">Title:</label>
        <input type="text" name="title" class="w-full bg-gray-100 text-gray-700 p-2 rounded focus:outline-none sm:w-4/5">
    </div>
    <div class="w-full mb-4">
        <label for="body" class="block mb-2">Body:</label>
        <textarea name="body" id="body" rows="7" class="w-full bg-gray-100 text-gray-700 p-2 rounded focus:outline-none sm:w-4/5"></textarea>
    </div>
    <div class="mb-4">
        <input type="file" name="file">
    </div>
    <div class="mb-4">
        <button class="bg-cyan-800 hover:bg-cyan-900 rounded px-8 py-2 ">Store</button>
    </div>
</form>

</x-layout>