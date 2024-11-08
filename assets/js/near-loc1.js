let map;
let branchMarkers = [];
const R = 6371.0;
const r = "assets/images/";
let infowindow;

function haversine(lat1, lon1, lat2, lon2) {
    const [radLat1, radLon1, radLat2, radLon2] = [lat1, lon1, lat2, lon2].map(coord => (Math.PI / 180) * coord);
    const dLat = radLat2 - radLat1;
    const dLon = radLon2 - radLon1;
    const a = Math.sin(dLat / 2) ** 2 + Math.cos(radLat1) * Math.cos(radLat2) * Math.sin(dLon / 2) ** 2;
    const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    return R * c;
}

function initMap() {
    map = new google.maps.Map(document.getElementById('map_canvas'), {
        center: { lat: 37.7749, lng: -122.4194 },
        zoom: 6,
    });
    infowindow = new google.maps.InfoWindow();

    const resultElement = document.getElementById('result');
    resultElement.innerHTML = '';
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            position => {
                const userLocation = { lat: position.coords.latitude, lng: position.coords.longitude };
                map.setCenter(userLocation);
                addMarker(userLocation.lat, userLocation.lng, 'Your Location', 'https://maps.google.com/mapfiles/ms/icons/blue-dot.png');

                const branchesWithin100km = [];
                branchLocations.forEach(branch => {
                    const distance = haversine(userLocation.lat, userLocation.lng, branch.latitude, branch.longitude);
                    branchesWithin100km.push({ name: branch.name, latitude: branch.latitude, longitude: branch.longitude, distance: distance, structureofaddress: branch.structureofaddress, stdcodephonecall: branch.stdcodephonecall, branchaddressdetails: branch.branchaddressdetails });
                });

                branchesWithin100km.sort((a, b) => a.distance - b.distance);
                const firstFiveBranches = branchesWithin100km.slice(0, 5);

                firstFiveBranches.forEach(branch => {
                    addMarker(branch.latitude, branch.longitude, 'kotaklife', r + 'map-pointer.png');
                    const marker = branchMarkers[branchMarkers.length - 1];
                    marker.addListener('click', function() {
                        infowindow.setContent(branch.branchaddressdetails);
                        infowindow.open(map, marker);
                    });
                });

                displayBranches(resultElement, firstFiveBranches);
            },
            error => {
                console.error('Error getting location:', error);
            }
        );
    } else {
        console.error('Geolocation is not supported by this browser.');
    }
}

