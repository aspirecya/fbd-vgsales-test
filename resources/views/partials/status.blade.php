@if (flash()->message)
    <div class="py-4">
        @if(flash()->level === 'success')
            @include('partials.flash.success')
        @elseif(flash()->level === 'error')
            @include('partials.flash.error')
        @else
            @include('partials.flash.notice')
        @endif
    </div>
@endif
