function generateGuardianForm(index){
        
    let guardian = `<div class="form-card" id="care-receiver-${index+1}">
                    <h2 class="fs-title text-center mt-3 mb-4">Care Reciever Details ${index+1}</h2>
                    <h5 class="fs-title mt-3">Name of CareReciever</h5> 
                    <div class="row">
                        <div class="col-sm-6"><label class="field-title">First Name</label> <input type="text" name="firstname[${index}]" placeholder="" /> </div>
                        <div class="col-sm-6"><label class="field-title">Last Name</label> <input type="text" name="lastname[${index}]" placeholder="" /> </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                        <label class="field-title mt-4" for="overseer">CareReciever's Relation with the CareOverseer</label>      
                        <select class="form-control list-dt" id="relationship" name="relationship[${index}]">
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
                        <label class="field-title mt-4">Age of the CareReciever</label> <input type="number" name="age[${index}]" placeholder="" />
                        </div>
                        <div class="col-sm-6">
                        <label class="field-title mt-4">Phone of the CareReciever</label> <input type="tel" name="phone[${index}]" placeholder="" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12"> <label class="field-title mt-4">Address<span style="color: red !important; display: inline; float: none;">*</span></label> <textarea id="address2" name="address[${index}]" rows="2" cols="50" required></textarea> </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                        <label class="field-title">Do you have a CareGiver for this CareReciever?<span style="color: red !important; display: inline; float: none;">*</span></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                        <div class="custom-control custom-radio custom-control-inline py-2 px-4">
                            <input type="radio" id="customRadioInline8" name="caregiver[${index}]" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline8">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline py-2 px-4">
                            <input type="radio" id="customRadioInline9" name="caregiver[${index}]" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline9">No</label>
                        </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12"> <label class="field-title mt-4">Additional Instructions</label> <textarea id="address2" name="addInfo[${index}]" rows="2" cols="50"></textarea> </div>
                    </div>
                </div> `;
    return guardian;
}

let navButton = `<input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="make_payment" class="next action-button" value="Confirm" />`;
// $("#care-receiver").append(navButton);

// populate required number of care receiver
$("#overseer").on('change', function(){
    let length = $(this).val();
    $("#care-receiver").html('');

    for (let index = 0; index < length; index++) {
        let guardian = generateGuardianForm(index);
        $("#care-receiver").append(guardian);
    }
    $("#care-receiver").append(navButton);
});


//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets

$("fieldset").on('click', '.next', function(){
    next_fs = $(this).parent().next();
    var numberOfRequiredElements =  $(this).parent().find(':input[required]').filter(function() {
        return !$(this).val();
    }).length;

    console.log(numberOfRequiredElements);
     
    if(numberOfRequiredElements === 0){
        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        
        // Hide the current fieldset
        $(this).closest('fieldset').hide();

        // Show the next fieldset
        $(this).closest('fieldset').next().fadeIn(500);
     }
});

$("fieldset").on('click', '.previous', function(){
    current_fs = $(this).parent();

    //de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
    // Hide the current fieldset
    $(this).closest('fieldset').hide();

    // Show the previous fieldset
    $(this).closest('fieldset').prev().show();
});