$(document).ready(function(){

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    
    $(".next").click(function(){
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    
    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;
    
    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    next_fs.css({'opacity': opacity});
    },
    duration: 600
    });
    });
    
    $(".previous").click(function(){
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //Remove class active
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show();
    
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;
    
    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    previous_fs.css({'opacity': opacity});
    },
    duration: 600
    });
    });
    
    $('.radio-group .radio').click(function(){
    $(this).parent().find('.radio').removeClass('selected');
    $(this).addClass('selected');
    });
    
    $(".submit").click(function(){
    return false;
    })
    
    });




function show(){
    let careRecieveres = '';
    let careGiver = '';
    const overseer = document.getElementById("overseer").value;
    const careRecieverShow = document.getElementById('care-reciever-show');
    
    for(let i=1; i<=overseer; i++){
        if(i>1){
          careGiver = `
                      <div class="custom-control custom-radio custom-control-inline py-2 px-4">
                        <input type="radio" id="id_care_y_${i}" onchange="showCareGiver(this, CareGiverShow${i})" name="care${i}" class="custom-control-input" value="Different CareGiver">
                        <label class="custom-control-label" for="id_care_y_${i}">Different CareGiver</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline py-2 px-4">
                        <input type="radio" id="id_care_x_${i}" onchange="showCareGiver(this, CareGiverShow${i})" name="care${i}" class="custom-control-input" value="No">
                        <label class="custom-control-label" for="id_care_x_${i}">No</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline py-2 px-4">
                        <input type="radio" id="id_care_z_${i}" onchange="showCareGiver(this, CareGiverShow${i})" name="care${i}" class="custom-control-input" value="Same as above">
                        <label class="custom-control-label" for="id_care_z_${i}">Same as above</label>
                      </div>`;
        } else {
          careGiver = `<div class="custom-control custom-radio custom-control-inline py-2 px-4">
                        <input type="radio" id="id_care_y_${i}" onchange="showCareGiver(this, CareGiverShow${i})" name="care${i}" class="custom-control-input" value="Yes" required>
                        <label class="custom-control-label" for="id_care_y_${i}">Yes</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline py-2 px-4">
                        <input type="radio" id="id_care_x_${i}" onchange="showCareGiver(this, CareGiverShow${i})" name="care${i}" class="custom-control-input" value="No">
                        <label class="custom-control-label" for="id_care_x_${i}">No</label>
                      </div>`
                    }
        careRecieveres += `<h5 class="fs-title mt-3">Name of CareReciever ${i}</h5> 
                          <div class="row">
                            <div class="col-sm-6"><label class="field-title">First Name</label> <input type="text" name="firstname${i}" placeholder="" /> </div>
                            <div class="col-sm-6"><label class="field-title">Last Name</label> <input type="text" name="lastname${i}" placeholder="" /> </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <label class="field-title mt-4" for="overseer">CareReciever's Relation with the CareOverseer</label>      
                              <select class="form-control list-dt" id="relationship" name="relationship${i}">
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
                              <label class="field-title mt-4">Age of the CareReciever</label> <input type="number" name="age${i}" placeholder="" />
                            </div>
                            <div class="col-sm-6">
                              <label class="field-title mt-4">Phone of the CareReciever</label> <input type="tel" name="tel${i}" placeholder="" />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-12"> <label class="field-title mt-4">Address<span style="color: red !important; display: inline; float: none;">*</span></label> <textarea id="address2" name="address${i}" rows="2" cols="50" required></textarea> </div>
                          </div>
                          <div class="row">
                            <div class="col-12">
                              <label class="field-title">Do you have a CareGiver for this CareReciever?<span style="color: red !important; display: inline; float: none;">*</span></label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-12"> 
                              ${careGiver}
                            </div>
                          </div>
                          <div class="d-none" id="CareGiverShow${i}">
                            <h6 class="fs-subtitle mt-3">Name of CareGiver ${i}</h6>                  
                            <div class="row">
                              <div class="col-sm-6"><label class="field-title">First Name</label> <input type="text" name="careGiverFirstname${i}" placeholder="" /> </div>
                              <div class="col-sm-6"><label class="field-title">Last Name</label> <input type="text" name="careGiverLastname${i}" placeholder="" /> </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12">
                                <label class="field-title mt-4" for="careGiverRelationship">CareGivers Relation with the CareReciever</label>      
                                <select class="form-control list-dt" id="careGiverRelationship" name="careGiverRelationship${i}">
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
                              <div class="col-sm-12"><label class="field-title mt-4">Phone of CareGiver</label> <input type="tel" name="careGiverPhone${i}" placeholder="" /> </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12"><label class="field-title mt-4">Email of CareGiver</label> <input type="email" name="careGiverEmail${i}" placeholder="" /> </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-12"> <label class="field-title mt-4">Additional Instructions</label> <textarea id="address2" name="comment${i}" rows="2" cols="50"></textarea> </div>
                          </div>`;
    }
    careRecieverShow.innerHTML = careRecieveres;
} 
