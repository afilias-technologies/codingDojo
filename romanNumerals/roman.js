var returnRoman = function(number) {
  var outputVal = '';
  var romansMatrix = [];
  romansMatrix[1] = 'I';
  romansMatrix[5]='V';
  romansMatrix[10]='X';
  romansMatrix[50]='L';

  if(number > 3){
      return romansMatrix[number];
  }

  for(i=0; i<number; i++){
    outputVal += romansMatrix[1];
  }

  return outputVal;
}

global.returnRoman = returnRoman;


