// Haversine formula for calculating distance between two coordinates
let map;

function haversine(lat1, lon1, lat2, lon2) {
    const R = 6371.0;
    const [radLat1, radLon1, radLat2, radLon2] = [lat1, lon1, lat2, lon2].map(coord => (Math.PI / 180) * coord);
    const dLat = radLat2 - radLat1;
    const dLon = radLon2 - radLon1;
    const a = Math.sin(dLat / 2) ** 2 + Math.cos(radLat1) * Math.cos(radLat2) * Math.sin(dLon / 2) ** 2;
    const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    return R * c;
}
let branchMarkers = []; // Array to store branch markers
var r = "assets/images/";
let infowindow;
let openInfoWindow = null;


// Function to initialize the map and find branches within 100 km
function initMap() {
    const locationDeniedMessage = document.getElementById('location_denied_message');
    // constaClear existing markers before adding new ones

    // Create a new map centered at default coordinates
    map = new google.maps.Map(document.getElementById('map_canvas'), {
        center: { lat: 20.5937, lng: 78.9629 },
        zoom: 6,
    });

    // Check if geolocation is supported
    if (navigator.geolocation) {
        // Get the user's current position
        navigator.geolocation.getCurrentPosition(
            position => {
                const userLocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                // Set map center to user's location
                map.setCenter(userLocation);

                // Mark user location on the map with a blue dot
                const userMarker = new google.maps.Marker({
                    position: userLocation,
                    map: map,
                    title: 'Your Location',
                    icon: 'https://maps.google.com/mapfiles/ms/icons/blue-dot.png'
                });

                // Array to store branches within 500 km
                const branchesWithin100km = [];
                branchLocations.forEach(branch => {
                    // Calculate distance between user and branch
                    const distance = haversine(userLocation.lat, userLocation.lng, branch.latitude, branch.longitude);

                    // Check if branch is within 500 km
                    branchesWithin100km.push({ name: branch.name, latitude: branch.latitude, longitude: branch.longitude, distance: distance, structureofaddress: branch.structureofaddress, stdcodephonecall: branch.stdcodephonecall, branchaddressdetails: branch.branchaddressdetails });

                });

                branchesWithin100km.sort((a, b) => a.distance - b.distance);

                const firstFiveBranches = branchesWithin100km.slice(0, 5);

                // Iterate through each branch
                firstFiveBranches.forEach(branch => {
                    branch_title = 'kotaklife';

                    addMarker(branch.latitude, branch.longitude, 'kotaklife', r + 'map-pointer.png');

                    let marker = branchMarkers[branchMarkers.length - 1];

                    // Create a marker for each branch on the map with the default marker
                    marker = new google.maps.Marker({
                        position: { lat: branch.latitude, lng: branch.longitude },
                        map: map,
                        title: branch_title,
                        icon: r + "map-pointer.png"

                    });

                    // Add click event to show info window on marker
                    marker.addListener('click', function() {
                        if (openInfoWindow) {
                            openInfoWindow.close();
                        }
                        const infowindow = new google.maps.InfoWindow({
                            content: `
                            ${branch.branchaddressdetails}
                            `
                        });
                        infowindow.open(map, marker);
                        openInfoWindow = infowindow;

                    });
                });

                // Display user location and branch information
                const resultElement = document.getElementById('result');

                // Uncomment the line below if you want to display user location coordinates
                // resultElement.innerHTML = `Your location: ${userLocation.lat}, ${userLocation.lng}<br>`;

                if (firstFiveBranches.length > 0) {
                    firstFiveBranches.forEach(branch => {
                        resultElement.innerHTML += `<div class="branch-list"><h2>${branch.name} <p class="distancekm">${branch.distance.toFixed(2)} KM</p></h2>

                                    <!--<div class="star_ratings">-->
                                      <!--  <p>4.5</p><!-- Star Rating HTML -->
                                        <!--<div class="star-rating">
                                            <input type="checkbox" id="star5" name="rating" value="5" checked>
                                            <label for="star5">&#9733;</label>
                                            <input type="checkbox" id="star4" name="rating" value="4" checked>
                                            <label for="star4">&#9733;</label>
                                            <input type="checkbox" id="star3" name="rating" value="3" checked>
                                            <label for="star3">&#9733;</label>
                                            <input type="checkbox" id="star2" name="rating" value="2" checked>
                                            <label for="star2">&#9733;</label>
                                            <input type="checkbox" id="star1" name="rating" value="1" checked>
                                            <label for="star1">&#9733;</label>
                                        </div>
                                        <p>(6)</p>
                                    </div>-->
                                    <p>${branch.structureofaddress}</p>
                                    <div class="dcs">
                                    <a class="buttonClick" onclick="getDirections(${branch.latitude}, ${branch.longitude})">
                                    <div class="dcs1">
                                        <img src="assets/images/mapimages/images/direction.png" alt="" width="24" height="24">
                                    </div>
                                </a>
                               <!-- <a class="buttonClick" href="tel:${branch.stdcodephonecall}">
                                    <div class="dcs1">
                                        <img src="assets/images/mapimages/images/call.png" alt="" width="24" height="24">
                                    </div>
                                </a>-->
                                <a class="buttonClick" onclick="shareLocation(${branch.latitude}, ${branch.longitude})">
                                    <div class="dcs1">
                                        <img src="assets/images/mapimages/images/share.png" alt="" width="24" height="24">
                                       
                                    </div>
                                </a>
                                    </div>
                            </div>
                                `;
                    });
                } else {
                    resultElement.innerHTML = `<div class="branch-list"><h2><p>No branches within 100 kilometers.</h2></div>`;
                }
            },
            error => {
                console.error('Error getting location:', error);
                locationDeniedMessage.style.display = 'block';


                //  console.error('Error getting location:', error);
            }
        );
    } else {

        console.error('Error getting location:', error);
        locationDeniedMessage.style.display = 'block';


        // console.error('Geolocation is not supported by this browser.');
    }
}


