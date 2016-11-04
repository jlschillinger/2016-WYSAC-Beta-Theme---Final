jQuery(window).load(function() {
      var container1 = document.querySelector('#ms-container');
      var msnry1 = new Masonry( container1, {
        itemSelector: '.ms-item',
        columnWidth: '.ms-item',
      })
});

JQuery(window).load(function() {
  var container2 = document.querySelector('#ms-container-2');
  var msnry2 = new Masonry( container2, {
    itemSelector: '.ms-item',
    columnWidth: '.ms-item',
  });
});
