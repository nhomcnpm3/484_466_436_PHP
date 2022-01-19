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
                                        src="{{ asset('extra-images') }}/{{ $taikhoan->AVT }}" alt=""></a>
                            </figure>
                            <div class="wm-Professor-info">
                                <h6><a href="#">{{ $taikhoan->Ten }}</a></h6>
                                <span>{{ $taikhoan->Email }}</span>
                            </div>
                            <a class="wm-read-more" href="#">Read More</a>
                        </div>
                    </aside>
                    
                    <form class="form-horizontal" action="{{ route('addlesson', ['id'=>$class->id]) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-10">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="classname" placeholder="Enter new title"
                                    name="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-10">Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="classname" placeholder="Enter new description"
                                    name="description">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-10">Deadline</label>
                            <div class="col-sm-10">
                                <input type="datetime-local" class="form-control" id="classname"
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
                                    <option value="1">Lesson</option>
                                    <option value="2">Exercise</option>
                                    <option value="3">Question</option>
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
            </div>
        </div>
    </div>
    <!--// Main Section \\-->

    <!--// Main Section \\-->
    </div>
    <!--// Main Content \\-->
@endsection
