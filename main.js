document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("modal");
  const openModalButton = document.getElementById("openModal");
  const closeModalButton = document.getElementById("closeModal");
  const closeModalFooterButton = document.getElementById("closeModalFooter");
  const submit = document.getElementById("submit");
  const edit = document.getElementById("edit");
  const hiddenInput = document.getElementById("hiddenInput");

  openModalButton.addEventListener("click", () => {
    modal.classList.remove("hidden");
    submit.classList.remove("hidden");
    edit.classList.add("hidden");
  });


  const closeModal = () => {
    modal.classList.add("hidden");
  };



  closeModalButton.addEventListener("click", closeModal);
  closeModalFooterButton.addEventListener("click", closeModal);

  const updateButtons = document.querySelectorAll(".updateBtn");


  updateButtons.forEach((button) => {
    button.addEventListener("click", function (e) {
      const packageId = e.currentTarget.dataset.id;
      const packageName = e.currentTarget.dataset.name;
      const authorName = e.currentTarget.dataset.author; 
      const version = e.currentTarget.dataset.version;
      const description = e.currentTarget.dataset.description;

      document.getElementById("packageName").value = packageName;
      document.getElementById("AuthorName").value = authorName; 
      document.getElementById("version").value = version;
      document.getElementById("description").value = description;
      document.getElementById("hiddenInput").value = packageId;


      const form = document.getElementById("addPackageForm");
      form.action = `update.php?id=${packageId}`;


      modal.classList.remove("hidden");
      submit.classList.add("hidden");
      edit.classList.remove("hidden");
      
    });
  });
});
