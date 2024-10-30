document.addEventListener("DOMContentLoaded", function(event) {
const jsminify = document.getElementById('js-minify');
const cssminify = document.getElementById('css-minify');
const webpchart = document.getElementById('webp-chart');

const bscount_minified_js  = document.getElementById('count-minjs').innerText;
const bscount_js  = document.getElementById('count_js').innerText;
const bscount_minifiedcss  = document.getElementById('count-mincss').innerText;
const bscount_css  = document.getElementById('count-css').innerText;

const bscount_jpg  = document.getElementById('count-jpg').innerText;
const bscount_jpeg  = document.getElementById('count-jpeg').innerText;
const bscount_webp  = document.getElementById('count-webp').innerText;
const bscount_png  = document.getElementById('count-png').innerText;

new Chart(jsminify, {
    type: 'doughnut',
    data: {
        labels: ['js.min', 'js'],
        datasets: [{
            label: 'Total',
            data: [bscount_minified_js , bscount_js],
            borderWidth: 1
        }]
    }
});

new Chart(cssminify, {
    type: 'doughnut',
    data: {
        labels: ['css.min', 'css'],
        datasets: [{
            label: 'Total',
            data: [bscount_minifiedcss, bscount_css],
            borderWidth: 1
        }]
    }
});

new Chart(webpchart, {
    type: 'doughnut',
    data: {
        labels: ['JPG', 'JPEG', 'WebP', 'PNG'],
        datasets: [{
            label: 'Total',
            data: [bscount_jpg, bscount_jpeg, bscount_webp, bscount_png],
            borderWidth: 1
        }]
    }

});


});

function getPDF() {
    // Get the element.
    var element = document.getElementById('seo-report');

    // Choose pagebreak options based on mode.
    var mode = 'legacy';
    var namereport = 'Report-Seo-Bucky';

    // Generate the PDF.
    html2pdf().from(element).set({
        filename: namereport + '.pdf',
        pagebreak: {mode: 'avoid-all', before: '.breakhtml2pdf'},
        jsPDF: {orientation: 'landscape', unit: 'in', format: 'letter', compressPDF: true}
    }).save();
};