<?php include_once("disqus.php");?>
<div class="container">
<hr/>
<footer>	
	<p>
		Icons courtesy of <a href="http://www.famfamfam.com/lab/icons/silk/">FamFamFam</a><br/>
	&copy; Copyright <?php echo date("Y") ?> <a href="http://www.supermind.org">Kelvin Tan - Solr and ElasticSearch consultant</a><br/>

	</p>
	
</footer>
</div>
<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/jquery.tipsy.js"></script>
<script type="text/javascript">
  var name='info';
  var mail = name + "@" + "supermind.org";
  function getEmailAddressAnchor() { return "mailto:" + mail; }
  function getEmailAddressOnClick() { return "_gaq.push(['_trackPageview', '/contact'])"; }
  function getEmailAddress() {
    return "<a href="+ getEmailAddressAnchor() + " onClick=\""+getEmailAddressOnClick()+"\">" + mail + "</a>";
  }

  function getEmailAddressNamed(link) {
    return "<a href="+ getEmailAddressAnchor() + " onClick=\""+getEmailAddressOnClick()+"\">" + link + "</a>";
  }

  function printEmailAddress() {
      document.write(getEmailAddress());
  }
  
  $(document).ready(function() { 
    $('.tt').tipsy({html: true,gravity: 'w' }); 
    $('.tt').click(function(){return false;});
  /*   
      var url = window.location.href;
      $('#menu li a').each(function(e){
          if(url.indexOf($(this).attr('href')) > -1){
              $(this).parent().addClass('selected');
          };
      });*/
  });
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36317876-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript" src="http://www.assoc-amazon.com/s/link-enhancer?tag=adamantite-20&&o=1">
</script>
<noscript>
    <img src="http://www.assoc-amazon.com/s/noscript?tag=adamantite-20" alt="" />
</noscript>

</body>
</html>
<?php
/*include_once(ROOT . "inc/deans_code_highlighter.php");
$code = ob_get_contents();
$pretty = $ch_highlight->ch_the_content_filter($code);
ob_end_clean();
echo $pretty;*/
?>
