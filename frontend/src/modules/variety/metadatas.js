import { make, TYPE } from "./../../services/metadata";
import { search } from "./../../services/hydra";
const searchUserNormalizer = item => {
    var result = {
        value: "",
        data: {}
    };
    if (item) {
        result = {
            value: item.email,
            data: item
        };
    }
    return result;
};
export default [
    make("variety", { name: "id" }),
    make("variety", {
        name: "name",
        type: "string",
        present: {
            isHeader: true,
            isEditable: false,
            isCreatable: true
        }
    }),
    make("variety", {
        name: "code",
        type: "string",
        present: {
            isHeader: true,
            isEditable: true,
            isCreatable: true
        }
    }),
    make("variety", {
        name: "customer",
        type: TYPE.RELATION,
        search: {
            normalize: searchUserNormalizer,
            denormalize: ({ data }) => data ,
            lookup: value => {
                return search("/api/customers", {
                    filter: "email",
                    value
                }).then(items => {
                    return {
                        items: items.map(searchUserNormalizer),
                        name: "/api/customers"
                    };
                });
            }
        },
        present: {
            isHeader: true,
            isEditable: true,
            isCreatable: true,
            relation: {
                display: user => user.email,
                resource: "/api/customers",
                filter: "email"
            }
        }
    })
];