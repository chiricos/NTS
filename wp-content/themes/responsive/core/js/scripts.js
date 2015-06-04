var coordColombia = new google.maps.LatLng(6.1156735,-72.9301367);
var markers = [];
var map;
var marker;
var prev_infowindow = false; 
var iconBase = 'http://www.nts.com.co/wp-content/themes/responsive/core/images/loc_bg.png';
var ciudad;

var barranquilla = [
  ['NTS - TIENDA NAPA LA 38', 10.979531459264354, -74.78660457539365, 1],
  ['NTS - SOLEDAD', 10.9028316, -74.7703911, 17],
  ['NTS - TIENDA NAPA BARRANQUILLA', 10.993473550698587, -74.80453666162407, 1],
];
var monteria = [
	['NTS - MONTERIA', 8.7630722, -75.8813566, 1],
];
var medellin = [
  ['NTS - MEDELLIN (SABANETA)', 6.15905045320699, -75.60707709939732, 1],
];
var mosquera = [
	['NTS - MOSQUERA', 4.702662047673428, -74.22721934976806, 1],
];
var ibague = [
	['NTS - IBAGUE', 4.4475830730426855, -75.16422208598635, 1],
];
var villavicencio = [
  ['VILLAVICENCIO (FEDEARROZ)', 4.128504574798657, -73.62222840818174, 1],
];
var cali = [
  ['NTS - CALI', 3.495073389918302, -76.50834220635988, 1],
];
var cartagena = [
  ['TURBACO', 10.362187337489281, -75.50878089157106, 1],
];
var valledupar = [
  ['Barrio La Granja (Fedearroz)', 10.46395478874976, -73.24694898042605, 1],
];
var cucuta = [
	['NTS - CUCUTA', 7.925895619386007, -72.50118563624574, 1],
];
var bucaramanga = [
  ['NTS - BUCARAMANGA', 7.10577, -73.1190205, 1],
];
var yopal = [
  ['NTS - YOPAL', 5.326340904819226, -72.40621115977171, 1],
];
var duitama = [
	['NTS - DUITAMA', 5.807600209993867, -73.02654292736969, 1], 
];
var bogota = [
	['NTS - BOSA', 4.597197471351211, -74.16493247619627, 1],
	['NTS - VALLADOLID', 4.646467028891933, -74.14828408147582, 1],
];
var neiva = [
  ['NEIVA', 2.92442375680906, -75.28794305014037, 1],
];
var pereira = [
	['NTS - PEREIRA', 4.81620579510876, -75.72021560764006, 1],
];
var pasto = [
	['NTS - PASTO', 1.2038392656654258, -77.27328876295167, 1],
];

