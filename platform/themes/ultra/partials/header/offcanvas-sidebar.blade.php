<!-- Off canvas -->
<div class="off-canvas-toggle-cover">
    <div class="off-canvas-toggle hidden d-inline-block ml-15" id="off-canvas-toggle">
        <a href="{{ route('public.index') }}">
            <img class="img-logo d-inline"
                 src="{{ RvMedia::getImageUrl(theme_option('logo')) }}"
                 alt="{{ setting('site_title') }}" width="70px" height="70px">
        </a>
    </div>
</div>
