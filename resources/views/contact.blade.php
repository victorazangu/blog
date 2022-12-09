@extends('layout')

@section('main')
<section id="contact" class="contact-section section-padding" data-scroll-index="6">
    <div class="container">
        <div class="section-heading mb-40 text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
            <h2>Get In Touch</h2>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Contact Form -->
                <div class="contact-form">
                    <form action="{{ route('contact.store') }}" method="post"  class="row contact-form text-center">
                        @csrf
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your name" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea class="form-control message" name="message" id="message"  placeholder="Message" required></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <button id="submit" class="default-btn"  type="submit">Send Message</button>
                        </div>
                        <div id="form-messages" class="form-group col-lg-12">
                            <div class="alert" role="alert"></div>
                        </div>
                    </form>
                </div>
            </div>







</section>
@endsection
