<script type="text/javascript">
    // $("#rateYo").rateYo({
    //     rating : {{ $program->rating }},
    //     readOnly : true 
    // });
    
    // loading the scripts for this page
    require(['config'], function() {
        require(["commons/rateYo-activations"], function(obj) {
            obj.showRating({{ $program->rating }});
        });
    })
</script>