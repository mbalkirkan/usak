@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 mb-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Menüler</h4>

                </div>
                <div class="card-body">
                    <div class="form-control mt-5">
                        @foreach($dynamicMenus as $category)
                            <div class="w-100 mb-3">
                                <div class="d-flex">
                                    <input id="menu_name_{{$category->id}}"  placeholder="Menü İsmi" value="{{$category->name}}" type="text"
                                           class="form-control form-control-solid me-3 flex-grow-1"
                                           name="search"/>
                                    <select class="form-select form-select-solid " data-control="select2" id="menu_page_{{$category->id}}" data-placeholder="Sayfa" data-hide-search="true">
                                        <option></option>
                                        @foreach($dynamicPages as $page)
                                            <option @if($category->page_id == $page->id) selected @endif value="{{$page->id}}">{{$page->title}}</option>
                                        @endforeach
                                    </select>
                                    <select class="ms-5 form-select form-select-solid " data-control="select2" id="menu_parent_{{$category->id}}" data-placeholder="Üst Menü" data-hide-search="true">
                                        <option></option>
                                        @foreach($dynamicMenus as $parent)
                                            @if($parent->id != $category->id && $parent->parent_id == null)
                                            <option @if($category->parent_id == $parent->id) selected @endif value="{{$parent->id}}">{{$parent->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                    <button data-id="{{$category->id}}" type="button"
                                            class="ms-10 update_btn btn btn-light-primary fw-bold flex-shrink-0"
                                    >Güncelle
                                    </button>
                                    <button data-id="{{$category->id}}" type="button" class="delete_btn ms-5 btn btn-light-danger fw-bold flex-shrink-0">Sil
                                    </button>

                                </div>
                            </div>
                        @endforeach
                        <div class="w-100 mb-3">
                            <div class="d-flex">
                                <input id="new_menu_name" placeholder="Menü İsmi" value="" type="text"
                                       class="form-control form-control-solid me-3 flex-grow-1"
                                       name="search"/>
                                <select class="form-select form-select-solid " data-control="select2" id="new_menu_page" data-placeholder="Sayfa" data-hide-search="true">
                                    <option></option>
                                    @foreach($dynamicPages as $page)
                                        <option value="{{$page->id}}">{{$page->title}}</option>
                                    @endforeach
                                </select>
                                <select class="ms-5 form-select form-select-solid " data-control="select2" id="new_menu_parent" data-placeholder="Üst Menü" data-hide-search="true">
                                    <option></option>
                                    @foreach($dynamicMenus as $parent)
                                        <option value="{{$parent->id}}">{{$parent->name}}</option>
                                    @endforeach
                                </select>

                                <button id="menu_create" type="button"
                                        class="ms-10 btn btn-light-primary fw-bold flex-shrink-0"
                                >Yeni Ekle
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Dinamik Sayfalar</h4>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#kt_modal_1"
                            class="btn btn-primary align-self-center"><i class="bi bi-plus-circle"></i>Yeni Ekle
                    </button>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($dynamicPages as $item)
                            <div class="col-md-4">
                                <div class="card shadow-sm">
                                    <div class="card-header">
                                        <h3 class="card-title">{{$item->title}}</h3>
                                        <div class="card-toolbar">
                                            <button type="button" data-id="{{$item->id}}" data-image="{{$item->image}}"
                                                    data-content="{{$item->content}}" data-title="{{$item->title}}"
                                                    class="edit_news btn btn-sm btn-light">
                                                Düzenle
                                            </button>
                                            <button type="button" data-id="{{$item->id}}"
                                                    class="delete_news ms-3 btn btn-sm btn-light-danger">
                                                Sil
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
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
                    <h5 class="modal-title">Yeni Sayfa Ekle</h5>

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
                            <label for="exampleFormControlInput1" class="required form-label">Başlık</label>
                            <input type="text" name="create_title" class="form-control form-control-solid"
                                   placeholder="Sayfa ile ilgili başlık "/>
                        </div>

                        <div class="mb-10 mt-10">
                            <label for="exampleFormControlInput1" class="form-label">Öne çıkan görsel</label>
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
                                            <input type="text" id="create_news_image" hidden>
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
                        <div class="mb-10 mt-10">
                            <label for="exampleFormControlInput1" class="required form-label">İçerik</label>
                            <textarea name="editor" id="editor">

                    </textarea>
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
                    <h5 class="modal-title">Sayfa Düzenle</h5>

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
                            <label for="exampleFormControlInput1" class="required form-label">Başlık</label>
                            <input type="text" name="update_title" class="form-control form-control-solid"
                                   placeholder="Sayfa ile ilgili başlık "/>
                        </div>
                        <div class="mb-10 mt-10">
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
                                            <input type="text" id="update_news_image" hidden>
                                            <input type="text" id="update_news_id" hidden>
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
                        <div class="mb-10 mt-10">
                            <label for="exampleFormControlInput1" class="required form-label">İçerik</label>
                            <textarea name="editor2" id="editor2">

                    </textarea>
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
                $('#create_news_image').val(response.url);
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
                    data: {fileName: $('#create_news_image').val()},
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
                $('#update_news_image').val(response.url);
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
                    data: {fileName: $('#update_news_image').val()},
                    dataType: 'json',
                    success: function (data) {
                        toastr.success('Görsel başarıyla silindi');
                    }
                });
            }
        });
    </script>
    <script>
        var myEditor;
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: "{{route('admin.ckeditor.upload', ['_token' => csrf_token() ])}}",
                },

                image: {
                    toolbar: ['imageStyle:full', 'imageStyle:side', 'imageStyle:alignRight', 'imageStyle:alignLeft', '|', 'imageTextAlternative'],
                    styles: [
                        'full', 'side'
                    ]
                },


            })
            .then(editor => {
                console.log(editor);
                myEditor = editor;
            })
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        var myEditor2;
        ClassicEditor
            .create(document.querySelector('#editor2'), {
                ckfinder: {
                    uploadUrl: "{{route('admin.ckeditor.upload', ['_token' => csrf_token() ])}}",
                },

                image: {
                    toolbar: ['imageStyle:full', 'imageStyle:side', 'imageStyle:alignRight', 'imageStyle:alignLeft', '|', 'imageTextAlternative'],
                    styles: [
                        'full', 'side'
                    ]
                },


            })
            .then(editor => {
                console.log(editor);
                myEditor2 = editor;
            })
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        $('#create_news').click(function () {
            var title = $('input[name=create_title]').val();
            var content = myEditor.getData();
            var image = $('#create_news_image').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: '{{route('admin.pages.dynamic-create')}}',
                data: {title: title, content: content, image: image},
                dataType: 'json',
                success: function (data) {
                    if (data.status == 'success') {

                        toastr.success('Sayfa başarıyla oluşturuldu');
                        $('#kt_modal_1').modal('hide');
                        location.reload();
                    } else {
                        toastr.error('Sayfa oluşturulurken bir hata oluştu');
                    }
                }
            });
        });
    </script>


    <script>
        $('.edit_news').click(function () {
            $('#kt_modal_2').modal('show');
            $('input[name=update_title]').val($(this).data('title'));
            myEditor2.setData($(this).data('content'))
            $('#update_news_image').val($(this).data('image'));
            $('#update_news_id').val($(this).data('id'));
            myDropzone2.removeAllFiles();

        });
    </script>
    <script>


        $('#update_news').click(function () {
            var title = $('input[name=update_title]').val();
            var content = myEditor2.getData();
            var image = $('#update_news_image').val();
            var id = $('#update_news_id').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: '{{route('admin.pages.dynamic-update')}}',
                data: {title: title, content: content, image: image,  id: id},
                dataType: 'json',
                success: function (data) {
                    if (data.status == 'success') {

                        toastr.success('Sayfa başarıyla güncellendi');
                        $('#kt_modal_2').modal('hide');
                        location.reload();
                    } else {
                        toastr.error('Sayfa güncellenirken bir hata oluştu');
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
                        url: '{{route('admin.pages.activity-delete')}}',
                        data: {id: id},
                        dataType: 'json',
                        success: function (data) {
                            if (data.status == 'success') {

                                toastr.success('Sayfa başarıyla silindi');
                                location.reload();
                            } else {
                                toastr.error('Sayfa silinirken bir hata oluştu');
                            }
                        }
                    });
                }
            })
        });
    </script>

    <script>
        $('.update_btn').on('click', function () {
            var id = $(this).data('id');
            var name = $('#menu_name_' + id).val();
            var parent_id = $('#menu_parent_' + id).val();
            var page_id = $('#menu_page_' + id).val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: '{{route('admin.pages.dynamic-menu-update')}}',
                data: {id: id, name: name, parent_id: parent_id, page_id: page_id},
                dataType: 'json',
                success: function (data) {
                    if (data.status == 'success') {

                        toastr.success('Menü başarıyla güncellendi');
                        // location.reload();
                    } else {
                        toastr.error('Menü güncellenirken bir hata oluştu');
                    }
                }
            });
        });

        $('.delete_btn').on('click', function () {
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
                        url: '{{route('admin.pages.dynamic-menu-delete')}}',
                        data: {id: id},
                        dataType: 'json',
                        success: function (data) {
                            if (data.status == 'success') {

                                toastr.success('Sayfa kategorisi başarıyla silindi');
                                location.reload();
                            } else {
                                toastr.error('Sayfa kategorisi silinirken bir hata oluştu');
                            }
                        }
                    });
                }
            })
        });


        $('#menu_create').on('click', function () {
            var name = $('#new_menu_name').val();
            var page = $('#new_menu_page').val();
            var parent = $('#new_menu_parent').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: '{{route('admin.pages.dynamic-menu-create')}}',
                data: {name: name, page_id: page, parent_id: parent},
                dataType: 'json',
                success: function (data) {
                    if (data.status == 'success') {

                        toastr.success('Menü başarıyla oluşturuldu');
                        location.reload();
                    } else {
                        toastr.error('Menü oluşturulurken bir hata oluştu');
                    }
                }
            });
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
