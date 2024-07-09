const passField = document.getElementById("mk");
      const showBtn = document.querySelector("span i");
      showBtn.onclick = (()=>{
        if(passField.type === "password"){
          passField.type = "text";
          showBtn.classList.add("hide-btn");
        }else{
          passField.type = "password";
          showBtn.classList.remove("hide-btn");
        }
      });
// <script type="module">
//     import {InputSpinner} from "./src/bootstrap-input-spinner.js"
//     $("input[type='number']").inputSpinner()
// </script>