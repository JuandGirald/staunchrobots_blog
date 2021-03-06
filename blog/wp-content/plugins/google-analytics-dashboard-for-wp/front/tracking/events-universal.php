<script type="text/javascript">
(function($){
    $(window).load(function() {

            //Track Downloads
            $('a').filter(function() {
                return this.href.match(/.*\.(<?php echo esc_js($GADASH_Config->options['ga_event_downloads']);?>)(\?.*)?$/);
            }).click(function(e) {
                ga('send','event', 'download', 'click', this.href<?php if(isset($GADASH_Config->options['ga_event_bouncerate']) && $GADASH_Config->options['ga_event_bouncerate']){echo ", {'nonInteraction': 1}";}?>);
            });

            //Track Mailto
            $('a[href^="mailto"]').click(function(e) {
                ga('send','event', 'email', 'send', this.href<?php if(isset($GADASH_Config->options['ga_event_bouncerate']) && $GADASH_Config->options['ga_event_bouncerate']){echo ", {'nonInteraction': 1}";}?>);
             });
            <?php if ($GADASH_Config->options['ga_event_affiliates'] AND $GADASH_Config->options['ga_aff_tracking']){ ?>

            //Track Affiliates
            $('a').filter(function() {
            	if ('<?php echo esc_js($GADASH_Config->options['ga_event_affiliates']);?>'!=''){
        	       	return this.href.match(/(<?php echo str_replace('/','\/',(esc_js($GADASH_Config->options['ga_event_affiliates'])));?>)/);
            	}
            }).click(function(event) {
               		ga('send','event', 'affiliates', 'click', this.href<?php if(isset($GADASH_Config->options['ga_event_bouncerate']) && $GADASH_Config->options['ga_event_bouncerate']){echo ", {'nonInteraction': 1}";}?>);
            });
            <?php } ?>
            <?php $domaindata = $tools->get_root_domain ( esc_html ( get_option ( 'siteurl' ) ) );
            if (isset ( $domaindata ['domain'] ) and $domaindata ['domain']) { ?>

            //Track Outbound Links
            $('a[href^="http"]').filter(function() {
                if (!this.href.match(/.*\.(<?php echo esc_js($GADASH_Config->options['ga_event_downloads']);?>)(\?.*)?$/)){
                    if (this.href.indexOf('<?php echo $domaindata['domain']; ?>') == -1) return this.href;
                }
            }).click(function(e) {
                ga('send','event', 'outbound', 'click', this.href<?php if(isset($GADASH_Config->options['ga_event_bouncerate']) && $GADASH_Config->options['ga_event_bouncerate']){echo ", {'nonInteraction': 1}";}?>);
            });
    <?php } ?>
});
})(jQuery);
</script>
