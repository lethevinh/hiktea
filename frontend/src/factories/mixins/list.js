import { mapState } from "vuex";
import i18n from "./../../services/i18n";

export const pagination = function(module, ACTION_NAMES) {
  return {
    mounted() {
      this.$store.dispatch(ACTION_NAMES.FETCH, { page: 1 });
    },
    methods: {
      onPageChange(page) {
        this.$store.dispatch(ACTION_NAMES.FETCH, { page });
      }
    },
    computed: mapState({
      data: ({ [module]: { items } }) => items,
      total: ({ [module]: { total } }) => total,
      isLoading: ({ [module]: { isLoading } }) => isLoading
    })
  };
};

export const withForm = function(module, ACTION_NAMES) {
  return {
    methods: {
      titleOf(data, action = "edit") {
        const title = i18n.t(`modules.${module}.title`);
        if (data && data["@id"]) {
          return i18n.t("forms.title." + action, {
            name: `${title} (${data["id"]})`
          });
        }
        return i18n.t("forms.title.create", {
          name: title
        });
      },
      submit() {
        this.$store.dispatch(ACTION_NAMES.SUBMIT, {
          form: this.form,
          page: this.page
        });
      },
      unedit() {
        this.$store.dispatch(ACTION_NAMES.EDIT, null);
      },
      edit(row) {
        this.$store.dispatch(ACTION_NAMES.EDIT, row);
      },
      remove(row) {
        const title = i18n.t(`modules.${module}.title`);
        var message = this.$t('forms.messages.warning_delete_post', {
          name: `${title} (${row["id"]})`
        })
        this.$confirm(message, this.titleOf(row, "remove"), {
          confirmButtonText: 'OK',
          cancelButtonText: 'Cancel',
          type: 'warning'
        }).then(() => {
          this.$store.dispatch(ACTION_NAMES.DELETE, {
            item: row
          });
        }).catch(() => {
        });
      }
    },
    computed: mapState({
      form: ({ [module]: { form } }) => form,
      isSubmitting: ({ [module]: { isSubmitting } }) => isSubmitting,
      isFormActive: ({ [module]: { form } }) => !!form
    })
  };
};
