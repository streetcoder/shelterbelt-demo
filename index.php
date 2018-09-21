<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://openlayers.org/en/v4.6.4/css/ol.css" type="text/css">
    <style>
      .map {
        height: 400px;
        width: 100%;
      }
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }

      .tab-content {
        padding: 30px;
      }
    </style>
     <link rel="stylesheet" href="node_modules/ol-geocoder/ol-geocoder.min.css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Shelterbelt DSS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br>

    



    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="scenario-tab" data-toggle="tab" href="#scenario" role="tab" aria-controls="scenario" aria-selected="true">Climate Scenario</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="plant-tab" data-toggle="tab" href="#plant" role="tab" aria-controls="plant" aria-selected="false">Plant a shelterbelt</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="calculate-tab" data-toggle="tab" href="#calculate" role="tab" aria-controls="calculate" aria-selected="false">Calculate</a>
                </li>
              </ul>


              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="scenario" role="tabpanel" aria-labelledby="scenario-tab">                                                           
                    
                    <canvas id="myChart" style="width: 512px; height: 256px"></canvas>    
                    
                    <div class="card">
                        <div class="card-header">
                          Filter Options
                        </div>
                        <div class="card-body">
                          
                            <form>
                              <div class="form-group row">

                                  <label for="climate_scinerio" class="col-sm-2 col-form-label">Sites</label>
                                  <div class="col-sm-2">
                                      <select id="1-site" class="form-control">
                                        <option value="pm1" selected>PM1</option>
                                        <option value="pm2">PM2</option>
                                      </select>                                  
                                  </div>                                
                                  <div class="col-sm-2">
                                      <select id="2-site" class="form-control">
                                          <option value="pm1" selected>PM1</option>
                                          <option value="pm2">PM2</option>
                                      </select>
                                  </div>                                
                                  <div class="col-sm-2">
                                      <select id="3-site" class="form-control">
                                          <option value="pm1">PM1</option>
                                          <option value="pm2" selected>PM2</option>
                                      </select>
                                  </div>                                
                                  <div class="col-sm-2">
                                      <select id="4-site" class="form-control">
                                          <option value="pm1">PM1</option>
                                          <option value="pm2" selected>PM2</option>
                                      </select>
                                  </div>                                
                                  <div class="col-sm-2">
                                      <select id="5-site" class="form-control">
                                          <option value="pm1" selected>PM1</option>
                                          <option value="pm2">PM2</option>
                                      </select>
                                  </div>                                
                                </div>

                                <div class="form-group row">
                                    <label for="climate_scinerio" class="col-sm-2 col-form-label">Climate Scinerio</label>
                                    <div class="col-sm-2">
                                        <select id="1-climate" class="form-control">
                                          <option value="B1" selected>B1</option>
                                          <option value="A1B">A1B</option>
                                          <option value="A2">A2</option>
                                        </select>                                  
                                    </div>                                
                                    <div class="col-sm-2">
                                        <select id="2-climate" class="form-control">
                                            <option value="B1" selected>B1</option>
                                            <option value="A1B">A1B</option>
                                            <option value="A2">A2</option>
                                        </select>
                                    </div> 
                                    <div class="col-sm-2">
                                        <select id="3-climate" class="form-control">
                                            <option value="B1">B1</option>
                                            <option value="A1B" selected>A1B</option>
                                            <option value="A2">A2</option>
                                        </select>                                  
                                    </div>                                
                                    <div class="col-sm-2">
                                        <select id="4-climate" class="form-control">
                                            <option value="B1">B1</option>
                                            <option value="A1B">A1B</option>
                                            <option value="A2" selected>A2</option>
                                        </select>
                                    </div> 
                                    <div class="col-sm-2">
                                        <select id="5-climate" class="form-control">
                                            <option value="B1">B1</option>
                                            <option value="A1B" selected>A1B</option>
                                            <option value="A2">A2</option>
                                        </select>
                                    </div>                                                                                                 
                                </div>
                                

                                <div class="form-group row">
                                    <label for="species" class="col-sm-2 col-form-label">Species</label>
                                    <div class="col-sm-2">
                                        <select id="1-species" class="form-control">
                                            <option selected>White Spruce</option>
                                            <option>Scots Pine</option>
                                            <option>Hybrid Poplar</option>
                                            <option>Green Ash</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select id="2-species" class="form-control">
                                            <option>White Spruce</option>
                                            <option selected>Scots Pine</option>
                                            <option>Hybrid Poplar</option>
                                            <option>Green Ash</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select id="3-species" class="form-control">
                                            <option>White Spruce</option>
                                            <option>Scots Pine</option>
                                            <option selected>Hybrid Poplar</option>
                                            <option>Green Ash</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select id="4-species" class="form-control">
                                            <option>White Spruce</option>
                                            <option>Scots Pine</option>
                                            <option>Hybrid Poplar</option>
                                            <option selected>Green Ash</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select id="5-species" class="form-control">
                                            <option>White Spruce</option>
                                            <option selected>Scots Pine</option>
                                            <option>Hybrid Poplar</option>
                                            <option>Green Ash</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="species" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-2">
                                        <button id="1-apply" type="submit" class="btn btn-success btn-block">Apply</button>
                                    </div>
                                    <div class="col-sm-2">
                                        <button id="2-apply" type="submit" class="btn btn-success btn-block">Apply</button>
                                    </div>
                                    <div class="col-sm-2">
                                        <button id="3-apply" type="submit" class="btn btn-success btn-block">Apply</button>
                                    </div>
                                    <div class="col-sm-2">
                                        <button id="4-apply" type="submit" class="btn btn-success btn-block">Apply</button>
                                    </div>
                                    <div class="col-sm-2">
                                        <button id="5-apply" type="submit" class="btn btn-success btn-block">Apply</button>
                                    </div>

                                </div>

                            </form>
                          
                        </div>
                      </div>

                </div>
                <div class="tab-pane fade" id="plant" role="tabpanel" aria-labelledby="plant-tab">                  

                    <!-- <div id="map" class="map"></div>  -->

                    <div class="row">
                      <div class="col-lg-6 text-center">
                        <div id="map" class="map"></div>
                      </div>
                      <div class="col-lg-6 ">
                        
              
                        <form>   
                          <div class="form-group">
                            <p><b>Length:</b> 510m</p>
                            <label for="exampleFormControlSelect1">Rows</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect2">Species Mix</label>
                            <select  class="form-control" id="exampleFormControlSelect2">
                              <option>Mix A</option>
                              <option>Mix B</option>
                              <option>Mix C</option>
                              <option>Mix D</option>
                            </select>
                          </div>
                            <div class="form-group">
                            <label for="exampleFormControlSelect2">Shelterbelt Type</label>
                            <select  class="form-control" id="exampleFormControlSelect2">
                              <option>Yard</option>
                              <option>Field</option>
                              <option>Riparian</option>
                              <option>Roadside</option>
                              <option>Wildlife</option>
                            </select>
                          </div>
                        </form>
                      </div>
                    </div>


                </div>
                <div class="tab-pane fade" id="calculate" role="tabpanel" aria-labelledby="calculate-tab">
                    
                  Coming later
                </div>
              </div>
        </div>
      </div>
    </div>
    
    <script src="https://openlayers.org/en/v4.6.4/build/ol.js" type="text/javascript"></script>
    <!-- <script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.2.0/build/ol.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>    

    <script src="node_modules/ol-geocoder/ol-geocoder.js"></script>
    <!-- Bootstrap core JavaScript -->    
    <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">

      var rg_data1 = [{ x: 5, y: 1.4 }, { x: 10, y: 1.2 }, { x: 25, y: 1.1 }, { x: 50, y: 0.9 }, { x: 100, y: 0.5 } ];
      var rg_data2 = [{ x: 5, y: 1.7 }, { x: 10, y: 1.6 }, { x: 25, y: 1.5 }, { x: 50, y: 0.9 }, { x: 100, y: 0.6 }];
      var rg_data3 = [{ x: 5, y: 1.9 }, { x: 10, y: 2 }, { x: 25, y: 2 }, { x: 50, y: 1 }, { x: 100, y: 0 } ];
      var rg_data4 = [{ x: 5, y: 1.8 }, { x: 10, y: 1.6 }, { x: 25, y: 1.6 }, { x: 50, y: 1.1 }, { x: 100, y: 0.8 } ];
      var rg_data5 = [{ x: 5, y: 1.8 }, { x: 10, y: 1.7 }, { x: 25, y: 1.6 }, { x: 50, y: 1.0 }, { x: 100, y: 0.7 } ];

      var ctx = document.getElementById('myChart').getContext('2d');

      var color = Chart.helpers.color;
      var config = {
        type: 'line',
        data: {
          labels: [  5, 10, 25, 50, 100 ],
          datasets: [
            {
            label: 'Ring Growth 1',
            backgroundColor: color('rgb(255, 99, 132)').alpha(0.5).rgbString(),
            borderColor: 'rgb(255, 99, 132)',
            fill: false,
            data: rg_data1
          }, 
          {
            label: 'Ring Growth 2',
            backgroundColor: color('rgb(54, 162, 235)').alpha(0.5).rgbString(),
            borderColor: 'rgb(54, 162, 235)',
            fill: false,
            data: rg_data2
          },
           {
             label: 'Ring Growth 3',
             backgroundColor: color('rgb(75, 192, 192)').alpha(0.5).rgbString(),
             borderColor: 'rgb(75, 192, 192)',
             fill: false,
             data: rg_data3
           },
          {
              label: 'Ring Growth 4',
              backgroundColor: color('rgb(255, 159, 64)').alpha(0.5).rgbString(),
              borderColor: 'rgb(255, 159, 64)',
              fill: false,
              data: rg_data4
          },
          {
              label: 'Ring Growth 5',
              backgroundColor: color('rgb(153, 102, 255)').alpha(0.5).rgbString(),
              borderColor: 'rgb(153, 102, 255)',
              fill: false,
              data: rg_data5
          }

        ]
        },
        options: {
          title: {
            display: true,
            text: 'Ring Growth Scale'
          },
        tooltips: {
            enabled: true,
            mode: 'single',
            callbacks: {
                title: function(tooltipItems, data) {
                    return 'Year ' + tooltipItems[0].xLabel;
                }
            }
        },
          scales: {
            xAxes: [{
              scaleLabel: {
                display: true,
                labelString: 'Years'
              }
            }],
            yAxes: [{
              scaleLabel: {
                display: true,
                labelString: 'Ring Growth'
              }
            }]
          },
        }
      };

      var myLine = new Chart(ctx, config);
      // var chart = new Chart(ctx, cfg);

