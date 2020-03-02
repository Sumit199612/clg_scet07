@extends('layouts.app')
@section('content')

<div class="contact-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="all-contact-area contact-form">
                <form id="contact-form" action="https://d29u17ylf1ylz9.cloudfront.net/polite/mail.php" method="post">
                    <div class="all-contact-text">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="di-na">
                                        <input name="name" class="form-control" type="text" required="" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="di-na mtb-20">
                                        <input name="email" class="form-control" type="email" required="" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="di-na res-1">
                                        <input name="telephone" class="form-control" type="text" required="" placeholder="Tel">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="di-na mt-20">
                                        <input name="subject" class="form-control" type="text" required="" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="tnm-textarea">
                                        <textarea name="message" class="form-control" required="" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="di-na res-1 mt-20">
                                        <input class="wpcf7" type="submit" value="Send">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <p class="form-messege"></p>
            </div>
        </div>
    </div>
</div>
<div class="map-area">
    <div class="contact-map">
        <div id="hastech" ></div>
    </div>
</div>
@endsection
