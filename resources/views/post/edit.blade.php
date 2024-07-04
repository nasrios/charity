@extends('layouts.nowhere')
@section('content')
<section class="contact-section">
    <div class="container">
        <!-- <div class="d-none d-sm-block mb-5 pb-4">
            <div id="map" style="height: 480px; position: relative; overflow: hidden;"></div>
            <script>
                function initMap() {
                    var uluru = {
                        lat: -25.363,
                        lng: 131.044
                    };
                    var grayStyles = [{
                            featureType: "all",
                            stylers: [{
                                    saturation: -90
                                },
                                {
                                    lightness: 50
                                }
                            ]
                        },
                        {
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#ccdee9'
                            }]
                        }
                    ];
                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: {
                            lat: -31.197,
                            lng: 150.744
                        },
                        zoom: 9,
                        styles: grayStyles,
                        scrollwheel: false
                    });
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&ampcallback=initMap">
            </script>

        </div> -->


        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Edit Post</h2>
            </div>
            <div class="col-lg-8">
                <form method="POST" action="{{route('posts.update',$post->id)}}" class="form-contact contact_form" enctype="multipart/form-data"  >
                    @csrf
                    @method('PUT')
                    <div class="row">
                         <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="title" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter title">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="description" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter description"></textarea>
                            </div>
                        </div> 
                        <div class="mb-3">
                            <label for="formFile" class="form-label">select picture</label>
                            <input class="form-control" name="picture" type="file" id="formFile">
                          </div> 
                    </div>
                    
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                    </div>
                    
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Buttonwood, California.</h3>
                        <p>Rosemead, CA 91770</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>+1 253 565 2365</h3>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>support@colorlib.com</h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection