@extends('layouts.dashboard')

@section('title')
    {{ trans('sections.Add a new section') }}
@endsection


@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">    {{ trans('dashboard.home') }}
                                </a>
                                </li>
                                <li class="breadcrumb-item active">     {{ trans('sections.Add a new section') }}

                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> {{ trans('sections.Add a new section') }} </h4>
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
                                    <div class="card-body">
                                        <form class="form" action="{{ route('store_section') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf


                                            <div class="form-group">
                                                <label> {{ trans('categories.Section picture') }} </label>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file" id="file" name="photo">
                                                    <span class="file-custom"></span>
                                                </label>
                                                @error('photo')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-body">

                                                <h4 class="form-section"><i class="ft-home"></i> {{ trans('sections.Section data') }} </h4>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput2"> {{ trans('sections.Choose category') }} </label>
                                                            <select name="cat_id" class="select2 form-control">
                                                                <optgroup label="{{ trans('sections.Choose category') }} ">
                                                                    @foreach ($categories as $cat)
                                                                            <option value="{{ $cat->id }}">
                                                                                {{ get_trans($cat) }}
                                                                            </option>
                                                                    @endforeach
                                                                </optgroup>
                                                            </select>
                                                            @error('cat_id')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> {{ trans('sections.Section name in Arabic') }}
                                                            </label>
                                                            <input type="text" id="name" class="form-control"
                                                                placeholder="  " value="{{ old('name') }}" name="name_ar">
                                                            @error('name_ar')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> {{ trans('sections.Section name in English') }}
                                                            </label>
                                                            <input type="text" id="name" class="form-control"
                                                                placeholder="" value="{{ old('name') }}" name="name_en">
                                                            @error('name_en')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> {{ trans('categories.Link name') }}
                                                            </label>
                                                            <input type="text" id="name" class="form-control"
                                                                placeholder="  " value="{{ old('slug') }}"
                                                                name="slug">
                                                            @error('slug')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox" value="1" name="is_active"
                                                                id="switcheryColor4" class="switchery" data-color="success"
                                                                checked />
                                                            <label for="switcheryColor4" class="card-title ml-1">{{ trans('categories.status') }}
                                                            </label>

                                                            @error('is_active')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                    onclick="history.back();">
                                                    <i class="ft-x"></i> {{ trans('buttons.back') }}
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> {{ trans('buttons.Save') }}
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
