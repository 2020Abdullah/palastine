@extends('layouts.app')

@section('css')
    <link href="{{ asset('home/css/allstyle.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="top"></div>

	<!-- ---------------------------banner -->
	<div class="banner-area" style="background-image:linear-gradient( #1c1a2521, #000000ab),url({{ asset('images/nsbm1.jpg') }}) "></div>
    <div class="title">
      <h1>Contact us</h1>
    </div>
    <div class="para">
      <p class="contact-para text-center text-muted">
        We are open for any suggestion or just to have a chat.
      </p>
    </div>
    <div class="contact-container">
      <div class="contact-box">
        <div class="left" style="background: url({{ asset('images/contact1.jpg') }}) no-repeat center"></div>
        <div class="right">
          <h2>Get in touch</h2>
          <form action="" method="post">
            <input
              type="text"
              class="field"
              placeholder="Your Name"
              id="name"
              name="name"
              required
            />
            <input
              type="text"
              class="field"
              placeholder="Your Email"
              id="email"
              name="email"
              required
            />
            <input
              type="text"
              class="field"
              placeholder="Phone"
              id="phone"
              name="phone"
              required
            />
            <textarea
              placeholder="Message"
              class="field"
              id="message"
              name="message"
              required
            ></textarea>
            <!-- <button class="send-btn">Send</button> -->
            <input type="submit" class="send-btn" value="send" name="submit" />
          </form>
        </div>
      </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('home/js/allscript.js') }}" defer></script>
@endsection