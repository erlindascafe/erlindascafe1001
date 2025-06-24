@extends('layouts.app')
@section('content')
    <section class="booking-section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12 mx-auto">
                    <div class="booking-form-wrap">
                        <div class="row">
                            <div class="col-lg-7 col-12 p-0">
                                <form class="custom-form booking-form" action="#" method="post" role="form">
                                    <div class="text-center mb-4 pb-lg-2">


                                        <h3 class="text-white">WE ARE LOOKING FOR NEW LOCATIONS!</h3>
                                        <p class="text-white">At Erlinda's we want to get closer to our customers every day.
                                            This is why we are constantly looking for new locations for our stores.</p>
                                    </div>

                                    <div class="booking-form-body">
    <div class="row gy-3">
        <!-- Store Location -->
        <div class="col-12">
            <input type="text" name="store_location" class="form-control soft-input" placeholder="Exact Location" required>
        </div>

        <!-- Site Details -->
        <div class="col-12">
            <textarea name="site_details" class="form-control soft-input" rows="4" placeholder="Ideally you share some more details with us: size in sqm, expected rent and current conditions of your store site" required></textarea>
        </div>

        <!-- Region & City -->
        <div class="col-md-6 col-12">
            <select name="region" class="form-control soft-input" required>
                <option value="">Select Region</option>
                <option value="Region 1">Region 1</option>
                <option value="Region 2">Region 2</option>
            </select>
        </div>

        <div class="col-md-6 col-12">
            <input type="text" name="city" class="form-control soft-input" placeholder="City" required>
        </div>

        <!-- Contact Person & Number -->
        <div class="col-md-6 col-12">
            <input type="text" name="contact_person" class="form-control soft-input" placeholder="First and last name" required>
        </div>

        <div class="col-md-6 col-12">
            <input type="tel" name="contact_number" class="form-control soft-input" placeholder="Phone or mobile number" required>
        </div>

        <!-- Email -->
        <div class="col-12">
            <input type="email" name="email" class="form-control soft-input" placeholder="Email address" required>
        </div>

        <!-- Terms Checkbox -->
        <div class="col-12">
            <small class="text-danger">* Mandatory fields</small><br>
            <div class="form-check mt-1">
                <input type="checkbox" name="terms" class="form-check-input" required>
                <label class="form-check-label text-white">I authorize ERLINDA'S to use the information provided on this page.</label>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="col-12 text-center mt-3">
            <button type="submit" class="btn btn-primary px-5 py-2">Submit</button>
        </div>
    </div>
</div>

                                </form>
                            </div>

                            <div class="col-lg-5 col-12 p-0 mt-5">
                                <div class="info-block">
                                    <h3><span class="line"></span> What We Offer</h3>
                                    <ul>
                                        <li><span class="icon">➔</span> On time rental payments</li>
                                        <li><span class="icon">➔</span> Trustful and long-term partnership.</li>
                                        <li><span class="icon">➔</span> High quality construction works.</li>
                                    </ul>
                                </div>

                                <div class="info-block">
                                    <h3><span class="line"></span> What We Look For</h3>
                                    <ul>
                                        <li><span class="icon">➔</span> Ground floor stores
                                            </li>
                                        <li><span class="icon">➔</span> Possibility for truck delivery.</li>
                                        <li><span class="icon">➔</span> Property with the correct documents</li>
                                        <li><span class="icon">➔</span> Close to residential area.</li>
                                    </ul>
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
