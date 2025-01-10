<div class="content-section">
	<br/><br/>

	<h2>Documentation</h2>

	<a name="prerequisites"></a><br/>

	<h3>Prerequisites</h3>

	<p>
		{{ env('APP_NAME') }} is a clientside web component that offers an easy way to integrate Steam Widgets of various Steam
		entities into your website. Therefore you only need very few code in order to render Steam Widgets into your document.
	</p>

	<p>
		{{ env('APP_NAME') }} is used via JavaScript. Since JavaScript is supported by all major browser per default it is
		platform independent and compatible.
	</p>

	<p>
		The following Widgets are currently available:<br/>

		<ul>
			<li><a href="#steam-app">Steam App Widget</a></li>
			<li><a href="#steam-server">Steam Server Widget</a></li>
			<li><a href="#steam-user">Steam User Widget</a></li>
			<li><a href="#steam-workshop">Steam Workshop Widget</a></li>
			<li><a href="#steam-group">Steam Group Widget</a></li>
		</ul>
	</p>

	<p>
		You can use {{ env('APP_NAME') }} by referencing the neccessary JavaScript files from the official {{ env('APP_NAME') }} server as follows:<br/>

		<pre>
			<code class="language-html">
&lt;script src="{{ Utils::url('/api/resource/query?type=js&module=STEAM_WIDGETS_MODULE&version=v1') }}"&gt;&lt;/script&gt;
			</code>
		</pre>

		<br/>

		<i>STEAM_WIDGETS_MODULE</i> can either be <b>app</b> for the Steam App widget, <b>server</b> for the Steam Server widget, 
		<b>user</b> for the Steam User widget, <b>workshop</b> for the Steam Workshop widget or <b>group</b> for the Steam Group widget.
	</p>

	@if (env('APP_SHOWNPMUSAGE', false))
		<p>
			You can also use NPM to install the package. Please visit the NPM page of the package in order to get instruction details:<br/>
			<br/>

			<div class="info-box">
				<strong>NPM package: </strong><a href="{{ env('APP_NPMPACKAGEURL') }}">{{ env('APP_NPMPACKAGEURL') }}</a>
			</div>
		</p>
	@endif

	<hr/>
</div>

<div class="content-section">
	<a name="steam-app"></a>

	<h3>Steam App</h3>

	<p>
		When referenced the required Steam App module, the minimum code to render a widget is as follows:<br/>
		<pre>
			<code class="language-html">
&lt;steam-app appid="{{ env('APP_EXAMPLE_APP') }}"&gt;&lt;/steam-app&gt;
			</code>
		</pre>

		<br/><br/>
		This renders the following widget:<br/>
		<steam-app appid="{{ env('APP_EXAMPLE_APP') }}"></steam-app>
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
					<td>Specify the width of the widget</td>
				</tr>

				<tr>
					<td>height</td>
					<td>Specify the height of the widget</td>
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
					<td>Specify whether the widget image shall be hidden or not</td>
				</tr>
			</tbody>
		</table>
	</p>

	<p>
		You can also dynamically create Steam App widgets via JavaScript:<br/>

		<pre>
			<code class="language-html">
&lt;div id="app-widget"&gt;&lt;/div&gt;

