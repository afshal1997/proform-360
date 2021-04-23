window.csc = require('country-state-city').default;
Array.prototype.prepend = function (elements) {
    return [...elements, ...this];
};
