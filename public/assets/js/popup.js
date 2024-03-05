function PopUp(btn_id, PopUpid) {
    document
      .querySelector(`#${btn_id}`)
      .addEventListener("click", function () {
        document.querySelector(`#${PopUpid}`).classList.add("active");
        document.querySelector(`#${PopUpid}`).querySelector('.popup').classList.add("active");
      });
  
    //Close Login Popup
    document
      .querySelector(`#${PopUpid} .close-btn`)
      .addEventListener("click", function () {
        document.querySelector(`#${PopUpid}`).classList.remove("active");
        document.querySelector(`#${PopUpid}`).querySelector('.popup').classList.remove("active");
      });
  }
  