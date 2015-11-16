var TestSuite = function () {
  var testCount = 0,
    failCount = 0;

  this.assertTrue = function (name, fn) {
    testCount++;
    if (fn()) {
      console.log (name + " - pass");
    }
    else {
      console.log (name + " - fail");
      failCount++;
    }
  }

  this.report = function () {
    console.log("Ran " + testCount + " tests, " + failCount + " failures.")
  }
}

var testSuite = new TestSuite();

global.assertTrue = testSuite.assertTrue;
global.report = testSuite.report;
