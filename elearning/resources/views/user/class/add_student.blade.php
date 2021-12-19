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

                    <a href="{{route('classdetail',['id'=>$class->id])}}"><i class="fa fa-arrow-left" style="font-size:24px"></i></a>
                    <div class="wm-courses wm-courses-popular wm-courses-mediumsec">
                    <input type="text" disabled value="{{asset('linkclass')}}?token={{$class->token}}" id="myInput">
                            <button onclick="myFunction1()"><i style="font-size:24px" class="fa">&#xf0c5;</i></button>
                        <form class="form-horizontal" action="{{route('add_student',['id'=>$class->id])}}" method="post">
                            @if(Session::get("failed1")!= "")
                            <div class="alert alert-danger alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('failed1')}} This email does not exist</div>
                            @endif
                            @if(Session::get("failed2")!="")
                            <div class="alert alert-danger alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('failed2')}} This email has joined</div>
                            @endif
                            @if(Session::get("success1")!="")
                            <div class="alert alert-success alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('success1')}} email sent successfully</div>
                            @endif
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-sm-2">Emails:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="email" placeholder="Enter student email" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Content:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Content email" name="content">
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
    <script>
        function myFunction1() {
            /* Get the text field */
            var copyText = document.getElementById("myInput");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.value);

        }
    </script>

</div>
@endsection