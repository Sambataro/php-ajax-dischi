<header>
  <img :src="'img/' + logo" alt="logo-spotify">
  <form action="index_vue.php" method="get">
    <select
      name="genres"
      v-model="genreSelection">
      <option value="All">All</option>
      <option v-for="genre in genres" :value="genre">{{ genre }}</option>
    </select>
    <button type="submit" name="button">Cerca</button>
  </form>
</header>
