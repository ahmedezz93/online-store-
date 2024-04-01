@extends('layouts.dashboard')

@section('title')
Edit Album
@endsection


@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            </li>

                            <li class="breadcrumb-item active"> edit Album


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
                                          action="{{ route('albums.update',$album->id) }}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-body">


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="projectinput1"> Album Name
                                                    </label>
                                                    <input type="text" id="name"
                                                           class="form-control"
                                                           placeholder=""
                                                           value="{{old('name',$album->name)}}"
                                                           name="name">
                                                    @error("name")
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
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
        acceptedFiles: 'image/jpeg,image/jpg,image/png', //make vlaidation for type of file

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
        url: "{{ route('upload_images') }}", // Set the url
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
