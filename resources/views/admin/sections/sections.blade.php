@extends('layouts.dashboard')

@section('title')
    {{ trans('sections.sections') }}
@endsection


@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">     {{ trans('sections.sections') }}
                    </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ trans('dashboard.home') }}</a>
                                </li>
                                <li class="breadcrumb-item active">     {{ trans('sections.sections') }}

                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">    {{ trans('sections.all sections') }}
                                    </h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <a href="{{ route('create_section') }}" class="btn btn-primary">    {{ trans('sections.Add a new section') }}
                                        </a>
                                        <table class="table display nowrap table-striped table-bordered">
                                            <thead class="">
                                                <tr>
                                                    <th># </th>
                                                    <th>    {{ trans('sections.section Name') }}
                                                    </th>
                                                    <th>{{ trans('categories.Category name') }}</th>
                                                    <th> {{ trans('categories.Link name') }} </th>
                                                    <th>{{ trans('categories.Section picture') }}</th>
                                                    <th>{{ trans('categories.procedures') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($sections as $section)
                                                    <tr>

                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ get_trans($section) }}</td>
                                                        <td>{{ get_trans($section->categories) }}</td>

                                                        <td>{{ $section->slug }}</td>
                                                        <td> <img style="width: 150px; height: 100px;" src="{{$section->image ? get_images('sections/'.$section->image->image_name ) :'' }}"></td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                aria-label="Basic example">
                                                                <a href="{{ route('edit_section', $section->id) }}"
                                                                    class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">{{ trans('buttons.edit') }}</a>


                                                                <a href="{{ route('delete_section', $section->id) }}"
                                                                    class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">{{ trans('buttons.delete') }}</a>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    {{ trans('messages.data not found') }}
                                                @endforelse

                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
