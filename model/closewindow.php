<?php

class closewindow
{
	public $iframe;
	public $div;
	
	function closeIframe($alert)
	{
		$this->iframe = '<script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script><script>function removeIframe(){var topWindow = $(window.parent.document),iframe = topWindow.find("#iframe_box .show_iframe"),tab = topWindow.find(".acrossTab li"),showTab = topWindow.find(".acrossTab  li.active"),showBox=topWindow.find(".show_iframe:visible"),i = showTab.index();tab.eq(i-1).addClass("active");tab.eq(i).remove();iframe.eq(i-1).show();iframe.eq(i).remove();}$(function(){'.$alert.'removeIframe();})</script>';
		return $this->iframe;
	}

	function closeWindowIframe()
	{
		$script = '<script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script>
					<script>
						$(function(){
							parent.success();
						});
					</script>
					';
		return $script;
	}
}