const modal = document.getElementById("modal");
const deleteBtns = document.querySelectorAll(".delete");
const closeBtn = document.querySelector(".close");
const btnClose = document.querySelector(".btn-close");

deleteBtns.forEach(btn => {
  btn.addEventListener("click", function() {
    modal.style.display = "block";
  });
});

closeBtn.addEventListener("click", function() {
  modal.style.display = "none";
});

btnClose.addEventListener("click", function() {
  modal.style.display = "none";
});

// Bắt sự kiện nhấn Esc để đóng bảng thông báo
window.addEventListener("keydown", function(event) {
  if (event.key === "Escape") {
    modal.style.display = "none";
  }
});
