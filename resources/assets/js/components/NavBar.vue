<template>
    <div class="md-layout md-gutter md-alignment-center-center navigation">
        <div class="md-layout-item md-size-10">
            <md-button
                    :class="{'md-raised': this.activeRoute === 'home'}"
                    class="md-dense"
                    @click="toHome">HOME</md-button>
        </div>
        <div class="md-layout-item md-size-10">
            <md-button
                    :class="{'md-raised': this.activeRoute === 'about'}"
                    class="md-dense"
                    @click="toAbout">ABOUT</md-button>
        </div>
        <div class="md-layout-item md-size-10">
            <md-button
                    :class="{'md-raised': this.activeRoute === 'projects'}"
                    class="md-dense"
                    @click="toProjects">PROEJECTS</md-button>
        </div>
        <div class="md-layout-item md-size-10">
            <md-button
                    :class="{'md-raised': this.activeRoute === 'works'}"
                    class="md-dense"
                    @click="toWorks">WORKS</md-button>
        </div>
        <div class="md-layout-item md-size-10">
            <md-button
                    :class="{'md-raised': this.activeRoute === 'news'}"
                    class="md-dense"
                    @click="toNews">NEWS</md-button>
        </div>
    </div>
</template>

<script>
    export default {
      name: 'NavBar',
      data () {
        return {
            activeRoute: ''
        }
      },
      created() {
        this.toHome();
      },
      methods: {
        toHome() {
          this.$router.push({ name: 'Home'});
          this.activeRoute = 'home';
        },
        toAbout() {
          this.$router.push({ name: 'About'});
          this.activeRoute = 'about';
        },
        toProjects() {
          this.$router.push({ name: 'Projects'});
          this.activeRoute = 'projects';
        },
        toWorks() {
          this.$router.push({ name: 'Works'});
          this.activeRoute = 'works';
        },
        toNews() {
          this.$router.push({ name: 'News'});
          this.activeRoute = 'news';
        },
      }
    }
</script>
<style lang="scss" scoped>
    @import "~vue-material/dist/theme/engine"; // Import the theme engine

    @include md-register-theme("md-warning", (
            primary: md-get-palette-color(yellow, A700),
            accent: md-get-palette-color(red, A200),
    ));

    @import "~vue-material/dist/theme/all"; // Apply the theme
</style>