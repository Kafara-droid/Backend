<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('produks') }}
        </h2>
    </x-slot>
    <div class="">
        <a href="{{ route('produks.create') }}" class="px-4 py-2 text-white bg-green-500 rounded-lg">Create</a>
    </div>
    <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4">
            @if (session('success'))
                <div class="p-4 mb-4 text-white bg-green-500 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif
            @foreach ($produks as $produk)
                <div class="w-full px-4 mb-8 md:w-1/3">
                    <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                        <img class="object-cover object-center w-full h-48" src="{{ asset('images/'.$produk->photo) }}" alt="{{ $produk->name }}">
                        <div class="px-6 py-4">
                            <h2 class="mb-2 text-lg font-medium text-gray-800">{{ $produk->name }}</h2>
                            <p class="mb-4 text-sm text-gray-600">{{ $produk->price }}</p>
                            <p class="text-base text-gray-700">{{ $produk->description }}</p>
                            <div class="flex items-center justify-between">
                                <a href="{{ route('produks.show', $produk->id) }}" class="px-4 py-2 text-white bg-purple-500 rounded-lg">Show</a>
                                <a href="{{ route('produks.edit', $produk->id) }}" class="px-4 py-2 text-white rounded-lg bg-cyan-500">Edit</a>
                                <form action="{{ route('produks.destroy', $produk->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 py-2 text-white bg-red-500 rounded-lg">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        </div>
        </x-app-layout>