var caterpillar=[
	['BARRANQUILLA', 10.99279,-74.77997, 1],
	['FEDEARROZ', 8.75, -75.883333, 1],
	['BARRIO VILLA DEL RIO', 8.764981299999999, -75.87725869999997, 2],
	['Autolarte Sa Sede Aut Sur Chevrolet', 6.18734, -75.58568, 1],
	['MercaRepuestos Ltda', 6.2521056,-75.5771671, 1],
	['Rodar y Rodar', 6.2494157418712195, -75.57798816270446, 1],
	['Liner Internacional Diesel, S.A.S', 6.249309091066388, -75.57870699472045, 1],
	['Caterpartes Ltda', 6.2322409, -75.59234149999997, 1],
	['Mosquera', 4.7292046, -74.2640796, 1],
	['RetecmoDiesel Ltda', 4.694944805352127, -74.17471833858946, 1],
	['IBAGUE FEDEARROZ', 4.434630076777334, -75.20074285813905, 1],
	['IBAGUE', 4.440663, -75.24414100000001, 2],
	['VILLAVICENCIO (FEDEARROZ)', 4.128504574798657, -73.62222840818174, 1],
	['Chevrolet Auto Superior', 3.385516, -76.528828,1],
	['Chevrolet', 3.471391, -76.520888, 1],
	['CENTRO DIESEL REPUESTOS AUTOMOTORES', 1.205361070223598, -77.27777802883605, 1],
	['TURBACO', 10.362187337489281, -75.50878089157106, 1],
	['Barrio La Granja (Fedearroz)', 10.46395478874976, -73.24694898042605, 1],
	['NEW HOLLAND',	 7.895683693520313, -72.50524160555722, 1],
	['REPUESTOS - (la insula)', 7.911687396684106, -72.50849401373898, 2],
	['Codiesel S.A', 7.082785, -73.16828, 1],
	['Taller Alvaro Coronel', 7.105213399999999, -73.1191134, 1],
	['YOPAL', 5.33191265693347, -72.3881148756409, 1],
	['TPS - Truck Parts Service S.A.S. - Duitama', 5.806188279670866, -73.03267918598328, 1],
	['Centro Diesel S.A Chevrolet', 4.638684,-74.120844, 1],
	['Torrepuestos y Cia. Ltda', 4.5997307,-74.0859947, 1],
	['Inversiones La Elite S.A.S', 4.6002372,-74.0867323, 1],
	['Servicio Diesel R.A. Ltda', 4.6641525,-74.1491585, 1],
	['Disrediesel Bogota Ltda',4.603589775213957, -74.09360884702147, 1],
	['Rojas y Tobias Ltda', 4.688856,-74.107543, 1],
	['NEIVA', 2.92442375680906, -75.28794305014037, 1],
	['Chevrolet Caminos', 4.812149,-75.706572, 1],
	['Multiservicios Panamericana - Manizales', 5.047886185026317, -75.52932181083679, 1],
	['Tecni-Diesel del Sur', 1.8533440806108308, -76.04808855344237, 1],
	['Uniteq Diesel Ltda', 5.7502541, -72.9146914, 1],
];
var REDNTS=[
  ['NTS BOSA - TEL: (1) 597 8989', 4.597646632618114, -74.16465352645872, 1],
  ['NTS IBAGUE FEDEARROZ - TEL_ (8) 265 4810', 4.431068061739646, -75.19868292161561, 1],
  ['NTS IBAGUE - TEL: (8) 269 2661', 4.4069962, -75.1685238, 1],
  ['NTS VILLAVICENCIO FEDEARROZ - TEL: (8) 668 2370', 4.129093221005434, -73.6225987995224, 1],
  ['NTS CALI - TEL: (2) 6644220-21', 3.499189,-76.5069091, 1],
  ['NTS SABANETA - TEL: (4) 4485540', 6.158427761012196, -75.60630357528532, 1],
  ['NTS MONTERIA (4) 791 4313', 8.7630722, -75.8813566, 1],
  ['NTS BUCARAMANGA - (7) 646 6695', 7.10577, -73.1190205, 1],
  ['NTS AGROMAQ - TEL: (7) 642 3229', 7.114827171084497, -73.12537932765565, 1],
  ['NTS SOLEDAD - TEL: (5) 367 9300', 10.9028316, -74.7703911, 1],
  ['NTS VALLEDUPAR FEDEARROZ - TEL: 5) 580 6253', 10.46395478874976, -73.24694898042605, 1],
  ['NTS NEIVA - TEL: (8) 870 6507', 2.92442375680906, -75.28794305014037, 1],
  ['NTS FEDEARROZ AGUAZUL -  TEL: (8) 638 2302', 5.1742593, -72.55234710000002, 1],
  ['NTS FEDEARROZ GRANADA - TEL: (8) 658 0825', 3.552482422758718, -73.70980527074738, 1],
  ['NTS FEDEARROZ SAN ALBERTO - TEL: (8) 564 5020', 7.760060652236726, -73.3900113978699, 1],
  ['NTS FEDEARROZ FUNDACION - TEL: (5) 414 0336', 10.524839920081169, -74.18360201244201, 1],
];

