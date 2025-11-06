document.addEventListener("DOMContentLoaded", () => {
  const gatita = document.createElement("div");
  gatita.className = "gatita";
  gatita.innerText = "🐱";
  document.body.appendChild(gatita);

  const style = document.createElement("style");
  style.textContent = `
    body { cursor: none; }
    .gatita {
      position: absolute;
      font-size: 28px;
      transform: translate(-50%, -50%);
      pointer-events: none;
    }
    .paw {
      position: absolute;
      font-size: 18px;
      animation: fadeOut 1s forwards;
      pointer-events: none;
    }
    @keyframes fadeOut {
      0% { opacity: 1; transform: scale(1); }
      100% { opacity: 0; transform: scale(0.5); }
    }
  `;
  document.head.appendChild(style);

  document.addEventListener("mousemove", e => {
    gatita.style.left = e.pageX + "px";
    gatita.style.top = e.pageY + "px";

    const paw = document.createElement("div");
    paw.className = "paw";
    paw.innerText = "🐾";

    const offsetX = (Math.random() - 0.5) * 40;
    const offsetY = (Math.random() - 0.5) * 40;

    paw.style.left = (e.pageX + offsetX) + "px";
    paw.style.top = (e.pageY + offsetY) + "px";

    document.body.appendChild(paw);

    setTimeout(() => paw.remove(), 1000);
  });
});
