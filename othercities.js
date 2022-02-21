function initMap() {
  const Austin = { lat: 30.266666, lng: -97.733330 };
  const SanAntonio = { lat: 29.424349, lng: -98.491142 };
  const Dallas = { lat: 32.779167, lng: -96.808891 };
  const Lubbock = { lat: 33.576698, lng: -101.855072 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 6,
    center: Austin,
  });
  const contentString =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h3 id="firstHeading" class="firstHeading">Austin</h3>' +
    '<div id="bodyContent">' +
    "<p><b>Austin</b> is the capital of Texas, which is where our site is based on." +
    '<p>Austin Residential Recycling Collecting official site: <a href="https://www.austintexas.gov/department/residential-recycling-collection">' +
    "https://www.austintexas.gov/department/residential-recycling-collection</a></p>" +
    "</div>" +
    "</div>";
  const infowindow = new google.maps.InfoWindow({
    content: contentString,
  });
  const marker = new google.maps.Marker({
    position: Austin,
    map,
    title: "Austin",
  });
  marker.addListener("click", () => {
    infowindow.open(map, marker);
  });
  const contentString2 =
    '<div id="content2">' +
    '<div id="siteNotice2">' +
    "</div>" +
    '<h3 id="firstHeading" class="firstHeading">San Antonio</h3>' +
    '<div id="bodyContent">' +
    "<p><b>San Antonio</b> accepted recyclables includes:" +
    '<p><b>Paper: </b>printer paper, cardboard, packaging, and newspaper/magazines</p>' +
    '<p><b>Plastic: </b>bottles, cups, and jugs</p>' +
    '<p><b>Metal: </b>aluminum cans, metal cups, and aerosol cans</p>' +
    '<p><b>Glass: </b>bottles and jars</p>'+
    '<p>Read more about Recycling in San Antonio: <a href="https://www.sanantonio.gov/swmd/recycling/materials">' +
    "www.sanantonio.gov/swmd/recycling/materials</a></p>" +
    "</div>" +
    "</div>";
  const infowindow2 = new google.maps.InfoWindow({
    content: contentString2,
  });
  const marker2 = new google.maps.Marker({
    position: SanAntonio,
    map,
    title: "San Antonio",
  });
  marker2.addListener("click", () => {
    infowindow2.open(map, marker2);
  });
    const contentString3 =
    '<div id="content3">' +
    '<div id="siteNotice3">' +
    "</div>" +
    '<h3 id="firstHeading" class="firstHeading">Dallas</h3>' +
    '<div id="bodyContent">' +
    "<p><b>Dallas</b> accepted recyclables includes:" +
    '<p><b>Paper: </b>Newspapers, magazines, junk mail, etc</p>' +
    '<p><b>Plastic: </b>containers #1-7</p>' +
    '<p><b>Metal: </b>aluminum, tin, and steel</p>' +
    '<p><b>Glass: </b>bottles and jars</p>'+
    '<p>Read more about Recycling in Dallas: <a href="https://dallascityhall.com/departments/sanitation/Pages/recycling.aspx">' +
    "dallascityhall.com/departments/sanitation/Pages/recycling.aspx</a></p>" +
    "</div>" +
    "</div>";
  const infowindow3 = new google.maps.InfoWindow({
    content: contentString3,
  });
  const marker3 = new google.maps.Marker({
    position: Dallas,
    map,
    title: "Dallas",
  });
  marker3.addListener("click", () => {
    infowindow3.open(map, marker3);
  });
  const contentString4 =
    '<div id="content4">' +
    '<div id="siteNotice4">' +
    "</div>" +
    '<h3 id="firstHeading" class="firstHeading">Lubbock</h3>' +
    '<div id="bodyContent">' +
    "<p><b>Lubbock</b> accepted recyclables includes:" +
    '<p><b>Paper: </b>computer paper, white/pastel, shredded paper, and newspaper</p>' +
    '<p><b>Plastic: </b>bottles, #1-2 plastic(opaque/colors)</p>' +
    '<p><b>Metal: </b>most people food cans</p>' +
    '<p><b>Cardboard: </b>corrugate cardboard, boxes, and pasteboard</p>'+
    '<p>Read more about Recycling in Lubbock: <a href="https://ci.lubbock.tx.us/departments/solid-waste-management/recycling-solutions">' +
    "ci.lubbock.tx.us/departments/solid-waste-management/recycling-solutions</a></p>" +
    "</div>" +
    "</div>";
  const infowindow4 = new google.maps.InfoWindow({
    content: contentString4,
  });
  const marker4 = new google.maps.Marker({
    position: Lubbock,
    map,
    title: "Lubbock",
  });
  marker4.addListener("click", () => {
    infowindow4.open(map, marker4);
  });
}