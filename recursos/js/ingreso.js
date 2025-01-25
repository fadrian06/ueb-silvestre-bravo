// Supports weights 100-900
import "@fontsource-variable/montserrat";
import "boxicons/css/boxicons.min.css";
import Noty from "noty";
import "noty/lib/noty.css";
import "../css/ingreso.css";

Noty.overrideDefaults({
	timeout: 5000,
	layout: "topRight",
	progressBar: true,
	theme: "bootstrap-v4",
	// modal: true,
});

globalThis.Noty = Noty;
