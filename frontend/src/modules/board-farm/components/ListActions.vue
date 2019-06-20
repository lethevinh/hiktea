<template>
  <button class="button is-success" @click="create">Create</button>
</template>

<script>
import { NAMES as ACTION_NAMES } from "./../store/actions";
export default {
  methods: {
    create() {
      this.$store.dispatch(ACTION_NAMES.EDIT, {
        name: "new crop"
      });
    }
  }
};
</script>

