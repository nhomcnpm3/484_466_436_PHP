@extends('layouts.master')

@section('title', 'Home Page')

@section('sidebar')
    @parent
@endsection
<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    li {
        display: inline;
    }

    li>a {
        color: blue;
        padding-left: 10px;
        padding-right: 10px;
        font-size: 17px;
    }

</style>
@section('content')
    <!--// Mini Header \\-->
    <div class="wm-mini-header">
        <span class="wm-blue-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wm-mini-title">
                        <h1>Class Detail</h1>
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
                                        src="{{ asset('extra-images') }}/{{ $classdetail->taikhoan->AVT }}" alt=""></a>

                            </figure>
                            <div class="wm-Professor-info">
                                <h6><a href="#">{{ $classdetail->taikhoan->Ten }}</a></h6>
                                <span>{{ $classdetail->taikhoan->Email }}</span>
                            </div>
                            <p>{{ $classdetail->mota }}</p>
                            <a class="wm-read-more" href="#">Read More</a>
                        </div>

                    </aside>
                    <div class="col-md-9">
                        <div class="wm-blog-single wm-courses">
                            <div class="wm-blog-author wm-ourcourses"
                                style="background-color:{{ $classdetail->MauChuDe }}">
                                <div class="wm-blogauthor-left">
                                    <a class="wm-authorpost" href="#">{{ $classdetail->taikhoan->Ten }}</a>
                                </div>
                            </div>
                        </div>
                        <ul>
                            <li><a style="border-right:solid 1px blue;color:#424242" href="#">Post</a></li>
                            <li><a style="border-right:solid 1px blue;" href="#">Exercise</a></li>
                            <li><a href="{{ route('everyone', ['id' => $classdetail->id]) }}">Everyone</a></li>
                        </ul>
                        @if (auth()->user()->id == $classdetail->ID_TaiKhoan)
                            <a href="{{ route('showaddlesson', ['id' => $classdetail->id]) }}" class="btn  btn-lg"
                                style="background-color:#b99663;color:white">
                                <span class="glyphicon glyphicon-plus" style="color:white"></span> Add Lesson
                            </a>
                        @endif
                        <div class="wm-courses-getting-started">
                            <div class="wm-title-full">
                                <h2>Getting Started</h2>
                            </div>
                            @forelse($dsBaiDang as $baidang)
                                <div class="wm-courses-started">
                                    <ul class="wm-courses-started-listing">
                                        <li>
                                            <span>{{ $baidang->TieuDe }}</span>
                                            @if ($baidang->ID_TaiKhoan == auth()->user()->id)
                                                <span style="float:right"><a
                                                        href="{{ route('deletelesson', ['id' => $baidang->id]) }}"><i
                                                            class="fa fa-close"></i></a>
                                                </span>
                                                <span style="float:right"><a data-toggle="modal" data-target="#myModal"
                                                        onclick="myFunction('{{ $baidang->id }}')"><i
                                                            class="fa fa-edit"></i></a>
                                                </span>
                                                <!-- Modal -->
                                                <div class="modal fade" id="myModal" role="dialog">
                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">Edit Class</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="form-horizontal" method="post"
                                                                    enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label class="col-sm-10">Title</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" value="{{$baidang->TieuDe}}" class="form-control" id="classname" placeholder="Enter new title"
                                                                                name="title">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-10">Description</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" value="{{$baidang->ChiTiet}}" class="form-control" id="classname" placeholder="Enter new description"
                                                                                name="description">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-10">Deadline</label>
                                                                        <div class="col-sm-10">
                                                                            @php  $datetime = new DateTime($baidang->HanNop);   @endphp
                                                                            <input type="datetime-local" value="{{$datetime->format('Y-m-d\TH:i:s');}}" class="form-control" id="classname"
                                                                                placeholder="Enter new description" name="deadline">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-10">File (img, excel, word...)</label>
                                                                        <div class="col-sm-10">
                                                                            <input class="input-file" id="my-file" type="file" name="file_upload">
                                                                            <label tabindex="0" for="my-file" class="input-file-trigger">Upload File</label>
                                                                        </div>
                                                                    </div>
                                            
                                                                    <div class="form-group">
                                                                        <label class="col-sm-10">Status</label>
                                                                        <div class="col-sm-10">
                                                                            <select name='status'>
                                                                                <option value="1" @if ($baidang->TrangThai == 1) selected="selected" @endif>$baidang->TrangThai</option>
                                                                                <option value="2" @if ($baidang->TrangThai == 2) selected="selected" @endif>Exercise</option>
                                                                                <option value="3" @if ($baidang->TrangThai == 3) selected="selected" @endif>Question</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-sm-10">
                                                                            <button type="submit" id="submit" class="btn btn-default">Save</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endif

                                            <hr>
                                            @if ($baidang->TrangThai == 1)
                                                <a href="#" class="wmicon-tool"><i class="fa fa-book"></i>
                                                @elseif($baidang->TrangThai == 2)
                                                    <a href="#" class="wmicon-tool"><i class="fa fa-pencil"></i>
                                                    @else
                                                        <a href="#" class="wmicon-tool"><i class="fa fa-question"></i>
                                            @endif
                                            </a>
                                            <div class="wm-courses-started-text">
                                                <span><a href="#" class="wmicon-time2"></a><time
                                                        datetime="2017-02-14">{{ $baidang->created_at }}</time></span>
                                                <span><a href="#" class=" wmicon-clock2"></a><time
                                                        datetime="2017-02-14">{{ $baidang->HanNop }}</time></span>
                                            </div>
                                            <div class="wm-courses-preview">
                                                <a class="previe"
                                                    href="{{ route('showdetaillesson', ['id' => $baidang->id]) }}">Preview</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            @empty
                                <tr>
                                    <td colspan="6">Không có dữ liệu</td>
                                </tr>
                            @endforelse
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
