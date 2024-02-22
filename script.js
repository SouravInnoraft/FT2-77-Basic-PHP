const firstName = document.querySelector("#t1");
const secondName = document.querySelector("#t2");
const fullName = document.querySelector("#t3");
secondName.addEventListener('change', function () {
    fullName.value = firstName.value + " " + secondName.value;
});
