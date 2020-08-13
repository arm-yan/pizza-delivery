<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
</script>
<script src="{{ asset('js/minicart.min.js') }}"></script>
<script>
    paypal.minicart.render({
        action: '#'
    });

    if (~window.location.search.indexOf('reset=true')) {
        paypal.minicart.reset();
    }
</script>
<script src="{{ asset('js/skdslider.min.js') }}"></script>
<link href="{{ asset('css/skdslider.css') }}" rel="stylesheet">
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#demo1').skdslider({
            'delay':5000,
            'animationSpeed': 2000,
            'showNextPrev':true,
            'showPlayButton':true,
            'autoSlide':true,
            'animationType':'fading'
        });

        jQuery('#responsive').change(function(){
            $('#responsive_wrapper').width(jQuery(this).val());
        });

    });
</script>
