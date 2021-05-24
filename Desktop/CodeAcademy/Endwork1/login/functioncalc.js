// manure calculating
document.querySelector('#calc').addEventListener('click', function() {
    let cows = Number(document.getElementById('countofcows').value);
    let resultofmanure6months = (((cows * 1.76) + (cows * 0.8)) * 6);
    document.getElementById('manure6months').value = resultofmanure6months;
    let resultplustwenty = ((resultofmanure6months * 0.2) + resultofmanure6months);
    document.getElementById('manure6monthsproc').value = resultplustwenty;
    document.getElementById('manure6monthsprocc').value = resultplustwenty;
});
// reservoir calculating
document.querySelector('#calcu').addEventListener('click', function() {
    let high = Number(document.getElementById('height').value);
    let test = document.getElementById('manure6monthsprocc').value;
    let radius = (test / (Math.PI * high));
    let squ = Math.sqrt(radius);
    let diameter = squ * 2;
    document.getElementById('rezervuar').value = diameter;
});
