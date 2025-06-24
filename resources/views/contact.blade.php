@extends('layouts.app')
@section('content')
<section class="contact-section section-padding" id="section_5">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    
                    <h3 class="text-white mb-4 pb-lg-2">Contact</h3>
                </div>

                <div class="col-lg-6 col-12">
                    <form action="#" method="post" class="custom-form contact-form" role="form">

                        <div class="row">

                            <div class="col-lg-6 col-12">
                                <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>

                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Jackson" required="">
                            </div>

                            <div class="col-lg-6 col-12">
                                <label for="email" class="form-label">Email Address</label>

                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                    class="form-control" placeholder="Jack@gmail.com" required="">
                            </div>

                            <div class="col-12">
                                <label for="message" class="form-label">How can we help?</label>

                                <textarea name="message" rows="4" class="form-control" id="message" placeholder="Message" required=""></textarea>

                            </div>
                        </div>

                        <div class="col-lg-5 col-12 mx-auto mt-3">
                            <button type="submit" class="form-control">Send Message</button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 col-12 mx-auto mt-5 mt-lg-0 ps-lg-5">
                    <iframe class="google-map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.4332076992673!2d121.20227687383601!3d13.855712786547082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd1532c5bbfe13%3A0xe8c4c43bf783680f!2sErlinda%E2%80%99s%20Caf%C3%A9%20Rosario%3A%20House%20of%20Authentic%20Biryani%20%26%20Shawarma!5e1!3m2!1sen!2sth!4v1750767931500!5m2!1sen!2sth"
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </section>
    @endsection