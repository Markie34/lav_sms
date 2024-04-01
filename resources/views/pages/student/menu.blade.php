{{--Marksheet--}}
<li class="nav-item">
    <a href="{{ route('marks.year_select', Qs::hash(Auth::user()->id)) }}" class="nav-link {{ in_array(Route::currentRouteName(), ['marks.show', 'marks.year_selector', 'pins.enter']) ? 'active' : '' }}"><i class="icon-book"></i> Marksheet</a>
</li>
<li class="nav-item">
    <a href="{{ route('uploadMaterials.index')}}" class="nav-link"><i class="icon-book"></i>Materials</a>
</li>