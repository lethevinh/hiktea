<template>
  <section class="hero is-fullheight">
    <div class="hero-body">
      <div class="container">
        <div class="column is-4 is-offset-4">
          <div class="section has-text-centered">
            <h3 class="title has-text-grey">{{ $t("html.login.title") }}</h3>
            <p class="subtitle has-text-grey">{{ $t("html.login.subtitle") }}</p>
          </div>
          <div class="box">
            <form @submit="submit">
              <b-notification type="is-danger" v-if="errorsOf('_')">
                <span v-for="(message, index) in errorsOf('_')" v-bind:key="index">
                  {{ message }}
                </span>
              </b-notification>
              <b-field :label="$t('forms.login.field.username')">
                <b-input :value="form.username" @input="update($event, 'username')" placeholder="john@silver.com" focus type="email" required :disabled="isSubmitting" />
              </b-field>

              <b-field :label="$t('forms.login.field.password')">
                <b-input type="password" :value="form.password" @input="update($event, 'password')" password-reveal required :disabled="isSubmitting" />
              </b-field>
              <p class="control">
                <button class="button is-primary is-fullwidth" type="submit">
                  {{ $t("html.login.login") }}
                </button>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>

import { mapState } from "vuex";
import { NAMES as ACTION_NAMES } from "./../store/modules/auth/actions";


export default {
  computed: mapState({
    form: ({ auth: { form } }) => form,
    isSubmitting: ({ auth: { isSubmitting } }) => isSubmitting,
    errors: ({ auth: { errors } }) =>
      errors.reduce((hash, { field, messages }) => {
        hash[field] = messages;
        return hash;
      }, {}),
  }),
  methods :{ 
    submit(e) {
      this.$store.dispatch(ACTION_NAMES.SUBMIT, this.form);
      e.preventDefault();
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
}
</script>