import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue({
  el: '#app',
  data: {
    logo: "img/spotify.png",
    discs: [],
  },
  mounted: function mounted() {
    var self = this;
    axios.get("http://localhost:8888/php-ajax-dischi/server.php").then(function (response) {
      self.discs = response.data;
     });
  },
});
