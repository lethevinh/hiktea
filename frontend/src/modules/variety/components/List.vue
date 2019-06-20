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
          <el-table-column label="Actions" width="120">
              <template slot-scope="props">
                  <el-button @click="edit(props.row)" type="success" icon="el-icon-edit" circle>
                  </el-button>
                  <el-button @click="remove(props.row)" type="danger" icon="el-icon-delete" circle></el-button>
              </template>
          </el-table-column>
      </el-table>
      <div class="block">
          <el-pagination @current-change="onPageChange" layout="total, prev, pager, next, jumper" :total="total">
          </el-pagination>
      </div>
      <el-dialog :title="titleOf(form)" :visible.sync="isFormActive" :before-close="unedit">
          <entity-form :form="form" v-if="isFormActive" />
          <span slot="footer" class="dialog-footer">
              <el-button @click="unedit">{{ $t('forms.actions.close') }}</el-button>
              <el-button type="primary" @click="submit">{{ $t('forms.actions.save') }}</el-button>
          </span>
      </el-dialog>
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
    pagination('variety', ACTION_NAMES),
    withForm('variety', ACTION_NAMES),
    hasTable(metadatas),
  ],
};
</script>