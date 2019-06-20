<template>
  <section>
    <metadata-form
      :errors="errors"
      :form="form"
      :fields="fields"
      @update="onUpdate"
    />
  </section>
</template>

<script>
import { NAMES as ACTION_NAMES } from "./../store/actions";
import { basic } from './../../../factories/mixins/form';
import { hasForm } from './../../../factories/mixins/metadata';
import metadatas from './../metadatas';

export default {
  mixins: [
    basic('user', ACTION_NAMES),
    hasForm(metadatas)
  ],
};
</script>
