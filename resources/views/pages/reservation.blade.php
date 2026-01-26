@extends('layouts.app')

@section('title', 'Reservation')

@section('content')
    @include('partials.navbar')
    @include('partials.heroRsvp')
    <section id="reservation">
        <div class="reservation-text">
            <h6> Reservation </h6>
            <h2> Book a Table </h2>
            <p> Please complete the form to book your table. <br> Let us know your details, preferred date and time, and the number of guests. </p>
        </div>
        <!-- form -->
        <div class="reservation-card">
            <form class="reservation-container">
                <!-- row 1 -->
                <div class="form-row">
                    <div class="form-field">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-box" placeholder="John Doe">
                </div>
                <div class="form-field">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-box" placeholder="example@gmail.com">
                </div>
                <div class="form-field">
                    <label class="form-label">Phone Number</label>
                    <input type="tel" class="form-box" placeholder="62123455689">
                </div>
            </div>
        <!-- row 2 -->
        <div class="form-row">
            <div class="form-field">
                <label class="form-label">Date & Time</label>
                <input type="datetime-local" class="form-box">
            </div>
            <div class="form-field">
                <label class="form-label">Person</label>
                <input type="number" class="form-box">
            </div>
        </div>
        <!-- message -->
        <div class="form-field full width">
            <label class="form-label">Message</label>
            <textarea class="form-box" rows="3"></textarea>
        </div>
        <!-- button submit -->
         <div class="form-actions">
             <button type="submit"> Submit </button>
        </div>
    </form>
</div>
</section>
    @include('partials.contact')
    @include('partials.footer')
@endsection
