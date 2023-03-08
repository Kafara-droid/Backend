
<section class="pt-10 flex flex-col justify-center items-center space-y-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10 items-center">
        @foreach ($projects as $project)
        @foreach($project->images as $image)
        <img src="{{ asset('/storage/' . $image) }}" alt="{{$project->name}}" class="hover:opacity-75 transition duration-200">
        {{-- <img src="Amazon logo.png" alt="" class="hover:opacity-75 transition duration-200">
        <img src="google logo.png" alt="" class="hover:opacity-75 transition duration-200">
        <img src="microsoft logo.png" alt="" class="hover:opacity-75 transition duration-200">
        <img src="Group.png" alt="" class="hover:opacity-75 transition duration-200"> --}}
        @endforeach
        @endforeach
    </div>
</section>
