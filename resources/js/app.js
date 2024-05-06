import "./bootstrap";

import { createApp, ref } from "vue";
import app from "./components/app.vue";
import router from "./router";

const agreed = ref(false);
createApp(app).use(router).mount("#app");