// Function to get directions
function getDirections(latitude, longitude) {
    // You can implement the logic to open a map with directions here
    // For example, you can open Google Maps with the following URL:
    window.open(`https://www.google.com/maps/dir/?api=1&destination=${latitude},${longitude}`);
}

// Function to share location
function shareLocation(latitude, longitude) {
    // You can implement the logic to share the location here
    // For example, you can use the Web Share API if supported
    if (navigator.share) {
        navigator.share({
                title: 'Branch Location',
                text: 'Check out this branch location!',
                url: `https://maps.google.com/?q=${latitude},${longitude}`
            })
            .then(() => console.log('Successfully shared'))
            .catch((error) => console.error('Error sharing:', error));
    } else {
        // Fallback for browsers that do not support Web Share API
        console.log('Web Share API not supported');
    }
}

$('.button-click').click(function() {
    if ($('.button-click').text() == 'Other Branches') {
        $('.button-click').text('Nearest Branches');
        $('.mapForm').removeClass('disdisplay');
    } else {
        $('.button-click').text('Other Branches');
        $('.mapForm').addClass('disdisplay');
        // Create a new map centered at default coordinates
        map = new google.maps.Map(document.getElementById('map_canvas'), {
            center: { lat: 20.5937, lng: 78.9629 },
            zoom: 6,
        });
        clearMarkers();

        // Check if geolocation is supported
        if (navigator.geolocation) {
            // Get the user's current position
            navigator.geolocation.getCurrentPosition(
                position => {
                    const userLocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    // Set map center to user's location
                    map.setCenter(userLocation);

                    // Mark user location on the map with a blue dot
                    const userMarker = new google.maps.Marker({
                        position: userLocation,
                        map: map,
                        title: 'Your Location',
                        icon: 'https://maps.google.com/mapfiles/ms/icons/blue-dot.png'
                    });

                    // Array to store branches within 500 km
                    const branchesWithin100km = [];
                    branchLocations.forEach(branch => {
                        // Calculate distance between user and branch
                        const distance = haversine(userLocation.lat, userLocation.lng, branch.latitude, branch.longitude);

                        // Check if branch is within 500 km
                        branchesWithin100km.push({ name: branch.name, latitude: branch.latitude, longitude: branch.longitude, distance: distance, structureofaddress: branch.structureofaddress, stdcodephonecall: branch.stdcodephonecall, branchaddressdetails: branch.branchaddressdetails });

                    });

                    branchesWithin100km.sort((a, b) => a.distance - b.distance);

                    const firstFiveBranches = branchesWithin100km.slice(0, 5);

                    // Iterate through each branch
                    firstFiveBranches.forEach(branch => {
                        addMarker(branch.latitude, branch.longitude, 'kotaklife', r + 'map-pointer.png');
                        let marker = branchMarkers[branchMarkers.length - 1];



                        // Create a marker for each branch on the map with the default marker
                        marker = new google.maps.Marker({
                            position: { lat: branch.latitude, lng: branch.longitude },
                            map: map,
                            title: branch_title,
                            icon: r + "map-pointer.png"

                        });

                        // Add click event to show info window on marker
                        marker.addListener('click', function() {
                            if (openInfoWindow) {
                                openInfoWindow.close();
                            }
                            const infowindow = new google.maps.InfoWindow({
                                content: `
                            ${branch.branchaddressdetails}
                            `
                            });

                            infowindow.open(map, marker);
                            openInfoWindow = infowindow;

                        });
                    });

                    // Display user location and branch information
                    const resultElement = document.getElementById('result');
                    resultElement.innerHTML = ''; // Clear previous content

                    // Uncomment the line below if you want to display user location coordinates
                    // resultElement.innerHTML = `Your location: ${userLocation.lat}, ${userLocation.lng}<br>`;

                    if (firstFiveBranches.length > 0) {
                        firstFiveBranches.forEach(branch => {
                            resultElement.innerHTML += `<div class="branch-list"><h2>${branch.name} <p class="distancekm">${branch.distance.toFixed(2)} KM</p></h2>

                                    <!--<div class="star_ratings">-->
                                      <!--  <p>4.5</p><!-- Star Rating HTML -->
                                        <!--<div class="star-rating">
                                            <input type="checkbox" id="star5" name="rating" value="5" checked>
                                            <label for="star5">&#9733;</label>
                                            <input type="checkbox" id="star4" name="rating" value="4" checked>
                                            <label for="star4">&#9733;</label>
                                            <input type="checkbox" id="star3" name="rating" value="3" checked>
                                            <label for="star3">&#9733;</label>
                                            <input type="checkbox" id="star2" name="rating" value="2" checked>
                                            <label for="star2">&#9733;</label>
                                            <input type="checkbox" id="star1" name="rating" value="1" checked>
                                            <label for="star1">&#9733;</label>
                                        </div>
                                        <p>(6)</p>
                                    </div>-->
                                    <p>${branch.structureofaddress}</p>
                                    <div class="dcs">
                                    <a class="buttonClick" onclick="getDirections(${branch.latitude}, ${branch.longitude})">
                                    <div class="dcs1">
                                        <img src="assets/images/mapimages/images/direction.png" alt="" width="24" height="24">
                                    </div>
                                </a>
                              <!--  <a class="buttonClick" href="tel:${branch.stdcodephonecall}">
                                    <div class="dcs1">
                                        <img src="assets/images/mapimages/images/call.png" alt="" width="24" height="24">
                                    </div>
                                </a>-->
                                <a class="buttonClick" onclick="shareLocation(${branch.latitude}, ${branch.longitude})">
                                    <div class="dcs1">
                                        <img src="assets/images/mapimages/images/share.png" alt="" width="24" height="24">
                                       
                                    </div>
                                </a>
                                    </div>
                            </div>
                                `;
                        });
                    } else {
                        resultElement.innerHTML = `<div class="branch-list"><h2><p>No branches within 100 kilometers.</h2></div>`;
                    }
                },
                error => {
                    console.error('Error getting location:', error);
                }
            );
        } else {
            console.error('Geolocation is not supported by this browser.');
        }
    }
});



