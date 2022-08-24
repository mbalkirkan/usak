@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Sayfalar</h4>
                            <button id="update" type="button" class="btn btn-primary align-self-center" ><i class="bi bi-box-arrow-up"></i> Güncelle</button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach($settings as $setting)
                                <div class="col-md-12">
                                    <div class="mb-10 mt-10">
                                        <label for="exampleFormControlInput1" class="required form-label">{{$setting->name}}</label>
                                        <div class="input-group mb-5">
                                            <input type="text" class="form-control" placeholder="Başlık" id="title_{{$setting->id}}" value="{{$setting->title}}" aria-label="Başlık"/>
                                            <span class="input-group-text">@</span>
                                            <input type="text" class="form-control" placeholder="Açıklama" id="description_{{$setting->id}}" value={{$setting->description}} aria-label="Açıklama"/>
                                            <span class="input-group-text">@</span>
                                            <div class="fv-row">
                                                <!--begin::Dropzone-->
                                                <div class="dropzone" id="dropzone_{{$setting->id}}">
                                                    <!--begin::Message-->
                                                    <div class="dz-message needsclick">
                                                        <!--begin::Icon-->
                                                        <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                        <!--end::Icon-->

                                                        <!--begin::Info-->
                                                        <div class="ms-4">
                                                            <input type="text" value="{{$setting->image}}" id="image_{{$setting->id}}" hidden>
                                                            <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Resmi sürükle veya
                                                                yükle</h3>
                                                            <span
                                                                class="fs-7 fw-bold text-gray-400">Maksimum 1 dosya yükleyebilirsiniz</span>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                </div>
                                                <!--end::Dropzone-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('page_scripts')

    <script>
        @foreach($settings as $setting)
        var myDropzone_{{$setting->id}} = new Dropzone("#dropzone_{{$setting->id}}", {
            url: "{{route('admin.news.upload')}}", // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 1,
            thumbnailWidth: "500",
            acceptedFiles: ".png,.jpg,.gif,.jpeg",
            maxFilesize: 20, // MB
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            accept: function (file, done) {

                done();
            },
            init: function () {
                this.on("thumbnail", function (file) {

                })
            },
            success: function (file, response) {
                $('#image_{{$setting->id}}').val(response.url);
                toastr.success('Görsel başarıyla yüklendi');
            },
            error: function (file, response) {
                toastr.error(response);
            },
            removedfile: function (file) {
                file.previewElement.remove();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{route('admin.news.delete')}}',
                    data: {fileName: $('#image_{{$setting->id}}').val()},
                    dataType: 'json',
                    success: function (data) {
                        toastr.success('Görsel başarıyla silindi');
                    }
                });
            }
        });
        @endforeach
    </script>

    <script>
        $(document).ready(function () {
            $('#update').click(function () {
                var data = [];
                @foreach($settings as $setting)
                data.push({
                    id: {{$setting->id}},
                    title: $('#title_{{$setting->id}}').val(),
                    description: $('#description_{{$setting->id}}').val(),
                    image: $('#image_{{$setting->id}}').val()
                });
                @endforeach
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{route('admin.pages.setting-update')}}',
                    data: {data: data},
                    dataType: 'json',
                    success: function (data) {
                        toastr.success('Sayfalar başarıyla güncellendi');
                    }
                });
            });
        });
    </script>


@endsection
