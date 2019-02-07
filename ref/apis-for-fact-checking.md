# APIs and Tools for fact-checking

Fact-checking will always be a human-powered, hands-on process. But many <a href="https://github.com/hearvox/unreliable-news/blob/master/ref/news-verification-checklists.md">fact-checking steps</a> can be automated.

Online tools can instantly return domain data that can reliably auto-distinguish fact-based from fake news. The most promising indicators so far are:
* Year online, date of domain registration (Alexa, Domain BigData, DNA Trails).
* Listed in E&amp;P Databook (Editor &amp; Publisher).
* Listed in Unreliable News Source index (CJR).
* Member of LION, INN, or ONA.
* Domain Authority (Moz).
* Percentage of complex words (WebpageFX).
* Has Wikipedia page (Wikipedia- MediaWiki API).<sup id="fnr1"><a href="#fn1">1</a></sup>
* Has Twitter account.<sup id="fnr1"><a href="#fn1">1</a></sup>
* Has Facebook Account.<sup id="fnr1"><a href="#fn1">1</a></sup>
* Number of accessibility errors (Achecker).

These tools and APIs return domain data useful in detecting unreliable sources:

**Achecker** https://achecker.ca/checker/index.php <br>
Accessibility check, reports Known, Likley, and Potential Problems (returns XML file: checkacc.xml).<br>
Docs: https://achecker.ca/documentation/web_service_api.php<br>
API: https://achecker.ca/checkacc.php?id={ID}=rest&guide=WCAG2-AA&uri=hearingvoices.com

**Alexa**	https://aws.amazon.com/alexa/ <br>
Site info, most useful: rank (global and US), domain reg date, site title and descriptions (HTML with XML in body: urlinfo.html)<br>
Tool: https://www.alexa.com/siteinfo/<br>
Docs: https://docs.aws.amazon.com/AlexaWebInfoService/latest/<br>
API script code samples: https://aws.amazon.com/awis/getting-started/#awis_sample_code<br>
API: https://{RUN_SCRIPT_AT_YOUR_DOMIAN}/awis-query-php/urlinfo.php?k1={KEY_1}&k2={KEY_2}&site={DOMAIN_NAME)

**BuiltWith**	https://builtwith.com/ <br>
Web technology detector, must useful: adtech, tracking, CMS (XML or JSON: api.json).<br>
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

**Moz: Link Explorer** https://moz.com/free-seo-tools
Site and page data, inc. domain/page authority and incoming links.<br>
(Use cURL request; requires timestamp based hash -- expires in 5min.)<br>
Tool: https://moz.com/link-explorer
Docs: https://moz.com/help/links-api<br>
Docs: https://moz.com/help/guides/moz-api/mozscape/api-reference/url-metrics

**Quantcast** https://www.quantcast.com/<br>
Docs: http://developer.quantcast.com/docs<br>
Tool (login requites): https://www.quantcast.com/{DOMAIN_NAME}

**Redirect(s)**<br>
Find one or all redirects of a domain name (when one site goes down another often takes its place).<br>
PHP: https://gist.github.com/davejamesmiller/dbefa0ff167cc5c08d6d

**Security Trails** https://securitytrails.com/dns-trails<br>
Historical DNS data.<br>
Docs: https://docs.securitytrails.com/docs<br>
Tool: https://securitytrails.com/domain/{DOMAIN_NAME}/dns<br>
<code>curl --request GET \
  --url https://api.securitytrails.com/v1/history/{DOMAIN_NAME}/dns/a \
  --header 'apikey: {KEY}'</code>
 
**SimilarWeb**	https://www.similarweb.com/<br>
Site data, inc. visits, bounce, page-speed (file: all.json)<br>
Docs: https://www.similarweb.com/corp/developer/estimated_visits_api<br>
Extension URL: https://api.similarweb.com/SimilarWebAddon/{DOMAIN_NAME}/all

**Spamhaus** (php script, see: APIs/spamhaus.php)<br>
Spamhaus DBL: https://www.spamhaus.org/faq/section/Spamhaus%20DBL<br>
API Return codes: https://www.spamhaus.org/faq/section/Spamhaus%20DBL#291<br>
PHP: https://lockergnome.com/2012/04/23/checking-a-domain-against-the-spamhaus-dbl-in-php/<br>
PYTHON: https://pypi.org/project/surblclient/

**Spyonweb.com** https://spyonweb.com/<br>
Domain info, inc. related IP and Google IDs (Adsense and Analytics).<br>
Docs: https://api.spyonweb.com/v1/docs<br>
API: https://api.spyonweb.com/v1/summary/{DOMAIN_NAME}?access_token={TOKEN}

**W3Techs** https://w3techs.com/<br>
Web technology detector, must useful: CMS (file: siteinfo.html).<br>
Tool: https://w3techs.com/sites<br>
HTML: https://w3techs.com/sites/info/{DOMAIN_NAME}<br>
Extension URL: https://w3techs.com/siteinfo.html?url={DOMAIN_NAME}

**Wayback Machine** https://web.archive.org<br>
Docs: https://archive.org/help/wayback_api.php<br>
API- Save in Archive: https://web.archive.org/save/{URL}<br>
Tool- View archives: http://web.archive.org/web/\*/{URL}

**WebFX** https://www.webfx.com/tools/<br>
Readability tests, inc. grade level, complex words, syllables/word (HTML filename: Readability Test Results for {DOMAIN_NAME}.html)<br>
https://www.webfx.com/tools/read-able/<br>
Tool: https://www.webfx.com/tools/read-able/check.php?tab=Test+By+Url&uri={URL}

**WebpageTest** https://www.webpagetest.org/<br>
Performance tests (HTML, JSON, CSV, XML: runtest.xml).<br>
Results:
* https://www.webpagetest.org/xmlResult/{TEST_ID}/
* https://www.webpagetest.org/result/{TEST_ID}/
* https://www.webpagetest.org/result/{TEST_ID}/page_data.csv
* https://www.webpagetest.org/result/{TEST_ID}/requests.csv
* https://www.webpagetest.org/jsonResult.php?test={TEST_ID}
API: http://www.webpagetest.org/runtest.php?k={KEY}&runs=1&web10=1&fvonly=1&f=xml&noopt=1&noimages=1&ignoreSSL=1&url={URL}

**Wikipedia** https://en.wikipedia.org/<br>
Docs: https://www.mediawiki.org/wiki/API:Query<br>
API: https://en.wikipedia.org/w/api.php?action=query&titles={PUBLICATION_NAME}&format=json&formatversion=2

## Endnotes
<a id="fnr1" href="#fnr1">1.↩</a> See <a href="https://admin.govexec.com/media/emnlp-2018-predicting.pdf">Predicting Factuality of Reporting and Bias of News Media Sources</a>.
