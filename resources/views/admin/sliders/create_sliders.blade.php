@extends('layouts.dashboard')

@section('title')
{{ trans('main sidebar.Website photos') }}
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

                            <li class="breadcrumb-item active"> {{ trans('main sidebar.Upload photos') }}


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
                                          action="{{ route('store_sliders') }}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i> {{ trans('main sidebar.Website photos') }} </h4>
                                            <div class="form-group">
                                                <div id="dpz-multiple-files" class="dropzone dropzone-area">
                                                    <div class="dz-message">{{ trans('products.You can upload more than one picture here') }}</div>
                                                </div>
                                                <br><br>
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

        <div class="card-content collapse show">
            <div class="card-body">
                <div class="card-text">
                    <p>{{ trans('products.current photo') }}.</p>
                </div>
            </div>
            <div class="card-body  my-gallery" itemscope="" itemtype="http://schema.org/ImageGallery"
                 data-pswp-uid="1">
                <div class="row">
                    @isset($images)
                    @forelse($images as $image )
                        <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope=""
                                itemtype="http://schema.org/ImageObject">
                            <a href="{{$image->photo}}" itemprop="contentUrl"
                               data-size="480x360">
                                <img class="img-thumbnail img-fluid"
                                     src="{{get_images($image->photo)}}"
                                     itemprop="thumbnail" alt="Image description">
                            </a>
                        </figure>
                    @empty
                         {{ trans('products.There are no pictures until now') }}
                    @endforelse
                @endisset
            </div>

        </div>
    <!--/ Image grid -->

            <!-- Root element of PhotoSwipe. Must have class pswp. -->
            <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                <!-- Background of PhotoSwipe.
                     It's a separate element as animating opacity is faster than rgba(). -->
                <div class="pswp__bg"></div>

                <!-- Slides wrapper with overflow:hidden. -->
                <div class="pswp__scroll-wrap">

                    <!-- Container that holds slides.
                        PhotoSwipe keeps only 3 of them in the DOM to save memory.
                        Don't modify these 3 pswp__item elements, data is added later on. -->
                    <div class="pswp__container" style="transform: translate3d(0px, 0px, 0px);">
                        <div class="pswp__item" style="display: block; transform: translate3d(-1511px, 0px, 0px);">
                            <div class="pswp__zoom-wrap"
                                 style="transform: translate3d(435px, 133px, 0px) scale(0.670391);"><img
                                    class="pswp__img" src="../../../app-assets/images/gallery/4.jpg"
                                    style="opacity: 1; width: 716px; height: 537px;"></div>
                        </div>
                        <div class="pswp__item" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="pswp__zoom-wrap"
                                 style="transform: translate3d(309px, 250.641px, 0px) scale(0.314595);"><img
                                    class="pswp__img pswp__img--placeholder"
                                    src="../../../app-assets/images/gallery/1.jpg"
                                    style="width: 716px; height: 537px; display: none;"><img class="pswp__img"
                                                                                             src="../../../app-assets/images/gallery/1.jpg"
                                                                                             style="display: block; width: 716px; height: 537px;">
                            </div>
                        </div>
                        <div class="pswp__item" style="display: block; transform: translate3d(1511px, 0px, 0px);">
                            <div class="pswp__zoom-wrap"
                                 style="transform: translate3d(435px, 133px, 0px) scale(0.670391);"><img
                                    class="pswp__img" src="../../../app-assets/images/gallery/2.jpg"
                                    style="opacity: 1; width: 716px; height: 537px;"></div>
                        </div>
                    </div>

                    <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                    <div class="pswp__ui pswp__ui--fit pswp__ui--hidden">

                        <div class="pswp__top-bar">

                            <!--  Controls are self-explanatory. Order can be changed. -->

                            <div class="pswp__counter">1 / 4</div>

                            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                            <button class="pswp__button pswp__button--share" title="Share"></button>

                            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                            <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                            <!-- element will get class pswp__preloader-active when preloader is running -->
                            <div class="pswp__preloader">
                                <div class="pswp__preloader__icn">
                                    <div class="pswp__preloader__cut">
                                        <div class="pswp__preloader__donut"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                            <div class="pswp__share-tooltip"></div>
                        </div>

                        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                        </button>

                        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                        </button>

                        <div class="pswp__caption">
                            <div class="pswp__caption__center"></div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div>
</div>


@endsection

@section('script')
<script>

    var uploadedDocumentMap = {}
    Dropzone.options.dpzMultipleFiles = {
        paramName: "dzfile", // The name that will be used to transfer the file
        //autoProcessQueue: false,
        maxFilesize: 5, // MB
        clickable: true,
        addRemoveLinks: true,
        acceptedFiles: 'image/*',
        dictFallbackMessage: "{{ trans('products.Your browser does not support multiple images and drag and drop') }}",
        dictInvalidFileType: "{{ trans('products.You cannot upload this type of file') }}",
        dictCancelUpload: "{{ trans('products.cancel upload') }}",
        dictCancelUploadConfirmation:"{{trans('products.Are you sure to cancel uploading files')}}",
        dictRemoveFile: "{{ trans('products.delete picture') }}",
        dictMaxFilesExceeded: "{{ trans('products.You cannot upload more than this') }}",
        headers: {
            'X-CSRF-TOKEN':
                "{{ csrf_token() }}"
        }

        ,
        url: "{{ route('photos_in_folder') }}", // Set the url
        success:
            function (file, response) {
                $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
                uploadedDocumentMap[file.name] = response.name
            }
        ,
        removedfile: function (file) {
            file.previewElement.remove()
            var name = ''
            if (typeof file.file_name !== 'undefined') {
                name = file.file_name
            } else {
                name = uploadedDocumentMap[file.name]
            }
            $('form').find('input[name="document[]"][value="' + name + '"]').remove()
        }
        ,
        // previewsContainer: "#dpz-btn-select-files", // Define the container to display the previews
        init: function () {

                @if(isset($event) && $event->document)
            var files =
            {!! json_encode($event->document) !!}
                for (var i in files) {
                var file = files[i]
                this.options.addedfile.call(this, file)
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
            }
            @endif
        }
    }


</script>

@endsection
