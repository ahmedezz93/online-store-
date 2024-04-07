@extends('layouts.dashboard')

@section('title')
{{ trans('products.Product price') }}
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
                            <li class="breadcrumb-item"><a href="{{ route('products') }}">
                                {{ trans('main sidebar.Products') }}
                            </a>
                            </li>
                            <li class="breadcrumb-item active"> {{ trans('products.Product price') }}

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
                                          action="{{ route('store_price') }}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" name="product_id" value="{{ $product_id }}">
                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i> {{ trans('products.Basic data of the product') }}   </h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> {{ trans('products.Product price') }}

                                                        </label>
                                                        <input type="number" id="price"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('price')}}"
                                                               name="price">
                                                        @error("price")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> {{ trans('products.Special price') }}

                                                        </label>
                                                        <input type="number"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('special_price')}}"
                                                               name="special_price">
                                                        @error("special_price")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('products.Price type') }}

                                                        </label>
                                                        <select name="special_price_type" class="select2 form-control" multiple>
                                                            <optgroup label="{{ trans('products.Please select type') }}
                                                            ">
                                                                <option value="percent">precent</option>
                                                                <option value="fixed">fixed</option>
                                                            </optgroup>
                                                        </select>
                                                        @error('special_price_type')
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>


                                            </div>


                                            <div class="row" >
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> {{ trans('products.Start Date') }}

                                                        </label>

                                                        <input type="date" id="price"
                                                               class="form-control"
                                                               placeholder=""
                                                               value="{{old('special_price_start')}}"
                                                               name="special_price_start">

                                                        @error('special_price_start')
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> {{ trans('products.Expiry date') }}

                                                        </label>
                                                        <input type="date" id="price"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('special_price_end')}}"
                                                               name="special_price_end">

                                                        @error('special_price_end')
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
