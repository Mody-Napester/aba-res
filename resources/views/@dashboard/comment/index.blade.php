@extends('@dashboard._layouts.master')

@section('title') {{ trans('comment.page_title') }} @endsection

@section('post_head')
    <script src="{{ url('assets_dashboard/assets-custom/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('content')

    <!-- Page Breadcrumb -->
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
                <h5 class="content-header-title float-left pr-1 mb-0">{{ trans('comment.comments') }}</h5>
                <div class="breadcrumb-wrapper d-none d-sm-block">
                    <ol class="breadcrumb p-0 mb-0 pl-1">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active">{{ trans('comment.comments') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- List -->
    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><b>{{ trans('general.list_all') }}</b></h4>
                    </div>
                    <div class="card-body card-dashboard">
                        <p class="card-text">
                            {{ trans('general.list_all_text') }}
                        </p>
                        <div class="table-responsive">
                            <table class="table table-light table-striped nowrap zero-configuration">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ trans('general.control') }}</th>
                                    <th>{{ trans('comment.user') }}</th>
                                    <th>{{ trans('comment.course') }}</th>
                                    <th>{{ trans('comment.details') }}</th>
                                    <th>{{ trans('general.created_by') }}</th>
                                    <th>{{ trans('general.updated_by') }}</th>
                                    <th>{{ trans('general.created_at') }}</th>
                                    <th>{{ trans('general.updated_at') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($resources as $key => $resource)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    @if(check_authority('edit.comment'))
                                                        <a href="{{ route('comment.edit', [$resource->uuid]) }}" class="btn btn-sm btn-success">
                                                            <i class="bx bx-edit"></i>
                                                        </a>
                                                    @endif
                                                    @if(check_authority('delete.comment'))
                                                        <a href="{{ route('comment.destroy', [$resource->uuid]) }}" class="confirm-delete btn btn-sm btn-danger">
                                                            <i class="bx bx-trash"></i>
                                                        </a>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>{{ $resource->user }}</td>
                                            <td>{{ $resource->course }}</td>
                                            <td>{{ $resource->details }}</td>
                                            <td>{{ $resource->createdBy->name }}</td>
                                            <td>{{ ($resource->updatedBy)? $resource->updatedBy->name : '' }}</td>
                                            <td>{{ custom_date($resource->created_at) }}</td>
                                            <td>{{ custom_date($resource->updated_at) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
