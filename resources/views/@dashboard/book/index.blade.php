@extends('@dashboard._layouts.master')

@section('title') {{ trans('book.page_title') }} @endsection

@section('post_head')
    <script src="{{ url('assets_dashboard/assets-custom/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('content')

    <!-- Page Breadcrumb -->
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
                <div class="float-right">
                    <a href="{{ route('book.create') }}" class="btn btn-sm btn-success"><i class="bx bxs-book-add"></i> {{ trans('general.create_new') }}</a>
                </div>

                <h5 class="content-header-title float-left pr-1 mb-0">{{ trans('book.books') }}</h5>
                <div class="breadcrumb-wrapper d-none d-sm-block">
                    <ol class="breadcrumb p-0 mb-0 pl-1">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active">{{ trans('book.books') }}</li>
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
                                    <th>{{ trans('book.name') }}</th>
                                    <th>{{ trans('book.price') }}</th>
                                    <th>{{ trans('book.details') }}</th>
                                    <th>{{ trans('book.cover') }}</th>
                                    <th>{{ trans('book.image') }}</th>
                                    <th>{{ trans('book.is_free') }}</th>
                                    <th>{{ trans('book.is_published') }}</th>
                                    <th>{{ trans('book.created_by') }}</th>
                                    <th>{{ trans('book.updated_by') }}</th>
                                    <th>{{ trans('book.created_at') }}</th>
                                    <th>{{ trans('book.updated_at') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($resources as $key => $resource)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    @if(check_authority('edit.book'))
                                                        <a href="{{ route('book.edit', [$resource->uuid]) }}" class="btn btn-sm btn-success">
                                                            <i class="bx bx-edit"></i>
                                                        </a>
                                                    @endif
                                                    @if(check_authority('delete.book'))
                                                        <a href="{{ route('book.destroy', [$resource->uuid]) }}" class="confirm-delete btn btn-sm btn-danger">
                                                            <i class="bx bx-trash"></i>
                                                        </a>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>{{ getTrans($resource->name, lang()) }}</td>
                                            <td>{{ $resource->price }}</td>
                                            <td>{!! getTrans($resource->details, lang()) !!}</td>
                                            <td>
                                                @if($resource->media_cover)
                                                    <img src="{{ url('assets_public/files/image') . '/' . $resource->media_cover->file_name }}" alt="image" class="img-thumbnail">
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>
                                                @if($resource->media_book)
                                                    <a href="{{ url('assets_public/files/book') . '/' . $resource->media_book->file_name }}"><i class="bx bx-download"></i></a>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>
                                                @if($resource->is_free == 1)
                                                    <span class="badge badge-light-success">Yes</span>
                                                @else
                                                    <span class="badge badge-light-danger">No</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($resource->is_published == 1)
                                                    <span class="badge badge-light-success">Yes</span>
                                                @else
                                                    <span class="badge badge-light-danger">No</span>
                                                @endif
                                            </td>
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
