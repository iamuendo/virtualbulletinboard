document.addEventListener("DOMContentLoaded", function () {
    var radioButtons = document.querySelectorAll('.event-mode-radio');
    var physicalSection = document.getElementById('physical-details');
    var virtualSection = document.getElementById('virtual-details');

    radioButtons.forEach(function (radio) {
        radio.checked = false;
        radio.addEventListener('change', handleRadioChange);
    });

    function handleRadioChange() {
        var physicalChecked = document.getElementById('eventMode-1').checked;
        var virtualChecked = document.getElementById('eventMode-2').checked;
        var hybridChecked = document.getElementById('eventMode-3').checked;

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