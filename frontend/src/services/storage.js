const { localStorage: store } = window;

export const set = (key, value) => store.setItem(key, value);
export const get = key => store.getItem(key);
export const remove = key => store.removeItem(key);
