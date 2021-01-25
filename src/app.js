import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue({
  el: '#app',
  data: {
    logo: "spotify.png",
    discs: [],
    genres: [],
  },

  methods: {

  },

  mounted: function mounted() {
    var self = this;
    axios.get("server.php")
    .then(function (response) {
      self.discs = response.data;


      self.discs.forEach(function (item) {
        if (self.genres.includes(item.genre) == false) {
          self.genres.push(item.genre);
        }
      });
     });
  },
});
