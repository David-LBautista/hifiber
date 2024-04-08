document.addEventListener("DOMContentLoaded", function () {
  let closeButton = document.getElementById("closeMenuButton");
  let slideMenu = document.getElementById("mobileMenu");
  if (closeButton && slideMenu) {
    closeButton.addEventListener("click", function () {
      slideMenu.classList.add("hidden");
    });
  }

  let openButton = document.getElementById("openMenuButton");
  if (openButton && slideMenu) {
    openButton.addEventListener("click", function () {
      slideMenu.classList.remove("hidden");
    });
  }

  let lastScrollTop = 0;
  const navbar = document.getElementById("navbar");

  window.addEventListener("scroll", function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    let scrollDifference = scrollTop - lastScrollTop;

    if (scrollDifference < 0 || scrollTop <= 100) {
      navbar.classList.remove("hidden-navbar");
      navbar.style.top = "0";
    } else {
      navbar.classList.add("hidden-navbar");
      navbar.style.top = "-100px";
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
  });

  let splideOptions = {
    perPage: 2,
  };

  if (window.matchMedia("(max-width: 640px)").matches) {
    splideOptions.perPage = 1;
  }

  new Splide(".splide", splideOptions).mount();

  let elementos = document.querySelectorAll(".scale-up-center");

  elementos.forEach(function (elemento) {
    elemento.addEventListener("mouseenter", function () {
      elementos.forEach(function (el) {
        el.classList.remove("grow");
      });
      elemento.classList.add("grow");
    });
  });

  let form = document.getElementById("contactForm");
  form.addEventListener("submit", function (event) {
    event.preventDefault();

    let formData = new FormData(form);

    let formDataJson = {};
    for (let pair of formData.entries()) {
      formDataJson[pair[0]] = pair[1];
    }

    let jsonData = JSON.stringify(formDataJson);

    console.log(jsonData);

    fetch("URL", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: jsonData,
    })
      .then((response) => {
        if (!response.ok) {
          throw new Error("Error en la petición");
        }
        return response.json();
      })
      .then((data) => {
        console.log("Respuesta del servidor:", data);
      })
      .catch((error) => {
        console.error("Error al enviar la petición:", error);
      });
  });

  AOS.init();

  function scrollToPosition(event) {
    event.preventDefault();
    const targetId = event.target.getAttribute("href").substring(1);
    const targetElement = document.getElementById(targetId);
    const navbarHeight = navbar.offsetHeight;

    if (targetElement) {
      const targetOffsetTop = targetElement.offsetTop;
      const scrollTo = targetOffsetTop - 150 + navbarHeight;

      window.scrollTo({
        top: scrollTo,
        behavior: "smooth",
      });
    }
  }

  function redirectToIndex(sectionId) {
    // Redirecciona a index.html
    window.location.href = "./index.html";

    // Espera un momento para asegurarse de que la redirección se haya completado
    setTimeout(function () {
      // Desplázate a la sección con el id especificado
      window.location.hash = "#" + sectionId;
    }, 100); // Puedes ajustar el tiempo según sea necesario
  }

  const navbarLinks = document.querySelectorAll("#navbar a");
  navbarLinks.forEach((link) => {
    link.addEventListener("click", scrollToPosition);
  });
});
