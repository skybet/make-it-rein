var horseArray = [];

function addHorseToArray() {
  var horseName = document.getElementById("x").value;
  horseArray.push(horseName);
  document.getElementById("x").value = null;
  console.log(horseArray);

  var ul = document.getElementById("list");
  var li = document.createElement("li");
  li.appendChild(document.createTextNode(horseName));
  ul.appendChild(li);

}
