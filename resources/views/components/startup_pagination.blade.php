@if($paginator->hasPages())
<div class="listghor_pagination text-center">
        <ul>
       
        @if ($paginator->onFirstPage())
            <li class="prev disabled"><a><i class="fas fa-arrow-left"></i></a></li>

        @else
            <li class="prev"><a href="{{ $paginator->previousPageUrl() }}"><i class="fas fa-arrow-left"></i></a></li>

        @endif


      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class=" disabled" aria-disabled="true"><a>{{ $element }}</a></li>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><a>{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
            <li class="next"><a href="{{ $paginator->nextPageUrl() }}"><i class="fas fa-arrow-right"></i></a></li>
        @else
            <li class="next"><a"><i class="fas fa-arrow-right"></i></a></li>
        @endif
    </ul>
@endif 