<x-master>
    <div>
        <div class="flex sticky top-0 bg-white z-50 items-start border-b-2 border-gray-200 header-top" style="padding:30px">
            <a href="{{route('welcome')}}" class="block">
                <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png" class="object-contain" 
                    style="height: 50px; margin-right:50px;">
                    <!-- https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png -->
            </a>  
            <div>
                <div class="flex items-center border-2 border-gray-400 mx-auto px-4 py-5 rounded-3xl"   
                    style="width:unset; height:20px; margin-top:unset; max-width:unset;">
                    <svg class="w-4 h-5 text-gray-600 fill-current mr-3" viewBox="0 0 20 20">
                        <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                    </svg>

                    <form method="GET" action="{{ route('search') }}" class="px-4 py-2 flex-1">
                        @csrf
                        <input type="text" id="search" name="search" class="w-full focus:outline-none" value="{{$searchName}}"
                        placeholder="Search Google or type a URL" style="font-size:medium">
                        <button type="submit" class="hidden"  onClick="return empty()"></button>
                    </form>
                    
            
                    <img src="{{ asset('images/mic.png')}}" class="w-4 h-6 ml-3">
                </div>

                @include('pages.options')
            </div>
        </div>
       

        <div class="search-result">
             

            <p class="text-sm text-gray-500">
             <!-- search reasult clone -->
                About {{ $searchs['searchInformation']['formattedTotalResults'] }}
                results ({{ $searchs['searchInformation']['formattedSearchTime'] }})
                for {{$searchName}}
                                
            </p>

            <!-- search result -->
           @include('pages.search-result')
            

        </div>
    </div>

    

</x-master>