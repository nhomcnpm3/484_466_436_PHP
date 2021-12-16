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
                        <form>
                            <ul>
                                <li>
                                    <div class="wm-radio">
                                        <div class="wm-radio-partition">
                                            <label for="male">Class code</label>
                                        </div>
                                    </div>
                                </li>
                                <li> <input type="text" value="Course Name" onblur="if(this.value == '') { this.value ='Course Name'; }" onfocus="if(this.value =='Course Name') { this.value = ''; }"> <i class="wmicon-search"></i> </li>
                                <li> <input type="submit" value="Search class"> </li>
                            </ul>
                        </form>
                    </div>

                </aside>

                <div class="col-md-9">
                    <div class="wm-filter-box">
                        <div class="wm-apply-select">
                            <select>
                                <option>By Category</option>
                                <option>By Category</option>
                                <option>By Category</option>
                                <option>By Category</option>
                            </select>
                        </div>
                        <div class="wm-apply-select">
                            <select>
                                <option>Search By</option>
                                <option>Search By</option>
                                <option>Search By</option>
                                <option>Search By</option>
                            </select>
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
                    <a href="{{route('classlist')}}"><i class="fa fa-arrow-left" style="font-size:24px"></i></a>
                    <div class="wm-courses wm-courses-popular wm-courses-mediumsec">
                        <form class="form-horizontal" action="{{ route('CreateClass') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-sm-2">Class name:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="classname" placeholder="Enter new class" name="classname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Description:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter new description" name="description">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Logo:</label>
                                <div class="col-sm-10">
                                    <input type="file" name="logo" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Banner:</label>
                                <div class="col-sm-10">
                                    <input type="file" name="banner" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Theme:</label>
                                <div class="col-sm-10">
                                    <input type="color" id="favcolor" name="favcolor" value="#ff0000">
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
    </div>
    <!--// Main Section \\-->

</div>
@endsection