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
                            <li class="breadcrumb-item active">Index
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Kick start -->
        <div class="card">
            <!-- Basic table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <table class="datatables-basic table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>User</th>
                                        <th>Salary</th>
                                        <th>Location</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->category->name }}</td>
                                            <td>{{ $item->user->email }}</td>
                                            <td>{{ $item->salary }}</td>
                                            <td>{{ $item->location }}</td>
                                            <td>{!! $item->format_status !!}</td>
                                            <td>

                                                <div class="dropdown">
                                                    <button type="button"
                                                        class="btn btn-sm dropdown-toggle hide-arrow py-0"
                                                        data-bs-toggle="dropdown">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="{{ route('jobs.show', ['job' => $item->id]) }}">
                                                            <i data-feather="edit-2" class="me-50"></i>
                                                            <span>View</span>
                                                         </a>
                                                         @if ($item->status == 0)

                                                        <a class="dropdown-item"
                                                            href="{{ route('jobs.edit', ['job' => $item->id]) }}">
                                                            <i data-feather="edit-2" class="me-50"></i>
                                                            <span>Approve</span>
                                                        </a>
                                                        @endif

                                                        <a class="dropdown-item delete" data-id="{{ $item->id }}"
                                                            href="#">
                                                            <i data-feather="trash" class="me-50"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                        <form
                                                            action="{{ route('jobs.destroy', ['job' => $item->id]) }}"
                                                            method="POST" id="deleteForm-{{ $item->id }}">
                                                            @method('DELETE')
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Basic table -->
        </div>
        <!--/ Kick start -->

    </div>

@endsection

@section('page_scripts')

    <script>
        $('.delete').click(function(e) {
            e.preventDefault();
            let id = $(this).attr('data-id')
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showDenyButton: false,
                showCancelButton: true,
                confirmButtonText: 'yes',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $(`#deleteForm-${id}`).submit();
                } else if (result.isDenied) {}
            })
        })
    </script>

@endsection
