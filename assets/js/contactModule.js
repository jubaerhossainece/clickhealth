$("#contact-mode").change(function () {
  switch (this.value) {
    case 'mobilenumber':
      $('#contact-input').attr('placeholder', 'Phone Number').attr('type', 'tel');
      return;
    case 'email':
      $('#contact-input').attr('placeholder', 'Email Address').attr('type', 'email');

      return;
    case 'facebook':
      $('#contact-input').attr('placeholder', 'Facebook').attr('type', 'text');

      return;
    case 'whatsapp':
      $('#contact-input').attr('placeholder', "What's app Number").attr('type', 'tel');
      return;
    default:
      $('#contact-input').attr('placeholder', 'Select Contact Mode').attr('type', 'text');
      return;
  }

});