function initialize() {
  var mapOptions = {
    zoom: 6,
    center: coordColombia,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}

// Sets the map on all markers in the array.
function setAllMap(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

function setMarkers(map, locations) {
  // Add markers to the map
  for (var i = 0; i < locations.length; i++) {
    var lugar = locations[i];
    var myLatLng = new google.maps.LatLng(lugar[1], lugar[2]);
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: lugar[0],
        zIndex: lugar[3],
        icon: iconBase
    });
  }
}
function capturar(){
  ciudad=document.getElementsByName("list_ciudad")[0].value;
  if(ciudad == 'red_nts'){
    if($('#map_NTS').hasClass('up')){
      $('#map_NTS').removeClass('down');
    }
    else{
      $('#map_NTS').removeClass('down');
      $('#map_NTS').addClass('up');
      $('#map_LUBRIPESADOS').removeClass('up');
      $('#map_LUBRIPESADOS').addClass('down');
    }
  }
  if(ciudad == 'red_lubripesados'){
    if($('#map_LUBRIPESADOS').hasClass('up')){
      $('#map_LUBRIPESADOS').removeClass('down');
    }
    else{
      $('#map_LUBRIPESADOS').removeClass('down');
      $('#map_LUBRIPESADOS').addClass('up');
      $('#map_NTS').removeClass('up');
      $('#map_NTS').addClass('down');
    }
  }
  if(ciudad == 'barranquilla')
  {
    initialize();
    setMarkers(map, barranquilla);
  }
  if(ciudad == 'monteria')
  {
    initialize();
    setMarkers(map, monteria);
  }
  if(ciudad == 'medellin')
  {
    initialize();
    setMarkers(map, medellin);
  }
  if(ciudad == 'mosquera')
  {
    initialize();
    setMarkers(map, mosquera);
  }
  if(ciudad == 'ibague')
  {
    initialize();
    setMarkers(map, ibague);
  }
  if(ciudad == 'villavicencio')
  {
    initialize();
    setMarkers(map, villavicencio);
  }
  if(ciudad == 'cali')
  {
    initialize();
    setMarkers(map, cali);
  }
  if(ciudad == 'cartagena')
  {
    initialize();
    setMarkers(map, cartagena);
  }
  if(ciudad == 'valledupar')
  {
    initialize();
    setMarkers(map, valledupar);
  }
  if(ciudad == 'cucuta')
  {
    initialize();
    setMarkers(map, cucuta);
  }
  if(ciudad == 'bucaramanga')
  {
    initialize();
    setMarkers(map, bucaramanga);
  }
  if(ciudad == 'yopal')
  {
    initialize();
    setMarkers(map, yopal);
  }
  if(ciudad == 'duitama')
  {
    initialize();
    setMarkers(map, duitama);
  }
  if(ciudad == 'bogota')
  {
    initialize();
    setMarkers(map, bogota);
  }
  if(ciudad == 'pasto')
  {
    initialize();
    setMarkers(map, pasto);
  }
  if(ciudad == 'neiva')
  {
    initialize();
    setMarkers(map, neiva);
  }
  if(ciudad == 'caterpillar')
  {
    initialize();
    setMarkers(map, caterpillar);
  }
  if(ciudad == 'pereira')
  {
    initialize();
    setMarkers(map, pereira);
  }
  if(ciudad == 'todas_ciudades')
  {
    initialize();
	setMarkers(map, bogota);
	setMarkers(map, barranquilla);
	setMarkers(map, monteria);
	setMarkers(map, medellin);
	setMarkers(map, mosquera);
	setMarkers(map, ibague);
	setMarkers(map, villavicencio);
	setMarkers(map, cali);
	setMarkers(map, cartagena);
	setMarkers(map, valledupar);
	setMarkers(map, cucuta);
	setMarkers(map, bucaramanga);
	setMarkers(map, yopal);
	setMarkers(map, duitama);
	setMarkers(map, pasto);
	setMarkers(map, neiva);
	setMarkers(map, pereira);
  }
}
function mapa_ubicacion(){
  $("#mapa1").mouseover(function(){
    $("#mapa_ubicacion").addClass("mapa1");
  });
  $("#mapa1").mouseout(function(){
    $("#mapa_ubicacion").removeClass("mapa1");
  });
  $("#mapa2").mouseover(function(){
    $("#mapa_ubicacion").addClass("mapa2");
  });
  $("#mapa2").mouseout(function(){
    $("#mapa_ubicacion").removeClass("mapa2");
  });
  $("#mapa3").mouseover(function(){
    $("#mapa_ubicacion").addClass("mapa3");
  });
  $("#mapa3").mouseout(function(){
    $("#mapa_ubicacion").removeClass("mapa3");
  });
  $("#mapa3_1").mouseover(function(){
    $("#mapa_ubicacion").addClass("mapa3");
  });
  $("#mapa3_1").mouseout(function(){
    $("#mapa_ubicacion").removeClass("mapa3");
  });
  $("#mapa4").mouseover(function(){
    $("#mapa_ubicacion").addClass("mapa4");
  });
  $("#mapa4").mouseout(function(){
    $("#mapa_ubicacion").removeClass("mapa4");
  });
  $("#mapa5").mouseover(function(){
    $("#mapa_ubicacion").addClass("mapa5");
  });
  $("#mapa5").mouseout(function(){
    $("#mapa_ubicacion").removeClass("mapa5");
  });
  $("#mapa5_1").mouseover(function(){
    $("#mapa_ubicacion").addClass("mapa5");
  });
  $("#mapa5_1").mouseout(function(){
    $("#mapa_ubicacion").removeClass("mapa5");
  });
  $("#mapa6").mouseover(function(){
    $("#mapa_ubicacion").addClass("mapa6");
  });
  $("#mapa6").mouseout(function(){
    $("#mapa_ubicacion").removeClass("mapa6");
  });
  $("#mapa7").mouseover(function(){
    $("#mapa_ubicacion").addClass("mapa7");
  });
  $("#mapa7").mouseout(function(){
    $("#mapa_ubicacion").removeClass("mapa7");
  });
  $("#mapa8").mouseover(function(){
    $("#mapa_ubicacion").addClass("mapa8");
  });
  $("#mapa8").mouseout(function(){
    $("#mapa_ubicacion").removeClass("mapa8");
  });
  $("#mapa9").mouseover(function(){
    $("#mapa_ubicacion").addClass("mapa9");
  });
  $("#mapa9").mouseout(function(){
    $("#mapa_ubicacion").removeClass("mapa9");
  });
  $("#mapa10").mouseover(function(){
    $("#mapa_ubicacion").addClass("mapa10");
  });
  $("#mapa10").mouseout(function(){
    $("#mapa_ubicacion").removeClass("mapa10");
  });
  $("#mapa11").mouseover(function(){
    $("#mapa_ubicacion").addClass("mapa11");
  });
  $("#mapa11").mouseout(function(){
    $("#mapa_ubicacion").removeClass("mapa11");
  });
  $("#mapa11_1").mouseover(function(){
    $("#mapa_ubicacion").addClass("mapa11");
  });
  $("#mapa11_1").mouseout(function(){
    $("#mapa_ubicacion").removeClass("mapa11");
  });
  $("#mapa11_2").mouseover(function(){
    $("#mapa_ubicacion").addClass("mapa11");
  });
  $("#mapa11_2").mouseout(function(){
    $("#mapa_ubicacion").removeClass("mapa11");
  });
  $("#mapa12").mouseover(function(){
    $("#mapa_ubicacion").addClass("mapa12");
  });
  $("#mapa12").mouseout(function(){
    $("#mapa_ubicacion").removeClass("mapa12");
  });
  $("#mapa12_1").mouseover(function(){
    $("#mapa_ubicacion").addClass("mapa12");
  });
  $("#mapa12_1").mouseout(function(){
    $("#mapa_ubicacion").removeClass("mapa12");
  });
  $("#mapa13").mouseover(function(){
    $("#mapa_ubicacion").addClass("mapa13");
  });
  $("#mapa13").mouseout(function(){
    $("#mapa_ubicacion").removeClass("mapa13");
  });
  $("#mapa14").mouseover(function(){
    $("#mapa_ubicacion").addClass("mapa14");
  });
  $("#mapa14").mouseout(function(){
    $("#mapa_ubicacion").removeClass("mapa14");
  });
  $("#mapa15").mouseover(function(){
    $("#mapa_ubicacion").addClass("mapa15");
  });
  $("#mapa15").mouseout(function(){
    $("#mapa_ubicacion").removeClass("mapa15");
  });
  $("#mapa16").mouseover(function(){
    $("#mapa_ubicacion").addClass("mapa16");
  });
  $("#mapa16").mouseout(function(){
    $("#mapa_ubicacion").removeClass("mapa16");
  });
  $("#mapa17").mouseover(function(){
    $("#mapa_ubicacion").addClass("mapa17");
  });
  $("#mapa17").mouseout(function(){
    $("#mapa_ubicacion").removeClass("mapa17");
  });
}

