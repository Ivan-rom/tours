const buttons = document.querySelectorAll(".btn");
const sections = document.querySelectorAll("section");

for (let i = 0; i < buttons.length; i++) {
    const button = buttons[i];
    button.addEventListener("click", () => {
        for (let j = 0; j < sections.length; j++) {
            const section = sections[j];
            section.style.display = "none";
            if (i === j) {
                section.style.display = "block";
            }
        }
    })
}