const vegetableElement = document.getElementById("main")
console.log('vegetableElement:', vegetableElement)


vegetableElement.addEventListener("click", (event) => {
  console.log(event.target.getAttribute("name"))
})