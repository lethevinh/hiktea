<template>
  <el-card class="box-card">
      <el-table v-loading="isLoading" :data="data" border highlight-current-row style="width: 100%;">
          <el-table-column type="selection" width="55">
          </el-table-column>
          <el-table-column v-for="column in columns" :key="column.name" :field="column.name" :label="column.label" :width="column.present.columnWidth">
              <template slot-scope="props">
                  <metadata-value :column="column" :row="props.row" />
              </template>
          </el-table-column>
          <el-table-column label="Actions" width="160">
            <template slot-scope="scope">
              <router-link :to="{name: 'modules.order.edit', params: {id: scope.row.id}}">
                <el-button type="success" icon="el-icon-edit" circle></el-button>
              </router-link>
              <router-link :to="{name: 'modules.order.detail', params: {id: scope.row.id}}">
                 <el-button type="info" icon="el-icon-view" circle></el-button>
              </router-link>
              <el-button type="danger" icon="el-icon-delete" circle></el-button>
            </template>
          </el-table-column>
      </el-table>
      <div class="block">
          <el-pagination @current-change="onPageChange" layout="total, prev, pager, next, jumper" :total="total">
          </el-pagination>
      </div>
      <b-loading :active="isSubmitting"></b-loading>
  </el-card>
</template>

<script>
import EntityForm from "./Form";
import { NAMES as ACTION_NAMES } from "./../store/actions";
import metadatas from './../metadatas';
import { pagination, withForm } from './../../../factories/mixins/list';
import { hasTable } from './../../../factories/mixins/metadata';

export default {
  components: {
    EntityForm
  },
  mixins: [
    pagination('order', ACTION_NAMES),
    withForm('order', ACTION_NAMES),
    hasTable(metadatas),
  ],
};
</script>