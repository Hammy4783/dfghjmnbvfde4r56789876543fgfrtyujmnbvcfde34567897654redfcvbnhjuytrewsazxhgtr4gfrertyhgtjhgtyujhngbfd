@extends('admin.layouts.app')

@section('page_title', 'Categories')

@section('page_styles')

@endsection

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">Categories</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categories</a>
                            </li>
                            <li class="breadcrumb-item active">{{ $item->id != null ? 'Edit' : 'Create' }}
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
                <div class="col-md-5 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Category</h4>
                        </div>
                        <div class="card-body">
                            <form class="form form-horizontal" method="POST" action="{{ $item->id == null ? route('categories.store') : route('categories.update', ['category' => $item->id]) }}">
                                @csrf
                                @if ($item->id != null)
                                    @method('PATCH')
                                @endif
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-1 form-group">
                                            <label class="col-form-label" for="first-name">Name</label>
                                            <input type="text" id="first-name" class="form-control" name="name"
                                                placeholder="Name" value="{{ isset($item->name) ? $item->name : old('name') }}" />
                                            @error('name')
                                                <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary me-1">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                    </div>
                                </div>
                            </form>
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