$("#statesDD").change(function() {
    $("#cityDD").val("City");
    $(".citySel").text("City");
    var stateData = $(this).val();

    if (stateData !== "") {
        $.ajax({
            url: base_url + "bind-Cities-detials",
            type: "POST",
            dataType: "JSON",
            data: { stateData: stateData }, // Use object notation for data
            success: function(response) {
                $("#cityDD").html(response); // Assuming response is the HTML content to populate city dropdown
            }
        });
    } else {
        $("#cityDD").html("");
    }
}); // Function to handle city selection change
var c = [];
$('#cityDD').change(function() {
    $(".pinErr").css("display", "none");
    $(".noBrances").css("display", "none");
    $("#pincodeTxt").val("");
    clearMarkers();

    var city = $(this).val(); // Use $(this) to reference the element that triggered the event
    var state = $("#statesDD").val();

    const resultElement = document.getElementById('result');

    // Initialize userLocation object outside of the AJAX success callback
    let userLocation;

    if (navigator.geolocation) {
        // Get the user's current position
        navigator.geolocation.getCurrentPosition(
            position => {
                userLocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                // Call your AJAX request inside the success callback of getCurrentPosition
                sendAjaxRequest(userLocation);
            },
            error => {
                console.error("Error getting user location:", error);

                // If geolocation fails, send the AJAX request without userLocation
                sendAjaxRequest();
            }
        );
    } else {
        console.error("Geolocation not supported");

        // If geolocation is not supported, send the AJAX request without userLocation
        sendAjaxRequest();
    }

    // Import MarkerClusterer from @googlemaps/markerclusterer

    function sendAjaxRequest(location) {
        $.ajax({
            url: base_url + "getMap-Result",
            type: "POST",
            dataType: "JSON",
            data: { cityData: city }, // Use object syntax for data
            success: function(result) {
                map = new google.maps.Map(document.getElementById('map_canvas'), {
                    center: { lat: 20.5937, lng: 78.9629 },
                    zoom: 6,
                });
                clearMarkers();
                // Clear existing markers before adding new ones
                if (result && result.length > 0) {
                    resultElement.innerHTML = ''; // Clear previous content
                    branch_title = 'kotaklife';
                    result.forEach(function(branch) {
                        branch.distance = location ? haversine(location.lat, location.lng, branch.latitude, branch.longitude) : null;
                    });

                    // Sort branches based on distance in ascending order
                    result.sort((a, b) => a.distance - b.distance);
                    result.forEach(function(branch) {
                        var position = new google.maps.LatLng(branch.latitude, branch.longitude);

                        addMarker(branch.latitude, branch.longitude, 'kotaklife', r + 'map-pointer.png');
                        let marker = branchMarkers[branchMarkers.length - 1];

                        // Calculate distance only if userLocation is available
                        const distance = location ? haversine(location.lat, location.lng, branch.latitude, branch.longitude) : null;

                        marker = new google.maps.Marker({
                            position: position,
                            map: map, // Assuming `map` is the map object
                            title: branch_title,
                            icon: r + "map-pointer.png"
                        });
                        var s = new google.maps.InfoWindow;

                        google.maps.event.addListener(marker, "click", function() {
                            if (openInfoWindow) {
                                openInfoWindow.close();
                            }
                            var infoContent = "<div class='info_content'><h3 class='kli-b'>Kotak Life Insurance, " + branch.branchArea + " Branch</h3><p class='kli-address'><b>Address</b> : " + branch.address1 + branch.stdcodephone1 + "</div>";
                            s.setContent(infoContent);
                            s.open(map, marker);
                            openInfoWindow = s;

                        });

                        map.setCenter(marker.getPosition());
                        if (distance != null) {
                            var azax = '<p class="distancekm">' + distance.toFixed(2) + ' KM</p>';
                        } else {
                            var azax = "";
                        }
                        resultElement.innerHTML += `<div class="branch-list"><h2>Kotak Life Insurance, ${branch.branchArea} Branch ${azax}</h2>
                        

                    <!--<div class="star_ratings">-->
                      <!--  <p>4.5</p><!-- Star Rating HTML -->
                        <!--<div class="star-rating">
                            <input type="checkbox" id="star5" name="rating" value="5" checked>
                            <label for="star5">&#9733;</label>
                            <input type="checkbox" id="star4" name="rating" value="4" checked>
                            <label for="star4">&#9733;</label>
                            <input type="checkbox" id="star3" name="rating" value="3" checked>
                            <label for="star3">&#9733;</label>
                            <input type="checkbox" id="star2" name="rating" value="2" checked>
                            <label for="star2">&#9733;</label>
                            <input type="checkbox" id="star1" name="rating" value="1" checked>
                            <label for="star1">&#9733;</label>
                        </div>
                        <p>(6)</p>
                    </div>-->
                    <p>${branch.address}</p>
                    <div class="dcs">
                    <a class="buttonClick" onclick="getDirections(${branch.latitude}, ${branch.longitude})">
                    <div class="dcs1">
                        <img src="assets/images/mapimages/images/direction.png" alt="" width="24" height="24">
                    </div>
                </a>
                <!--<a class="buttonClick" href="tel:${branch.phonenumber}">
                    <div class="dcs1">
                        <img src="assets/images/mapimages/images/call.png" alt="" width="24" height="24">
                    </div>
                </a>-->
                <a class="buttonClick" onclick="shareLocation(${branch.latitude}, ${branch.longitude})">
                    <div class="dcs1">
                        <img src="assets/images/mapimages/images/share.png" alt="" width="24" height="24">
                       
                    </div>
                </a>
                    </div>
            </div>
                `;
                    });

                    // After all markers are created, initialize MarkerClusterer
                    var markerCluster = new MarkerClusterer(map, branchMarkers, {
                        imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m',
                        gridSize: 50, // Adjust the grid size as needed
                        maxZoom: 15, // Maximum zoom level at which clustering occurs
                    });

                } else {
                    resultElement.innerHTML = `<div class="branch-list"><h2><p>No branches Available.</h2></div>`;
                }
            },
            error: function(xhr, status, error) {
                console.error("Error fetching data:", error);
                resultElement.innerHTML = "Error fetching data. Please try again later.";
            }
        });
    }

});









