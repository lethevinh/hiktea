<template>
    <metadata-form
      :errors="errors"
      :form="form"
      :fields="fields"
      :search="search"
      :isSearching="isSearching"
      @update="onUpdate"
      @search="onSearch"
    />
</template>

<script>
import { mapState } from "vuex";
import { NAMES as ACTION_NAMES } from "./../store/actions";
import { basic } from './../../../factories/mixins/form';
import { hasForm } from './../../../factories/mixins/metadata';
import metadatas from './../metadatas';
import { throttle } from 'lodash';

export default {
  mixins: [
    basic('farm', ACTION_NAMES),
    hasForm(metadatas)
  ],
  computed: mapState({
    search: ({ farm: { search } }) => search,
    isSearching: ({ farm: { isSearching } }) => isSearching
  }),
  methods: {
    onSearch: throttle(function(value, resource, filter) {
      this.$store.dispatch(ACTION_NAMES.SEARCH, {
        value,
        resource,
        filter
      });
    }, 100)
  }
};
</script>
