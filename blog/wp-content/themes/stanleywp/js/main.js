/*!
 * JS Scripts
 */
// Placeholder
jQuery(function(){

      //Shortcode Popover
     jQuery("a[rel=popover]").popover()
      .click(function(e) {
        e.preventDefault()
      });

      //Shortcode Tooltip
      jQuery("a[rel=tooltip]").tooltip();

      //Data Tooltip
      jQuery("[data-toggle='tooltip']").tooltip();


       jQuery('.blue').hoverZoom({
                overlayColor: '#3498db',
                zoom: 0
            });
            
            jQuery('.green').hoverZoom({
                overlayColor: '#1abc9c',
                zoom: 0
            });
            
            jQuery('.pink').hoverZoom({
                overlayColor: '#bd2e75',
                zoom: 0
            });
            
            jQuery('.black').hoverZoom({
                overlayColor: '#2f2f2f',
                zoom: 0
            });
            
            jQuery('.alizarin').hoverZoom({
                overlayColor: '#e74c3c',
                zoom: 0
            });
  

});

function dimOrUndimMenu(event){
    if(jQuery(document).scrollTop() > jQuery('#nav-primary').height()){
      jQuery('#nav-primary').addClass('dimmed')
    } else {
      jQuery('#nav-primary').removeClass('dimmed')
    }
    
}

jQuery(document).on("scroll", dimOrUndimMenu);
jQuery(document).on("load", dimOrUndimMenu);


