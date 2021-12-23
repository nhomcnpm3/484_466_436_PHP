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
                            <div class="wm-blog-author wm-ourcourses">
                                <div class="wm-blogauthor-left">
                                    <a class="wm-authorpost" href="#">{{ $classdetail->taikhoan->Ten }}</a>
                                </div>
                            </div>
                        </div>
                        <ul>
                            <li><a style="border-right:solid 1px blue;" href="{{route('classdetail',['id'=>$classdetail->id])}}">Post</a></li>
                            <li><a style="border-right:solid 1px blue;" href="#">Exercise</a></li>
                            <li><a style="color:#424242" href="#">Everyone</a></li>
                        </ul>
                        <div class="wm-courses-getting-started">
                            <div class="wm-title-full">
                                <h2>Teacher</h2>
                            </div>
                            <div>
                                <img style="border-radius:50%;width:40px;height:40px;"
                                    src="{{ asset('extra-images') }}/{{ $classdetail->taikhoan->AVT }}" alt="">
                                <span
                                    style="color:#424242;font-size:16px;font-weight:bold">{{ $classdetail->taikhoan->Ten }}</span>
                            </div>
                        </div>
                        <div class="wm-courses-getting-started">
                            <div class="wm-title-full">
                                <h2>Students</h2>
                            </div>
                            @if (auth()->user()->id == $classdetail->ID_TaiKhoan)
                            <a href="{{ route('addstudent', ['id' => $classdetail->id]) }}" class="btn  btn-lg"
                                style="background-color:#b99663;color:white">
                                <span class="glyphicon glyphicon-plus" style="color:white"></span>Add students
                            </a>
                        @endif
                            <div>
                                @foreach ($classdetail->DSTaiKhoan as $value)
                                  @if($value->id!= $classdetail->taikhoan->id)
                                    <img style="border-radius:50%;width:40px;height:40px;"
                                        src="{{ asset('extra-images') }}/{{ $value->AVT }}" alt="">
                                    <span
                                        style="color:#424242;font-size:16px;font-weight:bold">{{ $value->Ten }}</span>
                                        </br>
                                        @endif
                                        @endforeach
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
