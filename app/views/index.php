<div class="content-section content-centered content-top-margin">
	<h1>{{ env('APP_NAME') }}</h1>

	<h2>{{ env('APP_DESCRIPTION') }}</h2>
</div>

<div class="content-section">
	<a name="about"></a><br/><br/>

	<h3>About</h3>

	<p>
		SteamCards is a clientside web component that offers an easy way to integrate Steam Cards of various Steam
		entities into your website. Therefore you only need very few code in order to render Steam Cards into your document.
	</p>

	<p>
		SteamCards is used via JavaScript. Since JavaScript is supported by all major browser per default it is
		platform independent and compatible.
	</p>

	<p>
		The following Widgets are currently available:<br/>

		<ul>
			<li><a href="#steam-app">Steam App Widget</a></li>
			<li><a href="#steam-server">Steam Server Widget</a></li>
			<li><a href="#steam-user">Steam User Widget</a></li>
		</ul>
	</p>

	<p>
		You can use SteamCards by referencing the neccessary JavaScript files from the official SteamCards server as follows:<br/>

		<pre>
			<code class="language-html">
&lt;script src="{{ url('/api/resource/query?type=js&module=STEAM_CARDS_MODULE&version=v1') }}"&gt;&lt;/script&gt;
			</code>
		</pre>

		<br/>

		<i>STEAM_CARDS_MODULE</i> can either be <b>app</b> for the Steam App widget, <b>server</b> for the Steam Server widget or 
		<b>user</b> for the Steam User widget.
	</p>

	@if (env('APP_SHOWNPMUSAGE', false))
		<p>
			You can also use NPM to install the package. Please visit the NPM page of the package in order to get instruction details:<br/>
			<br/>
			<a href="{{ env('APP_NPMPACKAGEURL') }}">{{ env('APP_NPMPACKAGEURL') }}</a>
		</p>
	@endif

	<hr/>
</div>

<div class="content-section">
	<a name="steam-app"></a><br/><br/>

	<h3>Steam App</h3>

	<p>
		When referenced the required Steam App module, the minimum code to render a card is as follows:<br/>
		<pre>
			<code class="language-html">
&lt;steam-app appid="620"&gt;&lt;/steam-app&gt;
			</code>
		</pre>

		<br/><br/>
		This renders the following card:<br/>
		<steam-app appid="620"></steam-app>
	</p>

	<p>
		<br/>You can define these options:<br/>

		<table>
			<thead>
				<tr></tr>
				<tr></tr>
			</thead>
			<tbody>
				<tr>
					<td><strong>Attribute</strong></td>
					<td><strong>Value</strong></td>
				</tr>

				<tr class="tr-colored">
					<td>appid</td>
					<td>Specifies the ID of a Steam game/app</td>
				</tr>

				<tr>
					<td>lang</td>
					<td>Specifies the language of the localized Steam data</td>
				</tr>

				<tr class="tr-colored">
					<td>onlinecount</td>
					<td>If specified this will be the text for the online count. Use <b>:count</b> to dynamically insert the actual products player/user count.</td>
				</tr>

				<tr>
					<td>rating</td>
					<td>If set to true then the app rating will be shown as a 5-star-system, otherwise it is hidden</td>
				</tr>

				<tr class="tr-colored">
					<td>playtext</td>
					<td>Specifies the text of the button that eventually links to the Steam products store page</td>
				</tr>

				<tr>
					<td>author</td>
					<td>Specify a text that is displayed as the author of the product. You can use <b>:developer</b> and <b>:publisher</b> to dynamically insert the products developer and publisher names</td>
				</tr>

				<tr class="tr-colored">
					<td>width</td>
					<td>Specify the width of the card</td>
				</tr>

				<tr>
					<td>height</td>
					<td>Specify the height of the card</td>
				</tr>

				<tr class="tr-colored">
					<td>style-border / style.border</td>
					<td>Specify border rounding: Either none, small or max</td>
				</tr>

				<tr>
					<td>style-shadow / style.shadow</td>
					<td>You can specify false to prevent displaying box shadow or true to enable (default)</td>
				</tr>

				<tr class="tr-colored">
					<td>style-color-background / style.colorBackground</td>
					<td>Specify a CSS value for the background color</td>
				</tr>

				<tr>
					<td>style-color-title / style.colorTitle</td>
					<td>Specify a CSS value for the title color</td>
				</tr>

				<tr class="tr-colored">
					<td>style-color-description / style.colorDescription</td>
					<td>Specify a CSS value for the description color</td>
				</tr>

				<tr>
					<td>style-color-author / style.colorAuthor</td>
					<td>Specify a CSS value for the author color</td>
				</tr>

				<tr class="tr-colored">
					<td>style-color-onlinecount / style.colorOnlinecount</td>
					<td>Specify a CSS value for the online count color</td>
				</tr>

				<tr>
					<td>style-hideimage / style.hideimage</td>
					<td>Specify whether the card image shall be hidden or not</td>
				</tr>
			</tbody>
		</table>
	</p>

	<p>
		You can also dynamically create Steam App cards via JavaScript:<br/>

		<pre>
			<code class="language-html">
