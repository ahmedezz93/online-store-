

@extends('layouts.dashboard')

@section('title')
{{ trans('options.edit option') }}
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
                            <li class="breadcrumb-item"><a href="{{route('options')}}">{{ trans('main sidebar.Characteristics details') }}
                            </li>

                            <li class="breadcrumb-item active">- {{ trans('options.edit option') }}
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
                                          action="{{ route('update_options') }}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf

                                        <input name="id" value="{{ $option->id }}" type="hidden">

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i> {{ trans('options.Detail data') }}  </h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> {{ trans('options.Details name in Arabic') }}
                                                             </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder=""
                                                               value="{{ $option->gettranslation('name','ar') }}"
                                                               name="name_ar">
                                                        @error("name_ar")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> {{ trans('options.Detail name in English') }}
                                                             </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder=""
                                                               value="{{ $option->gettranslation('name','en') }}"
                                                               name="name_en">
                                                        @error("name_en")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> {{ trans('options.the price') }}
                                                        </label>
                                                        <input type="text" id="price"
                                                               class="form-control"
                                                               placeholder=""
                                                               value="{{ $option->price }}"
                                                               name="price">
                                                        @error("price")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> {{ trans('options.Select a product') }}
                                                        </label>
                                                        <select name="product_id" class="select2 form-control" >
                                                            <optgroup label="{{ trans('options.Select a product') }} ">
                                                                @foreach ($products as $product)
                                                                <option value="{{ $product->id }}"  @if ($product->id==$option->product_id) selected @endif>{{get_trans($product) }}</option>
                                                                @endforeach

                                                            </optgroup>
                                                        </select>
                                                        @error('product_id')
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">  {{ trans('options.Choose a feature') }}
                                                        </label>
                                                        <select name="attribute_id" class="select2 form-control" >
                                                            <optgroup label=" {{ trans('options.Choose a feature') }}">

                                                                @foreach ($attributes as $attribute)
                                                                <option value="{{ $attribute->id }}"  @if ($attribute->id==$option->attribute_id) selected @endif>{{get_trans($attribute) }}</option>
                                                                @endforeach

                                                            </optgroup>
                                                        </select>
                                                        @error('attribute_id')
                                                        <span class="text-danger"> {{$message}}</span>
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



















