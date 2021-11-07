$('.dropdown .open').on('click', function () {
   $(this).parent().addClass('active');
});
$('.dropdown .close').on('click', function () {
   $(this).parent().removeClass('active');
});

