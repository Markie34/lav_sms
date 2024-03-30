@extends('layouts.master')
@section('page_title', 'Upload Materials')
@section('content')
    <div class="card">
    @if(App\Helpers\Qs::userIsTeamSAT()) 
    <div class="card-header header-elements-inline">
            <h6 class="card-title"><i class="icon-books mr-2"></i> Upload Students Materials</h6>
            {!! App\Helpers\Qs::getPanelOptions() !!}
        </div>
        @elseif(App\Helpers\Qs::userIsAcademic())
        <div class="card-header header-elements-inline">
            <h6 class="card-title"><i class="icon-books mr-2"></i> Students Materials</h6>
            {!! App\Helpers\Qs::getPanelOptions() !!}
        </div>
        @endif
        <div class="card-body">
            @if(App\Helpers\Qs::userIsTeamSAT()) 
                @include('pages.support_team.materials.upload')
            @elseif(App\Helpers\Qs::userIsAcademic())
                @include('pages.support_team.materials.show') 
            @else
                <p>You don't have permission to access this page.</p>
            @endif
        </div>
    </div>
@endsection
