function printFile(input) {
    var reader = new FileReader();
    reader.onload = function(evt) {
      var img=result(evt.target.result);
    }
    reader.readAsTextUrl(input);
  }