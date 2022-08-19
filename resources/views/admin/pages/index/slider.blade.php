@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Sliderlar</h4>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#kt_modal_1"
                            class="btn btn-primary align-self-center"><i class="bi bi-plus-circle"></i>Yeni Ekle
                    </button>

                </div>
                <div class="card-body">
                    <div class="row">
                    @foreach($sliders as $slider)
                        <div class="col-md-4">
                            <div class="card shadow-sm">
                                <div class="card-header">
                                    <h3 class="card-title">Slider - {{$loop->iteration }}</h3>
                                    <div class="card-toolbar">
                                        <button type="button" data-id="{{$slider->id}}" data-image="{{$slider->image}}" data-title="{{$slider->title}}" class="edit_slider btn btn-sm btn-light">
                                            Düzenle
                                        </button>
                                        <button type="button" data-id="{{$slider->id}}" class="delete_slider ms-3 btn btn-sm btn-light-danger">
                                            Sil
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="card-p mb-10">
                                        {{$slider->title}}
                                    </div>

                                    <div class="text-center px-4">
                                        <img class="mw-100 mh-300px card-rounded-bottom" alt=""
                                             src="{{asset('uploads/sliders/'.$slider->image)}}"/>
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



    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Yeni Slider Ekle</h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <span class="svg-icon svg-icon-2x"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">

                    <div class="form-control mt-5">
                        <div class="mb-10 mt-10">
                            <label for="exampleFormControlInput1" class="required form-label">Açıklma</label>
                            <input type="text" name="title" class="form-control form-control-solid"
                                   placeholder="Görselle İlgili Gözükecek Üst Yazı "/>
                        </div>
                        <div class="mb-10 mt-10">
                            <label for="exampleFormControlInput1" class="required form-label">Görsel</label>
                            <div class="fv-row">
                                <!--begin::Dropzone-->
                                <div class="dropzone" id="kt_dropzonejs_example_1">
                                    <!--begin::Message-->
                                    <div class="dz-message needsclick">
                                        <!--begin::Icon-->
                                        <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                        <!--end::Icon-->

                                        <!--begin::Info-->
                                        <div class="ms-4">
                                            <input type="text" id="slider_image" hidden>
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


                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Vazgeç</button>
                        <button type="button" id="create_slider" class="btn btn-primary">Kaydet</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="kt_modal_2">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Slider Düzenle</h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <span class="svg-icon svg-icon-2x"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">

                    <div class="form-control mt-5">
                        <div class="mb-10 mt-10">
                            <label for="exampleFormControlInput1" class="required form-label">Açıklma</label>
                            <input type="text" name="title2" class="form-control form-control-solid"
                                   placeholder="Görselle İlgili Gözükecek Üst Yazı "/>
                        </div>
                        <div class="mb-10 mt-10">
                            <label for="exampleFormControlInput1" class="required form-label">Görsel</label>
                            <div class="fv-row">
                                <!--begin::Dropzone-->
                                <div class="dropzone" id="kt_dropzonejs_example_2">
                                    <!--begin::Message-->
                                    <div class="dz-message needsclick">
                                        <!--begin::Icon-->
                                        <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                        <!--end::Icon-->

                                        <!--begin::Info-->
                                        <div class="ms-4">
                                            <input type="text" id="slider_image2" hidden>
                                            <input type="text" id="slider_id2" hidden>
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


                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Vazgeç</button>
                        <button type="button" id="update_slider" class="btn btn-primary">Güncelle</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

        @endsection


        @section('page_scripts')
            <script>
                var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
                    url: "{{route('admin.slider.upload')}}", // Set the url for your upload script location
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
                            if (file.width != 1920 || file.height != 1024) {
                                myDropzone.removeFile(file);
                                toastr.error('Görsel 1920x1024 boyutlarında olmalıdır');

                            }
                        })
                    },
                    success: function (file, response) {
                        $('#slider_image').val(response.success);
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
                            url: '{{route('admin.slider.delete')}}',
                            data: {fileName: $('#slider_image').val()},
                            dataType: 'json',
                            success: function (data) {
                                toastr.success('Görsel başarıyla silindi');
                            }
                        });
                    }
                });
            </script>
            <script>
                var  myDropzone2 = new Dropzone("#kt_dropzonejs_example_2", {
                    url: "{{route('admin.slider.upload')}}", // Set the url for your upload script location
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
                            if (file.width != 1920 || file.height != 1024) {
                                myDropzone.removeFile(file);
                                toastr.error('Görsel 1920x1024 boyutlarında olmalıdır');

                            }
                        })
                    },
                    success: function (file, response) {
                        $('#slider_image2').val(response.success);
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
                            url: '{{route('admin.slider.delete')}}',
                            data: {fileName: $('#slider_image2').val()},
                            dataType: 'json',
                            success: function (data) {
                                toastr.success('Görsel başarıyla silindi');
                            }
                        });
                    }
                });
            </script>

            <script>
                $('#create_slider').click(function () {
                    var title = $('input[name=title]').val();
                    var image = $('#slider_image').val();
                    if (title == '') {
                        toastr.error('Lütfen açıklama giriniz');
                    } else if (image == '') {
                        toastr.error('Lütfen görsel seçiniz');
                    } else {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: 'POST',
                            url: '{{route('admin.pages.index.slider-create')}}',
                            data: {title: title, image: image},
                            dataType: 'json',
                            success: function (data) {
                                let status = data.status;
                                if (status == 'success') {
                                    toastr.success(data.message);
                                    $('#kt_modal_1').modal('hide');
                                    location.reload();
                                } else {
                                    toastr.error(data.message);
                                }
                            }
                        });
                    }
                });
            </script>

            <script>
                $('.delete_slider').click(function () {
                    Swal.fire({
                        title: 'Emin misiniz?',
                        text: "Bu işlemi geri alamayacaksınız!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Evet, sil!',
                        cancelButtonText: 'Hayır'
                    }).then((result) => {
                        if (result.value) {
                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                type: 'POST',
                                url: '{{route('admin.pages.index.slider-delete')}}',
                                data: {id: $(this).data('id')},
                                dataType: 'json',
                                success: function (data) {
                                    let status = data.status;
                                    if (status == 'success') {
                                        toastr.success(data.message);
                                        location.reload();
                                    } else {
                                        toastr.error(data.message);
                                    }
                                }
                            });
                        }
                    })
                });
            </script>

            <script>
                $('.edit_slider').click(function () {
                    $('#kt_modal_2').modal('show');
                    $('input[name=title2]').val($(this).data('title'));
                    $('#slider_image2').val($(this).data('image'));
                    $('#slider_id2').val($(this).data('id'));
                    myDropzone2.removeAllFiles();

                });
            </script>

            <script>
                $('#update_slider').click(function () {
                    var title = $('input[name=title2]').val();
                    var image = $('#slider_image2').val();
                    var id = $('#slider_id2').val();
                    if (title == '') {
                        toastr.error('Lütfen açıklama giriniz');
                    } else if (image == '') {
                        toastr.error('Lütfen görsel seçiniz');
                    } else {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: 'POST',
                            url: '{{route('admin.pages.index.slider-update')}}',
                            data: {title: title, image: image, id: id},
                            dataType: 'json',
                            success: function (data) {
                                let status = data.status;
                                if (status == 'success') {
                                    toastr.success(data.message);
                                    $('#kt_modal_2').modal('hide');
                                    location.reload();
                                } else {
                                    toastr.error(data.message);
                                }
                            }
                        });
                    }
                });
            </script>
@endsection

@section('page_style')
    {{--            <link href="{{asset('admin/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>--}}
@endsection