// Function to handle pincode submission
$('#searchBtn').click(function() {
    const resultElement = document.getElementById('result');
    resultElement.innerHTML = ''; // Clear previous content
    // Initialize userLocation object outside of the AJAX success callback
    let userLocation;

    if (navigator.geolocation) {
        // Get the user's current position
        navigator.geolocation.getCurrentPosition(
            position => {
                userLocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                // Call your AJAX request inside the success callback of getCurrentPosition
            },
            error => {
                console.error("Error getting user location:", error);

                // If geolocation fails, send the AJAX request without userLocation
            }
        );

        var pincode = $("#pincodeTxt").val();
        if (pincode.length === 6 && !isNaN(pincode)) {

            $.ajax({
                url: base_url + "getMap-Result-by-pincode",
                type: "POST",
                dataType: "JSON",
                data: "pincode=" + pincode,
                success: function(result) {
                    map = new google.maps.Map(document.getElementById('map_canvas'), {
                        center: { lat: 20.5937, lng: 78.9629 },
                        zoom: 6,
                    });
                    clearMarkers();
                    // Clear existing markers before adding new ones
                    if (result && result.length > 0) {
                        resultElement.innerHTML = ''; // Clear previous content
                        branch_title = 'kotaklife';
                        result.forEach(function(branch) {
                            branch.distance = userLocation ? haversine(userLocation.lat, userLocation.lng, branch.latitude, branch.longitude) : null;
                        });
                        // Sort branches based on distance in ascending order
                        result.sort((a, b) => a.distance - b.distance);

                        result.forEach(function(branch) {
                            var position = new google.maps.LatLng(branch.latitude, branch.longitude);

                            addMarker(branch.latitude, branch.longitude, 'kotaklife', r + 'map-pointer.png');
                            let marker = branchMarkers[branchMarkers.length - 1];

                            // Calculate distance only if userLocation is available
                            const distance = userLocation ? haversine(userLocation.lat, userLocation.lng, branch.latitude, branch.longitude) : null;

                            marker = new google.maps.Marker({
                                position: position,
                                map: map, // Assuming `map` is the map object
                                title: branch_title,
                                icon: r + "map-pointer.png"
                            });
                            var s = new google.maps.InfoWindow;

                            google.maps.event.addListener(marker, "click", function() {

                                if (openInfoWindow) {
                                    openInfoWindow.close();
                                }
                                var infoContent = "<div class='info_content'><h3 class='kli-b'>Kotak Life Insurance, " + branch.branchArea + " Branch</h3><p kli-address><b>Address</b> : " + branch.address1 + branch.stdcodephone1 + "</div>";
                                s.setContent(infoContent);
                                s.open(map, marker);
                                openInfoWindow = s;
                            });

                            map.setCenter(marker.getPosition());
                            if (distance != null) {
                                var azax = '<p class="distancekm">' + distance.toFixed(2) + ' KM</p>';
                            } else {
                                var azax = "";
                            }
                            resultElement.innerHTML += `<div class="branch-list"><h2>Kotak Life Insurance, ${branch.branchArea} Branch ${azax}</h2>
                           
                        <!--<div class="star_ratings">-->
                          <!--  <p>4.5</p><!-- Star Rating HTML -->
                            <!--<div class="star-rating">
                                <input type="checkbox" id="star5" name="rating" value="5" checked>
                                <label for="star5">&#9733;</label>
                                <input type="checkbox" id="star4" name="rating" value="4" checked>
                                <label for="star4">&#9733;</label>
                                <input type="checkbox" id="star3" name="rating" value="3" checked>
                                <label for="star3">&#9733;</label>
                                <input type="checkbox" id="star2" name="rating" value="2" checked>
                                <label for="star2">&#9733;</label>
                                <input type="checkbox" id="star1" name="rating" value="1" checked>
                                <label for="star1">&#9733;</label>
                            </div>
                            <p>(6)</p>
                        </div>-->
                        <p>${branch.address}</p>
                        <div class="dcs">
                        <a class="buttonClick" onclick="getDirections(${branch.latitude}, ${branch.longitude})">
                        <div class="dcs1">
                            <img src="assets/images/mapimages/images/direction.png" alt="" width="24" height="24">
                        </div>
                    </a>
                    <!--<a class="buttonClick" href="tel:${branch.phonenumber}">
                        <div class="dcs1">
                            <img src="assets/images/mapimages/images/call.png" alt="" width="24" height="24">
                        </div>
                    </a>-->
                    <a class="buttonClick" onclick="shareLocation(${branch.latitude}, ${branch.longitude})">
                        <div class="dcs1">
                            <img src="assets/images/mapimages/images/share.png" alt="" width="24" height="24">
                           
                        </div>
                    </a>
                        </div>
                </div>
                    `;
                        });
                    } else {
                        resultElement.innerHTML = `<div class="branch-list"><h2><p>No Branches exists on the given Pincode</h2></div>`;
                    }
                },

                error: function(xhr, status, error) {
                    console.error("Error fetching data:", error);
                    resultElement.innerHTML = "Error fetching data. Please try again later.";

                }
            });

        } else {
            // Invalid pincode, show error message

            resultElement.innerHTML = `<div class="branch-list"><h2><p>Invalid Picode entered Please check and  try correct Pincode</h2></div>`;
        }
    } else {
        console.error("Geolocation not supported");
        // If geolocation is not supported, send the AJAX request without userLocation
    }
});



function clearMarkers() {
    for (let i = 0; i < branchMarkers.length; i++) {
        branchMarkers[i].setMap(null);
    }

    branchMarkers = [];
}

function addMarker(latitude, longitude, title, icon) {
    const position = new google.maps.LatLng(latitude, longitude);
    const marker = new google.maps.Marker({
        position: position,
        map: map,
        title: title,
        icon: icon
    });

    branchMarkers.push(marker);
}