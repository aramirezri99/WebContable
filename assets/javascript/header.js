const d = document;
export default function headerscroll(header, active) {
  d.querySelector(header).classList.toggle(active);
}
