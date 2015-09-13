<div class="title-section">
    <div class="title">
        <h1>{{ $title }}</h1>
    </div>
    @if( isset($showAction) && $showAction )
        <div class="actions">
            <a class="btn btn-default" href="{{ isset($nameRoute) ? route($nameRoute) : '#' }}" role="button">
                Add
            </a>
        </div>
    @endif
</div>

<hr/>