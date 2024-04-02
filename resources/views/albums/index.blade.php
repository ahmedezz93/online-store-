@extends('layouts.dashboard')

@section('title')
    Albums
@endsection


@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">

                    </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                </li>


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
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <a href="{{ route('albums.create') }}" class="btn btn-primary">+ Create Album</a>

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
                                        <table class="table display nowrap table-striped table-bordered ">
                                            <thead class="">
                                                <tr>
                                                    <th># </th>
                                                    <th>Album Name
                                                    </th>
                                                    <th>Number of images</th>
                                                    <th>actions</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                @isset ($albums)
                                                @foreach ($albums as $album )

                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>
                                                            {{ $album->name }}
                                                        </td>
                                                        <td>
                                                            {{ $album->images ? $album->images()->count() : 0 }}
                                                        </td>


                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                aria-label="Basic example">
                                                                <a href="{{ route('albums.createImages', $album->id) }}"
                                                                    class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">Add Images</a>

                                                                <a href="{{ route('albums.edit', $album->id) }}"
                                                                    class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">edit</a>
                                                                <!-- Button trigger modal -->
                                                                @if ($album->images()->count() > 0)
                                                                    <button type="button" class="btn btn-danger"
                                                                        data-toggle="modal"
                                                                        data-target="#exampleModal{{ $album->id }}">
                                                                        Delete or Move
                                                                    </button>
                                                                @else
                                                                    <a href="{{ route('albums.destroy', $album->id) }}"
                                                                        class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">{{ trans('buttons.delete') }}</a>
                                                                @endif

                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <div class="modal fade" id="exampleModal{{ $album->id }}" tabindex="-1" role="dialog"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Album</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="{{ route('albums.destroy_or_move', $album->id) }}" method="post">
                                                                            @csrf
                                                                            <h5>Note: This album contains images.</h5>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit"  name="submit" value="delete" class="btn btn-danger">Delete All Images</button>
                                                                        <button type="submit" class="btn btn-success" name="submit" value="move">Move Images to Another Folder</button>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </tr>
                                                    @endforeach
                                                @endisset


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
