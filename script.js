const firstName = document.querySelector("#t1");
const secondName = document.querySelector("#t2");
const fullName = document.querySelector("#t3");
function changeName() {
  fullName.value = firstName.value + " " + secondName.value;
}
firstName.addEventListener("input", changeName);
secondName.addEventListener("input", changeName);
