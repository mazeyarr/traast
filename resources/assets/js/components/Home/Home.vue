<template>
    <div>
        <div class="md-layout justify-content-center">
            <transition name="bounce">
                <div class="md-layout-item md-size-70" v-show="loading">
                    <md-progress-bar md-mode="indeterminate"></md-progress-bar>
                </div>
            </transition>
        </div>
        <div class="md-layout md-gutter justify-content-center">
            <div class="justify-content-center column-container">
                <div class="column" v-for="chunk in works">
                    <work v-for="work in chunk" :key="work.id" :work="work"></work>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Work from '../Works/Work';

    export default {
        name: "Home",
        data () {
            return {
              works: [],
              loading: false
            }
        },
        created () {
          this.loading = true;
          axios.get('api/get/works')
            .then((response) => {
              this.works = response.data.data;
              this.loading = false;
            })
        },
        components: {
        work: Work
        },
    }
</script>

<style scoped>
    .column-container{
        padding-left: 10rem;
    }
    .column {
        margin-right: 100px;
        max-width: 315px;
        display: inline-block;
        vertical-align: top;
        width: 16.6667%;
    }

    .bounce-enter-active {
        animation: bounce-in .5s;
    }
    .bounce-leave-active {
        animation: bounce-in .5s reverse;
    }
    @keyframes bounce-in {
        0% {
            transform: scale(0);
        }
        50% {
            transform: scale(1.5);
        }
        100% {
            transform: scale(1);
        }
    }
</style>