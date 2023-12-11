function generateGuardianForm(index) {
  let guardian = `<div class="form-card" id="care-receiver-${index + 1}">
                    <h2 class="fs-title text-center mt-3 mb-4">Care Reciever Details ${
                      index + 1
                    }</h2>
                    <h5 class="fs-title mt-3">Name of CareReciever</h5> 
                    <div class="row">
                        <div class="col-sm-6"><label class="field-title">First Name</label> <input type="text" name="cr[${index}][firstname]" placeholder="" /> </div>
                        <div class="col-sm-6"><label class="field-title">Last Name</label> <input type="text" name="cr[${index}][lastname]" placeholder="" /> </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                        <label class="field-title mt-4" for="overseer">CareReciever's Relation with the CareOverseer</label>      
                        <select class="form-control list-dt" id="relationship" name="cr[${index}][relationship]">
                            <option value="">Select</option>
                            <option>Father</option>
                            <option>Mother</option>
                            <option>Father-in-law</option>
                            <option>Mother-in-law</option>
                            <option>Other</option>
                        </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                        <label class="field-title mt-4">Age of the CareReciever</label> <input type="number" name="cr[${index}][age]" placeholder="" />
                        </div>
                        <div class="col-sm-6">
                        <label class="field-title mt-4">Phone of the CareReciever</label> <input type="tel" name="cr[${index}][phone]" placeholder="" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12"> <label class="field-title mt-4">Address<span style="color: red !important; display: inline; float: none;">*</span></label> <textarea id="address2" name="cr[${index}][address]" rows="2" cols="50" required></textarea> </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                        <label class="field-title">Do you have a CareGiver for this CareReciever?<span style="color: red !important; display: inline; float: none;">*</span></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                        <div class="custom-control custom-radio custom-control-inline py-2 px-4">
                            <input type="radio" id="caregiver-yes-${index}" name="cr[${index}][caregiver]" value="Yes" class="custom-control-input">
                            <label class="custom-control-label" for="caregiver-yes-${index}">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline py-2 px-4">
                            <input type="radio" id="caregiver-no-${index}" name="cr[${index}][caregiver]" value="No" class="custom-control-input">
                            <label class="custom-control-label" for="caregiver-no-${index}">No</label>
                        </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12"> <label class="field-title mt-4">Additional Instructions</label> <textarea id="address2" name="cr[${index}][addInfo]" rows="2" cols="50"></textarea> </div>
                    </div>
                </div> `;
  return guardian;
}

function multiStateForm() {

  $('#msform').submit(function (e) {
    e.preventDefault();

    var formData = $(this).serializeArray();

    $.ajax({
        type: 'POST',
        url: '/clickhealth/mailapi/parents.php',
        data: formData,
        success: function (response) {
            console.log(response);
            // Handle success response here
        },
        error: function (error) {
            console.error(error);
            // Handle error here
        }
    });
});

  // document.getElementById("msform").onsubmit = function (event) {
  //   event.preventDefault();

  //   var formElement = document.getElementById("msform");
  //   var formData = new FormData(formElement);

  //   fetch("/clickhealth/mailapi/parents.php", {
  //     method: "POST",
  //     headers: {
  //       'Content-Type': 'application/json', // Set the "Content-Type" header
  //     },
  //     body: JSON.stringify(Object.fromEntries(formData)),
  //   })
  //     .then((response) => {
  //       if (!response.ok) {
  //         throw new Error("Network response was not ok");
  //       }
  //       return response.text();
  //     })
  //     .then((data) => {
  //       // Handle the successful response here
  //       console.log(data);
  //     })
  //     .catch((error) => {
  //       // Handle errors here
  //       console.error("Fetch error:", error);
  //     });
  // };
}

let navButton = `<input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="submit" name="make_payment" onclick="multiStateForm()" class="next action-button" value="Confirm" />`;
// $("#care-receiver").append(navButton);

// populate required number of care receiver
$("#overseer").on("change", function () {
  let length = $(this).val();
  $("#care-receiver").html("");

  for (let index = 0; index < length; index++) {
    let guardian = generateGuardianForm(index);
    $("#care-receiver").append(guardian);
  }
  $("#care-receiver").append(navButton);
});

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets

$("fieldset").on("click", ".next", function () {
  next_fs = $(this).parent().next();
  var numberOfRequiredElements = $(this)
    .parent()
    .find(":input[required]")
    .filter(function () {
      return !$(this).val();
    }).length;

  console.log(numberOfRequiredElements);

  if (numberOfRequiredElements === 0) {
    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    // Hide the current fieldset
    $(this).closest("fieldset").hide();

    // Show the next fieldset
    $(this).closest("fieldset").next().fadeIn(500);
  }
});

$("fieldset").on("click", ".previous", function () {
  current_fs = $(this).parent();

  //de-activate current step on progressbar
  $("#progressbar li")
    .eq($("fieldset").index(current_fs))
    .removeClass("active");

  // Hide the current fieldset
  $(this).closest("fieldset").hide();

  // Show the previous fieldset
  $(this).closest("fieldset").prev().show();
});
