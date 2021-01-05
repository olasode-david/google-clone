@php
    $search = count($searchs['items']);
@endphp
@for ( $i = 0; $i < $search; $i++) 
    <div style="margin: 40px 0;">

        <a class="block flex items-center underline text-blue-700" href="{{ $searchs['items'][$i]['link']}}">
            <img src="{{$searchs['items'][$i]['pagemap']['cse_image'][0]['src'] ?? ''}}" 
                class=" mr-2 object-contain" width="20" height="20">
                {{ $searchs['items'][$i]['displayLink']}} &#9660;
        </a>

        <a class="block  hover:underline" href="{{ $searchs['items'][$i]['link']}}">
            <h2 class="font-medium text-2xl text-blue-700">
                {{ $searchs['items'][$i]['title']}}
            </h2>
        </a>

        <p class="mt-2">
            {{ $searchs['items'][$i]['snippet']}}
        </p>

    </div>
@endfor