import { mapState } from "vuex";

export const basic = function(module, ACTION_NAMES) {
  return {
    computed: mapState({
      form: ({ [module]: { form } }) => form,
      errors: ({ [module]: { errors } }) =>
        errors.reduce((hash, { field, message }) => {
          hash[field] = message;
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
      onUpdate(value, field) {
        this.$store.dispatch(ACTION_NAMES.CHANGE, {
          value,
          field
        });
      }
    }
  };
};
