@extends('layouts.master')

@section('title', 'Home Page')


@section('sidebar')
    @parent
@endsection


@section('content')
    <!--// Mini Header \\-->
    <div class="wm-mini-header">
        <span class="wm-blue-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wm-mini-title">
                        <h1>Lesson Detail</h1>
                    </div>
                    <div class="wm-breadcrumb">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('classlist') }}">Class list</a></li>
                            <li>Class detail</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Mini Header \\-->

    <!--// Main Content \\-->
    <div class="wm-main-content">

        <!--// Main Section \\-->
        <div class="wm-main-section">
            <div class="container">
                <div class="row">
                    <aside class="col-md-3">
                        <div class="widget widget_professor-info">
                            <div class="wm-widget-title">
                                <h2>About Professor</h2>
                            </div>
                            <figure>
                                <a href="#"><img style="border-radius:50%;width:60px;height:60px;"
                                        src="{{ asset('extra-images') }}/{{ $taikhoan->AVT }}" alt=""></a>
                            </figure>
                            <div class="wm-Professor-info">
                                <h6><a href="#">{{ $taikhoan->Ten }}</a></h6>
                                <span>{{ $taikhoan->Email }}</span>
                            </div>
                            <a class="wm-read-more" href="#">Read More</a>
                        </div>
                    </aside>
                    <div class="ol-md-9">
                        <h1>{{ $lesson->TieuDe }}</h1>
                        <p>{{ $lesson->created_at }} || {{ $lesson->HanNop }}</p>
                        <hr>
                        <p>{{ $lesson->ChiTiet }}</p>
                        <div class="card-body file-manager">
                            @if(!empty($tep))
                            <ul class="files">
                                <a href="{{ asset('filebaidang') }}/{{ $tep->Url }}">
                                    <li class="file-box">
                                        <div class="file-top">
                                            @php $domain=explode(".", $tep->Url) @endphp
                                            @if ($domain[1] == 'docx')
                                                <i class="fa fa-file-word-o" style="color:blue"></i>
                                            @endif
                                            @if ($domain[1] == 'jpeg' || $domain[1] == 'png' || $domain[1] == 'jpg')
                                                <img style="width:60px;height:60px;"
                                                    src="{{ asset('filebaidang') }}/{{ $tep->Url }}" alt="">
                                            @endif
                                            @if ($domain[1] == 'pptx')
                                                <i class="fa fa-file-powerpoint-o txt-danger"></i>
                                            @endif
                                            @if ($domain[1] == 'zip' || $domain[1] == 'rar')
                                                <i class="fa fa-file-archive-o txt-secondary"></i>
                                            @endif
                                        </div>
                                        <div class="file-bottom">
                                            <h6>{{ $tep->Url }}</h6>
                                            <p class="mb-1">{{ $sizefile }}</p>
                                        </div>
                                    </li>
                                </a>
                            </ul>
                            @endif
                            </br>
                            <hr>
                            <p><i style="font-size:20px" class="fa">&#xf0c0;</i><span
                                    style="color:black; font-size:15px">Student comments in class:</span></p>
                            <div class="media border p-3">
                                @foreach ($binhluan as $value)
                                    <img style="float:left;border-radius:50%;width:35px;height:35px;"
                                        src="{{ asset('extra-images') }}/{{ $value->TaiKhoan->AVT }}" alt="">
                                    <div class="media-body">
                                        <p style="color:black;font-size:16px">{{ $value->TaiKhoan->Ten }} <small><i>
                                                    {{ $value->created_at }}</i></small></p>
                                        <p>{{ $value->NoiDung }}</p>
                                    </div>
                                    <ul class="files">
                                        @foreach ($value->DanhsachTepBinhLuan as $tepbinhluan)
                                            <a href="{{ asset('filebinhluan') }}/{{ $tepbinhluan->Url }}">
                                                <li class="file-box1">
                                                    @php $domain=explode(".", $tepbinhluan->Url) @endphp
                                                    @if ($domain[1] == 'docx')
                                                        <i class="fa fa-file-word-o" style="color:blue"></i>
                                                    @endif
                                                    @if ($domain[1] == 'jpeg' || $domain[1] == 'png' || $domain[1] == 'jpg')
                                                        <i class="fa fa-file-image-o txt-danger"></i>
                                                    @endif
                                                    @if ($domain[1] == 'pptx')
                                                        <i class="fa fa-file-powerpoint-o txt-danger"></i>
                                                    @endif
                                                    @if ($domain[1] == 'zip' || $domain[1] == 'rar')
                                                        <i class="fa fa-file-archive-o txt-secondary"></i>
                                                    @endif
                                                    <span style="font-size: 13px;float:left"
                                                        class="text">{{ $tep->Url }}</p>
                                                </li>
                                            </a>
                                        @endforeach
                                    </ul>
                                @endforeach
                            </div>
                            <img style="float:left;border-radius:50%;width:40px;height:40px;"
                                src="{{ asset('extra-images') }}/{{ $taikhoan->AVT }}" alt="">
                            <div>
                                <form method="POST" action="{{ route('CreateBinhLuan', ['id' => $lesson->id]) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input name="content" type="text"
                                        style="position: relative;top:3px;right:-3px;float:left;width:500px;border:solid 1px #b99663;border-radius:10px 0 0 10px;height:33px"
                                        placeholder="add comment in class">
                                    <input class="input-file" id="my-file" type="file" name="attachment[]" multiple>
                                    <label tabindex="0" for="my-file"
                                        style="padding:0;position: relative;top:11px;right:25px;float:left;"
                                        class="input-file-trigger"><i style="font-size:18px"
                                            class="fa">&#xf093;</i></label>
                                    <button
                                        style="float:left;border-radius:0 10px 10px 0;position: relative;top:3px;right:9px;background-color: #b99663;margin:0 0 0 -5px"><i
                                            style="color:white;padding:3px 3px 0 3px"
                                            class="material-icons">&#xe163;</i></button>
                                    <br> <br>

                                </form>
                                <p style="display:none;padding:3px;border:solid 1px gray" id="filename">
                                </p>

                            </div>
                        </div>

                        <script>
                            $(document).ready(function() {
                                $('input[type="file"]').change(function(e) {
                                    var fileUpload = $("#my-file").get(0);
                                    var files = fileUpload.files;
                                    var mediafilename = "";
                                    for (var i = 0; i < files.length; i++) {
                                        mediafilename = files[i].name;
                                        var p = document.createElement("p");
                                        var text = document.createTextNode(mediafilename);
                                        p.appendChild(text);
                                        document.getElementById("filename").appendChild(p);
                                        document.getElementById("filename").style.display = 'block';
                                    }

                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--// Main Section \\-->

    <!--// Main Section \\-->
    </div>
    <!--// Main Content \\-->
@endsection
