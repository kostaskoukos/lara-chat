// import './bootstrap';
import Alpine from "alpinejs";
import jsz from "alpinejs-jsz";
import ajax from "@imacrayon/alpine-ajax";

window.Alpine = Alpine;
Alpine.plugin(jsz);
Alpine.plugin(ajax);
Alpine.start();
