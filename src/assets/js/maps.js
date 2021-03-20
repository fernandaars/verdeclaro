/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var customLabel = {
        organic: {
          icon: '../../assets/img/o.png'
        },
        agroecologic: {
          icon: '../../assets/img/a.png'
        },
        mist: {
          icon: '../../assets/img/m.png'
        }
      };

        function initMap() {
        var infoWindow = new google.maps.InfoWindow;
        const queryString = window.location.search;
        console.log(queryString);
        const urlParams = new URLSearchParams(queryString);
        const selectedRegion = urlParams.get('region');
        var lang, long;
        switch(selectedRegion){
            case "barreiro":
                lang = -19.97600; long = -44.02192; break;
            case "centro_sul":
                lang = -19.919177959515764; long = -43.938800838796055; break;
            case "leste":
                lang = -19.920112446451373; long = -43.90470880361723; break;
            case "nordeste":
                lang = -19.854081079340215; long = -43.915563662109875; break;
            case "noroeste":
                lang = -19.91344793710989; long = -43.957889555842; break;
            case "norte":
                lang = -19.836789198215488; long = -43.93442844506871; break;
            case "oeste":
                lang = -19.976280501896834; long = -43.96905963877993; break;
            case "pampulha":
                lang = -19.851186871038315; long = -43.95503744165324; break;
            case "venda_nova":
                lang = -19.813598839844413; long = -43.968698700753265; break;
            default:
                lang = -19.9167;
                long = -43.9345;
                break;
        }
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(lang, long),
          zoom: 13
        });

          // Change this depending on the name of your PHP or XML file
          downloadUrl('../fairs.xsd', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var region = markerElem.getAttribute('region');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));
                  
            if (selectedRegion == region){

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                icon: icon.icon
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            }
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}


