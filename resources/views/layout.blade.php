<!DOCTYPE html>
<html lang="en-CA">
<!-- Mirrored from coded.money/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Feb 2025 06:37:18 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="xmlrpc.html" />
	<title>@yield('title') | Coded Money</title>
	<meta name="robots" content="max-image-preview:large" />
	<style>
		img:is([sizes="auto" i], [sizes^="auto," i]) {
			contain-intrinsic-size: 3000px 1500px;
		}
	</style>
	<link rel="alternate" type="application/rss+xml" title="Coded.money &raquo; Feed" href="feed/index.html" />
	<link rel="alternate" type="application/rss+xml" title="Coded.money &raquo; Comments Feed" href="comments/feed/index.html" />
	<script>
		window._wpemojiSettings = {
			baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
			ext: ".png",
			svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
			svgExt: ".svg",
			source: {
				concatemoji:
					"https:\/\/coded.money\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.1",
			},
		};
		/*! This file is auto-generated */
		!(function (i, n) {
			var o, s, e;
			function c(e) {
				try {
					var t = { supportTests: e, timestamp: new Date().valueOf() };
					sessionStorage.setItem(o, JSON.stringify(t));
				} catch (e) { }
			}
			function p(e, t, n) {
				e.clearRect(0, 0, e.canvas.width, e.canvas.height),
					e.fillText(t, 0, 0);
				var t = new Uint32Array(
					e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
				),
					r =
						(e.clearRect(0, 0, e.canvas.width, e.canvas.height),
							e.fillText(n, 0, 0),
							new Uint32Array(
								e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
							));
				return t.every(function (e, t) {
					return e === r[t];
				});
			}
			function u(e, t, n) {
				switch (t) {
					case "flag":
						return n(
							e,
							"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
							"\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
						)
							? !1
							: !n(
								e,
								"\ud83c\uddfa\ud83c\uddf3",
								"\ud83c\uddfa\u200b\ud83c\uddf3"
							) &&
							!n(
								e,
								"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
								"\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
							);
					case "emoji":
						return !n(
							e,
							"\ud83d\udc26\u200d\u2b1b",
							"\ud83d\udc26\u200b\u2b1b"
						);
				}
				return !1;
			}
			function f(e, t, n) {
				var r =
					"undefined" != typeof WorkerGlobalScope &&
						self instanceof WorkerGlobalScope
						? new OffscreenCanvas(300, 150)
						: i.createElement("canvas"),
					a = r.getContext("2d", { willReadFrequently: !0 }),
					o = ((a.textBaseline = "top"), (a.font = "600 32px Arial"), {});
				return (
					e.forEach(function (e) {
						o[e] = t(a, e, n);
					}),
					o
				);
			}
			function t(e) {
				var t = i.createElement("script");
				(t.src = e), (t.defer = !0), i.head.appendChild(t);
			}
			"undefined" != typeof Promise &&
				((o = "wpEmojiSettingsSupports"),
					(s = ["flag", "emoji"]),
					(n.supports = { everything: !0, everythingExceptFlag: !0 }),
					(e = new Promise(function (e) {
						i.addEventListener("DOMContentLoaded", e, { once: !0 });
					})),
					new Promise(function (t) {
						var n = (function () {
							try {
								var e = JSON.parse(sessionStorage.getItem(o));
								if (
									"object" == typeof e &&
									"number" == typeof e.timestamp &&
									new Date().valueOf() < e.timestamp + 604800 &&
									"object" == typeof e.supportTests
								)
									return e.supportTests;
							} catch (e) { }
							return null;
						})();
						if (!n) {
							if (
								"undefined" != typeof Worker &&
								"undefined" != typeof OffscreenCanvas &&
								"undefined" != typeof URL &&
								URL.createObjectURL &&
								"undefined" != typeof Blob
							)
								try {
									var e =
										"postMessage(" +
										f.toString() +
										"(" +
										[JSON.stringify(s), u.toString(), p.toString()].join(
											","
										) +
										"));",
										r = new Blob([e], { type: "text/javascript" }),
										a = new Worker(URL.createObjectURL(r), {
											name: "wpTestEmojiSupports",
										});
									return void (a.onmessage = function (e) {
										c((n = e.data)), a.terminate(), t(n);
									});
								} catch (e) { }
							c((n = f(s, u, p)));
						}
						t(n);
					})
						.then(function (e) {
							for (var t in e)
								(n.supports[t] = e[t]),
									(n.supports.everything =
										n.supports.everything && n.supports[t]),
									"flag" !== t &&
									(n.supports.everythingExceptFlag =
										n.supports.everythingExceptFlag && n.supports[t]);
							(n.supports.everythingExceptFlag =
								n.supports.everythingExceptFlag && !n.supports.flag),
								(n.DOMReady = !1),
								(n.readyCallback = function () {
									n.DOMReady = !0;
								});
						})
						.then(function () {
							return e;
						})
						.then(function () {
							var e;
							n.supports.everything ||
								(n.readyCallback(),
									(e = n.source || {}).concatemoji
										? t(e.concatemoji)
										: e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
						}));
		})((window, document), window._wpemojiSettings);
	</script>
	<link rel="stylesheet" id="hfe-widgets-style-css" href="{{ asset('assets/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend3601.css') }}?ver=2.2.0" media="all" />
	<style id="wp-emoji-styles-inline-css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<style id="safe-svg-svg-icon-style-inline-css">
		.safe-svg-cover {
			text-align: center;
		}

		.safe-svg-cover .safe-svg-inside {
			display: inline-block;
			max-width: 100%;
		}

		.safe-svg-cover svg {
			height: 100%;
			max-height: 100%;
			max-width: 100%;
			width: 100%;
		}
	</style>
	<style id="global-styles-inline-css">
		:root {
			--wp--preset--aspect-ratio--square: 1;
			--wp--preset--aspect-ratio--4-3: 4/3;
			--wp--preset--aspect-ratio--3-4: 3/4;
			--wp--preset--aspect-ratio--3-2: 3/2;
			--wp--preset--aspect-ratio--2-3: 2/3;
			--wp--preset--aspect-ratio--16-9: 16/9;
			--wp--preset--aspect-ratio--9-16: 9/16;
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,
					rgba(6, 147, 227, 1) 0%,
					rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,
					rgb(122, 220, 180) 0%,
					rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,
					rgba(252, 185, 0, 1) 0%,
					rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,
					rgba(255, 105, 0, 1) 0%,
					rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,
					rgb(238, 238, 238) 0%,
					rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,
					rgb(74, 234, 220) 0%,
					rgb(151, 120, 209) 20%,
					rgb(207, 42, 186) 40%,
					rgb(238, 44, 130) 60%,
					rgb(251, 105, 98) 80%,
					rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,
					rgb(255, 206, 236) 0%,
					rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,
					rgb(254, 205, 165) 0%,
					rgb(254, 45, 45) 50%,
					rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,
					rgb(255, 203, 112) 0%,
					rgb(199, 81, 192) 50%,
					rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg,
					rgb(255, 245, 203) 0%,
					rgb(182, 227, 212) 50%,
					rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg,
					rgb(202, 248, 128) 0%,
					rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg,
					rgb(2, 3, 129) 0%,
					rgb(40, 116, 252) 100%);
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
			--wp--preset--spacing--20: 0.44rem;
			--wp--preset--spacing--30: 0.67rem;
			--wp--preset--spacing--40: 1rem;
			--wp--preset--spacing--50: 1.5rem;
			--wp--preset--spacing--60: 2.25rem;
			--wp--preset--spacing--70: 3.38rem;
			--wp--preset--spacing--80: 5.06rem;
			--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
			--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
				6px 6px rgba(0, 0, 0, 1);
			--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
		}

		:root {
			--wp--style--global--content-size: 800px;
			--wp--style--global--wide-size: 1200px;
		}

		:where(body) {
			margin: 0;
		}

		.wp-site-blocks>.alignleft {
			float: left;
			margin-right: 2em;
		}

		.wp-site-blocks>.alignright {
			float: right;
			margin-left: 2em;
		}

		.wp-site-blocks>.aligncenter {
			justify-content: center;
			margin-left: auto;
			margin-right: auto;
		}

		:where(.wp-site-blocks)>* {
			margin-block-start: 24px;
			margin-block-end: 0;
		}

		:where(.wp-site-blocks)> :first-child {
			margin-block-start: 0;
		}

		:where(.wp-site-blocks)> :last-child {
			margin-block-end: 0;
		}

		:root {
			--wp--style--block-gap: 24px;
		}

		:root :where(.is-layout-flow)> :first-child {
			margin-block-start: 0;
		}

		:root :where(.is-layout-flow)> :last-child {
			margin-block-end: 0;
		}

		:root :where(.is-layout-flow)>* {
			margin-block-start: 24px;
			margin-block-end: 0;
		}

		:root :where(.is-layout-constrained)> :first-child {
			margin-block-start: 0;
		}

		:root :where(.is-layout-constrained)> :last-child {
			margin-block-end: 0;
		}

		:root :where(.is-layout-constrained)>* {
			margin-block-start: 24px;
			margin-block-end: 0;
		}

		:root :where(.is-layout-flex) {
			gap: 24px;
		}

		:root :where(.is-layout-grid) {
			gap: 24px;
		}

		.is-layout-flow>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		.is-layout-flow>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		.is-layout-flow>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		.is-layout-constrained>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		.is-layout-constrained>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		.is-layout-constrained>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		.is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
			max-width: var(--wp--style--global--content-size);
			margin-left: auto !important;
			margin-right: auto !important;
		}

		.is-layout-constrained>.alignwide {
			max-width: var(--wp--style--global--wide-size);
		}

		body .is-layout-flex {
			display: flex;
		}

		.is-layout-flex {
			flex-wrap: wrap;
			align-items: center;
		}

		.is-layout-flex> :is(*, div) {
			margin: 0;
		}

		body .is-layout-grid {
			display: grid;
		}

		.is-layout-grid> :is(*, div) {
			margin: 0;
		}

		body {
			padding-top: 0px;
			padding-right: 0px;
			padding-bottom: 0px;
			padding-left: 0px;
		}

		a:where(:not(.wp-element-button)) {
			text-decoration: underline;
		}

		:root :where(.wp-element-button, .wp-block-button__link) {
			background-color: #32373c;
			border-width: 0;
			color: #fff;
			font-family: inherit;
			font-size: inherit;
			line-height: inherit;
			padding: calc(0.667em + 2px) calc(1.333em + 2px);
			text-decoration: none;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}

		:root :where(.wp-block-pullquote) {
			font-size: 1.5em;
			line-height: 1.6;
		}
	</style>
	<link rel="stylesheet" id="wp-components-css" href="{{ asset('assets/wp-includes/css/dist/components/style.min9704.css') }}?ver=6.7.1"
		media="all" />
	<link rel="stylesheet" id="godaddy-styles-css"
		href="{{ asset('assets/wp-content/mu-plugins/vendor/wpex/godaddy-launch/includes/Dependencies/GoDaddy/Styles/build/latest4c56.css') }}?ver=2.0.2"
		media="all" />
	<link rel="stylesheet" id="hfe-style-css"
		href="{{ asset('assets/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor3601.css') }}?ver=2.2.0"
		media="all" />
	<link rel="stylesheet" id="hello-elementor-theme-style-css"
		href="{{ asset('assets/wp-content/themes/hello-elementor/theme.min9b70.css') }}?ver=3.3.0" media="all" />
	<link rel="stylesheet" id="elementor-frontend-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/css/frontend.mine689.css') }}?ver=3.27.3" media="all" />
	<link rel="stylesheet" id="eael-general-css"
		href="{{ asset('assets/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/css/view/general.min6a4d.css') }}?ver=6.1.1"
		media="all" />
	<link rel="stylesheet" id="eael-19-css"
		href="{{ asset('assets/wp-content/uploads/essential-addons-elementor/eael-19244c.css') }}?ver=1734338070" media="all" />
	<link rel="stylesheet" id="elementor-post-9-css"
		href="{{ asset('assets/wp-content/uploads/elementor/css/post-95398.css') }}?ver=1738886413" media="all" />
	<link rel="stylesheet" id="widget-heading-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/css/widget-heading.mine689.css') }}?ver=3.27.3" media="all" />
	<link rel="stylesheet" id="widget-text-editor-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/css/widget-text-editor.mine689.css') }}?ver=3.27.3" media="all" />
	<link rel="stylesheet" id="e-animation-fadeIn-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/animations/styles/fadeIn.mine689.css') }}?ver=3.27.3" media="all" />
	<link rel="stylesheet" id="widget-image-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/css/widget-image.mine689.css') }}?ver=3.27.3" media="all" />
	<link rel="stylesheet" id="e-shapes-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/css/conditionals/shapes.mine689.css') }}?ver=3.27.3" media="all" />
	<link rel="stylesheet" id="e-animation-fadeInUp-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInUp.mine689.css') }}?ver=3.27.3" media="all" />
	<link rel="stylesheet" id="e-animation-zoomIn-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/animations/styles/zoomIn.mine689.css') }}?ver=3.27.3" media="all" />
	<link rel="stylesheet" id="e-animation-fadeInLeft-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInLeft.mine689.css') }}?ver=3.27.3"
		media="all" />
	<link rel="stylesheet" id="e-animation-fadeInRight-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInRight.mine689.css') }}?ver=3.27.3"
		media="all" />
	<link rel="stylesheet" id="elementor-post-19-css"
		href="{{ asset('assets/wp-content/uploads/elementor/css/post-19ff2a.css') }}?ver=1738886414" media="all" />
	<link rel="stylesheet" id="eael-10-css"
		href="{{ asset('assets/wp-content/uploads/essential-addons-elementor/eael-10244c.css') }}?ver=1734338070" media="all" />
	<link rel="stylesheet" id="elementor-post-10-css"
		href="{{ asset('assets/wp-content/uploads/elementor/css/post-10ff2a.css') }}?ver=1738886414" media="all" />
	<link rel="stylesheet" id="eael-61-css"
		href="{{ asset('assets/wp-content/uploads/essential-addons-elementor/eael-61244c.css') }}?ver=1734338070" media="all" />
	<link rel="stylesheet" id="elementor-post-61-css"
		href="{{ asset('assets/wp-content/uploads/elementor/css/post-61ff2a.css') }}?ver=1738886414" media="all" />
	<link rel="stylesheet" id="hello-elementor-css" href="{{ asset('assets/wp-content/themes/hello-elementor/style.min9b70.css') }}?ver=3.3.0"
		media="all" />
	<link rel="stylesheet" id="hello-elementor-header-footer-css"
		href="{{ asset('assets/wp-content/themes/hello-elementor/header-footer.min9b70.css') }}?ver=3.3.0" media="all" />
	<link rel="stylesheet" id="hfe-elementor-icons-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min705c.css') }}?ver=5.34.0" media="all" />
	<link rel="stylesheet" id="hfe-icons-list-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/css/widget-icon-list.min44b4.css') }}?ver=3.24.3" media="all" />
	<link rel="stylesheet" id="hfe-social-icons-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/css/widget-social-icons.min2401.css') }}?ver=3.24.0" media="all" />
	<link rel="stylesheet" id="hfe-social-share-icons-brands-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands52d5.css') }}?ver=5.15.3" media="all" />
	<link rel="stylesheet" id="hfe-social-share-icons-fontawesome-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome52d5.css') }}?ver=5.15.3" media="all" />
	<link rel="stylesheet" id="hfe-nav-menu-icons-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid52d5.css') }}?ver=5.15.3" media="all" />
	<link rel="stylesheet" id="font-awesome-5-all-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min6a4d.css') }}?ver=6.1.1" media="all" />
	<link rel="stylesheet" id="font-awesome-4-shim-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min6a4d.css') }}?ver=6.1.1" media="all" />
    <link rel="stylesheet" id="font-awesome-4-shim-css"
		href="{{ asset('assets/wp-content/uploads/elementor/css/post-219321.css') }}?ver=1739037538" media="all" />
    <link rel="stylesheet" id="font-awesome-4-shim-css"
		href="{{ asset('assets/wp-content/uploads/elementor/css/post-227363.css') }}?ver=1739037697" media="all" />
    <link rel="stylesheet" id="font-awesome-4-shim-css"
		href="{{ asset('assets/wp-content/plugins/fluentform/assets/css/fluent-forms-elementor-widget251f.css') }}?ver=5.2.10" media="all" />
    <link rel="stylesheet" id="font-awesome-4-shim-css"
		href="{{ asset('assets/wp-content/plugins/fluentform/assets/css/fluent-forms-public251f.css') }}?ver=5.2.10" media="all" />
    <link rel="stylesheet" id="font-awesome-4-shim-css"
		href="{{ asset('assets/wp-content/plugins/fluentform/assets/css/fluentform-public-default251f.css') }}?ver=5.2.10" media="all" />
    <link rel="stylesheet" id="font-awesome-4-shim-css"
		href="{{ asset('assets/wp-content/uploads/elementor/css/post-227363.css?ver=1739037697') }}?ver=5.2.10" media="all" />
	<link rel="stylesheet" id="google-fonts-1-css"
		href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CInter%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLora%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRed+Hat+Display%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COpen+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.7.1"
		media="all" />
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
	<script src="{{ asset('assets/wp-includes/js/jquery/jquery.minf43b.js') }}?ver=3.7.1" id="jquery-core-js"></script>
	<script src="{{ asset('assets/wp-includes/js/jquery/jquery-migrate.min5589.js') }}?ver=3.4.1" id="jquery-migrate-js"></script>
	<script id="jquery-js-after">
		!(function ($) {
			"use strict";
			$(document).ready(function () {
				$(this).scrollTop() > 100 &&
					$(".hfe-scroll-to-top-wrap").removeClass("hfe-scroll-to-top-hide"),
					$(window).scroll(function () {
						$(this).scrollTop() < 100
							? $(".hfe-scroll-to-top-wrap").fadeOut(300)
							: $(".hfe-scroll-to-top-wrap").fadeIn(300);
					}),
					$(".hfe-scroll-to-top-wrap").on("click", function () {
						$("html, body").animate({ scrollTop: 0 }, 300);
						return !1;
					});
			});
		})(jQuery);
	</script>
	<script src="{{ asset('assets/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min6a4d.js') }}?ver=6.1.1"
		id="font-awesome-4-shim-js"></script>
	<link rel="https://api.w.org/" href="wp-json/index.html" />
	<link rel="alternate" title="JSON" type="application/json" href="wp-json/wp/v2/pages/19.json" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />
	<meta name="generator" content="WordPress 6.7.1" />
	<link rel="canonical" href="index.html" />
	<link rel="shortlink" href="index.html" />
	<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
		href="wp-json/oembed/1.0/embed8377.json?url=https%3A%2F%2Fcoded.money%2F" />
	<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
		href="wp-json/oembed/1.0/embed21be?url=https%3A%2F%2Fcoded.money%2F&amp;format=xml" />
	<meta name="generator"
		content="Elementor 3.27.3; features: e_font_icon_svg, additional_custom_breakpoints, e_element_cache; settings: css_print_method-external, google_font-enabled, font_display-swap" />
	<style>
		.e-con.e-parent:nth-of-type(n + 4):not(.e-lazyloaded):not(.e-no-lazyload),
		.e-con.e-parent:nth-of-type(n + 4):not(.e-lazyloaded):not(.e-no-lazyload) * {
			background-image: none !important;
		}

		@media screen and (max-height: 1024px) {

			.e-con.e-parent:nth-of-type(n + 3):not(.e-lazyloaded):not(.e-no-lazyload),
			.e-con.e-parent:nth-of-type(n + 3):not(.e-lazyloaded):not(.e-no-lazyload) * {
				background-image: none !important;
			}
		}

		@media screen and (max-height: 640px) {

			.e-con.e-parent:nth-of-type(n + 2):not(.e-lazyloaded):not(.e-no-lazyload),
			.e-con.e-parent:nth-of-type(n + 2):not(.e-lazyloaded):not(.e-no-lazyload) * {
				background-image: none !important;
			}
		}
        .user-menu {
            width: 160px;
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
            align-items: left;
            flex-direction: column;
            position: absolute;
            right: 0px;
            background: white;
            padding: 10px 20px;
            border-radius: 15px;
            box-shadow: 0px 15px 35px -10px #5C6680;
            z-index: 1;
            gap: 10px;
            display: none;
        }
	</style>
	<link rel="icon" href="{{ asset('assets/wp-content/uploads/2024/12/icon-SVG.svg') }}" sizes="32x32" />
	<link rel="icon" href="{{ asset('assets/wp-content/uploads/2024/12/icon-SVG.svg') }}" sizes="192x192" />
	<link rel="apple-touch-icon" href="{{ asset('assets/wp-content/uploads/2024/12/icon-SVG.svg') }}" />
	<meta name="msapplication-TileImage" content="https://coded.money/wp-content/uploads/2024/12/icon-SVG.svg" />
