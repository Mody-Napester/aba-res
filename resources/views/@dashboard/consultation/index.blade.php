@extends('@dashboard._layouts.master')

@section('title') {{ trans('consultation.page_title') }} @endsection

@section('post_head')
    <script src="{{ url('assets_dashboard/assets-custom/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('content')

    <!-- Page Breadcrumb -->
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
                <h5 class="content-header-title float-left pr-1 mb-0">{{ trans('consultation.consultations') }}</h5>
                <div class="breadcrumb-wrapper d-none d-sm-block">
                    <ol class="breadcrumb p-0 mb-0 pl-1">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active">{{ trans('consultation.consultations') }}</li>
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
                                    <th>{{ trans('consultation.name') }}</th>
                                    <th>{{ trans('consultation.email') }}</th>
                                    <th>{{ trans('consultation.phone') }}</th>
                                    <th>{{ trans('consultation.country') }}</th>
                                    <th>{{ trans('consultation.speciality') }}</th>
                                    <th>{{ trans('consultation.degree') }}</th>
                                    <th>{{ trans('consultation.details') }}</th>
                                    <th>{{ trans('consultation.file') }}</th>
                                    <th>{{ trans('general.created_by') }}</th>
                                    <th>{{ trans('general.updated_by') }}</th>
                                    <th>{{ trans('general.created_at') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($resources as $key => $resource)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    @if(check_authority('edit.consultation'))
                                                        <a href="{{ route('consultation.edit', [$resource->uuid]) }}" class="btn btn-sm btn-success">
                                                            <i class="bx bx-edit"></i>
                                                        </a>
                                                    @endif
                                                    @if(check_authority('delete.consultation'))
                                                        <a href="{{ route('consultation.destroy', [$resource->uuid]) }}" class="confirm-delete btn btn-sm btn-danger">
                                                            <i class="bx bx-trash"></i>
                                                        </a>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>{{ $resource->name }}</td>
                                            <td>{{ $resource->email }}</td>
                                            <td>{{ $resource->phone }}</td>
                                            <td>{{ $resource->country }}</td>
                                            <td>{{ $resource->speciality }}</td>
                                            <td>{{ $resource->degree }}</td>
                                            <td>{{ $resource->details }}</td>
                                            <td>{{ $resource->file }}</td>
                                            <td>{{ custom_date($resource->created_at) }}</td>
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
