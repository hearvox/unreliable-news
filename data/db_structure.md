<table width="100%">
	<caption><h1>Unreliable News Sites database fields</h1></caption>
	<thead></td>
		</tr>
		<tr>
			<th>key</th>
			<th>type</th>
			<th>comment</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td colspan="3"><h2>URL info</h2></td>
		</tr>
		<tr>
			<td>domain</td>
			<td>text</td>
			<td>Domain name</td>
		</tr>
		<tr>
			<td>http_code</td>
			<td>integer</td>
			<td>HTTP status code</td>
		</tr>
		<tr>
			<td>is_ssl</td>
			<td>boolean</td>
			<td>Is siteHTTPS?</td>
		</tr>
		<tr>
			<td>is_www</td>
			<td>boolean</td>
			<td>Does site use <code>www</code>?</td>
		</tr>
		<tr>
			<td>url</td>
			<td>text</td>
			<td>Site URL (with protocol and <code>www</code>, if used)</td>
		</tr>
		<tr>
			<td>url_301</td>
			<td>text</td>
			<td>Redirect URL (for 301s)</h2></td>
		</tr>
		<tr>
			<td colspan="3"><h2>Unreliable news lists</h2></td>
		</tr>
		<tr>
			<td colspan="3"><h3>Buzzfeed.com</h3></td>
		</tr>
		</tr>
			<td>_BF</td>
			<td>boolean</td>
			<td>Is site in this fake-news list?</td>
		</tr>
		<tr>
			<td>bf2016</td>
			<td>boolean</td>
			<td>fake news sites: top 50 2016</td>
		</tr>
		</tr>
			<td>bf2017</td>
			<td>boolean</td>
			<td>fake news sites: top 50 2017</td>
		</tr>
		</tr>
			<td>bf2018</td>
			<td>boolean</td>
			<td>fake news sites: top 50 2018</td>
		</tr>
		</tr>
			<td>bfNetwork</td>
			<td>text</td>
			<td>fake news sites: top 50 2016 network</h2></td>
		</tr>
		<tr>
			<td colspan="3"><h3>FactCheck.org</h3></td>
		</tr>
		<tr>
			<td>_FC</td>
			<td>boolean</td>
			<td>Is site in this fake-news list?</td>
		</tr>
		<tr>
			<td>fcDate</td>
			<td>text</td>
			<td>fake-news site added 2017</td>
		</tr>
		<tr>
			<td>fcDate1</td>
			<td>text</td>
			<td>fake-news site added 2018</td>
		</tr>
		<tr>
			<td>fcDesc</td>
			<td>text</td>
			<td>FC description</td>
		</tr>
		<tr>
			<td>fcName</td>
			<td>text</td>
			<td>fake news site name</h2></td>
		</tr>
		<tr>
			<td colspan="3"><h3>FakeNewsCodex.com</h3></td>
		</tr>
		</tr>
			<td>_FNC</td>
			<td>boolean</td>
			<td>Is site in this fake-news list?</td>
		</tr>
		<tr>
			<td>catFNC</td>
			<td>text</td>
			<td>category</td>
		</tr>
		<tr>
			<td>fncDate</td>
			<td>text</td>
			<td>site: date added</td>
		</tr>
		<tr>
			<td>fncDesc</td>
			<td>text</td>
			<td>FNC description</td>
		</tr>
		<tr>
			<td>fncPage</td>
			<td>text</td>
			<td>URL at FNC</td>
		</tr>
		<tr>
			<td>fncTitle</td>
			<td>text</td>
			<td>site title</td>
		</tr>
		<tr>
			<td>fncUrl</td>
			<td>text</td>
			<td>site URL</h2></td>
		</tr>
		<tr>
			<td colspan="2"><h3>Fake News Watch</h3></td>
			<td>(site offline)</td>
		</tr>
		<tr>
			<td>_FNW</td>
			<td>boolean</td>
			<td>Is site in this fake-news list?</td>
		</tr>
		<tr>
			<td>catFNW</td>
			<td>text</td>
			<td>Fake News Watch category</h2></td>
		</tr>
		<tr>
			<td colspan="2"><h3>Is It Fake News?</h3></td>
			<td>(site offline)</td>
		</tr>
		<tr>
			<td>_IIFN</td>
			<td>boolean</td>
			<td>Is site in this fake-news list?</td>
		</tr>
		<tr>
			<td>iifnCat</td>
			<td>text</td>
			<td>category</td>
		</tr>
		<tr>
			<td>iifnName</td>
			<td>text</td>
			<td>site name</td>
		</tr>
		<tr>
			<td>iifnNote</td>
			<td>text</td>
			<td>IIFN notes</td>
		</tr>
		<tr>
			<td>iifnSrc</td>
			<td>text</td>
			<td>info source</td>
		</tr>
		<tr>
			<td>iifnSrcUrl</td>
			<td>text</td>
			<td>info source URL</h2></td>
		</tr>
		<tr>
			<td colspan="3"><h3>MediaBiasFactCheck.com</h3></td>
		</tr>
		</tr>
			<td>_MBFC</td>
			<td>boolean</td>
			<td>Is site in this fake-news list?</td>
		</tr>
		<tr>
			<td>catMBFC</td>
			<td>text</td>
			<td>category</td>
		</tr>
		<tr>
			<td>mbfcName</td>
			<td>text</td>
			<td>site name</td>
		</tr>
		<tr>
			<td>mbfcPage</td>
			<td>text</td>
			<td>MBFC URL</td>
		</tr>
		<tr>
			<td>mbfcUrl</td>
			<td>text</td>
			<td>site URL</h2></td>
		</tr>
		<tr>
			<td colspan="3"><h3>MetaCertProtocol.com</h3></td>
		</tr>
		</tr>
			<td>mcType</td>
			<td>text</td>
			<td>category</h2></td>
		</tr>
		<tr>
			<td colspan="3"><h3>OpenSources.co</h3></td>
		</tr>
		</tr>
			<td>_OS</td>
			<td>boolean</td>
			<td>in unreliable-news site list</td>
		</tr>
		<tr>
			<td>catOS1</td>
			<td>text</td>
			<td>category-1</td>
		</tr>
		<tr>
			<td>catOS2</td>
			<td>text</td>
			<td>category-2</td>
		</tr>
		<tr>
			<td>catOS3</td>
			<td>text</td>
			<td>category-3</td>
		</tr>
		<tr>
			<td>osNote</td>
			<td>text</td>
			<td>OS notes</h2></td>
		</tr>
		<tr>
			<td colspan="3"><h3>PolitiFact.com</h3></td>
		</tr>
		</tr>
			<td>_PF</td>
			<td>boolean</td>
			<td>Is site in this fake-news list?</td>
		</tr>
		<tr>
			<td>catPF</td>
			<td>text</td>
			<td>category</td>
		</tr>
		<tr>
			<td>pfReg</td>
			<td>text</td>
			<td>site owner</h2></td>
		</tr>
		<tr>
			<td colspan="3"><h3>Snopes.com</h3></td>
		</tr>
		</tr>
			<td>_SNP</td>
			<td>boolean</td>
			<td>Is site in this fake-news list?</td>
		</tr>
		<tr>
			<td>snpNote</td>
			<td>text</td>
			<td>Snopes description</h2></td>
		</tr>
		<tr>
			<td colspan="3"><h3>Wikipedia.org/wiki/List_of_fake_news_websites</h3></td>
		</tr>
		</tr>
			<td>_WIK</td>
			<td>boolean</td>
			<td>Is site in this fake-news list?</td>
		</tr>
		<tr>
			<td>wikiName</td>
			<td>text</td>
			<td>Wikipedia.org/wiki/List_of_fake_news_websites — site name</td>
		</tr>
		<tr>
			<td>wikiNote</td>
			<td>text</td>
			<td>Wikipedia.org/wiki/List_of_fake_news_websites — notes (about site)</td>
		</tr>
		<tr>
			<td>wikiSrc</td>
			<td>text</td>
			<td>Wikipedia.org/wiki/List_of_fake_news_websites — footnotes</h2></td>
		</tr>
		<tr>
			<td colspan="3"><h2>Include in list?</h2></td>
		</tr>
		<tr>
			<td>is_active</td>
			<td>boolean</td>
			<td>Is site active?</td>
		</tr>
		<tr>
			<td>is_remove</td>
			<td>boolean</td>
			<td>Remove site from UNS list?</h2></td>
		</tr>
		<tr>
			<td colspan="3"><h2>APIs for domain data</h2></td>
		</tr>
		<tr>
			<td colspan="2"><h3>AChecker.ca</h3></td>
			<td>Accessibility checker</td>
		</tr>
		<tr>
			<td>acheck_errors</td>
			<td>integer</td>
			<td>accessibility errors</td>
		</tr>
		<tr>
			<td>acheck_prob_likely</td>
			<td>integer</td>
			<td>accessibility likley problems</td>
		</tr>
		<tr>
			<td>acheck_prob_potential</td>
			<td>integer</td>
			<td>accessibility potential problems</td>
		</tr>
		<tr>
			<td>acheck_status</td>
			<td>text</td>
			<td>accessibility pass/fail</h2></td>
		</tr>
		<tr>
			<td colspan="2"><h3>Ads_txt</h3></td>
			<td> Ad network whitelist</td>
		</tr>
		<tr>
			<td>ads_txt</td>
			<td>boolean</td>
			<td>Has ads.txt file?</td>
		</tr>
		<tr>
			<td>ads_txt_list</td>
			<td>text</td>
			<td>File contents</h2></td>
		</tr>
		<tr>
			<td colspan="2"><h3>Alexa.com/siteinfo</h3></td>
			<td>Domain metadata, traffic data, site rank</td>
		</tr>
		<tr>
			<td>alexa_rank</td>
			<td>integer</td>
			<td>site rank global</td>
		</tr>
		<tr>
			<td>alexa_rank_us</td>
			<td>integer</td>
			<td>site rank USA</td>
		</tr>
		<tr>
			<td>alexa_desc</td>
			<td>text</td>
			<td>hsite description</td>
		</tr>
		<tr>
			<td>alexa_online</td>
			<td>text</td>
			<td>Alexa.com/siteinfo — domain registration date</td>
		</tr>
		<tr>
			<td>alexa_owner</td>
			<td>text</td>
			<td>Alexa.com/siteinfo — domain owner</td>
		</tr>
		<tr>
			<td>alexa_title</td>
			<td>text</td>
			<td>Alexa.com/siteinfo — site title</h2></td>
		</tr>
		<tr>
			<td colspan="2"><h3>BuiltWith.com</h3></td>
			<td>Web technology detector</td>
		</tr>
		<tr>
			<td>bw_ads</td>
			<td>integer</td>
			<td>tech: ads (current)</td>
		</tr>
		<tr>
			<td>bw_ads_x</td>
			<td>integer</td>
			<td>tech: ads (history)</td>
		</tr>
		<tr>
			<td>bw_track</td>
			<td>integer</td>
			<td>tech: tracking (current)</td>
		</tr>
		<tr>
			<td>bw_track_x</td>
			<td>integer</td>
			<td>tech: tracking (history)</td>
		</tr>
		<tr>
			<td colspan="2"><h3>DomainBigData.com</h3></td>
			<td>Domain metadata</td>
		</tr>
		<tr>
			<td>dbd_date</td>
			<td>text</td>
			<td>domain registration date</td>
		</tr>
		<tr>
			<td>dbd_geo</td>
			<td>text</td>
			<td>domain location</td>
		</tr>
		<tr>
			<td>dbd_org</td>
			<td>text</td>
			<td>domain organization</h2></td>
		</tr>
		<tr>
			<td colspan="2"><h3>Spamhaus.org</h3></td>
			<td>Spam detection</td>
		</tr>
		<tr>
			<td>spam</td>
			<td>boolean</td>
			<td>Is domain in blacklist?</h2></td>
		</tr>
		<tr>
			<td colspan="2"><h3>W3Techs.com</h3></td>
			<td>Web technology detector</td>
		</tr>
		<tr>
			<td>w3t_cms</td>
			<td>text</td>
			<td>site CMS</td>
		</tr>
		<tr>
			<td>w3t_html</td>
			<td>text</td>
			<td>site HTML version</td>
		</tr>
		<tr>
			<td>w3t_server</td>
			<td>text</td>
			<td>W3Techs.com — site server</td>
		</tr>
		<tr>
			<td>w3t_ssl</td>
			<td>text</td>
			<td>site SSL Certificate</h2></td>
		</tr>
		<tr>
			<td colspan="2"><h3>Web.Archive.org</h3></td>
			<td>Wayback Machine archive</td>
		</tr>
		<tr>
			<td>ia_url</td>
			<td>text</td>
			<td>site archives URL</h2></td>
		</tr>
		<tr>
			<td colspan="2"><h3>WebFX.com/tools/read-able/</h3></td>
			<td>Readability test tool</td>
		</tr>
		<tr>
			<td>wpfx_fk_ease</td>
			<td>decimal</td>
			<td>Readability: Flesch Kincaid Reading Ease</td>
		</tr>
		<tr>
			<td>wpfx_fk_grade</td>
			<td>decimal</td>
			<td>Readability: Flesch Kincaid Reading Level</td>
		</tr>
		<tr>
			<td>wpfx_words_complex_pc</td>
			<td>decimal</td>
			<td>Text statistics: percentage of complex words</td>
		</tr>
		<tr>
			<td>wpfx_words_per_sent</td>
			<td>decimal</td>
			<td>Text statistics: average words per sentence</td>
		</tr>
		<tr>
			<td>wpfx_words_syllables</td>
			<td>decimal</td>
			<td>Text statistics: average syllables per word
		</tr>
	</tbody>
</table>
