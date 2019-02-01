# APIs for fact-checking

While fact-checking will always be a hands-on, (wo)manual process, many <a href="https://github.com/hearvox/unreliable-news/blob/master/ref/news-verification-checklists.md">fact-checking steps</a> can be computer-assisted.

**Achecker** https://achecker.ca/checker/index.php <br>
Accessibility check, reports Known, Likley, and Potential Problems (returns XML file: checkacc.xml).<br>
Docs: https://achecker.ca/documentation/web_service_api.php<br>
API: https://achecker.ca/checkacc.php?id={ID}=rest&guide=WCAG2-AA&uri=hearingvoices.com

**Alexa**	https://aws.amazon.com/alexa/ <br>
Site info, most useful: rank (global and US), domain reg date, site title and descriptions (HTML with XML in body: urlinfo.html)<br>
Docs: https://docs.aws.amazon.com/AlexaWebInfoService/latest/<br>
API: http://{RUN_SCRIPT_AT_YOUR_DOMIAN}/awis-query-php/urlinfo.php?k1={KEY_1}&k2={KEY_2}&site={DOMAIN_NAME)

**BuiltWith**	https://builtwith.com/ <br>
Web technology detector, must useful: adtech, tracking, CMS.(XML or JSON: api.json)<br>
Docs: <br>
API: https://api.builtwith.com/free1/api.json?KEY={key}&LOOKUP=hearingvoices.com

**DomainBigData** https://domainbigdata.com/ <br>
Domain info, for fact-echeck: domain 	(HTML filename: {DOMAIN_NAME} - WHOIS & Domain Info - DomainBigData.html)<br>
API: https://domainbigdata.com/{DOMAIN_NAME}

**Google PageSpeed Insights** https://developers.google.com/speed/pagespeed/insights/
Page performance, with Desktop and Mobile Score, page-weight, DOM els (JSON).<br>
Docs: https://developers.google.com/speed/docs/insights/v5/about<br>
API: https://www.googleapis.com/pagespeedonline/v2/runPagespeed?strategy={desktop||mobile}&key={KEY}&url={URL}

**MetaCert** https://metacertprotocol.com/ <br>
Site category (e.g., "news", "fake-news", "satire"). Uses HTTP Post. Returns:<br>
<code>{"status":{"code":200,"message":"OK"},"data":{"URLs":[],"Folders":[],"Domains":[{"domain":"{DOMAIN_NAME}","type":"fake-news"}]}}</code><br>
Docs: https://developer.metacert.com/api-documentation/getting-started/<br>
Send custom headers:<br>
<code>"apikey": "{API_KEY}"</code><br>
<code>"Content-Type": "application/json"</code><br>
Send json Post data:<br>
<code>{"url" : "{DOMAIN_NAME}"}</code><br>
API: https://dev.metacert.com/v5/check/


**Quantcast** https://www.quantcast.com/
Docs: http://developer.quantcast.com/docs
API (login requites): https://www.quantcast.com/{DOMAIN_NAME}


*[more coming]*
