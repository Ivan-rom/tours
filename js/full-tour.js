const elements = document.querySelectorAll(".tours__item");
const list = document.querySelector(".tours__list");
const modal = document.querySelector(".modal");
const modalTitle = modal.querySelector(".title");
const modalPrice = modal.querySelector(".count");
const modalDescription = modal.querySelector(".description");
const modalImage = modal.querySelector("img");

modal.addEventListener("click", () => modal.classList.remove("active"));

for (let i = 0; i < elements.length; i++) {
    const element = elements[i];
    const button = element.querySelector(".link");
    button.addEventListener("click", e => {
        e.preventDefault();
        modalTitle.textContent = element.querySelector(".title").textContent;
        modalPrice.textContent = element.querySelector(".price").textContent;
        modalDescription.textContent = element.querySelector(".description").textContent;
        modalImage.src = element.querySelector("img").src;
        modal.classList.add("active");
    });
}