<div class="content-section">
	<a name="readmore"></a><br/><br/>
</div>

<div class="columns is-content">
	<div class="column is-half">
		<div class="is-highlight is-sidepadding fade fade-out">
			Easily create responsive, customizable widgets for various Steam entities with just a few lines of code.
		</div>
	</div>

	<div class="column is-half">
		<div class="is-sidepadding fade fade-out">
			<pre>
				<code class="language-html">
&lt;steam-app appid="{{ env('APP_EXAMPLE_APP') }}"&gt;&lt;/steam-app&gt;
				</code>
			</pre>
		</div>
	</div>
</div>

<div class="columns is-content is-widescreen">
	<div class="column is-half">
		<div class="is-sidepadding fade fade-out">
			<pre>
				<code class="language-js">
let widget = new SteamApp('#app-widget', {
	appid: '{{ env('APP_EXAMPLE_APP') }}',
	//... and more
});
				</code>
			</pre>
		</div>
	</div>

	<div class="column is-half">
		<div class="is-highlight is-sidepadding fade fade-out">
			Use JavaScript to control your widgets for various scenarios. Define options during initialization and execute operations on different events later.
		</div>
	</div>
</div>

<div class="columns is-content is-smallscreen">
	<div class="column is-half">
		<div class="is-highlight is-sidepadding fade fade-out">
			Use JavaScript to control your widgets for various scenarios. Define options during initialization and execute operations on different events later.
		</div>
	</div>

	<div class="column is-half">
		<div class="is-sidepadding fade fade-out">
			<pre>
				<code class="language-js">
let widget = new SteamApp('#app-widget', {
	appid: '{{ env('APP_EXAMPLE_APP') }}',
	//... and more
});
				</code>
			</pre>
		</div>
	</div>
</div>

<div><hr/></div>

<div class="content-section">
	<h3>Utilize widgets for the following Steam entities</h3>

	<div class="widget-types">
		<div class="widget-type fade fade-out">
			<div class="widget-type-icon"><i class="fas fa-gamepad fa-3x"></i></div>
			<div class="widget-type-info">Games/Apps</div>
		</div>

		<div class="widget-type fade fade-out">
			<div class="widget-type-icon"><i class="fas fa-puzzle-piece fa-3x"></i></div>
			<div class="widget-type-info">Workshop Items</div>
		</div>

		<div class="widget-type fade fade-out">
			<div class="widget-type-icon"><i class="fas fa-users fa-3x"></i></div>
			<div class="widget-type-info">Groups</div>
		</div>

		<div class="widget-type fade fade-out">
			<div class="widget-type-icon"><i class="fas fa-user fa-3x"></i></div>
			<div class="widget-type-info">Players</div>
		</div>

		<div class="widget-type fade fade-out">
			<div class="widget-type-icon"><i class="fas fa-server fa-3x"></i></div>
			<div class="widget-type-info">Game Servers</div>
		</div>
	</div>
</div>

<div><hr/></div>

<div class="columns is-content">
	<div class="column is-half">
		<div class="is-highlight is-sidepadding fade fade-out padding-top-cdn">
			Quickly use {{ env('APP_NAME') }} via our CDN.
		</div>
	</div>

	<div class="column is-half">
		<div class="is-sidepadding fade fade-out is-centered">
			<i class="fas fa-server fa-10x"></i>
		</div>
	</div>
</div>

@if (env('APP_SHOWNPMUSAGE', false))
<div class="columns is-content is-widescreen">
	<div class="column is-half">
		<div class="is-sidepadding fade fade-out is-centered">
			<i class="fab fa-npm fa-10x"></i>
		</div>
	</div>

	<div class="column is-half">
		<div class="is-highlight is-sidepadding fade fade-out padding-top-npm">
			Alternatively, use {{ env('APP_NAME') }} via Node.js Package Manager (npm).		</div>
	</div>
</div>

<div class="columns is-content is-smallscreen">
	<div class="column is-half">
		<div class="is-highlight is-sidepadding fade fade-out padding-top-npm">
			Alternatively, use {{ env('APP_NAME') }} via Node.js Package Manager (npm).
		</div>
	</div>

	<div class="column is-half">
		<div class="is-sidepadding fade fade-out is-centered">
			<i class="fab fa-npm fa-10x"></i>
		</div>
	</div>
</div>
@endif

@if (!env('APP_ENABLEDONATION'))
	<div><hr/></div>
@endif

<div class="content-section is-centered {{ (env('APP_ENABLEDONATION')) ? 'background-get-started' : '' }}">
	<div class="is-sidepadding button-get-started fade fade-out">
		<a href="{{ url('/documentation') }}">Get Started!</a>
	</div>
</div>

@if (env('APP_ENABLEDONATION'))
	<div class="content-section is-centered">
		<div class="is-sidepadding fade fade-out">
			<h3>Your support is greatly appreciated</h3>

			<p>
				Your support helps to continue working on the project and providing the required infrastructure.
			</p>

			<p class="sponsoring">
				<a href='https://ko-fi.com/C0C7V2ESD' target='_blank'><img height='36' style='border:0px;height:36px;' src='https://storage.ko-fi.com/cdn/kofi2.png?v=3' border='0' alt='Buy Me a Coffee at ko-fi.com' /></a>
			</p>
		</div>
	</div>
@endif