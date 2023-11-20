"use strict";
var plants = [
    {name: 'KOLKATA', coords: [22.5726, 88.3639]},
    {name: 'Ahmedabad', coords: [23.0225, 72.5714]},
    {name: 'Delhi', coords: [28.7041, 77.1025]},
    {name: 'Indore', coords: [22.3196, 75.8577]},
    {name: 'Hyderabad', coords: [17.3850, 78.4867]},
    {name: 'Mumbai', coords: [18.9256, 72.8242]},
    {name: 'Chennai', coords: [13.0827, 80.2707]},
    {name: 'Jaipur', coords: [26.9124,  75.7873]},
    {name: 'Nagpur', coords: [21.1458,  79.0882]},
    {name: 'Pune', coords: [18.5204,  73.8567]}
  ];
$('#visitorMap').vectorMap({
  map: 'in_merc',
  backgroundColor: '#FFF',
  borderColor: '#383f47',
  borderOpacity: .8,
  borderWidth: 1,
  hoverColor: '#808080',
  hoverOpacity: .8,
  color: '#808080',
  normalizeFunction: 'linear',
  selectedRegions: true,
  showTooltip: true,
  pins: {
    id: '<div class="jqvmap-circle"></div>',
    my: '<div class="jqvmap-circle"></div>',
    th: '<div class="jqvmap-circle"></div>',
    sy: '<div class="jqvmap-circle"></div>',
    eg: '<div class="jqvmap-circle"></div>',
    ae: '<div class="jqvmap-circle"></div>',
    nz: '<div class="jqvmap-circle"></div>',
    tl: '<div class="jqvmap-circle"></div>',
    ng: '<div class="jqvmap-circle"></div>',
    si: '<div class="jqvmap-circle"></div>',
    pa: '<div class="jqvmap-circle"></div>',
    au: '<div class="jqvmap-circle"></div>',
    ca: '<div class="jqvmap-circle"></div>',
    tr: '<div class="jqvmap-circle"></div>',
  },
  // scaleColors: ['#FF0000', '#c2c2c2'],
  onRegionClick: function(element, code, region) {
    var opts = {
      title: 'Choosed',
      message: 'You clicked "'
      + region
      + '" which has the code: '
      + code.toUpperCase()
    };

    iziToast.info(opts);
  },
  regionStyle: {
    initial: {
      fill: 'grey',
      "fill-opacity": 1,
      stroke: 'none',
      "stroke-width": 0,
      "stroke-opacity": 1
    },
  },
  markers: plants.map(function(h){ return {name: h.name, latLng: h.coords} }),
  labels: {
    markers: {
      render: function(index){
        return plants[index].name;
      }
    }
},
// markerStyle: {
//   initial: {
//     fill: '#FF0000',
//     stroke: '#c2c2c2'
//   }
// },
});


// =================================================================  index page js  ==============================================================
function hover(element) {
  element.setAttribute('src', 'http://dummyimage.com/100x100/eb00eb/fff');
}

function unhover(element) {
  element.setAttribute('src', 'http://dummyimage.com/100x100/000/fff');
}



$("#client_stories_1").mouseover(function (e) {    
  $(this).attr("src", $(this).attr("src").replace("ecovis_new_images/baggingoutcomes_b.jpg", "ecovis_new_images/baggingoutcomes_r.jpg"));
}).mouseout(function (e) {
  $(this).attr("src", $(this).attr("src").replace("ecovis_new_images/baggingoutcomes_r.jpg", "ecovis_new_images/baggingoutcomes_b.jpg"));
});
// =================================================================  index page js end  ==============================================================


