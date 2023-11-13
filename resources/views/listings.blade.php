<h1> {{ $heading }} </h1>

{{-- Maneira mais 'inteligente de fazer o if comentado' --}}
@unless (count($listings) == 0)

{{-- @if (count($listings) == 0) --}}
    {{-- <p>No listings found.</p> --}}
{{-- @endif --}}

@foreach($listings as $listing)
    <h2>
        {{ $listing['title'] }}
    </h2>
    <p>
        {{ $listing['description'] }}
    </p>
    @endforeach

@else
<p>No listings found</p>
@endunless
