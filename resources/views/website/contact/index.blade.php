@extends('website.master')

@section('title')
    Contact With US
@endsection

@section('body')

    <section class="">
        <div class="container-fluid py-5 bg-secondary">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-white">Contact With US</h1>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body h-100 shadow">
                        <h1 class="text-center">Send Your Message</h1>
                        <hr/>
                        <form action="" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="mobile"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Your Message</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="message"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success px-5" value="Send Message"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body h-100 shadow">
                        <h1 class="text-center">Emergency Contact</h1>
                        <hr/>
                        <address>
                            House # 420, Road #, 40, Adabor, Mohammadpur, Dhaka. <br/>
                            <b>Phone:</b> 0171512313, 01818123132 <br/>
                            <b>email:</b> info@example.com
                        </address>
                        <ul class="nav">
                            <li><a href="" class="nav-link"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-instagram-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="card card-body shadow">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9024424301397!2d90.39108011498136!3d23.750858084589126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bd552c2b3b%3A0x4e70f117856f0c22!2sBASIS%20Institute%20of%20Technology%20%26%20Management%20(BITM)!5e0!3m2!1sen!2sbd!4v1662608000317!5m2!1sen!2sbd" height="450" style="border:0; width: 100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
