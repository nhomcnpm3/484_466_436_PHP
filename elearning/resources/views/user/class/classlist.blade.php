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
                                <form action="{{ route('showpersonalclass') }}" method="POST">
                                    @csrf

                                    <select name="order" onchange='this.form.submit()'>
                                        <option value="1">Joined class</option>
                                        <option @if($order==2)selected="selected"@endif value="2">Personal class</option>
                                    </select>
                                </form>

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
                        @if (auth()->user()->ID_LoaiTaiKhoan != 2)
                            <a href="{{ route('showCreateClass') }}" class="btn  btn-lg"
                                style="background-color:#b99663;color:white">
                                <span class="glyphicon glyphicon-plus" style="color:white"></span>More class
                            </a>
                        @endif

                        <div class="wm-courses wm-courses-popular wm-courses-mediumsec">
                            <ul class="row">
                                @if ($order == 1)
                                    @forelse($classlist->DSLop as $class)
                                        @if($class->pivot->TrangThai==1)
                                        <li class="col-md-12">
                                            <div class="wm-courses-popular-wrap">
                                                <figure> <a href="{{ route('classdetail', ['id' => $class->id]) }}"><img
                                                            src="{{ asset('extra-images') }}/{{ $class->Logo }}"
                                                            style="width:265px;height:155px;" alt=""> <span
                                                            class="wm-popular-hover"> <small>see class</small> </span> </a>
                                                    <figcaption style="background-color:{{$class->MauChuDe}}">
                                                        <h6><a
                                                                href="{{ route('classdetail', ['id' => $class->id]) }}">{{ $class->TaiKhoan->Ten }}</a>
                                                        </h6>
                                                    </figcaption>
                                                </figure>
                                                <div class="wm-popular-courses-text">
                                                    <h6><a
                                                            href="{{ route('classdetail', ['id' => $class->id]) }}">{{ $class->TenLop }}</a>
                                                    </h6>
                                                    <p>{{ $class->mota }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        @endif
                                    @empty
                                        <p>Khong co du lieu</p>
                                    @endforelse
                                @elseif($order ==2)
                                    @forelse($classlist->DanhsachLop as $class)
                                    @if($class->pivot->TrangThai==1)
                                        <li class="col-md-12">
                                            <div class="wm-courses-popular-wrap">
                                                <figure> <a href="{{ route('classdetail', ['id' => $class->id]) }}"><img
                                                            src="{{ asset('extra-images') }}/{{ $class->Logo }}"
                                                            style="width:265px;height:155px;" alt=""> <span
                                                            class="wm-popular-hover"> <small>see class</small> </span> </a>
                                                    <figcaption style="background-color:{{$class->MauChuDe}}>
                                                        <h6><a
                                                                href="{{ route('classdetail', ['id' => $class->id]) }}">{{ $class->TaiKhoan->Ten }}</a>
                                                        </h6>
                                                    </figcaption>
                                                </figure>
                                                <div class="wm-popular-courses-text">
                                                    <h6><a
                                                            href="{{ route('classdetail', ['id' => $class->id]) }}">{{ $class->TenLop }}</a>
                                                    </h6>
                                                    <p>{{ $class->mota }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        @endif

                                    @empty
                                        <p>Khong co du lieu</p>
                                    @endforelse
                                @endif
                            </ul>
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
