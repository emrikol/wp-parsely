<?php if ( ! isset( $parsely_options['apikey'] ) || empty( $parsely_options['apikey'] ) ) {
	return;
} ?>

<!-- START Parse.ly Include: Standard -->
<?php if ( ! empty( $parsely_options['api_secret'] ) ) : ?>
	<script data-cfasync="false">

		function uuidProfileCall() {
			var rootUrl = 'https://api.parsely.com/v2/profile?apikey=<?php echo urlencode( $parsely_options['apikey'] ); ?>';
			var uuid = '&uuid=' + PARSELY.config.parsely_site_uuid;
			var requestUrl = rootUrl + uuid + '&url=' + window.location.href;
			jQuery.ajax({
				url: requestUrl,
				dataType: "jsonp"
			});
		}

		if (typeof PARSELY == 'object') {
			var oldonload = PARSELY.onload;
			if (typeof PARSELY.onload != 'function') {
				PARSELY.onload = uuidProfileCall
			}
			else {
				PARSELY.onload = function () {
					if (oldonload) {
						oldonload();
					}
					uuidProfileCall();
				};
			}
		}

		else {
			PARSELY = {
				onload: uuidProfileCall
			}
		}
	</script>
<?php endif; ?>

<script id="parsely-cfg" src="//static.parsely.com/keys/<?php echo urlencode( $parsely_options['apikey'] ); ?>/p.js"></script>

<!-- END Parse.ly Include: Standard -->