&lt;div id="app-card"&gt;&lt;/div&gt;

&lt;script&gt;
document.addEventListener('DOMContentLoaded', function() {
    let card = new SteamApp('#app-card', {
        appid: '620',
        //You can specify the same attributes as shown in the table above
    });
});
&lt;/script&gt;
			</code>
		</pre>
	</p>

	<p>
		<br/>The following methods are available for a Steam App element / object:<br/>

		<table>
			<thead>
				<tr></tr>
				<tr></tr>
			</thead>
			<tbody>
				<tr>
					<td><strong>Method</strong></td>
					<td><strong>Description</strong></td>
				</tr>

				<tr class="tr-colored">
					<td>updateCard()</td>
					<td>Updates the card data and displays them</td>
				</tr>

				<tr>
					<td>changeLang(lang, playtext, author, onlinecount)</td>
					<td>Changes the language of the card using the given information</td>
				</tr>

				<tr class="tr-colored">
					<td>setImageVisibility(visibility)</td>
					<td>Sets the card image visibility</td>
				</tr>

				<tr>
					<td>remove()</td>
					<td>Removes the card from the document</td>
				</tr>
			</tbody>
		</table>
	</p>

	<hr/>
</div>

<div class="content-section">
	<a name="steam-server"></a><br/><br/>

	<h3>Steam Server</h3>

	<p>
		When referenced the required Steam Server module, the minimum code to render a card is as follows:<br/>
		<pre>
			<code class="language-html">
&lt;steam-server addr="ip:port"&gt;&lt;/steam-server&gt;
			</code>
		</pre>

		<br/><br/>
		This renders the following card:<br/>
		<steam-server addr="ip:port"></steam-server>
	</p>

	<p>
		<br/>You can define these options:<br/>

		<table>
			<thead>
				<tr></tr>
				<tr></tr>
			</thead>
			<tbody>
				<tr>
					<td><strong>Attribute</strong></td>
					<td><strong>Value</strong></td>
				</tr>

				<tr class="tr-colored">
					<td>addr</td>
					<td>Specifies the address of the server using format <b>ip</b>:<b>port</b></td>
				</tr>

				<tr>
					<td>header</td>
					<td>If you want to render the card with a header image you may specify the URL to an image here</td>
				</tr>

				<tr class="tr-colored">
					<td>bots</td>
					<td>Specify the text for the bot info. Use :count to render the actual bot count</td>
				</tr>

				<tr>
					<td>secure_yes</td>
					<td>Specifies the text that is displayed if the server is a secure server</td>
				</tr>

				<tr class="tr-colored">
					<td>secure_no</td>
					<td>Specifies the text that is displayed if the server is not a secure server</td>
				</tr>

				<tr>
					<td>hosting_dedicated</td>
					<td>Specifies the text that is displayed if the server is a dedicated server</td>
				</tr>

				<tr class="tr-colored">
					<td>hosting_listen</td>
					<td>Specifies the text that is displayed if the server is a listen server</td>
				</tr>

				<tr>
					<td>playtext</td>
					<td>Specifies the text of the button that issues a connection to the server</td>
				</tr>

				<tr class="tr-colored">
					<td>width</td>
					<td>Specify the width of the card</td>
				</tr>

				<tr>
					<td>height</td>
					<td>Specify the height of the card</td>
				</tr>

				<tr class="tr-colored">
					<td>style-border / style.border</td>
					<td>Specify border rounding: Either none, small or max</td>
				</tr>

				<tr>
					<td>style-shadow / style.shadow</td>
					<td>You can specify false to prevent displaying box shadow or true to enable (default)</td>
				</tr>

				<tr class="tr-colored">
					<td>style-color-background / style.colorBackground</td>
					<td>Specify a CSS value for the background color</td>
				</tr>

				<tr>
					<td>style-color-text-bright / style.colorTextBright</td>
					<td>Specify a CSS value for the bright texts</td>
				</tr>

				<tr class="tr-colored">
					<td>style-color-text-dark / style.colorTextDark</td>
					<td>Specify a CSS value for the dark texts</td>
				</tr>
			</tbody>
		</table>
	</p>

	<p>
		You can also dynamically create Steam Server cards via JavaScript:<br/>

		<pre>
			<code class="language-html">
&lt;div id="server-card"&gt;&lt;/div&gt;

