<div class="title-section">
    <div class="title">
        <h3>{{ $title }}</h3>
    </div>
    @if( isset($showAction) && $showAction )
        <div class="actions">
            <a class="{{ (isset($class) ? $class : 'add') }} btn btn-default"  onclick="{{ (isset($onClick) ? $onClick : '') }} return false;" href="{{ (isset($href) ? $href : '' ) }}" data-target="{{ $target }}" role="button">
                Add
            </a>
        </div>
    @endif
</div>
