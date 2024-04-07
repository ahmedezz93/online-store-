@extends('layouts.dashboard')

@section('title')
{{ trans('main sidebar.Characteristics details') }}
@endsection


@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title"> {{ trans('main sidebar.Characteristics details') }}
                </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ trans('dashboard.home') }} </a>
                            </li>
                            <li class="breadcrumb-item active">{{ trans('main sidebar.Characteristics details') }}

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
                                <br>
                                <a href="{{ route('create_options') }}" class="btn btn-primary">+{{ trans('options.Add new details') }}
                                </a>

                                <a class="heading-elements-toggle"><i
                                        class="la la-ellipsis-v font-medium-3"></i></a>
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
                                    <table
                                        class="table display nowrap table-striped table-bordered ">
                                        <thead class="">
                                        <tr>
                                            <th>#</th>
                                            <th>{{ trans('categories.the name') }}</th>
                                            <th>{{ trans('dashboard.the price') }}</th>
                                            <th>{{ trans('Product properties.product') }}</th>
                                            <th>{{ trans('Product properties.proprety') }}</th>
                                            <th>{{ trans('categories.procedures') }}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                                  @forelse ($options as $option )
                                                  <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ get_trans($option) }}</td>
                                                    <td>{{ $option->price }}</td>
                                                    <td>{{get_trans($option->products)}}</td>
                                                    <td>{{get_trans($option->attributes)}}</td>

                                                            <td>
                                                        <div class="btn-group" role="group"
                                                             aria-label="Basic example">
                                                            <a href="{{ route('edit_options',$option->id )}}"
                                                               class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">{{ trans('buttons.edit') }}</a>
                                                            <a href="{{ route('delete_options',$option->id )}}"
                                                               class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">{{ trans('buttons.delete') }}</a>
                                                        </div>
                                                    </td>
                                                </tr>


                                                  @empty
                                                       <tr>{{ trans('messages.data not found') }}</tr>
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















