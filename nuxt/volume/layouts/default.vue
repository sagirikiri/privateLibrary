<template>
  <v-app>

    <v-app-bar
      app>
      <v-toolbar-title>
        <v-btn
          text
          href="/">
          <i
            class="fas fa-book-open"></i>
          Tosho
        </v-btn>
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <v-btn
        @click="up"
      >
        {{counter}}
      </v-btn>
      <v-flex
        sm3>
        <v-text-field
          v-model="keyword"
          id="searchBox"
          hide-details
          single-line
          label="search"
          v-on:keyup.enter="submitSearch(keyword)"
        ></v-text-field>
      </v-flex>

      <v-menu
        left
        bottom
      >
        <template
          v-slot:activator="{ on }">
          <v-btn
            icon
            v-on="on"
            height="48">
            <i class="fas fa-user fa-2x"></i>
          </v-btn>
        </template>

        <v-list>
          <v-list-item
            v-for="n in 5"
            :key="n"
            @click="() => {}"
          >
            <v-list-item-title>
              Option
              {{n}}
            </v-list-item-title>
          </v-list-item>
        </v-list>
      </v-menu>
    </v-app-bar>

    <v-content>
      <v-container>
        <nuxt/>
      </v-container>
    </v-content>

    <v-footer>

    </v-footer>
  </v-app>
</template>

<script>
    export default {
        data() {
            return {
                keyword: '',
                clipped: false,
                drawer: false,
                fixed: false,
                items: [
                    {
                        icon: 'mdi-apps',
                        title: 'Welcome',
                        to: '/'
                    },
                    {
                        icon: 'mdi-chart-bubble',
                        title: 'Inspire',
                        to: '/inspire'
                    }
                ],
                miniVariant: false,
                right: true,
                rightDrawer: false,
                title: 'Vuetify.js'
            }
        },
        computed: {
            counter () {
                return this.$store.state.counter;
            }
        },
        methods: {
            up: function() {
                this.$store.commit('increment');
            },
            submitSearch(keyword) {
                this.$router.push('/books/search/?keyword=' + keyword);
            }
        }
    }
</script>

<style
  scoped>
  #searchBox {
    width: 10vw;
  }
</style>
