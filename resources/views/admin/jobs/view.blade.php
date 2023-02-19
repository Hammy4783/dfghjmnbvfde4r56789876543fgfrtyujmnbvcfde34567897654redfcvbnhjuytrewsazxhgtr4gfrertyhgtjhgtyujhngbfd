@extends('admin.layouts.app')

@section('page_title', 'Jobs')

@section('page_styles')

@endsection

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">Jobs</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('jobs.index') }}">Jobs</a>
                            </li>
                            <li class="breadcrumb-item active">View
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Basic Horizontal form layout section start -->
        <section id="basic-horizontal-layouts">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Job</h4>
                        </div>
                        <div class="card-body">
                           <div class="row">
                            <div class="col-md-8 col-12">
                                <h5 class="m-0 mb-2">{{$item->title}}</h5>
                                <div class="d-flex gap-2 mb-2">
                                    <span><i data-feather='map-pin'></i> {{$item->location}}</span>
                                    <span><i data-feather='dollar-sign'></i> {{$item->salary}}</span>
                                    <span><i data-feather='user-check'></i> {{$item->user->email}}</span>
                                    <span>{!! $item->format_status !!}</span>
                                </div>
                                <p class="m-0 mb-2">{{$item->description}}</p>
                                @if ($item->status == 0)
                                <a class="btn btn-primary"  href="{{route('jobs.edit', ['job' => $item->id])}}">Approve</a>
                                @endif
                            </div>
                            <div class="col-md-4 col-12">
                                <img class="img-fluid rounded" src="{{$item->image}}">
                            </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic Horizontal form layout section end -->

    </div>
@endsection

@section('page_scripts')


@endsection
