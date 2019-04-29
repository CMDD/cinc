@extends('layouts.web')
@section('content')

<section class="ftco-section bg-light ftco-bread">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center">
            <div class="col-md-9 ftco-animate">
                <h1 class="mb-3 bread">Contact Us</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-4 d-flex p-3">
                <div class="info bg-light p-4">
                    <h4>UNITED STATES</h4>
                    <p>Phone<br>3000000- 000000049<br>Email<br>inc@gmail.com</p>
                </div>
            </div>
            <div class="col-md-4 d-flex p-3">
                <div class="info bg-light p-4">
                    <h4>COLOMBIA</h4>
                    <p>Phone<br>3000000- 000000049<br>Email<br>inc@gmail.com</p>
                </div>
            </div>
            <div class="col-md-4 d-flex p-3">
                <div class="info bg-light p-4">
                    <h4>PERÚ</h4>
                    <p>Phone<br>3000000- 000000049<br>Email<br>inc@gmail.com</p>
                </div>
            </div>
            <div class="col-md-4 d-flex p-3">
                <div class="info bg-light p-4">
                    <h4>ARGENTINA</h4>
                    <p>Phone<br>3000000- 000000049<br>Email<br>inc@gmail.com</p>
                </div>
            </div>
            <div class="col-md-4 d-flex p-3">
                <div class="info bg-light p-4">
                    <h4>MÉXICO</h4>
                    <p>Phone<br>3000000- 000000049<br>Email<br>inc@gmail.com</p>
                </div>
            </div>
            <div class="col-md-4 d-flex p-3">
                <div class="info bg-light p-4">
                    <h4>BRASIL</h4>
                    <p>Phone<br>3000000- 000000049<br>Email<br>inc@gmail.com</p>
                </div>
            </div>
            <div class="col-md-4 d-flex p-3">
                <div class="info bg-light p-4">
                    <h4>CHILE</h4>
                    <p>Phone<br>3000000- 000000049<br>Email<br>inc@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-6 p-0 order-md-last d-flex">
                <form action="#" class="bg-light p-4 contact-form">
                    <div class="form-group">
                        <span>Name</span>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <span>Email Address</span>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <span>Phone</span>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <span>Country</span>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <span>Your message</span>
                        <textarea name="" id="" cols="30" rows="7" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send" class="btn btn-primary py-2 px-4">
                    </div>
                </form>

            </div>

            <div class="col-md-6 p-0 d-flex">
                <div id="map" class="bg-light"></div>
            </div>
        </div>
    </div>
</section>
@stop
