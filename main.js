 document.getElementById('menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });


    const modal = document.getElementById("modal");
    const openModalButton = document.getElementById("openModal");
    const closeModalButton = document.getElementById("closeModal");
    const closeModalFooterButton = document.getElementById("closeModalFooter");

    openModalButton.addEventListener("click", () => {
      modal.classList.remove("hidden");
    });

    const closeModal = () => {
      modal.classList.add("hidden");
    };

    closeModalButton.addEventListener("click", closeModal);
    closeModalFooterButton.addEventListener("click", closeModal);
