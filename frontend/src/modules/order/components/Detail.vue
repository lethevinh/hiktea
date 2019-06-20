<template>
  <section>
    <order-items-list />
    <section>
      <b-tabs v-model="activeTab" position="is-centered">
        <b-tab-item label="Production">
          <h6 class="title is-6">Blue corn
            <span class="tag is-text">
              Crop variety
            </span>
          </h6>
          <assignments-list />
          <hr />
          <h6 class="title is-6">Yello corn
            <span class="tag is-text">
              Crop variety
            </span>
          </h6>
          <assignments-list />
        </b-tab-item>

        <b-tab-item label="Report">
          <reports-list />
        </b-tab-item>

        <b-tab-item label="Sheet">
          <sheets-list />
        </b-tab-item>
      </b-tabs>
    </section>

  </section>
</template>

<script>
import OrderItemsList from "./OrderItemsList";
import ReportsList from "./ReportsList";
import AssignmentsList from "./AssignmentsList";
import SheetsList from "./SheetsList";

export default {
  data() {
    return {
      activeTab: 0
    };
  },
  components: {
    OrderItemsList,
    ReportsList,
    AssignmentsList,
    SheetsList
  }
};
</script>