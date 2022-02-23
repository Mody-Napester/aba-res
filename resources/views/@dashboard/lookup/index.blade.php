@extends('@dashboard._layouts.master')

@section('title') {{ trans('lookup.page_title') }} @endsection

@section('content')

    <!-- Page Breadcrumb -->
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
                <div class="float-right">
                    <a href="{{ route('lookup.create') }}" class="btn btn-sm btn-success"><i class="bx bxs-book-add"></i> {{ trans('general.create_new') }}</a>
                </div>

                <h5 class="content-header-title float-left pr-1 mb-0">{{ trans('lookup.lookups') }}</h5>
                <div class="breadcrumb-wrapper d-none d-sm-block">
                    <ol class="breadcrumb p-0 mb-0 pl-1">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active">{{ trans('lookup.lookups') }}</li>
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

                                    <th>{{ trans('lookup.name') }}</th>
                                    <th>{{ trans('lookup.display_name') }}</th>
                                    <th>{{ trans('lookup.parent') }}</th>
                                    <th>{{ trans('lookup.related') }}</th>
                                    <th>{{ trans('lookup.media_image') }}</th>
                                    <th>{{ trans('lookup.details') }}</th>
                                    <th>{{ trans('lookup.is_active') }}</th>
                                    <th>{{ trans('lookup.ordering') }}</th>

                                    <th>{{ trans('lookup.created_by') }}</th>
                                    <th>{{ trans('lookup.updated_by') }}</th>
                                    <th>{{ trans('lookup.created_at') }}</th>
                                    <th>{{ trans('lookup.updated_at') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($resources as $key => $resource)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    @if(check_authority('edit.lookup'))
                                                        <a href="{{ route('lookup.edit', [$resource->uuid]) }}" class="btn btn-sm btn-success">
                                                            <i class="bx bx-edit"></i>
                                                        </a>
                                                    @endif
                                                    @if($resource->parent_id != 0)
                                                        @if(check_authority('delete.lookup'))
                                                            <a href="{{ route('lookup.destroy', [$resource->uuid]) }}" class="confirm-delete btn btn-sm btn-danger">
                                                                <i class="bx bx-trash"></i>
                                                            </a>
                                                        @endif
                                                    @endif
                                                </div>
                                            </td>

                                            <td>{{ $resource->name }}</td>
                                            <td>{{ getTrans($resource->display_name, lang()) }}</td>
                                            <td>
                                                @if($resource->parent)
                                                    {{ getTrans($resource->parent->display_name, lang()) }}
                                                @else
                                                    <span class="badge badge-sm badge-light-danger">No Parent</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($resource->related)
                                                    {{ getTrans($resource->related->display_name, lang()) }}
                                                @else
                                                    <span class="badge badge-sm badge-danger">No Related</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($resource->media_image)
                                                    <img src="{{ url('assets_public/files/image') . '/' . $resource->media_image->file_name }}" alt="image" class="img-thumbnail">
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>{{ getTrans($resource->details, lang()) }}</td>
                                            <td>
                                                @if($resource->is_active == 1)
                                                    <span class="badge badge-light-success">Yes</span>
                                                @else
                                                    <span class="badge badge-light-danger">No</span>
                                                @endif
                                            </td>
                                            <td>{{ $resource->ordering }}</td>
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
