@extends('layouts.dashboard')

@section('title')
{{ trans('main sidebar.tags') }}
@endsection


@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title"> {{ trans('main sidebar.tags') }} </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ trans('dashboard.home') }}</a>
                            </li>
                            <li class="breadcrumb-item active"> {{ trans('main sidebar.tags') }}
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
                                <a href="{{ route('create_tags') }}" class="btn btn-primary">+{{ trans('tags.Add tag') }}</a>

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
                                            <th>{{ trans('categories.the name') }} </th>
                                            <th> {{ trans('categories.Link name') }}</th>
                                             <th>{{ trans('categories.procedures') }}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                              @forelse ( $tags as $tag )
                                              <tr>
                                                <td>{{ $loop->iteration }}</td>

                                                @if(app()->getlocale()=="ar")
                                                <td>{{ $tag->gettranslation('name','ar') }}</td>

                                                @elseif (app()->getlocale()=="en")
                                                <td>{{ $tag->gettranslation('name','en') }}</td>
                                                @endif


                                                <td>
                                                   <div class="btn-group" role="group"
                                                        aria-label="Basic example">
                                                       <a href="{{ route('edit_tags',$tag->id) }}"
                                                          class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">{{ trans('buttons.edit') }}</a>
                                                       <a href="{{ route('delete_tags',$tag->id) }}"
                                                          class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">{{ trans('buttons.delete') }}</a>



                                                   </div>
                                               </td>
                                           </tr>

                                              @empty

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
