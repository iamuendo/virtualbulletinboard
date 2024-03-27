document.addEventListener("DOMContentLoaded", function () {
    var radioButtons = document.querySelectorAll('.event-mode-radio');
    var radioButtonsEdit = document.querySelectorAll('.event-mode-radio-edit');

    var physicalSection = document.getElementById('physical-details');
    var virtualSection = document.getElementById('virtual-details');

    radioButtons.forEach(function (radio) {
        radio.checked = false;
        radio.addEventListener('change', handleRadioChange);
    });

    radioButtonsEdit.forEach(function (radio) {
        radio.checked = true;
        radio.addEventListener('change', handleRadioChange);
    });


    function handleRadioChange() {
        var physicalChecked = document.getElementById('mode-1').checked;
        var virtualChecked = document.getElementById('mode-2').checked;
        var hybridChecked = document.getElementById('mode-3').checked;

        if (physicalChecked) {
            physicalSection.style.display = 'block';
            virtualSection.style.display = 'none';
        } else if (virtualChecked) {
            physicalSection.style.display = 'none';
            virtualSection.style.display = 'block';
        } else if (hybridChecked) {
            physicalSection.style.display = 'block';
            virtualSection.style.display = 'block';
        } else {
            physicalSection.style.display = 'none';
            virtualSection.style.display = 'none';
        }
    }
});