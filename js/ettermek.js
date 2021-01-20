(function ($) {
    $(function () {

        var govindas = [
            {
                name : 'Krisna-völgy Govinda Étterem',
                address : '8699 Somogyvámos Gauranga tér 1',
                lat : 46.56717382076626,
                lng : 17.700165510177612,
                url : 'http://krisnavolgy.hu/etterem'
            },
            {
                name: 'Govinda Csillaghegy',
                address: '1039 Budapest, Lehel U. 15-17',
                lat: 47.584722,
                lng: 19.048179,
                url: 'https://www.facebook.com/govindacsillaghegy/'
            },
            {
                name : 'Eger Govinda Étterem',
                address : '3300 Eger Tűzoltó tér 7',
                lat : 47.906689,
                lng : 20.372781,
                url : 'http://govindaeger.hu'
            },
            {
                name : 'Govinda Debrecen',
                address : '4028 Debrecen Magyari u. 2',
                lat : 47.540417,
                lng : 21.640220,
                url : 'http://govindadebrecen.hu'
            },
            {
                name : 'Govinda Vegetáriánus Étterem és Salátabár',
                address : '1051 Budapest, Vigyázó Ferenc u. 4',
                lat : 47.505641,
                lng : 19.047705,
                url : 'https://www.facebook.com/govindabudapest'
            },
            {
                name : 'Govinda Vega Sarok',
                address : '1053 Budapest, Papnövelde u. 1',
                lat : 47.495300,
                lng : 19.057730,
                url : 'https://www.facebook.com/vegasarok'
            },
            {
                name : 'Radhadesh',
                address : '6940 Septon- Durbuy, Château de Petite Somme',
                lat : 50.3480739,
                lng : 5.4064587,
                url : 'https://www.facebook.com/Govindas.Radhadesh/'
            },
            {
                name : 'Happy Smile restorant',
                address : 'Vlaska 79, 10000 Zagreb',
                lat : 45.8139118,
                lng : 15.9863469,
                url : 'https://www.vegehop.hr/en'
            },
            {
                name : 'Vegetarian restaurant Govinda',
                address : 'Na hrazi 5, 180 00 Prague 8 – Liben',
                lat : 50.105305,
                lng : 14.473775,
                url : 'http://www.govinda.cz/'
            },
            {
                name : 'Govinda’s 1',
                address : '4 Aungier St. Dublin',
                lat : 53.3411578,
                lng : -6.2674872,
                url : ''
            },
            {
                name : 'Govinda’s 2',
                address : '83 Middle Abbey Street Dublin',
                lat : 53.3484275,
                lng : -6.2629542,
                url : ''
            },
            {
                name : 'Govinda’s 3',
                address : '83 18 Merrion Row Dublin',
                lat : 53.3382146,
                lng : -6.2560303,
                url : ''
            },
            {
                name : 'Govindas Milan',
                address : 'Via Valpetrosa, 5 I-20123 Milan',
                lat : 45.4620524,
                lng : 9.1832881,
                url : ''
            },
            {
                name : 'Govindas Roma',
                address : 'Via Valpetrosa, 5 I-20123 Milan',
                lat : 41.8933988,
                lng : 12.4739203,
                url : 'http://www.harekrsna.it'
            },
            {
                name : 'Krishna’s cuisine',
                address : 'Kirkev. 59 B, 0364 Oslo',
                lat : 59.9290091,
                lng : 10.714191,
                url : ''
            },
            {
                name : 'Vegetarian restaurant Govinda',
                address : 'Obchodna 30 Bratislava',
                lat : 48.1473494,
                lng : 17.108028,
                url : 'http://www.govinda.sk/'
            },
            {
                name : 'Vegetarian restaurant Govinda',
                address : 'Hlavna 70 Presov',
                lat : 48.9972435,
                lng : 21.2390174,
                url : 'http://www.govinda.sk/'
            },
            {
                name : 'Vegetarian restaurant Govinda',
                address : 'Puskinova 8 Kosice',
                lat : 48.7204128,
                lng : 21.260295,
                url : 'http://www.govinda.sk/'
            },
            {
                name : 'Govinda Barcelona',
                address : 'Plaça de la Vila de Madrid, 4, 08002 Barcelona',
                lat : 41.3841423,
                lng : 2.1726373,
                url : 'http://www.govinda.es/'
            },
            {
                name : 'Govinda Restaurante II',
                address : 'Plaza de la Villa de Madrid 4-5',
                lat : 40.4151926,
                lng : -3.7129638,
                url : 'http://www.govinda.es/'
            },
            {
                name : 'Govindas',
                address : 'Karl Johansgatan 57 414 55 Göteborg',
                lat : 57.6937757,
                lng : 11.9163757,
                url : 'http://govindas-goteborg.se/'
            },
            {
                name : 'Govindas Stockholm',
                address : 'Fridhemsgatan 22, 112 40 Stockholm',
                lat : 59.3326593,
                lng : 18.0269804,
                url : ''
            },
            {
                name : 'Govindas Lund',
                address : 'Fridhemsgatan 22, 112 40 Stockholm',
                lat : 55.7086261,
                lng : 13.1907384,
                url : ''
            },
            {
                name : 'Govindas Malmö',
                address : 'Fridhemsgatan 22, 112 40 Stockholm',
                lat : 55.5973375,
                lng : 13.0001986,
                url : ''
            },
            {
                name : 'Govinda’s Ljubljana',
                address : 'Žibertova 23, 1000 Ljubljana',
                lat : 46.0629839,
                lng : 14.4967457,
                url : 'http://www.govindas.si/'
            },
            {
                name : 'Restaurant Govinda Rama',
                address : 'Govinda Restaurant, Via Della Motta 10, Locarno, Switzerland – 6600',
                lat : 46.1689941,
                lng : 8.7936324,
                url : 'http://www.govindas.si/'
            },
            {
                name : 'Govinda’s Swansea',
                address : '8, Craddock Street SA1 3EN Swansea',
                lat : 51.6207941,
                lng : -3.9495126,
                url : 'http://govindasvegetarianrestaurant.org/'
            },
            {
                name : 'Govindas',
                address : '10 Soho Street London, W1D 3DL',
                lat : 51.515824,
                lng : 0.1349525,
                url : 'http://govindasvegetarianrestaurant.org/'
            },

        ];

        var map = new google.maps.Map(
            document.getElementById('restaurant-map'),
            {
                center: new google.maps.LatLng(47.0663644, 19.5153626),
                zoom: 5,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
            }
        );

        var infowindow = new google.maps.InfoWindow({});
        var marker = new google.maps.Marker({map: map});

        $.each(govindas, function (i, value) {
            var govinda = new google.maps.Marker({
                position: new google.maps.LatLng(value.lat, value.lng),
                map: map,
                name: value.name,
                address: value.address,
                url: value.url,
            });
            google.maps.event.addListener(govinda, 'mouseover', function () {
                infowindow.close(); //close if there is an iw already open
                marker.setPosition(this.getPosition()); // get circle's center
                var content = '<b>' + this.name + '</b>' + '<br>'
                 + this.address + '<br>'
                 + '<a ' + 'href="' + this.url + '">' + this.url + '</a>';
                infowindow.setContent(content); // set content
                infowindow.open(map, marker); // open at marker's location
                marker.setVisible(false); // hide the marker
            });
        });
    });
})(jQuery);
