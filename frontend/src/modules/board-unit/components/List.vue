<template>
  <section>
    <h3 class="title is-3">Reports</h3>
    <b-table :data="data" :loading="isLoading">
      <template slot-scope="props">
        <b-table-column field="id" label="ID" width="40" numeric sortable>
          {{ props.row.id }}
        </b-table-column>

        <b-table-column field="order" label="Order">
          <span class="tag is-text" v-if="props.row.order">
            {{ props.row.order }}
          </span>
        </b-table-column>

        <b-table-column field="type" label="Type">
          <span class="tag is-text" v-if="props.row.type">
            {{ props.row.type }}
          </span>
        </b-table-column>

        <b-table-column field="code" label="Farm">
          <span class="tag is-text" v-if="props.row.farm">
            {{ props.row.farm }}
          </span>
        </b-table-column>

        <b-table-column field="status" label="Status">
          <span class="tag is-text" v-if="props.row.status">
            {{ props.row.status }}
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
    <h3 class="title is-3">Assignments</h3>
    <h6 class="title is-6">Blue corn
      <span class="tag is-text">
        Crop variety
      </span>
    </h6>
    <assignments-list />

    <b-modal :active="isFormActive" :onCancel="unedit">
      <div class="modal-card" style="width: auto">
        <header class="modal-card-head">
          <p class="modal-card-title">Edit Report</p>
        </header>
        <section class="modal-card-body">
          <entity-form v-if="isFormActive" />
          <p class="title is-4">Linh</p>
          <p class="subtitle is-6">
            <b-taglist>
              <span class="tag is-text">
                Farm 345
              </span>
              <span class="tag is-text">
                House 400
              </span>
              <span class="tag is-text">
                Phase 1
              </span>
              <span class="tag is-text">
                Yellow corn (
                <b>Crop variety</b>)
              </span>
            </b-taglist>
          </p>
          <nav class="columns">
            <div class="column">
              <p>
                <label class="label">Sown at</label>
                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
              </p>
              <p>
                <label class="label">Planted at</label>
                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
              </p>
              <p>
                <label class="label">Planted small pot at</label>
                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
              </p>
              <p>
                <label class="label">Planted large pot at</label>
                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
              </p>
            </div>
            <div class="column">
              <p>
                <label class="label">Plant number</label>
                <span>200</span>
              </p>
              <p>
                <label class="label">Tray number</label>
                <span>20</span>
              </p>
              <p>
                <label class="label">Note</label>
                is simply dummy text of the printing and ersions of Lorem Ipsu
              </p>
            </div>
          </nav>
        </section>
        <footer class="modal-card-foot">
          <button class="button" type="button" @click="unedit">Close</button>
          <button class="button is-primary" @click="submit">Approve</button>
        </footer>
      </div>
    </b-modal>
    <b-loading :active="isSubmitting"></b-loading>
  </section>
</template>

<script>
import { mapState } from "vuex";
import EntityForm from "./Form";
import AssignmentsList from "./../../order/components/AssignmentsList";

import { NAMES as ACTION_NAMES } from "./../store/actions";

export default {
  components: {
    EntityForm,
    AssignmentsList
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
    data: ({ boardFarm: { items } }) => items,
    form: ({ boardFarm: { form } }) => form,
    isLoading: ({ boardFarm: { isLoading } }) => isLoading,
    isSubmitting: ({ boardFarm: { isSubmitting } }) => isSubmitting,
    isFormActive: ({ boardFarm: { form } }) => !!form
  })
};
</script>