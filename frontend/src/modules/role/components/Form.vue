<template>
  <section>
    <b-notification type="is-danger" v-if="errorsOf('_')">
      <span v-for="(message, index) in errorsOf('_')" v-bind:key="index">
        {{ message }}
      </span>
    </b-notification>
    <b-field label="Name" :type="typeOf('name')" :message="errorsOf('name')">
      <b-input :value="role.name" @input="update($event, 'name')" name="name" placeholder="Name" required />
    </b-field>
    <section>
      <label class="label">
        Modules
      </label>
      <div class="field">
        <b-checkbox :value="role.modules" @input="update($event, 'modules')" native-value="*">
          All
        </b-checkbox>
      </div>
      <div class="field">
        <b-checkbox :value="role.modules" @input="update($event, 'modules')" native-value="create_user">
          Create user
        </b-checkbox>
      </div>
      <div class="field">
        <b-checkbox :value="role.modules" @input="update($event, 'modules')" native-value="edit_user">
          Edit user
        </b-checkbox>
      </div>
    </section>
  </section>
</template>

<script>
import { mapState } from "vuex";
import { NAMES as ACTION_NAMES } from "./../store/actions";

export default {
  computed: mapState({
    role: ({ role: { form } }) => form,
    errors: ({ role: { errors } }) =>
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