function displayBranches(element, branches) {
    console.log(element.innerHTML);
    element.innerHTML = '';
    if (branches.length > 0) {
        branches.forEach(branch => {
            element.innerHTML += `<div class="branch-list"><h2>${branch.name} <p class="distancekm">${branch.distance.toFixed(2)} KM</p></h2>
                <p>${branch.structureofaddress}</p>
                <div class="dcs">
                    <a class="buttonClick" onclick="getDirections(${branch.latitude}, ${branch.longitude})">
                        <div class="dcs1">
                            <img src="assets/images/mapimages/images/direction.png" alt="" width="24" height="24">
                        </div>
                    </a>
                    <a class="buttonClick" href="tel:${branch.stdcodephonecall}">
                        <div class="dcs1">
                            <img src="assets/images/mapimages/images/call.png" alt="" width="24" height="24">
                        </div>
                    </a>
                    <a class="buttonClick" onclick="shareLocation(${branch.latitude}, ${branch.longitude})">
                        <div class="dcs1">
                            <img src="assets/images/mapimages/images/share.png" alt="" width="24" height="24">
                        </div>
                    </a>
                </div>
            </div>`;
        });
    } else {
        element.innerHTML = `<div class="branch-list"><h2><p>No branches within 100 kilometers.</p></h2></div>`;
    }
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

// Function to get directions
function getDirections(latitude, longitude) {
    window.open(`https://www.google.com/maps/dir/?api=1&destination=${latitude},${longitude}`);
}

// Function to share location
function shareLocation(latitude, longitude) {
    if (navigator.share) {
        navigator.share({
            title: 'Branch Location',
            text: 'Check out this branch location!',
            url: `https://maps.google.com/?q=${latitude},${longitude}`
        }).then(() => console.log('Successfully shared')).catch((error) => console.error('Error sharing:', error));
    } else {
        console.log('Web Share API not supported');
    }
}



function fetchBranchesWithinCity(city, location) {
    const resultElement = document.getElementById('result');
    $.ajax({
        url: base_url + "getMap-Result",
        type: "POST",
        dataType: "JSON",
        data: { cityData: city },
        success: function(result) {
            clearMarkers();
            const branchesWithinCity = [];

            if (result && result.length > 0) {
                result.forEach(branch => {
                    const distance = haversine(location.lat, location.lng, branch.latitude, branch.longitude);
                    branchesWithinCity.push({ name: "Kotak Life Insurance, " + branch.branchArea, latitude: branch.latitude, longitude: branch.longitude, distance: distance, structureofaddress: branch.address, stdcodephonecall: branch.stdcodephonecall, branchaddressdetails: branch.branchaddressdetails });
                });
                infowindow = new google.maps.InfoWindow();

                displayBranches(resultElement, branchesWithinCity);
                branchesWithinCity.forEach(branch => {
                    addMarker(branch.latitude, branch.longitude, 'kotaklife', r + 'map-pointer.png');
                    const marker = branchMarkers[branchMarkers.length - 1];
                    marker.addListener('click', function() {
                        var infoContent = "<div class='info_content'><h3>Kotak Life Insurance, " + branch.branchArea + " Branch</h3><hr/><p><b>Address</b> : <br/>" + branch.address1 + "<br><br>" + branch.stdcodephone1 + "</div>";

                        infowindow.setContent(infoContent);
                        infowindow.open(map, marker);
                    });
                });
            } else {
                resultElement.innerHTML = `<div class="branch-list"><h2><p>No branches within 100 kilometers.</p></h2></div>`;
            }
        },
        error: function(xhr, status, error) {
            console.error("Error fetching data:", error);
            resultElement.innerHTML = "Error fetching data. Please try again later.";
        }
    });
}

function fetchBranchesByPincode(pincode, location) {
    const resultElement = document.getElementById('result');
    resultElement.innerHTML = '';
    $.ajax({
        url: base_url + "getMap-Result-by-pincode",
        type: "POST",
        dataType: "JSON",
        data: { pincode: pincode },
        success: function(result) {
            clearMarkers();
            if (result && result.length > 0) {
                const branchesWithinPincode = result.filter(branch => {
                    const distance = location ? haversine(location.lat, location.lng, branch.latitude, branch.longitude) : null;
                });
                displayBranches(resultElement, branchesWithinPincode);
                branchesWithinPincode.forEach(branch => {
                    addMarker(branch.latitude, branch.longitude, 'kotaklife', r + 'map-pointer.png');
                    const marker = branchMarkers[branchMarkers.length - 1];
                    marker.addListener('click', function() {
                        infowindow.setContent(branch.branchaddressdetails);
                        infowindow.open(map, marker);
                    });
                });
            } else {
                resultElement.innerHTML = `<div class="branch-list"><h2><p>No Branches exists on the given Pincode</p></h2></div>`;
            }
        },
        error: function(xhr, status, error) {
            console.error("Error fetching data:", error);
            resultElement.innerHTML = "Error fetching data. Please try again later.";
        }
    });
}


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
});




$('#cityDD').change(function() {
    $(".pinErr").css("display", "none");
    $(".noBrances").css("display", "none");
    $("#pincodeTxt").val("");

    var city = $(this).val();
    var state = $("#statesDD").val();

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            position => {
                const userLocation = { lat: position.coords.latitude, lng: position.coords.longitude };
                fetchBranchesWithinCity(city, userLocation);
            },
            error => {
                console.error("Error getting user location:", error);
                fetchBranchesWithinCity(city);
            }
        );
    } else {
        console.error("Geolocation not supported");
        fetchBranchesWithinCity(city);
    }
});

$('#searchBtn').click(function() {
    const resultElement = document.getElementById('result');
    resultElement.innerHTML = '';

    var pincode = $("#pincodeTxt").val();
    if (pincode.length === 6 && !isNaN(pincode)) {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                position => {
                    const userLocation = { lat: position.coords.latitude, lng: position.coords.longitude };
                    fetchBranchesByPincode(pincode, userLocation);
                },
                error => {
                    console.error("Error getting user location:", error);
                    fetchBranchesByPincode(pincode);
                }
            );
        } else {
            console.error("Geolocation not supported");
            fetchBranchesByPincode(pincode);
        }
    } else {
        $('.pinErr').show();
    }
});

$('.button-click').click(function() {
    if ($('.button-click').text() == 'Other Branches') {
        $('.button-click').text('Nearest Branches');
        $('.mapForm').removeClass('disdisplay');

        // Google Maps related code
        // Call initMap() or any other relevant functions related to Google Maps initialization or manipulation
        initMap(); // For example, initializing the map
    } else {
        $('.button-click').text('Other Branches');
        $('.mapForm').addClass('disdisplay');

        // Additional actions you might want to take when hiding the map
        // For example, removing markers or clearing the map
        clearMarkers(); // This function clears markers from the map (you need to define it)
    }
});


function clearMarkers() {
    for (let i = 0; i < branchMarkers.length; i++) {
        branchMarkers[i].setMap(null);
    }
    branchMarkers = [];
}