const button = document.getElementById("nextstep");
button.addEventListener("click", (event) => {
  fetch("back/app.php")
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      if (data.error == "ok") {
        document.getElementById("app").outerHTML = data.result;
        //console.log(data);
      } else {
        console.log(data);
      }
    });
});
