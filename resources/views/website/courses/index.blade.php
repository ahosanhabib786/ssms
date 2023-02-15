@extends('website.master')

@section('title')
    Our All Course
@endsection

@section('body')

    <section class="">
        <div class="container-fluid py-5 bg-secondary">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-white">Our All Courses</h1>
                    <h3 class="text-center text-danger">{{Session::get('message')}}</h3>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                @foreach($courses as $course)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <img src="{{asset($course->image)}}" alt="" class="card-img-top" style="height: 300px;"/>
                            <div class="card-body">
                                <h5>{{$course->title}}</h5>
                                <hp>{{$course->teacher->name}}</hp>
                                <p>Tk. {{$course->fee}}</p>
                                <p>Starting Date: {{$course->starting_date}}</p>
                                <hr/>
                                <a href="{{route('courses-detail', ['id' => $course->id])}}" class="btn btn-outline-success px-5">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
{{--                <div class="col-md-4 mb-3">--}}
{{--                    <div class="card">--}}
{{--                        <img src="{{asset('/website/img/service_img1.jpg')}}" alt="" class="card-img-top">--}}
{{--                        <div class="card-body">--}}
{{--                            <h3>Responsive Web Design</h3>--}}
{{--                            <h5>MD. Pplash Mia</h5>--}}
{{--                            <p>Tk. 12000</p>--}}
{{--                            <p>Starting Date: 12.09.2022</p>--}}
{{--                            <hr/>--}}
{{--                            <a href="" class="btn btn-outline-success px-5">Read More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 mb-3">--}}
{{--                    <div class="card">--}}
{{--                        <img src="{{asset('/website/img/service_img1.jpg')}}" alt="" class="card-img-top">--}}
{{--                        <div class="card-body">--}}
{{--                            <h3>Responsive Web Design</h3>--}}
{{--                            <h5>MD. Pplash Mia</h5>--}}
{{--                            <p>Tk. 12000</p>--}}
{{--                            <p>Starting Date: 12.09.2022</p>--}}
{{--                            <hr/>--}}
{{--                            <a href="" class="btn btn-outline-success px-5">Read More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
@endsection