jQuery(document).ready(function(){  
    mapa_ubicacion();
  $('.overlay-container3').fadeIn(function() {
      window.setTimeout(function(){
        $('.window-container3').addClass('window-container-visible');
      }, 100);
      
    });
  $('#notice_promo').click(function() {    
    $('.overlay-container2').fadeIn(function() {
      
      window.setTimeout(function(){
        $('.window-container2').addClass('window-container-visible');
      }, 100);
      
    });
  });
  $('#menu-item-11').click(function() {    
    $('.overlay-container2').fadeIn(function() {
      
      window.setTimeout(function(){
        $('.window-container2').addClass('window-container-visible');
      }, 100);
      
    });
  });
  $('.close').click(function() {
    $('.overlay-container2').fadeOut().end().find('.window-container2').removeClass('window-container-visible');
    $('.overlay-container3').fadeOut().end().find('.window-container3').removeClass('window-container-visible');
  });
  var url = document.URL;
  if (url.indexOf('/quienes-somos')!=-1)
  {
    jQuery('#menu-item-37').addClass('current-menu-item');
  }
  if (url.indexOf('/servicios')!=-1)
  {
    jQuery('#menu-item-67').addClass('current-menu-item');
  }
  if (url.indexOf('/equipos')!=-1)
  {
    jQuery('#menu-item-207').addClass('current-menu-item');
  }
  if (url.indexOf('/contactenos')!=-1)
  {
    jQuery('#menu-item-106').addClass('current-menu-item');
  }
	initialize();
	setMarkers(map, bogota);
	setMarkers(map, barranquilla);
	setMarkers(map, monteria);
	setMarkers(map, medellin);
	setMarkers(map, mosquera);
	setMarkers(map, ibague);
	setMarkers(map, villavicencio);
	setMarkers(map, cali);
	setMarkers(map, cartagena);
	setMarkers(map, valledupar);
	setMarkers(map, cucuta);
	setMarkers(map, bucaramanga);
	setMarkers(map, yopal);
	setMarkers(map, duitama);
	setMarkers(map, pasto);
	setMarkers(map, neiva);

  setInterval(function(){
    if(jQuery('#map-canvas').html()==''){
      initialize();
    }
  },100);
  if (url.indexOf('/red-nts-new-holland')!=-1)
  {
    initialize();
    setMarkers(map, REDNTS);
  }
});