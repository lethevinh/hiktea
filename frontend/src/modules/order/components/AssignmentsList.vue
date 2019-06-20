<template>
  <b-table :data="items" :loading="isLoading">
    <template slot-scope="props">
      <b-table-column field="id" label="ID" width="40" numeric sortable>
        {{ props.row.id }}
      </b-table-column>

      <b-table-column field="phase" label="Phase" width="40">
        {{ props.row.phase }}
      </b-table-column>

      <b-table-column field="sheet" label="Sheet">
        {{ props.row.sheet }}
      </b-table-column>

      <b-table-column field="unit" label="Unit" centered>
        {{ props.row.unit }}
      </b-table-column>

      <b-table-column field="house" label="House" centered>
        {{ props.row.house }}
        <span class="tag is-text">
          Farm 345
        </span>
      </b-table-column>

      <b-table-column field="area_used" label="Area" centered>
        {{ props.row.area_used }} m2
        <span class="tag is-text">
          Full
        </span>
      </b-table-column>

      <b-table-column field="sow" label="Sow" centered>
        <span class="tag is-text">
          02/01/2019 - 02/01/2018
        </span>
      </b-table-column>

      <b-table-column field="transplant" label="Transplant" centered>
        <span class="tag is-text">
          02/01/2019 - 02/01/2018
        </span>
      </b-table-column>

      <b-table-column field="pollinate" label="Pollinate" centered>
        <span class="tag is-text">
          02/01/2019 - 02/01/2018
        </span>
      </b-table-column>

      <b-table-column field="harvest" label="Harvest" centered>
        <span class="tag is-text">
          02/01/2019 - 02/01/2018
        </span>
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
          phase: "#1",
          sheet: "424",
          unit: "Linh",
          house: "001",
          area_used: 200
        },
        {
          id: 2,
          phase: "#2",
          sheet: "425",
          unit: "Linh",
          house: "002",
          area_used: 200
        },
        {
          id: 3,
          phase: "#1",
          sheet: "427",
          unit: "Linh",
          house: "001",
          area_used: 200
        }
      ]
    };
  }
};
</script>