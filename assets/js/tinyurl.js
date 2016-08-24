var clipboard = new Clipboard('.input-with-copybtn');
clipboard.on('success', function(e) {
    console.log(e);
});
clipboard.on('error', function(e) {
    console.log(e);
});