&lt;script&gt;
document.addEventListener('DOMContentLoaded', function() {
    let card = new SteamServer('#server-card', {
        addr: 'ip:port',
        //You can specify the same attributes as shown in the table above
    });
});
&lt;/script&gt;
			</code>
		</pre>
	</p>

	<p>
		<br/>The following methods are available for a Steam Server element / object:<br/>

		<table>
			<thead>
				<tr></tr>
				<tr></tr>
			</thead>
			<tbody>
				<tr>
					<td><strong>Method</strong></td>
					<td><strong>Description</strong></td>
				</tr>

				<tr class="tr-colored">
					<td>updateCard()</td>
					<td>Updates the card data and displays them</td>
				</tr>

				<tr>
					<td>changeLang(bots, secure_yes, secure_no, hosting_dedicated, hosting_listen, playtext)</td>
					<td>Changes the language of the card using the given information</td>
				</tr>

				<tr class="tr-colored">
					<td>setImageVisibility(visibility)</td>
					<td>Sets the card image visibility</td>
				</tr>

				<tr>
					<td>remove()</td>
					<td>Removes the card from the document</td>
				</tr>
			</tbody>
		</table>
	</p>

	<hr/>
</div>

<div class="content-section">
	<a name="steam-user"></a><br/><br/>

	<h3>Steam User</h3>

	<p>
		When referenced the required Steam User module, the minimum code to render a card is as follows:<br/>
		<pre>
			<code class="language-html">
&lt;steam-user steamid="id"&gt;&lt;/steam-user&gt;
			</code>
		</pre>

		<br/><br/>
		This renders the following card:<br/>
		<steam-user steamid="steamid"></steam-user>
	</p>

	<p>
		<br/>You can define these options:<br/>

		<table>
			<thead>
				<tr></tr>
				<tr></tr>
			</thead>
			<tbody>
				<tr>
					<td><strong>Attribute</strong></td>
					<td><strong>Value</strong></td>
				</tr>

				<tr class="tr-colored">
					<td>steamid</td>
					<td>Specifies the SteamID of the Steam user</td>
				</tr>

				<tr>
					<td>header</td>
					<td>If you want to render the card with a header image you may specify the URL to an image here</td>
				</tr>

				<tr class="tr-colored">
					<td>online_yes</td>
					<td>Specifies the text that is displayed if the user is currently online</td>
				</tr>

				<tr>
					<td>online_no</td>
					<td>Specifies the text that is displayed if the user is not currently online</td>
				</tr>

				<tr class="tr-colored">
					<td>member_since</td>
					<td>Specifies the text and format of the info that shows since when the user account is registered. Use <b>:year</b>, <b>:month</b> and <b>:day</b> to format the date.</td>
				</tr>

				<tr>
					<td>viewtext</td>
					<td>Specifies the text of the button which can be used to go to the users Steam Community profile</td>
				</tr>

				<tr class="tr-colored">
					<td>width</td>
					<td>Specify the width of the card</td>
				</tr>

				<tr>
					<td>height</td>
					<td>Specify the height of the card</td>
				</tr>

				<tr class="tr-colored">
					<td>style-border / style.border</td>
					<td>Specify border rounding: Either none, small or max</td>
				</tr>

				<tr>
					<td>style-shadow / style.shadow</td>
					<td>You can specify false to prevent displaying box shadow or true to enable (default)</td>
				</tr>

				<tr class="tr-colored">
					<td>style-color-background / style.colorBackground</td>
					<td>Specify a CSS value for the background color</td>
				</tr>

				<tr>
					<td>style-color-text-bright / style.colorTextBright</td>
					<td>Specify a CSS value for the bright texts</td>
				</tr>

				<tr class="tr-colored">
					<td>style-color-text-dark / style.colorTextDark</td>
					<td>Specify a CSS value for the dark texts</td>
				</tr>
			</tbody>
		</table>
	</p>

	<p>
		You can also dynamically create Steam User cards via JavaScript:<br/>

		<pre>
			<code class="language-html">
&lt;div id="user-card"&gt;&lt;/div&gt;

&lt;script&gt;
document.addEventListener('DOMContentLoaded', function() {
    let card = new SteamUser('#user-card', {
        steamid: 'id',
        //You can specify the same attributes as shown in the table above
    });
});
&lt;/script&gt;
			</code>
		</pre>
	</p>

	<p>
		<br/>The following methods are available for a Steam User element / object:<br/>

		<table>
			<thead>
				<tr></tr>
				<tr></tr>
			</thead>
			<tbody>
				<tr>
					<td><strong>Method</strong></td>
					<td><strong>Description</strong></td>
				</tr>

				<tr class="tr-colored">
					<td>updateCard()</td>
					<td>Updates the card data and displays them</td>
				</tr>

				<tr>
					<td>changeLang(online_yes, online_no, member_since, viewtext)</td>
					<td>Changes the language of the card using the given information</td>
				</tr>

				<tr class="tr-colored">
					<td>setImageVisibility(visibility)</td>
					<td>Sets the card image visibility</td>
				</tr>

				<tr>
					<td>remove()</td>
					<td>Removes the card from the document</td>
				</tr>
			</tbody>
		</table>
	</p>
</div>