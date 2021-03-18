@if ($paginator->hasPages())
<nav>
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if (! $paginator->onFirstPage())
            <li>
                <button type="button" dusk="previousPage"  wire:click="previousPage" wire:loading.attr="disabled" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</button>
            </li> 
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li  aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="current" wire:key="paginator-page-{{ $page }}" aria-current="page"><span>{{ $page }}</span></li>
                    @else
                        <li wire:key="paginator-page-{{ $page }}"><button type="button" class="page-link" wire:click="gotoPage({{ $page }})">{{ $page }}</button></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li >
                <button type="button" dusk="nextPage" class="page-link" wire:click="nextPage" wire:loading.attr="disabled" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</button>
            </li>
     
        @endif
    </ul>
</nav>

@endif
