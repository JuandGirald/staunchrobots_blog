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

function dimOrUndimMenu(){
    if(jQuery(document).scrollTop() > jQuery('#nav-primary').height()){
      jQuery('#nav-primary').addClass('dimmed')
    } else {
      jQuery('#nav-primary').removeClass('dimmed')
    }
    
}

//this looks for a JavaScript variable called blogMenuId, which is set in  header.php
function setBlogMenuActive(){
  if('string' == typeof blogMenuId){
    jQuery(blogMenuId).addClass('active')
  }
}

jQuery(document).on("scroll", dimOrUndimMenu);
jQuery(document).on("ready", dimOrUndimMenu);
jQuery(document).on("ready", setBlogMenuActive);



