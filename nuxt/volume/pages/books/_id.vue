<template>
  <v-container
    fluid grid-list-sm
  >
    <v-btn
      small outlined fab
      @click="goBack"
    >
      <i class="fas fa-arrow-left fa-lg"></i>
    </v-btn>

    <v-layout>
      <v-flex
        xs12 sm3
      >
        <v-img
          class="mx-auto"
          width="60%"
          :aspect-ratio="9/16"
          :src=item.cover_photo
        >
        </v-img>
      </v-flex>
      <v-flex
        xs12 sm9
      >
        <div class="mb-3">
          <h2>
            {{item.name}}
          </h2>
          {{item.author}}
          <v-divider></v-divider>
        </div>
        {{item.description}}
          <v-layout justify-end>
            <v-dialog
              v-model="dialog"
              width="500"
            >
            <template v-slot:activator="{ on }">
              <v-btn
                color="success"
                v-on="on"
              >
                借りる
              </v-btn>
            </template>
            <v-card>
              <v-card-title
                class="headline grey lighten-2"
                primary-title
              >
                レンタル情報入力
              </v-card-title>

              <v-card-text>
                <v-container>
                  <v-layout>
                    <v-flex
                      xs8 offset-xs2
                    >
                      <v-menu
                        ref="menu"
                        v-model="menu"
                        :close-on-content-click="false"
                        :return-value.sync="date"
                        transition="scale-transition"
                        offset-y
                        full-width
                        min-width="290px"
                      >
                        <template v-slot:activator="{ on }">
                          <v-text-field
                            v-model="date"
                            label="予定返却日"
                            min="date"
                            readonly
                            v-on="on"
                          >
                          </v-text-field>
                        </template>
                        <v-date-picker v-model="date" no-title scrollable>
                          <v-spacer></v-spacer>
                          <v-btn text color="primary" @click="menu = false">Cancel</v-btn>
                          <v-btn text color="primary" @click="$refs.menu.save(date)">OK</v-btn>
                        </v-date-picker>
                      </v-menu>
                    </v-flex>
                  </v-layout>
                </v-container>
              </v-card-text>

              <v-divider></v-divider>

              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn
                  color="primary"
                  text
                  @click="sendBorrowRequest"
                >
                  決定
                </v-btn>
              </v-card-actions>
            </v-card>
            </v-dialog>
          </v-layout>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
    export default {
        data () {
            return {
                date: new Date().toISOString().substr(0, 10),
                dialog: false,
                menu: false,
            }
        },
        methods: {
            goBack: function() {
                this.$router.back();
            },
            sendBorrowRequest: function () {
                this.dialog = false;
            }
        },
        async asyncData({ app, params }) {
            const url = 'http://' + window.location.hostname + ':8080/api/v1/bookDetail/'  +params.id;
            const response = await app.$axios.$get(url);
            return {
                item: response.data
            }
        }
    }
</script>

<style scoped>

</style>
