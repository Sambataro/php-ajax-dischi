<main>
  <div class="cd" v-for="disc in discs">
    <img :src=disc.poster :alt=disc.title>
    <div class="info">
      <h2>{{ disc.title }}</h2>
      <h2>{{ disc.author }}</h2>
      <small>{{ disc.genre }}</small>
      <strong>"{{ disc.year }}"</strong>
    </div>
  </div>
</main>
