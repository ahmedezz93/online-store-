@extends('layouts.dashboard')

@section('title')
وسائل التوصيل
@endsection


@section('content')
@include('noty::message')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية </a>
                                </li>

                                <li class="breadcrumb-item active">وسائل التوصيل
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
                                    <h4 class="card-title" id="basic-layout-form"> تعديل  وسيلة توصيل </h4>
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
                                        <form class="form" action="{{ route('shipping_update') }}"
                                              method="post"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="{{ $type }}">
                                            <input type="hidden" name="id" value="{{ $setting->id }}">

                                            <div class="form-body">

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">   الاسم باللغة العربية </label>
                                                            <input type="text" id="name"
                                                                   class="form-control"
                                                                   name="shipping_name_ar"
                                                                   value="{{ $shipping_name_ar}}"
                                                                   >
                                                                   @error("shipping_name_ar")
                                                                   <span class="text-danger">{{$message}}</span>
                                                                   @enderror
                                                                </div>
                                                            </div>




                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                            <label for="projectinput1">  الاسم باللغة الانجليزية </label>
                                                            <input type="text" id="name"
                                                                   class="form-control"
                                                                   name="shipping_name_en"
                                                                   value="{{ $shipping_name_en}}">

                                                            @error("shipping_name_en")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1"> قيمه التوصيل </label>
                                                                <input type="number" value="{{ $shipping_cost }}" id="plain_value"
                                                                       class="form-control"
                                                                       name="plain_value">
                                                                @error("plain_value")
                                                                <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                 </div>


                                            </div>

                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> حفظ
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
