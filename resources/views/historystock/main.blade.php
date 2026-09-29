@extends('layouts.master')

@section('konten')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <div>
                        <a href="{{ route('historystock.rm') }}" 
                            class="btn {{ Route::is('historystock.rm') ? 'btn-primary' : 'btn-light' }} waves-effect btn-label waves-light" 
                            title="List History Stock Raw Material">
                            <span class="label-icon fw-bold"><small>RM</small></span> Raw Material
                        </a>
                        
                        <a href="{{ route('historystock.wip') }}" 
                            class="btn {{ Route::is('historystock.wip') ? 'btn-primary' : 'btn-light' }} waves-effect btn-label waves-light" 
                            title="List History Stock WIP">
                            <span class="label-icon fw-bold"><small>WIP</small></span> Work In Progress
                        </a>
                        
                        <a href="{{ route('historystock.fg') }}" 
                            class="btn {{ Route::is('historystock.fg') ? 'btn-primary' : 'btn-light' }} waves-effect btn-label waves-light" 
                            title="List History Stock Finished Goods">
                            <span class="label-icon fw-bold"><small>FG</small></span> Finish Good
                        </a>
                        
                        <a href="{{ route('historystock.ta') }}" 
                            class="btn {{ Route::is('historystock.ta') ? 'btn-primary' : 'btn-light' }} waves-effect btn-label waves-light" 
                            title="List History Stock Auxalary & Sparepart">
                            <span class="label-icon fw-bold"><small>TA</small></span> Aux & Sparepart / Other
                        </a>
                    </div>
            
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Master Data</a></li>
                            <li class="breadcrumb-item active">History Stock</li>
                        </ol>
                    </div>
                </div>
            </div>
            
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light p-3">
                        <h5 class="fw-bold mb-0">
                            @if(Route::is('historystock.rm'))
                                List Stock Raw Material (RM)
                            @elseif(Route::is('historystock.wip'))
                                List Stock Work In Progress (WIP)
                            @elseif(Route::is('historystock.fg'))
                                List Stock Finish Good (FG)
                            @elseif(Route::is('historystock.ta'))
                                List Stock Auxalary & Sparepart / Other
                            @endif
                        </h5>
                    </div>
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection