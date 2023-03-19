@extends('layouts.dashboard')

@section('title')
{{trans('tags.Edit tags')}}
@endsection


@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ trans('dashboard.home') }} </a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('tags')}}">  {{ trans('tags.tags') }} </a>
                            </li>
                            <li class="breadcrumb-item active"> {{trans('tags.Edit tags')}}

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
                                <h4 class="card-title" id="basic-layout-form"> {{trans('tags.Edit tags')}}
                                </h4>
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
                                <div class="card-body">
                                    <form class="form"
                                          action="{{ route('update_tags') }}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf

                                        <input name="id" value="{{ $tag->id }}" type="hidden">


                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i> {{ trans('tags.Tags data') }} </h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> {{ trans('tags.Mark name in Arabic') }}
                                                        </label>
                                                        <input type="text" id="name" class="form-control"
                                                            placeholder="  " value="{{ $tag->gettranslation('name','ar') }}" name="name_ar">
                                                        @error('name_ar')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> {{ trans('tags.Mark name in English') }}
                                                        </label>
                                                        <input type="text" id="name" class="form-control"
                                                            placeholder="" value="{{ $tag->gettranslation('name','en') }}" name="name_en">
                                                        @error('name_en')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                   <div class="col-md-6">
                                                          <div class="form-group">
                                                              <label for="projectinput1"> {{ trans('categories.Link name') }}
                                                              </label>
                                                              <input type="text" id="name"
                                                                     class="form-control"
                                                                     placeholder="  "
                                                                     value="{{ $tag->slug }}"
                                                                     name="slug">
                                                              @error("slug")
                                                              <span class="text-danger">{{$message}}</span>
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
