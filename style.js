$('.user-qr').popover({
    'content': '<img src="' + JJSZ.path + '/image/user-qr.png" style="width: 128px"/>',
    'placement': 'bottom',
    'trigger': 'hover',
    'html': true
});

$('.search-box').hover(function () {
    var $inp = $(this).find('input');
    var $a = $(this).find('a');
    $inp.stop();
    $inp.animate({width: "240px", 'padding-left': '18px'})
    $a.css({'color': '#0099FF', 'background': 'white'});
}, function () {
    var $inp = $(this).find('input');
    var $a = $(this).find('a');
    if ($inp.val().length == 0) {
        $inp.stop();
        $inp.animate({width: "30px", 'padding-left': '2px'},function () {
            $a.css({'color': '', 'background': '#a7a7a7'})
        })

    }
})
$('.search-box').on('click', 'a', function () {
    var $this = $(this);
    var val = $this.prev().val();
    if (val) {
        $this.parents('form').submit();
    }
})