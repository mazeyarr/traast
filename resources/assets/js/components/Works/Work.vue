<template>
    <md-card>
        <md-card-media>
            <img src="https://vuematerial.io/assets/examples/card-image-1.jpg" alt="People">
        </md-card-media>

        <md-card-header>
            <div class="md-title">{{ work.title}}</div>
            <div class="md-subhead">{{ work.subtitle}}</div>
        </md-card-header>
    </md-card>
</template>

<script>
  export default {
    props: [
      'work'
    ],
    name: "Works"
  }
</script>

<style scoped>
    .md-card {
        width: 320px;
        max-width: 320px;
        display: inline-block;
        vertical-align: top;
        margin: 20px 4px 4px;
    }
</style>