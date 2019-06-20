<template>
  <div class="columns is-desktop is-centered">
    <div class="column is-half">
      <section class="section">
        <metadata-form
          :errors="errors"
          :form="form"
          :fields="fields"
          :search="search"
          :isSearching="isSearching"
          @update="onUpdate"
          @search="onSearch"
          v-if="form"
        />
         <div class="buttons">
            <back />
            <button @click="submit" class="level-item button is-success">Submit</button>
          </div>
      </section>
    </div>
  </div>
</template>

<script>
import { mapState } from "vuex";
import { NAMES as ACTION_NAMES } from "./../store/actions";
import { basic } from './../../../factories/mixins/form';
import { hasForm } from './../../../factories/mixins/metadata';
import metadatas from './../metadatas';
import { throttle } from 'lodash';
import { withForm } from './../../../factories/mixins/list';
export default {
  mixins: [
    basic('order', ACTION_NAMES),
    hasForm(metadatas),
    withForm('order', ACTION_NAMES),
  ],
  computed: mapState({
    search: ({ order: { search } }) => search,
    isSearching: ({ order: { isSearching } }) => isSearching
  }),
  methods: {
    onSearch: throttle(function(value, resource, filter) {
      this.$store.dispatch(ACTION_NAMES.SEARCH, {
        value,
        resource,
        filter
      });
    }, 100)
  },
  mounted() {
    this.$store.dispatch(ACTION_NAMES.DETAIL, {
      id: this.$route.params.id
    });
  }
};
</script>
