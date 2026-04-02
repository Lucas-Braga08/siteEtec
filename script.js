function mensagem() {
    alert("Explore nossos cursos e comece sua jornada!");
}

// efeito simples ao rolar
window.addEventListener("scroll", () => {
    document.querySelectorAll(".card").forEach(card => {
        card.style.opacity = "1";
    });
});

