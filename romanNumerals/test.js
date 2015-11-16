require('./testSuite.js');
require('./roman.js');


assertTrue("If we put 1 it should return I", function() {
    return returnRoman(1) === 'I';
});

assertTrue("If we put 2 it should return II", function() {
    return returnRoman(2) === 'II';
});

assertTrue("If we put 3 it should return III", function() {
    return returnRoman(3) === 'III';
});

assertTrue("If we put 5 it should return V", function() {
    return returnRoman(5) === 'V';
});

assertTrue("If we put 10 it should return X", function() {
    return returnRoman(10) === 'X';
});

assertTrue("If we put 50 it should return L", function() {
    return returnRoman(50) === 'L';
});

report();

