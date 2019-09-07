@extends('layouts.page')
@section('title', "Cửa Hàng")
@section('breadcrumb')
<section class="bg_light_orange breadcrumb_section background_bg bg_fixed bg_size_contain" data-img-src="assets/images/breadcrumb_bg.png">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 text-center">
                <div class="page-title">
                    <h1>Cửa Hàng </h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Cửa Hàng
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
@stop
@section('content')
<section class="menus">
    <div class="container">
        <div class="row">
            <div class="map-info">
                <div class="map-content">
                    <strong> Showroom Cách Mạng Tháng 8 </strong>
                    <p>
                        ĐịaChỉ : 33 Cách Mạng 8, P. Bến Thành, Q.1 <br>
                        SĐT : 0906 741 331 <br>
                        OPEN : Mon - Sat : 8:30AM - 17:30 PM
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-xs-6 col-sm-6 col-lg-3 padding-r-0">
                <ul class="map-list">
                    @foreach($branchs as $branch)
                    <li class="map-item" data-lng='{{$branch->lng}}' data-lat='{{$branch->lat}}' data-address="{{$branch->address}}" data-map-link="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5371665222715!2d106.68968411472937!3d10.770108862255489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3db1bf2759%3A0xfc1de3021d627482!2zTWlzc2hhIE5ndXnhu4VuIFRyw6Np!5e0!3m2!1sen!2s!4v1523167721891">
                        <p>
                            <strong> {{$branch->title}}</strong>
                        </p>
                        <div class="map-content">
                            <strong> {{$branch->title}} </strong>
                            <p>
                                Địa Chỉ: {{$branch->address}} <br>
                                SĐT : 0906 741 221 <br>
                                OPEN : Mon - Sun: 8:30am - 10:00pm
                            </p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-9 col-xs-6 col-sm-6 col-lg-9 padding-f-0">
                <div id="side_bar"></div>
                <div id="imap" style="height: 500px">
                    <!--<iframe id="iframeid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5371665222715!2d106.68968411472937!3d10.770108862255489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3db1bf2759%3A0xfc1de3021d627482!2zTWlzc2hhIE5ndXnhu4VuIFRyw6Np!5e0!3m2!1sen!2s!4v1523167721891" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                    <!--<iframe id="iframeid" width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q={{$branchs[0]->address}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>-->
                </div>
            </div>
            <div id="info"></div>
            <input id="address" type="text" value="Palo Alto, CA"></input>
            <input type="button" value="Search" onclick="codeAddress();"></input>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="heading_s2 mb-3 animation" data-animation="fadeInUp" data-animation-delay="0.1s">
                    <h3>Get In touch</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                <ul class="contact_info contact_info_style2 list_none">
                    <li><span class="ti-mobile"></span>
                        <p>+123 456 7890</p>
                    </li>
                    <li><span class="ti-email"></span><a href="mailto:info@yourmail.com">info@yourmail.com</a></li>
                    <li><span class="ti-location-pin"></span><address>123 Street, Old Trafford, NewYork, USA</address></li>
                </ul>
            </div>
            <div class="col-lg-8 col-md-6 mt-4 mt-lg-0">
                <div class="field_form animation" data-animation="fadeInLeft" data-animation-delay="0.1s">
                    <form method="post" name="enq">
                        <div class="row">
                            <div class="form-group col-lg-6"><input class="form-control" id="first-name" required="required" placeholder="Enter Name *" name="name" type="text"></div>
                            <div class="form-group col-lg-6"><input class="form-control" id="email" required="required" placeholder="Enter Email *" name="email" type="email"></div>
                            <div class="form-group col-12"><input class="form-control" id="subject" placeholder="Enter Subject" name="subject" type="text"></div>
                            <div class="form-group col-lg-12"><textarea class="form-control" id="description" required="required" placeholder="Message *" name="message" rows="5"></textarea></div>
                            <div class="col-lg-12"><button class="btn btn-default" id="submitButton" type="submit" title="Submit Your Message!" name="submit" value="Submit">Submit</button></div>
                            <div class="col-lg-12 text-center">
                                <div class="alert-msg text-center" id="alert-msg"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('scriptsAfterJs')
<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry&key=AIzaSyA33YZiQPMcFw64n-tRPo_mJOdo0DHsO3o"></script>
<script type="text/javascript">
var geocoder = null;
var map = null;
var customerMarker = null;
var gmarkers = [];
var closest = [];
let markers = {!!$branchs!! }

function initialize() {
    // alert("init");
    geocoder = new google.maps.Geocoder();
    map = new google.maps.Map(document.getElementById('imap'), {
        zoom: 9,
        center: new google.maps.LatLng(52.6699927, -0.7274620),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    var infowindow = new google.maps.InfoWindow();
    var marker, i;
    var bounds = new google.maps.LatLngBounds();
    document.getElementById('info').innerHTML = "found " + locations.length + " locations<br>";
    for (i = 0; i < markers.length; i++) {
        let geo = markers[i]
        var pt = new google.maps.LatLng(parseFloat(geo.lat), parseFloat(geo.lng));
        bounds.extend(pt);
        marker = new google.maps.Marker({
            position: pt,
            map: map,
            title: geo.title,
            address: geo.address
        });
        gmarkers.push(marker);
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(marker.html);
                    infowindow.open(map, marker);
                }
            })
            (marker, i));
    }
    map.fitBounds(bounds);

}

