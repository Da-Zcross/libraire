const boxes = document.querySelectorAll('.box');

boxes.forEach((box) => {
  box.addEventListener('click', () => {
    // Réinitialiser tous les conteneurs
    boxes.forEach((b) => {
      b.classList.remove('active');
      // Réappliquer la position de base
      if (b.dataset.index == "1") {
        b.style.transform = "translateX(-200px) scale(0.8)";
        b.style.zIndex = 1;
      } else if (b.dataset.index == "2") {
        b.style.transform = "translateX(-50px) scale(0.9)";
        b.style.zIndex = 2;
      } else if (b.dataset.index == "3") {
        b.style.transform = "translateX(100px) scale(0.8)";
        b.style.zIndex = 1;
      } else if (b.dataset.index == "4") {
        b.style.transform = "translateX(250px) scale(0.7)";
        b.style.zIndex = 1;
      }
    });

    // Mettre le conteneur cliqué au premier plan
    box.classList.add('active');
    box.style.transform = "translateX(0) scale(1)";
    box.style.zIndex = 10;
  });
});
