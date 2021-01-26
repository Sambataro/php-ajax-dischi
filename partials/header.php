<header>
  <img :src="'img/' + logo" alt="logo-spotify">
  <form action="index_vue.php" method="get">
   <select name="genre" v-model="genre">
     <option value="">Tutti</option>
     <option value="rock">Rock</option>
     <option value="pop">Pop</option>
     <option value="metal">Metal</option>
     <option value="jazz">Jazz</option>
   </select>
   <button type="button" name="button" @click="filter">Cerca</button>
  </form>
</header>
