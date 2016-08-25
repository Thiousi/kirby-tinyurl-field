window.onload=function(){
  var clipboard = new Clipboard('.input-with-copybtn');
  clipboard.on('success', function(e) {
    console.info('Action:', e.action);
    console.info('Text:', e.text);
    console.info('Trigger:', e.trigger);
  });
  clipboard.on('error', function(e) {
    console.info('Error:', e);
  });
}
