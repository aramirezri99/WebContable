import scrollbuttonslinks from "./buttons-links.js";
import headerscroll from "./header.js";
import scrollTopButton from "./scroll-btn.js";

const d = document;

d.addEventListener("DOMContentLoaded", (e) => {
  headerscroll(".logo-container", "active");
  scrollTopButton(".scroll-top-btn");
  scrollbuttonslinks(".btn-whatssap", ".btn-facebook");
});