</head>

<body class="home page-template page-template-elementor_header_footer page page-id-19 wp-embed-responsive ehf-header ehf-footer ehf-template-hello-elementor ehf-stylesheet-hello-elementor theme-default elementor-default elementor-template-full-width elementor-kit-9 elementor-page elementor-page-19">
	<div id="page" class="hfeed site">
		<header id="masthead" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
			<p class="main-title bhf-hidden" itemprop="headline">
				<a href="index.html" title="Coded.money" rel="home">Coded.money</a>
			</p>
			<div data-elementor-type="wp-post" data-elementor-id="10" class="elementor elementor-10">
				<section
					class="elementor-section elementor-top-section elementor-element elementor-element-61fb93b3 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
					data-id="61fb93b3" data-element_type="section" id="header_section"
					data-settings='{"background_background":"classic"}'>
					<div class="elementor-container elementor-column-gap-no">
						<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-704e5cd1"
							data-id="704e5cd1" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-420eef19 elementor-widget elementor-widget-image"
									data-id="420eef19" data-element_type="widget" data-widget_type="image.default">
									<div class="elementor-widget-container">
										<a href="index.html">
											<img fetchpriority="high" width="625" height="116"
												src="{{ asset('assets/wp-content/uploads/2024/12/logo_h.svg') }}"
												class="elementor-animation-shrink attachment-full size-full wp-image-193"
												alt="" />
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-47a2391c"
							data-id="47a2391c" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-716ed957 eael_simple_menu_hamburger_disable_selected_menu_hide eael-simple-menu-hamburger-align-left eael-hamburger--tablet elementor-widget elementor-widget-eael-simple-menu"
									data-id="716ed957" data-element_type="widget"
									data-widget_type="eael-simple-menu.default">
									<div class="elementor-widget-container">
										<style>
											@media screen and (max-width: 1024px) {
												.eael-hamburger--tablet {

													.eael-simple-menu-horizontal,
													.eael-simple-menu-vertical {
														display: none;
													}
												}

												.eael-hamburger--tablet {
													.eael-simple-menu-container .eael-simple-menu-toggle {
														display: block;
													}
												}
											}
										</style>
										<div data-hamburger-icon='&lt;svg aria-hidden="true" class="e-font-icon-svg e-fas-bars" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"&gt;&lt;path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"&gt;&lt;/path&gt;&lt;/svg&gt;'
											data-indicator-icon='&lt;svg aria-hidden="true" class="e-font-icon-svg e-fas-angle-down" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg"&gt;&lt;path d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"&gt;&lt;/path&gt;&lt;/svg&gt;'
											data-dropdown-indicator-icon='&lt;svg class="e-font-icon-svg e-fas-angle-down" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg"&gt;&lt;path d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"&gt;&lt;/path&gt;&lt;/svg&gt;'
											class="eael-simple-menu-container eael-simple-menu-align-center eael-simple-menu--stretch eael-simple-menu-dropdown-align-left preset-1"
											data-hamburger-breakpoints='{"mobile":"Mobile Portrait (&gt; 767px)","tablet":"Tablet Portrait (&gt; 1024px)","desktop":"Desktop (&gt; 2400px)","none":"None"}'
											data-hamburger-device="tablet">
											<ul id="menu-h"
												class="eael-simple-menu eael-simple-menu-dropdown-animate-zoom-in eael-simple-menu-indicator eael-hamburger-left eael-simple-menu-horizontal">
												<li id="menu-item-43"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-19 current_page_item menu-item-43">
													<a href="{{ route('home') }}" aria-current="page">Home</a>
												</li>
												<li id="menu-item-42"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42">
													<a href="{{ route('about') }}">About Us</a>
												</li>
												<li id="menu-item-41"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41">
													<a href="{{ route('contact') }}">Contact Us</a>
												</li>
											</ul>
											<button class="eael-simple-menu-toggle">
												<span class="sr-only">Hamburger Toggle Menu</span>
												<svg aria-hidden="true" class="e-font-icon-svg e-fas-bars"
													viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
													</path>
												</svg>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-155508ec"
							data-id="155508ec" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div style="position: relative" class="elementor-element elementor-element-1c3e7880 elementor-widget elementor-widget-eael-creative-button"
									data-id="1c3e7880" data-element_type="widget"
									data-widget_type="eael-creative-button.default">
									<div class="elementor-widget-container">
										<div class="eael-creative-button-wrapper">
											<a class="eael-creative-button eael-creative-button--moema"
												href="{{ route('exchange') }}" data-text="Exchange">
												<div class="creative-button-inner">
													<span class="cretive-button-text">Exchange</span>
												</div>
											</a>
                                            @auth
                                                <a class="eael-creative-button eael-creative-button--moema"
                                                    style="min-width: 50px; margin-left: 10px;"
                                                    href="javscript:void(0)" 
													onclick=" const menu = document.querySelector('.user-menu');
														// Use getComputedStyle to see if it's currently hidden in the browser
														const isHidden = window.getComputedStyle(menu).display === 'none';
														menu.style.display = isHidden ? 'flex' : 'none';
													">
                                                    <div class="creative-button-inner">
                                                        <span class="cretive-button-text"><i class="fas fa-user"></i></span>
                                                    </div>
                                                </a>
                                            @endauth
										</div>
									</div>
                                    @auth
                                        <div class="user-menu">
                                            <div style="color: #5C6680">
                                                <b>
                                                    {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                                                </b>
                                            </div>
                                            <hr>
                                            <a href="{{ route('profile') }}" style="color: #5C6680">Profile</a>
                                            <hr>
                                            <a href="{{ route('orders') }}" style="color: #5C6680">Orders</a>
                                            <hr>
                                            <a href="{{ route('logout') }}" style="color: orangered">Logout</a>
                                        </div>
                                    @endauth
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</header>

        @yield('content')

		<footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
			<div class="footer-width-fixer">
				<div data-elementor-type="wp-post" data-elementor-id="61" class="elementor elementor-61">
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-f0d2e86 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
						data-id="f0d2e86" data-element_type="section"
						data-settings='{"background_background":"classic"}'>
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d6543e5"
								data-id="d6543e5" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-9e94077 elementor-invisible elementor-widget elementor-widget-eael-cta-box"
										data-id="9e94077" data-element_type="widget"
										data-settings='{"_animation":"fadeInUp"}'
										data-widget_type="eael-cta-box.default">
										<div class="elementor-widget-container">
											<div class="eael-call-to-action cta-flex bg-lite cta-preset-1">
												<div class="content">
													<h4 class="sub-title">
														Buy or Sell Cryptocurrency in Just a Few Minutes!
													</h4>
													<h2 class="title">
														Join thousands of satisfied customers around the
														globe.
													</h2>
												</div>
												<div class="action">
													<a href="index.html" class="cta-button">Get Started</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-47c47336 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
						data-id="47c47336" data-element_type="section"
						data-settings='{"background_background":"classic"}'>
						<div class="elementor-background-overlay"></div>
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-25fe8c6"
								data-id="25fe8c6" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<section
										class="elementor-section elementor-inner-section elementor-element elementor-element-21278c65 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
										data-id="21278c65" data-element_type="section">
										<div class="elementor-container elementor-column-gap-default">
											<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-29ae2459 elementor-hidden-mobile"
												data-id="29ae2459" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-13fbfe3 elementor-align-left elementor-widget elementor-widget-button"
														data-id="13fbfe3" data-element_type="widget"
														data-widget_type="button.default">
														<div class="elementor-widget-container">
															<div class="elementor-button-wrapper">
																<a class="elementor-button elementor-button-link elementor-size-md elementor-animation-grow"
																	href="{{ route('exchange') }}">
																	<span class="elementor-button-content-wrapper">
																		<span
																			class="elementor-button-text">Exchange</span>
																	</span>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-68dfee20"
												data-id="68dfee20" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-7c820d9f animated-slow elementor-invisible elementor-widget elementor-widget-image"
														data-id="7c820d9f" data-element_type="widget"
														data-settings='{"_animation":"slideInUp"}'
														data-widget_type="image.default">
														<div class="elementor-widget-container">
															<img width="625" height="116"
																src="{{ asset('assets/wp-content/uploads/2024/12/logo_footer.svg') }}"
																class="attachment-full size-full wp-image-197" alt="" />
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-183769ff elementor-hidden-mobile"
												data-id="183769ff" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-5a79b96d elementor-align-right elementor-widget elementor-widget-button"
														data-id="5a79b96d" data-element_type="widget"
														data-widget_type="button.default">
														<div class="elementor-widget-container">
															<div class="elementor-button-wrapper">
																<a class="elementor-button elementor-button-link elementor-size-md elementor-animation-grow"
																	href="contact-us/index.html" target="_blank">
																	<span class="elementor-button-content-wrapper">
																		<span
																			class="elementor-button-text">contact</span>
																	</span>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<section
										class="elementor-section elementor-inner-section elementor-element elementor-element-73595752 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
										data-id="73595752" data-element_type="section">
										<div class="elementor-container elementor-column-gap-default">
											<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3d667f05"
												data-id="3d667f05" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-70a2e3fc elementor-icon-list--layout-inline elementor-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
														data-id="70a2e3fc" data-element_type="widget"
														data-widget_type="icon-list.default">
														<div class="elementor-widget-container">
															<ul
																class="elementor-icon-list-items elementor-inline-items">
																<li
																	class="elementor-icon-list-item elementor-inline-item">
																	<a href="{{ url('home') }}">
																		<span class="elementor-icon-list-text">Home</span>
																	</a>
																</li>
																<li
																	class="elementor-icon-list-item elementor-inline-item">
																	<a href="{{ url('faq') }}">
																		<span class="elementor-icon-list-text">FAQ</span>
																	</a>
																</li>
																<li
																	class="elementor-icon-list-item elementor-inline-item">
																	<a href="{{ url('privacy-policy') }}">
																		<span class="elementor-icon-list-text"> Privacy Policy </span>
																	</a>
																</li>
																<li
																	class="elementor-icon-list-item elementor-inline-item">
																	<a href="{{ url('terms-of-use') }}">
																		<span class="elementor-icon-list-text">Terms of Use</span>
																	</a>
																</li>
																<li
																	class="elementor-icon-list-item elementor-inline-item">
																	<a href="{{ url('disclaimer') }}">
																		<span class="elementor-icon-list-text">Disclaimer</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<section
										class="elementor-section elementor-inner-section elementor-element elementor-element-640ab247 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
										data-id="640ab247" data-element_type="section">
										<div class="elementor-container elementor-column-gap-default">
											<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-416ac755"
												data-id="416ac755" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-75babb7c eael-dual-header-content-align-left eael-dual-header-content-mobile-align-center elementor-widget elementor-widget-eael-dual-color-header"
														data-id="75babb7c" data-element_type="widget"
														data-widget_type="eael-dual-color-header.default">
														<div class="elementor-widget-container">
															<div class="eael-dual-header">
																<p class="title">
																	<span class="lead solid-color">© 2024 Coded Finance
																		Inc,</span>
																	<span>all right reserved.</span>
																</p>
																<span class="subtext"></span>
																<span class="eael-dch-svg-icon"></span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-146eacc0"
												data-id="146eacc0" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-2bf3d4e4 elementor-shape-circle e-grid-align-right e-grid-align-mobile-center elementor-grid-0 elementor-widget elementor-widget-social-icons"
														data-id="2bf3d4e4" data-element_type="widget"
														data-widget_type="social-icons.default">
														<div class="elementor-widget-container">
															<div class="elementor-social-icons-wrapper elementor-grid">
																<span class="elementor-grid-item">
																	<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-animation-shrink elementor-repeater-item-bd64314"
																		target="_blank">
																		<span
																			class="elementor-screen-only">Facebook-f</span>
																		<svg class="e-font-icon-svg e-fab-facebook-f"
																			viewBox="0 0 320 512"
																			xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
																			</path>
																		</svg>
																	</a>
																</span>
																<span class="elementor-grid-item">
																	<a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-animation-shrink elementor-repeater-item-dc64f9a"
																		href="http://twitter.com/" target="_blank">
																		<span
																			class="elementor-screen-only">Twitter</span>
																		<svg class="e-font-icon-svg e-fab-twitter"
																			viewBox="0 0 512 512"
																			xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
																			</path>
																		</svg>
																	</a>
																</span>
																<span class="elementor-grid-item">
																	<a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-animation-shrink elementor-repeater-item-a228758"
																		href="http://instagram.com/" target="_blank">
																		<span
																			class="elementor-screen-only">Instagram</span>
																		<svg class="e-font-icon-svg e-fab-instagram"
																			viewBox="0 0 448 512"
																			xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
																			</path>
																		</svg>
																	</a>
																</span>
																<span class="elementor-grid-item">
																	<a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-animation-shrink elementor-repeater-item-43e9328"
																		href="http://linkedin.com/" target="_blank">
																		<span
																			class="elementor-screen-only">Linkedin</span>
																		<svg class="e-font-icon-svg e-fab-linkedin"
																			viewBox="0 0 448 512"
																			xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
																			</path>
																		</svg>
																	</a>
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</footer>
	</div>
	<!-- #page -->
	<script>
		const lazyloadRunObserver = () => {
			const lazyloadBackgrounds = document.querySelectorAll(
				`.e-con.e-parent:not(.e-lazyloaded)`
			);
			const lazyloadBackgroundObserver = new IntersectionObserver(
				(entries) => {
					entries.forEach((entry) => {
						if (entry.isIntersecting) {
							let lazyloadBackground = entry.target;
							if (lazyloadBackground) {
								lazyloadBackground.classList.add("e-lazyloaded");
							}
							lazyloadBackgroundObserver.unobserve(entry.target);
						}
					});
				},
				{ rootMargin: "200px 0px 200px 0px" }
			);
			lazyloadBackgrounds.forEach((lazyloadBackground) => {
				lazyloadBackgroundObserver.observe(lazyloadBackground);
			});
		};
		const events = ["DOMContentLoaded", "elementor/lazyload/observe"];
		events.forEach((event) => {
			document.addEventListener(event, lazyloadRunObserver);
		});
	</script>
	<link rel="stylesheet" id="e-animation-shrink-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-shrink.mine689.css') }}?ver=3.27.3"
		media="all" />
	<link rel="stylesheet" id="elementor-icons-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.minf25c.css') }}?ver=5.35.0" media="all" />
	<link rel="stylesheet" id="fluentform-elementor-widget-css"
		href="{{ asset('assets/wp-content/plugins/fluentform/assets/css/fluent-forms-elementor-widget251f.css') }}?ver=5.2.10" media="all" />
	<link rel="stylesheet" id="e-animation-grow-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-grow.mine689.css') }}?ver=3.27.3"
		media="all" />
	<link rel="stylesheet" id="e-animation-slideInUp-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/animations/styles/slideInUp.mine689.css') }}?ver=3.27.3" media="all" />
	<link rel="stylesheet" id="widget-icon-list-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/css/widget-icon-list.mine689.css') }}?ver=3.27.3" media="all" />
	<link rel="stylesheet" id="widget-social-icons-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/css/widget-social-icons.mine689.css') }}?ver=3.27.3" media="all" />
	<link rel="stylesheet" id="e-apple-webkit-css"
		href="{{ asset('assets/wp-content/plugins/elementor/assets/css/conditionals/apple-webkit.mine689.css') }}?ver=3.27.3" media="all" />
	<script id="eael-general-js-extra">
		var localize = {
			ajaxurl: "https:\/\/coded.money\/wp-admin\/admin-ajax.php",
			nonce: "5b32c9af49",
			i18n: { added: "Added ", compare: "Compare", loading: "Loading..." },
			eael_translate_text: {
				required_text: "is a required field",
				invalid_text: "Invalid",
				billing_text: "Billing",
				shipping_text: "Shipping",
				fg_mfp_counter_text: "of",
			},
			page_permalink: "https:\/\/coded.money\/",
			cart_redirectition: "",
			cart_page_url: "",
			el_breakpoints: {
				mobile: {
					label: "Mobile Portrait",
					value: 767,
					default_value: 767,
					direction: "max",
					is_enabled: true,
				},
				mobile_extra: {
					label: "Mobile Landscape",
					value: 880,
					default_value: 880,
					direction: "max",
					is_enabled: false,
				},
				tablet: {
					label: "Tablet Portrait",
					value: 1024,
					default_value: 1024,
					direction: "max",
					is_enabled: true,
				},
				tablet_extra: {
					label: "Tablet Landscape",
					value: 1200,
					default_value: 1200,
					direction: "max",
					is_enabled: false,
				},
				laptop: {
					label: "Laptop",
					value: 1366,
					default_value: 1366,
					direction: "max",
					is_enabled: false,
				},
				widescreen: {
					label: "Widescreen",
					value: 2400,
					default_value: 2400,
					direction: "min",
					is_enabled: false,
				},
			},
		};
	</script>
	<script
		src="{{ asset('assets/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/js/view/general.min6a4d.js') }}?ver=6.1.1"
		id="eael-general-js"></script>
	<script src="{{ asset('assets/wp-content/uploads/essential-addons-elementor/eael-19244c.js') }}?ver=1734338070" id="eael-19-js"></script>
	<script src="{{ asset('assets/wp-content/uploads/essential-addons-elementor/eael-10244c.js') }}?ver=1734338070" id="eael-10-js"></script>
	<script src="{{ asset('assets/wp-content/uploads/essential-addons-elementor/eael-61244c.js') }}?ver=1734338070" id="eael-61-js"></script>
	<script src="{{ asset('assets/wp-content/themes/hello-elementor/assets/js/hello-frontend.min9b70.js') }}?ver=3.3.0"
		id="hello-theme-frontend-js"></script>
	<script src="{{ asset('assets/wp-content/plugins/elementor/assets/js/webpack.runtime.mine689.js') }}?ver=3.27.3"
		id="elementor-webpack-runtime-js"></script>
	<script src="{{ asset('assets/wp-content/plugins/elementor/assets/js/frontend-modules.mine689.js') }}?ver=3.27.3"
		id="elementor-frontend-modules-js"></script>
	<script src="{{ asset('assets/wp-includes/js/jquery/ui/core.minb37e.js') }}?ver=1.13.3" id="jquery-ui-core-js"></script>
	<script id="elementor-frontend-js-before">
		var elementorFrontendConfig = {
			environmentMode: {
				edit: false,
				wpPreview: false,
				isScriptDebug: false,
			},
			i18n: {
				shareOnFacebook: "Share on Facebook",
				shareOnTwitter: "Share on Twitter",
				pinIt: "Pin it",
				download: "Download",
				downloadImage: "Download image",
				fullscreen: "Fullscreen",
				zoom: "Zoom",
				share: "Share",
				playVideo: "Play Video",
				previous: "Previous",
				next: "Next",
				close: "Close",
				a11yCarouselPrevSlideMessage: "Previous slide",
				a11yCarouselNextSlideMessage: "Next slide",
				a11yCarouselFirstSlideMessage: "This is the first slide",
				a11yCarouselLastSlideMessage: "This is the last slide",
				a11yCarouselPaginationBulletMessage: "Go to slide",
			},
			is_rtl: false,
			breakpoints: { xs: 0, sm: 480, md: 768, lg: 1025, xl: 1440, xxl: 1600 },
			responsive: {
				breakpoints: {
					mobile: {
						label: "Mobile Portrait",
						value: 767,
						default_value: 767,
						direction: "max",
						is_enabled: true,
					},
					mobile_extra: {
						label: "Mobile Landscape",
						value: 880,
						default_value: 880,
						direction: "max",
						is_enabled: false,
					},
					tablet: {
						label: "Tablet Portrait",
						value: 1024,
						default_value: 1024,
						direction: "max",
						is_enabled: true,
					},
					tablet_extra: {
						label: "Tablet Landscape",
						value: 1200,
						default_value: 1200,
						direction: "max",
						is_enabled: false,
					},
					laptop: {
						label: "Laptop",
						value: 1366,
						default_value: 1366,
						direction: "max",
						is_enabled: false,
					},
					widescreen: {
						label: "Widescreen",
						value: 2400,
						default_value: 2400,
						direction: "min",
						is_enabled: false,
					},
				},
				hasCustomBreakpoints: false,
			},
			version: "3.27.3",
			is_static: false,
			experimentalFeatures: {
				e_font_icon_svg: true,
				additional_custom_breakpoints: true,
				container: true,
				e_swiper_latest: true,
				e_onboarding: true,
				"hello-theme-header-footer": true,
				home_screen: true,
				"nested-elements": true,
				editor_v2: true,
				e_element_cache: true,
				"link-in-bio": true,
				"floating-buttons": true,
				"launchpad-checklist": true,
			},
			urls: {
				assets:
					"https:\/\/coded.money\/wp-content\/plugins\/elementor\/assets\/",
				ajaxurl: "https:\/\/coded.money\/wp-admin\/admin-ajax.php",
				uploadUrl: "https:\/\/coded.money\/wp-content\/uploads",
			},
			nonces: { floatingButtonsClickTracking: "a8aaaab9c7" },
			swiperClass: "swiper",
			settings: { page: [], editorPreferences: [] },
			kit: {
				active_breakpoints: ["viewport_mobile", "viewport_tablet"],
				global_image_lightbox: "yes",
				lightbox_enable_counter: "yes",
				lightbox_enable_fullscreen: "yes",
				lightbox_enable_zoom: "yes",
				lightbox_enable_share: "yes",
				lightbox_title_src: "title",
				lightbox_description_src: "description",
				hello_header_logo_type: "title",
				hello_header_menu_layout: "horizontal",
				hello_footer_logo_type: "logo",
			},
			post: {
				id: 19,
				title: "Coded.money",
				excerpt: "",
				featuredImage: false,
			},
		};
	</script>
	<script src="{{ asset('assets/wp-content/plugins/elementor/assets/js/frontend.mine689.js') }}?ver=3.27.3"
		id="elementor-frontend-js"></script>
	<script>
		"undefined" === typeof _trfq || (window._trfq = []);
		"undefined" === typeof _trfd && (window._trfd = []),
			_trfd.push({ "tccl.baseHost": "secureserver.net" }),
			_trfd.push(
				{ ap: "wpaas" },
				{ server: "b54cbf8f-56a7-3da8-68a5-8a1f09e6c2c1.secureserver.net" },
				{ pod: "P3NLWPPOD10" },
				{ storage: "p3cephmah004pod10_data19" },
				{ xid: "45673950" },
				{ wp: "6.7.1" },
				{ php: "8.0.30.4" },
				{ loggedin: "0" },
				{ cdn: "1" },
				{ builder: "elementor" },
				{ theme: "hello-elementor" },
				{ wds: "0" },
				{ wp_alloptions_count: "214" },
				{ wp_alloptions_bytes: "48348" },
				{ gdl_coming_soon_page: "0" }
			);
		// var trafficScript = document.createElement("script");
		// trafficScript.src =
		// 	"../img1.wsimg.com/signals/js/clients/scc-c2/scc-c2.min.js";
		// window.document.head.appendChild(trafficScript);
	</script>
	<script>
		window.addEventListener("click", function (elem) {
			var _elem$target, _elem$target$dataset, _window, _window$_trfq;
			return (
				(elem === null || elem === void 0
					? void 0
					: (_elem$target = elem.target) === null || _elem$target === void 0
						? void 0
						: (_elem$target$dataset = _elem$target.dataset) === null ||
							_elem$target$dataset === void 0
							? void 0
							: _elem$target$dataset.eid) &&
				((_window = window) === null || _window === void 0
					? void 0
					: (_window$_trfq = _window._trfq) === null ||
						_window$_trfq === void 0
						? void 0
						: _window$_trfq.push([
							"cmdLogEvent",
							"click",
							elem.target.dataset.eid,
						]))
			);
		});
	</script>
	{{-- <script src="{{ asset('assets/../img1.wsimg.com/signals/js/clients/tti/tti.min.js') }}" onload="window.tti.calculateTTI()"></script> --}}
</body>

<!-- Mirrored from coded.money/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Feb 2025 06:37:49 GMT -->

</html>
