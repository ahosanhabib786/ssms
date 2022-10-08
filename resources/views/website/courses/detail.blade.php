@extends('website.master')

@section('title')
    {{$course->title}}
@endsection

@section('body')
    <section class="">
        <div class="container-fluid py-5 bg-secondary">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-white">Course Detail</h1>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body h-100 shadow">
                        <img src="{{asset($course->image)}}" alt=""/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body h-100 shadow">
                        <h1 class="text-center">{{$course->title}}</h1>
                        <h3>Trainer Name: {{$course->teacher->name}}</h3>
                        <h3>Starting Date: {{$course->startig_date}}</h3>
                        @if($course->offer_fee > 0)
                            <h4>Course Regular Fee: TK. {{$course->fee}}</h4>
                            <h4>Course Offer Fee: TK. {{$course->offer_fee}}</h4>
                        @else
                            <h3>Course Fee: TK. {{$course->fee}}</h3>
                        @endif
                        <h3>Venu: Karwanbazar, Dhaka 1205</h3>
                        <a href="{{route('enroll-now', ['id' => $course->id])}}" class=" mt-2 btn btn-outline-success px-5 {{$status == true ? 'disabled' : '' }}">Enroll Now</a>
                        @if($status)
                            <p class="text-danger text-center mt-2">Your are already enroll in this course.</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="card card-body">
                        <h2>Course Detail Information</h2>
                        <hr/>
                        {!! $course->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
