@if ($paginator->hasPages())
    <ul class="page">

        @if ( ! $paginator->onFirstPage())
            {{-- First Page Link --}}
            <li class="page-item">
                <a class="page-link"
                wire:click="gotoPage(1)#asad"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
            </li>
            @if($paginator->currentPage() > 2)
            {{-- Previous Page Link --}}

            
            @endif
        @endif

        <!-- Pagination Elements -->
        @foreach ($elements as $element)
            <!-- Array Of Links -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    <!--  Use three dots when current page is greater than 3.  -->
                    @if ($paginator->currentPage() > 3 && $page === 2)
                        <div class="page-link">

                        </div>
                    @endif

                    <!--  Show active page two pages before and after it.  -->
                    @if ($page == $paginator->currentPage())
                        <span class="page-link">{{ $page }}</span>
                    @elseif ($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 2 || $page === $paginator->currentPage() - 1 || $page === $paginator->currentPage() - 2)
                        <a class="page-item" wire:click="gotoPage({{$page}})">{{ $page }}</a>
                    @endif

                    <!--  Use three dots when current page is away from end.  -->
                    @if ($paginator->currentPage() < $paginator->lastPage() - 2  && $page === $paginator->lastPage() - 1)
                        <div class="page-link">

                        </div>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            @if($paginator->lastPage() - $paginator->currentPage() >= 2)
            <li class="page-link"><a class="page-item"
                wire:click="nextPage#asad"
                rel="next">
                >
                </a></li>
            @endif
            <li class="page-link"><a
                class="page-item"
                wire:click="gotoPage({{ $paginator->lastPage() }})#asad">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a></li>
        @endif
        </ul>
@endif