&lt;script&gt;
document.addEventListener('DOMContentLoaded', function() {
    let widget = new SteamApp('#app-widget', {
        appid: '{{ env('APP_EXAMPLE_APP') }}',
        //You can specify the same attributes as shown in the table above as well as events (see below)
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
					<td>updateWidget()</td>
					<td>Updates the widget data and displays them</td>
				</tr>

				<tr>
					<td>changeLang(lang, playtext, author, onlinecount)</td>
					<td>Changes the language of the widget using the given information</td>
				</tr>

				<tr class="tr-colored">
					<td>setImageVisibility(visibility)</td>
					<td>Sets the widget image visibility</td>
				</tr>

				<tr>
					<td>remove()</td>
					<td>Removes the widget from the document</td>
				</tr>
			</tbody>
		</table>
	</p>

	<p>
		<br/>The following events are available for a Steam App object:<br/>

		<table>
			<thead>
				<tr></tr>
				<tr></tr>
			</thead>
			<tbody>
				<tr>
					<td><strong>Event</strong></td>
					<td><strong>Description</strong></td>
				</tr>

				<tr class="tr-colored">
					<td>events.onInit(e)</td>
					<td>Called when the widget is initialized</td>
				</tr>

				<tr>
					<td>events.onCompleted(e)</td>
					<td>Called when the widget has finished loading</td>
				</tr>
			</tbody>
		</table>
	</p>

	<hr/>
</div>

<div class="content-section">
	<a name="steam-server"></a>

	<h3>Steam Server</h3>

	<p>
		When referenced the required Steam Server module, the minimum code to render a widget is as follows:<br/>
		<pre>
			<code class="language-html">
&lt;steam-server addr="{{ env('APP_EXAMPLE_SERVER') }}"&gt;&lt;/steam-server&gt;
			</code>
		</pre>

		<br/><br/>
		This renders the following widget:<br/>
		<steam-server addr="{{ env('APP_EXAMPLE_SERVER') }}"></steam-server>
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
					<td>If you want to render the widget with a header image you may specify the URL to an image here</td>
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
					<td>Specify the width of the widget</td>
				</tr>

				<tr>
					<td>height</td>
					<td>Specify the height of the widget</td>
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
		You can also dynamically create Steam Server widgets via JavaScript:<br/>

		<pre>
			<code class="language-html">
&lt;div id="server-widget"&gt;&lt;/div&gt;

&lt;script&gt;
document.addEventListener('DOMContentLoaded', function() {
    let widget = new SteamServer('#server-widget', {
        addr: '{{ env('APP_EXAMPLE_SERVER') }}',
        //You can specify the same attributes as shown in the table above as well as events (see below)
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
					<td>updateWidget()</td>
					<td>Updates the widget data and displays them</td>
				</tr>

				<tr>
					<td>changeLang(bots, secure_yes, secure_no, hosting_dedicated, hosting_listen, playtext)</td>
					<td>Changes the language of the widget using the given information</td>
				</tr>

				<tr class="tr-colored">
					<td>setImageVisibility(visibility)</td>
					<td>Sets the widget image visibility</td>
				</tr>

				<tr>
					<td>remove()</td>
					<td>Removes the widget from the document</td>
				</tr>
			</tbody>
		</table>
	</p>

	<p>
		<br/>The following events are available for a Steam Server object:<br/>

		<table>
			<thead>
				<tr></tr>
				<tr></tr>
			</thead>
			<tbody>
				<tr>
					<td><strong>Event</strong></td>
					<td><strong>Description</strong></td>
				</tr>

				<tr class="tr-colored">
					<td>events.onInit(e)</td>
					<td>Called when the widget is initialized</td>
				</tr>

				<tr>
					<td>events.onCompleted(e)</td>
					<td>Called when the widget has finished loading</td>
				</tr>
			</tbody>
		</table>
	</p>

	<hr/>
</div>

<div class="content-section">
	<a name="steam-user"></a>

	<h3>Steam User</h3>

	<p>
		When referenced the required Steam User module, the minimum code to render a widget is as follows:<br/>
		<pre>
			<code class="language-html">
&lt;steam-user steamid="{{ env('APP_EXAMPLE_USER') }}"&gt;&lt;/steam-user&gt;
			</code>
		</pre>

		<br/><br/>
		This renders the following widget:<br/>
		<steam-user steamid="{{ env('APP_EXAMPLE_USER') }}"></steam-user>
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
					<td>If you want to render the widget with a header image you may specify the URL to an image here</td>
				</tr>

				<tr class="tr-colored">
					<td>online-yes/online_yes</td>
					<td>Specifies the text that is displayed if the user is currently online</td>
				</tr>

				<tr>
					<td>online-no/online_no</td>
					<td>Specifies the text that is displayed if the user is not currently online</td>
				</tr>

				<tr class="tr-colored">
					<td>slogan</td>
					<td>Specifies the text and format of the info that shows since when the user account is registered. Use <b>:year</b>, <b>:month</b> and <b>:day</b> to format the date.</td>
				</tr>

				<tr>
					<td>viewtext</td>
					<td>Specifies the text of the button which can be used to go to the users Steam Community profile</td>
				</tr>

				<tr class="tr-colored">
					<td>width</td>
					<td>Specify the width of the widget</td>
				</tr>

				<tr>
					<td>height</td>
					<td>Specify the height of the widget</td>
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
		You can also dynamically create Steam User widgets via JavaScript:<br/>

		<pre>
			<code class="language-html">
&lt;div id="user-widget"&gt;&lt;/div&gt;

&lt;script&gt;
document.addEventListener('DOMContentLoaded', function() {
    let widget = new SteamUser('#user-widget', {
        steamid: '{{ env('APP_EXAMPLE_USER') }}',
        //You can specify the same attributes as shown in the table above as well as events (see below)
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
					<td>updateWidget()</td>
					<td>Updates the widget data and displays them</td>
				</tr>

				<tr>
					<td>changeLang(online_yes, online_no, slogan, viewtext)</td>
					<td>Changes the language of the widget using the given information</td>
				</tr>

				<tr class="tr-colored">
					<td>setImageVisibility(visibility)</td>
					<td>Sets the widget image visibility</td>
				</tr>

				<tr>
					<td>remove()</td>
					<td>Removes the widget from the document</td>
				</tr>
			</tbody>
		</table>
	</p>

	<p>
		<br/>The following events are available for a Steam User object:<br/>

		<table>
			<thead>
				<tr></tr>
				<tr></tr>
			</thead>
			<tbody>
				<tr>
					<td><strong>Event</strong></td>
					<td><strong>Description</strong></td>
				</tr>

				<tr class="tr-colored">
					<td>events.onInit(e)</td>
					<td>Called when the widget is initialized</td>
				</tr>

				<tr>
					<td>events.onCompleted(e)</td>
					<td>Called when the widget has finished loading</td>
				</tr>
			</tbody>
		</table>
	</p>
</div>

<div class="content-section">
	<a name="steam-workshop"></a>

	<h3>Steam Workshop</h3>

	<p>
		When referenced the required Steam Workshop module, the minimum code to render a widget is as follows:<br/>
		<pre>
			<code class="language-html">
&lt;steam-workshop itemid="{{ env('APP_EXAMPLE_WORKSHOP') }}"&gt;&lt;/steam-workshop&gt;
			</code>
		</pre>

		<br/><br/>
		This renders the following widget:<br/><br/>
		<steam-workshop itemid="{{ env('APP_EXAMPLE_WORKSHOP') }}"></steam-workshop>
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
					<td>itemid</td>
					<td>Specifies the item ID of the Steam Workshop item</td>
				</tr>

				<tr>
					<td>views</td>
					<td>Specifies the text of the views stats label</td>
				</tr>

				<tr class="tr-colored">
					<td>subscriptions</td>
					<td>Specifies the text of the subscriptions stats label</td>
				</tr>

				<tr>
					<td>favorites</td>
					<td>Specifies the text of the favorites stats label</td>
				</tr>

				<tr class="tr-colored">
					<td>author</td>
					<td>Specifies the author text. Use <b>:creator</b> to insert the creators Steam persona name</td>
				</tr>

				<tr>
					<td>viewtext</td>
					<td>Specifies the text of the button which can be used to go to the Workshop item page</td>
				</tr>

				<tr class="tr-colored">
					<td>show-image / showImage</td>
					<td>Specifies if the workshop item preview image shall be displayed. Defaults to true/1</td>
				</tr>

				<tr>
					<td>style-border / style.border</td>
					<td>Specify border rounding: Either none, small or max</td>
				</tr>

				<tr class="tr-colored">
					<td>style-shadow / style.shadow</td>
					<td>You can specify false to prevent displaying box shadow or true to enable (default)</td>
				</tr>

				<tr>
					<td>style-color-background / style.colorBackground</td>
					<td>Specify a CSS value for the background color</td>
				</tr>

				<tr class="tr-colored">
					<td>style-color-title / style.colorTitle</td>
					<td>Specify a CSS value for the title color</td>
				</tr>

				<tr>
					<td>style-color-description / style.colorDescription</td>
					<td>Specify a CSS value for the description color</td>
				</tr>

				<tr class="tr-colored">
					<td>style-color-stats-count / style.colorStatsCount</td>
					<td>Specify a CSS value for the stats count color</td>
				</tr>

				<tr>
					<td>style-color-stats-label / style.colorStatsLabel</td>
					<td>Specify a CSS value for the stats label color</td>
				</tr>
			</tbody>
		</table>
	</p>

	<p>
		You can also dynamically create Steam Workshop widgets via JavaScript:<br/>

		<pre>
			<code class="language-html">
&lt;div id="workshop-widget"&gt;&lt;/div&gt;

&lt;script&gt;
document.addEventListener('DOMContentLoaded', function() {
    let widget = new SteamWorkshop('#workshop-widget', {
        itemid: '{{ env('APP_EXAMPLE_WORKSHOP') }}',
        //You can specify the same attributes as shown in the table above as well as events (see below)
    });
});
&lt;/script&gt;
			</code>
		</pre>
	</p>

	<p>
		<br/>The following methods are available for a Steam Workshop element / object:<br/>

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
					<td>updateWidget()</td>
					<td>Updates the widget data and displays them</td>
				</tr>

				<tr>
					<td>changeLang(views, subscriptions, favorites, author, viewtext)</td>
					<td>Changes the language of the widget using the given information</td>
				</tr>

				<tr class="tr-colored">
					<td>setImageVisibility(visibility)</td>
					<td>Sets the widget image visibility</td>
				</tr>

				<tr>
					<td>remove()</td>
					<td>Removes the widget from the document</td>
				</tr>
			</tbody>
		</table>
	</p>

	<p>
		<br/>The following events are available for a Steam Workshop object:<br/>

		<table>
			<thead>
				<tr></tr>
				<tr></tr>
			</thead>
			<tbody>
				<tr>
					<td><strong>Event</strong></td>
					<td><strong>Description</strong></td>
				</tr>

				<tr class="tr-colored">
					<td>events.onInit(e)</td>
					<td>Called when the widget is initialized</td>
				</tr>

				<tr>
					<td>events.onCompleted(e)</td>
					<td>Called when the widget has finished loading</td>
				</tr>
			</tbody>
		</table>
	</p>
</div>

<div class="content-section">
	<a name="steam-group"></a>

	<h3>Steam Group</h3>

	<p>
		When referenced the required Steam Group module, the minimum code to render a widget is as follows:<br/>
		<pre>
			<code class="language-html">
&lt;steam-group group="{{ env('APP_EXAMPLE_GROUP') }}"&gt;&lt;/steam-group&gt;
			</code>
		</pre>

		<br/><br/>
		This renders the following widget:<br/><br/>
		<steam-group group="{{ env('APP_EXAMPLE_GROUP') }}"></steam-group>
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
					<td>group</td>
					<td>Specifies the group either by numeric ID or URL identifier token</td>
				</tr>

				<tr>
					<td>members</td>
					<td>Specifies the text of the members stats label</td>
				</tr>

				<tr class="tr-colored">
					<td>online</td>
					<td>Specifies the text of the online stats label</td>
				</tr>

				<tr>
					<td>ingame</td>
					<td>Specifies the text of the in-game stats label</td>
				</tr>

				<tr class="tr-colored">
					<td>viewtext</td>
					<td>Specifies the text of the button which can be used to go to the group page</td>
				</tr>

				<tr>
					<td>show-image / showImage</td>
					<td>Specifies if the group avatar image shall be displayed. Defaults to true/1</td>
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
					<td>style-color-stats-count / style.colorStatsCount</td>
					<td>Specify a CSS value for the stats count color</td>
				</tr>

				<tr class="tr-colored">
					<td>style-color-stats-label / style.colorStatsLabel</td>
					<td>Specify a CSS value for the stats label color</td>
				</tr>
			</tbody>
		</table>
	</p>

	<p>
		You can also dynamically create Steam Group widgets via JavaScript:<br/>

		<pre>
			<code class="language-html">
&lt;div id="group-widget"&gt;&lt;/div&gt;

&lt;script&gt;
document.addEventListener('DOMContentLoaded', function() {
    let widget = new SteamGroup('#group-widget', {
        group: '{{ env('APP_EXAMPLE_GROUP') }}',
        //You can specify the same attributes as shown in the table above as well as events (see below)
    });
});
&lt;/script&gt;
			</code>
		</pre>
	</p>

	<p>
		<br/>The following methods are available for a Steam Group element / object:<br/>

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
					<td>updateWidget()</td>
					<td>Updates the widget data and displays them</td>
				</tr>

				<tr>
					<td>changeLang(online, ingame, members, viewtext)</td>
					<td>Changes the language of the widget using the given information</td>
				</tr>

				<tr class="tr-colored">
					<td>setImageVisibility(visibility)</td>
					<td>Sets the widget image visibility</td>
				</tr>

				<tr>
					<td>remove()</td>
					<td>Removes the widget from the document</td>
				</tr>
			</tbody>
		</table>
	</p>

	<p>
		<br/>The following events are available for a Steam Group object:<br/>

		<table>
			<thead>
				<tr></tr>
				<tr></tr>
			</thead>
			<tbody>
				<tr>
					<td><strong>Event</strong></td>
					<td><strong>Description</strong></td>
				</tr>

				<tr class="tr-colored">
					<td>events.onInit(e)</td>
					<td>Called when the widget is initialized</td>
				</tr>

				<tr>
					<td>events.onCompleted(e)</td>
					<td>Called when the widget has finished loading</td>
				</tr>
			</tbody>
		</table>
	</p>
</div>