<template>
  <span v-bind:class="{ 'tag is-text':isTag()}">
    {{ print() }}
  </span>
</template>

<script>

import { TYPE } from './../../services/metadata';
import i18n from './../../services/i18n';

export default {
  props: {
    column: Object,
    row: Object,
  },
  methods: {
    print() {
      const value = this.row[this.column.name];
      switch(true) {
        case this.column.type === TYPE.BOOL:
          return i18n.t(`html.metadata.${value}`);
        case this.column.type === TYPE.RELATION:
          return this.column.present.relation.display(value);
      }

      return value;
    },
    isTag() {
      return [TYPE.BOOL, TYPE.RELATION].includes(this.column.type);
    },
    isBoolean() {
      return this.column.type === TYPE.BOOL;
    }
  }
}

</script>