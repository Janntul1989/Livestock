//cow ration calculator/////////////////////
function toggleInputs() {
  const cowType = document.getElementById("cowType").value;
  const dairyInputs = document.getElementById("dairyInputs");
  const fatteningInputs = document.getElementById("fatteningInputs");

  if (cowType === "dairy") {
    dairyInputs.style.display = "block";
    fatteningInputs.style.display = "none";
  } else if (cowType === "fattening") {
    dairyInputs.style.display = "none";
    fatteningInputs.style.display = "block";
  }
}

function calculateRation() {
  const cowType = document.getElementById("cowType").value;
  const cowWeight = parseFloat(document.getElementById("cowWeight").value);
  const milkVolume = parseFloat(document.getElementById("milkVolume").value);
  const fatteningCowWeight = parseFloat(document.getElementById("fatteningCowWeight").value);

  let dm, r, d, s, g, os, og, od;

  if (cowType === "dairy") {
    dm = (0.02 * cowWeight) + (0.3 * milkVolume);
    r = Math.floor(0.6 * dm);
    d = Math.ceil(0.4 * dm) + .5;
    g = (0.6 * r) * 5;
    s = (0.4 * r) + .5;
  } else if (cowType === "fattening") {
    dm = 0.025 * fatteningCowWeight;
    r = Math.floor(0.6 * dm);
    d = Math.ceil(0.4 * dm) + .5;
    g = (0.6 * r) * 5;
    s = (0.4 * r) + .5;
  }

  const selectedFoods = [];
  const foodCheckBoxes = document.querySelectorAll("input[type='checkbox']:checked");
  foodCheckBoxes.forEach(checkbox => {
    selectedFoods.push(checkbox.value);
  });

  const outputDiv = document.getElementById("output");
  outputDiv.innerHTML = "";

  selectedFoods.forEach(food => {
    let quantity;
    switch (food) {
      case "খড়":
        quantity = s;
        break;
      case "সবুজ ঘাস":
        quantity = g;
        break;
      case "dana":
        quantity = d;
        break;

      case " গমের ভুষি":
      case "চালের কুড়া":
        quantity = d * 0.33;
        break;
      case "সরিষার খৈল":
        quantity = d * 0.17;
        break;
      case "খেশারী":
        quantity = d * 0.1;
        break;
      case "ভিটামিন-মিনারেল প্রিমিক্স":
      case "লবন":
        quantity = d * 0.03;
        break;
      default:
        quantity = 0;
    }

    const integerPart = Math.floor(quantity);
    const decimalPart = Math.round((quantity - integerPart) * 1000);

    let output = "";
    if (integerPart > 0) {
      output += `${integerPart} কেজি `;
    }
    if (decimalPart > 0) {
      output += `${decimalPart} গ্রাম`;
    }

    if (output !== "") {
      outputDiv.innerHTML += `${food} ............... (${output})<br><br>`;
    }

  });
}

function clearInputs() {
  document.getElementById("cowWeight").value = "";
  document.getElementById("milkVolume").value = "";
  document.getElementById("fatteningCowWeight").value = "";

  const foodCheckBoxes = document.querySelectorAll("input[type='checkbox']:checked");
  foodCheckBoxes.forEach(checkbox => {
    checkbox.checked = false;
  });

  document.getElementById("output").innerHTML = "";
}


// chicken ration
function showChickenInfo() {
  var selectedChicken = document.getElementById("chickenType").value;

  // Hide all chicken divs
  var allDivs = document.querySelectorAll("div[id$='Div']");
  for (var i = 0; i < allDivs.length; i++) {
    allDivs[i].style.display = "none";
  }

  // Show the div corresponding to the selected chicken type
  var selectedDiv = document.getElementById(selectedChicken + "Div");
  selectedDiv.style.display = "block";
}

// Initially, call the function to display information for the default selection
showChickenInfo();