//      var base_url = window.location.href;
//      var base_url = window.location.hostname;
      var getUrl = window.location;
      var base_url = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
      var ajax_url = base_url+'/db.php';

       $( "#1-apply").click(function(event) {
           event.preventDefault();
           var site  = $("#1-site").val();
           var climate = $("#1-climate").val();
           var species = $("#1-species").val();

           $.ajax({
               url: ajax_url,
               dataType: 'json',
               type: 'GET',
               data : { site : site, climate : climate, species: species },
               success: function(res) {
                   config.data.datasets.forEach(function(dataset, i) {
                       if(i == 0){
                           dataset.data = res;
                       }
                   });
                   window.myLine.update();
               }

           });

       });

       $( "#2-apply").click(function(event) {
           event.preventDefault();
           var site  = $("#2-site").val();
           var climate = $("#2-climate").val();
           var species = $("#2-species").val();

           $.ajax({
               url: ajax_url,
               dataType: 'json',
               type: 'GET',
               data : { site : site, climate : climate, species: species },
               success: function(res) {
                   config.data.datasets.forEach(function(dataset, i) {
                       if(i == 1){
                           dataset.data = res;
                       }
                   });
                   window.myLine.update();
               }

           });

       });

      $( "#3-apply").click(function(event) {
          event.preventDefault();
          var site  = $("#3-site").val();
          var climate = $("#3-climate").val();
          var species = $("#3-species").val();

          $.ajax({
              url: ajax_url,
              dataType: 'json',
              type: 'GET',
              data : { site : site, climate : climate, species: species },
              success: function(res) {
                  config.data.datasets.forEach(function(dataset, i) {
                      if(i == 2){
                          dataset.data = res;
                      }
                  });
                  window.myLine.update();
              }

          });

      });

      $( "#4-apply").click(function(event) {
          event.preventDefault();
          var site  = $("#4-site").val();
          var climate = $("#4-climate").val();
          var species = $("#4-species").val();

          $.ajax({
              url: ajax_url,
              dataType: 'json',
              type: 'GET',
              data : { site : site, climate : climate, species: species },
              success: function(res) {
                  config.data.datasets.forEach(function(dataset, i) {
                      if(i == 3){
                          dataset.data = res;
                      }
                  });
                  window.myLine.update();
              }
          });
      });

      $( "#5-apply").click(function(event) {
          event.preventDefault();
          var site  = $("#5-site").val();
          var climate = $("#5-climate").val();
          var species = $("#5-species").val();

          $.ajax({
              url: ajax_url,
              dataType: 'json',
              type: 'GET',
              data : { site : site, climate : climate, species: species },
              success: function(res) {
                  config.data.datasets.forEach(function(dataset, i) {
                      if(i == 4){
                          dataset.data = res;
                      }
                  });
                  window.myLine.update();
              }
          });
      });


      // second tab loading map
      var source = new ol.source.BingMaps({
          key: 'AjuiTz-K1RGALYtpTD5ikQXwQjDIkKGqaxBh-cNJA8BxPcdzxLyTQ4c-RInRBTE7',
          imagerySet: 'Aerial'})
  
      var map = new ol.Map({
        target: 'map',
        layers: [
          new ol.layer.Tile({
            source: source
          })
        ],
        view: new ol.View({
          center: ol.proj.fromLonLat([-105, 52.82]),
          zoom: 14
        })
      });

      var modify, draw, snap; // global so we can remove them later
      // var draw;

      function addInteraction() {
          draw = new ol.interaction.Draw({
            source: source,
            type: "Polygon"
            // type: "LineString"
          });
          // map.addInteraction(draw);
          map.addInteraction(draw);

          // modify = new ol.interaction.Modify({
          //   source: source
          // });
          // map.addInteraction(modify);

          // snap = new ol.interaction.Snap({
          //   source: source
          // });
          // map.addInteraction(snap);
      }
      addInteraction();

      // var map = new ol.Map({
      //   target: 'map',
      //   layers: [
      //     new ol.layer.Tile({
      //       source: new ol.source.OSM()
      //     })
      //   ],
      //   view: new ol.View({
      //     center: ol.proj.fromLonLat([-105, 52.82]),
      //     zoom: 4
      //   })
      // });

      // var modify = new ol.interaction.Modify({source: new ol.source.OSM()});
      // map.addInteraction(modify);

      // var draw, snap; // global so we can remove them later
      // var typeSelect = document.getElementById('type');

      // function addInteractions() {
      //   draw = new Draw({
      //     source: source,
      //     type: "Polygon"
      //   });
      //   map.addInteraction(draw);
      //   snap = new Snap({source: source});
      //   map.addInteraction(snap);

      // }

      // addInteractions();

      $('.nav-tabs a#plant-tab').on('shown.bs.tab', function(){
        map.getTargetElement().hidden = false;        
        map.updateSize();
      });      
      </script>

  </body>

</html>
