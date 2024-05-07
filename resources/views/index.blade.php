@extends('welcome')
    @section('content')

    <div class="tab-content">
        <!-- Contenu principal avec Bootstrap Container -->
        <div class="">
            
            <img src="{{asset('images/header.jpg')}}" class="img-fluid" alt="Intérieur du restaurant">
        </div>

        <div id="about">
            <!-- Section À Propos -->
            <div class="container mt-4">
                <h2 class="text-center">About Délice</h2>
                <div class="row">
                    <div class="col-md-6">
                        <img src="../images/restaurant-237060_1920.jpg" class="img-fluid" alt="Intérieur du restaurant">
                    </div>
                    <div class="col-md-6">
                    <p>The Delight is more than just a restaurant; it's an exceptional gastronomic experience. Nestled in the heart of the city, our establishment offers a warm and elegant atmosphere, perfect for all occasions.</p>
                    <p>Our talented chef, passionate about cuisine, creates exquisite dishes using fresh, local ingredients. Whether you're a seafood lover, a meat enthusiast, or prefer vegetarian dishes, our diverse menu will satisfy all tastes.</p>
                    <p>Beyond the delicious cuisine, we take pride in providing attentive and personalized service. Our dedicated team is here to make your experience memorable, whether it's for a romantic evening, a business meal, or a special celebration.</p>

                    </div>
                </div>
            </div>
        </div>


        <div id="testimonials">
    <!-- Comment Section -->
    <div class="container mt-4">
        <h2 class="text-center">Testimonials</h2>
        <div class="d-flex flex-row overflow-auto">
            <div class="media mt-4">
                <img src="../images/836.jpg" class="img-thumbnail rounded-circle" alt="Avatar 2" width="50" height="50">
                <div class="media-body">
                    <h5 class="mt-0">Client 2</h5>
                    <p>A warm atmosphere, delicious dishes, and friendly staff. I'll definitely come back.</p>
                </div>
            </div>
            <div class="media mt-4">
                <img src="../images/836.jpg" class="img-thumbnail rounded-circle" alt="Avatar 2" width="50" height="50">
                <div class="media-body">
                    <h5 class="mt-0">Client 2</h5>
                    <p>A warm atmosphere, delicious dishes, and friendly staff. I'll definitely come back.</p>
                </div>
            </div>
            <div class="media mt-4">
                <img src="../images/836.jpg" class="img-thumbnail rounded-circle" alt="Avatar 2" width="50" height="50">
                <div class="media-body">
                    <h5 class="mt-0">Client 2</h5>
                    <p>A warm atmosphere, delicious dishes, and friendly staff. I'll definitely come back.</p>
                </div>
            </div>
        </div>
    </div>
</div>



        <div id="membres">
            <!-- Section Membres -->
            <div class="container mt-4">
                <h2 class="text-center">Members</h2>
                <div class="row">
                    <div class="col-md-3">
                        <div class="media mt-4 align-items-center flex-column">
                            <div class="d-flex justify-content-center">
                                <img src="{{asset('images/effrem.jpg')}}" class="img-thumbnail rounded-circle mb-2" alt="Avatar 1" style="width: 300px; height: 300px; object-fit: cover;">
                            </div>
                            <div class="media-body">
                                <h5 class="mt-0 text-center">KOUDOH S.S. Efrem</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="media mt-4 align-items-center flex-column">
                        <div class="d-flex justify-content-center">
                                <img src="{{asset('images/jennifer.jpg')}}" class="img-thumbnail rounded-circle mb-2" alt="Avatar 1" style="width: 300px; height: 300px; object-fit: cover;">
                            </div>
                            <div class="media-body">
                                <h5 class="mt-0 text-center">AWOUNOU Jennifer</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="media mt-4 align-items-center flex-column">
                        <div class="d-flex justify-content-center">
                                <img src="{{asset('images/ronyl.jpg')}}" class="img-thumbnail rounded-circle mb-2" alt="Avatar 1" style="width: 300px; height: 300px; object-fit: cover;">
                            </div>
                            <div class="media-body">
                                <h5 class="mt-0 text-center">NANA KEMAMEN Ronyl Junior</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="media mt-4 align-items-center flex-column">
                        <div class="d-flex justify-content-center">
                                <img src="{{asset('images/samuel.jpg')}}" class="img-thumbnail rounded-circle mb-2" alt="Avatar 1" style="width: 300px; height: 300px; object-fit: cover;">
                            </div>
                            <div class="media-body">
                                <h5 class="mt-0 text-center">AKAKPO Kabinin Onissan Samuel</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



       

        <div id="planning">
    <!-- Restaurant Schedule Section -->
    <div class="container mt-4">
        <h2>Restaurant Schedule</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Day</th>
                    <th scope="col">Opening Hours</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Monday - Friday</td>
                    <td>6:00 PM - 10:00 PM</td>
                </tr>
                <tr>
                    <td>Saturday - Sunday</td>
                    <td>12:00 PM - 3:00 PM / 6:00 PM - 10:00 PM</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Address Section -->
<div class="container mt-4">
    <h2>Address</h2>
    <div class="row">
        <!-- Address -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">The Delight</h5>
                    <p class="card-text">123 Rue de la Gourmandise</p>
                    <p class="card-text">75001 Paris, France</p>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    @endsection