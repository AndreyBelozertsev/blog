[].forEach.call( document.querySelectorAll('.phone-number'), function(input) {
    let keyCode;
    //const validatePhoneNumberRegexRU = /^\+?[7][0-9]{0,14}$/;
    const validatePhoneNumberRegexBEL = /^\+?375[0-9]{0,14}$/;
    const validatePhoneNumberRegexUA = /^\+?38[0-9]{0,14}$/;
    function mask(event) {
        event.keyCode && (keyCode = event.keyCode);
        let pos = this.selectionStart;
        let matrix;
        if (pos < 1) event.preventDefault();
        let val = this.value.replace(/\D/g, "");
        if(validatePhoneNumberRegexUA.test(val)){
            matrix = "+__ (___) ___ ____";
        }else if(validatePhoneNumberRegexBEL.test(val)){
            matrix = "+___ (___) ___ ____";
        }else{
            matrix = "+_ (___) ___ ____";
        }
    
        let i = 0,
            def = matrix.replace(/\D/g, ""),
            new_value = matrix.replace(/[_\d]/g, function(a) {
                return i < val.length ? val.charAt(i++) || def.charAt(i) : a
            });
            
        i = new_value.indexOf("_");
        if (i != -1) {
            i < 1 && (i = 1);
            new_value = new_value.slice(0, i)
        }
        let reg = matrix.substr(0, this.value.length).replace(/_+/g,
            function(a) {
                return "\\d{0," + a.length + "}"
            }).replace(/[+()]/g, "\\$&");
        reg = new RegExp("^" + reg + "$");
       
        if(document.getElementById('submit')){
            if(new_value.length == 17){
                document.getElementById('submit').disabled = false;
            }else{
                document.getElementById('submit').setAttribute('disabled', 'disabled');
            }
        }
     
        if (!reg.test(this.value) || this.value.length < 1 || keyCode > 47 && keyCode < 58) this.value = new_value;
        if (event.type == "blur" && this.value.length < 1)  this.value = ""
    }

    input.addEventListener("input", mask, false);
    input.addEventListener("focus", mask, false);
    input.addEventListener("blur", mask, false);
    input.addEventListener("keydown", mask, false)

});