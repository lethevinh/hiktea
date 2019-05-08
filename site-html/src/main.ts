require('./script/jquery');
require('./style/site.css');
import { editor } from "./script/editor";
editor.init();
/*
import { page } from "./script/page";
import * as serviceworker from "./script/service-worker/register";

page.init();
if (process.env.NODE_ENV === 'production') {
	serviceworker.register();
}
*/