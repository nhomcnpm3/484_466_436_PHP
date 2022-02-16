@extends('layouts.master')

@section('title', 'Home Page')

@section('sidebar')
    @parent
@endsection

@section('content')
    <!--// Main Content \\-->
    <div class="wm-main-content">

        <!--// Main Section \\-->
        <div class="wm-main-section">
            <div class="container">
                <div class="row">

                    <aside class="col-md-3">
                        <div class="widget wm-search-course">
                            <h3 class="wm-short-title wm-color">Find Your Class</h3>
                            <p>Find your class here:</p>
                            <form action="{{ route('joinclass') }}" method="post">
                                @csrf
                                <ul>
                                    <li>
                                        <div class="wm-radio">
                                            <div class="wm-radio-partition">
                                                <label for="male">Class code</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li> <input type="text" name="joinclass" value="Course Name"
                                            onblur="if(this.value == '') { this.value ='Course Name'; }"
                                            onfocus="if(this.value =='Course Name') { this.value = ''; }"> <i
                                            class="wmicon-search"></i> </li>
                                    <li> <input type="submit" value="Search class"> </li>
                                </ul>
                            </form>
                        </div>

                    </aside>

                    <div class="col-md-9">
                        <div class="wm-filter-box">
                            <div class="wm-apply-select">
                                
                            </div>
                            <div class="wm-normal-btn">
                                <a href="#" class="active">Free</a>
                                <a href="#">Paid</a>
                            </div>
                            <div class="wm-view-btn">
                                <a href="#" class="wmicon-squares active"></a>
                                <a href="#" class="wmicon-signs"></a>
                            </div>
                        </div>

                        <div class="wm-courses wm-courses-popular wm-courses-mediumsec">
                            <form class="form-horizontal" action="{{route('updateclass', ['id' => $class->id])}}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="col-sm-10">Tên lớp</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="classname" placeholder="Nhập tên lớp"
                                            name="tenlop" value="{{$class->TenLop}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-10">Mô tả</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="classname" placeholder="Nhập mô tả"
                                            name="mota" value="{{$class->MoTa}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-10">Logo</label>
                                    <div class="col-sm-10">
                                        <input class="input-file" type="file" name="logo" value="{{$class->Logo}}" >
                                        <label tabindex="0" for="my-file"
                                        style="padding:0;position: relative;top:11px;right:0px;float:left;"
                                        class="input-file-trigger"><i style="font-size:18px"
                                            class="fa">&#xf093;</i></label>                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-10">Banner</label>
                                    <div class="col-sm-10">
                                        <input class="input-file" id="my-file" type="file" name="banner" value="{{$class->Banner}}" disabled>
                                        <label tabindex="0" for="my-file"
                                        style="padding:0;position: relative;top:11px;right:0px;float:left;"
                                        class="input-file-trigger"><i style="font-size:18px"
                                            class="fa">&#xf093;</i></label>                                     </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Màu chủ đề:</label>
                                    <div class="col-sm-10">
                                        <input type="color" id="favcolor" name="favcolor" value="{{$class->MauChuDe}}" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-10">Mã lớp</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="classname"
                                            name="malop" value="{{$class->MaLop}}" disabled>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <button type="submit" id="submit" class="btn btn-default">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="wm-pagination">
                            <ul>
                                <li><a href="#" aria-label="Previous"> <i class="wmicon-arrows4"></i> Previous</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li>...</li>
                                <li><a href="#">18</a></li>
                                <li><a href="#" aria-label="Next"> <i class="wmicon-arrows4"></i> Next</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>
    <!--// Main Content \\-->

@endsection
