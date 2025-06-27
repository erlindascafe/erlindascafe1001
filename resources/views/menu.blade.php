@extends('layouts.app')
@section('content')

<section class="section-padding section-bg" id="menu-gallery">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center mb-5">
                <h3 class="text-white">Our Menu</h3>
            </div>

            <div data-aos="fade-right" class="col-6 col-md-3 mb-4">
                <img src="{{ asset('images/menu1.jpg') }}" class="img-fluid rounded shadow menu-image" alt="Menu 1">
            </div>
            <div data-aos="flip-up" class="col-6 col-md-3 mb-4">
                <img src="{{ asset('images/menu2.jpg') }}" class="img-fluid rounded shadow menu-image" alt="Menu 2">
            </div>
            <div data-aos="flip-up" class="col-6 col-md-3 mb-4">
                <img src="{{ asset('images/menu3.jpg') }}" class="img-fluid rounded shadow menu-image" alt="Menu 3">
            </div>
            <div data-aos="fade-left" class="col-6 col-md-3 mb-4">
                <img src="{{ asset('images/menu4.jpg') }}" class="img-fluid rounded shadow menu-image" alt="Menu 4">
            </div>

            <!-- Order Now Button -->
            <div class="col-12 text-center mt-4">
                <button onclick="delayedRedirect()" class="btn custom-btn smoothscroll me-2 mb-2">
                    Order Now
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Loading Overlay -->
<div id="loading-overlay" style="display: none;">
    <div class="loading-message">
        You're being redirected to our official Facebook page...
    </div>
</div>

<!-- Styles -->
<style>
#loading-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.8);
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    font-size: 1.5rem;
}
</style>

<!-- Script -->
<script>
function delayedRedirect() {
    const overlay = document.getElementById('loading-overlay');
    overlay.style.display = 'flex';

    // Wait 2.5 seconds, then open FB in new tab and hide overlay
    setTimeout(() => {
        window.open('https://www.facebook.com/erlindascafe.official', '_blank'); // Replace with your real page
        overlay.style.display = 'none';
    }, 2500); // 2.5 seconds
}
</script>

@endsection