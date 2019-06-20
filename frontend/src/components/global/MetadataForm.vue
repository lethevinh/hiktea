<template>
  <el-form ref="form" :model="form" label-width="120px">
    <b-notification
      type="is-danger"
      v-if="errorsOf('_')"
    >
      <span
        v-for="(message, index) in errorsOf('_')"
        v-bind:key="index"
      >
        {{ message }}
      </span>
    </b-notification>
    <template v-for="field in fields">
      <el-form-item 
        :key="field.name"
        :label="field.label"
        :type="typeOf(field.name)"
        :message="errorsOf(field.name)"
        v-if="isVisible(field)"
      >
          <el-input 
            :value="form[field.name]"
            @input="onUpdate($event, field)"
            :name="form[field.name]"
            v-if="isText(field)"
          >
           <i
            class="el-icon-edit el-input__icon"
            slot="suffix">
            </i>
          </el-input>
          <autocomplete-field
          :key="field.name"
          :data="search[field.present.relation.resource]"
          :item="form[field.name]"
          :normalize="field.search.normalize"
          :denormalize="field.search.denormalize"
          :isSearching="isSearching"
          @input="onSearch($event, field)"
          @select="onUpdate($event, field)"
          v-if="isRelation(field)"
          field="value"
        />
        <el-checkbox 
          v-if="isBoolean(field)" 
          :value="form[field.name]"
          @input="onUpdate($event, field)"
          :name="form[field.name]">
          </el-checkbox>
      </el-form-item>
    </template>
  </el-form>
</template>

<script>

import { TYPE } from './../../services/metadata';

export default {
  props: {
    form: Object,
    search: Object,
    isSearching: Boolean,
    fields: Array,
    errors: Object,
  },
  methods: {
    onUpdate(event, field) {
      this.$emit('update', event, field.name);
    },
    onSearch(event, field) {
      this.$emit('search', event, field);
    },
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
    isRelation(field) {
      return field.type === TYPE.RELATION;
    },
    isText(field) {
      return [TYPE.EMAIL, TYPE.STR].includes(field.type);
    },
    isCreating() {
      return !this.isEditing();
    },
    isEditing() {
      return this.form["id"];
    },
    isVisible(field) {
      return (this.isCreating() && field.present.isCreatable) || (this.isEditing() && field.present.isEditable);
    },
    isBoolean(field) {
      return field.type === TYPE.BOOL;
    }
  }
}

</script>