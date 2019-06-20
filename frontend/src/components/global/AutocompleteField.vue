<template>
  <b-autocomplete
    open-on-focus
    :data="data"
    v-model="normalizedValue"
    @input="onInput"
    @select="onSelect"
    field="value"
    icon="magnify"
    :loading="isSearching"
  >
    <template slot-scope="props">
      {{ props.option.value }}
    </template>
  </b-autocomplete>
</template>

<script>

// TODO: fix issue with overlapse select
export default {
  props: {
    item: Object,
    normalize: Function,
    denormalize: Function,
    field: String,
    data: Array,
    isSearching: Boolean
  },
  data() {
    const { value } = this.normalize(this.item);
    return {
      normalizedValue: value,
      selected: null
    }
  },
  methods: {
    onInput(value) {
      this.$emit('input', value);
    },
    onSelect(option) {
      if (option) {
        const denormalized = this.denormalize(option);
        this.$emit('select', denormalized);
        this.selected = option;
      }
    }
  }
}

</script>