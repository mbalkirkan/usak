@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ekibimiz</h4>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#kt_modal_1"
                            class="btn btn-primary align-self-center"><i class="bi bi-plus-circle"></i>Yeni Ekle
                    </button>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($teams as $item)
                            <div class="col-md-4">
                                <div class="card shadow-sm">
                                    <div class="card-header">
                                        <h3 class="card-title">{{$item->name}}</h3>
                                        <div class="card-toolbar">
                                            <button type="button" data-id="{{$item->id}}" data-image="{{$item->image}}" data-description="{{$item->description}}"
                                                    data-name="{{$item->name}}"
                                                    data-job="{{$item->job}}"
                                                    data-unit="{{$item->unit}}"
                                                    data-position="{{$item->position}}"
                                                    data-yok_link="{{$item->yok_link}}"
                                                    data-linkedin_link="{{$item->linkedin_link}}"

                                                    class="edit_news btn btn-sm btn-light">
                                                Düzenle
                                            </button>
                                            <button type="button" data-id="{{$item->id}}" class="delete_news ms-3 btn btn-sm btn-light-danger">
                                                Sil
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="card-p mb-10">{{$item->description}}
                                        </div>

                                        <div class="text-center px-4">
                                            <img class="mw-100 mh-300px card-rounded-bottom" alt=""
                                                 src="{{$item->image}}"/>
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
                    <h5 class="modal-title">Yeni Ekip Arkadaşı Ekle</h5>

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
                            <label for="exampleFormControlInput1" class="required form-label">İsim</label>
                            <input type="text" name="create_name" class="form-control form-control-solid"
                                   placeholder="Ekip arkadaşı ad soyad "/>
                        </div>

                        <div class="mb-10 mt-10">
                            <label for="exampleFormControlInput1" class="required form-label">Ünvan</label>
                            <input type="text" name="create_position" class="form-control form-control-solid"
                                   placeholder="Ekip arkadaşı ünvan"/>
                        </div>
                        <div class="mb-10 mt-10">
                            <label for="exampleFormControlInput1" class="required form-label">Meslek</label>
                            <input type="text" name="create_job" class="form-control form-control-solid"
                                   placeholder="Ekip arkadaşı meslek"/>
                        </div>
                        <div class="mb-10 mt-10">
                            <label for="exampleFormControlInput1" class="required form-label">Birim</label>
                            <input type="text" name="create_unit" class="form-control form-control-solid"
                                   placeholder="Ekip arkadaşı birim"/>
                        </div>
                        <div class="mb-10 mt-10">
                            <label for="exampleFormControlInput1" class="required form-label">Yök Akadamik Link</label>
                            <input type="text" name="create_yok_link" class="form-control form-control-solid"
                                   placeholder="https://akademik.yok.gov.tr/AkademikArama/"/>
                        </div>
                        <div class="mb-10 mt-10">
                            <label for="exampleFormControlInput1" class="required form-label">Linkedin Link</label>
                            <input type="text" name="create_linkedin_link" class="form-control form-control-solid"
                                   placeholder="https://www.linkedin.com/in/"/>
                        </div>

                        <div class="mb-10 mt-10">
                            <label for="exampleFormControlInput1" class="required form-label">Açıklama</label>
                            <input type="text" name="create_description" class="form-control form-control-solid"
                                   placeholder="Kişi ile ilgili kısa açıklama"/>
                        </div>
                        <div class="mb-10 mt-10">
                            <label for="exampleFormControlInput1" class="required form-label">Öne çıkan görsel</label>
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
                                            <input type="text" id="create_image" hidden>
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
                        <button type="button" id="create_news" class="btn btn-primary">Kaydet</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" tabindex="-1" id="kt_modal_2">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ekip Arkadaşı Düzenle</h5>

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
                            <label for="exampleFormControlInput1" class="required form-label">İsim</label>
                            <input type="text" name="update_name" class="form-control form-control-solid"
                                   placeholder="Ekip arkadaşı ad soyad "/>
                        </div>

                        <div class="mb-10 mt-10">
                            <label for="exampleFormControlInput1" class="required form-label">Ünvan</label>
                            <input type="text" name="update_position" class="form-control form-control-solid"
                                   placeholder="Ekip arkadaşı ünvan"/>
                        </div>
                        <div class="mb-10 mt-10">
                            <label for="exampleFormControlInput1" class="required form-label">Meslek</label>
                            <input type="text" name="update_job" class="form-control form-control-solid"
                                   placeholder="Ekip arkadaşı meslek"/>
                        </div>
                        <div class="mb-10 mt-10">
                            <label for="exampleFormControlInput1" class="required form-label">Birim</label>
                            <input type="text" name="update_unit" class="form-control form-control-solid"
                                   placeholder="Ekip arkadaşı birim"/>
                        </div>
                        <div class="mb-10 mt-10">
                            <label for="exampleFormControlInput1" class="required form-label">Yök Akadamik Link</label>
                            <input type="text" name="update_yok_link" class="form-control form-control-solid"
                                   placeholder="https://akademik.yok.gov.tr/AkademikArama/"/>
                        </div>
                        <div class="mb-10 mt-10">
                            <label for="exampleFormControlInput1" class="required form-label">Linkedin Link</label>
                            <input type="text" name="update_linkedin_link" class="form-control form-control-solid"
                                   placeholder="https://www.linkedin.com/in/"/>
                        </div>

                        <div class="mb-10 mt-10">
                            <label for="exampleFormControlInput1" class="required form-label">Açıklama</label>
                            <input type="text" name="update_description" class="form-control form-control-solid"
                                   placeholder="Kişi ile ilgili kısa açıklama"/>
                        </div>
                        <div class="mb-10 mt-10">
                            <input type="text" name="update_id" hidden>
                            <label for="exampleFormControlInput1" class="required form-label">Öne çıkan görsel</label>
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
                                            <input type="text" id="update_image" hidden>
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
                        <button type="button" id="update_news" class="btn btn-primary">Kaydet</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('page_scripts')
    <script src="{{asset('admin/assets/ckeditor/build/ckeditor.js')}}"></script>
    <script>
        var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
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
                $('#create_image').val(response.url);
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
                    data: {fileName: $('#create_image').val()},
                    dataType: 'json',
                    success: function (data) {
                        toastr.success('Görsel başarıyla silindi');
                    }
                });
            }
        });
    </script>

    <script>
        var myDropzone2 = new Dropzone("#kt_dropzonejs_example_2", {
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
                $('#update_image').val(response.url);
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
                    data: {fileName: $('#update_image').val()},
                    dataType: 'json',
                    success: function (data) {
                        toastr.success('Görsel başarıyla silindi');
                    }
                });
            }
        });
    </script>


    <script>
        $('#create_news').click(function () {
            var name = $('input[name=create_name]').val();
            var position = $('input[name=create_position]').val();
            var job = $('input[name=create_job]').val();
            var unit = $('input[name=create_unit]').val();
            var yok_link = $('input[name=create_yok_link]').val();
            var linkedin_link = $('input[name=create_linkedin_link]').val();
            var description = $('input[name=create_description]').val();
            var image = $('#create_image').val();



            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: '{{route('admin.pages.team-create')}}',
                data: {name: name, position: position, job: job, unit: unit, yok_link: yok_link, linkedin_link: linkedin_link, description: description, image: image},
                dataType: 'json',
                success: function (data) {
                    if(data.status == 'success') {

                        toastr.success('Ekip arkadaşı başarıyla oluşturuldu');
                        $('#kt_modal_1').modal('hide');
                        location.reload();
                    }
                    else {
                        toastr.error('Ekip arkadaşı oluşturulurken bir hata oluştu');
                    }
                }
            });
        });
    </script>


    <script>
        $('.edit_news').click(function () {
            $('#kt_modal_2').modal('show');
            $('input[name=update_id]').val($(this).data('id'));
            $('input[name=update_name]').val($(this).data('name'));
            $('input[name=update_position]').val($(this).data('position'));
            $('input[name=update_job]').val($(this).data('job'));
            $('input[name=update_unit]').val($(this).data('unit'));
            $('input[name=update_yok_link]').val($(this).data('yok_link'));
            $('input[name=update_linkedin_link]').val($(this).data('linkedin_link'));
            $('input[name=update_description]').val($(this).data('description'));
            $('#update_image').val($(this).data('image'));

            myDropzone2.removeAllFiles();

        });
    </script>
    <script>



        $('#update_news').click(function () {
            var id = $('input[name=update_id]').val();
            var name = $('input[name=update_name]').val();
            var position = $('input[name=update_position]').val();
            var job = $('input[name=update_job]').val();
            var unit = $('input[name=update_unit]').val();
            var yok_link = $('input[name=update_yok_link]').val();
            var linkedin_link = $('input[name=update_linkedin_link]').val();
            var description = $('input[name=update_description]').val();
            var image = $('#update_image').val();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: '{{route('admin.pages.team-update')}}',
                data: {id: id, name: name, position: position, job: job, unit: unit, yok_link: yok_link, linkedin_link: linkedin_link, description: description, image: image},
                dataType: 'json',
                success: function (data) {
                    if(data.status == 'success') {

                        toastr.success('Ekip arkadaşı başarıyla güncellendi');
                        $('#kt_modal_2').modal('hide');
                        location.reload();
                    }
                    else {
                        toastr.error('Ekip arkadaşı güncellenirken bir hata oluştu');
                    }
                }
            });
        });
    </script>

    <script>
        $('.delete_news').click(function () {
            var id = $(this).data('id');
            swal.fire({
                title: 'Emin misiniz?',
                text: "Bu işlemi geri alamazsınız!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Evet, sil!',
                cancelButtonText: 'Hayır!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'POST',
                        url: '{{route('admin.pages.team-delete')}}',
                        data: {id: id},
                        dataType: 'json',
                        success: function (data) {
                            if(data.status == 'success') {

                                toastr.success('Ekip arkadaşı başarıyla silindi');
                                location.reload();
                            }
                            else {
                                toastr.error('Ekip arkadaşı silinirken bir hata oluştu');
                            }
                        }
                    });
                }
            })
        });
    </script>
@endsection


@section('page_styles')

    <style>
        h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
            margin-top: 0;
            margin-bottom: 0.5rem;
            font-weight: 600;
            line-height: 1.2;
            color: #181C32;
        }
    </style>
    <link rel="stylesheet" href="{{asset('admin/assets/ckeditor/sample/styles.css')}}">

@endsection
