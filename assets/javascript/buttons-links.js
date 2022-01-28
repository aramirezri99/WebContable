const d = document,
  w = window;

export default function scrollbuttonslinks(btnwhatssap, btnfacebbok) {
  const $Btnwhat = d.querySelector(btnwhatssap);
  const $Btnface = d.querySelector(btnfacebbok);

  w.addEventListener("scroll", (e) => {
    let scrollTop = w.pageYOffset || d.documentElement.scrollTop;
    if (scrollTop > 500) {
      $Btnwhat.classList.remove("hidden");
      $Btnface.classList.remove("hidden");
    } else {
      $Btnwhat.classList.add("hidden");
      $Btnface.classList.add("hidden");
    }
    //console.log(w.pageYOffset, d.documentElement.scrollTop);
  });

  d.addEventListener("click", (e) => {
    if (e.target.matches(btnwhatssap) & e.target.matches(btnfacebbok)) {
      w.scrollTo({
        behavior: "smooth",
        top: 0,
      });
    }
  });
}
