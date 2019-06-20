<template>
  <el-button type="primary" icon="el-icon-plus" @click="create">{{ $t('forms.actions.create') }}</el-button>
</template>

<script>
import { NAMES as ACTION_NAMES } from "./../store/actions";
export default {
  methods: {
    create() {
      this.$store.dispatch(ACTION_NAMES.EDIT, {
        name: "new variety"
      });
    }
  }
};
</script>

