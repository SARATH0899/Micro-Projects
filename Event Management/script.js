function validateForm() {
  var eventName = document.getElementById("event_name").value;
  var eventDate = document.getElementById("event_date").value;
  var eventAddress = document.getElementById("event_address").value;

  if (eventName === "") {
    alert("Please select the event name.");
    return false;
  }

  if (eventDate === "") {
    alert("Please select the event date.");
    return false;
  }

  if (eventAddress === "") {
    alert("Please enter the event address.");
    return false;
  }

  return true;
}

function showVegNonVegOptions() {
  var cateringRequired = document.getElementById("catering_required").value;
  var vegNonVegOptions = document.getElementById("veg_non_veg_options");

  if (cateringRequired === "yes") {
    vegNonVegOptions.style.display = "block";
  } else {
    vegNonVegOptions.style.display = "none";
  }
}

function showDecorationOptions() {
  var decorationsRequired = document.getElementById("decorations_required").value;
  var decorationOptions = document.getElementById("decoration_options");

  if (decorationsRequired === "yes") {
    decorationOptions.style.display = "block";
  } else {
    decorationOptions.style.display = "none";
  }
}
