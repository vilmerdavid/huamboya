
@if (count($breadcrumbs))

<div id="page-header" class="m-has-breadcrumbs">
    <!-- BREADCRUMBS : begin -->
    <div class="breadcrumbs">
        <ul>
            @foreach ($breadcrumbs as $breadcrumb)
            
                @if ($breadcrumb->url && !$loop->last)
                    <li class="home">
                        <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                    </li>
                @else
                    <li>
                    {{ $breadcrumb->title }}
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
    <!-- BREADCRUMBS : end -->

</div>

@endif