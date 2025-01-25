import Noty from "noty";
import "noty/lib/noty.css";

Noty.overrideDefaults({
  timeout: 5000,
  layout: "topRight",
  progressBar: true,
  theme: "bootstrap-v4",
  // modal: true,
});

globalThis.Noty = Noty;
