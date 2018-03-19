<!-- wp-parsely -->
<style type="text/css">
    #wp-parsely_version {color: #777; font-size: 12px; margin-left: 1em;}
    .help-text {
        width: 75%;
    }
</style>
<script type="text/javascript">
(function($) {
    $(document).ready(function onDOMReady() {
        var apikey = $('#apikey').val();
        var recrawlRequiredHTML = '<p class="description">' +
            '<strong style="color: red">Important:</strong> ' +
            'changing this value on a site currently tracked with ' +
            'Parse.ly will require reprocessing of your Parse.ly data. Once ' +
            'you have changed this value, please contact ' +
            '<a href="mailto:support@parsely.com?subject=Please reprocess">' +
            'support@parsely.com</a> to kick off reprocessing of ' +
            'your data.' +
            '</p>';
        var recrawlRequiredContainer = $(recrawlRequiredHTML);

        var a = recrawlRequiredContainer.find('a');
        a.attr( 'href', 'mailto:support@parsely.com?subject=Please reprocess ' + apikey);

        $("div.parsely-form-controls[data-requires-recrawl='true'] .help-text")
            .append(recrawlRequiredContainer)
    });
})(jQuery);
</script>
<!-- end wp-parsely -->
