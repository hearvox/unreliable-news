# APIs and Tools for fact-checking

While fact-checking will always be a hands-on, human-powered process, many <a href="https://github.com/hearvox/unreliable-news/blob/master/ref/news-verification-checklists.md">fact-checking steps</a> can be computer-assisted.

Some steps return domain data that that can help auto-distiguishing fact-based from fake news. Most promising so far is:
* Year online, date of doamin registration (Alexa, Domain BigData, DNA Trails).
* Listed in E&amp;P Databook (Editor &amp; Publisher).
* Listed in Unreliable News Source index (CJR).
* Member of LION, INN, or ONA.
* Has Wikipedia page (Wikipedia- MediaWiki API).
* Has Twitter account.
* Has Facebook Account.
* Number of accessibility errors (Achecker).
* Number of complex words (WebpageFX).

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
Tool: https://domainbigdata.com/{DOMAIN_NAME}

**Editor &amp; Publisher: Databook** http://www.editorandpublisher.com/databook/<br>
E&amp;P's online newspaper database (25K company records).<br>
Tool: http://www.editorandpublisher.com/databook/data/?djoPage=search_details&djoPid=25874

**Factual News Search** https://factualsearch.news/<br>
Google Custom Search Engine, returns Media Bias/Fact Check tags and fact-checks of site articles.<br>  
Tool: https://factualsearch.news/#gsc.tab=0&gsc.sort=&gsc.ref=fact_checking&gsc.q=%20{DOMAIN_NAME}%20

**Google PageSpeed Insights** https://developers.google.com/speed/pagespeed/insights/<br>
Page performance, with Desktop and Mobile Score, page-weight, DOM els (JSON).<br>
Docs: https://developers.google.com/speed/docs/insights/v5/about<br>
API: https://www.googleapis.com/pagespeedonline/v2/runPagespeed?strategy={desktop||mobile}&key={KEY}&url={URL}

**MetaCert** https://metacertprotocol.com/ <br>
Site category (e.g., "news", "fake-news", "satire"). Uses HTTP Post. Returns:<br>
<code>{"status":{"code":200,"message":"OK"},"data":{"URLs":[],"Folders":[],"Domains":[{"domain":"{DOMAIN_NAME}","type":"fake-news"}]}}</code><br>
Info: https://medium.com/@Paul__Walsh/mock-this-chrome-extension-takes-aim-at-fake-news-c407320f2835<br>
Extensiion: https://chrome.google.com/webstore/detail/check-this-by-metacert/felmjclcjadopolhjmlbemfekjaojfbn?hl=en<br>
Docs: https://developer.metacert.com/api-documentation/getting-started/<br>
Send custom headers:<br>
<code>"apikey": "{API_KEY}"</code><br>
<code>"Content-Type": "application/json"</code><br>
Send json Post data:<br>
<code>{"url" : "{DOMAIN_NAME}"}</code><br>
API: https://dev.metacert.com/v5/check/

**Quantcast** https://www.quantcast.com/<br>
Docs: http://developer.quantcast.com/docs<br>
Tool (login requites): https://www.quantcast.com/{DOMAIN_NAME}

**Spamhaus** (php script, see: APIs/spamhaus.php)<br>
Spamhaus DBL: https://www.spamhaus.org/faq/section/Spamhaus%20DBL<br>
API Return codes: https://www.spamhaus.org/faq/section/Spamhaus%20DBL#291<br>
PHP: https://lockergnome.com/2012/04/23/checking-a-domain-against-the-spamhaus-dbl-in-php/<br>
PYTHON: https://pypi.org/project/surblclient/

**Spyonweb.com** https://spyonweb.com/<br>
Domain info, inc. related IP and Google IDs (Adsense and Analytics).<br>
Docs: https://api.spyonweb.com/v1/docs<br>
API: https://api.spyonweb.com/v1/summary/{DOMAIN_NAME}?access_token={TOKEN}

**Wayback Machine** https://web.archive.org<br>
Docs: https://archive.org/help/wayback_api.php<br>
API- Save in Archive: https://web.archive.org/save/{URL}<br>
Tool- View archives: http://web.archive.org/web/\*/{URL}

**WebFX** https://www.webfx.com/tools/<br>
Readability tests, inc. grade level, complex words, syllables/word (HTML filename: Readability Test Results for {DOMAIN_NAME}.html)<br>
https://www.webfx.com/tools/read-able/<br>
Tool: https://www.webfx.com/tools/read-able/check.php?tab=Test+By+Url&uri={URL}<br>

**Wikipedia** https://en.wikipedia.org/<br>
Docs: https://www.mediawiki.org/wiki/API:Query<br>
API: https://en.wikipedia.org/w/api.php?action=query&titles={PUBLICATION_NAME}&format=json&formatversion=2


*[more coming]*