function codeAddress() {
    var numberOfResults = 25;
    var numberOfDrivingResults = 5;
    var address = document.getElementById('address').value;
    geocoder.geocode({
        'address': address
    }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            if (customerMarker) customerMarker.setMap(null);
            customerMarker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location
            });
            console.log(results[0].geometry.location.lat(), results[0].geometry.location.lng())
            closest = findClosestN(results[0].geometry.location, numberOfResults);
            console.log(closest)
            // get driving distance
            closest = closest.splice(0, numberOfResults);
            calculateDistances(results[0].geometry.location, closest, numberOfDrivingResults);
        } else {
            alert('Geocode was not successful for the following reason: ' + status);
        }
    });
}

function findClosestN(pt, numberOfResults) {
    var closest = [];
    document.getElementById('info').innerHTML += "processing " + gmarkers.length + "<br>";
    for (var i = 0; i < gmarkers.length; i++) {
        gmarkers[i].distance = google.maps.geometry.spherical.computeDistanceBetween(pt, gmarkers[i].getPosition());
        document.getElementById('info').innerHTML += "process " + i + ":" + gmarkers[i].getPosition().toUrlValue(6) + ":" + gmarkers[i].distance.toFixed(2) + "<br>";
        gmarkers[i].setMap(null);
        closest.push(gmarkers[i]);
    }
    closest.sort(sortByDist);
    return closest;
}

function sortByDist(a, b) {
    return (a.distance - b.distance)
}

function calculateDistances(pt, closest, numberOfResults) {
    var service = new google.maps.DistanceMatrixService();
    var request = {
        origins: [pt],
        destinations: [],
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.METRIC,
        avoidHighways: false,
        avoidTolls: false
    };
    for (var i = 0; i < closest.length; i++) {
        request.destinations.push(closest[i].getPosition());
    }
    service.getDistanceMatrix(request, function(response, status) {
        if (status != google.maps.DistanceMatrixStatus.OK) {
            alert('Error was: ' + status);
        } else {
            var origins = response.originAddresses;
            var destinations = response.destinationAddresses;
            var outputDiv = document.getElementById('side_bar');
            outputDiv.innerHTML = '';

            var results = response.rows[0].elements;
            console.log(results)
            // save title and address in record for sorting
            for (var i = 0; i < closest.length; i++) {
                results[i].title = closest[i].title;
                results[i].address = closest[i].address;
                results[i].idx_closestMark = i;
            }

            results.sort(sortByDistDM);
            for (var i = 0;
                ((i < numberOfResults) && (i < closest.length)); i++) {
                closest[i].setMap(map);
                outputDiv.innerHTML += "<a href='javascript:google.maps.event.trigger(closest[" + results[i].idx_closestMark + "],\"click\");'>" + results[i].title + '</a><br>' + results[i].address + "<br>" + results[i].distance.text + ' appoximately ' + results[i].duration.text + '<br><hr>';
            }
        }
    });
}

function sortByDistDM(a, b) {
    return (a.distance.value - b.distance.value)
}

google.maps.event.addDomListener(window, 'load', initialize);
$(document).ready(() => {
    $('.map-item').click(function() {
        let address = $(this).data('address');
        var numberOfResults = 25;
        var numberOfDrivingResults = 5;
        let lat = $(this).data('lat');
        let lng = $(this).data('lng');

        // var myLatlng = new google.maps.LatLng(37.4418834, -122.14301949999998);
        var myLatlng = new google.maps.LatLng(lat, lng);
        console.log(myLatlng)
        // map.setCenter(myLatlng);
        if (customerMarker) customerMarker.setMap(null);
        customerMarker = new google.maps.Marker({
            map: map,
            position: myLatlng
        });
        closest = findClosestN(myLatlng, numberOfResults);
        // get driving distance
        closest = closest.splice(0, numberOfResults);
        calculateDistances(myLatlng, closest, numberOfDrivingResults);

        // var address = document.getElementById('address').value;
        /* geocoder.geocode({
             'address': address
         }, function(results, status) {
             if (status == google.maps.GeocoderStatus.OK) {
                 map.setCenter(results[0].geometry.location);
                 if (customerMarker) customerMarker.setMap(null);
                 customerMarker = new google.maps.Marker({
                     map: map,
                     position: results[0].geometry.location
                 });
                 closest = findClosestN(results[0].geometry.location, numberOfResults);
                 // get driving distance
                 closest = closest.splice(0, numberOfResults);
                 calculateDistances(results[0].geometry.location, closest, numberOfDrivingResults);
             } else {
                 alert('Geocode was not successful for the following reason: ' + status);
             }
         });*/
    });
})
let locations = []
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
        var pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
        };

        infoWindow.setPosition(pos);
        infoWindow.setContent('Location found.');
        infoWindow.open(map);
        map.setCenter(pos);
    }, function() {
       console.log('1')
    });
} else {
    // Browser doesn't support Geolocation
       console.log('2')

}

</script>
<style type="text/css" media="screen">
iframe {
    width: 100%;
    height: 100%
}

.map-info .map-content {
    display: block;
    padding: 5px;
}

.map-list {
    border: 1px solid #acd6d6;
    height: 500px;
    overflow: scroll;
    list-style-type: circle;
}

.map-item {
    padding: 5px;
    border-bottom: 1px solid #acd6d6;
    cursor: pointer;
}

.map-item:hover,
.map-active {

    background: #d7dbdd;
}

.map-content {
    display: none;
}

</style>
@stop
