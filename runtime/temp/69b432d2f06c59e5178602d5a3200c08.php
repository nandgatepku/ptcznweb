<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"C:\wamp64\www\ptcznweb\public/../application/index\view\subway\index.html";i:1546940453;}*/ ?>
<!DOCTYPE html> 
<html style="height: 100%"> 
<head> 
  <meta charset="utf-8"> 
  <title>数据可视化-北京地铁</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
</head> 
<body style="height: 100%; margin: 0">
  <div id="title" style="size: 20px;text-align: center;">数据可视化期末展示</div>
  <div id="title" style="size: 18px;text-align: right;margin-right: 70px;">方正;林德鑫;唐驻成</div>
  <span id="con">
    <div id="bigmap" style="height: 70%;width: 60%;display:inline-block;margin-left: 20px;"></div>
    <div id="chart" style="display:inline-block">这里是柱状图</div>
  </span>
    <p style="text-align: center;">
  <label for="amount">选择时间：</label>
  <input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">
</p>
  <div id="slider" style="width: 80%;margin: 20px;"></div>

 <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts-all-3.js"></script> 
 <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
 <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ZUONbpqGBsYGXNIYHicvbAbM"></script> 
 <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script> 
 <script type="text/javascript">
    var atom_data=[],atom_stop=[],atom_time=[],a_data=[],atom_start=[];
    var subway_atom={};
    var subway_data=[];
    var c_time=18;

    $.ajax({
        type: "GET",
        url: "atom_matlab.csv",
        dataType: "text",
        async:false,
        success: function(data) {
    var dataStr = new String(data);
    var lines = dataStr.split('\n');
    for(var i=0;i<lines.length;i++){
      a_data[i] = lines[i].split('"');
      atom_data[i] = a_data[i][1];
      if(atom_data[i] !=null){
        atom_data[i] = atom_data[i].replace("[",""); 
        atom_data[i] = atom_data[i].replace("]","");
        atom_data[i] = atom_data[i].replace(/\s+/g,"");
        atom_time[i] = atom_data[i].split(",");
        atom_stop[i] = a_data[i][2];
        atom_start[i] = atom_stop[i].split(",");
      }    
    
        }
      }
     });
console.log(atom_start);
console.log("c_time="+c_time);


function show_map(time){
  var dom = document.getElementById("bigmap");
var myChart = echarts.init(dom);
var app = {};
option = null;
app.title = '数据可视化-北京地铁';

   var subway_atom={};
    var subway_data=[];

for(i=0;i<atom_start.length;i++){
  subway_atom={};
  var start_point=[];
  start_point.push(parseFloat(atom_start[i][2])); 
  start_point.push(parseFloat(atom_start[i][3]));
  var end_point=[];
  end_point.push(parseFloat(atom_start[i][5])); 
  end_point.push(parseFloat(atom_start[i][6]));
  var coords = [];
  coords.push(start_point);
  coords.push(end_point);
  subway_atom.coords=coords;

  var subway_normal = {};
  var subway_color = {};

  color_data = atom_time[i][time];

  var c_color = echarts.color.modifyHSL('#ff0000', 120-color_data/8000*120);
  subway_color.color=c_color;
  
  subway_normal.normal = subway_color;

  subway_atom.lineStyle=subway_normal;

  subway_data.push(subway_atom);

}

     console.log(subway_data);


    myChart.setOption(option = {
        bmap: {
            center: [116.46, 39.92],
            zoom: 10,
            roam: true,
            mapStyle: {
              'styleJson': [
               
          {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": {
                              "color": "#021019"
                    }
          },
          {
                    "featureType": "highway",
                    "elementType": "geometry.fill",
                    "stylers": {
                              "color": "#000000"
                    }
          },
          {
                    "featureType": "highway",
                    "elementType": "geometry.stroke",
                    "stylers": {
                              "color": "#147a92",
                              "lightness": -20
                    }
          },
          {
                    "featureType": "arterial",
                    "elementType": "geometry.fill",
                    "stylers": {
                              "color": "#000000"
                    }
          },
          {
                    "featureType": "arterial",
                    "elementType": "geometry.stroke",
                    "stylers": {
                              "color": "#0b3d51"
                    }
          },
          {
                    "featureType": "local",
                    "elementType": "geometry",
                    "stylers": {
                              "color": "#000000"
                    }
          },
          {
                    "featureType": "land",
                    "elementType": "all",
                    "stylers": {
                              "color": "#08304b"
                    }
          },
          {
                    "featureType": "railway",
                    "elementType": "geometry.fill",
                    "stylers": {
                              "color": "#000000"
                    }
          },
          {
                    "featureType": "railway",
                    "elementType": "geometry.stroke",
                    "stylers": {
                              "color": "#08304b"
                    }
          },
          {
                    "featureType": "subway",
                    "elementType": "geometry",
                    "stylers": {
                              "lightness": -70,
                              "visibility": "off"
                    }
          },
          {
                    "featureType": "building",
                    "elementType": "geometry.fill",
                    "stylers": {
                              "color": "#000000"
                    }
          },
          {
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": {
                              "color": "#857f7f"
                    }
          },
          {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": {
                              "color": "#000000"
                    }
          },
          {
                    "featureType": "building",
                    "elementType": "geometry",
                    "stylers": {
                              "color": "#022338"
                    }
          },
          {
                    "featureType": "green",
                    "elementType": "geometry",
                    "stylers": {
                              "color": "#062032"
                    }
          },
          {
                    "featureType": "boundary",
                    "elementType": "all",
                    "stylers": {
                              "color": "#1e1c1c"
                    }
          },
          {
                    "featureType": "manmade",
                    "elementType": "geometry",
                    "stylers": {
                              "color": "#022338"
                    }
          },
          {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": {
                              "visibility": "off"
                    }
          },
          {
                    "featureType": "all",
                    "elementType": "labels.icon",
                    "stylers": {
                              "visibility": "off"
                    }
          },
          {
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": {
                              "color": "#2da0c6",
                              "visibility": "on"
                    }
          }

              ]
            }
        },
       series: [{
            type: 'lines',
            coordinateSystem: 'bmap',
            polyline: true,
            data: subway_data,
            silent: true,
            lineStyle: {
                normal: {
                    // color: '#c23531',
                    // color: 'rgb(200, 35, 45)',
                    opacity: 0.3,

                    width: 2
                }
            },
            progressiveThreshold: 500,
            progressive: 200
        }, {
            type: 'lines',
            coordinateSystem: 'bmap',
            polyline: true,
            data: subway_data,
            lineStyle: {
                normal: {
                    width: 0
                }
            },
            effect: {
                constantSpeed: 50,
                show: true,
                trailLength: 0.5,
                symbolSize: 2
            },
            zlevel: 1
        }]

    });
};


// if (option && typeof option === "object") {
//     myChart.setOption(option, true);
// };

</script>
<script>
    show_map(c_time);
  $(function() {
    $( "#slider" ).slider({
      value:18,
      min: 1,
      max: 48,
      step: 1,
      slide: function( event, ui ) {
        var clock = parseInt(ui.value/2);
        var min_flag = Math.round(ui.value%2);
        if(min_flag==0){
          var min_str = '00';
        }else{
          var min_str = '30';
        }
        $( "#amount" ).val( clock + ":"+min_str );
        c_time = ui.value;
        show_map(c_time);
      }
    });

    $( "#amount" ).val( "9:00" );
  });
  </script>
</body> 
</html>
