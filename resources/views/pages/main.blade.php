<div class="flex flex-1 flex-col mt-10">

    <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png" class="object-contain w-25" style="height:100px;">
    <div>
        <div class="flex items-center border-2 border-gray-400 mx-auto px-4 py-5 rounded-3xl" style="width:75vw; height:20px; margin-top:40px; max-width:560px;">
            <svg class="w-4 h-5 text-gray-600 fill-current mr-3" viewBox="0 0 20 20">
                <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
            </svg>

            <form method="GET" action="{{ route('search') }}" id="form" class="px-4 py-2 flex-1">
                @csrf
                <input type="text" name="search" id="search" class="w-full focus:outline-none"
                   placeholder="Search Google or type a URL" style="font-size:medium">
                <button type="submit" class="hidden"  onClick="return empty()"></button>
            </form>
            

            <img src="{{ asset('images/mic.png')}}" class="w-4 h-6 ml-3">
        </div>

        <div class="flex justify-center" style="margin-top:20px">
            <button class="block px-3 py-2 m-3 bg-gray-100 border-white text-gray-600 font-semibold text-sm focus:outline-none ">Google Search</button>
            <button class="block px-3 py-2 m-3 bg-gray-100 border-white text-gray-600 font-semibold text-sm focus:outline-none ">I'm Feeling Lucky</button>
        </div>
    </div>
</div>