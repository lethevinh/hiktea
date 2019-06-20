<template>
  <section>
    <b-notification type="is-danger" v-if="errorsOf('_')">
      <span v-for="(message, index) in errorsOf('_')" v-bind:key="index">
        {{ message }}
      </span>
    </b-notification>
  </section>
</template>

<script>
import { mapState } from "vuex";
import { NAMES as ACTION_NAMES } from "./../store/actions";

export default {
  computed: mapState({
    farm: ({ farm: { form } }) => form,
    errors: ({ farm: { errors } }) =>
      errors.reduce((hash, { field, messages }) => {
        hash[field] = messages;
        return hash;
      }, {})
  }),
  methods: {
    typeOf(field) {
      if (this.errorsOf(field)) {
        return "is-danger";
      }
      return null;
    },
    errorsOf(field) {
      if (this.errors[field]) {
        return this.errors[field];
      }
      return null;
    },
    update(value, field) {
      this.$store.dispatch(ACTION_NAMES.CHANGE, {
        value,
        field
      });
    }
  }
};
</script>
