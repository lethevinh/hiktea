<template>
  <section>
    <b-table :data="data" :loading="isLoading">
      <template slot-scope="props">
        <b-table-column field="id" label="ID" width="40" numeric sortable>
          {{ props.row.id }}
        </b-table-column>

        <b-table-column field="name" label="Name">
          {{ props.row.name }}
        </b-table-column>

        <b-table-column field="code" label="Farm">
          <span class="tag is-text">
            {{ props.row.farm }}
          </span>
        </b-table-column>

        <b-table-column field="code" label="User">
          <span class="tag is-text">
            {{ props.row.user }}
          </span>
        </b-table-column>

        <b-table-column width="200" label="">
          <b-taglist>
            <a class="button tag" @click="edit(props.row)">
              Edit
            </a>
          </b-taglist>
        </b-table-column>
      </template>
    </b-table>

    <b-modal :active="isFormActive" :onCancel="unedit">
      <div class="modal-card" style="width: auto">
        <header class="modal-card-head">
          <p class="modal-card-title">Edit unit</p>
        </header>
        <section class="modal-card-body">
          <entity-form v-if="isFormActive" />
        </section>
        <footer class="modal-card-foot">
          <button class="button" type="button" @click="unedit">Close</button>
          <button class="button is-primary" @click="submit">Save</button>
        </footer>
      </div>
    </b-modal>
    <b-loading :active="isSubmitting"></b-loading>
  </section>
</template>

<script>
import { mapState } from "vuex";
import EntityForm from "./Form";
import { NAMES as ACTION_NAMES } from "./../store/actions";

export default {
  components: {
    EntityForm
  },
  mounted() {
    this.$store.dispatch(ACTION_NAMES.FETCH);
  },
  methods: {
    submit() {
      this.$store.dispatch(ACTION_NAMES.SUBMIT, this.form);
    },
    unedit() {
      this.$store.dispatch(ACTION_NAMES.EDIT, null);
    },
    edit(row) {
      this.$store.dispatch(ACTION_NAMES.EDIT, row);
    }
  },
  computed: mapState({
    data: ({ unit: { items } }) => items,
    form: ({ unit: { form } }) => form,
    isLoading: ({ unit: { isLoading } }) => isLoading,
    isSubmitting: ({ unit: { isSubmitting } }) => isSubmitting,
    isFormActive: ({ unit: { form } }) => !!form
  })
};
</script>