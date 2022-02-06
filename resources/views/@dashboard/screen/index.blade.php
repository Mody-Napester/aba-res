@extends('@dashboard._layouts.master')

@section('title') {{ trans('screen.page_title') }} @endsection

@section('content')

    <!-- Page Breadcrumb -->
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
                <h5 class="content-header-title float-left pr-1 mb-0">{{ trans('screen.screens') }}</h5>
                <div class="breadcrumb-wrapper d-none d-sm-block">
                    <ol class="breadcrumb p-0 mb-0 pl-1">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active">{{ trans('screen.screens') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Create -->
    @if(check_authority('create.screen'))
        @include('@dashboard.screen.create')
    @endif

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
                                    <th>{{ trans('screen.name') }}</th>
                                    <th>{{ trans('screen.actions') }}</th>
                                    <th>{{ trans('screen.created_by') }}</th>
                                    <th>{{ trans('screen.updated_by') }}</th>
                                    <th>{{ trans('screen.created_at') }}</th>
                                    <th>{{ trans('screen.updated_at') }}</th>
                                    <th>{{ trans('general.control') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($resources as $key => $resource)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $resource->name }}</td>
                                            <td>
                                                @foreach($resource->actions as $action)
                                                    <span class="badge badge-light-success">{{ $action->name }}</span>
                                                @endforeach
                                            </td>
                                            <td>{{ $resource->createdBy->name }}</td>
                                            <td>{{ ($resource->updatedBy)? $resource->updatedBy->name : '' }}</td>
                                            <td>{{ custom_date($resource->created_at) }}</td>
                                            <td>{{ custom_date($resource->updated_at) }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    @if(check_authority('edit.screen'))
                                                    <a href="{{ route('screen.edit', [$resource->uuid]) }}" class="btn btn-sm btn-success">
                                                        <i class="bx bx-edit"></i>
                                                    </a>
                                                    @endif
                                                    @if(check_authority('delete.screen'))
                                                    <a href="{{ route('screen.destroy', [$resource->uuid]) }}" class="confirm-delete btn btn-sm btn-danger">
                                                        <i class="bx bx-trash"></i>
                                                    </a>
                                                    @endif
                                                </div>
                                            </td>
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
