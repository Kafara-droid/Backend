<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Course Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('title') text-red-500 @enderror">Title</span>
                                <input type="text" name="title"
                                    class="block @error('title') border-red-500 bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    placeholder="" value="{{old('title')}}" />
                            </label>
                            @error('title')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                              
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('content') text-red-500 @enderror">Content</span>
                                <textarea
                                    class="block @error('content') border-red-500  bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    name="content" rows="3">{{old('content')}}</textarea>
                            </label>
                            @error('content')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="sr-only">Choose File</span>
                                <input type="file" name="image"
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                            </label>
                            @error('image')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}

                            </div>
                            @enderror
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>