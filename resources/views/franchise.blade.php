@extends('layouts.app')
@section('content')
<section class="booking-section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">

                <!-- Header -->
                <div class="booking-form-wrap text-center mb-1">
                    <h3 class="text-white mb-2">WE ARE LOOKING FOR NEW LOCATIONS!</h3>
                    <p class="text-white mb-0">
                        At Erlinda's we want to get closer to our customers every day.
                        This is why we are constantly looking for new locations for our stores.
                    </p>
                </div>

                <!-- What We Offer -->
                <div class="info-block booking-form-wrap p-4 rounded shadow-sm text-center mb-2">
                    <h3 data-aos="zoom-in" class="mb-3 mt-3"><span class="line d-inline-block me-2"></span> What We Offer</h3>
                    <ul class="list-unstyled mb-0" data-aos="fade-right">
                        <li><span class="icon me-2">➔</span> On time rental payments</li>
                        <li><span class="icon me-2">➔</span> Trustful and long-term partnership.</li>
                        <li><span class="icon me-2">➔</span> High quality construction works.</li>
                    </ul>
                    <h3 data-aos="zoom-in" class="mb-3 mt-4"><span class="line d-inline-block me-2"></span> What We Look For</h3>
                    <ul class="list-unstyled mb-0" data-aos="fade-left">
                        <li><span class="icon me-2">➔</span> Ground floor stores</li>
                        <li><span class="icon me-2">➔</span> Possibility for truck delivery</li>
                        <li><span class="icon me-2">➔</span> Property with the correct documents</li>
                        <li><span class="icon me-2">➔</span> Close to residential area</li>
                    </ul>
                    <h3 data-aos="fade-right" class="mb-3 mt-4"><span class="line d-inline-block me-2"></span> Send an email to erlindascafe.official@gmail.com</h3>
                </div>


            </div>
        </div>
    </div>
</section>



    <style>
        .info-section {
            background-color: #1e1e1e;
            /* Dark background to contrast white text */
            padding: 2rem;
            font-family: Arial, sans-serif;
        }

        .info-block {
            margin-bottom: 2rem;
        }

        .info-block h3 {
            font-weight: bold;
            color: #ffffff;
            display: flex;
            align-items: center;
            font-size: 1.25rem;
        }

        .info-block .line {
            display: inline-block;
            width: 30px;
            height: 3px;
            background-color: #FFA500;
            /* Orange underline */
            margin-right: 10px;
        }

        .info-block ul {
            list-style: none;
            padding-left: 0;
            margin-top: 1rem;
        }

        .info-block li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 0.8rem;
            color: #ffffff;
            /* White text */
            font-size: 1rem;
        }

        .icon {
            color: #FFA500;
            /* Orange arrow */
            font-weight: bold;
            margin-right: 10px;
        }
        .soft-input {
    background-color: #ffeef7;
    border: none;
    border-radius: 10px;
    padding: 12px 16px;
    color: #333;
    font-size: 15px;
}

.soft-input::placeholder {
    color: #777;
}

.form-check-input {
    margin-right: 8px;
}

.btn-primary {
    background-color: #2f54eb;
    border: none;
    border-radius: 8px;
    font-weight: bold;
}
    </style>
@endsection
