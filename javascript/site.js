$(document).ready(function() {
	
	// Open external links in a new window/tab
	hostname = window.location.hostname
	$("a[href^=http]")
		.not("a[href*='" + hostname + "']")
		.addClass('link external')
		.attr('target', '_blank');

  $('#recently li:first-child').addClass('first');
  $('#recently li:nth-child(6)').addClass('sixth');
  $('body.home #main .post:nth-child(4)').addClass('fourth');
  
  $('.judge img').each(function() {
    
    // Iterate over each with .qtip()
    $(this).qtip({
      show: { solo: true, ready: false },
      hide: { fixed: true },
      content: { text: $(this).siblings('.tooltip') },
      position: { adjust: { screen: true }, corner: { target: 'topMiddle', tooltip: 'bottomMiddle' } },
      style: { width: 300, padding: 15, background: '#f9f9f9', color: '#0d0d0d', border: { width: 3, radius: 3, color: '#ccc' }, tip: { corner: 'bottomMiddle', color: '#ccc', size: { x: 20, y: 10 } } }
    });
    
  });

});