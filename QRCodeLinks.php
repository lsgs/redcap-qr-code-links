<?php
/**
 * REDCap External Module: QR Code Links
 * @author Luke Stevens, Murdoch Children's Research Institute
 */
namespace MCRI\QRCodeLinks;

use ExternalModules\AbstractExternalModule;

class QRCodeLinks extends AbstractExternalModule
{
        public function redcap_data_entry_form_top($project_id, $record, $instrument, $event_id, $group_id, $repeat_instance) {
                $this->pageTop();
        }
        
        public function redcap_survey_page_top($project_id, $record, $instrument, $event_id, $group_id, $survey_hash, $response_id, $repeat_instance) {
                $this->pageTop();
        }
        
        protected function pageTop() {
            $ajaxurl = $this->getUrl('qr_ajax.php', true);
?>
<script type="text/javascript">
$(document).ready(function() {
  $('a.em-qr-code').each(function(i,e){
    if($(e).hasClass('em-qr-code-this')) {
        $(e).attr('href', window.location.href);
    }
    var h = $(e).attr('href');
    var t = $(e).text();
    //console.log('QR Code: title='+t+'; href='+h);
    $('<img />').attr({ 
        src:'<?=$ajaxurl?>&url='+encodeURIComponent(h), 
        title:t
    }).appendTo($(e).text(''));
  });
});
</script>
<?php
        }
}