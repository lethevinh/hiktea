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
    // document.getElementById('info').innerHTML = "found " + locations.length + " locations<br>";
    for (i = 0; i < locations.length; i++) {
        var coordStr = locations[i][4];
        var coords = coordStr.split(",");
        var pt = new google.maps.LatLng(parseFloat(coords[0]), parseFloat(coords[1]));
        bounds.extend(pt);
        marker = new google.maps.Marker({
            position: pt,
            map: map,
            icon: locations[i][5],
            address: locations[i][2],
            title: locations[i][0],
            html: locations[i][0] + "<br>" + locations[i][2]
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
            closest = findClosestN(results[0].geometry.location, numberOfResults);
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
    $('.map-item').click(() => {
        let address = $(this).data('address');
        var numberOfResults = 25;
        var numberOfDrivingResults = 5;
        // var address = document.getElementById('address').value;
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
                closest = findClosestN(results[0].geometry.location, numberOfResults);
                // get driving distance
                closest = closest.splice(0, numberOfResults);
                calculateDistances(results[0].geometry.location, closest, numberOfDrivingResults);
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    });
})
// Store Name[0],delivery[1],Address[2],Delivery Zone[3],Coordinates[4] data from FusionTables pizza stores example
var locations = [
    ["John's Pizza", "no", "400 University Ave, Palo Alto, CA", "<Polygon><outerBoundaryIs><LinearRing><coordinates>-122.121277,37.386799,0 -122.158012,37.4168,0 -122.158012,37.448151,0 -122.142906,37.456055,0 -122.118874,37.45224,0 -122.107544,37.437793,0 -122.102737,37.422526,0 -122.113037,37.414618,0 -122.121277,37.386799,0   </coordinates></LinearRing></outerBoundaryIs></Polygon>", "37.447038,-122.160575", "http://maps.google.com/mapfiles/ms/icons/blue.png"],
    ["JJs Express", "yes", "1000 Santa Cruz Ave, Menlo Park, CA", "<Polygon><outerBoundaryIs><LinearRing><coordinates>-122.200928,37.438611,0 -122.158012,37.4168,0 -122.158012,37.448151,0 -122.142906,37.456055,0 -122.144623,37.475948,0 -122.164192,37.481125,0 -122.189255,37.478673,0 -122.208481,37.468319,0 -122.201271,37.438338,0 </coordinates></LinearRing></outerBoundaryIs></Polygon>", "37.448638,-122.187176", "http://maps.google.com/mapfiles/ms/icons/green.png"],
    ["John Paul's Pizzeria", "no", "1100 El Camino Real, Belmont, CA", "<Polygon><outerBoundaryIs><LinearRing><coordinates>-122.304268,37.516534,0 -122.300835,37.505096,0 -122.262383,37.481669,0 -122.242813,37.502917,0 -122.244186,37.534232,0 -122.269249,37.550021,0 -122.291222,37.545122,0 -122.302895,37.537499,0 -122.304268,37.516534,0 </coordinates></LinearRing></outerBoundaryIs></Polygon>", "37.520436,-122.275978", "http://maps.google.com/mapfiles/ms/icons/red.png"],
    ["JJs Express", "yes", "300 E 4th Ave, San Mateo, CA", "<Polygon><outerBoundaryIs><LinearRing><coordinates>-122.304268,37.516534,0 -122.348557,37.538044,0 -122.359886,37.56363,0 -122.364006,37.582405,0 -122.33654,37.589207,0 -122.281609,37.570433,0 -122.291222,37.545122,0 -122.302895,37.537499,0 -122.304268,37.516534,0 </coordinates></LinearRing></outerBoundaryIs></Polygon>", "37.564435,-122.322080", "http://maps.google.com/mapfiles/ms/icons/green.png"],
    ["John's Pizza", "yes", "1400 Broadway Ave, Burlingame, CA", "<Polygon><outerBoundaryIs><LinearRing><coordinates>-122.374306,37.548933,0 -122.348557,37.538044,0 -122.359886,37.56363,0 -122.364006,37.582405,0 -122.33654,37.589207,0 -122.359543,37.59764,0 -122.372246,37.604712,0 -122.417564,37.594648,0 -122.374306,37.548933,0 </coordinates></LinearRing></outerBoundaryIs></Polygon>", "37.584935,-122.366182", "http://maps.google.com/mapfiles/ms/icons/blue.png"],
    ["JJs Express", "yes", "700 San Bruno Ave, San Bruno, CA", "<Polygon><outerBoundaryIs><LinearRing><coordinates>-122.462883,37.628916,0 -122.445374,37.639247,0 -122.426147,37.648762,0 -122.405205,37.642238,0 -122.400055,37.628644,0 -122.392159,37.610696,0 -122.372246,37.604712,0 -122.417564,37.594648,0 -122.462196,37.628644,0  </coordinates></LinearRing></outerBoundaryIs></Polygon>", "37.630934,-122.406883", "http://maps.google.com/mapfiles/ms/icons/green.png"],
    ["JJs Express", "yes", "300 Beach St, San Francisco, CA", "<Polygon><outerBoundaryIs><LinearRing><coordinates>-122.43576,37.790795,0 -122.449493,37.801646,0 -122.425461,37.809784,0 -122.402115,37.811411,0 -122.390442,37.794593,0 -122.408295,37.79188,0 -122.434387,37.789167,0 </coordinates></LinearRing></outerBoundaryIs></Polygon>", "37.807628,-122.413782", "http://maps.google.com/mapfiles/ms/icons/green.png"],
    ["JJs Express", "yes", "1400 Haight St, San Francisco, CA", "<Polygon><outerBoundaryIs><LinearRing><coordinates>-122.463398,37.760266,0 -122.477349,37.774785,0 -122.427349,37.774785,0 -122.429237,37.763658,0 -122.46357,37.760808,0</coordinates></LinearRing></outerBoundaryIs></Polygon>", "37.770129,-122.445082", "http://maps.google.com/mapfiles/ms/icons/green.png"],
    ["JJs Express", "yes", "2400 Mission St, San Francisco, CA", "<Polygon><outerBoundaryIs><LinearRing><coordinates>-122.418766,37.747779,0 -122.425289,37.768951,0 -122.406063,37.769901,0 -122.406063,37.749679,0 -122.418251,37.747508,0 </coordinates></LinearRing></outerBoundaryIs></Polygon>", "37.758630,-122.419082", "http://maps.google.com/mapfiles/ms/icons/green.png"],
    ["JJs Express", "yes", "500 Castro St, Mountain View, CA", "<Polygon><outerBoundaryIs><LinearRing><coordinates>-122.121277,37.386799,0 -122.108917,37.362244,0 -122.077675,37.3385,0 -122.064285,37.378615,0 -122.069778,37.3898,0 -122.076645,37.402619,0 -122.078705,37.411619,0 -122.113037,37.414618,0 -122.121277,37.386799,0  </coordinates></LinearRing></outerBoundaryIs></Polygon>", "37.390040,-122.081573", "http://maps.google.com/mapfiles/ms/icons/green.png"],
    ["John's Pizza", "no", "100 S Murphy Ave, Sunnyvale, CA", "<Polygon><outerBoundaryIs><LinearRing><coordinates>-122.047119,37.33113,0 -122.065315,37.332495,0 -122.077675,37.3385,0 -122.064285,37.378615,0 -122.036819,37.385162,0 -122.006607,37.382162,0 -122.00386,37.342048,0 -122.047119,37.331403,0  </coordinates></LinearRing></outerBoundaryIs></Polygon>", "37.377441,-122.030071", "http://maps.google.com/mapfiles/ms/icons/blue.png"],
    ["John's Pizza", "no", "1200 Curtner Ave, San Jose, CA", "<Polygon><outerBoundaryIs><LinearRing><coordinates>-121.935196,37.345051,0 -121.931076,37.294267,0 -121.871338,37.293721,0 -121.806793,37.293174,0 -121.798553,37.361426,0 -121.879578,37.36088,0 -121.934509,37.345597,0 -121.935196,37.345051,0 </coordinates></LinearRing></outerBoundaryIs></Polygon>", "37.288742,-121.890765", "http://maps.google.com/mapfiles/ms/icons/blue.png"],
    ["John's Pizza", "yes", "700 Blossom Hill Rd, San Jose, CA", "<Polygon><outerBoundaryIs><LinearRing><coordinates>-121.935883,37.253287,0 -121.931076,37.294267,0 -121.871338,37.293721,0 -121.806793,37.293174,0 -121.790657,37.234702,0 -121.852455,37.223221,0 -121.935539,37.253014,0 </coordinates></LinearRing></outerBoundaryIs></Polygon>", "37.250543,-121.846563", "http://maps.google.com/mapfiles/ms/icons/blue.png"],
    ["John's Pizza", "yes", "100 N Milpitas Blvd, Milpitas, CA", "<Polygon><outerBoundaryIs><LinearRing><coordinates>-121.947556,37.435612,0 -121.934509,37.476493,0 -121.893311,37.469409,0 -121.852798,37.429615,0 -121.843872,37.400165,0 -121.887817,37.3898,0 -121.959915,37.420345,0 -121.959915,37.427979,0 -121.948929,37.435612,0 -121.947556,37.435612,0</coordinates></LinearRing></outerBoundaryIs></Polygon>", "37.434113,-121.901139", "http://maps.google.com/mapfiles/ms/icons/blue.png"],
    ["John's Pizza", "yes", "3300 Mowry Blvd, Fremont, CA", "<Polygon><outerBoundaryIs><LinearRing><coordinates>-122.02343,37.52198,0 -122.023773,37.558731,0 -121.989784,37.573426,0 -121.959572,37.566351,0 -121.944466,37.544305,0 -121.967125,37.520891,0 -122.023087,37.522525,0</coordinates></LinearRing></outerBoundaryIs></Polygon>", "37.552773,-121.985153", "http://maps.google.com/mapfiles/ms/icons/blue.png"],
    //New York, NY, USA (40.7127837, -74.00594130000002)
    ["New York, NY, USA", "no", "New York City Hall, New York, NY 10007, USA", "<Polygon><outerBoundaryIs><LinearRing><coordinates>-122.02343,37.52198,0 -122.023773,37.558731,0 -121.989784,37.573426,0 -121.959572,37.566351,0 -121.944466,37.544305,0 -121.967125,37.520891,0 -122.023087,37.522525,0</coordinates></LinearRing></outerBoundaryIs></Polygon>", "40.7127837, -74.0059413", "http://maps.google.com/mapfiles/ms/icons/yellow.png"],
    // Newark, NJ, USA (40.735657, -74.1723667)
    ["Newark, NJ, USA", "no", "169 Market St, Newark, NJ 07102, USA", "<Polygon><outerBoundaryIs><LinearRing><coordinates>-122.02343,37.52198,0 -122.023773,37.558731,0 -121.989784,37.573426,0 -121.959572,37.566351,0 -121.944466,37.544305,0 -121.967125,37.520891,0 -122.023087,37.522525,0</coordinates></LinearRing></outerBoundaryIs></Polygon>", "40.735657, -74.1723667", "http://maps.google.com/mapfiles/ms/icons/yellow.png"],
    // Baltimore, MD, USA (39.2903848, -76.6121893
    ["Baltimore, MD, USA", "no", "201-211 E Fayette St, Baltimore, MD 21202, USA", "<Polygon><outerBoundaryIs><LinearRing><coordinates>-122.02343,37.52198,0 -122.023773,37.558731,0 -121.989784,37.573426,0 -121.959572,37.566351,0 -121.944466,37.544305,0 -121.967125,37.520891,0 -122.023087,37.522525,0</coordinates></LinearRing></outerBoundaryIs></Polygon>", "39.2903848, -76.6121893", "http://maps.google.com/mapfiles/ms/icons/yellow.png"],
    // Boston, MA, USA (42.3600825, -71.05888
    ["Boston, MA, USA", "no", "City Hall Plaza, Boston, MA 02203, USA", "<Polygon><outerBoundaryIs><LinearRing><coordinates>-122.02343,37.52198,0 -122.023773,37.558731,0 -121.989784,37.573426,0 -121.959572,37.566351,0 -121.944466,37.544305,0 -121.967125,37.520891,0 -122.023087,37.522525,0</coordinates></LinearRing></outerBoundaryIs></Polygon>", "42.3600825, -71.05888", "http://maps.google.com/mapfiles/ms/icons/yellow.png"],
    // Philadelphia, PA, USA (39.9525839, -75.16522150000003)
    ["Philadelphia, PA, USA", "no", "1414 PA-611, Philadelphia, PA 19102, USA", "<Polygon><outerBoundaryIs><LinearRing><coordinates>-122.02343,37.52198,0 -122.023773,37.558731,0 -121.989784,37.573426,0 -121.959572,37.566351,0 -121.944466,37.544305,0 -121.967125,37.520891,0 -122.023087,37.522525,0</coordinates></LinearRing></outerBoundaryIs></Polygon>", "39.9525839, -75.1652215", "http://maps.google.com/mapfiles/ms/icons/yellow.png"]
];

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
