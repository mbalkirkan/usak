@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Hakkımızda</h4>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-control mt-5">
                                    <div class="mb-10 mt-10">
                                        <label for="exampleFormControlInput1" class="required form-label">Kısa
                                            Başlık</label>
                                        <input type="text" name="title" value="{{$about->title}}"
                                               class="form-control form-control-solid"
                                               placeholder="Görsel üzeri kısa başlık"/>
                                    </div>
                                    <div class="mb-10 mt-10">
                                        <label for="exampleFormControlInput1" class="required form-label">Görsel</label>
                                        <div class="mb-10">
                                            <label for="" class="form-label"></label>
                                            <br>
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                                 style="background-image: url({{asset('admin/assets/media/avatars/blank.png')}})">
                                                <!--begin::Image preview wrapper-->
                                                <div class="image-input-wrapper w-150px h-150px"
                                                     style="background-image: url({{$about->image}})"></div>
                                                <!--end::Image preview wrapper-->

                                                <!--begin::Edit button-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                                    data-kt-image-input-action="change"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-dismiss="click"
                                                    title=" Değiştir">
                                                    <i class="bi bi-pencil-fill fs-7"></i>

                                                    <!--begin::Inputs-->
                                                    <input type="file" id="about_image" name="about_image"
                                                           url="{{asset($about->image)}}" accept=".png, .jpg, .jpeg"/>
                                                    <input type="hidden" name="avatar_remove"/>
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Edit button-->

                                                <!--begin::Cancel button-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                                    data-kt-image-input-action="cancel"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-dismiss="click"
                                                    title=" İptal ">
         <i class="bi bi-x fs-2"></i>
     </span>
                                                <!--end::Cancel button-->

                                            </div>
                                            <!--end::Image input-->
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Hakkımızda</h4>
                            <button id="update" type="button" class="btn btn-primary align-self-center" ><i class="bi bi-box-arrow-up"></i> Güncelle</button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-control mt-5">
                                    <div class="mb-10 mt-10">
                                        <label for="exampleFormControlInput1"
                                               class="required form-label">Ana Başlık</label>
                                        <input type="text" name="main_title" value="{{$about->main_title}}" class="form-control form-control-solid"
                                               placeholder="Ana Başlık "/>
                                    </div>
                                    <div class="mb-10 mt-10">
                                        <label for="exampleFormControlInput1"
                                               class="required form-label">Açıklama</label>
                                        <textarea  type="text" name="description"  class="form-control form-control-solid"
                                                   placeholder="Açıklama ">{{$about->description}}</textarea>
                                    </div>

                                    <div class="mb-10 mt-10">
                                        <label for="exampleFormControlInput1"
                                               class="required form-label">İşbirliği Başlık 1</label>
                                        <input type="text" name="collaboration_1_title" value="{{$about->collaboration_1_title}}" class="form-control form-control-solid"
                                               placeholder="İşbirliği Başlık 1 "/>
                                    </div>
                                    <div class="mb-10 mt-10">
                                        <label for="exampleFormControlInput1"
                                               class="required form-label">İşbirliği Kısa Açıklama 1</label>
                                        <input type="text" name="collaboration_1_description" value="{{$about->collaboration_1_description}}" class="form-control form-control-solid"
                                               placeholder="İşbirliği Kısa Açıklama 1 "/>
                                    </div>
                                    <div class="mb-10 mt-10">
                                        <label for="exampleFormControlInput1"
                                               class="required form-label">İşbirliği Başlık 2</label>
                                        <input type="text" name="collaboration_2_title" value="{{$about->collaboration_2_title}}" class="form-control form-control-solid"
                                               placeholder="İşbirliği Başlık 2 "/>
                                    </div>
                                    <div class="mb-10 mt-10">
                                        <label for="exampleFormControlInput1"
                                               class="required form-label">İşbirliği Kısa Açıklama 2</label>
                                        <input type="text" name="collaboration_2_description" value="{{$about->collaboration_2_description}}" class="form-control form-control-solid"
                                               placeholder="İşbirliği Kısa Açıklama 2 "/>
                                    </div>
                                    <div class="mb-10 mt-10">
                                        <label for="exampleFormControlInput1"
                                               class="required form-label">İşbirliği Başlık 3</label>
                                        <input type="text" name="collaboration_3_title" value="{{$about->collaboration_3_title}}" class="form-control form-control-solid"
                                               placeholder="İşbirliği Başlık 3 "/>
                                    </div>
                                    <div class="mb-10 mt-10">
                                        <label for="exampleFormControlInput1"
                                               class="required form-label">İşbirliği Kısa Açıklama 3</label>
                                        <input type="text" name="collaboration_3_description" value="{{$about->collaboration_3_description}}" class="form-control form-control-solid"
                                               placeholder="İşbirliği Kısa Açıklama 3 "/>
                                    </div>
                                    <div class="mb-10 mt-10">
                                        <label for="exampleFormControlInput1"
                                               class="required form-label">İşbirliği Başlık 4</label>
                                        <input type="text" name="collaboration_4_title" value="{{$about->collaboration_4_title}}" class="form-control form-control-solid"
                                               placeholder="İşbirliği Başlık 4 "/>
                                    </div>
                                    <div class="mb-10 mt-10">
                                        <label for="exampleFormControlInput1"
                                               class="required form-label">İşbirliği Kısa Açıklama 4</label>
                                        <input type="text" name="collaboration_4_description" value="{{$about->collaboration_4_description}}" class="form-control form-control-solid"
                                               placeholder="İşbirliği Kısa Açıklama 4 "/>
                                    </div>

                                </div>

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
        $(document).on('change', 'input[type="file"]', function (e) {
            let id = e.target.name;
            up_image(id);
        });


        function up_image(id) {
            var formData = new FormData();
            formData.append('upload', $('input[name="' + id + '"]')[0].files[0]);
            formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
            $.ajax({
                type: 'POST',
                url: '{{route('admin.about.upload')}}',
                data: formData,
                cache: false,
                processData: false, // Tell jQuery Do not deal with the data sent
                contentType: false,
                success: function (data) {
                    toastr.success('Görsel Yüklendi');
                    $('input[name="' + id + '"]').attr('url', data.success);
                    $('input[name="' + id + '"]').parent().parent().children('.image-input-wrapper').css("background-image", "url(" + data.success + ")");
                },
                error: function (data) {
                    toastr.error('Görsel Yüklenemedi');
                }
            });
        }
    </script>

    <script>
        $('#update').click(function () {
            $.ajax({
                type: 'POST',
                url: '{{route('admin.pages.index.about-update')}}',
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'title': $('input[name="title"]').val(),
                    'main_title': $('input[name="main_title"]').val(),
                    'image': $('input[name="about_image"]').attr('url'),
                    'description': $('textarea[name="description"]').val(),
                    'collaboration_1_title': $('input[name="collaboration_1_title"]').val(),
                    'collaboration_1_description': $('input[name="collaboration_1_description"]').val(),
                    'collaboration_2_title': $('input[name="collaboration_2_title"]').val(),
                    'collaboration_2_description': $('input[name="collaboration_2_description"]').val(),
                    'collaboration_3_title': $('input[name="collaboration_3_title"]').val(),
                    'collaboration_3_description': $('input[name="collaboration_3_description"]').val(),
                    'collaboration_4_title': $('input[name="collaboration_4_title"]').val(),
                    'collaboration_4_description': $('input[name="collaboration_4_description"]').val(),
                },
                success: function (data) {
                    toastr.success('Güncelleme Başarılı');
                },
                error: function (data) {
                    toastr.error('Güncelleme Başarısız');
                }
            });
        });
    </script>

@endsection
