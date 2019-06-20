<template>
  <b-table :data="items" :loading="isLoading">
    <template slot-scope="props">
      <b-table-column field="id" label="ID" width="40" numeric sortable>
        {{ props.row.id }}
      </b-table-column>

      <b-table-column field="crop" label="Crop" centered width="200">
        {{ props.row.crop }}
        <span class="tag is-text">
          Crop variety
        </span>
      </b-table-column>

      <b-table-column field="quantity" label="Quantity">
        {{ props.row.quantity }}
      </b-table-column>

      <b-table-column field="plant_base" label="Plant Base">
        <span class="tag is-text">
          {{ props.row.plant_base }}
        </span>
      </b-table-column>

      <b-table-column field="quality_grade" label="Quantity Grade">
        <span class="tag is-text">
          {{ props.row.quality_grade }}
        </span>
      </b-table-column>

      <b-table-column field="estimate_start_sowing_at" label="Estimate start sowing" centered>
        <span class="tag is-info">
          {{ props.row.estimate_start_sowing_at }}
        </span>
      </b-table-column>

      <b-table-column field="stock_seed_delivered_at" label="Stock seed delivered at" centered>
        <span class="tag is-success">
          {{ props.row.stock_seed_delivered_at }}
        </span>
      </b-table-column>

      <b-table-column field="stock_seed_male_count" label="Stock seed male" centered>
        {{ props.row.stock_seed_male_count }}
      </b-table-column>

      <b-table-column field="stock_seed_female_count" label="Stock seed female" centered>
        {{ props.row.stock_seed_female_count }}
      </b-table-column>

      <b-table-column field="remark" label="Remark" centered>
        {{ props.row.remark }}
      </b-table-column>
    </template>
  </b-table>
</template>

<script>
export default {
  data() {
    return {
      isLoading: false,
      items: [
        {
          id: 1,
          crop: "Blue corn",
          quantity: 100,
          plant_base: 101,
          quality_grade: "A",
          estimate_start_sowing_at: new Date().toLocaleDateString(),
          stock_seed_delivered_at: new Date().toLocaleDateString(),
          stock_seed_male_count: 20,
          stock_seed_female_count: 200,
          remark: "Somenotes"
        },
        {
          id: 2,
          crop: "Yello corn",
          quantity: 100,
          plant_base: 101,
          quality_grade: "A",
          estimate_start_sowing_at: new Date().toLocaleDateString(),
          stock_seed_delivered_at: new Date().toLocaleDateString(),
          stock_seed_male_count: 20,
          stock_seed_female_count: 200,
          remark: "Somenotes"
        }
      ]
    };
  }
};
</script>