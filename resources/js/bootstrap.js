window._ = require("lodash");
try {
    window.Popper = require("popper.js").default;
    window.$ = window.jQuery = require("jquery");

    require("bootstrap");
} catch (e) {}

window.axios = require("axios");

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

require("datatables.net-bs4");
require("datatables.net-responsive-bs4");

$("#alltbl").DataTable({
    responsive: true,
    autoWidth: true,
    lengthMenu: [
        [10, 15, 20, 50, 100, -1],
        [10, 15, 20, 50, 100, "All"],
    ],
});
