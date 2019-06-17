import  * as localForage from "localforage";

const localStorage = localForage.createInstance({
    name: "store"
});

export default localStorage;