function fadeElem(elemName){ 

    var documentEl = $(document);
    var fadeElem = $('.'+elemName);
    
    documentEl.on('scroll', function() { 
        var currScrollPos = documentEl.scrollTop();

        fadeElem.each(function() { 
            var $this = $(this),
            elemOffsetTop = $this.offset().top;
            if(currScrollPos > elemOffsetTop) $this.css('opacity', 1 - (currScrollPos-elemOffsetTop)/400);
        });
    });
};

$(document).ready(function() { 
    fadeElem('aboutMe-container');
    fadeElem('scroll-fade');
    fadeElem('skillSet-container')
});